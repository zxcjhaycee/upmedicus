<?php
session_start();
include('../includes/dbcon.php');
$username = 'Admin';
$title = 'Users';

include('header.php');
include('navbar.php');
?>


<div class="main">
  
    <div class="main-inner">

      <center>
      <?php
       $file_name = basename($_SERVER["SCRIPT_FILENAME"]);
       echo $file_name == 'users.php' ? '<a href="users2.php" class="btn btn-success">Registered Accounts</a>' : '<a href="users.php" class="btn btn-success">Create New Account</a>';
      ?>
        <!-- 
        <a href="users.php" class="btn btn-success">Create New Account</a>
        <a href="users2.php" class="btn btn-success">Registered Accounts</a>
         -->
      </center>

      <div class="container">
  
        <div class="row">         
              <div class="span12">
                <br/>
            
              <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Registered User Accounts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%;" hidden="true">ID</th>
                    <th style="width: 15%;">First Name</th>
                    <th style="width: 15%;">Middle Name</th>
                    <th style="width: 15%;">Last Name</th>
                    <th style="width: 15%;">Username</th>
                    <th style="width: 15%;">Status</th>
                    <th style="width: 15%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

    $query=mysqli_query($con,"select * from user")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $UserID=$row['UserID'];
        $firstname=$row['firstname'];
        $middlename=$row['middlename'];
        $lastname=$row['lastname'];
        $username=$row['username'];
        $status=$row['status'];
        $action=$row['action'];
   
?>                      
                      <tr>
                        <td style="width: 10%;" hidden="true"><?php echo $UserID;?></td>
                        <td style="width: 15%;"><?php echo $firstname;?></td>
                        <td style="width: 15%;"><?php echo $middlename;?></td>
                        <td style="width: 15%;"><?php echo $lastname;?></td>
                        <td style="width: 15%;"><?php echo $username;?></td>
                        <td style="width: 15%;"><?php echo $status;?></td>
                        <td style="width: 15%;"><button type="button" class="btn btn-info" href="#view" data-target="#view<?php echo $UserID;?>" data-toggle="modal"><?php echo $action;?></button></td>

 <!-- Modal -->
<div id="view<?php echo $UserID;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title"><?php echo $action ?> Account</h3>
            </div>
            <div class="modal-body" style="font-size: 13px;">
            <center>
              <h4><b>Are you sure you want to <?php echo $action; ?> this account?</b></h4></div>
              </center>
              <div class="modal-footer" style="font-size: 13px;">
              <form action="statchange.php" method="POST">
                <input type="hidden" name="UserID" value="<?php echo $UserID;?>" hidden>
                <input type="hidden" name="action" value="<?php echo $action;?>" hidden>
              
                        <center><button type="submit" class="btn btn-info" name="submit" ">Yes, <?php echo $action; ?> this Account</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></center>
                          </form>
            </div>
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  

                      </tr>

         
<?php }?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
        </div>
        </div>
      </div>
    </div>



<?php
include('footer.php');

?>
