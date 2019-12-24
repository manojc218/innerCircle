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
    public $receivedQty;
    public $receivedDate;
    public $unitPrice;
    public $sellPrice;
    public $subTotal;
    public $totCost;
    public $grnId;

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
                $acptOrder->pOrderId=$row["p_order_id"];
                $acptOrderArray[]=$acptOrder;
            }
            return $acptOrderArray;
        }
    public function add_grn()
    {
        $conn=(new Connection())->get_db();
        $count=0;

        $sql1="INSERT INTO grn (tot_cost,p_order_id) VALUES ('$this->totCost','$this->pOrderId')";

        $result1=$conn->query($sql1);



        /*send grn id*/
        $lastId=$conn->insert_id;

        foreach ($_POST['grnCatName'] as $item)
        {
            $sql2="INSERT INTO grn_item(received_qty, unit_price, sell_price, sub_total, grn_id) VALUES ('".$this->receivedQty[$count]."','".$this->unitPrice[$count]."','".$this->sellPrice[$count]."','".$this->subTotal[$count]."','$lastId')";
            $sql3="UPDATE purchase_order SET status='Completed' WHERE p_order_id='$this->pOrderId'";
            $count++;
            $result2=$conn->query($sql2);
            $result3=$conn->query($sql3);


        }if($result2 & $result3){
            return true;
        }else{
            return false;
        }
    }

    public function getGRN()
    {
        $conn=(new Connection())->get_db();
        $sql="SELECT purchase_order.reference_no,purchase_order.order_date,grn.received_date,grn.tot_cost FROM grn,purchase_order WHERE status='Completed'";
        /*echo $sql;
        exit();*/
        $getGRN=$conn->query($sql);

        while ($row=$getGRN->fetch_array()){
            $grn=new grn();
            $grn->orderRef=$row["reference_no"];
            $grn->orderDate=$row["order_date"];
            $grn->receivedDate=$row["received_date"];
            /*$grn->orderStatus=$row["status"];*/
            $grn->totCost=$row["tot_cost"];
            $grnArray[]=$grn;
        }
        return $grnArray;
    }

    public function deleteRow(){

    }


}