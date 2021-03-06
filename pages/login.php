<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../img/icon1.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHR System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript">

function login()
{
    var username = $("#email").val();
    var pwd = $("#password").val();
}

</script>

<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
     
        $username = $_POST["email"];
        $pwd = $_POST["password"];
        $sqlLogin ="SELECT count(pid), pid FROM tbl_users WHERE EmailId = '$username' and Password = '$pwd'";
        $results = $conn->query($sqlLogin);

        if(!$results)
            echo "Sorry!! Information not found";
        else
        {
            $row = $results->fetch_row();
            $number_rows = $row[0];
            $pid = $row[1];
            
            if($number_rows == 0)
            {
                echo "<script type='text/javascript'>alert('Please enter valid username and password');</script> ";    
            }
            else
            {
                $_SESSION["pid"] = $pid;
                error_reporting(E_ALL | E_WARNING | E_NOTICE);
                ini_set('display_errors', TRUE);
                flush();
                echo("<script>location.href = 'index.php';</script>");
            }
        }
    }
    ?>


<body>

    <div class="container" class="site-header animated fadeIn">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="email" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value = "Login"  onclick = "login()">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
