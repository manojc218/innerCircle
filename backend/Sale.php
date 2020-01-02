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

            $sql2="INSERT INTO sale_items (product_id,sale_id) VALUES ('$prId','$sId')";
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
}

?>