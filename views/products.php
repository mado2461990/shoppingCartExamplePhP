<?php
 include 'header.php';
?>
<div class="container-fluid" style="min-height: 450px">
<div calss="row">
   <?php
   //for loop to print data that get from sqlFunction getData().
for($i=0; $i<count($data);$i++){
    ?>
    <div class="col-lg-4 col-sm-6 col-xs-12">
    <?php
//show products 
echo ' <img class="img-circle" src="images/'.$data[$i]['image'].'" height="200px" width="200" alt="'. $data[$i]['name'].'" /> ';
echo "<h2>" . $data[$i]['name'] . "</h2>";
  echo  "</br>";
echo "" . $data[$i]['description'];
echo "<br/>";
echo "<strong>OUR PRICE:£". sprintf('%.2f', $data[$i]['price']) . "</strong>";
echo "<br/>";

echo"[<a style='font-size:25px' href='?page=addtobasket&id=". $data[$i]['id']."'>buy</a>]";

?>
    </div>
<?php
}
?>
   </div>
    </div> 
  
