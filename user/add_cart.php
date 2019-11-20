<?php
	include('session.php');
	if(isset($_POST['cart'])){
		$id=$_POST['id'];
		$qty=$_POST['qty'];
		
		$query=mysqli_query($conn,"select * from cart where supply_ID='$id' and userid='".$_SESSION['id']."'");
		if (mysqli_num_rows($query)>0){
			echo "Product already on your cart!";
		}
		else{
			mysqli_query($conn,"insert into cart (userid, supply_ID, qty) values ('$userid', '$id', '$qty')");
		}
	}

?>