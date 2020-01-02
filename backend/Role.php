<?php
include_once ('Connection.php');

class Role
{
    public $roleId;
    public $roleName;
    public $roleDescription;
    public $addedDate;

    public function add_role(){
        $conn = (new Connection())->get_db();
        $sql= "INSERT INTO role(role_name,role_description) VALUES ('$this->roleName','$this->roleDescription')";


        $addRole=$conn->query($sql);

        if ($addRole){
            return true;
        }
        else{
            return false;
        }
    }

    public function get_all_roles(){
        $conn= (new Connection())->get_db();
        $sql="SELECT * FROM role";

        $getAllRoles=$conn->query($sql);

        while($row=$getAllRoles->fetch_array()){
            $allRoles=new Role();
            $allRoles->roleId=$row['role_id'];
            $allRoles->roleName=$row["role_name"];
            $allRoles->roleDescription=$row['role_description'];
            $allRoles->addedDate=$row['added_date'];

            $roleArray[]=$allRoles;
        }
        return $roleArray;
    }

    public function get_selected_role(){
        $conn=(new Connection())->get_db();
        $sql="SELECT * FROM branch,role,user_profile WHERE branch.branch_id=user_profile.branch_id 
                  AND role.role_id=user_profile.role_id";

        $getRoleName=$conn->query($sql);

        while($row=$getRoleName->fetch_array()){
            $allSelectedRole=new Role();
            $allSelectedRole->roleId=$row['role_id'];
            $allSelectedRole->roleName=$row['role_name'];

            $selectedRoleArray[]=$allSelectedRole;
        }
        return $selectedRoleArray;
    }


}