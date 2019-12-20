<?php
include_once ('Connection.php');

class GRN
{
    public $pOrderId;
    public $pOrderDetailsId;
    public $orderRef;
    public $orderQty;
    public $orderDescription;
    public $orderStatus;
    public $orderCategory;
    public $orderCategoryName;
    public $orderDate;
    public $receivedDate;
    public $totCost;

    /*get accepted purchase orders*/

    public function add_accepted_order()
        {
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
    public function add_grn()
    {
        $conn=(new Connection())->get_db();
        $sql="INSERT INTO grn (tot_cost,p_order_id) VALUES ('$this->totCost','$this->pOrderId')";

        $result1=$conn->query($sql);

        /*send grn id*/
        $lastId=$conn->insert_id;


    }


}