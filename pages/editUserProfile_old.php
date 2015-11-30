<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    $username = "";
    $_SESSION["pid"] = 1001;
    $pid = $_SESSION["pid"];

   $sqlProfile ="SELECT * FROM tbl_users WHERE pid = $pid ";

            $results = $conn->query($sqlProfile);
        
        if(!$results)
        {
            echo "Sorry!! Information not found";
        }
        else
        {
            $row = $results->fetch_row();
            echo "id = ".$row[0];
            echo "name = ".$row[1];
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


      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $MobileNumber = $_POST["MobileNumber"];

            $_SESSION["pid"] = 1001;
            $pid = $_SESSION["pid"];

            $sqlUpdateProfile = "UPDATE tbl_users SET MobileNumber = $MobileNumber WHERE pid = $pid ";


        if ($conn->query($sqlUpdateProfile) === TRUE) {
              echo "Record updated successfully";
        } else {
              echo "Error updating record: " . $conn->error;
          }

      }          

?>


<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/avatar.css" rel="stylesheet">

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

<style type="text/css" src="../css/avatar.css"></style>
<script type="text/javascript" src="../js/userprofile.js"></script>

</head>

<body>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div>

  <form role="form" method="POST">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
         <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $username ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src = <?php echo $imageName ?> class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
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
                        <td><input type="Submit" value="Update Profile" onclick = "updateProfile()" ></td>
                      </tr>
                      <!--   <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Metro Manila,Philippines</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr> -->
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
  </form>

      </div>
    </div>
  </body>
    </html>