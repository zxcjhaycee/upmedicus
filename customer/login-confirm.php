<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicusdb";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 
session_start();
if(isset($_POST['login'])){
                    $username = $_POST['uname'];
                    $password1 = $_POST['psw'];
                    $password = sha1($password1);
                    $query =$conn->prepare("SELECT * FROM user WHERE Username = '".$username."' AND Password = '".$password."'");
                    $query->execute();
                    $res = $query->get_result();
                    if($res->num_rows>0){
                        $row=$res->fetch_array();
                        $uid = $row['UserID'];
                        
                        // $stmt2 = $conn->prepare("INSERT INTO tbl_logs (User_ID, transaction) VALUES (?,?)");
                        // $transaction = 'Logged In';
                        // $stmt2->bind_Param('ss', $uid, $transaction);
                        // $stmt2->execute();

                        if($row['User_type'] == 'Admin'){
                            $arr = array(
                            'status' => "true",
                            'a' => 'Admin');
                            // header('Location:../medadmin/index.php');
                        $_SESSION['userID'] = $row['UserID'];
                        $_SESSION['username'] = $row['username'];
						$_SESSION['usertype'] = $row['User_type'];
                        $_SESSION['code'] = '';


                        }
                      }
                      else{
                        $arr = array(
                        'status' => "false",
                        'a' => 'Error');
                        // header("Location:index.php");
                        // $_SESSION['error'] = "Username or password does not exist on this system";
                      }
  echo json_encode($arr);
                  }

?>