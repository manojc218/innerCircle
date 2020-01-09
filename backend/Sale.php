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


            /*Send data to the sales item table*/
            $sql2="INSERT INTO sale_items (product_c_id,product_id,sale_id) VALUES ('$prCId','$prId','$sId')";

            /*update status of the product table for relevant product, after sale.*/
            $sql3="UPDATE product SET status='sold' WHERE product_id=$prId";
            $count++;

            $addSaleDetails=$conn->query($sql2);
            $updatePStatus=$conn->query($sql3);

        }

        if($addSale){
            return true;
        }else{
            return false;
        }
    }
/*functions for getting sales*/
    public function getSales(){
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
                ) AS 'dtv' 
              FROM sale JOIN user_profile on sale.user_id = user_profile.user_id
              JOIN sale_items on sale.sale_id = sale_items.sale_id
              GROUP BY sale.sale_id ORDER BY sale.sale_id DESC";




        $saleList=$conn->query($sql);

        while ($row=$saleList->fetch_array()){
            $newSaleList= new Sale();
            $newSaleList->guyName=$row['first_name']." ".$row['last_name'];
            $newSaleList->simCard=$row['simCard'];
            $newSaleList->router=$row['4gRouter'];
            $newSaleList->dtv=$row['dtv'];
            $newSaleList->saleDate=$row['sale_date'];

            $saleListArray[]=$newSaleList;
        }
        return $saleListArray;
    }
}
?>