<?php
session_start();
$username = $_SESSION['username'];
if(isset($_POST['show'])){
	?>

              <table class="table table-striped table-bordered header">
               
<thead>     
                      <tr>
                        <th width="3">✓</th>
                        <th width="27%">Field</th>
                        <th width="15%">Delimeter</th>
                        <th width="15%">Default Value</th>
                        <th width="40%">Information</th>
        
                       
                      </tr>
                    </thead>
<tbody>
                       <tr>
                        <td></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#englishtitleview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ENGLISH TITLE
                        </td>
                        <td><input type="text" name="englishtitledelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="englishtitlevalue[]" value="00$a"></td>
                        <td><input type="text" name="englishtitle[]"></td>
               
                      </tr>
</tbody>
  
<tbody>
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#personalauthorview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; PERSONAL AUTHOR(S)</td>
                        <td><input type="text" name="personalauthordelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="personalauthorvalue[]" value="00$a"></td>
                        <td><input type="text" name="personalauthor[]"></td>
                  
                    
                      </tr>
</tbody>


        <tbody>
                    <tr>
              <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
              <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
              </button>&nbsp; SOURCE DOCUMENT</td>
              <td><input type="text" name="sourcedocumentdelimeter[]" value="#" maxlength="2" /></td>
              <td><input type="text" name="sourcedocumentvalue[]" value="00$a"></td>
              <td><input type="text" name="sourcedocument[]"></td>
              </tr>
                      <tr>
            <td></td>
            <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
            </button>&nbsp; DATE</td>
            <td><input type="text" name="sourcedocumentdatedelimeter[]" value="#" maxlength="2" /></td>
            <td><input type="text" name="sourcedocumentdatevalue[]" value="00$d"></td>
            <td><input type="text" name="sourcedocumentdate[]"></td>
                  </tr>
                                  <tr>
            <td></td>
            <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#soucedocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
            </button>&nbsp; PAGE</td>
            <td><input type="text" name="sourcedocumentpagedelimeter[]" value="#" maxlength="2" /></td>
            <td><input type="text" name="sourcedocumentpagevalue[]" value="00$p"></td>
            <td><input type="text" name="sourcedocumentpage[]"></td>
                  </tr>
             </tbody>

                       <tr>
                        <td></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#encoderview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ENCODER</td>
                        <td><input type="text" readonly name="encoderdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" readonly name="encodervalue[]" value="00$a"></td>
                        <td><input type="text" readonly value="<?php echo ucfirst($username); ?>" name="encoder[]"></td>
                      
             
                      </tr>
<tbody>
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#physicalclassificationview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; PHYSICAL CLASSIFICATION</td>
                        <td><input type="text" name="physicalclassificationdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="physicalclassificationvalue[]" value="00$a"></td>
                        <td><input type="text" name="physicalclassification[]"></td>
                
                      </tr>
</tbody>
<tbody>
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#typeofmaterialdocumentview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; TYPE OF MATERIAL/DOCUMENT </td>
                        <td><input type="text" name="typeofmaterialdocumentdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="typeofmaterialdocumentvalue[]" value="00$a"></td>
                        <td><input type="text" name="typeofmaterialdocument[]"></td>
        
                     
               
                      </tr>
</tbody>
<tbody>
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#languageoftextview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; LANGUAGE OF TEXT</td>
                        <td><input type="text" name="languageoftextdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="languageoftextvalue[]" value="00$a"></td>
                        <td><input type="text" name="languageoftext[]"></td>
                   
                  
                      </tr>
</tbody>
<tbody>
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#subjectheadingsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; SUBJECT HEADINGS (MESH)
                        </td>
                        <td><input type="text" name="subjectheadingsdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="subjectheadingsvalue[]" value="00$a"></td>
                        <td><input type="text" name="subjectheadings[]"></td>
               
                      </tr>
</tbody>
<tbody>
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#keywordsview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; KEYWORDS (NON-MESH)
                        </td>
                        <td><input type="text" name="keywordsdelimeter[]" value="#" maxlength="2" /></td>
                        <td><input type="text" name="keywordsvalue[]" value="00$a"></td>
                        <td><input type="text" name="keywords[]"></td>
               
                      </tr>
</tbody>
<tbody>
  
                       <tr>
                        <td><input type="checkbox" name="" class="form-control checkcontrolnumber"></td>
                        <td><button type="button" class="btn btn-info btn-mini" href="#view" data-target="#abstractview" data-toggle="modal"><i class="icon-small icon-fullscreen"></i>
</button>&nbsp; ABSTRACT</td>
                        <td><input type="text" name="abstractdelimeter" value="#"></td>
                        <td><input type="text" name="abstractvalue[]" value="00$a"></td>
                        <td><textarea class="form-control" name="abstract[]" rows="5" style="resize: none; width: 95%;"></textarea></td>
                   </tr>
                 </tbody>
               </table>
	<?php
}
?>