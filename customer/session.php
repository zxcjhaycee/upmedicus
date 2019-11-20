<?php
	session_start();

if (!isset($_SESSION['usertype'])) {
	$_SESSION['usertype'] = 'Guest';
	$_SESSION['Username'] = 'Guest';
	$_SESSION['id'] = '0';
}

	if ($_SESSION['usertype'] == 'Admin') {
	  header('Location: ../medadmin/home.php');

		}

	  
	
	// $conn = mysqli_connect("localhost","root","","upinventory_system");
	// if (!$conn) {
	// die("Connection failed: " . mysqli_connect_error());
	// }

	// $sq=mysqli_query($conn,"select * from `user` where Username='".$_SESSION['Username']."'");
	// $srow=mysqli_fetch_array($sq);
	
	// $user=$srow['Username'];
	// $userid=$srow['User_id'];
	// $_SESSION['id'] = $userid;
?>