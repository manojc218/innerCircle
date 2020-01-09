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

    public function addDistribute(){
        $conn=(new Connection())->get_db();
        $count=0;
        /*getting manager details*/
        $uIdSql="SELECT * FROM user_profile WHERE working_id=$this->workingId";
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

            $addDistributeDetails=$conn->query($sql2);
            $updatePUserId=$conn->query($sql3);
        }

        if ($addDistribute){
            return true;
        }else{
            return false;
        }

    }
}