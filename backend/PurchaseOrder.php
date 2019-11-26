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
    //public $count;

/*add purchase order details to database*/
    public function add_purchase_order(){

        $conn=(new Connection())->get_db();

        $count=0;
        /*send data to purchase_order table*/
        $sql="INSERT INTO purchase_order(reference_no, order_date, status) VALUES ('$this->orderRef','$this->orderDate','Pending')";

        $result2=$conn->query($sql);

        /*getting last puchase order id*/
        $lastId=$conn->insert_id;

        foreach ($_POST['cNameArr'] as $item)
        {
            /*send data to purchase_order_details table*/
            $sql2="INSERT INTO purchase_order_details(order_qty, description,p_order_id,product_c_id) VALUES ('".$this->orderQty[$count]."','".$this->orderDescription[$count]."','".$lastId."','".$this->orderCategory[$count]."')";

            $count++;

            $result1=$conn->query($sql2);
            echo $sql2;

        }

        if($result2){
            return true;
        }else{
            return false;
        }
    }

    /*get main information of purchase orders*/

    public function get_order(){
        $conn=(new Connection())->get_db();

        $sql="SELECT * FROM purchase_order";

        $getOrder=$conn->query($sql);

        while($row=$getOrder->fetch_array()){
            $order=new purchaseOrder();
            $order->orderRef=$row["reference_no"];
            $order->orderDate=$row["order_date"];
            $order->orderStatus=$row["status"];

            $orderArray[]=$order;
        }
        return $orderArray;
    }

    /*get details of purchase orders*/
    public function get_order_details(){
        $conn=(new Connection())->get_db();

        $sql="SELECT purchase_order.reference_no,purchase_order_details.* FROM purchase_order_details RIGHT JOIN purchase_order on purchase_order_details.p_order_id = purchase_order.p_order_id";

        $getDetails=$conn->query($sql);

        while($row=$getDetails->fetch_array()){
            $orderDetails=new purchaseOrder();
            $orderDetails->orderDescription=$row["description"];
            $orderDetails->orderRef=$row["reference_no"];
            $orderDetails->orderStatus=$row["status"];
            $orderDetails->orderQty=$row["qty"];
            $orderDetails->orderDate=$row["order_date"];
            $orderDetails->orderCategory=$row["product_c_id"];

            $orderDetailArray[]=$orderDetails;
        }
        return $orderDetailArray;
    }
}