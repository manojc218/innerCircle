<?php
include_once ('Connection.php');

class Point
{
    public $pointId;
    public $pointValue;
    public $productId;
    public $productCname;

    public function add_point(){
        $conn=(new Connection())->get_db();
        $sql="INSERT INTO point (point_value, product_c_id) VALUES ('$this->pointValue',$this->productCname)";

        $addPoint=$conn->query($sql);

        if ($addPoint){
            return true;
        }else{
            return false;
        }


    }
}