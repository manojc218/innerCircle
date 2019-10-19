<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/21/2019
 * Time: 11:19 AM
 */

class Package
{
    public $packageName;
    public $packageId;
    public $packageDescription;
    public $addedDate;


    public function add_package(){
        $conn=(new Connection())->get_db();
        $sql="INSERT INTO package (package_name,description) VALUES ('$this->packageName','$this->packageDescription')";

        $addPackage=$conn->query($sql);

        if($addPackage){
            return true;
        }else{
            return false;
        }
    }

    /*Display packages*/
    public function get_all_packages(){
        $conn=(new Connection())->get_db();
        $sql="SELECT * FROM package";

        $packageList=$conn->query($sql);

        while($row=$packageList->fetch_array()){
            $package_details=new Package();
            $package_details->packageName=$row['package_name'];
            $package_details->packageDescription=$row['description'];
            $package_details->packageId=$row['package_id'];
            $package_details->addedDate=$row['added_date'];
            $packageDetailArray[]=$package_details;
        }
        return $packageDetailArray;
    }

    public function get_package_by_id($packageId){
        $conn=(new Connection())->get_db();
        $sql="SELECT * FROM package WHERE product_id='$packageId'";

        $res=$conn->query($sql);

        if($res->num_rows==1){
            $row=$res->fetch_array();
            $this->packageId=$row['package_id'];
            $this->packageName=$row['package_name'];
            $this->packageDescription=$row['description'];

            }
            return $this;
    }

    /*public function delete_package(){
        $conn=(new Connection())->get_db();
        $sql="DELETE FROM package WHERE "
    }*/

}
?>