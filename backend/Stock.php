<?php
include_once('Connection.php');
include_once('Product.php');
include_once ('User.php');

class Stock
{

    function get_stock(){
        $conn = (new Connection())->get_db();
            $sql = "SELECT  user_profile.first_name,user_profile.last_name,
                      COUNT(
                          CASE
                              WHEN product.product_c_id='2'
                              THEN product.product_id
                              ELSE null
                          END
                      ) AS 'SIMS',
                      COUNT(
                          CASE
                              WHEN product.product_c_id='3'
                              THEN product.product_id
                              ELSE null
                          END
                      ) AS 'ROUTER',
                      COUNT(
                          CASE
                             WHEN product.product_c_id='4'
                             THEN product.product_id
                             ELSE null
                          END
                      ) AS 'DTV'
                    FROM product RIGHT JOIN user_profile ON product.user_id= user_profile.user_id
                    WHERE role_id=1 AND status='available' 
                    GROUP BY product.user_id";
        $stockList = $conn->query($sql);

        while ($row = $stockList->fetch_array()) {
            $newStockList = new Stock();
            $newStockList->managerName = $row['first_name']." ".$row['last_name'];
            $newStockList->SIMS = $row['SIMS'];
            $newStockList->ROUTER = $row['ROUTER'];
            $newStockList->DTV = $row['DTV'];

            $stockArray[] = $newStockList;
        }
        if(!empty($stockArray)){
            return $stockArray;
        }else{
            echo "<script>alert('No data found')</script>";
        }
    }

    /*get main sim stock*/
    function get_main_sim_stock(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_c_id') AS simCount 
              FROM product 
              WHERE product_c_id=2 AND user_id=217";
        $getSimStock=$conn->query($sql);

        $row=$getSimStock->fetch_array();
        return $row['simCount'];
    }

    /*get main router stock*/
    function get_main_router_stock(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_c_id') AS routerCount 
              FROM product 
              WHERE product_c_id=3 AND user_id=217";
        $getRouterStock=$conn->query($sql);

        $row=$getRouterStock->fetch_array();
        return $row['routerCount'];
    }

    /*get main Dtv(pre paid) count*/
    function get_main_dtv_pre_count(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_c_id') AS dtvPrePaid 
              FROM product 
              WHERE product_c_id=4 AND user_id=217";
        $getDtvPreStock=$conn->query($sql);

        $row=$getDtvPreStock->fetch_array();
        return $row['dtvPrePaid'];
    }

    /*get main Dtv(post paid) count*/
    function get_main_dtv_post_count(){
        $conn=(new Connection())->get_db();
        $sql="SELECT COUNT('product_c_id') AS dtvPostCount
              FROM product 
              WHERE product_c_id=5 AND user_id=217";
        $getDtvPostStock=$conn->query($sql);

        $row=$getDtvPostStock->fetch_array();
        return $row['dtvPostCount'];
    }

}