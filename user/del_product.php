<?php
	include('session.php');
	if(isset($_POST['rem'])){
		$id=$_POST['id'];
		
		mysqli_query($conn,"delete from `cart` where supply_ID='$id' and userid='$userid'");
	}
?>