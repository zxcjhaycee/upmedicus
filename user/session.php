<?php
	session_start();

	if ($_SESSION['usertype'] == 'Admin') {
	  header('Location: ../admin/home.php');

		}
	
	else if (!isset($_SESSION['Username']) ||(trim ($_SESSION['Username']) == '')) {
	header('location:../admin/login.php');
    exit();
	}

	  
	
	// $conn = mysqli_connect("localhost","root","","upinventory_system");
	// if (!$conn) {
	// die("Connection failed: " . mysqli_connect_error());
	// }

	// $sq=mysqli_query($conn,"select * from `user` where username='".$_SESSION['Username']."'");
	// $srow=mysqli_fetch_array($sq);
	
	// $user=$srow['Username'];
	// $userid=$srow['User_id'];
	// $_SESSION['id'] = $userid;
?>