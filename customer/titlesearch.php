<?php
require('../dbconnect/dbconnections.php');
if(isset($_GET['keyword'])){
		$keyword = $_GET['keyword'];
	$fetch = $_GET['fetch_detailed'];
	$total = $_GET['total'];
	?>
	<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Philippine Index Medicus | Home</title>
	
    <link rel="icon" href="../Pictures/medicuslogo.jpg">
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/style.css" rel="stylesheet">	
    <link href="jquery.dataTables.min.js">
    <link href="jquery.dataTables.min.css">
    <link href="../vendor/datatables/css/dataTables.bootstrap4.css" rel="stylesheet">
	
	 <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
</head>
<style type="text/css">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */


/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
	<!-- Navigation -->


<div id="id01" class="modal">
            <div id='ajax_loader' style="position: fixed; left: 47%; top: 50%;">
    <img src="https://www.drupal.org/files/issues/ajax-loader.gif"></img>
</div>
  <div id="delegated" style="display: none">

  <form class="modal-content animate" method="POST" id="formaline06">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div style="width: 100%;" class="container"><center>
      <img src="../Pictures/account.png" style="height: : 50px;">
      <h1>
        LOGIN TO YOUR ACCOUNT
      </h1><br>
      <div id="alerterror">
        
      </div>

      <label for="uname"><b>Username</b></label><br>
      <input style="width: 100%;" type="text" autocomplete="off" placeholder="Enter Username" id="uname" name="uname" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input style="width: 100%;" type="password" class-="pass123" id="pass123" placeholder="Enter Password" name="psw" required>
      <input type="hidden" name="login" value="1">
      <button type="submit"  name="submit">Login</button>
      <label>
                <input type="checkbox" class="sampler"  name="remember"> Show Password
                <br/>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label></center>
    </div>
  </form>
</div>
</div>

        <nav class="navbar navbar-default navbar" role="navigation" style="margin-bottom: 0">
              <img src="../Pictures/medicus.jpg" style="width: 100%; height: 50%">
            <div class="navbar-header">
                
            </div>
            
            <ul class=" nav navbar-nav">
                <li id="home" style="cursor:pointer">
                   <a href='index.php'><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a href='aboutus.php'><i class="fa fa-info-circle fa-fw"></i> About Us</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a target="_blank" href='statistics.php'><i class="fa fa-area-chart fa-fw"></i> Statistics</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a href='announcement.php'><i class="fa fa-envelope fa-fw"></i> Announcement</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a href='inquiry.php'><i class="fa fa-phone fa-fw"></i> Inquiry</a>
                </li>

                

            </ul>
            
            <ul class="nav navbar-top-links navbar-right">
                <li id="home" style="cursor:pointer">
                   <a onclick="document.getElementById('id01').style.display='block'" id="trypamore" style="width:auto;"> <i class="fa fa-user fa-fw"></i>Login</a>
                </li>
                
            </ul>
        </nav>
        <script src="../vendor/jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#trypamore').on('click',function(){
              if($('#delegated').is(':visible')){
                        $('#ajax_loader').fadeIn('slow');
          $("#delegated").css("display","none")
            }
    setTimeout(function(){
        $('#delegated').fadeIn('slow');
    },1000);
  
            });
            $('.sampler').on('click', function(){
       if($('input.sampler').prop('checked')){
        $("#pass123").attr('type', 'text'); 
            }else{
                      $("#pass123").attr('type', 'password'); 
            }
            });
     
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $(document).on('submit', '#formaline06', function(event){
              event.preventDefault();
              var formaline06 = $('#formaline06').serialize();
              $.ajax({
                method:"POST",
                url:"login-confirm.php",
                proccessData:false,
            dataType: "json",
                data: formaline06,
                success:function(response){
                  if(response.status == "true" && response.a == 'Admin'){
window.location.href = "../medadmin/index.php";
                  }else{
           $("#uname").css({'border': '1px solid rgb(252, 13, 35)'});
                      $("#pass123").css({'border': '1px solid rgb(252, 13, 35)'});
                      $('#alerterror').html('<div class="alert alert-danger"><strong>Warning!</strong> Username and Password does not exist!</div>');

                  }
                  
                }

              });

            });
          });
        </script>
    <div class="row">
    	<div class="col-md-1"></div>
    	<div class="col-md-10">
    
<ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#homeoftheagent">Labeled View</a></li>
    <li><a data-toggle="pill" href="#menu1">Marc View</a></li>
  </ul>
  <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
  	<label>
  		  	<button type="button" id="firstpage" value="<?php echo $fetch; ?>" class="btn btn-info">First Page</button>
  	  	  	<button type="button" id="prev" value="<?php echo $fetch; ?>" class="btn btn-info">Prev</button>
  	  	  	Page: <?php echo $fetch; ?>
  	<button type="button" id="next" value="<?php echo $fetch ?>" class="btn btn-info">Next</button>	
  	  	  	  	<button type="button" id="lastpage" value="<?php echo $fetch; ?>" class="btn btn-info">Last Page</button>
  	</label>

  	
  </div>
    <div class="tab-content">
    	    <div id="homeoftheagent" class="tab-pane fade in active">
<br/>
<table id="example" class="table table-striped table-hover table-bordered" style="width:100%">

	<?php
  $primaryidngauthor = "";
  $query = "SET @num:=0;";
  $query .= "SELECT *, @num:=@num+1 'Row' FROM tbl_title as title LEFT JOIN tbl_title_rel as rel ON rel.titleID = title.titleID  HAVING title.title LIKE ('%".$keyword."%') AND Row = '$fetch'";
if (mysqli_multi_query($conn, $query)) {
do{
        if ($result = mysqli_store_result($conn)) {
while($santolanfestival = mysqli_fetch_row($result) ){
$primaryidngauthor .= $santolanfestival[7];
$rowngauthor = $santolanfestival[8];
  }
  mysqli_free_result($result);
  }
   if (mysqli_more_results($conn)) {
            // printf("-----------------\n");
        }
} while(mysqli_next_result($conn));

  }
  $querypangprimary = "SELECT * FROM _tblbib HAVING id = '$primaryidngauthor' AND marc LIKE '%210%' LIMIT 1";
$resultpangprimary = mysqli_query($conn, $querypangprimary);
$var = mysqli_fetch_array($resultpangprimary);
$content = $var['marc'];
$content = str_replace(">"," ",$content); 
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content); 
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);       
$DataFields = explode(chr(30),$DataFields);       
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));     
  $tag = array();
  $values = array();
  $gonine = 0;
  $quasar = array();
  $i = 0;
  while ( $i <= $MarcFieldsCount) { 
    $tag[$i] = substr($MarcFieldsData,$gonine,3);
    $gonine = $gonine + 12;
    $values[$i] = stripslashes($value[$i]); 
    $i++;
  }
  // print_r($tag);
        foreach ($tag as $key3 => $value3) :
  if($value3 == "210"):
      echo "<tr>
      <th>ENGLISH TITLE</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>"; 
      
    endif;
    if($value3 == "100"):
  echo "<tr>
      <th>PERSONAL AUTHOR(S)</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
    endif;
  if($value3 == "490"):
    echo "<tr><th>SOURCE DOCUMENT</th>";
      if(strpos($values[$key3], "00\$t") !== false):
      $sample = ["00\$t", "\$d", "\$p"];
      $sample2 = [" ", " ", " "];
      echo "
      <td>".str_replace($sample, $sample2, $values[$key3])."</td>
      ";
      else:
      $sample = ["00\$a", "\$d", "\$p"];
      $sample2 = [" ", " ", " "];
      echo "
      <td>".str_replace($sample, $sample2, $values[$key3])."</td>
      ";      
    endif;
    echo "</tr>";
  endif;
    if($value3 == "800"):
      echo "<tr>
      <th>ENCODER</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
    endif;
      if($value3 == "011"):
          echo "<tr>
      <th>TYPE OF MATERIAL/DOCUMENT</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
      endif;
      if($value3 == "620"):
              echo "<tr>
      <th>SUBJECT HEADINGS(MESH)</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
      endif;
      if($value3 == "007"):
          echo "<tr>
      <th>PHYSICAL CLASSIFICATION</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
      endif;
      if($value3 == "012"):
          echo "<tr>
      <th>LANGUAGE OF TEXT</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
      endif;
      if($value3 == "630"):
      echo "<tr>
      <th>KEYWORDS(NON-MESH)</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
      endif;
      if($value3 == "600"):
        echo "<tr>
      <th>ABSTRACT</th>
      <td>".str_replace("00\$a", "", $values[$key3])."</td>
      </tr>";
      endif;
    endforeach;
?>
</table>
</div> 
<!-- Div for Home tab-pane -->


    <div id="menu1" class="tab-pane fade">
<br/>
<table id="example2" class="table table-striped table-bordered" style="width:100%">

  <?php
  $primaryidngauthor = "";
  $query = "SET @num:=0;";
  $query .= "SELECT *, @num:=@num+1 'Row' FROM tbl_title as title LEFT JOIN tbl_title_rel as rel ON rel.titleID = title.titleID  HAVING title.title LIKE ('%".$keyword."%') AND Row = '$fetch'";
if (mysqli_multi_query($conn, $query)) {
do{
        if ($result = mysqli_store_result($conn)) {
while($santolanfestival = mysqli_fetch_row($result) ){
$primaryidngauthor .= $santolanfestival[7];
$rowngauthor = $santolanfestival[8];
  }
  mysqli_free_result($result);
  }
   if (mysqli_more_results($conn)) {
            // printf("-----------------\n");
        }
} while(mysqli_next_result($conn));

  }
  $querypangprimary = "SELECT * FROM _tblbib HAVING id = '$primaryidngauthor' AND marc LIKE '%210%' LIMIT 1";
$resultpangprimary = mysqli_query($conn, $querypangprimary);
$var = mysqli_fetch_array($resultpangprimary);
$content = $var['marc'];
$content = str_replace(">"," ",$content); 
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content); 
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);       
$DataFields = explode(chr(30),$DataFields);       
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));     
  $tag = array();
  $values = array();
  $gonine = 0;
  $quasar = array();
  $i = 0;
  while ( $i <= $MarcFieldsCount) { 
    $tag[$i] = substr($MarcFieldsData,$gonine,3);
    $gonine = $gonine + 12;
    $values[$i] = stripslashes($value[$i]); 
    $i++;
  }
  // print_r($tag);
        foreach ($tag as $key3 => $value3) :
  if($value3 == "210"):
      echo "<tr>
      <th>ENGLISH TITLE</th>
      <td>".$values[$key3]."</td>
      </tr>"; 
      
    endif;
    if($value3 == "100"):
  echo "<tr>
      <th>PERSONAL AUTHOR(S)</th>
      <td>".$values[$key3]."</td>
      </tr>";
    endif;
  if($value3 == "490"):
    echo "<tr><th>SOURCE DOCUMENT</th>";
      echo "
      <td>".$values[$key3]."</td>
      ";
    echo "</tr>";
  endif;
    if($value3 == "800"):
      echo "<tr>
      <th>ENCODER</th>
      <td>".$values[$key3]."</td>
      </tr>";
    endif;
      if($value3 == "011"):
          echo "<tr>
      <th>TYPE OF MATERIAL/DOCUMENT</th>
      <td>".$values[$key3]."</td>
      </tr>";
      endif;
      if($value3 == "620"):
              echo "<tr>
      <th>SUBJECT HEADINGS(MESH)</th>
      <td>".$values[$key3]."</td>
      </tr>";
      endif;
      if($value3 == "007"):
          echo "<tr>
      <th>PHYSICAL CLASSIFICATION</th>
      <td>".$values[$key3]."</td>
      </tr>";
      endif;
      if($value3 == "012"):
          echo "<tr>
      <th>LANGUAGE OF TEXT</th>
      <td>".$values[$key3]."</td>
      </tr>";
      endif;
      if($value3 == "630"):
      echo "<tr>
      <th>KEYWORDS(NON-MESH)</th>
      <td>".$values[$key3]."</td>
      </tr>";
      endif;
      if($value3 == "600"):
        echo "<tr>
      <th>ABSTRACT</th>
      <td>".$values[$key3]."</td>
      </tr>";
      endif;
    endforeach;
?>
</table>
</div> 



</div>
</div>
<div class="col-md-1">
</div>

<!-- Div for tab-content -->
</div>
<div class="col-sm-12">
<div style="background-color: #D5DBDB;"><center>
  <br>
  <p style="font-size: 12px;"><b>Philippine Index Medicus</b><br>
Dr. Florentino B. Herrera Jr. Medical Library College of of Medicine, University of the Philippines Manila<br>
The Health Sciences Center . <br>
Copyright 2004 F.B. Herrera, Jr. Medical Library. All rights reserved.</p><br>
</center>
</div>
</div>
<?php include('script.php');?>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example,#example2').DataTable();
} );
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var pageprev = $('#prev').val();
		var pagenext = $('#next').val();
		if(pageprev == 1){
			$('#prev').attr('disabled', true);
		}else{
		$('#prev').on('click', function(){
			var pageprev = $(this).val();
				$(this).attr('disabled', false);
			pageprev -= 1;
			window.location = "titlesearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+pageprev
				});
	}
	if(pagenext == <?php echo $total ?>){
		$('#next').attr('disabled', true);
	}else{
		$('#next').on('click', function(){
			var pagenext2 = $(this).val();
			$(this).attr('disabled', false);
			pagenext2++
			window.location = "titlesearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+pagenext2
		});
	}
	$('#firstpage').on('click', function(){
		var firstpage = 1;
			window.location = "titlesearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+firstpage
	});
		$('#lastpage').on('click', function(){
		var lastpage = <?php echo $total ?>;
			window.location = "titlesearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+lastpage
	});

	});
</script>

</body>
</html>
<?php
}
?>
