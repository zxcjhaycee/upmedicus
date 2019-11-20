
<?php
session_start();
$username = 'Admin';
$title = 'Cataloging';

include('header.php');
include('navbar.php');

?>


<div class="main">
  
    <div class="main-inner">

      <div class="container">
  
        <div class="row">         
              <div class="span12">
                <br/>
            
              <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Cataloging</h3>
            </div>
            <!-- /widget-header -->
                                    <form method="POST" id="formaline">
            <div class="widget-content">

                  <?php
                  require('modal.php');
                  ?>
<div id="show_olddata">
  
</div>
            </div>
            <!-- /widget-content --> 
            <br>
            <center>    
            <input type="hidden" name="show" value="1">              
                          <input type="submit" name="submitted" class="btn btn-large btn-success" value="&#x2705; Submit"/><br>
                          
                          </center>
             </form>
             <br />
            
                <fieldset class="span8">
                    <select class="selectpicker" data-live-search="true" data-size="4" data-width="100%" title="Choose will be added catalogs" show-tick>
                  <!--       <option></option> -->
                        <option value=""></option>
                        <option value="personalauthor">Personal Author(s)</option>
                        <option value="sourcedocument">Source Document</option>
                        <option value="physicalclassification">Physical Classification</option>
                        <option value="typeofmaterialdocument">Type of Material/Document</option>
                        <option value="languageoftext">Language of Text</option>
                        <option value="subjectheadings">Subject Headings (MESH)</option>
                        <option value="keywords">Keywords (NON-MESH)</option>

                        <option value="abstract">Abstract</option>
                    </select>
    </fieldset>
     <fieldset class="span3">
                        <button type="button" class="btn btn-large btn-info btn-added"><i class="icon-small icon-plus-sign"></i>Add
                        </button>
                        <button type="button"  class="btn btn-large btn-danger btn-removed"><i class="icon-small icon-remove-circle"></i>Remove
                        </button>
               </fieldset>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>



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
<script type="text/javascript">
$(document).ready(function(){
  var counter1 = 1;
  var counter2 = 1;
  $('.btn-added').click(function(e){
    var selectype = $('.selectpicker').val();
   if(selectype == 'personalauthor'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PERSONAL AUTHOR(S)</td><td><input type="text" name="personalauthordelimeter[]" value="#"></td><td><input type="text" name="personalauthorvalue[]" value="00$a"></td> <td><input type="text" name="personalauthor[]"></td></tr></tbody>');
    }else if(selectype == 'sourcedocument'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SOURCE DOCUMENT</td><td><input type="text" name="sourcedocumentdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td><td><input type="text" name="sourcedocument[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; DATE</td><td><input type="text" name="sourcedocumentdatedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentdatevalue[]" value="00$d"></td><td><input type="text" name="sourcedocumentdate[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PAGE</td><td><input type="text" name="sourcedocumentpagedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentpagevalue[]" value="00$p"></td><td><input type="text" name="sourcedocumentpage[]"></td></tr></tbody>');
    }else if(selectype == 'physicalclassification'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PHYSICAL CLASSIFICATION</td><td><input type="text" name="physicalclassificationdelimeter[]" value="#"></td><td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td> <td><input type="text" name="physicalclassification[]"></td></tr></tbody>');
    }else if(selectype == 'typeofmaterialdocument'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;TYPE OF MATERIAL/DOCUMENT</td><td><input name="typeofmaterialdocumentdelimeter[]" type="text" value="#"></td><td><input name="typeofmaterialdocumentvalue[]" type="text" value="00$a"></td> <td><input name="typeofmaterialdocument[]" type="text"></td></tr></tbody>');
    }else if(selectype == 'languageoftext'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;LANGUAGE OF TEXT</td><td><input type="text" name="languageoftextdelimeter[]" value="#"></td><td><input type="text" name="languageoftextvalue[]" value="00$a"></td> <td><input name="languageoftext[]" type="text"></td></tr></tbody>');
    }else if(selectype == 'abstract'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; ABSTRACT</td><td><input type="text" name="abstractdelimeter[]" value="#"></td><td><input type="text" name="abstractvalue[]" value="00$a"></td><td><textarea class="form-control" name="abstract[]" rows="5" required="true" style="resize: none; width: 95%;"></textarea></td></tr></tbody>');
    }else if(selectype == 'subjectheadings'){
      $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#subjectheadingsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SUBJECT HEADINGS (MESH)</td><td><input type="text" name="subjectheadingsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="subjectheadingsvalue[]" value="00$a"></td><td><input type="text" name="subjectheadings[]"></td></tr></tbody>');
    }else if(selectype == 'keywords'){
            $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#keywordsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; KEYWORDS (NON-MESH)</td><td><input type="text" name="keywordsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="keywordsvalue[]" value="00$a"></td><td><input type="text" name="keywords[]"></td></tr></tbody>');

    }
  });
  $('.btn-removed').click(function(){
    $('.checkcontrolnumber:checked').closest('tbody').remove();
  });


//     $('#buttonadd').click(function(){  
//         if($('.recordtype').length > 4){
//           alert('hahahahaha');
//         }else{
//             counter++;
//   $(".header").append('<li value="'+counter+'"><label class="container center">RECORD TYPE.<input tabindex="'+counter+'" type="text" name="recordtype[]" class="input_text recordtype"><button id="remove123" value="'+counter+'" type="button" class="btn btn-danger btn-xs">REMOVE</button></label></li>');
// }
//     $(document).on('click', '#remove123',function(){
//       var hehe = $(this).val();
//       var val = $(this).closest('li').val();
//       $(this).closest('li').remove();
//     });
    
  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    show_olddata();
    $(document).on('submit','#formaline', function(event){
      event.preventDefault();
      $.ajax({
        type:"POST",
        url:"submitcatalog.php",
        proccessData:false,
        data: $('#formaline').serialize(),
        success:function(){
          show_olddata();
          alert("Success! Data recorded!");
          $("#formaline")[0].reset();

        }
      });
    });
  });
  function show_olddata(){
  var show = 1;
    $.ajax({
      method:"POST",
      url:"cataloging_data.php",
      async: false,
      data:{
        show:show
      },
      success:function(response){
        $('#show_olddata').html(response);
      }
    });

  }
</script>
<script src="js/bootstrap-select.min.js"></script>

<script src="js/excanvas.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script> 

</body>
</html>
