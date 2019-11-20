<?php
					$UserID = $_POST['UserID'];
                    $action = $_POST['action'];

                    if ($action == 'Activate') {
                    	$status = "Active";
                    	$action2 = "Deactivate";

                    	$conn=mysqli_connect("localhost","root","","medicusdb");


					          $query=mysqli_query($conn,"update user set status='$status',action='$action2' where UserID = '$UserID'")or die(mysqli_error($conn));

					        if($conn)
					        {
					            if(mysqli_query($conn, $query))
					            {
					              header("location:users2.php");
					            }
					            else
					            {
					              header("location: users2.php");
					            }
					      	}
                    }
                    else if ($action == 'Deactivate') {
                    	$status = "Deactivated";
                    	$action2 = "Activate";

                    $conn=mysqli_connect("localhost","root","","medicusdb");


					          $query=mysqli_query($conn,"update user set status='$status',action='$action2' where UserID = '$UserID'")or die(mysqli_error($conn));

					        if($conn)
					        {
					            if(mysqli_query($conn, $query))
					            {
					              header("location:users2.php");
					            }
					            else
					            {
					              header("location: users2.php");
					            }
					      	}
                    }
                    
                   
                    
?>