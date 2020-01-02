<?php
include_once ('Connection.php');
include_once ('User.php');

session_start();

class Event
{
    public $creator;
    public $venue;
    public $createDate;
    public $conductDate;
    public $eventTime;
    public $simCard;
    public $router;
    public $dialogTv;

    public function create_event(){
        /*call to database*/
        $conn=(new Connection())->get_db();

        $userId=$_SESSION["userId"];
        $sql="INSERT INTO event (venue,created_date,conduct_date,event_time,user_id) VALUES ('$this->venue'.'$this->createDate','$this->conductDate','$this->eventTime',$userId)";

        $creatEvent=$conn->query($sql);

        $lastId=$conn->insert_id;

        /*insert data to promotion item*/
        foreach ($_POST['venue'] as $item){

            $sql2="INSERT INTO promotion_item (promotion_item, event_id) VALUES ()";
        }
    }
}