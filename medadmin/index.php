<?php
session_start();
$username = 'Admin';
$title = 'Dashboard';

$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "medicusdb";
$conn = new mysqli($servername, $dbusername, $password, $dbname);
$id = $_SESSION['userID'];
$query =$conn->prepare("SELECT count(*) as accounts FROM user");
$query->execute();
$res = $query->get_result();
$row=$res->fetch_array();


$conn1 = new mysqli($servername, $dbusername, $password, $dbname);
$id1 = $_SESSION['userID'];
$query1 =$conn1->prepare("SELECT count(*) as inquires FROM inquiry");
$query1->execute();
$res1 = $query1->get_result();
$row1=$res1->fetch_array();


$conn2 = new mysqli($servername, $dbusername, $password, $dbname);
$id2 = $_SESSION['userID'];
$query2 =$conn2->prepare("Select count(*) as novisits from tbl_oldsessions");
$query2->execute();
$res2 = $query2->get_result();
$row2=$res2->fetch_array();


$conn3 = new mysqli($servername, $dbusername, $password, $dbname);
$id3 = $_SESSION['userID'];
$query3 =$conn3->prepare("Select count(*) as notitles from tbl_title");
$query3->execute();
$res3 = $query3->get_result();
$row3=$res3->fetch_array();





include('header.php');
include('navbar.php');
?>
<div class="main">
    <div class="main-inner">
      <div class="container">
        <div class="row">         
            
                <div class="span12">
                <div class="widget">
                      <div class="widget-header">
                          <i class="icon-tasks"></i>
                          <h3>Administrator's Dashboard</h3>
                          <br>
                      </div> <!-- /widget-header -->
                          <div class="widget-content">                         
                         <div class="widget big-stats-container">
                <div class="widget-content">
                  <div id="big_stats" class="cf">
                    <div class="stat"> <h3>Visitors</h3><i class="icon-group"></i> <span class="value"><?php echo $row2['novisits']?></span> </div>

                     <div class="stat"> <h3>Data Entries</h3><i class="icon-folder-close"></i> <span class="value"><?php echo $row3['notitles']?></span> </div>
                    <!-- .stat -->
                    <div class="stat"><h3>Inquiries</h3><i class="icon-envelope-alt"></i> <span class="value"><?php echo $row1['inquires']?></span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <h3>User Accounts</h3><i class="icon-lock"></i> <span class="value"><?php echo $row['accounts']?></span> </div>
                    <!-- .stat -->
                  </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
               
               
          </div>
         </div>
      </div>


















<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>

<?php
include('footer.php');

?>


