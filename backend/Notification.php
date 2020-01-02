<?php
include_once ('Connection.php');


class Notification
{
    public $notificationId;
    public $receiver;
    public $notificationText;
    public $status;

    public function addNotification(){
        /*connect database*/
        $conn=(new Connection())->get_db();

        $sql="INSERT INTO notification(notification_text,receiver,status) VALUES ('$this->notificationText','$this->receiver','new')";

        $addNotification=$conn->query($sql);

        if ($addNotification){
            return true;
        }else{
            return false;
        }
    }

}