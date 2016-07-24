<?php

include_once("connect.php");
class sqlQuery {
    private $query;
    private $pass;
    function __construct() {   
    }
    // to get data sure it one row like user and pass field from data base
      function getDataOne($query){
           include("connect.php");
        $this->query = $query;
         try {
              if (!$sql = mysqli_query($conn,$this->query)){
                throw new Exception("Error: Cannot execute the query of get data {$this->query}");
            }
            else
            {
                $num = mysqli_num_rows($sql);
                
                $data = mysqli_fetch_array($sql);           
                
                return $data;
            }
            }
            catch (Exception $ex) { echo $ex->getMessage();}
    }
    // to get data multi row  data from dta base
    function getData($query){
        ?>
       
         <?php
        include("connect.php");
        $this->query = $query;
         try {
             if (!$sql = mysqli_query($conn,$this->query)){
                throw new Exception("Error: Cannot execute the query of get data {$this->query}");
            }
            else
            {
                $num = mysqli_num_rows($sql);
                for($i=0;$i<$num;$i++){
                $data[$i] = mysqli_fetch_array($sql);           
                }
                 if($num!=0){
                return $data;
                 }
            }
            }
            catch (Exception $ex) { echo $ex->getMessage();}
    }
    // to insert data to data base
    function updateInsertData($query){
         include("connect.php");
        $this->query= $query;
        try 
            {
             if (!$sql = mysqli_query($conn,$this->query))
             {
                 throw new Exception
                ("Error: Cannot execute the query of get data");
             }
             else
             {              
                echo "<script>alert('Done Successfully ')</script>";
                return TRUE;
             }
            
            }
        catch (Exception $ex) 
            {
                echo $ex->getMessage();
            }
    }
  
    
    
}