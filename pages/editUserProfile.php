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
      <link href="../css/datepicker.css" rel="stylesheet">
      <script src="../js/bootstrap-datepicker.js"></script>
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

      <!-- Include Date Range Picker -->      
      <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />


   </head>
   <script>
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
      $profileimageName = "";
      
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
              $profileimageName = $row[5];
              $MobileNumber = $row[6];
              $EmergencyContact = $row[7];
              $EmailId = $row[8];
              $Street = $row[10];
              $City = $row[11];
              $State = $row[12];
              $Zip = $row[13];
              $Country = $row[14];
              
            }
      
      
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
              $target_path = "../profilePictures/";
              $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
              
              $temp = explode(".", $_FILES["uploadedfile"]["name"]);
              $newfilename = round(microtime(true)) . '.' . end($temp);
      
              if(move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], "../profilePictures/" . $newfilename))
              {
                echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
              " has been uploaded";
              $profileimageName = $newfilename;
              }
              else
              {
                echo "There was an error uploading the file, please try again!";
              }
      
      
              $gender = $_POST["gender"];
              $MobileNumber = $_POST["MobileNumber"];
              $EmergencyContact = $_POST["EmergencyContact"];
              $EmailId = $_POST["EmailId"];
              $Street = $_POST["Street"];
              $City = $_POST["City"];
              $State = $_POST["State"];
              $Zip = $_POST["Zip"];
              $Country = $_POST["Country"];
      
              $sqlUpdateProfile = "UPDATE tbl_users SET Gender = '$gender', MobileNumber = $MobileNumber, 
              EmergencyContact = $EmergencyContact, EmailId = '$EmailId', Street = '$Street', 
              Zip = $Zip, Country = '$Country', profileimage = '$profileimageName' WHERE pid = $pid ";
           
              //echo "---SQL-- ".$sqlUpdateProfile;
      
                if ($conn->query($sqlUpdateProfile) === TRUE) {
                      echo "Record updated successfully";
                      $_SESSION["pid"] = $pid;
                  error_reporting(E_ALL | E_WARNING | E_NOTICE);
                  ini_set('display_errors', TRUE);
                  flush();
                  echo("<script>location.href = 'userprofile.php';</script>");
                  
              } else {
              echo "Sorry the website is down at the moment!!";
              } 
      
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
                     <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                       $(this).toggleClass('active-me');
                      $(this).next('.nav-second-level').slideToggle(1000);
                   });
               });
            </script>
            <div class="navbar-default sidebar" role="navigation">
               <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                     <li>
                        <div class="profile-avatar">
                           <img class="img-responsive" src= <?php echo $imageName ?> alt="profile picture"> 
                           <center>
                              <h5 style="font-weight:bold;">Welcome John</h5>
                           </center>
                        </div>
                     </li>
                     <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> History<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                              <a href="vitals.php">Vitals</a>
                           </li>
                           <li>
                              <a href="labtests.php">Lab Test Results</a>
                           </li>
                           <li>
                              <a href="medication.php">Medication</a>
                           </li>
                        </ul>
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
                        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                           <a href="changePassword.php"> <i class="fa fa-user fa-fw"></i> Change Password</a>
                           <br>
                           <p class=" text-info"></p>
                        </div>
                        <form enctype="multipart/form-data" action="editUserProfile.php" method="POST">
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                              <div class="panel panel-info">
                                 <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $username ?></h3>
                                 </div>
                                 <div class="panel-body" style="padding-left:25px;padding-right:40px;">
                                    <div class="row" style="">
                                       <div class=" ">
                                          <table class="table table-user-information">
                                             <tbody style="overflow-y:inherit;position:inherit;">
                                                <tr>
                                                   <td colspan="2">
                                                      <div class="well">
                                                        <div class="input-group input-append date" id="datePicker">
                                                            <input  type="text" id="birthdate" class="form-control" name="date" />
                                                            <span  class="input-group-addon add-on"><span id="birthdate" class="glyphicon glyphicon-calendar"></span></span>
                                                        </div>
                                                        <script type="text/javascript">                                                      
                                                          $('#birthdate').datepicker({
                                                              locale: {
                                                                  cancelLabel: 'Clear'
                                                              },
                                                              singleDatePicker: true,
                                                              showDropdowns: true,
                                                              autoclose: true                                                     

                                                          }).on('changeDate', function (ev) {
                                                                $(this).datepicker('hide');
                                                            });
                                                        </script>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td><label for="file">Upload Photo:</label> </td>
                                                    <td>  <input type="file" name="uploadedfile" id="uploadedfile"></td>
                                                </tr>
                                                <tr>
                                                   <td>Date of Birth:</td>
                                                   <td> <input type="text" name="dob" id="dob" value = <?php echo $dob ?> size = 15> </td>
                                                </tr>
                                                <tr>
                                                   <td>Gender:</td>
                                                   <td><input type="text" name="gender" id="gender" value = <?php echo $gender ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>Mobile Number:</td>
                                                   <td><input type="text" name="MobileNumber" id="MobileNumber" value = <?php echo $MobileNumber ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>Emergency Contact:</td>
                                                   <td><input type="text" name="EmergencyContact" id="EmergencyContact" value = <?php echo $EmergencyContact ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>Email ID:</td>
                                                   <td><input type="text" name="EmailId" id="EmailId" value = <?php echo $EmailId ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>Address:</td>
                                                </tr>
                                                <tr>
                                                   <td>Street:</td>
                                                   <td><input type="text" name="Street" id="Street" value = <?php echo $Street ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>City:</td>
                                                   <td><input type="text" name="City" id="City" value = <?php echo $City ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>State:</td>
                                                   <td><input type="text" name="State" id="State" value = <?php echo $State ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>Zip:</td>
                                                   <td><input type="text" name="Zip" id="Zip" value = <?php echo $Zip ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td>Country:</td>
                                                   <td><input type="text" name="Country" id="Country" value = <?php echo $Country ?> size = 15></td>
                                                </tr>
                                                <tr>
                                                   <td style="text-align:center"><input class="btn btn-primary" type="Submit" value="Update Profile" onclick = "updateProfile()" ></td>
                                                   <td style="text-align:center"><input class="btn btn-warning" type="Button" value="Cancel" onclick = "buttonCancel()" ></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
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