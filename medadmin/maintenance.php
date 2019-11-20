<?php
session_start();
$username = 'Admin';
$title = 'Maintenance';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Philippine Index Medicus | Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php

include('navbar.php');
?>



<div class="main">
  
    <div class="main-inner">

      <div class="container">
  
        <div class="row">         
              <div class="span2">
                <br/>
              </div> <!-- /span4 -->
            
                <div class="span12">
                <div class="widget">
                      <div class="widget-header">
                          <i class="icon-cog"></i>
                          <h3>Maintenance</h3>
                          <br>
                      </div> <!-- /widget-header -->
                          <div class="widget-content">
                          </br>
                          </div>
                </div>
                </div>
        </div>
      </div>
    </div>
</div>



<?php
include('footer.php');

?>

