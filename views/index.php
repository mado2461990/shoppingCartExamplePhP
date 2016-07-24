<?php 
session_start(); 
if(!isset($_SESSION['username'])){
    //go to login.php to log in
    header('Location: login.php');
    die();
}
else {
    ?>
<html>
 <?php
     include 'header.php';
     $IdSession=$_SESSION['id'];
     ?>
    <body>
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">shopping cart</title>
</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
     <!-- to go product where cat ==1 -->
      <li><a href="?page=products&id=1">products</a></li>
        <!-- to go product where cat ==2 -->
      <li><a href="?page=products&id=2">services</a></li>
        <!-- to go product where cat ==3 -->
        <li><a href="?page=products&id=3">books</a></li>
          <!-- to go mybbasket -->
        <li><a href="?page=mybbasket&id=<?php echo$_SESSION['id'];?>">My basket</a></li>
       <!-- to go TestJson -->
        <li><a href="?page=json">json Data</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <h5>welcome <?php  echo " ".$_SESSION['username'];?></h5></a></li>
      <li><a  href="../controllers/logout.php"  <span class="glyphicon glyphicon-log />"></span> LogOut</a></li>
    </ul>
  </div>
</nav>
  
<div class="container" ng_view>
  
</div>
        <header>
        </header>
        <main>
            <section>
                <!--to open page form url-->
             <?php if(isset($_GET['page'])){
              $page= $_GET['page'];
              include '../controllers/getDataController.php';
              include $page.'.php';
                }
               else{
                echo '<h3 style="min-height:420px">'
                . 'welcome to Shopping cart choose products or services or books to shopping'
                 . '</h3>';
                }
                ?>
            </section>
        </main>
        <footer>
          <?php 
            include 'footer.php';
          ?>
        </footer>
        <script src="js/codejs.js" type="text/javascript"></script>
    </body>
</html>
   <?php }
?>