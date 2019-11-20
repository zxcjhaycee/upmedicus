<?php
require('../dbconnect/dbconnections.php');
if(isset($_GET['keyword'])){
		$keyword = $_GET['keyword'];
	$fetch = $_GET['fetch_detailed'];
	$total = $_GET['total'];
	$id = $_GET['id'];
	?>
	<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#home">Labeled View</a></li>
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
    	    <div id="home" class="tab-pane fade in active">
<br/>
<table id="example" class="table table-striped table-bordered" style="width:100%">

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
}	while(mysqli_next_result($conn));

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
	while ( $i <= $MarcFieldsCount)	{	
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
	$id = $_GET['id'];
	$query = "SELECT * FROM _tblbib WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$var = mysqli_fetch_array($result);
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
	while ( $i <= $MarcFieldsCount)	{	
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
		echo "<td>".$values[$key3]."</td>";	
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
<!-- Div for tab-content -->
</div>
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
			window.location = "drewdb3.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+pageprev+'&id=<?php echo $primaryidngauthor ?>'
				});
	}
	if(pagenext == <?php echo $total ?>){
		$('#next').attr('disabled', true);
	}else{
		$('#next').on('click', function(){
			var pagenext2 = $(this).val();
			$(this).attr('disabled', false);
			pagenext2++
			window.location = "drewdb3.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+pagenext2+'&id=<?php echo $primaryidngauthor; ?>'
		});
	}
	$('#firstpage').on('click', function(){
		var firstpage = 1;
			window.location = "drewdb3.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+firstpage+'&id=<?php echo $primaryidngauthor ?>'
	});
		$('#lastpage').on('click', function(){
		var lastpage = <?php echo $total ?>;
			window.location = "drewdb3.php?keyword=<?php echo $keyword ?>&total=<?php echo $total; ?>&fetch_detailed="+lastpage+'&id=<?php echo $primaryidngauthor ?>'
	});

	});
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js
"></script>
</body>
</html>
<?php
}
?>
