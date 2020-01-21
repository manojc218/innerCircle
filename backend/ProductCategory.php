<?php
include_once("Connection.php");


/*Class for add product category*/
class ProductCategory
{
    public $product_c_id;
    public $categoryName;
    public $categoryDescription;
    public $points;
    public $status;
    public $addedDate;


    /*add Category*/
    public function add_category()
    {
        $conn=(new Connection())->get_db();

        $sql= "INSERT INTO product_category(category_name,category_description,points,status) VALUES ('$this->categoryName','$this->categoryDescription','$this->points','Available')";


        $result2=$conn->query($sql);

        if($result2){
            return true;
        }
        else{
            return false;
        }
    }

    /*Dispaly Cateogry*/

    public static function get_all_categories(){
        $conn=(new Connection())->get_db();
        $sql="SELECT * FROM product_category";

        $list=$conn->query($sql);

        while($row=$list->fetch_array()){
            $product_c_details=new ProductCategory();
            $product_c_details->product_c_id=$row["product_c_id"];
            $product_c_details->categoryName=$row["category_name"];
            $product_c_details->categoryDescription=$row["category_description"];
            $product_c_details->points=$row["points"];
            $product_c_details->status=$row["status"];
            $product_c_details->addedDate=$row["added_date"];

            $productCategoryArray[]=$product_c_details;
        }
        return $productCategoryArray;
    }

    /*get category name for relevant id*/
    public static function get_category_by_id($cId)
    {

        $conn = (new Connection())->get_db();
        $sql = "SELECT * FROM product,product_category WHERE product.product_c_id=product_category.product_c_id AND serial_number=$cId";
        //echo $sql;
        $getCategory = $conn->query($sql);

        $row = $getCategory->fetch_array();
        $categoryName = new ProductCategory();
        $categoryName->product_c_id = $row["product_c_id"];
        $categoryName->categoryName = $row["category_name"];
        $categoryName->categoryDescription = $row["category_description"];
        $categoryName->points=$row["points"];
        $categoryName->status=$row["status"];
        $categoryName->addedDate = $row["added_date"];

        return $categoryName;
    }



}