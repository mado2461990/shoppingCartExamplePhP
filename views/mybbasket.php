<?php 
 include 'header.php';
 
?>

<div class="container-fluid" style="min-height: 450px">
    <a href="?page=products&id=1"><h4>back to Shopping</h4></a> 
<div calss="row">
  <h1 style="color: #37C5D1;font-size:50px;margin-left: 500px">My basket</h1>
</br>;
 <?php
 
for($i=0; $i<count($data);$i++){
    ?>

    <div class="col-lg-4 col-sm-6 col-xs-12">
    <?php
//sho my basket where buyed
echo ' <img class="img-circle" src="images/'.$data[$i]['image'].'" height="200px" width="200" alt="'. $data[$i]['name'].'" /> ';
echo "<h2>" . $data[$i]['name'] . "</h2>";
  echo  "</br>";
  
echo "adress : " . $data[$i]['adress'];
echo "<br/>";
 
echo "date : " . $data[$i]['date'];
echo "<br/>";

echo "<strong>OUR PRICE:£". sprintf('%.2f', $data[$i]['price']) . "</strong>";
echo "<br/>";

echo "Quantity  : " . $data[$i]['Quantity'];
echo "<br/>";

echo "total : " . $data[$i]['total'];
echo "<br/>";

?>
    </div>
 
<?php
}
?>
   </div>
   </div> 
   