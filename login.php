<?php
include('connection.php');
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
if(!empty($username) && !empty($password)){
    $sql = Mysqli_query($conn , "SELECT * FROM `user` WHERE `Username` ='".$username."' AND `Password` ='".$password."' LIMIT 1");
    $count = Mysqli_num_rows($sql);
    if($count == 1){
        session_start();
        while ($row = Mysqli_fetch_array($sql)) {
             $_SESSION['Name'] = $row['Names'];
             $_SESSION['Id'] = $row['Id'];
             $_SESSION['Pass'] = $password;
         } 
         header('Location:dashboard.php');
    }
    else{
        echo "<script>alert('Username or Password incorrect');</script>";
    }
}
else{
    echo "<script>alert('All field required');</script>";
}
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free PHP Web based application by Irezon.com" />
    <meta name="keywords" content="This is free web based application developed by Shema adelite email:shemani2011@gmail.com" />
    <title>Irezon web application Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <style type="text/css">
        body{
            background:url('images/img_1.jpg');
            background-size: cover;
        }
    </style>
</head>

<body >

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="images/irezon.png" alt="" style="width: 80px; height:80px;" />
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="text-center panel-title">SIGN IN</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="login.php" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" class="btn btn-lg btn-block" style="background-color:#FBB448;color: white;">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
