<?php
require('../dbconnect/dbconnections.php');
session_start();


	$titleidquery = mysqli_query($conn, "SELECT sampledrewID from bb ORDER BY sampledrewID desc LIMIT 1");
	$titleid = mysqli_fetch_array($titleidquery);
	$titleidno = $titleid['sampledrewID'];
	$nno = $titleidno + 1;
	$primaryno = str_pad($nno, 18, '0', STR_PAD_LEFT);


echo $primaryno;
?>