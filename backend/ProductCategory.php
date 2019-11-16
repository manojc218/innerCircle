<?php
include_once("Connection.php");


/*Class for add product category*/
class ProductCategory
{
    public $product_c_id;
    public $categoryName;
    public $categoryDescription;
    public $addedDate;


    /*add Category*/
    public function add_category()
    {
        $conn=(new Connection())->get_db();

        $sql= "INSERT INTO product_category(category_name) VALUES ('$this->categoryName')";


        $result2=$conn->query($sql);
        echo $sql;exit;

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
            $product_c_details->addedDate=$row["added_date"];

            $productCategoryArray[]=$product_c_details;
        }
        return $productCategoryArray;
    }


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
        $categoryName->addedDate = $row["added_date"];



        return $categoryName;
    }



}