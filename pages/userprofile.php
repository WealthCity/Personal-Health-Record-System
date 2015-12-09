
<?php include("connection.php"); ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHR</title>


    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <link href="../css/avatar.css" rel="stylesheet">

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

</head>

<?php
    session_start();
    if(!isset($_SESSION["pid"]) || $_SESSION["pid"]==="")
    {
      header("Location: login.php"); 
      exit();
    }
    $username = "";
    $pid = $_SESSION["pid"];

   $sqlProfile ="SELECT *,DATE_FORMAT(dob, '%m/%d/%Y')  FROM tbl_users WHERE pid = $pid ";

            $results = $conn->query($sqlProfile);
        
        if(!$results)
        {
            echo "Sorry!! Information not found";
        }
        else
        {
            $row = $results->fetch_row();
            $username = $row[1]." ".$row[2];
            $dob = $row[15];
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
                <a class="navbar-brand" href="index.html">PHR System  </a>            
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">



    <div class="container">
      <div class="row">
      <div class="col-md-6  toppad  pull-center col-md-offset-3 ">
           <a href="editUserProfile.php"> <i class="fa fa-user fa-fw"></i> Edit Profile</a> 
           <a class="pull-right" href="changePassword.php"> <i class="fa fa-user fa-fw"></i> Change Password</a> 
       <br>

<p class=" text-info"></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $username ?></h3>
            </div>
            <div style="padding-left:30px;height:440px">
              <div class="row" style="margin-right:25px">
              
                <div> 
                  <table class="table table-user-information">
                    <tbody style="overflow-y: hidden;position:relative">
                      <tr>
                        <td style="border-top:0">Date of Birth:</td>
                        <td style="border-top:0"> <?php echo $dob ?> </td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td> <?php echo $gender ?> </td>
                      </tr>
                      <tr>
                        <td>Mobile Number:</td>
                        <td> <?php echo $MobileNumber ?> </td>
                      </tr>
                      <tr>
                        <td>Emergency Contact:</td>
                        <td> <?php echo $EmergencyContact ?> </td>
                      </tr>
                      <tr>
                        <td>Email ID:</td>
                        <td> <?php echo $EmailId ?></td>
                      </tr>
                      <tr>
                        <td colspan="2" style="text-align:center;font-weight:bold">Address</td>
                      </tr>
                      <tr>
                        <td>Street:</td>
                        <td><?php echo $Street ?> </td>
                      </tr>
                      <tr>
                        <td>City:</td>
                        <td> <?php echo $City ?> </td>
                      </tr>
                      <tr>
                        <td>State:</td>
                        <td> <?php echo $State ?> </td>
                      </tr>
                      <tr>
                        <td>Zip:</td>
                        <td> <?php echo $Zip ?></td>
                      </tr>
                      <tr>
                        <td>Country:</td>
                        <td> <?php echo $Country ?> </td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                 
                </div>
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
