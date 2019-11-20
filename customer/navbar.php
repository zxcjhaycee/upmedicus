<!-- Navigation -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<!-- <div id="id01" class="modal">
            <div id='ajax_loader' style="position: fixed; left: 47%; top: 50%;">
    <img src="https://www.drupal.org/files/issues/ajax-loader.gif"></img>
</div>
  <div id="delegated" style="display: none">

  <form class="modal-content animate" method="POST" id="formaline06">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

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
</div> -->
        <nav class="navbar navbar-default navbar" role="navigation" style="margin-bottom: 0">
              <img src="../Pictures/medicus.jpg" style="width: 100%; height: 50%">
            <div class="navbar-header">
                
            </div>
            
            <ul class=" nav navbar-nav">
                <li id="home" style="cursor:pointer">
                   <a href='index.php'><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a href='aboutus.php'><i class="fa fa-info-circle fa-fw"></i> About Us</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a target="_blank" href='statistics.php'><i class="fa fa-area-chart fa-fw"></i> Statistics</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a href='announcement.php'><i class="fa fa-envelope fa-fw"></i> Announcement</a>
                </li>
                <li id="home" style="cursor:pointer">
                   <a href='inquiry.php'><i class="fa fa-phone fa-fw"></i> Inquiry</a>
                </li>

                

            </ul>
            
            <ul class="nav navbar-top-links navbar-right">
                <li id="home" style="cursor:pointer">
                <a href='register.php' style="width:auto;"> <i class="fa fa-user fa-fw"></i>Login</a>
                   <!-- <a onclick="document.getElementById('id01').style.display='block'" id="trypamore" style="width:auto;"> <i class="fa fa-user fa-fw"></i>Login</a> -->
                </li>
                
            </ul>
        </nav>
        <script src="../vendor/jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#trypamore').on('click',function(){
              if($('#delegated').is(':visible')){
                        $('#ajax_loader').fadeIn('slow');
          $("#delegated").css("display","none")
            }
    setTimeout(function(){
        $('#delegated').fadeIn('slow');
    },1000);
  
            });
            $('.sampler').on('click', function(){
       if($('input.sampler').prop('checked')){
        $("#pass123").attr('type', 'text'); 
            }else{
                      $("#pass123").attr('type', 'password'); 
            }
            });
     
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $(document).on('submit', '#formaline06', function(event){
              event.preventDefault();
              var formaline06 = $('#formaline06').serialize();
              $.ajax({
                method:"POST",
                url:"login-confirm.php",
                proccessData:false,
            dataType: "json",
                data: formaline06,
                success:function(response){
                  if(response.status == "true" && response.a == 'Admin'){
window.location.href = "../medadmin/index.php";
                  }else{
           $("#uname").css({'border': '1px solid rgb(252, 13, 35)'});
                      $("#pass123").css({'border': '1px solid rgb(252, 13, 35)'});
                      $('#alerterror').html('<div class="alert alert-danger"><strong>Warning!</strong> Username and Password does not exist!</div>');

                  }
                  
                }

              });

            });
          });
        </script>