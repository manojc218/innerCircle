<?php
include_once ('Connection.php');

class Branch
{
    public $branchId;
    public $branchName;
    public $coachName;
    public $branchAddress;
    public $city;
    public $postalCode;
    public $contactNumber;

    public function add_branch()
    {
        $conn = (new Connection())->get_db();
        $sql = "INSERT INTO branch(branch_name,coach_name,branch_address,city,postal_code,contact_number) VALUES ('$this->branchName','$this->coachName','$this->branchAddress','$this->city','$this->postalCode','$this->contactNumber')";

        $newBranch = $conn->query($sql);

        if ($newBranch) {
            return true;
        } else {
            return false;
        }
    }

    public function get_all_branches()
    {
        $conn = (new Connection())->get_db();

        $sql = "SELECT * FROM branch";

        $getAllBranch = $conn->query($sql);

        while ($row = $getAllBranch->fetch_array()) {
            $allBranch = new Branch();
            $allBranch->branchId = $row['branch_id'];
            $allBranch->branchName = $row['branch_name'];
            $allBranch->coachName = $row['coach_name'];
            $allBranch->branchAddress = $row['branch_address'];
            $allBranch->city = $row['city'];
            $allBranch->postalCode = $row['postal_code'];
            $allBranch->contactNumber = $row['contact_number'];

            $branchArray[] = $allBranch;
        }
        return $branchArray;
    }

    public function count_branch()
    {
        $conn = (new Connection())->get_db();
        $sql = "SELECT COUNT(branch_id) AS cc FROM branch";

        $getBranchCount = $conn->query($sql);

        $row = $getBranchCount->fetch_array();
        return $row['cc'];
    }
}

