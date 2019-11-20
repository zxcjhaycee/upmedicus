<?php
	include('session.php');
	if(isset($_POST['add'])){
		$id=$_POST['id'];
		
		$query=mysqli_query($conn,"select * from cart where supply_ID='$id'");
		$row=mysqli_fetch_array($query);
		
		$newqty=$row['qty']+1;
		
		mysqli_query($conn,"update cart set qty='$newqty' where supply_ID='$id'");
	
	}

?>