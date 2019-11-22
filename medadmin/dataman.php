<?php
session_start();
$username = 'Admin';
$title = 'Dataman';

include('header.php');
include('navbar.php');
?>

<div class="main">
    <div class="main-inner">
      <div class="container">
        <div class="row">         

                <div class="span12">
                <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Data Entries</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="width: 7%; text-align: center;">Record No.</th>
                    <th style="text-align: center;">English Title</th>
                     <th style="text-align: center;">Author</th>
                     <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success" data-toggle="modal" data-target="#myModal"><i class="btn-icon-only icon-pencil"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
            <!-- /widget-content --> 
              <nav style="float: right;">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="">1</a></li>
                  <li class="page-item"><a class="page-link" href="">2</a></li>
                  <li class="page-item"><a class="page-link" href="">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <center>
          <p>English Title</p>
                <input type="text" style="width: 95%;"> <br>
              <p>Record type</p>
                <input type="text" style="width: 95%;"> <br>
                <p>Personal Author</p>
                <input type="text" style="width: 95%;"> <br>
              <p>Publisher</p>
                <input type="text"style="width: 95%;"> <br>
                <div style="height: 30px;">
              <p>Abstract</p>
                <textarea class="form-control" rows="5" required="true" style="resize: none; width: 95%;"></textarea> </div><br>
              </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/bootstrap.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
