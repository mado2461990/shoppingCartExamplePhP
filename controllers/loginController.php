<?php
    include '../models/sqlFunctions.php';
     $dataObj = new sqlQuery();
       //if user clicked login
        if(isset($_POST['loginSubmit']) && $_POST['loginSubmit']=="Login"){
            $username= $_POST['username'];
            //to scurity 
            //$username = mysql_real_escape_string($_POST['username']);
            $password= $_POST['password'];
               //to scurity 
            //$password = mysql_real_escape_string($_POST['password']);
            $query = "select * from admin where username='$username' and password = '$password'";
         //send string query to sqlFunction.php to get data by  function getDataOne();
             $data = $dataObj->getDataOne($query);
         
            if(is_array($data) && count($data)>0){
              //user and pass is correct
             session_start();                    

              $_SESSION['id'] = $data['id'];
              $_SESSION['username']=$username;
                   
               header("Location: ../views/index.php");
                  
            }
              
            // username or pass is wrong
            else{
                echo 'the username or password is wrong';
            }
            
        }
        
        ?>