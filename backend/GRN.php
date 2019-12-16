<?php
include_once ('Connection.php');

class GRN
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
    public $receivedDate;

    /*get accepted purchase orders*/

    public function add_accepted_order(){
            $conn=(new Connection())->get_db();
            $sql="SELECT * FROM purchase_order WHERE status='Accepted'";
            $acceptOrder=$conn->query($sql);
            while($row=$acceptOrder->fetch_array()){
                $acptOrder=new GRN();
                $acptOrder->orderRef=$row["reference_no"];
                $acptOrder->orderDate=$row["order_date"];
                $acptOrder->orderStatus=$row["status"];
                $acptOrderArray[]=$acptOrder;
            }
            return $acptOrderArray;
        }

}