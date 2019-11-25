<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">Philippine Index Medicus - Admin Dashboard </a>
      <div class="nav-collapse" style="font-size: 30px;">
        <ul class="nav pull-right">
         
          
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
         <?php
         echo $title == 'Dashboard' ? '<li class="active">' : '<li>';
        /* 
          if($title=="Dashboard"){ 
           echo '<li class="active">'; }
          else {
           echo "<li>"; 
          } 
           */
          echo '<a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span></a></li>';
          /*         
         if($title=="Dataman"){ 
          echo '<li class="active">'; }
          else {
           echo "<li>";
          
        } 
         */
      //  echo '<a href="dataman.php"><i class="icon-tasks"></i><span>Data Management</span> </a> </li>';


          echo $title == 'Users' ? '<li class="active">' : '<li>';
          /*         
          if($title=="Users"){ 
           echo '<li class="active">'; }
          else {
           echo "<li>";
          } 
          */
          echo '<a href="users.php"><i class="icon-user"></i><span>User Accounts</span></a></li>';
        
          echo $title == 'Cataloging' ? '<li class="active">' : '<li>';
          /* 
          if($title=="Cataloging"){ 
            echo '<li class="active">'; }
          else {
           echo "<li>";
          } 
           */
          echo '<a href="cataloging.php"><i class="icon-book"></i><span>Cataloging</span></a></li>';
        
         echo $title == 'Messages' ? '<li class="active">' : '<li>';
          /*          
          if($title=="Reports"){ 
            echo '<li class="active">'; }
          else {
           echo "<li>";
          } 
          */
          echo '<a href="messages.php"><i class="icon-envelope"></i><span>Messages</span></a></li>';

          echo $title == 'Profile' ? '<li class="active">' : '<li>';
          /*         
          if($title=="Profile"){ 
           echo '<li class="active">'; }
          else {
           echo "<li>";
          } 
          */
          echo '<a href="profile.php"><i class="icon-cogs"></i><span>Profile</span></a></li>';

          echo $title == 'Logout' ? '<li class="active">' : '<li>';
          /* 
          if($title=="Logout"){ 
            echo '<li class="active">'; }
          else {
           echo "<li>";
          }
           */
          echo '<a href="#logout" data-target="#logout" data-toggle="modal"><i class="icon-off"></i><span>Logout</span></a></li>';
          ?>

       <!-- Modal -->
<div id="logout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Logout Account</h3>
            </div>
            <div class="modal-body" style="font-size: 13px;">
            <center>
              <h4><b>Are you sure you want to Logout this account?</b></h4></center></div>
              
              <div class="modal-footer" style="font-size: 13px;">
              <form action="logout.php">
                        <center><button type="submit" class="btn btn-success" name="submit">Yes, Logout this Account</button>
                          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button></center>
                          </form>
            </div>
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>