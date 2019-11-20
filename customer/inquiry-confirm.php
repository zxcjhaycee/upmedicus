<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicusdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    $query = mysqli_query($conn,"INSERT INTO inquiry(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
                    if ($query) {
                        header('Location:inquiry.php');
                        }
                  
                        
?>