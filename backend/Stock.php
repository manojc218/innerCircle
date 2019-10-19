<?php
include_once('Connection.php');
include_once('Product.php');

class Stock
{

    function get_stock(){
        $conn = (new Connection())->get_db();
            $sql = "SELECT  branch.branch_name,  
                      COUNT(
                          CASE
                              WHEN product.product_c_id='2'
                              THEN branch_product.product_id
                              ELSE null
                          END
                      ) AS 'SIMS',
                      COUNT(
                          CASE
                              WHEN product.product_c_id='3'
                              THEN branch_product.product_id
                              ELSE null
                          END
                      ) AS 'ROUTER',
                      COUNT(
                          CASE
                             WHEN product.product_c_id='4'
                             THEN branch_product.product_id
                             ELSE null
                          END
                      ) AS 'DTV'
                    FROM branch_product RIGHT JOIN product ON branch_product.product_id = product.product_id RIGHT JOIN branch ON branch_product.branch_id= branch.branch_id
                    GROUP BY branch_product.branch_id";
        $stockList = $conn->query($sql);

        while ($row = $stockList->fetch_array()) {
            $newStockList = new Stock();
            $newStockList->branchName = $row['branch_name'];
            $newStockList->SIMS = $row['SIMS'];
            $newStockList->ROUTER = $row['ROUTER'];
            $newStockList->DTV = $row['DTV'];

            $stockArray[] = $newStockList;
        }
        return $stockArray;
    }

}