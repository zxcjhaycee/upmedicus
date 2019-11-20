<?php
require('../dbconnect/dbconnections.php');
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "";
$counter_next = isset($_GET['counter']) ? $_GET['counter'] : "";
$counter_prev = isset($_GET['counter']) ? $_GET['counter'] : "";
$counter = isset($_GET['counter']) ? $_GET['counter'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "";
$search = isset($_GET['search']) ? $_GET['search'] : "";
$queryCounter = "SET @num:=0;";
$result = mysqli_query($conn, $queryCounter);
$query = "";
switch($search){
  case "anysearch":
    // $search_query = "a.marc LIKE ('%".$keyword."%')";
    // $join = "";
    // $group = "";
    $query = "SELECT a.id,IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) as title, @num:=@num+1 as counter FROM _tblbib a
    LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
    LEFT JOIN tbl_title c ON c.titleID = b.titleID 
    WHERE 1=1 AND a.marc LIKE ('%".$keyword."%') AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != '' ";
  break;
  case "authorsearch":
    // $search_query = "e.author LIKE ('%".$keyword."%')";
    // $join = "LEFT JOIN tbl_author_rel d ON d.primaryID = a.id
    //         LEFT JOIN tbl_author e ON e.authorID = d.authorID";
    // $group = "GROUP BY c.title";
    $query = "SELECT id, title,@num:=@num+1 as counter
    FROM (
    SELECT a.id,IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) as title FROM _tblbib a
    LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
    LEFT JOIN tbl_title c ON c.titleID = b.titleID 
    LEFT JOIN tbl_author_rel d ON d.primaryID = a.id
    LEFT JOIN tbl_author e ON e.authorID = d.authorID
    WHERE 1=1 AND e.author LIKE ('%".$keyword."%') AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != ''
    GROUP BY c.title ) a  ";
  break;
  case "titlesearch":
    // $search_query = "c.title LIKE ('%".$keyword."%')";
    // $join = "";
    // $group = "";
    $query = "SELECT a.id,IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) as title, @num:=@num+1 as counter FROM _tblbib a
    LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
    LEFT JOIN tbl_title c ON c.titleID = b.titleID 
    WHERE 1=1 AND c.title LIKE ('%".$keyword."%') AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != '' ";
  break;
  case "subjectsearch":
    // $search_query = "e.subject LIKE ('%".$keyword."%')";
    // $join = "LEFT JOIN tbl_subject_rel d ON d.primaryID = a.id
    // LEFT JOIN tbl_subject e ON e.subjectID = d.subjectID";
    // $group = "GROUP BY c.title";
    $query = "SELECT id, title, @num:=@num+1 as counter FROM (
      SELECT a.id,IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) as title FROM _tblbib a
      LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
      LEFT JOIN tbl_title c ON c.titleID = b.titleID 
      LEFT JOIN tbl_subject_rel d ON d.primaryID = a.id
      LEFT JOIN tbl_subject e ON e.subjectID = d.subjectID
      WHERE 1=1 AND e.subject LIKE ('%".$keyword."%') AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != ''
      GROUP BY c.title ) a ";
  break;

}
/* 
$query = "SELECT a.id,IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) as title, @num:=@num+1 as counter FROM _tblbib a
            LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
            LEFT JOIN tbl_title c ON c.titleID = b.titleID 
            $join
            WHERE 1=1 AND
            $search_query
            AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != '' 
            $group";
         */    
// die($query);
$result = mysqli_query($conn, $query);
$total = mysqli_num_rows($result);

// $firstID = "";
// $lastID = "";
// $nextID = "";
$idAll = array();

$next = $counter_next == $total ? (int)$counter_next : ++$counter_next;
$prev = $counter_prev != 1 ? --$counter_prev : (int)$counter_prev;

while($row = mysqli_fetch_array($result)){
  if($row['counter'] == 1){
    $idAll['first_id'] = $row['id'];
  }
  if($row['counter'] == $total){
    $idAll['last_id'] = $row['id'];
  }
  if($row['counter'] == $next){
    $idAll['next_id']  = $row['id'];
  }
  if($row['counter'] == $prev){
    $idAll['prev_id'] = $row['id'];
  }
}
// var_dump($idAll);

$queryMarc = "SELECT marc FROM _tblbib WHERE id = '$id'";
$resultMarc = mysqli_query($conn, $queryMarc);
$rowMarc = mysqli_fetch_array($resultMarc);
$content = $rowMarc['marc'];
$content = str_replace(array(">","<","\"")," ",$content); 
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
$number = 0;
$i = 0;

while ( $i <= $MarcFieldsCount) { 
  $tag[$i] = substr($MarcFieldsData,$number,3);
  $number = $number + 12;
  $values[$i] = stripslashes($value[$i]); 
  $i++;
}
// var_dump($tag);
// var_dump($values[]);

$queryTitle = "SELECT IF(LEFT(a.title,1)='',SUBSTR(a.title,4), a.title) as title,a.language,a.encoder,a.mattype,a.phyclass FROM tbl_title a 
INNER JOIN tbl_title_rel b ON a.titleID = b.titleID
 WHERE b.primaryID = '$id' AND IF(LEFT(a.title,1)='',SUBSTR(a.title,4), a.title) != '' ";
$resultTitle = mysqli_query($conn, $queryTitle);
$rowTitle = mysqli_fetch_array($resultTitle);

// $queryAbstract = "SELECT IF(LEFT(a.abstract,1)='',SUBSTR(a.abstract,4), a.abstract) as abstract FROM tbl_abstract a 
// INNER JOIN tbl_abstract_rel b ON a.abstractID = b.abstractID WHERE b.primaryID = '$id' AND IF(LEFT(a.abstract,1)='',SUBSTR(a.abstract,4), a.abstract) != '' ";
// $resultAbstract = mysqli_query($conn, $queryAbstract);

$queryAuthor = "SELECT IF(LEFT(a.author,1)='',SUBSTR(a.author,4), a.author) as author FROM tbl_author a 
INNER JOIN tbl_author_rel b ON a.authorID = b.authorID WHERE b.primaryID = '$id' AND IF(LEFT(a.author,1)='',SUBSTR(a.author,4), a.author) != '' ";
$resultAuthor = mysqli_query($conn, $queryAuthor);

$queryPublisher = "SELECT IF(LEFT(a.publisher,1)='',SUBSTR(a.publisher,4), a.publisher) as publisher FROM tbl_publisher a 
INNER JOIN tbl_publisher_rel b ON a.publisherID = b.publisherID WHERE b.primaryID = '$id' AND IF(LEFT(a.publisher,1)='',SUBSTR(a.publisher,4), a.publisher) != '' ";
$resultPublisher = mysqli_query($conn, $queryPublisher);

$querySubject = "SELECT IF(LEFT(a.`subject`,1)='',SUBSTR(a.`subject` ,4), a.`subject` ) as `subject` FROM tbl_subject a 
INNER JOIN tbl_subject_rel b ON a.subjectID = b.subjectID WHERE b.primaryID = '$id' AND IF(LEFT(a.subject,1)='',SUBSTR(a.subject,4), a.subject) != '' ";
$resultSubject = mysqli_query($conn, $querySubject);

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
    <!-- <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->
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
  <?php include('navbar.php'); ?>



  
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
      
      <ul class="nav nav-pills nav-justified">
          <li class="active"><a data-toggle="pill" href="#labeledView">Labeled View</a></li>
          <li><a data-toggle="pill" href="#marcView">Marc View</a></li>
     </ul>
    <h5 style="margin-left:25px;margin-top: 10px">
      <i>Page: <b><?= $counter; ?> </b></i>
    </h5>
     <div class="col-md-12 btn-group" style="margin-bottom: 20px">
          <button type="button" id="firstpage" class="btn btn-info btn-sm" style="width:5%;border-radius:4px;margin-left:10px">First</button>
          <button type="button" id="prev"  class="btn btn-info btn-sm" style="width:5%;border-radius:4px;margin-left:10px">Prev</button>
          <button type="button" id="next"  class="btn btn-info btn-sm" style="width:5%;border-radius:4px;margin-left:10px">Next</button>	
          <button type="button" id="lastpage"  class="btn btn-info btn-sm" style="width:5%;border-radius:4px;margin-left:10px">Last</button>
          <input type="hidden" value="<?= $total ?>" id="total" />
          <input type="hidden" value="<?= $next ?>" id="next_counter" />
          <input type="hidden" value="<?= $prev ?>" id="prev_counter" />
          <?php
            foreach($idAll as $key => $value){
              echo "<input type='hidden' value=".$value." id=".$key." />";
            }
          ?>
    </div>
      <div class="tab-content">
        <div id="labeledView" class="tab-pane fade in active">
          <br/>
          <table class="table table-striped table-hover table-bordered" style="width:100%">
            <tr>
              <th style="width:15%">ENGLISH TITLE</th>
              <td><?= $rowTitle['title'] ?></td>
            </tr>
            <?php
            while($rowAuthor = mysqli_fetch_array($resultAuthor)){
              echo "<tr>
                      <th style='width:15%'>PERSONAL AUTHOR(S)</th>
                      <td>".$rowAuthor['author']."</td>
                    </tr>";
            }
            while($rowPublisher = mysqli_fetch_array($resultPublisher)){
              echo "<tr>
                      <th style='width:15%'>SOURCE DOCUMENT</th>
                      <td>".preg_replace('/[^\p{L}\p{N}\s]/u', '', $rowPublisher['publisher'])."</td>
                    </tr>";
            }
            ?>
            <tr>
              <th style="width:15%">ENCODER</th>
              <td><?= $rowTitle['encoder'] ?></td>
            </tr>
            <tr>
                <th style="width:15%">PHYSICAL CLASSIFICATION</th>
                <td><?= $rowTitle['phyclass'] ?></td>
            </tr>

            <?php
              foreach($tag as $key => $value){
                if($value == '011'){
                  echo"<tr>
                      <th style='width:15%'>PHYSICAL CLASSIFICATION</th>
                      <td>".str_replace("00\$a", "", $values[$key])."</td>
                    </tr>";
                }
              }
            ?>
            <tr>
                <th style="width:15%">LANGUAGE OF TEXT</th>
                <td><?= $rowTitle['language']; ?></td>
            </tr>
            <?php
            while($rowSubject = mysqli_fetch_array($resultSubject)){
              echo "<tr>
                      <th style='width:15%'>SUBJECT HEADINGS(MESH)</th>
                      <td>".$rowSubject['subject']."</td>
                  </tr>";
            }

            foreach($tag as $key => $value){
              if($value == '600'){
                echo"<tr>
                    <th style='width:15%'>ABSTRACT</th>
                    <td>".str_replace("00\$a", "", $values[$key])."</td>
                  </tr>";
              }
            }
            ?>
            <tr>
          </table>
        </div> 
        <!-- Div for Home tab-pane -->
        <div id="marcView" class="tab-pane fade">
          <br/>
          <table class="table table-striped table-bordered" style="width:100%">
              <?php
              foreach($tag as $key => $value){
                switch($value){
                  case "210":
                    echo "<tr>
                      <th>ENGLISH TITLE</th>
                      <td>".$values[$key]."</td>
                    </tr>"; 
                  break;
                  case "100":
                    echo "<tr>
                        <th>PERSONAL AUTHOR(S)</th>
                        <td>".$values[$key]."</td>
                      </tr>";
                  break;
                  case "490":
                    echo "<tr>
                          <th>SOURCE DOCUMENT</th>
                          <td>".$values[$key]."</td>
                          </tr>";
                  break;
                  case "800":
                      echo "<tr>
                        <th>ENCODER</th>
                        <td>".$values[$key]."</td>
                      </tr>";
                  break;
                  case "011":
                    echo "<tr>
                      <th>TYPE OF MATERIAL/DOCUMENT</th>
                      <td>".$values[$key]."</td>
                    </tr>";
                  break;
                  case "620":
                    echo "<tr>
                      <th>SUBJECT HEADINGS(MESH)</th>
                      <td>".$values[$key]."</td>
                    </tr>";
                  break;
                  case "007":
                    echo "<tr>
                        <th>PHYSICAL CLASSIFICATION</th>
                        <td>".$values[$key]."</td>
                     </tr>";
                  break;
                  case "012":
                    echo "<tr>
                      <th>LANGUAGE OF TEXT</th>
                      <td>".$values[$key]."</td>
                    </tr>";
                  break;
                  case "630":
                    echo "<tr>
                    <th>KEYWORDS(NON-MESH)</th>
                    <td>".$values[$key]."</td>
                    </tr>";
                  break;
                  case "600":
                    echo "<tr>
                      <th>ABSTRACT</th>
                      <td>".$values[$key]."</td>
                    </tr>";
                  break;
                }
              }
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
	$(document).ready(function(){
    const urlParams = new URLSearchParams(window.location.search);
    const counter = urlParams.get('counter');
    const keyword = urlParams.get('keyword');
    const search = urlParams.get('search');
    const total = document.getElementById('total').value;
    const prev = document.getElementById('prev');
    const first = document.getElementById('firstpage');
    const next = document.getElementById('next');
    const last = document.getElementById('lastpage');
    const prev_id = document.getElementById('prev_id').value;
    const first_id = document.getElementById('first_id').value;
    const next_id = document.getElementById('next_id').value;
    const last_id = document.getElementById('last_id').value;
    const next_counter = document.getElementById('next_counter').value;
    const prev_counter = document.getElementById('prev_counter').value;
    // console.log(total);
    switch(true){
      case counter == "1" && counter == total:
        prev.setAttribute("disabled", true);
        first.setAttribute("disabled", true);
        last.setAttribute("disabled", true);
        next.setAttribute("disabled", true);
      break;
      case counter == "1":
        prev.setAttribute("disabled", true);
        first.setAttribute("disabled", true);
      break;
      case counter == total:
        last.setAttribute("disabled", true);
        next.setAttribute("disabled", true);
      break;
    }
    /*
      @param
      keyword = search keyword
      counter = current number records
      search = search filter
      id = primary key of record
    */

    // function for first button
    $('#firstpage').on('click', function(){
        window.location = "anysearch.php?id="+first_id+"&keyword="+keyword+"&counter=1&search="+search;
    });

    // function for next page button
    $('#next').on('click', function(){
        window.location = "anysearch.php?id="+next_id+"&keyword="+keyword+"&counter="+next_counter+"&search="+search;
    });

    // function for prev page button
    $('#prev').on('click', function(){
        window.location = "anysearch.php?id="+prev_id+"&keyword="+keyword+"&counter="+prev_counter+"&search="+search;
    });

    // function for last page button
    
    $('#lastpage').on('click', function(){
        window.location = "anysearch.php?id="+last_id+"&keyword="+keyword+"&counter="+total+"&search="+search;
    });
    /*
		$('#prev').on('click', function(){
			var pageprev = $(this).val();
				$(this).attr('disabled', false);
			pageprev -= 1;
			window.location = "anysearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+pageprev
				});

		$('#next').on('click', function(){
			var pagenext2 = $(this).val();
			$(this).attr('disabled', false);
			pagenext2++
			window.location = "anysearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+pagenext2
		});
	$('#firstpage').on('click', function(){
		var firstpage = 1;
			window.location = "anysearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+firstpage
	});
		$('#lastpage').on('click', function(){
		var lastpage = <?php echo $total ?>;
			window.location = "anysearch.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+lastpage
	});
  */
	});
</script>

</body>
</html>
