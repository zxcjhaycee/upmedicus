<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicusdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
                    $username = $_POST['id'];
                    $opassword = $_POST['opass'];
                    $opass = sha1($opassword);
                    $npass = $_POST['npass'];
                    $cpass = $_POST['cpass'];
                    $password = sha1($npass);



$select = "SELECT * FROM user WHERE username='{$username}' AND password='{$opass}'";
$check = mysqli_query($conn, $select);
$count = mysqli_num_rows($check);


    if ($select) {
        if ($count == 1) 
        {
            if ($npass == $cpass) {
            $select1 = "UPDATE user SET password='$password' WHERE username='{$username}' AND password='{$opass}'";
            $check1 = mysqli_query($conn, $select1);
            $_SESSION['code'] = '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Password has been changed!</div>';
            echo "<script>document.location='profile.php'</script>";  
        }
        else{

      $_SESSION['code'] = '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Passwords did not matched!</div>';
            echo "<script>document.location='profile.php'</script>";  

    }

      }
       else{

      $_SESSION['code'] = '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> You have entered a wrong password!</div>';
            echo "<script>document.location='profile.php'</script>";  

  }
   
}
else{

      $_SESSION['code'] = '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Something went wrong, cannot process!</div>';
            echo "<script>document.location='profile.php'</script>";  

    }

    


?>