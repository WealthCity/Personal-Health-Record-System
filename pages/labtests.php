
<html>

  <?php 
    session_start();
    if(!isset($_SESSION["pid"]) || $_SESSION["pid"]==="")
    {
        header("Location: login.php"); 
        exit();
    } 

  ?>
   <head>
    <link rel="icon" type="image/png" href="../img/icon1.png">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>PHR</title>
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
      <!-- jQuery -->
      <script src="../bower_components/jquery/dist/jquery.min.js"></script>
      <link rel="stylesheet" href="../css/animate.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/avatar.css">
      
   </head>
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
                     <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                     </li>
                  </ul>
                  <!-- /.dropdown-user -->
               </li>
               <!-- /.dropdown -->
            </ul>
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
            <div class="row" >
               <div class="col-lg-12">
                  <h1 class="page-header">Lab Tests History</h1>
               </div>
               <!-- /.col-lg-12 -->
               <div class="col-lg-6" style="margin-left:40px;">
                  <div style="" class="table-responsive">
                     <div  class="panel panel-default" style="height: 603px;">
                        <div class="panel-heading" style="text-align:center"><b>LAB TESTS</b></div>
                           <table class="table table-bordered table-hover table-striped" id="labTestsTable">
                              <?php                                                    
                                 $jsonString = $_SESSION["labTestsJsonString"];
                                 ?>
                              <script type="text/javascript">
                                 var result1 = '<?php echo $jsonString; ?>';                                                    
                                 var result = result1.substring(0, result1.length - 1); 
                                 var jsonresult = $.parseJSON("["+result+"]");
                                 //console.log(jsonresult[0]["value"]);
                                 
                                 function comp(a, b) 
                                 {
                                     return new Date(b["testdate"]).getTime() - new Date(a["testdate"]).getTime();
                                 }
                                 
                                 jsonresult = jsonresult.sort(comp);
                                 var latestDate = new Date(jsonresult[0]["testdate"]);
                                 var vitalCols = "<thead><tr><th width='15%'>Test Name</th><th width='10%'>Value</th><th width='20%'>Reference Min</th><th width='20%'>Reference Max</th><th width='10%'>Unit</th><th width='25%'>Test Date</th></tr></thead><tbody  height=522px>";
                                 for(var i in jsonresult)
                                 {
                                     vitalCols += "<tr><td width='15%'>"+jsonresult[i]["testname"]+"</td>";
                                     vitalCols += "<td width='10%'>" +jsonresult[i]["value"] +"</td>"
                                     vitalCols += "<td width='20%'>" + jsonresult[i]["reference_min"]+"</td>"
                                     vitalCols += "<td width='20%'>" + jsonresult[i]["reference_max"]+"</td>"
                                     vitalCols += "<td width='10%'>" + jsonresult[i]["unit"]+"</td>"
                                     vitalCols += "<td width='25%'>" + jsonresult[i]["testdate"]+"</td></tr>"                                                    
                                 }
                                 
                                 $("#labTestsTable").html(vitalCols + "</tbody>");
                                 
                              </script>
                           </table>
                     </div>
                  </div>
                  <!-- /.table-responsive -->
               </div>
               <!-- /.col-lg-6  -->
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
