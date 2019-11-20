<?php
require('../dbconnect/dbconnections.php');
if(isset($_POST['searchable'])){
    ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
    <th>Title</th>
    </tr>
</thead>
    <tbody id="searcheddata">
        <?php
function searchAllDB($search){
    global $conn;
   
    $number = 1;
    $out = "";
    $out2 = "";
    $out3 = "";
    $sql = "show tables";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0){
        while($r = $rs->fetch_array()){
            $table = $r[0];
             // $out .= $table.";<br/>";
            $sql_search = "select * from ".$table." where ";
            $sql_search_fields = Array();
            $sql2 = "SHOW COLUMNS FROM ".$table;
            $rs2 = $conn->query($sql2);
            if($rs2->num_rows > 0){
                while($r2 = $rs2->fetch_array()){
                    $colum = $r2[0];
                    $sql_search_fields[] = $colum." like('%".$search."%')";
                }
                $rs2->close();
            }
            $sql_search .= implode(" OR ", $sql_search_fields);
            $rs3 = $conn->query($sql_search);
            while($row26 = $rs3->fetch_array()){
            $out .= $row26[0]."<br/>";
            $hehe = $row26[0];
            $query = "SELECT * FROM _tblbib WHERE id = '$hehe'";
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
            <td><a >".str_replace("00\$a", "",$values[$key3])."</a></td>
            </tr>"; 
            $number++;
        endif;

    }

            }
           
            // $out = $sql_search_fields[1];
            if($rs3->num_rows > 0){
                $rs3->close();
            }
        }
        $rs->close();
    }
    if($out3 == ''){
        echo "<tr>
            <td>No record found</td>
            </tr>";              
                }else{
    return $out3;
}
    
    // return array($out);
}
    $search = $_POST['search'];
    $criteria = $_POST['criteria'];
    $totality = $_POST['totality'];
    if($criteria == "Any"):
    echo searchAllDB($search);
elseif($criteria == "Author"):
    echo searchAuthor($search);
elseif($criteria == "Title"):
    echo searchTitle($search);
elseif($criteria == "Subject"):
    echo searchSubject($search);
elseif($criteria == "Abstract"):
    echo searchAbstract($search);
    endif;
    ?>
    </tbody>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js
"></script>
    <?php
}