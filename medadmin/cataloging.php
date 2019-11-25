
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
              <div class="pull-right" style="margin-right:5px"><button type="button" id="reset_form" class="btn btn-info btn-sm">Reset</button></div>
            </div>
            <!-- /widget-header -->
            <form method="POST" id="formaline">
              <div class="widget-content">
                    <?php
                    require('modal.php');
                    ?>
                    <div id="show_form">
                      
                    </div>
              </div>
            <!-- /widget-content --> 
              <br>
              <div style="text-align:center">    
                  <input type="hidden" name="show" value="1">              
                  <input type="submit" name="submitted" class="btn btn-large btn-success" value="&#x2705; Submit"/><br>
              </div>
             </form>
             <br />
             <div class="span12" style="margin-top:-10px;">
               <fieldset class="span4" style="margin-left:250px;">
                        <select class="selectpicker" data-live-search="true" data-size="4" data-width="100%" title="Choose will be added catalogs" show-tick data-style="btn-default">
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
                    <fieldset class="span3" style="margin-left:20px">
                            <button type="button" class="btn btn-sm btn-info btn-added"><i class="icon-small icon-plus-sign"></i>Add</button>
                            <button type="button"  class="btn btn-sm btn-danger btn-removed"><i class="icon-small icon-remove-circle"></i>Remove</button>
                  </fieldset>       
             </div>
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
  const reset_form = document.getElementById('reset_form'); // reset button
  if(localStorage['fieldStorage'] != undefined){
        const fieldStorage = JSON.parse(localStorage['fieldStorage']);
        // console.log(fieldStorage);
    }else{
      checkfieldStorage();
    }
  $('.btn-added').click(function(e){
    var selectype = $('.selectpicker').val();
    const fieldStorage = JSON.parse(localStorage['fieldStorage']);

   if(selectype == 'personalauthor'){
    // const personal_author_counter = fieldStorage['personal_author'] + 1;
    const personal_author_element = $('.personal_author');
    if(fieldStorage['personal_author']  > 0){
      $('<tr class="personal_author"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="personal_author"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PERSONAL AUTHOR(S)</td><td><input type="text" name="personalauthordelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="personalauthorvalue[]" value="00$a"></td><td><input type="text" name="personalauthor[]"></td></tr>').insertAfter(personal_author_element[personal_author_element.length - 1]);
    }else{
      $('.header').append('<tr class="personal_author"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="personal_author"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PERSONAL AUTHOR(S)</td><td><input type="text" name="personalauthordelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="personalauthorvalue[]" value="00$a"></td><td><input type="text" name="personalauthor[]"></td></tr>');
    }
    // const class_personal_author = fieldStorage['personal_author'] == 0 ? 'class="personal_author1"' : 'class="personal_author'+personal_author_counter+'"';
     fieldStorage['personal_author'] += 1;
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PERSONAL AUTHOR(S)</td><td><input type="text" name="personalauthordelimeter[]" value="#"></td><td><input type="text" name="personalauthorvalue[]" value="00$a"></td> <td><input type="text" name="personalauthor[]"></td></tr></tbody>');
    }else if(selectype == 'sourcedocument'){
      const source_document_element = $('.source_document');
      if(fieldStorage['source_document'] > 0){
        $('<tbody class="source_document"><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="source_document"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SOURCE DOCUMENT</td><td><input type="text" name="sourcedocumentdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td><td><input type="text" name="sourcedocument[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; DATE</td><td><input type="text" name="sourcedocumentdatedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentdatevalue[]" value="00$d"></td><td><input type="text" name="sourcedocumentdate[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PAGE</td><td><input type="text" name="sourcedocumentpagedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentpagevalue[]" value="00$p"></td><td><input type="text" name="sourcedocumentpage[]"></td></tr></tbody>').insertAfter(source_document_element[source_document_element.length-1]);
      }else{
        $('.header').append('<tbody class="source_document"><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="source_document"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SOURCE DOCUMENT</td><td><input type="text" name="sourcedocumentdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td><td><input type="text" name="sourcedocument[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; DATE</td><td><input type="text" name="sourcedocumentdatedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentdatevalue[]" value="00$d"></td><td><input type="text" name="sourcedocumentdate[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PAGE</td><td><input type="text" name="sourcedocumentpagedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentpagevalue[]" value="00$p"></td><td><input type="text" name="sourcedocumentpage[]"></td></tr></tbody>');
      }
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SOURCE DOCUMENT</td><td><input type="text" name="sourcedocumentdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td><td><input type="text" name="sourcedocument[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; DATE</td><td><input type="text" name="sourcedocumentdatedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentdatevalue[]" value="00$d"></td><td><input type="text" name="sourcedocumentdate[]"></td></tr><tr><td></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PAGE</td><td><input type="text" name="sourcedocumentpagedelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="sourcedocumentpagevalue[]" value="00$p"></td><td><input type="text" name="sourcedocumentpage[]"></td></tr></tbody>');
      fieldStorage['source_document'] += 1;
    }else if(selectype == 'physicalclassification'){
      const physical_classification_element = $('.physical_classification');
      // console.log(physical_classification_element);
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PHYSICAL CLASSIFICATION</td><td><input type="text" name="physicalclassificationdelimeter[]" value="#"></td><td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td> <td><input type="text" name="physicalclassification[]"></td></tr></tbody>');
      if(fieldStorage['physical_classification'] > 0){
        $('<tr class="physical_classification"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="physical_classification"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PHYSICAL CLASSIFICATION</td><td><input type="text" name="physicalclassificationdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td><td><input type="text" name="physicalclassification[]"></td></tr>').insertAfter(physical_classification_element[physical_classification_element.length - 1]);
      }else{
        $('.header').append('<tr class="physical_classification"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="physical_classification"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; PHYSICAL CLASSIFICATION</td><td><input type="text" name="physicalclassificationdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td><td><input type="text" name="physicalclassification[]"></td></tr>');
      }
      // console.log($(physical_classification_element[physical_classification_element.length - 1]).html());
      fieldStorage['physical_classification'] += 1;
    }else if(selectype == 'typeofmaterialdocument'){
      const type_of_material_element = $('.type_of_material');
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;TYPE OF MATERIAL/DOCUMENT</td><td><input name="typeofmaterialdocumentdelimeter[]" type="text" value="#"></td><td><input name="typeofmaterialdocumentvalue[]" type="text" value="00$a"></td> <td><input name="typeofmaterialdocument[]" type="text"></td></tr></tbody>');
      if(fieldStorage['type_of_material'] > 0){
        $('<tr class="type_of_material"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="type_of_material"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; TYPE OF MATERIAL/DOCUMENT </td><td><input type="text" name="typeofmaterialdocumentdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="typeofmaterialdocumentvalue[]" value="00$a"></td><td><input type="text" name="typeofmaterialdocument[]"></td></tr>').insertAfter(type_of_material_element[type_of_material_element.length -1]);
      }else{
        $('.header').append('<tr class="type_of_material"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="type_of_material"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; TYPE OF MATERIAL/DOCUMENT </td><td><input type="text" name="typeofmaterialdocumentdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="typeofmaterialdocumentvalue[]" value="00$a"></td><td><input type="text" name="typeofmaterialdocument[]"></td></tr>');
      }
      fieldStorage['type_of_material'] += 1;
    }else if(selectype == 'languageoftext'){
      const language_of_text_element = $('.language_of_text');
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;LANGUAGE OF TEXT</td><td><input type="text" name="languageoftextdelimeter[]" value="#"></td><td><input type="text" name="languageoftextvalue[]" value="00$a"></td> <td><input name="languageoftext[]" type="text"></td></tr></tbody>');
      if(fieldStorage['language_of_text'] > 0){
        $('<tr class="language_of_text"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="language_of_text"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; LANGUAGE OF TEXT</td><td><input type="text" name="languageoftextdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="languageoftextvalue[]" value="00$a"></td><td><input type="text" name="languageoftext[]"></td></tr>').insertAfter(language_of_text_element[language_of_text_element.length - 1]);
      }else{
        $('.header').append('<tr class="language_of_text"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="language_of_text"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; LANGUAGE OF TEXT</td><td><input type="text" name="languageoftextdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="languageoftextvalue[]" value="00$a"></td><td><input type="text" name="languageoftext[]"></td></tr>');
      }
      fieldStorage['language_of_text'] += 1;
    }else if(selectype == 'abstract'){
      const abstract_element = $('.abstract');

      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; ABSTRACT</td><td><input type="text" name="abstractdelimeter[]" value="#"></td><td><input type="text" name="abstractvalue[]" value="00$a"></td><td><textarea class="form-control" name="abstract[]" rows="5" required="true" style="resize: none; width: 95%;"></textarea></td></tr></tbody>');
      if(fieldStorage['abstract'] > 0){
        $('<tr class="abstract"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="abstract"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; ABSTRACT</td><td><input type="text" name="abstractdelimeter" value="#"></td><td><input type="text" name="abstractvalue[]" value="00$a"></td><td><textarea class="form-control" name="abstract[]" rows="5" style="resize: none; width: 95%;"></textarea></td></tr>').insertAfter(abstract_element[abstract_element.length - 1]);
      }else{
        $('.header').append('<tr class="abstract"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="abstract"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; ABSTRACT</td><td><input type="text" name="abstractdelimeter" value="#"></td><td><input type="text" name="abstractvalue[]" value="00$a"></td><td><textarea class="form-control" name="abstract[]" rows="5" style="resize: none; width: 95%;"></textarea></td></tr>');
      }
      fieldStorage['abstract'] += 1;
    }else if(selectype == 'subjectheadings'){
      const subject_headings_element = $('.subject_headings');
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#subjectheadingsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SUBJECT HEADINGS (MESH)</td><td><input type="text" name="subjectheadingsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="subjectheadingsvalue[]" value="00$a"></td><td><input type="text" name="subjectheadings[]"></td></tr></tbody>');
     if(fieldStorage['subject_headings'] > 0){
      $('<tr class="subject_headings"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="subject_headings"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#subjectheadingsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SUBJECT HEADINGS (MESH)</td><td><input type="text" name="subjectheadingsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="subjectheadingsvalue[]" value="00$a"></td><td><input type="text" name="subjectheadings[]"></td></tr>').insertAfter(subject_headings_element[subject_headings_element.length -1]);
     }else{
       $('.header').append('<tr class="subject_headings"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="subject_headings"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#subjectheadingsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; SUBJECT HEADINGS (MESH)</td><td><input type="text" name="subjectheadingsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="subjectheadingsvalue[]" value="00$a"></td><td><input type="text" name="subjectheadings[]"></td></tr>');
     }
      fieldStorage['subject_headings'] += 1;
    }else if(selectype == 'keywords'){
      const keywords_element = $('.keywords');
      // $(".header").append('<tbody><tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#keywordsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; KEYWORDS (NON-MESH)</td><td><input type="text" name="keywordsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="keywordsvalue[]" value="00$a"></td><td><input type="text" name="keywords[]"></td></tr></tbody>');
      if(fieldStorage['keywords'] > 0){
        $('<tr class="keywords"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="keywords"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#keywordsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; KEYWORDS (NON-MESH)</td><td><input type="text" name="keywordsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="keywordsvalue[]" value="00$a"></td><td><input type="text" name="keywords[]"></td></tr>').insertAfter(keywords_element[keywords_element.length -1]);
      }else{
        $('.header').append('<tr class="keywords"><td><input type="checkbox" name="" class="form-control checkcontrolnumber" data-id="keywords"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#keywordsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; KEYWORDS (NON-MESH)</td><td><input type="text" name="keywordsdelimeter[]" value="#" maxlength="2" /></td><td><input type="text" name="keywordsvalue[]" value="00$a"></td><td><input type="text" name="keywords[]"></td></tr>');
      }
      fieldStorage['keywords'] += 1;
    }
    localStorage.setItem('fieldStorage', JSON.stringify(fieldStorage));
  });
  $('.btn-removed').click(function(){
    // const identifier = $('.checkcontrolnumber:checked').attr('data-id');
    // const identifierLength = $('.checkcontrolnumber:checked').length;
    const fieldStorage = JSON.parse(localStorage['fieldStorage']);
    $('.checkcontrolnumber:checked').each(function(){
        const identifier = $(this).attr('data-id');
        switch(identifier){
          case "abstract":
            fieldStorage['abstract'] -= 1;
          break;
          case "keywords":
            fieldStorage['keywords'] -= 1;
          break;
          case "subject_headings":
            fieldStorage['subject_headings'] -= 1;
          break;
          case "language_of_text":
            fieldStorage['language_of_text'] -= 1;
          break;
          case "type_of_material":
            fieldStorage['type_of_material'] -= 1;
          break;
          case "physical_classification":
            fieldStorage['physical_classification'] -= 1;
          break;
          case "personal_author":
            fieldStorage['personal_author'] -= 1;
          break;
          case "source_document":
            fieldStorage['source_document'] -= 1;
          break;
        }
        if(identifier == 'source_document'){
          $(this).closest('tbody').remove();
        }else{
          $(this).closest('tr').remove();
        }
    });
    localStorage.setItem('fieldStorage', JSON.stringify(fieldStorage));
    // $('.checkcontrolnumber:checked').closest('tr').remove();
  });

  $(reset_form).on('click', function(){
      checkfieldStorage();
      location.reload();
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
    // const test = JSON.parse(localStorage['fieldStorage']);

    show_form();
    $(document).on('submit','#formaline', function(event){
      event.preventDefault();
      $.ajax({
        type:"POST",
        url:"submitcatalog.php",
        proccessData:false,
        data: $('#formaline').serialize(),
        success:function(){
          show_form();
          alert("Success! Data recorded!");
          $("#formaline")[0].reset();

        }
      });
    });
  });
  function show_form(){
  var show = 1;
  const fieldStorage = JSON.parse(localStorage['fieldStorage']);
    $.ajax({
      method:"POST",
      url:"cataloging_data.php",
      async: false,
      data:{
        show:show,
        fieldStorage
      },
      success:function(response){
        $('#show_form').html(response);
      }
    });

  }

  function checkfieldStorage(){
    const fieldStorage = {
      'personal_author' : 1,
      'source_document' : 1,
      'physical_classification' : 1,
      'type_of_material' : 1,
      'language_of_text' : 1,
      'subject_headings' : 1,
      'keywords' : 1,
      'abstract' : 1
    };
    localStorage.setItem('fieldStorage', JSON.stringify(fieldStorage));
  }
</script>
<script src="js/bootstrap-select.min.js"></script>

<script src="js/excanvas.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script> 

</body>
</html>
