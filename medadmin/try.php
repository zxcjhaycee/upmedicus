<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">

  </style>
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="col-md-12">
            <center>
                <form method="POST" action="" id="searchable">    
                    <div class="col-sm-2">
  <label><input type="radio" name="criteria" checked required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Any'){ echo "checked"; } ?> value="Any"> Any </label>
</div>
<div class="col-sm-2">
  <label><input type="radio" name="criteria" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Author'){ echo "checked"; } ?> value="Author"> Author </label>
</div>
<div class="col-sm-2">
  <label><input type="radio" name="criteria" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Title'){ echo "checked"; } ?> value="Title"> Title </label>
</div>
<div class="col-sm-2">
  <label><input type="radio" name="criteria" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Subject'){ echo "checked"; } ?> value="Subject"> Subject </label>
</div>
<div class="col-sm-2">
  <label><input type="radio" name="criteria" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Abstract'){ echo "checked"; } ?> value="Abstract"> Abstract </label>
</div>
            <div class="col-md-6" style="margin-left: 250px;margin-top: 20px">


<input type="hidden" name="totality" class="totality">
 <div class="input-group">
   <input type="text" class="form-control" id="search" value="<?php if(isset($_POST['search'])) { echo $_POST['search']; } ?>" name="search" placeholder="Search...">
   <span class="input-group-btn">
        <button class="btn btn-default" name="btnsearch" type="submit"><i class="glyphicon glyphicon-search"></i></button>
   </span>
</div>
</div>            
            </form>

</center>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Payment</th>
    <th>Title</th>
    </tr>
</thead>
    <tbody>
<?php
require('../dbconnect/dbconnections.php');
function searchAllDB($search){
    global $conn;
   
    $number = 1;
    $out = "";
    $out2 = "";
    $out3 = "";
   $outauthor = "";
    $query2 = mysqli_query($conn, "SELECT * FROM _tblbib as bib  WHERE bib.marc LIKE ('%".$search."%') ");
    $numrows = mysqli_num_rows($query2);
    while($rowsauthorID = mysqli_fetch_array($query2)){
       $primaryID = $rowsauthorID[0];
            $query = "SELECT * FROM _tblbib WHERE id = '$primaryID' AND marc LIKE '%210%'";
$result = mysqli_query($conn, $query);
$var = mysqli_fetch_array($result);
$content = $var['marc'];
$content = str_replace(">"," ",$content);   
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content);   
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);             
$DataFields = explode(chr(30),$DataFields);             
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));           
    $tag = array();
    $values = array();
    $gonine = 0;
    $quasar = array();
    $i = 0;
    while ( $i <= $MarcFieldsCount) {   
        $tag[$i] = substr($MarcFieldsData,$gonine,3);
        $gonine = $gonine + 12;
        $values[$i] = stripslashes($value[$i]); 
        $i++;
    }
    foreach ($tag as $key3 => $value3) {
        if($value3 == "210"):

            $out3 .= "
            <tr>
        <script type='text/javascript'>
        $(document).ready(function(){
            $('#sample".$primaryID."').on('click',function(){
                var santol = $('.totality').val();
                var haha = $(this).val();
                var keyword = $('#search').val();
                var detailed = ".$number.";
    window.open('drewdb.php?keyword='+keyword+'&total='+santol+'&fetch_detailed='+detailed, '_blank');
            });
        });
</script>
            <td><button id='sample".$primaryID."' type='button' value=".$primaryID.">Student Payments</button</td>
            <td><a >".str_replace("00\$a", "",$values[$key3])."</a></td>
            </tr>"; 
            $number++;
        endif;

    }

            
           }
            // $out = $sql_search_fields[1];
      
    
    if($out3 == ''){
        echo "<tr>
            <td>No record found</td>
            </tr>";              
                }else{
    return $out3;
}
    
    // return array($out);
}
function searchAuthor($search){
    global $conn;
    $outauthor = "";
    $number = 1;
    $query2 = "SET @num:=0;";
    $query2 .= "SELECT *, @num:=@num+1 'Row' FROM tbl_author as auth LEFT JOIN tbl_author_rel as rel ON rel.authorID = auth.authorID  WHERE auth.author LIKE ('%".$search."%')";
   if (mysqli_multi_query($conn, $query2)) {
do{
  if ($result2 = mysqli_store_result($conn)) {
    while($rowsauthorID = mysqli_fetch_row($result2)){
       $primaryID = $rowsauthorID[3];
       $samplepapre = $rowsauthorID[4];
       // echo $primaryID."<br/>";

//         $queryprimary = mysqli_query($conn, "SELECT * FROM tbl_author_rel WHERE authorID = '$authorID'");
//         while($rowsprimaryID = mysqli_fetch_array($queryprimary)){
//             $primaryID = $rowsprimaryID[1];
            $query = "SELECT * FROM _tblbib WHERE id = '$primaryID' AND marc LIKE '%210%' ORDER BY id ASC";
$result = mysqli_query($conn, $query);
$var = mysqli_fetch_array($result);
$content = $var['marc'];
$content = str_replace(">"," ",$content);   
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content);   
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);             
$DataFields = explode(chr(30),$DataFields);             
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));           
    $tag = array();
    $values = array();
    $gonine = 0;
    $quasar = array();
    $i = 0;
    while ( $i <= $MarcFieldsCount) {   
        $tag[$i] = substr($MarcFieldsData,$gonine,3);
        $gonine = $gonine + 12;
        $values[$i] = stripslashes($value[$i]); 
        $i++;
    }
        $num = 1;

               foreach($tag as $key4 => $value4):
                if($value4 == "210"):
             $outauthor .= "
            <tr>
                   <script type='text/javascript'>
        $(document).ready(function(){
            $('#sample".$primaryID."').on('click',function(){
                var santol = $('.totality').val();
                var haha = $(this).val();
                var id = ".$primaryID.";
                var keyword = $('#search').val();
                var detailed = ".$samplepapre.";
    window.open('drewdb2.php?keyword='+keyword+'&total='+santol+'&fetch_detailed='+detailed+'&id='+id, '_blank');
            });
        });
</script>
            <td><button id='sample".$primaryID."' type='button' value=".$primaryID.">Student Payments</button</td>
            <td><a href='#'>".str_replace("00\$a", "",$values[$key4])."</a></td>
            </tr>"; 
            $number++;
        endif;
    endforeach;
}

       }
        if (mysqli_more_results($conn)) {
            // printf("-----------------\n");
        }
     }
     while(mysqli_next_result($conn));
   }
       if($outauthor == ''):
        echo "<tr>
            <td>No record found</td>
            </tr>";        else:
       return $outauthor;
        endif;

 
 }
    
function searchTitle($search){
    global $conn;
    $outauthor = "";
    $number = 1;
    $query2 = "SET @num:=0;";
    $query2 .= "SELECT *, @num:=@num+1 'Row' FROM tbl_title as title LEFT JOIN tbl_title_rel as rel ON rel.titleID = title.titleID  WHERE title.title LIKE ('%".$search."%')";
   if (mysqli_multi_query($conn, $query2)) {
do{
  if ($result2 = mysqli_store_result($conn)) {
    while($rowsauthorID = mysqli_fetch_row($result2)){
       $primaryID = $rowsauthorID[7];
       $samplepapre = $rowsauthorID[8];
       // echo $primaryID."<br/>";

//         $queryprimary = mysqli_query($conn, "SELECT * FROM tbl_author_rel WHERE authorID = '$authorID'");
//         while($rowsprimaryID = mysqli_fetch_array($queryprimary)){
//             $primaryID = $rowsprimaryID[1];
            $query = "SELECT * FROM _tblbib WHERE id = '$primaryID' AND marc LIKE '%210%' ORDER BY id ASC";
$result = mysqli_query($conn, $query);
$var = mysqli_fetch_array($result);
$content = $var['marc'];
$content = str_replace(">"," ",$content);   
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content);   
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);             
$DataFields = explode(chr(30),$DataFields);             
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));           
    $tag = array();
    $values = array();
    $gonine = 0;
    $quasar = array();
    $i = 0;
    while ( $i <= $MarcFieldsCount) {   
        $tag[$i] = substr($MarcFieldsData,$gonine,3);
        $gonine = $gonine + 12;
        $values[$i] = stripslashes($value[$i]); 
        $i++;
    }
        $num = 1;

               foreach($tag as $key4 => $value4):
                if($value4 == "210"):
             $outauthor .= "
            <tr>
                   <script type='text/javascript'>
        $(document).ready(function(){
            $('#sample".$primaryID."').on('click',function(){
                var santol = $('.totality').val();
                var haha = $(this).val();
                var id = ".$primaryID.";
                var keyword = $('#search').val();
                var detailed = ".$samplepapre.";
    window.open('drewdb3.php?keyword='+keyword+'&total='+santol+'&fetch_detailed='+detailed+'&id='+id, '_blank');
            });
        });
</script>
            <td><button id='sample".$primaryID."' type='button' value=".$primaryID.">Student Payments</button</td>
            <td><a href='#'>".str_replace("00\$a", "",$values[$key4])."</a></td>
            </tr>"; 
            $number++;
        endif;
    endforeach;
}
       }
        if (mysqli_more_results($conn)) {
            // printf("-----------------\n");
        }
     }
     while(mysqli_next_result($conn));
   }
       if($outauthor == ''):
        echo "<tr>
            <td>No record found</td>
            </tr>";        else:
       return $outauthor;
        endif;

   }

function searchSubject($search){
    global $conn;
    $outauthor = "";
    $number = 1;
    $query2 = "SET @num:=0;";
    $query2 .= "SELECT *, @num:=@num+1 'Row' FROM tbl_subject as subject LEFT JOIN tbl_subject_rel as rel ON rel.subjectID = subject.subjectID  WHERE subject.subject LIKE ('%".$search."%')";
   if (mysqli_multi_query($conn, $query2)) {
do{
  if ($result2 = mysqli_store_result($conn)) {
    while($rowsauthorID = mysqli_fetch_row($result2)){
       $primaryID = $rowsauthorID[3];
       $samplepapre = $rowsauthorID[4];
       // echo $primaryID."<br/>";

//         $queryprimary = mysqli_query($conn, "SELECT * FROM tbl_author_rel WHERE authorID = '$authorID'");
//         while($rowsprimaryID = mysqli_fetch_array($queryprimary)){
//             $primaryID = $rowsprimaryID[1];
            $query = "SELECT * FROM _tblbib WHERE id = '$primaryID' AND marc LIKE '%210%' ORDER BY id ASC";
$result = mysqli_query($conn, $query);
$var = mysqli_fetch_array($result);
$content = $var['marc'];
$content = str_replace(">"," ",$content);   
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content);   
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);             
$DataFields = explode(chr(30),$DataFields);             
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));           
    $tag = array();
    $values = array();
    $gonine = 0;
    $quasar = array();
    $i = 0;
    while ( $i <= $MarcFieldsCount) {   
        $tag[$i] = substr($MarcFieldsData,$gonine,3);
        $gonine = $gonine + 12;
        $values[$i] = stripslashes($value[$i]); 
        $i++;
    }
        $num = 1;

               foreach($tag as $key4 => $value4):
                if($value4 == "210"):
             $outauthor .= "
            <tr>
                   <script type='text/javascript'>
        $(document).ready(function(){
            $('#sample".$primaryID."').on('click',function(){
                var santol = $('.totality').val();
                var haha = $(this).val();
                var id = ".$primaryID.";
                var keyword = $('#search').val();
                var detailed = ".$samplepapre.";
    window.open('drewdb4.php?keyword='+keyword+'&total='+santol+'&fetch_detailed='+detailed+'&id='+id, '_blank');
            });
        });
</script>
            <td><button id='sample".$primaryID."' type='button' value=".$primaryID.">Student Payments</button</td>
            <td><a href='#'>".str_replace("00\$a", "",$values[$key4])."</a></td>
            </tr>"; 
            $number++;
        endif;
    endforeach;
}

       }
        if (mysqli_more_results($conn)) {
            // printf("-----------------\n");
        }
     }
     while(mysqli_next_result($conn));
   }
       if($outauthor == ''):
        echo "<tr>
            <td>No record found</td>
            </tr>";        else:
       return $outauthor;
        endif;

   }

function searchAbstract($search){
    global $conn;
    $outauthor = "";
    $number = 1;
    $query2 = "SET @num:=0;";
    $query2 .= "SELECT *, @num:=@num+1 'Row' FROM tbl_abstract as abstract LEFT JOIN tbl_abstract_rel as rel ON rel.abstractID = abstract.abstractID  WHERE abstract.abstract LIKE ('%".$search."%')";
    var_dump($query2);
   if (mysqli_multi_query($conn, $query2)) {
do{
  if ($result2 = mysqli_store_result($conn)) {
    while($rowsauthorID = mysqli_fetch_row($result2)){
       $primaryID = $rowsauthorID[3];
       $samplepapre = $rowsauthorID[4];
       // echo $primaryID."<br/>";

//         $queryprimary = mysqli_query($conn, "SELECT * FROM tbl_author_rel WHERE authorID = '$authorID'");
//         while($rowsprimaryID = mysqli_fetch_array($queryprimary)){
//             $primaryID = $rowsprimaryID[1];
            $query = "SELECT * FROM _tblbib WHERE id = '$primaryID' AND marc LIKE '%210%' ORDER BY id ASC";
$result = mysqli_query($conn, $query);
$var = mysqli_fetch_array($result);
$content = $var['marc'];
$content = str_replace(">"," ",$content);   
$content = str_replace("<"," ",$content);
$content = str_replace("\""," ",$content);  
$ExplodeMarc = explode(chr(30),$content);   
$DataFields = substr($content,(strlen($ExplodeMarc[0])+1),strlen($content));
$DataFields = explode(chr(31),$DataFields);
$DataFields = implode("$",$DataFields);             
$DataFields = explode(chr(30),$DataFields);             
$value = $DataFields;
$MarcFieldsCount = (((strlen($ExplodeMarc[0])-24)/12)-1);
$MarcFieldsData = substr($ExplodeMarc[0],24,strlen($ExplodeMarc[0]));           
    $tag = array();
    $values = array();
    $gonine = 0;
    $quasar = array();
    $i = 0;
    while ( $i <= $MarcFieldsCount) {   
        $tag[$i] = substr($MarcFieldsData,$gonine,3);
        $gonine = $gonine + 12;
        $values[$i] = stripslashes($value[$i]); 
        $i++;
    }
        $num = 1;

               foreach($tag as $key4 => $value4):
                if($value4 == "210"):
             $outauthor .= "
            <tr>
                   <script type='text/javascript'>
        $(document).ready(function(){
            $('#sample".$primaryID."').on('click',function(){
                var santol = $('.totality').val();
                var haha = $(this).val();
                var id = ".$primaryID.";
                var keyword = $('#search').val();
                var detailed = ".$samplepapre.";
    window.open('drewdb5.php?keyword='+keyword+'&total='+santol+'&fetch_detailed='+detailed+'&id='+id, '_blank');
            });
        });
</script>
            <td><button id='sample".$primaryID."' type='button' value=".$primaryID.">Student Payments</button</td>
            <td><a href='#'>".str_replace("00\$a", "",$values[$key4])."</a></td>
            </tr>"; 
            $number++;
        endif;
    endforeach;
}

       }
        if (mysqli_more_results($conn)) {
            // printf("-----------------\n");
        }
     }
     while(mysqli_next_result($conn));
   }
       if($outauthor == ''):
        echo "<tr>
            <td>No record found</td>
            </tr>";        else:
       return $outauthor;
        endif;


   }

   function searchAllDBnew($search){
    global $conn;
   
    $number = 1;
    $out = "";
    $out2 = "";
    $out3 = "";
   $outauthor = "";
    $query2 = mysqli_query($conn, "SELECT * FROM tbl_keywordnew as bib  WHERE bib.keyword LIKE ('%".$search."%') ");
    $numrows = mysqli_num_rows($query2);
    while($rowsauthorID = mysqli_fetch_array($query2)){
      $primaryID = $rowsauthorID[0];

            $out3 .= "
            <tr>
        <script type='text/javascript'>
        $(document).ready(function(){
            $('#sample".$primaryID."').on('click',function(){
                var santol = $('.totality').val();
                var haha = $(this).val();
                var keyword = $('#search').val();
                var detailed = ".$number.";
    window.open('drewdb.php?keyword='+keyword+'&total='+santol+'&fetch_detailed='+detailed, '_blank');
            });
        });
</script>
            <td><button id='sample".$primaryID."' type='button' value=".$primaryID.">Student Payments</button</td>
            <td><a >".str_replace("00\$a", "",$rowsauthorID[1])."</a></td>
            </tr>"; 
            $number++;

    }

            
           
            // $out = $sql_search_fields[1];
      
    
    if($out3 == ''){
        echo "<tr>
            <td>No record found</td>
            </tr>";              
                }else{
    return $out3;
}
  }  

if(isset($_POST['btnsearch'])){
    $search = $_POST['search'];
    $criteria = $_POST['criteria'];
    $totality = $_POST['totality'];
    if($criteria == "Any"):
    echo searchAllDB($search);
    echo searchAllDBnew($search);
elseif($criteria == "Author"):
    echo searchAuthor($search);
elseif($criteria == "Title"):
    echo searchTitle($search);
elseif($criteria == "Subject"):
    echo searchSubject($search);
elseif($criteria == "Abstract"):
    echo searchAbstract($search);
    endif;
}

?>
</tbody>
</table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
     var table = $('#example').DataTable();
     var length = table.page.info().recordsTotal;
    var totality = $('.totality').val(length);
} );
</script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js
"></script>
</body>
</html>
