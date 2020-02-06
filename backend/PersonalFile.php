<?php
 include_once ('Connection.php');

class PersonalFile
{
    public $nicNumber;
    public $certificate;
    public $hdCount;
    public $otherCount;
    public $sLetterCount;
    public $totCount;

    function add_file(){
        $conn=(new Connection())->get_db();


        foreach ($this->certificate as $item){

            /*select user_id from user_profile table*/
            $getUid="SELECT * FROM user_profile WHERE nic='$this->nicNumber'";
            $userId=$conn->query($getUid);

            $usId=$userId->fetch_array();
            $usrId=$usId['user_id'];

/*            echo $usrId.'<br>';*/

            /*get value of check box*/
            $he=$_POST['chkCert'];

            /*echo $count;
            print_r($he)`;*/

            if($he='higherEdu.')//check the value of array is higherEdu.
                {
                $sql="INSERT INTO certificate(cert_name,cert_count,user_id) VALUES ('$he',$this->hdCount,$usrId)";

                echo $sql;

                /*$addHeEduCert=$conn->query($sql);*/

            }else if ($he='otherCert'){
                $sql2="INSERT INTO certificate(cert_name,cert_count,user_id) VALUES ('$he',$this->otherCount,$usrId)";

                echo $sql2;
                exit();
                $addOtherCert=$conn->query($sql2);

            }

            /*$sql="INSERT INTO certificate (cert_name, cert_count, cert_status, user_id)
                  VALUES ('$this->certificate',)";*/
        }
    }
}