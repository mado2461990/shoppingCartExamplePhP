<?php

include("../models/connect.php");

 include 'header.php';

$name=$data['name'];
$image=$data['image'];
$price=$data['price'];
$total=$data['price'];
// show information product that selected to buy 
//send information product to addController.php to complete operation sale
echo "<form style='min-height:430px' action='../controllers/addController.php?id=" . $_GET['id'] . "&name=$name&image=$image&price=$price' method='POST'>";

echo ' <img  src="images/'.$data['image'].'" height="200px" width="200" alt="'. $data['name'].'" /> ';

echo ' <h1> '.$data['name'].' </h1> ';

 echo "<h2><strong>&pound;" . sprintf('%.2f', $data['price']) . "</strong> </>";

echo "<p>Select Quantity <select name='amountBox'>";
        for ($i = 1; $i <= 100; $i++) {
            echo "<option >" . $i . "</option>";
        }
 echo "<p><strong>&pound;" . sprintf('%.2f', $data['price']) . "</strong></>";


 echo "<input type='submit' name='addProduct' value='Add To MY basket'>";
 echo '<br>';
 echo "adress : <input type='text' name='adress' placeholder=' write adress here '>"; 

 echo "</form>";
    


?>
