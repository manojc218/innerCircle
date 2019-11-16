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