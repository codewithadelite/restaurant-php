<?php
include('connection.php');
session_start();
if(isset($_SESSION['Name']) && isset($_SESSION['Id']))
{
if(isset($_POST['change'])){
    $pass = $_SESSION['Pass'];
    $old = $_POST['old'];
    $new = $_POST['new'];
    $renew = $_POST['renew'];
if($new == $renew){
        if($old == $pass){
            $sql = Mysqli_query($conn,"UPDATE `user` SET `Password` = '".$new."' WHERE `user`.`Id` = '".$_SESSION['Id']."';");
            if($sql){
               echo "<script>alert('Password changed successfully');</script>"; 
            }
            else{
                echo "<script>alert('Password not changed');</script>";
            }
        }
}
else{
    echo "<script>alert('Enter correct new password');</script>";
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
    <title>Irezon web application</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.irezon.com/">
                    <img src="images/irezon.png" style="width:80px;height:80px;" />
                </a>
            </div>
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <h5><strong><?php echo $_SESSION['Name'];?></strong></h5>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li >
                        <a href="request_manage.php"><i class="fa fa-table fa-fw"></i>Requests</a>
                    </li>
                    <li >
                        <a href="food_manage.php"><i class="fa fa-cutlery fa-fw"></i>Food</a>
                    </li>
                    <li>
                        <a href="Workers_manage.php"><i class="fa fa-users fa-fw"></i>Workers</a>
                    </li>
                    <li>
                        <a href="subscribers.php" class="selected"><i class="fa fa-bell fa-fw"></i>Subscribers</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-bell fa-fw"></i>Messages</a>
                    </li>
                    <li>
                        <a href="#" class="launch-modal" data-toggle="modal" data-target="#change_pass"><i class="fa fa-lock fa-fw" ></i>Change password</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Subscribers</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Subscribers Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Email</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = Mysqli_query($conn,"SELECT * FROM `subscribers` ORDER BY `Id` DESC");
                                            $count = 1;
                                            while ($row = Mysqli_fetch_array($sql)) {
                                            echo'<tr class="odd gradeX">';
                                            echo'<td>'.$count.'</td>';
                                            echo'<td>'.$row['Email'].'</td>';
                                            echo'<td>'.$row['Time'].'</td>';
                                            echo'</tr>'; 
                                            $count ++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
    <!--Password modal-->
    <div class="modal fade" id="change_pass" style="width:40%; margin:auto;">
        <div clas="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <span><b>CHANGE PASSWORD</b></span>
                    <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <form method="POST" action="subscribers.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label><b>OLD PASSWORD</b></label>
                                <input type="password" name="old" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label><b>NEW PASSWORD</b></label>
                                <input type="password" name="new" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label><b>REENTER NEW PASSWORD</b></label>
                                <input type="password" name="renew" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block" type="submit" name="change">Change password</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
<?php
}
else
{
    header('Location:login.php');
}
?>