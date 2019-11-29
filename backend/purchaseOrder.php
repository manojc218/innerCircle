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
    //public $count;
    /*add purchase order details to database*/
    public function add_purchase_order(){
        $conn=(new Connection())->get_db();
        $count=0;

        /*send data to purchase_order table*/
        $sql="INSERT INTO purchase_order(reference_no, order_date, status) VALUES ('$this->orderRef','$this->orderDate','Pending')";
        $result2=$conn->query($sql);

        /*send purchase order id*/
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
            $order=new PurchaseOrder();
            $order->orderRef=$row["reference_no"];
            $order->orderDate=$row["order_date"];
            $order->orderStatus=$row["status"];
            $orderArray[]=$order;
        }
        return $orderArray;
    }

    /*get category details which relevant to the ref no by id*/
    public function get_category_details($rn){
        $conn=(new Connection())->get_db();

        $sql1="SELECT  pd.*,po.*,product_category.category_name FROM purchase_order_details pd 
                LEFT JOIN product_category on pd.product_c_id = product_category.product_c_id 
                 JOIN purchase_order po on po.p_order_id = pd.p_order_id 
                 WHERE reference_no='$rn'";

        $getCName=$conn->query($sql1);

        while($row=$getCName->fetch_array()){

            $getCatName=new PurchaseOrder();
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

    /*add GRN*/

    public function GRN(){
        $conn=(new Connection())->get_db();

    }
}
