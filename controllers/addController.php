<?php
session_start();
include("../controllers/loginController.php");
    include_once '../models/sqlFunctions.php';
    $dataObj = new sqlQuery();
    // if user add products to basket (shopping).
    if(isset($_POST['addProduct']) && $_POST['addProduct']=="Add To MY basket"){
        $adress= $_POST['adress'];
        $amountBox= $_POST['amountBox'];
        $name= $_GET['name'];
        $image= $_GET['image'];
        $price= $_GET['price'];
        $total=$price*$amountBox;
        $customer_id=$_SESSION['id'];
        
        $queryorder = "insert into orders (name,image,customer_id,adress,price,Quantity,total) "
                          . "values ('$name','$image','$customer_id','$adress','$price','$amountBox','$total')";
        // send Sttring query To function updateinsert in sqlFunction.php to insert this data.
        $resultSec=$dataObj->updateInsertData($queryorder); 
       
             $IdSession=$_SESSION['id'];
        
       echo "<script>window.open('../views/index.php?page=mybbasket&id=$IdSession','_self')</script>";
        
    }
    


