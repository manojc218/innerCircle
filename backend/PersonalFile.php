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


            print_r($he);


            if($he='higherEdu')//check the value of array is higherEdu.
                {
                    /*$hd=$he;
                    echo $hd;*/
                $sql="INSERT INTO certificate(cert_name,cert_count,user_id) VALUES ('$hd',$this->hdCount,$usrId)";

                echo $sql;

                $addHeEduCert=$conn->query($sql);

            }else if ($he='otherCert'){
                /*$oc=$he;
                echo $oc;*/
                $sql2="INSERT INTO certificate(cert_name,cert_count,user_id) VALUES ('$he',$this->otherCount,$usrId)";

                echo $sql2;
                $addOtherCert=$conn->query($sql2);

            }else if($he='sLetterCert'){
                $sql3="INSERT INTO certificate(cert_name, cert_count, user_id, added_date) VALUES ('$he',$this->otherCount,$usrId)";
                $addsLetter=$conn->query($sql3);
            }else{

            }

            /*$sql="INSERT INTO certificate (cert_name, cert_count, cert_status, user_id)
                  VALUES ('$this->certificate',)";*/
        }
    }
}