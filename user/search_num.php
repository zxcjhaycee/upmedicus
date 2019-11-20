<?php
	include('session.php');
	if(isset($_POST['num'])){
		$search = $_POST['name'];
		$query=mysqli_query($conn,"select * from `tbl_supply` where Description like '%$search%'");
		echo mysqli_num_rows($query);
	}
?>