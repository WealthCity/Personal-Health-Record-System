
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

    <title>PHR</title>
    

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <link href="../css/datepicker.css" rel="stylesheet">
    <script src="../js/bootstrap-datepicker.js"></script>
     

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../css/animate.css">
     <link href="../css/avatar.css" rel="stylesheet">


</head>
<script type="text/javascript">

function validatePassword()
    {
        var password = document.getElementById('newPwd');
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        // at least one number, one lowercase and one uppercase letter
        // at least 8 characters that are letters, numbers or the underscore
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
        var message = document.getElementById('valPassMsg');
        if(password.value.length<8)
        {
            password.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Atleast 8 characters";
        }
        else if(re.test(password.value))
        {
            password.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Strong Password!!";
        } 
        else
        {
            password.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Must have 1 upper, 1 lower, 1 number " ;
        }
    }

function matchPassword()
    {
        var pass1 = document.getElementById('newPwd');
        var pass2 = document.getElementById('conPwd');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if(pass1.value == pass2.value){
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }

  

  function updatePassword()
  {
   
    alert("hi"); 


  }

  function buttonCancel()
  {
   
   window.location = '../pages/userprofile.php';
    
  }
</script>



<?php
    session_start();
    if(!isset($_SESSION["pid"]) || $_SESSION["pid"]==="")
    {
        header("Location: login.php"); 
        exit();
    }

    $username = "";
    $pid = $_SESSION["pid"];


if( isset( $_POST['submit_form'] ) )
{
     $sqlPassword = "SELECT Password FROM tbl_users WHERE pid = $pid";
      $userPassword = "";
      $oldPwd =  $_POST["oldPwd"]; 
      $newPwd = $_POST["newPwd"]; 
    
        $results = $conn->query($sqlPassword);
        
            if(!$results)
            {
                echo "Sorry!! Information not found";
            }
            else
            {
                $row = $results->fetch_row();
                $userPassword = $row[0];
            }

            if($userPassword == $oldPwd)
            {
                
                $sqlUpdatePassword = "Update tbl_users SET Password = '$newPwd' WHERE pid = $pid";
                
                if ($conn->query($sqlUpdatePassword) === TRUE) {
                        $message = "Password updated successfully";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }

            }
            else
            {
             $message = "Please enter valid old password";
             echo "<script type='text/javascript'>alert('$message');</script>";
            }

  }


   $sqlProfile = "SELECT * FROM tbl_users WHERE pid = $pid ";

            $results = $conn->query($sqlProfile);
        
        if(!$results)
        {
            echo "Sorry!! Information not found";
        }
        else
        {
            $row = $results->fetch_row();
            $username = $row[1]." ".$row[2];
            $dob = $row[3];
            $gender = $row[4];
            $imageName = "../profilePictures/".$row[5];
            $MobileNumber = $row[6];
            $EmergencyContact = $row[7];
            $EmailId = $row[8];
            $Street = $row[10];
            $City = $row[11];
            $State = $row[12];
            $Zip = $row[13];
            $Country = $row[14];
            
          }

?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" style="margin-left:20px;">
                    <img src="../img/icon1.png" style="margin-top:10px;" width="50" height="50"  />
                    <h1 style="margin-left:20px;float:right;" >PHR System</h1>
                </a>            
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <script type="text/javascript">
                $(document).ready(function() {
                    // hide all second level
                    $('.nav-second-level').hide();
                    
                    // open submenu on click of main menu
                    $('a[href="#"]').click(function(){
                        
                        $("#arrow").toggleClass("fa-angle-down")
                        $(this).toggleClass('active');
                       $(this).next('.nav-second-level').slideToggle(1000);
                    });
                });
            </script>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <div class="profile-avatar">
                                <img class="img-responsive" src=<?php echo $_SESSION["avatarpath"]; ?> alt="profile picture">
                                <center><h5 style="font-weight:bold;"> <?php echo $_SESSION["username"]; ?></h5></center>
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> History<span id="arrow" class="fa fa-angle-left" style="float:right;"></span></a>
                            <div class="nav nav-second-level">
                                <div>                                    
                                    <a href="vitals.php"><i class="glyphicon glyphicon-zoom-in"></i>  Vitals</a>
                                </div>
                                <div>
                                    <a href="labtests.php"><i class="glyphicon glyphicon-zoom-in"></i>  Lab Test Results</a>
                                </div>
                                <div>
                                    <a href="medication.php"><i class="glyphicon glyphicon-zoom-in"></i>  Medication</a>
                                </div>
                            </div>
                            <!-- /.nav-second-level -->
                        </li>                        
                        <li>
                            <a href="userprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" class="site-header animated fadeIn">
            <div class="row">
                <div class="col-lg-12">



    <div class="container">
      <div class="row">
      <div class="col-md-9  toppad">
           <a class="pull-right" href="editUserprofile.php"> <i class="fa fa-user fa-fw"></i> Edit Profile</a>
       <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $username ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
            <form method="post" action="changePassword.php"> 
                <div style="width: 90%;margin:25px"> 
                  <table class="table table-user-information">
                    <tbody>
            
                      <tr>
                        <td  style="vertical-align: inherit;">Old Password:</td>
                        <td style="vertical-align: inherit;"> <input type="password" class="form-control" name="oldPwd" id="oldPwd" size = 15> </td>
                      </tr>
                      <tr>
                        <td style="vertical-align: inherit;">New Password:</td>
                        <td style="vertical-align: inherit;">
                          <input type="password" class="form-control" name="newPwd" id="newPwd" onblur="validatePassword();" size = 15 >
                          <span id="valPassMsg" class="confirmMessage"></span>
                        </td>
                      </tr>
                      <tr>
                        <td style="vertical-align: inherit;">Confirm Password:</td>
                        <td style="vertical-align: inherit;"><input type="password" class="form-control" name="conPwd" id="conPwd" onkeyup="matchPassword();" size = 15>
                          <span id="confirmMessage" class="confirmMessage"></span>
                          <label type="text" id="lblText"><font color="red"></font></label> </td>
                      </tr>
                      
                      <tr>
                        <td style="vertical-align: inherit;"><input type="Submit" class="btn btn-primary" name="submit_form" value="Update Password"  ></td>
                        <td style="vertical-align: inherit;"><input type="Button" class="btn btn-warning" value="Cancel" onclick = "buttonCancel()" ></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>

                </form>

              </div>
            </div>
              
            
          </div>
        </div>
      </div>
    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
