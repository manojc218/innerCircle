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
                    WHERE role_id=1
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
        return $stockArray;
    }

}