<?php
include_once ('Connection.php');

class Distribute
{
    public $distributeId;
    public $distributeDate;
    public $workingId;
    public $productSNum;
    public $productCName;
    public $productCId;
    public $userId;
    public $saleSNum;
    public $managerName;

    /*function for insert data to the distribute table*/
    public function addDistribute(){
        $conn=(new Connection())->get_db();
        $count=0;
        /*getting manager details*/
        $uIdSql="SELECT * FROM user_profile WHERE working_id='$this->workingId'";
        $getUserDetails=$conn->query($uIdSql);

        $managerId=$getUserDetails->fetch_array();
        $managerId=$managerId['user_id'];

        /*insert data into distribute table*/
        $sql="INSERT INTO distribute (distribute_date, user_id) VALUES ('$this->distributeDate',$managerId)";

        $addDistribute=$conn->query($sql);

        $dId=$conn->insert_id;

        foreach ($_POST['sNum'] as $item){

            /*get product id for relevant serial number*/
            $productSNum="SELECT * FROM product WHERE serial_number='".$this->saleSNum[$count]."'";
            $getPrId=$conn->query($productSNum);
            $prId=$getPrId->fetch_array();
            $prId=$prId['product_id'];

            /*get product category id for relevant serial number*/
            $productCName="SELECT * FROM product_category 
                           JOIN product on product_category.product_c_id = product.product_c_id 
                           WHERE serial_number='".$this->saleSNum[$count]."'";
            $getPrCId=$conn->query($productCName);
            $prCId=$getPrCId->fetch_array();
            $prCId=$prCId['product_c_id'];

            /*send data to the distribute items table*/
            $sql2="INSERT INTO distribute_item (distribute_id, product_id, product_c_id) VALUES ($dId,$prId,$prCId)";

            /*update description of the product table*/
            $sql3="UPDATE product SET user_id=$managerId WHERE product_id=$prId";
            $count++;
            $addDistributeDetails=$conn->query($sql2);
            $updatePUserId=$conn->query($sql3);
        }

        if ($addDistribute){
            return true;
        }else{
            return false;
        }

    }
    /*get distribution information*/
    public function get_all_distribution_details(){
        $conn=(new Connection())->get_db();
        $sql="SELECT user_profile.first_name,user_profile.last_name,distribute.distribute_date,
                COUNT(CASE
                            WHEN distribute_item.product_c_id='2'
                            THEN distribute_item.product_id
                            ELSE null
                      END 
                ) AS 'simCard',
                COUNT(CASE
                             WHEN distribute_item.product_c_id='3'
                             THEN distribute_item.product_id
                             ELSE null
                      END
                ) AS '4gRouter',
                COUNT(CASE
                            WHEN distribute_item.product_c_id='4'
                            THEN distribute_item.product_id
                            ELSE null
                      END
                ) AS 'dtv' 
              FROM distribute JOIN user_profile on distribute.user_id = user_profile.user_id
              JOIN distribute_item on distribute.distribute_id = distribute_item.distribute_id
              GROUP BY distribute.distribute_id ORDER BY distribute.distribute_id DESC";

        $distributionList=$conn->query($sql);

        while($row=$distributionList->fetch_array()){
            $newDistributionList= new Distribute();
            $newDistributionList->managerName=$row['first_name']." ".$row['last_name'];
            $newDistributionList->distributeDate=$row['distribute_date'];
            $newDistributionList->simCard=$row['simCard'];
            $newDistributionList->router=$row['4gRouter'];
            $newDistributionList->dtv=$row['dtv'];

            $distributionListArr[]=$newDistributionList;
        }
        return $distributionListArr;
    }
}