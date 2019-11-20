<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body style="background-color: #f2f2f2;">

	<?php include('navbar.php'); ?>

 <div class="col-sm-12" style="height: 20px;"></div>
 <br>
 <br>

    <center><div class="panel-group" style="width: 50%;">
    <div class="panel panel-success">
  <div class="panel-heading"><h3>Inquiry form</h3></div>
  <div class="panel-body"><br>
  <form style="width: 80%;" method="POST" action="inquiry-confirm.php">

    <div class="form-group">
    <label for="name">Full Name</label><br>
    <input style="width: 100%;" type="text" class="form-control" name="name" placeholder="Enter Full Name" required="true">
    </div>

    <div class="form-group">
    <label for="email">Email address</label><br>
    <input style="width: 100%;" type="email" class="form-control" name="email" placeholder="Enter Email Address" required="true">
    </div>

    <div class="form-group">
    <label for="subject">Message Subject</label><br>
    <input style="width: 100%;" type="text" class="form-control" name="subject" placeholder="Enter Message Subject" required="true">
    </div>

    <div class="form-group">
    <label for="message">Message</label><br>
    <textarea  style="resize: none;" class="form-control" name="message" placeholder="Enter your Message" rows="3" required="true"></textarea>
  </div>

    <button type="submit" class="btn btn-success" onClick="success()">Submit Inquiry</button>
   <br>
  </form>
</div>
</div>
</div>
</div></center>

<div class="col-sm-12" style="height: 20px;"></div>


<div class="col-sm-12" style="height: 20px;">
</div>


<div class="col-sm-12">
<div style="background-color: #D5DBDB;"><center>
    <br><p style="font-size: 12px;"><b>Philippine Index Medicus</b><br>
Dr. Florentino B. Herrera Jr. Medical Library College of of Medicine, University of the Philippines Manila<br>
The Health Sciences Center . <br>
Copyright 2004 F.B. Herrera, Jr. Medical Library. All rights reserved.</p><br>
</center>
</div>
</div>

<script type="text/javascript">
  function success(){
    alert("Message successfully sent!");
  }
</script>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





</body>

