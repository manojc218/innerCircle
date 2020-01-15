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

    public function get_accepted_order()
        {
            $conn=(new Connection())->get_db();
            $sql="SELECT * FROM purchase_order WHERE status='Approved'";
            $acceptOrder=$conn->query($sql);

            while($row=$acceptOrder->fetch_array()){
                $acptOrder=new GRN();
                $acptOrder->orderRef=$row["reference_no"];
                $acptOrder->orderDate=$row["order_date"];
                $acptOrder->orderStatus=$row["status"];
                $acptOrder->pOrderId=$row["p_order_id"];

                $acptOrderArray[]=$acptOrder;
            }
                if(!empty($acptOrderArray))
                    return $acptOrderArray;
            }

    public function add_grn()
    {
        $conn=(new Connection())->get_db();
        $count=0;

        $sql1="INSERT INTO grn (received_date,tot_cost,p_order_id) VALUES ('$this->receivedDate','$this->totCost','$this->pOrderId')";

        $result1=$conn->query($sql1);



        /*send grn id*/
        $lastId=$conn->insert_id;

        foreach ($_POST['grnCatName'] as $item)
        {
            $sql2="INSERT INTO grn_item(received_qty, unit_price, sell_price, sub_total,product_c_id,grn_id)
                   VALUES ('".$this->receivedQty[$count]."','".$this->unitPrice[$count]."','".$this->sellPrice[$count]."','".$this->subTotal[$count]."',".$this->orderCategory[$count].",'$lastId')";
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
        $conn = (new Connection())->get_db();

        $sql = "SELECT purchase_order.reference_no,purchase_order.order_date,grn.received_date,grn.tot_cost 
                FROM grn 
                JOIN purchase_order on grn.p_order_id = purchase_order.p_order_id 
                WHERE status='Completed'";

        $getGRN = $conn->query($sql);

        while ($row = $getGRN->fetch_array()) {
            $grn = new GRN();
            $grn->orderRef = $row["reference_no"];
            $grn->orderDate = $row["order_date"];
            $grn->receivedDate = $row["received_date"];
            /*$grn->orderStatus=$row["status"];*/
            $grn->totCost = $row["tot_cost"];

            $grnArray[] = $grn;
        }
        return $grnArray;
    }

    /*send data*/
    public function get_grn_details($grnRf){
        $conn=(new Connection())->get_db();

        $sql="SELECT grn.*,gi.*,pc.category_name,po.reference_no,po.order_date,po.status,pd.order_qty
              FROM grn_item gi
              JOIN product_category pc on gi.product_c_id = pc.product_c_id
              JOIN grn on grn.grn_id = gi.grn_id                
              JOIN purchase_order po on grn.p_order_id = po.p_order_id 
              JOIN purchase_order_details pd on pd.p_order_id = po.p_order_id 
              WHERE reference_no=$grnRf";

        $getDetails=$conn->query($sql);

        while($row=$getDetails->fetch_array()){

            $grnDetails = new GRN();
            $grnDetails->orderRef = $row["reference_no"];
            $grnDetails->orderDate = $row["order_date"];
            $grnDetails->orderQty=$row["order_qty"];
            $grnDetails->orderCategoryName=$row["category_name"];
            $grnDetails->receivedDate =$row["received_date"];
            $grnDetails->receivedQty=$row["received_qty"];
            $grnDetails->unitPrice=$row["unit_price"];
            $grnDetails->sellPrice=$row["sell_price"];
            $grnDetails->subTotal=$row["sub_total"];
            $grnDetails->orderStatus=$row["status"];
            $grnDetails->totCost = $row["tot_cost"];

            $grnDetailsArr[]=$grnDetails;
        }
        return $grnDetailsArr;
    }


}