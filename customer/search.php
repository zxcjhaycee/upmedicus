
<?php

include('header.php');

if (isset($_POST['search'])) {
	
	$type = $_POST['criteria'];
	$text = $_POST['searchfield'];
	$media = $_POST['media'];
	$logical = $_POST['logical'];
	$limit = $_POST['limit'];

	echo $type;
	?>
	<br>
	<?php
	echo $text;
	?>
	<br>
	<?php
	echo $media;
	?>
	<br>
	<?php
	echo $logical;
	?>
	<br>
	<?php
	echo $limit;

?>

<br>


<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>


<?php
}

if (isset($_POST['clear'])) {
	header('location: index.php');
}


?>
