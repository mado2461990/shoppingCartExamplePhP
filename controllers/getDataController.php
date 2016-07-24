<?php
 include_once '../models/sqlFunctions.php';
    $dataAll = new sqlQuery();
    /*
      if user request page products
     *  to show products 
     * if {id(category)= 1}
     * to show products 
     * if {id(category)= 2}
     * to show products 
     * if {id(category)= 3}
     */
    if($page == "products" ){
    $queryAll="SELECT * FROM products WHERE cat_id = " . $_GET['id'] . " ";
    $data=$dataAll->getData($queryAll);
    }
    /*if user click on buy in products.php page
   *  go to addtobasket and show just product clicked
   */
 if($page == "addtobasket"){
    $queryAll="SELECT * FROM products WHERE id = " . $_GET['id'] . " ";
    $data=$dataAll->getDataOne($queryAll);
    }
     //  if user request page mybbasket to show basket him

 if($page == "mybbasket"){
    $queryAll="SELECT * FROM orders WHERE customer_id = " . $_GET['id'] . " ";
    $data=$dataAll->getData($queryAll);
    }
     //  example to test json data
     if($page == "json"){
    $queryAll="SELECT * FROM products  ";
    $data=$dataAll->getData($queryAll);
    }

?>