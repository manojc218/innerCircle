<?php
include_once ("Connection.php");
include_once ('phpmailer/Mail.php');


class User
{
    public $userId;
    public $firstName;
    public $lastName;
    public $nic;
    public $gender;
    public $dob;/*date of birth*/
    public $addLine1;/*addressLine1*/
    public $addLine2;/*addressLine2*/
    public $city;
    public $postalCode;
    public $mobileNumber;
    public $landNumber;
    public $email;
    public $branchName;
    public $roleId;
    public $roleName;
    public $manager;
    public $userName;
    public $regDate;
    public $workingId;
    public $password;

    /*generate password randomly*/
    public function get_password($char)
    {
        $pwdRange = ('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123654789@#$&');

        $pwd=substr(str_shuffle($pwdRange), 0, $char);

        return $pwd;
    }

    /*adding new user to the system*/
    public function add_new_user()
    {
        $conn = (new Connection())->get_db();
        $pass=$this->get_password(8);
        
        /*hashing password*/
        $password = md5($pass);

        /*send data to the relevant table*/
        $sql = "INSERT INTO user_profile (first_name,last_name,nic,gender,dateOfBirth,addressLine1,addressLine2,city,
                postalCode,mobile_number,land_number,email,branch_id,role_id,manager,working_id,user_name,
                password)
                values ('$this->firstName','$this->lastName','$this->nic','$this->gender','$this->dob',
                '$this->addLine1','$this->addLine2','$this->city','$this->postalCode','$this->mobileNumber',
                '$this->landNumber','$this->email','$this->branchName','$this->roleName','$this->manager',
                '$this->workingId','$this->userName','$password')";

        $addUser = $conn->query($sql);
        $imgUId=$conn->insert_id;

        /*Save profile image*/
        $path="../view/userImg/$imgUId.jpg";
        move_uploaded_file($_FILES["imgFile"]["tmp_name"],$path);

        /*end save profile image*/


        $link="http://localhost/PMSIC";//system link

        /*email body*/
        $mailBody="Dear ".$this->firstName." ".$this->lastName."<br>".
                  "You have been successfully registered to the INNER CIRCLE (PVT) LTD.".
                  "Now you can log into the system through ".$link.'<br/>'.
                  "Your Username : $this->userName".'<br/>'.
                  "Your Password : ".$pass;

        /*sending mail*/
        $mail= new Mail();
        $sendMail=$mail->send_mail($this->email,"Welcome",$mailBody);



    }
    /*adding new user to the system */


    /*login function*/
    public function user_login($userName, $password)
    {
        $conn = (new Connection())->get_db();

        $sql = "SELECT * FROM user_profile WHERE user_name='$userName' and password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_array();/*get details of entire row*/

            $_SESSION["userId"] = $row["user_id"];
            $_SESSION["userPassword"] = $row["password"];
            $_SESSION["userName"] = $row["user_name"];
            $_SESSION["userRole"] = $row["role_id"];

            return true;
        } else {
            return false;
        }
    }


    /*get all user details*/
    public function get_all_users()
    {
        $conn = (new Connection())->get_db();

        $sql = "SELECT user_profile.*, branch.branch_name,role.role_name 
                FROM user_profile 
                LEFT JOIN branch ON user_profile.branch_id= branch.branch_id 
                LEFT JOIN role ON user_profile.role_id=role.role_id";

        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
            $u_detail = new user();
            $u_detail->userId = $row["user_id"];
            $u_detail->firstName = $row["first_name"];
            $u_detail->lastName = $row["last_name"];
            $u_detail->nic = $row["nic"];
            $u_detail->gender = $row["gender"];
            $u_detail->dob = $row["dateOfBirth"];
            $u_detail->addLine1 = $row["addressLine1"];
            $u_detail->addLine2 = $row["addressLine2"];
            $u_detail->city = $row["city"];
            $u_detail->postalCode = $row["postalCode"];
            $u_detail->mobileNumber = $row["mobile_number"];
            $u_detail->landNumber = $row["land_number"];
            $u_detail->email = $row["email"];
            $u_detail->roleId = $row["role_id"];
            $u_detail->roleName = $row["role_name"];
            $u_detail->branchName = $row["branch_name"];
            $u_detail->manager = $row["manager"];
            $u_detail->workingId = $row["working_id"];
            $u_detail->userName = $row["user_name"];
            $u_detail->regDate = $row["registeredDate"];

            $detailArray[] = $u_detail;
        }

        return $detailArray;
    }
    /*End get all user function*/

    /*start get all user details by id*/
    public function get_user_details_by_id($uId)
    {
        $conn = (new Connection())->get_db();

        $sql = "SELECT user_profile.*, branch.branch_name,role.role_name 
                FROM user_profile 
                LEFT JOIN branch ON user_profile.branch_id= branch.branch_id 
                LEFT JOIN role ON user_profile.role_id=role.role_id WHERE user_id='$uId'";

        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
            $u_details = new user();
            $u_details->userId = $row["user_id"];
            $u_details->firstName = $row["first_name"];
            $u_details->lastName = $row["last_name"];
            $u_details->nic = $row["nic"];
            $u_details->gender = $row["gender"];
            $u_details->dob = $row["dateOfBirth"];
            $u_details->addLine1 = $row["addressLine1"];
            $u_details->addLine2 = $row["addressLine2"];
            $u_details->city = $row["city"];
            $u_details->postalCode = $row["postalCode"];
            $u_details->mobileNumber = $row["mobile_number"];
            $u_details->landNumber = $row["land_number"];
            $u_details->email = $row["email"];
            $u_details->roleId = $row["role_id"];
            $u_details->roleName = $row["role_name"];
            $u_details->branchName = $row["branch_name"];
            $u_details->manager = $row["manager"];
            $u_details->workingId = $row["working_id"];
            $u_details->userName = $row["user_name"];
            $u_details->password=$row["password"];
            $u_details->regDate = $row["registeredDate"];

            $userDetailArray[] = $u_details;
        }

        return $userDetailArray;
    }
    /*End get all user function*/

    /*Start get manager name for relative branch*/
    public function get_manager_by_branch($id)
    {
        $conn = (new Connection())->get_db();

        $sql = "SELECT * FROM user_profile where branch_id=$id";

        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
            $u_detail = new user();
            $u_detail->userId = $row["user_id"];
            $u_detail->firstName = $row["first_name"];
            $u_detail->lastName = $row["last_name"];
            $u_detail->nic = $row["nic"];
            $u_detail->gender = $row["gender"];
            $u_detail->dob = $row["dateOfBirth"];
            $u_detail->addLine1 = $row["addressLine1"];
            $u_detail->addLine2 = $row["addressLine2"];
            $u_detail->city = $row["city"];
            $u_detail->postalCode = $row["postalCode"];
            $u_detail->mobileNumber = $row["mobile_number"];
            $u_detail->landNumber = $row["land_number"];
            $u_detail->email = $row["email"];
            $u_detail->branchName = $row["branch_id"];
            $u_detail->roleId = $row["role_id"];
            $u_detail->manager = $row["manager"];
            $u_detail->workingId = $row["working_id"];
/*            $u_detail->guyCode = $row["guyCode"];*/
            $u_detail->userName = $row["user_name"];
            $u_detail->regDate = $row["registeredDate"];

            $detailArray[] = $u_detail;
        }

        return $detailArray;
    }
    /*End get manager name for relative branch*/


    /*getting username by id*/
    public function get_user_by_id($uid)
    {
        $conn = (new Connection())->get_db();

        $sql = "SELECT * FROM user_profile where user_id=$uid";

        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
            $u_detail = new user();
            $u_detail->userId = $row["user_id"];
            $u_detail->firstName = $row["first_name"];
            $u_detail->lastName = $row["last_name"];
            $u_detail->nic = $row["nic"];
            $u_detail->gender = $row["gender"];
            $u_detail->dob = $row["dateOfBirth"];
            $u_detail->addLine1 = $row["addressLine1"];
            $u_detail->addLine2 = $row["addressLine2"];
            $u_detail->city = $row["city"];
            $u_detail->postalCode = $row["postalCode"];
            $u_detail->mobileNumber = $row["mobile_number"];
            $u_detail->landNumber = $row["land_number"];
            $u_detail->email = $row["email"];
            $u_detail->branchName = $row["branch_id"];
            $u_detail->roleId = $row["role_id"];
            $u_detail->manager = $row["manager"];
            $u_detail->workingId = $row["working_id"];
            $u_detail->userName = $row["user_name"];
            $u_detail->regDate = $row["registeredDate"];

            $detailArray[] = $u_detail;
        }

        return $detailArray;
    }

    public function get_users_by_role($role){
        $conn = (new Connection())->get_db();

        $sql = "SELECT user_profile.*, branch.branch_name,role.role_name 
                FROM user_profile 
                LEFT JOIN branch ON user_profile.branch_id= branch.branch_id 
                LEFT JOIN role ON user_profile.role_id=role.role_id WHERE role.role_id=$role";

        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
            $u_detail = new user();
            $u_detail->userId = $row["user_id"];
            $u_detail->firstName = $row["first_name"];
            $u_detail->lastName = $row["last_name"];
            $u_detail->nic = $row["nic"];
            $u_detail->gender = $row["gender"];
            $u_detail->dob = $row["dateOfBirth"];
            $u_detail->addLine1 = $row["addressLine1"];
            $u_detail->addLine2 = $row["addressLine2"];
            $u_detail->city = $row["city"];
            $u_detail->postalCode = $row["postalCode"];
            $u_detail->mobileNumber = $row["mobile_number"];
            $u_detail->landNumber = $row["land_number"];
            $u_detail->email = $row["email"];
            $u_detail->roleId = $row["role_id"];
            $u_detail->roleName = $row["role_name"];
            $u_detail->branchName = $row["branch_name"];
            $u_detail->manager = $row["manager"];
            $u_detail->workingId = $row["working_id"];
            $u_detail->userName = $row["user_name"];
            $u_detail->regDate = $row["registeredDate"];

            $detailArray[] = $u_detail;
        }

        return $detailArray;
    }
    /*getting username by id*/

    public function count_users(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT(user_id) AS ui FROM user_profile";

        $getUserCount=$conn->query($sql);
        $row=$getUserCount->fetch_array();

        return $row['ui'];
    }
    /*get password using userId*/
    public function get_password_by_id($uId){
        $conn=(new Connection())->get_db();
        $sql="SELECT * from user_profile WHERE user_id=$uId";
        $getUserId=$conn->query($sql);

        $row=$getUserId->fetch_array();


    }
    /*change user password*/
    public function change_password(){
        $conn=(new Connection())->get_db();
        $sql="SELECT * from user_profile WHERE user_id";

        $getUserId=$conn->query($sql);

        $row=$getUserId->fetch_array();

        return $row;
    }
/*function for count user role wise*/
    public function filter_user_by_regdate($sDate,$eDate){
        $conn=(new Connection())->get_db();
        $sql="SELECT 
                COUNT(CASE WHEN role_id='4' THEN user_id ELSE null END) AS 'admin',
                COUNT(CASE WHEN role_id='1' THEN user_id ELSE null END) AS 'manager',
                COUNT(CASE WHEN role_id='10' THEN user_id ELSE null END) AS 'accountant',
                COUNT(CASE WHEN role_id='5' THEN user_id ELSE null END) AS 'freeLancer' 
              FROM user_profile 
              WHERE registeredDate BETWEEN '$sDate' AND '$eDate';";

        /*echo $sql;*/
        $filter_date=$conn->query($sql);

        WHILE($row=$filter_date->fetch_array()){
            $rDate=new User();

            $rDate->man=$row['manager'];
            $rDate->admin=$row['admin'];
            $rDate->acc=$row['accountant'];
            $rDate->fl=$row['freeLancer'];

            $rDateArr[]=$rDate;
        }
        if(!empty($rDateArr)){
            return $rDateArr;
        }else{
            echo "<script>alert('No data found')</script>";
        }
   }

}
