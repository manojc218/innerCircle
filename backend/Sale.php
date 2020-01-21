<?php
include_once ("Connection.php");
include_once ("User.php");
include_once ("Product.php");

class Sale
{
    public $saleId;
    public $saleItemId;
    public $saleDate;
    public $workingId;
    public $productCId;
    public $productCName;
    public $saleSNum;
    public $sPoints;

    public function add_sale(){
        $conn=(new Connection())->get_db();
        $count=0;

        $uIdSql="SELECT * FROM user_profile WHERE working_id='$this->workingId'";
        $getUId=$conn->query($uIdSql);

        $guyId=$getUId->fetch_array();
        $guyId=$guyId['user_id'];

        $sql="INSERT INTO sale (sale_date,user_id) VALUES ('$this->saleDate','$guyId')";


        $addSale=$conn->query($sql);


        $sId=$conn->insert_id;

        foreach ($_POST['saleSNum'] as $item){

            /*get product id for relevant serial number*/
            $productSNum="SELECT * FROM product WHERE serial_number=".$this->saleSNum[$count];

            /*echo $productSNum;*/

            $getPrId=$conn->query($productSNum);
            $prId=$getPrId->fetch_array();


            /*print_r($prId);
            exit();*/
            $prId=$prId['product_id'];



            /*get product category id for relevant serial number*/
            $sql4="SELECT * FROM product_category
                           JOIN product on product_category.product_c_id = product.product_c_id 
                           WHERE serial_number=".$this->saleSNum[$count];

            $getPrCId=$conn->query($sql4);
            $prCId=$getPrCId->fetch_array();
            $prCId=$prCId['product_c_id'];


            /*Send data to the sales item table*/
            $sql2="INSERT INTO sale_items (sale_id,product_id,product_c_id) VALUES ('$sId','$prId','$prCId')";
            echo $sql2;
            echo $prId;
            echo $prCId;

            /*update status of the product table for relevant product, after sale.*/
            $sql3="UPDATE product SET status='sold' WHERE product_id=$prId";
            $count++;

            $addSaleDetails=$conn->query($sql2);
            $updatePStatus=$conn->query($sql3);

        }
        if($sql){
            return true;
        }else{
            return false;
        }

    }
    /*functions for getting sales*/
    public function get_all_sales_details(){
        $conn=(new Connection())->get_db();

        /*sql for counting sales according to the product category*/
        $sql="SELECT user_profile.first_name,user_profile.last_name,sale.sale_date,
                COUNT(CASE
                            WHEN sale_items.product_c_id='2'
                            THEN sale_items.product_id
                            ELSE null
                      END 
                ) AS 'simCard',
                COUNT(CASE
                             WHEN sale_items.product_c_id='3'
                             THEN sale_items.product_id
                             ELSE null
                      END
                ) AS '4gRouter',
                COUNT(CASE
                            WHEN sale_items.product_c_id='4'
                            THEN sale_items.product_id
                            ELSE null
                      END
                ) AS 'dtv', SUM(product_category.points) AS 'points'
              FROM sale JOIN user_profile on sale.user_id = user_profile.user_id
              JOIN sale_items on sale.sale_id = sale_items.sale_id
              JOIN product_category on sale_items.product_c_id = product_category.product_c_id
              GROUP BY sale.sale_id ORDER BY sale.sale_id DESC";

        $saleList=$conn->query($sql);

        while ($row=$saleList->fetch_array()){
            $newSaleList= new Sale();
            $newSaleList->guyName=$row['first_name']." ".$row['last_name'];
            $newSaleList->simCard=$row['simCard'];
            $newSaleList->router=$row['4gRouter'];
            $newSaleList->dtv=$row['dtv'];
            $newSaleList->sPoints=$row['points'];
            $newSaleList->saleDate=$row['sale_date'];

            $saleListArray[]=$newSaleList;
        }
        return $saleListArray;
    }

    public function get_sum_of_sold_sims(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_id') AS sSim FROM sale_items WHERE product_c_id=2";

        $getSoldSim=$conn->query($sql);

        $row=$getSoldSim->fetch_array();

        return $row['sSim'];
    }

    public function get_sum_of_sold_router(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_id') AS sr FROM sale_items WHERE product_c_id=3";

        $getSoldRouter=$conn->query($sql);

        $row=$getSoldRouter->fetch_array();

        return $row['sr'];
    }

    public function get_sum_of_sold_dtv(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_id') AS sdtv FROM sale_items WHERE product_c_id=4";

        $getSoldDtv=$conn->query($sql);

        $row=$getSoldDtv->fetch_array();

        return $row['sdtv'];
    }
}
?>