<?php

class Sale
{
    public $saleId;
    public $saleItemId;
    public $saleDate;
    public $userId;
    public $productCId;

    public function add_sale(){
        $conn=(new Connection())->get_db();
        $count=0;

        $sql="INSERT INTO sale (sale_date,user_id) VALUES ('$this->saleDate','$this->userId')";

        $addSale=$conn->query($sql);


        $sId=$conn->insert_id;

        foreach ($_POST['saleSNum'] as $item){
            $sql2="INSERT INTO sale_items (product_id,sale_id) VALUES ('$this->productCId','$sId')";
            $count++;

            $addSaleDetails=$conn->query($sql2);
        }

        if($addSale){
            return true;
        }else{
            return false;
        }
    }
}

?>