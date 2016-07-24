<html>
    <head>
        <title>Login To Your Acount To Shopping </title>
        <meta charset="UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body  class="loginBody">
        <form method="post" class="formStyle" action="../controllers/loginController.php">
            <input type="text" name="username" placeholder="username ">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="loginSubmit" value="Login">
        </form>      
    </body>
</html>