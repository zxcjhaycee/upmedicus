<?php

                    $fname = $_POST['firstname'];
                    $mname = $_POST['middlename'];
                    $lname = $_POST['lastname'];
                    $uname = $_POST['username'];
                    $usertype = 'Admin';
                    $pass = $_POST['password'];
                    $cpass = $_POST['cpassword'];

                    $conn=mysqli_connect("localhost","root","","medicusdb");


          $query=mysqli_query($conn,"select COUNT(*) as count from user where username='$uname'")or die(mysqli_error($conn));

      $row=mysqli_fetch_array($query);
        $count=$row['count'];

        if ($count==0) {

          if($pass==$cpass) {

            $enpass = sha1($pass);


          $cmd="INSERT INTO user(firstname,middlename,lastname,username,password,User_type, action) VALUES ('$fname','$mname','$lname','$uname','$enpass', '$usertype', 'Deactivate')";

          if($conn)
          {
            if(mysqli_query($conn, $cmd))
            {
              header("location:users2.php");
            }
            else
            {
              header("location: users.php");
            }
          }
          else{
            header("location: users.php");
          }
        }
        else {
          header("location: users.php");
        }
      }
      elseif ($count > 0) {
        header("location: users.php"); 
      }
?>