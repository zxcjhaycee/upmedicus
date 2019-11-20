<?php
if(isset($_POST['show'])){
	?>
	                 <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"/></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#recordtypeview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; RECORD TYPE.</td>
                        <td>

                          <input type="text" name="recorddelimeter[]" value="#" maxlength="2" />
                        </td>
                        <td><input type="text" name="recordvalue[]" value="00$a"></td>
                        <td><input type="text" name="recordtype[]"></td>
        
                       
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#controlnumberview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp;CONTROL NO.</td>
                        <td><input type="text" name="controldelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="controlvalue[]" value="00$a"></td>
                        <td><input type="text" name="controlnumber[]"></td>
             
                       
                      </tr>

                      <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#recordnoview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp;RECORD NO.</td>
                        <td><input type="text" name="recordnumberdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="recordnumbervalue[]" value="00$a"></td>
                        <td><input type="text" name="recordnumber[]"></td>
                      

                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#bibliographiclevelview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp;BIBLIOGRAPHIC LEVEL</td>
                        <td><input type="text" name="bibliographicleveldelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="bibliographiclevelvalue[]" value="00$a"></td>
                        <td><input type="text" name="bibliographiclevel[]"></td>
                 
                        
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#locationofdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp;LOCATION OF DOCUMENT</td>
                        <td><input type="text" name="locationofdocumentdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="locationofdocumentvalue[]" value="00$a"></td>
                        <td><input type="text" name="locationofdocument[]" ></td>
               
                       
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#isbnissnview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ISBN/ISSN</td>
                        <td><input type="text" name="isbnissndelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="isbnissnvalue[]" value="00$a"></td>
                        <td><input type="text" name="isbnissn[]"></td>
                    
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#contributinginstitutionview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp;CONTRIBUTING INSTITUTION</td>
                        <td><input type="text" name="contributinginstitutiondelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="contributinginstitutionvalue[]" value="00$a"></td>
                        <td><input type="text" name="contributing[]"></td>
                
                 
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#englishtitleview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ENGLISH TITLE
                        </td>
                        <td><input type="text" name="englishtitledelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="englishtitlevalue[]" value="00$a"></td>
                        <td><input type="text" name="englishtitle[]"></td>
               
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#nonenglishtitleview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; NON-ENGLISH TITLE</td>
                        <td><input type="text" name="nonenglishtitledelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="nonenglishtitlevalue[]" value="00$a"></td>
                        <td><input type="text" name="nonenglishtitle[]"></td>
                       
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#editionstatementview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; EDITION STATEMENT</td>
                        <td><input type="text" name="editionstatementdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="editionstatementvalue[]" value="00$a"></td>
                        <td><input type="text" name="editionstatement[]"></td>
                   
                  
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; PERSONAL AUTHOR(S)</td>
                        <td><input type="text" name="personalauthordelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="personalauthorvalue[]" value="00$a"></td>
                        <td><input type="text" name="personalauthor[]"></td>
                  
                    
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#authoraffilationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; AUTHOR AFFILIATION</td>
                        <td><input type="text" name="authoraffilationdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="authoraffilationvalue[]" value="00$a"></td>
                        <td><input type="text" name="authoraffilation[]"></td>
                 
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#corporateauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; CORPORATE AUTHOR(S)</td>
                        <td><input type="text" name="corporateauthordelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="corporateauthorvalue[]" value="00$a"></td>
                        <td><input type="text" name="corporateauthor[]"></td>
                     
                    
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#publicationdataview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; PUBLICATION DATA</td>
                        <td><input type="text" name="publicationdatadelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="publicationdatavalue[]" value="00$a"></td>
                        <td><input type="text" name="publicationdata[]"></td>
                 
               
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; SOURCE DOCUMENT</td>
                        <td><input type="text" name="sourcedocumentdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td>
                        <td><input type="text" name="sourcedocument[]"></td>
                  
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#seriesstatementview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; SERIES STATEMENT</td>
                        <td><input type="text" name="seriesstamentdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="seriesstamentvalue[]" value="00$a"></td>
                        <td><input type="text" name="seriesstament[]"></td>
               
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#notesview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; NOTES</td>
                        <td><input type="text" name="notesdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="notesvalue[]" value="00$a"></td>
                        <td><input type="text" name="notes[]"></td>
            
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#thesisnoteview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; THESIS NOTE</td>
                        <td><input type="text" name="thesisnotedelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="thesisnotevalue[]" value="00$a"></td>
                        <td><input type="text" name="thesisnote[]"></td>
                  
        
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#meetingconferenceview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; MEETING/CONFERENCE </td>
                        <td><input type="text" name="meetingconferencedelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="meetingconferencevalue[]" value="00$a"></td>
                        <td><input type="text" name="meetingconference[]"></td>
                  
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#encoderview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ENCODER</td>
                        <td><input type="text" name="encoderdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="encodervalue[]" value="00$a"></td>
                        <td><input type="text" name="encoder[]"></td>
                      
             
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; PHYSICAL CLASSIFICATION</td>
                        <td><input type="text" name="physicalclassificationdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td>
                        <td><input type="text" name="physicalclassification[]"></td>
                
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; TYPE OF MATERIAL/DOCUMENT </td>
                        <td><input type="text" name="typeofmaterialdocumentdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="typeofmaterialdocumentvalue[]" value="00$a"></td>
                        <td><input type="text" name="typeofmaterialdocument[]"></td>
        
                     
               
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; LANGUAGE OF TEXT</td>
                        <td><input type="text" name="languageoftextdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="languageoftextvalue[]" value="00$a"></td>
                        <td><input type="text" name="languageoftext[]"></td>
                   
                  
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physcalsdescriptionview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; PHYSICAL DESCRIPTION </td>
                        <td><input type="text" name="physicaldescriptiondelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="physicaldescriptionvalue[]" value="00$a"></td>
                        <td><input type="text" name="physicaldescription[]"></td>
                
                   
                      </tr>

                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ABSTRACT</td>
                        <td><input type="text" name="abstractdelimeter" value="#"></td>
                        <td><input type="text" name="abstractvalue[]" value="00$a"></td>
                        <td><textarea class="form-control" name="abstract[]" rows="5" style="resize: none; width: 95%;"></textarea></td>
                   </tr>
	<?php
}
?>




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
              <table class="table table-striped table-bordered">
               
                <thead>     
                      <tr>
                        <th width="3">✓</th>
                        <th width="27%">Field</th>
                        <th width="15%">Delimeter</th>
                        <th width="15%">Default Value</th>
                        <th width="40%">Information</th>
        
                       
                      </tr>
                    </thead>
                <tbody class="header" id="show_olddata">  
                  <?php
                  require('modal.php');
                  ?>
     

                </tbody>
             
              </table>

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
                        <option value="recordtype">Record Type</option>
                        <option value="controlnumber">Control Number</option>
                        <option value="recordnumber">Record Number</option>
                        <option value="bibliographiclevel">Bibliographic Level</option>
                        <option value="locationofdocument">Location of Document</option>
                        <option value="isbn/issn">ISBN/ISSN</option>
                        <option value="contributinginstitution">Contributing Institution</option>
                        <option value="englishtitle">English Title</option>
                        <option value="nonenglishtitle">Non-English Title</option>
                        <option value="editionstatement">Edition Statement</option>
                        <option value="personalauthor">Personal Author(s)</option>
                        <option value="authoraffilation">Author Affiliation</option>
                        <option value="corporateauthor">Corporate Author(s)</option>
                        <option value="publicationdata">Publication Data</option>
                        <option value="sourcedocument">Source Document</option>
                        <option value="seriesstament">Series Statement</option>
                        <option value="notes">Notes</option>
                        <option value="thesisnote">Thesis Note</option>
                        <option value="meetingconference">Meeting/Conference</option>
                        <option value="encoder">Encoder</option>
                        <option value="physicalclassification">Physical Classification</option>
                        <option value="typeofmaterialdocument">Type of Material/Document</option>
                        <option value="languageoftext">Language of Text</option>
                        <option value="physicaldescription">Physical Description</option>
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
  $('.btn-added').click(function(){
    var selectype = $('.selectpicker').val();
    if(selectype == 'recordtype'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"/></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#recordtypeview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;RECORD TYPE.</td><td><input type="text" name="recorddelimeter[]" value="#"></td><td><input type="text" name="recordvalue[]" value="00$a"></td> <td><input type="text" name="recordtype[]"></td></tr>');
    }else if(selectype == 'controlnumber'){
 $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#controlnumberview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;CONTROL NO.</td><td><input type="text" name="controldelimeter[]" value="#"></td><td><input type="text" name="controlvalue[]" value="00$a"></td> <td><input type="text" name="controlnumber[]"></td></tr>');
       counter2++;
    }else if(selectype == 'recordnumber'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#recordnoview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;RECORD NO.</td><td><input type="text" name="recordnumberdelimeter[]" value="#"></td><td><input type="text" name="recordnumbervalue[]" value="00$a"></td> <td><input name="recordnumber[]" type="text"></td></tr>');
    }else if(selectype == 'bibliographiclevel'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#bibliographiclevelview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;BIBLIOGRAPHIC LEVEL</td><td><input type="text" name="bibliographicleveldelimeter[]" value="#"></td><td><input type="text" name="bibliographiclevelvalue[]" value="00$a"></td> <td><input type="text" name="bibliographiclevel[]"></td></tr>');
    }else if(selectype == 'locationofdocument'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#locationofdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;LOCATION OF DOCUMENT</td><td><input type="text" name="locationofdocumentdelimeter[]" value="#"></td><td><input type="text" name="locationofdocumentvalue[]" value="00$a"></td> <td><input type="text" name="locationofdocument[]"></td></tr>');
    }else if(selectype == 'isbn/issn'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#isbnissnview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;ISBN/ISSN</td><td><input type="text" value="#" name="isbnissndelimeter[]"></td><td><input type="text" name="isbnissnvalue[]" value="00$a"></td> <td><input type="text" name="isbnissn[]"></td></tr>');
    }else if(selectype == 'contributinginstitution'){
        $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#contributinginstitutionview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;CONTRIBUTING INSTITUTION</td><td><input type="text" name="contributinginstitutiondelimeter[]" value="#"></td><td><input type="text" name="contributinginstitutionvalue[]" value="00$a"></td> <td><input type="text" name="contributinginstitution[]"></td></tr>');
    }else if(selectype == 'englishtitle'){
        $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#englishtitleview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;ENGLISH TITLE</td><td><input type="text" name="englishtitledelimeter[]" value="#"></td><td><input type="text" name="englishtitlevalue[]" value="00$a"></td> <td><input name="englishtitle[]" type="text"></td></tr>');
    }else if(selectype == 'nonenglishtitle'){
        $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#nonenglishtitleview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;NON-ENGLISH TITLE</td><td><input type="text" name="nonenglishtitledelimeter[]" value="#"></td><td><input type="text" name="nonenglishtitlevalue[]" value="00$a"></td> <td><input type="text" name="nonenglishtitle[]"></td></tr>');
    }else if(selectype == 'editionstatement'){
        $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#editionstatementview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;EDITION STATEMENT</td><td><input type="text" name="editionstatementdelimeter[]" value="#"></td><td><input type="text" name="editionstatementvalue[]" value="00$a"></td> <td><input type="text" name="editionstatement[]"></td></tr>');
    }else if(selectype == 'personalauthor'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PERSONAL AUTHOR(S)</td><td><input type="text" name="personalauthordelimeter[]" value="#"></td><td><input type="text" name="personalauthorvalue[]" value="00$a"></td> <td><input type="text" name="personalauthor[]"></td></tr>');
    }else if(selectype == 'authoraffilation'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#authoraffilationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;AUTHOR AFFILIATION</td><td><input type="text" value="#" name="authoraffilationdelimeter[]"></td><td><input type="text" name="authoraffilationvalue[]" value="00$a"></td> <td><input type="text" name="authoraffilation[]"></td></tr>');
    }else if(selectype == 'corporateauthor'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#corporateauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;CORPORATE AUTHOR(S)</td><td><input type="text" name="corporateauthordelimeter[]" value="#"></td><td><input type="text" name="corporateauthorvalue[]" value="00$a"></td> <td><input type="text" name="corporateauthor[]"></td></tr>');
    }else if(selectype == 'publicationdata'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#publicationdataview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PUBLICATION DATA</td><td><input type="text" name="publicationdatadelimeter[]" value="#"></td><td><input type="text" name="publicationdatavalue[]" value="00$a"></td> <td><input type="text" name="publicationdata[]"></td></tr>');
    }else if(selectype == 'sourcedocument'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;SOURCE DOCUMENT</td><td><input type="text" name="sourcedocumentdelimeter[]" value="#"></td><td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td> <td><input name="sourcedocument[]" type="text"></td></tr>');
    }else if(selectype == 'seriesstament'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#seriesstatementview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;SERIES STATEMENT</td><td><input type="text" name="seriesstamentdelimeter[]" value="#"></td><td><input type="text" name="seriesstamentvalue[]" value="00$a"></td> <td><input type="text" name="seriesstament[]"></td></tr>');
    }else if(selectype == 'notes'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#notesview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;NOTES</td><td><input type="text" name="notesdelimeter[]" value="#"></td><td><input type="text" name="notesvalue[]" value="00$a"></td> <td><input name="notes[]" type="text"></td></tr>');
    }else if(selectype == 'thesisnote'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#thesisnoteview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;THESIS NOTE</td><td><input type="text" value="#" name="thesisnotedelimeter[]"></td><td><input type="text" name="thesisnotevalue[]" value="00$a"></td> <td><input type="text" name="thesisnote[]"></td></tr>');
    }else if(selectype == 'meetingconference'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#meetingconferenceview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;MEETING/CONFERENCE</td><td><input type="text" name="meetingconferencedelimeter[]" value="#"></td><td><input name="meetingconferencevalue[]" type="text" value="00$a"></td> <td><input name="meetingconference[]" type="text"></td></tr>');
    }else if(selectype == 'encoder'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#encoderview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;ENCODER</td><td><input type="text" name="encoderdelimeter[]" value="#"></td><td><input type="text" name="encodervalue[]" value="00$a"></td> <td><input name="encoder[]" type="text"></td></tr>');
    }else if(selectype == 'physicalclassification'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PHYSICAL CLASSIFICATION</td><td><input type="text" name="physicalclassificationdelimeter[]" value="#"></td><td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td> <td><input type="text" name="physicalclassification[]"></td></tr>');
    }else if(selectype == 'typeofmaterialdocument'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;TYPE OF MATERIAL/DOCUMENT</td><td><input name="typeofmaterialdocumentdelimeter[]" type="text" value="#"></td><td><input name="typeofmaterialdocumentvalue[]" type="text" value="00$a"></td> <td><input name="typeofmaterialdocument[]" type="text"></td></tr>');
    }else if(selectype == 'languageoftext'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;LANGUAGE OF TEXT</td><td><input type="text" name="languageoftextdelimeter[]" value="#"></td><td><input type="text" name="languageoftextvalue[]" value="00$a"></td> <td><input name="languageoftext[]" type="text"></td></tr>');
    }else if(selectype == 'physicaldescription'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physcalsdescriptionview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp;PHYSICAL DESCRIPTION</td><td><input type="text" name="physicaldescriptiondelimeter[]" value="#"></td><td><input type="text" name="physicaldescriptionvalue[]" value="00$a"></td> <td><input name="physicaldescription[]" type="text"></td></tr>');
    }else if(selectype == 'abstract'){
      $(".header").append('<tr><td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td><td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i></button>&nbsp; ABSTRACT</td><td><input type="text" name="abstractdelimeter[]" value="#"></td><td><input type="text" name="abstractvalue[]" value="00$a"></td><td><textarea class="form-control" name="abstract[]" rows="5" required="true" style="resize: none; width: 95%;"></textarea></td></tr>');
    }
  });
  $('.btn-removed').click(function(){
    $('.checkcontrolnumber:checked').closest('tr').remove();
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
          alert("drewdb umiiyotngkambing es7");
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
