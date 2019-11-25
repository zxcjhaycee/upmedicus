<?php
session_start();
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
<br>

      <div class="container">
  
        <div class="row">       
            
                <div class="span12" style="margin-left: : 0px; margin-right: 0px;">
                <div class="widget">
                      <div class="widget-header">
                          <i class="icon-user"></i>
                          <h3>Create New Account</h3>
                          <br>
                      </div> <!-- /widget-header -->
                          <div class="widget-content" style="margin-left: : 0px; margin-right: 0px;">
                          
<div class="account-container register">
  
  <div class="content clearfix">
    <center>
    <form action="regcon.php" method="post">
    
      <div class="login-fields">
<div class="span12">
        <div class="span4">
          <label for="firstname">First Name:</label>
          <input style="width: 90%" type="text" id="firstname" name="firstname" value="" placeholder="First Name" class="login"  required/>
      </div>
      <div class="span4">
          <label for="middlename">Middle Name:</label>
          <input style="width: 90%" type="text" id="middlename" name="middlename" value="" placeholder="Middle Name" class="login"/>
      </div>
        <div class="span4">
          <label for="lastname">Last Name:</label>  
          <input style="width: 90%" type="text" id="lastname" name="lastname" value="" placeholder="Last Name" class="login"  required/>
      </div>
    </div>

      <br>

      <div class="span12">
        <div class="span4">
          <label for="username">Username:</label>  
          <input style="width: 90%" type="text" id="username" name="username" value="" placeholder="Username" class="login"  required/>
        </div>

        <div class="span4">
          <label for="password">Password:</label>
          <input style="width: 90%" type="password" id="password" name="password" value="" placeholder="Password" class="login" required/>
        </div>

        <div class="span4">
          <label for="confirm_password">Confirm Password:</label>
          <input style="width: 90%" type="password" id="confirm_password" name="cpassword" value="" placeholder="Confirm Password" class="login" required/>
        </div>

      </div> 

    </div>

      <div class="span12">
       <br>
        <button type="submit" name="submit" class="button btn btn-primary btn-large">Add Account</button>
        
      </div> <!-- .actions -->

    </form>
  </center>
    
  </div> <!-- /content -->
  
</div> <!-- /account-container -->
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
