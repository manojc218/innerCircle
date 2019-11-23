<?php
include_once ('Connection.php');

class purchaseOrder
{
    public $orderId;
    public $pOrderDetailsId;
    public $orderRef;
    public $orderQty;
    public $orderDescription;
    public $orderStatus;
    public $orderCategory;
    public $orderDate;

/*add purchase order details to database*/
    public function add_purchase_order(){

        $conn=(new Connection())->get_db();

        $count=0;
        /*send data to purchase_order table*/
        $sql="INSERT INTO purchase_order(reference_no, order_date, status) VALUES ('$this->orderRef','$this->orderDate',0)";

        foreach ($_POST['cNameArr'] as $item)
        {
            /*send data to purchase_order_details table*/
            $sql2="INSERT INTO purchase_order_details(order_qty, description,p_order_id,product_c_id) VALUES ('$this->orderQty.$count','$this->orderDescription.$count','$this->orderId','$this->orderCategory')";
            $count++;

            $result1=$conn->query($sql2);
            echo $sql2;
            exit();

            if($result1){
                return true;
            }else{
                return false;
            }
        }
        $result2=$conn->query($sql);



        if($result2){
            return true;
        }else{
            return false;
        }




    }
}