<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body style="background-color: #f2f2f2;">

	<?php include('navbar.php'); ?>

 <div class="col-sm-12" style="height: 20px;"></div>
 <br>
 <br>

    <center><div class="panel-group" style="width: 50%;">
    <div class="panel panel-success">
  <div class="panel-heading"><h3>LOGIN TO YOUR ACCOUNT</h3></div>
  <div class="panel-body"><br>

  <form method="POST" id="formaline06">


    <div style="width: 100%;" class="container"><center>
      <img src="../Pictures/account.png" style="height: : 50px;">
      <h1>
        LOGIN TO YOUR ACCOUNT
      </h1><br>
      <div id="alerterror">
        
      </div>

      <label for="uname"><b>Username</b></label><br>
      <input style="width: 100%;" type="text" autocomplete="off" placeholder="Enter Username" id="uname" name="uname" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input style="width: 100%;" type="password" class-="pass123" id="pass123" placeholder="Enter Password" name="psw" required>
      <input type="hidden" name="login" value="1">
      <button type="submit"  name="submit">Login</button>
      <label>
                <input type="checkbox" class="sampler"  name="remember"> Show Password
                <br/>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label></center>
    </div>
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


</body>
