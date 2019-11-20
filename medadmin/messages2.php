<?php
session_start();
$username = 'Admin';
$title = 'Messages';

include('header.php');
include('navbar.php');
?>


<div class="main">
  
    <div class="main-inner">

      <center>
        <a href="messages.php" class="btn btn-success">Unread Messages</a>
        <a href="messages2.php" class="btn btn-success">Read Messages</a>
      </center>

      <div class="container">
  
        <div class="row">         
              <div class="span12">
                <br/>
            
              <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Inquiries (Read Messages)</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width: 7%;">ID</th>
                    <th style="width: 22%;">Name</th>
                    <th style="width: 22%;">Email</th>
                    <th style="width: 30%;">Subject</th>
                    <th style="width: 13%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
include('../includes/dbcon.php');

    $query=mysqli_query($con,"select * from inquiry where status='1'")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['inqID'];
        $name=$row['name'];
        $email=$row['email'];
        $subject=$row['subject'];
        $message=$row['message'];
        
?>                      
                      <tr>
                        <td style="width: 7%;"><?php echo $id;?></td>
                        <td style="width: 25%;"><?php echo $name;?></td>
                        <td style="width: 25%;"><?php echo $email;?></td>
                        <td style="width: 30%;"><?php echo $subject;?></td>
                  
                        <td style="width: 13%;"><button type="button" class="btn btn-success" href="#view" data-target="#view<?php echo $id;?>" data-toggle="modal">View Message</button></td>

 <!-- Modal -->
<div id="view<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Inquiry Message</h4>
            </div>
             <div class="modal-body" style="height:450px;font-size: 13px;">
              <center>
              <p>Sender:</p>
                <input type="text" value="<?php echo $name;?>" readonly style="width: 95%;"> <br>
              <p>E-mail: </p>
                <input type="text" value="<?php echo $email;?>" readonly style="width: 95%;"> <br>
              <p>Subject:</p>
                <input type="text" value="<?php echo $subject;?>" readonly style="width: 95%;"> <br>
                <div style="height: 30px;">
              <p>Message:</p>
                <textarea class="form-control" rows="5" required="true" style="resize: none; width: 95%;" readonly><?php echo $message; ?></textarea> </div><br>
              </center>
             
                        <br><br><br><br><br><center><button type="button" class="btn btn-success" data-dismiss="modal">Reply</button>
                          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button></center>
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
</div>




<?php
include('footer.php');

?>

