<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION["pid"]) || $_SESSION["pid"]==="")
    {
        header("Location: login.php"); 
        exit();
    }

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
        $username = $row[1]." ".$row[2];
        $imageName = "../profilePictures/".$row[5];
        $_SESSION["username"] = $username;
        $_SESSION["avatarpath"] = $imageName; 
    }
?>
<head>
    <link rel="icon" type="image/png" href="../img/icon1.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <title>PHR </title>

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
    <link href="../css/avatar.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/animate.css">
    <link href="../css/style.css" rel="stylesheet">
    
</head>


<body>

    <div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" style="margin-left:20px;">
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
                                <center><h5 style="font-weight:bold;">Welcome <?php echo $_SESSION["username"]; ?></h5></center>
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="panel-body" style="margin-left:40px">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="table-responsive" >
                                        <div class="panel panel-default">
                                        <div class="panel-heading"><b>VITALS</b></div>
                                        <table  class="table table-bordered table-hover table-striped" id="vitalsTable" style="height:440px">                                            
                                                                                            
                                                <?php
                                                    $pid= $_SESSION["pid"];
                                                    $sqlvitals ="SELECT * FROM vitals WHERE pid=$pid";
                                                    $jsonString="";

                                                    $results = $conn->query($sqlvitals);
                                                    if(!$results)
                                                        echo "Sorry!! Information not found";
                                                    else
                                                    {
                                                        while($row = $results->fetch_row())
                                                            $jsonString.='{"vitalsign":"'.$row[1].'","value":'. $row[2].',"unit":"'. $row[3].'","measurement_time":"'. $row[4].'"},';                                                        
                                                    }

                                                    $_SESSION["vitalJsonString"]=$jsonString;
                                                ?>
                                                <script type="text/javascript">
                                                    var result1 = '<?php echo $jsonString; ?>';                                                    
                                                    var result = result1.substring(0, result1.length - 1); 
                                                    var jsonresult = $.parseJSON("["+result+"]");
                                                    //console.log(jsonresult[0]["value"]);

                                                    function comp(a, b) 
                                                    {
                                                        return new Date(b["measurement_time"]).getTime() - new Date(a["measurement_time"]).getTime();
                                                    }

                                                    jsonresult = jsonresult.sort(comp);
                                                    var vitalCols = "<thead><tr><th width=30%>Vital SIgn</th><th width=20%>Value</th><th width=20%>Unit</th><th width=30%>Measurement Time</th></tr></thead><tbody height=400px>";
                                                    var latestDate = new Date(jsonresult[0]["measurement_time"]);
                                                    //console.log(latestDate.getDate()+"/"+latestDate.getMonth()+"/"+latestDate.getFullYear());
                                                    for(var i in jsonresult)
                                                    {
                                                        var newDate = new Date(jsonresult[i]["measurement_time"]);
                                                        if(latestDate.getDate() == newDate.getDate() && latestDate.getMonth() == newDate.getMonth() && latestDate.getFullYear() == newDate.getFullYear())                                 
                                                        {
                                                            vitalCols += "<tr><td width=30%>"+jsonresult[i]["vitalsign"]+"</td>";
                                                            vitalCols += "<td width=20%>" + jsonresult[i]["value"]+"</td>";
                                                            vitalCols += "<td width=20%>" + jsonresult[i]["unit"]+"</td>";
                                                            vitalCols += "<td width=30%>" + jsonresult[i]["measurement_time"]+"</td></tr>";
                                                        }
                                                    }

                                                            
                                                    $("#vitalsTable").html(vitalCols+"</tbody>");

                                                </script>
                                        </table>
                                    </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-5 -->

                                <div class="col-lg-5">
                                    <div style="" class="table-responsive" >
                                        <div  class="panel panel-default table-responsive" style="height:480px;">
                                        <div class="panel-heading"><b>LAB TESTS</b></div>
                                        <div>
                                        <table class="table table-bordered table-hover table-striped" id="labTestsTable">                                            
                                                                                            
                                                <?php
                                                    $pid = $_SESSION["pid"];
                                                    $sqllabtests ="SELECT * FROM labtests WHERE pid=$pid";
                                                    $jsonString="";

                                                    $results = $conn->query($sqllabtests);
                                                    if(!$results)
                                                        echo "Sorry!! Information not found";
                                                    else
                                                    {
                                                        while($row = $results->fetch_row())
                                                            $jsonString.='{"testname":"'.$row[1].'","value":'. $row[2].',"reference_min":'. $row[3].',"reference_max":'. $row[4].',"unit":"'. $row[5].'","testdate":"'. $row[6].'"},';
                                                    }
                                                    $_SESSION["labTestsJsonString"]=$jsonString;
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
                                                    var vitalCols = "<thead><tr><th width='15%'>Test Name</th><th width='10%'>Value</th><th width='20%'>Reference Min</th><th width='20%'>Reference Max</th><th width='10%'>Unit</th><th width='25%'>Test Date</th></tr></thead><tbody height=395px>";
                                                    for(var i in jsonresult)
                                                    {
                                                        var newDate = new Date(jsonresult[i]["testdate"]);
                                                        if(latestDate.getDate() == newDate.getDate() && latestDate.getMonth() == newDate.getMonth() && latestDate.getFullYear() == newDate.getFullYear())                                 
                                                        {
                                                            vitalCols += "<tr><td width='15%'>"+jsonresult[i]["testname"]+"</td>";
                                                            vitalCols += "<td width='10%'>" +jsonresult[i]["value"] +"</td>"
                                                            vitalCols += "<td width='20%'>" + jsonresult[i]["reference_min"]+"</td>"
                                                            vitalCols += "<td width='20%'>" + jsonresult[i]["reference_max"]+"</td>"
                                                            vitalCols += "<td width='10%'>" + jsonresult[i]["unit"]+"</td>"
                                                            vitalCols += "<td width='25%'>" + jsonresult[i]["testdate"]+"</td></tr>"
                                                        }
                                                    }

                                                    $("#labTestsTable").html(vitalCols + "</tbody>");

                                                </script>
                                        
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-5  -->
                            
                            </div>
                            <!-- /.row -->
                            <div class="row">
                            <div class="col-lg-5">
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                        <div class="panel-heading"><b>MEDICATION</b></div>
                                        <table  class="table table-bordered table-hover table-striped" style="height:433px;" id="medicTable">                                            
                                                                                            
                                                <?php
                                                    $pid=$_SESSION["pid"];
                                                    $sqlvitals ="SELECT * FROM medication WHERE pid=$pid";
                                                    $jsonString="";

                                                    $results = $conn->query($sqlvitals);
                                                    if(!$results)
                                                        echo "Sorry!! Information not found";
                                                    else
                                                    {
                                                        while($row = $results->fetch_row())
                                                            $jsonString.='{"medic":"'.$row[1].'","presc_date":"'. $row[2].'","quantity":'. $row[3].'},';
                                                    }
                                                    $_SESSION["medicationJsonString"]=$jsonString;

                                                ?>
                                                <script type="text/javascript">
                                                    var result1 = '<?php echo $jsonString; ?>';                                                    
                                                    var result = result1.substring(0, result1.length - 1); 
                                                    var jsonresult = $.parseJSON("["+result+"]");
                                                    //console.log(jsonresult[0]["medic"]);

                                                    function comp(a, b) 
                                                    {
                                                        return new Date(b["presc_date"]).getTime() - new Date(a["presc_date"]).getTime();
                                                    }

                                                    jsonresult = jsonresult.sort(comp);

                                                    var latestDate = new Date(jsonresult[0]["presc_date"]);
                                                    var vitalCols = "<thead><tr><th width=35%>Medication</th><th width=35%>Prescription Date</th><th width=30%>Quantity</th></tr></thead><tbody  height=395px>";
                                                    for(var i in jsonresult)
                                                    {
                                                        var newDate = new Date(jsonresult[i]["presc_date"]);
                                                        if(latestDate.getDate() == newDate.getDate() && latestDate.getMonth() == newDate.getMonth() && latestDate.getFullYear() == newDate.getFullYear())                                 
                                                        {
                                                            vitalCols += "<tr><td width=35%>"+jsonresult[i]["medic"]+"</td>";
                                                            vitalCols += "<td width=35%>" +jsonresult[i]["presc_date"] +"</td>";
                                                            vitalCols += "<td width=30%>" + jsonresult[i]["quantity"]+"</td></tr>";
                                                        }
                                                    }

                                                    $("#medicTable").html(vitalCols+"</tbody>");

                                                </script>
                                        </table>
                                    </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-5 -->
                            </div>
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
