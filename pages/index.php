<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <title>PHR </title>

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
                <a class="navbar-brand" href="index.html">PHR System</a>
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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <div class="profile-avatar">
                                <img class="img-responsive" src="http://lorempixel.com/600/600/people/9" alt="profile picture">
                            </div>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                        <div class="panel-heading"><b>VITALS</b></div>
                                        <table class="table table-bordered table-hover table-striped" id="vitalsTable">                                            
                                            <tbody>                                                
                                                <?php
                                                    $pid=1001;
                                                    $sqlvitals ="SELECT * FROM vitals WHERE pid=$pid";
                                                    $jsonString="";

                                                    $results = $conn->query($sqlvitals);
                                                    if(!$results)
                                                        echo "Sorry!! Information not found";
                                                    else
                                                    {
                                                        while($row = $results->fetch_row())
                                                        {
                                                            /*echo "<tr>
                                                                    <td>$row[1]</td>
                                                                    <td>$row[2]</td>
                                                                    <td>$row[3]</td>
                                                                    <td>$row[4]</td>
                                                                </tr>";*/
                                                                $jsonString.='{"vitalsign":"'.$row[1].'","value":'. $row[2].',"unit":"'. $row[3].'","measurement_time":"'. $row[4].'"},';

                                                        }

                                                    }
                                                ?>
                                                <script type="text/javascript">
                                                    var result1 = '<?php echo $jsonString; ?>';                                                    
                                                    var result = result1.substring(0, result1.length - 1); 
                                                    var jsonresult = $.parseJSON("["+result+"]");
                                                    console.log(jsonresult[0]["value"]);

                                                    function comp(a, b) 
                                                    {
                                                        return new Date(b["measurement_time"]).getTime() - new Date(a["measurement_time"]).getTime();
                                                    }

                                                    jsonresult = jsonresult.sort(comp);

                                                    var vitalCols = "<tr><th>Vital SIgn</th><th>Value</th><th>Unit</th><th>Measurement Time</th></tr>";
                                                    for(var i in jsonresult)
                                                    {
                                                        //console.log(jsonresult[i])
                                                        vitalCols += "<tr><td>"+jsonresult[i]["vitalsign"]+"</td>";
                                                        vitalCols += "<td>" +jsonresult[i]["value"] +"</td>"
                                                        vitalCols += "<td>" + jsonresult[i]["unit"]+"</td>"
                                                        vitalCols += "<td>" + jsonresult[i]["measurement_time"]+"</td></tr>"

                                                    }

                                                    $("#vitalsTable").html(vitalCols);

                                                </script>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
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
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
