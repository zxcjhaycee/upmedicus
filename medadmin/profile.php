<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "medicusdb";
$conn = new mysqli($servername, $dbusername, $password, $dbname);
$title = 'Profile';
$username = 'Admin';
$id = $_SESSION['userID'];
$query =$conn->prepare("SELECT * FROM user WHERE UserID = $id");
$query->execute();
$res = $query->get_result();
$row=$res->fetch_array();


$uname = $row['username'];
$fname = $row['firstname'];
$mname = $row['middlename'];
$lname = $row['lastname'];
$utype = $row['User_type'];
$status = $row['status'];






include('header.php');
include('navbar.php');
?>
<div class="main">
  
    <div class="main-inner">
<center>
<button type="button" class="btn btn-success" href="#edit" data-target="#edit<?php echo $id;?>" data-toggle="modal">Edit Profile</button>
<button type="button" class="btn btn-success" href="#change" data-target="#change<?php echo $id;?>" data-toggle="modal">Change Password</button>
</center>
<br>
<div class="container">
<center>
<?php echo $_SESSION['code']; ?>
</center>
</div>
      <div class="container">
  
        <div class="row">         
                <div class="span12">
                <div class="widget">
                      <div class="widget-header">
                          <i class="icon-list-alt"></i>
                          <h3>Profile</h3>
                          <br>
                      </div> <!-- /widget-header -->
                          <div class="widget-content">

                          <div class="span2">
                          <center>
                          <img src="../Pictures/user.png" style="height: 250px;">
 
                        </center>
                      </div>
                      <div class="span1">
                        </br>
                      </div>
                      <center>
                        <div class="span9">
                          <br><br>
                          <div class="span9">
                          <div class="span3">
                        <p>Account Username:</p>
                        <b><h3><?php echo ucwords($uname); ?> </h3></b>
                        <br></div>
                        <div class="span3">
                        <p>User Type:</p>
                        <b><h3><?php echo ucwords($utype); ?> </h3></b>
                        <br></div>
                        <div class="span3">
                        <p>Account Status:</p>
                        <b><h3><?php echo ucwords($status); ?> </h3></b>
                        <br></div></div>
                        <br>
                        <div class="span9">
                        <div class="span3">

                        
                        <p>First Name:</p>
                        <b><h3><?php echo ucwords($fname); ?> </h3></b>
                        <br></div>
                        <div class="span3">
                        <p>Middle Name:</p>
                        <b><h3><?php echo ucwords($mname); ?> </h3></b>
                        <br></div>
                        <div class="span3">
                        <p>Last Name:</p>
                        <b><h3><?php echo ucwords($lname); ?> </h3></b>
           </div>
         </div>
         </center>

</div>


 <!-- Modal -->
<div id="edit<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Edit Account Details</h3>
            </div>
            <div class="modal-body" style="font-size: 13px;">

                <form action="useredit.php" method="POST"><center>
                <input style="width: 90%" type="hidden" name="id" value="<?php echo $id;?>" hidden>
                <p>Username:</p>
                <input style="width: 90%" name="username" value="<?php echo $uname; ?>">
                <p>First Name:</p>
                <input style="width: 90%" name="fname" value="<?php echo ucwords($fname); ?>">
                <p>Middle Name:</p>
                <input style="width: 90%" name="mname" value="<?php echo ucwords($mname); ?>">
                <p>Last Name:</p>
                <input style="width: 90%" name="lname" value="<?php echo ucwords($lname); ?>">
              </div>
              <div class="modal-footer" style="font-size: 13px;"></center>
              
              
                        <div class="pull-right"><button type="submit" class="btn btn-success" name="submit" ">Save</button>
                          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button></div>
                          </form>
            </div>
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  
<!-- Modal -->
<div id="change<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Change Password</h3>
            </div>
            <div class="modal-body" style="font-size: 13px;">

                <form action="changepassword.php" method="POST"><center>
                <input style="width: 90%" type="hidden" name="id" value="<?php echo $uname;?>" hidden>
                <p>Old Password:</p>
                <input style="width: 90%" name="opass" placeholder="Enter Old Password" type="password" required="true">
                <p>New Password:</p>
                <input style="width: 90%" name="npass" placeholder="Enter New Password" type="password" required="true">
                <p>Confirm New Password:</p>
                <input style="width: 90%" name="cpass" placeholder="Confirm New Password" type="password" required="true"></center>
                
              </div>
              <div class="modal-footer" style="font-size: 13px;">
              
              
                        <div class="pull-right"><button type="submit" class="btn btn-success" name="submit" ">Save</button>
                          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button></div>
                          </form>
            </div>
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  
                        

                        




                          </div>
                </div>
                </div>
        </div>
      </div>
    </div>
</div>


<?php
include('footer.php');

?>
