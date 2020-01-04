<?php
include_once ('Connection.php');
include_once ('User.php');


class Event
{
    public $creator;
    public $venue;
    public $createDate;
    public $conductDate;
    public $eventTime;
    public $promotionItem;
    public $eventDescription;


    public function create_event(){
        /*call to database*/
        $conn=(new Connection())->get_db();

        $userId=$_SESSION["userId"];
        $sql="INSERT INTO event (venue,created_date,conduct_date,event_time,user_id) VALUES ('$this->venue','$this->createDate','$this->conductDate','$this->eventTime',$userId)";


        $creatEvent=$conn->query($sql);



        $lastId=$conn->insert_id;

        /*insert data to promotion item table*/
        foreach ($_POST['chk'] as $item=>$val){

            $sql2="INSERT INTO promotion_item (promotion_item, event_id) VALUES ($item,$lastId)";

            $addPromotionItem=$conn->query($sql2);
        }
        if ($creatEvent){
            return true;
        }else{
            return false;
        }
    }
}