<!DOCTYPE html>
<html lang="en">
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
 
    <!-- load the d3.js library -->    
    <script src="http://d3js.org/d3.v3.min.js"></script>

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


    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    
    <link rel="stylesheet" href="../css/animate.css">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    <link rel="stylesheet" type="text/css" href="../css/avatar.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/areachart.css">
    <script type="text/javascript" src="../dist/js/jquery-dateFormat.js"></script>
    <script type="text/javascript" src="../js/areaChartVitals.js"></script>

    <style type="text/css">
    div.tooltip {   
  !position: absolute;           
  text-align: center;           
  width: 120px;                  
  height: 40px;                 
  padding: 2px;             
  font: 14px sans-serif;        
  background: white;  
  border: 1px solid grey; 
  box-shadow: 3px 2px 1px black;      
  border-radius: 8px;           
  pointer-events: none;
  vertical-align: middle;
}
    </style>

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
                    <h1 class="page-header">Vitals History</h1>
                </div>
                <!-- /.col-lg-12 -->                
                
            </div>
            <div class="row" style="margin-bottom:20px;">
                <h4 style="margin-left:40px;float:left;width:170px"> Select Vital Sign : </h4>
                <select class="form-control" id="filter" style="float:left;width: 300px;">  </select>                  
            </div>
            
                <div class="row" id="area_chart_1">
                    <h4 class="col-lg-7" style="text-align:center" id="chartitle"></h3>
                </div> 
                <div class="row" style="margin-left:30px;"id="areachart">
                    <script>
                        var selectedMetric = "Oral Temperature" ;
                        var dataFilePath = "../data/patient vitals.json";
                        areaChart(selectedMetric,dataFilePath);
                        $("#chartitle").fadeIn("slow").html(selectedMetric);
                       /* $("#filter").change( function(){
                            selectedMetric = $(this).val();
                            console.log(selectedMetric)
                            $("#areachart").fadeOut();    
                            $("#areachart").empty();
                            $("#chartitle").html(selectedMetric)
                            areaChart(selectedMetric);
                            $("#areachart").fadeIn();
                        });*/

                        $("#filter").change(function(){
                        $("#areachart,#chartitle").fadeOut("slow", function(){
                            selectedMetric = $("#filter").val();
                            $("#chartitle").fadeIn("slow").html(selectedMetric)
                            $("#areachart").empty().html(areaChart(selectedMetric,dataFilePath)).fadeIn("slow");
                        });});
                    </script>
                </div>
            <center>
             <div class="panel-body">
                <center>
                    <div class="row" style="margin-left:15px">                        
                        <div class="col-lg-7" style="padding-right: 0px;padding-left: 0;">                            

                            <div class="">
                              <div style="" class="table-responsive">
                                 <div  class="panel panel-default" style="height: 607px;">
                                    <div class="panel-heading"><b>VITALS</b></div>
                                       <table class="table table-bordered table-hover table-striped"id="vitalsTable">                                            
                                    <tbody>                                                
                                     <?php
                                            
                                            $jsonString = $_SESSION["vitalJsonString"];
                                        ?>
                                        <script type="text/javascript">
                                            var result1 = '<?php echo $jsonString; ?>';                                                    
                                            var result = result1.substring(0, result1.length - 1); 
                                            var jsonresult = $.parseJSON("["+result+"]");


                                            function comp(a, b) 
                                            {
                                                return new Date(b["measurement_time"]).getTime() - new Date(a["measurement_time"]).getTime();
                                            }

                                            jsonresult = jsonresult.sort(comp);

                                            
                                            var vitalCols = "<thead><tr><th width=30%>Vital SIgn</th><th width=20%>Value</th><th width=20%>Unit</th><th width=30%>Measurement Time</th></tr></thead><tbody style='width:100%' height=527px>";
                                            for(var i in jsonresult)
                                            {
                                                vitalCols += "<tr><td width=30%>"+jsonresult[i]["vitalsign"]+"</td>";
                                                vitalCols += "<td width=20%>" +jsonresult[i]["value"] +"</td>"
                                                vitalCols += "<td width=20%>" + jsonresult[i]["unit"]+"</td>"
                                                vitalCols += "<td width=30%>" + jsonresult[i]["measurement_time"]+"</td></tr>"
                                            }

                                            $("#vitalsTable").html(vitalCols+"</tbody>");

                                        </script>

                                </table>
                                </div>
                                </div>
                            </div>
                            <!-- /.table-responsive -->                            
                        </div>                        
                        <!-- /.col-lg-5 -->           
                    </div>                    
                
            </div>
            </center>
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


