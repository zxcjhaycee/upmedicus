<div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
          </li>
          <li class="has_sub">
			<a href="#"><i class="fa fa-calendar"></i> PT Reservations  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="ptpending.php">Pending Reservations</a></li>
              <li><a href="ptreservation.php">Paid Reservations</a></li>
              <li><a href="ptpayments.php">Payments Requests</a></li>
              <li><a href="ptreschedule.php">Reschedule Requests</a></li>
            </ul>
          </li>  
          <li class="has_sub">
      <a href="#"><i class="fa fa-calendar"></i> CS Reservations  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="cspending.php">Pending Reservations</a></li>
              <li><a href="csreservation.php">Paid Reservations</a></li>
            </ul>
          </li>  
          <li class="has_sub">
      <a href="#"><i class="fa fa-wrench"></i> Settings  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="msform.php">Manage Settings Form</a></li>
              <li><a href="comdetails.php">Company Details</a></li>
              <li><a href="ptdetails.php">Travel Details</a></li>
              <li><a href="csdetails.php">Cargo Details</a></li>
              <li><a href="terms.php">Terms & Conditions</a></li>
            </ul>
          </li> 
          <li class="has_sub"><a href="#"><i class="fa fa-bar-chart-o"></i> Reports  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="#performances" data-toggle="modal">Performances</a></li>
              <li><a href="#finances" data-toggle="modal">Finances</a></li>
              <li><a href="#ptrecords" data-toggle="modal">Travel Customer Records</a></li>
              <li><a href="#csrecords" data-toggle="modal">Cargo Customer Records</a></li>
              <li><a href="#transactions" data-toggle="modal">Transactions</a></li>
            </ul>
          </li>   
          <li><a href="sms.php"><i class="fa fa-envelope"></i> SMS Notifications</a></li> 
           
		  	  
         <li><a href="backup.php"><i class="fa fa-bar-chart-o"></i> Backup/Restore</a></li>
        </ul>
    </div>
    <?php include 'report_modal.php'; ?>