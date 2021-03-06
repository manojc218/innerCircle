
<?php
include_once ('../backend/Connection.php');
class Product
{
    public $productCategory;
    public $productPackage;
    public $serialNumber;
    public $productId;
    public $productDescription;
    public $addedDate;
    public $packageName;
    /*Add products*/
    public function add_product2()
    {
        $conn = (new Connection())->get_db();
        $sql = "INSERT INTO product(serial_number,package_id,product_c_id,description) VALUES ('$this->serialNumber','$this->productPackage','$this->productCategory','$this->productDescription')";
        $addProduct = $conn->query($sql);
        if ($addProduct) {
            return true;
        } else {
            return false;
        }
    }
    /*get all products*/
    public function get_all_product()
    {
        include_once('../backend/Package.php');
        $conn = (new Connection())->get_db();
        $sql = "SELECT * FROM product";
        $productList = $conn->query($sql);
        $package = new Package();
        while ($row = $productList->fetch_array()) {
            $product_details = new Product();
            $product_details->productId = $row['product_id'];
            $product_details->serialNumber = $row['serial_number'];
            $product_details->productCategory = $row['product_c_id'];
            $product_details->productPackage = $package->get_package_by_id($row['package']);
            $product_details->productDescription = $row['description'];
            $product_details->addedDate = $row['added_date'];
            $productArray[] = $product_details;
        }
        return $productArray;
    }
    /*get sim only*/
    public function get_sim()
    {
        $conn = (new Connection())->get_db();
        $sql = "SELECT product.*, package.package_name FROM product LEFT JOIN package ON product.package_id = package.package_id WHERE product_c_id='2'";
        $simList = $conn->query($sql);
        while ($row = $simList->fetch_array()) {
            $newSimList1 = new Product();
            $newSimList1->productId = $row['product_id'];
            $newSimList1->serialNumber = $row['serial_number'];
            $newSimList1->productCategory = $row['product_c_id'];
            $newSimList1->packageName = $row['package_name'];
            $newSimList1->productDescription = $row['description'];
            $newSimList1->addedDate = $row['added_date'];
            
            $simArray[] = $newSimList1;
        }
        return $simArray;
    }
    /*get routers only*/
    public function get_router()
    {
        $conn = (new Connection())->get_db();
        $sql = "SELECT product.*, package.package_name FROM product LEFT JOIN package ON product.package_id = package.package_id WHERE product_c_id='3'";
        $routerList = $conn->query($sql);
        while ($row = $routerList->fetch_array()) {
            $newRouterList = new Product();
            $newRouterList->productId = $row['product_id'];
            $newRouterList->serialNumber = $row['serial_number'];
            $newRouterList->productCategory = $row['product_c_id'];
            $newRouterList->packageName = $row['package_name'];
            $newRouterList->productDescription = $row['description'];
            $newRouterList->addedDate = $row['added_date'];
            $routerArray[] = $newRouterList;
        }
        return $routerArray;
    }
    /*get dtv only*/
    public function get_dtv()
    {
        $conn = (new Connection())->get_db();
        $sql = "SELECT product.*, package.package_name FROM product LEFT JOIN package ON product.package_id = package.package_id WHERE product_c_id='4'";
        $dtvList = $conn->query($sql);
        while ($row = $dtvList->fetch_array()) {
            $newDtvList = new Product();
            $newDtvList->productId = $row['product_id'];
            $newDtvList->serialNumber = $row['serial_number'];
            $newDtvList->productCategory = $row['product_c_id'];
            $newDtvList->packageName = $row['package_name'];
            $newDtvList->productDescription = $row['description'];
            $newDtvList->addedDate = $row['added_date'];
            $dtvArray[] = $newDtvList;
        }
        return $dtvArray;
    }
    /*get category name for .relative serial number*/
    public static function get_product_by_id($cId)
    {
        $conn = (new Connection())->get_db();
        $sql = "SELECT * FROM product WHERE serial_number=$cId";
        $getProduct = $conn->query($sql);
        $row = $getProduct->fetch_array();
        $prdId = new Product();
        $prdId->productId = $row["product_id"];
        $prdId->serialNumber = $row['serial_number'];
        $prdId->productCategory = $row['product_c_id'];
        $prdId->packageName = $row['package_id'];
        $prdId->productDescription = $row['description'];
        $prdId->addedDate = $row['added_date'];
        return $prdId;
    }
}