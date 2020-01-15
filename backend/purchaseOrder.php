<?php
include_once ('Connection.php');
class PurchaseOrder
{
    public $orderId;
    public $pOrderDetailsId;
    public $orderRef;
    public $orderQty;
    public $orderDescription;
    public $orderStatus;
    public $orderCategory;
    public $orderCategoryName;
    public $orderDate;

    /*add purchase order details to database*/
    public function add_purchase_order(){
        $conn=(new Connection())->get_db();
        $count=0;

        /*send data to purchase_order table*/
        $sql="INSERT INTO purchase_order(reference_no, order_date, status) 
              VALUES ('$this->orderRef','$this->orderDate','Pending')";
        $result2=$conn->query($sql);

        /*send purchase order id*/
        $lastId=$conn->insert_id;

        foreach ($_POST['cNameArr'] as $item)
        {
            /*send data to purchase_order_details table*/
            $sql2="INSERT INTO purchase_order_details(order_qty, description,p_order_id,product_c_id) 
                   VALUES ('".$this->orderQty[$count]."','".$this->orderDescription[$count]."','".$lastId."','".$this->orderCategory[$count]."')";
            $count++;
            $result1=$conn->query($sql2);

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
        $sql="SELECT * FROM purchase_order WHERE status='pending'";
        $getOrder=$conn->query($sql);

        while($row=$getOrder->fetch_array()){
            $order=new PurchaseOrder();
            $order->orderRef=$row["reference_no"];
            $order->orderDate=$row["order_date"];
            $order->orderStatus=$row["status"];
            $orderArray[]=$order;
        }
        if(!empty($orderArray)){
            return $orderArray;
        }

    }

    /*get category details which relevant to the ref no by id*/
    public function get_order_details($rn){
        $conn=(new Connection())->get_db();

        $sql1="SELECT  pd.*,po.*,product_category.category_name FROM purchase_order_details pd 
                JOIN product_category on pd.product_c_id = product_category.product_c_id 
                 JOIN purchase_order po on po.p_order_id = pd.p_order_id 
                 WHERE reference_no='$rn'";

        $getCName=$conn->query($sql1);

        while($row=$getCName->fetch_array()){

            $getCatName=new PurchaseOrder();
            $getCatName->orderId=$row["p_order_id"];
            $getCatName->orderDescription=$row["description"];
            $getCatName->orderRef=$row["reference_no"];
            $getCatName->orderStatus=$row["status"];
            $getCatName->orderQty=$row["order_qty"];
            $getCatName->orderDate=$row["order_date"];
            $getCatName->orderCategory=$row["product_c_id"];
            $getCatName->orderCategoryName=$row["category_name"];
            $getCNameArr[]=$getCatName;
        }
        return $getCNameArr;
    }
    /*cancel purchase order*/
    public function deleteOrder($rn){
        $conn=(new Connection())->get_db();
        $sql="UPDATE purchase_order SET status='Canceled' WHERE reference_no=$rn";

        $cancel=$conn->query($sql);

    }
    /*approve purchase order*/
    public function update_approve(){
        $conn=(new Connection())->get_db();
        $sql="UPDATE purchase_order SET status='Approved' WHERE reference_no=$this->orderRef";

        $approve=$conn->query($sql);
    }

}