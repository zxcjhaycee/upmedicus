<?php include('header.php');?>

<?php

include('navbar.php');
?>
<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">         
          <div class="span2">
            <br/>
       
            
          </div> <!-- /span4 -->
            
          
          <div class="span8">
            
           <div class="widget">
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Cataloging version 2</h3>
                <br>
            </div> <!-- /widget-header -->
              <div class="widget-content">
  
                <div class="tab-pane" id="formcontrols">
                <form id="edit-profile" class="form-horizontal">
                  <fieldset>
                    
                    <div class="control-group">                     
                      <label class="control-label" for="username">Username</label>
                      <div class="controls">
                        <input type="text" class="span4" id="username" value="Example">
                        <br/>
                      </div> <!-- /controls -->       
                    
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                        <label class="control-label" for="firstname">First Name</label>
                      <div class="controls">
                        <input type="text" class="span6" id="firstname" value="2123s">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Last Name</label>
                      <div class="controls">
                        <input type="text" class="span6" id="lastname" value="Donga">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="email">Email Address</label>
                      <div class="controls">
                        <input type="text" class="span4" id="email" value="john.donga@egrappler.com">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <br /><br />
                    
                    <div class="control-group">                     
                      <label class="control-label" for="password1">Password</label>
                      <div class="controls">
                        <input type="password" class="span4" id="password1" value="thisispassword">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="password2">Confirm</label>
                      <div class="controls">
                        <input type="password" class="span4" id="password2" value="thisispassword">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                                        
                                        
                                        <div class="control-group">                     
                      <label class="control-label">Checkboxes</label>
                      
                                            
                                            <div class="controls">
                                            <label class="checkbox inline">
                                              <input type="checkbox"> Option 01
                                            </label>
                                            
                                            <label class="checkbox inline">
                                              <input type="checkbox"> Option 02
                                            </label>
                                          </div>    <!-- /controls -->    
                    </div> <!-- /control-group -->
                                        
                                        
                                        
                                        <div class="control-group">                     
                      <label class="control-label">Radio Buttons</label>
                      
                                            
                                            <div class="controls">
                                            <label class="radio inline">
                                              <input type="radio"  name="radiobtns"> Option 01
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> Option 02
                                            </label>
                                          </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->
                                        
                                        
                                        
                                        
                                        <div class="control-group">                     
                      <label class="control-label" for="radiobtns">Combined Textbox</label>
                      
                                            <div class="controls">
                                               <div class="input-prepend input-append">
                                                  <span class="add-on">$</span>
                                                  <input class="span2" id="appendedPrependedInput" type="text">
                                                  <span class="add-on">.00</span>
                                                </div>
                                              </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->
                                        
                                        
                                        
                                        
                                        
                                        <div class="control-group">                     
                      <label class="control-label" for="radiobtns">Textbox with Buttons </label>
                      
                                            <div class="controls">
                                               <div class="input-append">
                                                  <input class="span2 m-wrap" id="appendedInputButton" type="text">
                                                  <button class="btn" type="button">Go!</button>
                                                </div>
                                              </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->
                                        
                                        
                                        
                                        
                                        
                                        <div class="control-group">                     
                      <label class="control-label" for="radiobtns">Dropdown in a button group</label>
                      
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                                <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="i"></i> Make admin</a></li>
                                              </ul>
                                            </div>
                                              </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->
                                        
                                        
                                        
                                        
                                        
                                        <div class="control-group">                     
                      <label class="control-label" for="radiobtns">Button sizes</label>
                      
                                            <div class="controls">
                                              <a class="btn btn-large" href="#"><i class="icon-star"></i> Star</a>
                                                <a class="btn btn-small" href="#"><i class="icon-star"></i> Star</a>
                                                <a class="btn btn-mini" href="#"><i class="icon-star"></i> Star</a>
                                              </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->
                                        
                    
                      
                     <br />
                    
        
                </form>
                </div>
                
             
                
              </div>
              

            
              </div> <!-- /widget-content -->
              
            </div> <!-- /widget -->
            
          </div> <!-- /span4 -->
            
          
          <div class="span2">
    <br/>
           
          </div> <!-- /span4 -->
          
          
          
          
          </div>
        
  
      </div> <!-- /container -->
    
  </div> <!-- /main-inner -->
      
</div> <!-- /main -->



<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"><a href="#"><center>
        Philippine Index Medicus<br>
Dr. Florentino B. Herrera Jr. Medical Library College of of Medicine, University of the Philippines Manila<br>
The Health Sciences Center . <br>
&copy; 2004 F.B. Herrera, Jr. Medical Library. All rights reserved.<br></center>
</a> </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/bootstrap.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
