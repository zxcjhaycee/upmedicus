<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
require('../dbconnect/dbconnections.php');
?>
<body>
  

<style>
  .nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:2s; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;

}
.drewdbclass{
    background-color:#ff4d4d !important;
    padding-top: 10px;
    padding-bottom: 10px;

}
</style>
  <?php include('navbar.php'); ?>
  <br>
  <br>
<center>
    <div class="col-sm-12">

        <div class="panel-group" style="width: 95%;">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Search WEBOPAC</h3></div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <form method="POST" action="" id="searchable">    
                            <div class="col-sm-4 col-sm-offset-4">
                                <center>
                                <div style="margin-left:10px">
                                    <div class="col-sm-2">
                                        <label style="margin-left: 20px;"><input type="radio" name="criteria" checked required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Any'){ echo "checked"; } ?> value="Any"> Any </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label><input type="radio" name="criteria" style="margin-left:10px;" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Author'){ echo "checked"; } ?> value="Author"> Author </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label><input type="radio" name="criteria" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Title'){ echo "checked"; } ?> value="Title"> Title </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label><input type="radio" name="criteria"  style="margin-left:10px;" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Subject'){ echo "checked"; } ?> value="Subject"> Subject </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label><input type="radio" name="criteria"  style="margin-left:10px;" required <?php if(isset($_POST['criteria']) &&  $_POST['criteria'] == 'Abstract'){ echo "checked"; } ?> value="Abstract"> Abstract </label>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="hidden" name="totality" class="totality">
                                        <label style="margin-left: -10px;" for="searchfield">Search for:</label>
                                        <input type="text" value="<?php if(isset($_POST['search'])): echo $_POST['search']; endif;  ?>" class="form-control" id="searchfield" name="search" placeholder="Enter Search Keywords" style="margin-right: 5%;width: 79.8%">
                                    </div>
                                </div>
                            </div>

                                <div class="col-sm-12">
                                    <div class="col-sm-2 col-sm-offset-4">
                                        <button type="search" id="search" name="btnsearch">Search</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" id="clear" name="clear">Clear Search</button>
                                    </div>
                                </div>
                            </center>

        <!-- <div style="height: 20px;"></div>
        <div class="col-sm-12">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">

                </div>

                <div class="col-sm-4"></div>
        </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th width="8%">Action</th>
    </tr>
</thead>
    <tbody>
<?php
function searchAllDB($search,$criteria){
    global $conn;
    $output = "";
    $search = mysqli_escape_string($conn, $search);
    // $query = "";
    $queryCounter = "SET @num:=0;";
    $result = mysqli_query($conn, $queryCounter);
    switch($criteria){
        case "Any":
            $query = "SELECT
            a.id,
            a.title,
            a.type,
            @num := @num + 1 AS counter
            FROM  (SELECT 
            a.id,
            IF( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) AS title,     
            'old' as type      
            FROM _tblbib a
            LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
            LEFT JOIN tbl_title c ON c.titleID = b.titleID 
            WHERE 1=1 AND a.marc LIKE ('%".$search."%') AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != ''
            UNION
            SELECT
                a.primaryno as id,
                SUBSTR(title,6) as title,
                'new' as type
            FROM
                t_title a 
                LEFT JOIN t_abstract b ON b.primaryno = a.primaryno
                LEFT JOIN t_author c ON c.primaryno = b.primaryno
                LEFT JOIN t_keyword d ON d.primaryno = a.primaryno
                LEFT JOIN t_source e ON e.primaryno = a.primaryno
                LEFT JOIN t_subject f ON f.primaryno = a.primaryno
                WHERE 
                (a.title LIKE ('%".$search."%')
                    OR b.abstract LIKE ('%".$search."%')
                    OR c.author LIKE ('%".$search."%')
                    OR d.keyword LIKE ('%".$search."%')
                    OR CONCAT(e.source_document,e.source_document_date,e.source_document_page) LIKE ('%".$search."%')
                    OR f.subject LIKE ('%".$search."%'))
		        GROUP BY a.primaryno
                ) a
             ";
            $search_params = "anysearch";
        break;
        case "Abstract":
            $query = "SELECT
            a.id,
            a.title,
            a.type,
            @num := @num + 1 AS counter 
        FROM
            (
            SELECT
                a.id,
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) AS title,
                'old' as type
            FROM
                _tblbib a
                LEFT JOIN tbl_title_rel b ON a.id = b.primaryID
                LEFT JOIN tbl_title c ON c.titleID = b.titleID 
            WHERE
                1 = 1 
                AND a.marc LIKE ('%".$search."%')
            AND
            IF
            ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) != '' 
            UNION
            SELECT 
            a.primaryno,
          SUBSTR(a.title,6) as title,
            'new' as type
            FROM
             t_title a
             LEFT JOIN t_abstract b ON b.primaryno = a.primaryno
             WHERE
             b.abstract LIKE ('%".$search."%')
             GROUP BY a.primaryno
            ) a
            ";
            $search_params = "abstractsearch";
        break;
        case "Author":
            $query = "SELECT
            id,
            title,
            type,
            @num := @num + 1 AS counter 
        FROM
            (
            SELECT
                a.id,
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) AS title,
                'old' AS type 
            FROM
                _tblbib a
                LEFT JOIN tbl_title_rel b ON a.id = b.primaryID
                LEFT JOIN tbl_title c ON c.titleID = b.titleID
                LEFT JOIN tbl_author_rel d ON d.primaryID = a.id
                LEFT JOIN tbl_author e ON e.authorID = d.authorID 
            WHERE
                1 = 1 
                AND e.author LIKE ('%".$search."%')
            AND
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) != '' 
            GROUP BY
                c.title UNION
            SELECT
                a.primaryno,
                SUBSTR( a.title, 6 ) AS title,
                'new' AS type 
            FROM
                t_title a
                LEFT JOIN t_author b ON b.primaryno = a.primaryno 
            WHERE
                b.author LIKE ('%".$search."%')
            GROUP BY
            a.primaryno 
            ) a  ";
            // die($query);
            $search_params = "authorsearch";
        break;
        case "Title":
            $query = "SELECT
            id,
            title,
            type,
            @num := @num + 1 AS counter 
        FROM
            (
            SELECT
                a.id,
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) AS title,
                'old' AS type 
            FROM
                _tblbib a
                LEFT JOIN tbl_title_rel b ON a.id = b.primaryID
                LEFT JOIN tbl_title c ON c.titleID = b.titleID 
            WHERE
                1 = 1 
                AND c.title LIKE ('%".$search."%')
            AND
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) != '' UNION
            SELECT
                a.primaryno,
                SUBSTR( a.title, 6 ) AS title,
                'new' AS type 
            FROM
                t_title a 
            WHERE
            a.title LIKE ('%".$search."%')
            ) a";
            $search_params = "titlesearch";
        break;
        case "Subject":
            $query = "SELECT
            id,
            title,
            type,
            @num := @num + 1 AS counter 
        FROM
            (
            SELECT
                a.id,
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) AS title,
                'old' AS type 
            FROM
                _tblbib a
                LEFT JOIN tbl_title_rel b ON a.id = b.primaryID
                LEFT JOIN tbl_title c ON c.titleID = b.titleID
                LEFT JOIN tbl_subject_rel d ON d.primaryID = a.id
                LEFT JOIN tbl_subject e ON e.subjectID = d.subjectID 
            WHERE
                1 = 1 
                AND e.SUBJECT LIKE ('%".$search."%')
            AND
            IF
                ( LEFT ( c.title, 1 ) = '', SUBSTR( c.title, 4 ), c.title ) != '' 
            GROUP BY
                c.title UNION
            SELECT
                a.primaryno,
                SUBSTR( a.title, 6 ) AS title,
                'new' AS type 
            FROM
                t_title a
                LEFT JOIN t_subject b ON b.primaryno = a.primaryno 
            WHERE
                b.`subject` LIKE ('%".$search."%')
            GROUP BY
            a.primaryno 
            ) a ";
            $search_params = "subjectsearch";
        break;
        // case "Abstract":
        //     $querySearch = "AND e.abstract LIKE ('%".$search."%')";
        //     $join = "LEFT JOIN tbl_abstract_rel d ON d.primaryID = a.id
        //              LEFT JOIN tbl_abstract e ON e.abstractID = d.abstractID";
        //     $group = "GROUP BY c.title";
        // break;
    }

    /* 
    $query = "
    SELECT a.id,IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) as title, @num:=@num+1 as counter FROM _tblbib a
    LEFT JOIN tbl_title_rel b ON a.id = b.primaryID 
    LEFT JOIN tbl_title c ON c.titleID = b.titleID 
    $join
    WHERE 1=1 $querySearch AND IF(LEFT(c.title,1)='',SUBSTR(c.title,4), c.title) != ''
     $group  ";
      */
    //  die($query);
    $result = mysqli_query($conn, $query);
    $keyword = isset($_POST['search']) ? $_POST['search'] : "";
    while($rowsauthorID = mysqli_fetch_array($result)){
        $link = $rowsauthorID['type'] == 'old' ? 
        "anysearch_new.php?id=".$rowsauthorID['id']."&keyword=".$keyword."&counter=".$rowsauthorID['counter']."&search=".$search_params."&type=".$rowsauthorID['type'].""
         :
         "anysearch_new.php?id=".$rowsauthorID['id']."&keyword=".$keyword."&counter=".$rowsauthorID['counter']."&search=".$search_params."&type=".$rowsauthorID['type'].""; 
        $output .= "<tr>
                        <td style='width:10%'>".$rowsauthorID['counter']."</td>
                        <td>".$rowsauthorID['title']."</td>
                        <td><a href='".$link."' target='_blank' class='btn btn-danger' style='border-radius:0px;width:100%'>View</a></td>
                    </tr>";
    }
     return $output;
}

if(isset($_POST['btnsearch'])){
    $search = $_POST['search'];
    $criteria = $_POST['criteria'];
    echo searchAllDB($search,$criteria);
    /*
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
    */
}

?>
</tbody>
</table>
</div>
</div>

<div class="col-sm-12">
    <div style="background-color: #D5DBDB;">
        <center>
            <br>
            <p style="font-size: 12px;">
                <b>Philippine Index Medicus</b>
                <br>
                Dr. Florentino B. Herrera Jr. Medical Library College of of Medicine, University of the Philippines Manila<br>
                The Health Sciences Center .
                <br>
            Copyright 2004 F.B. Herrera, Jr. Medical Library. All rights reserved.
            </p>
            <br>
        </center>
    </div>
</div>


<?php
if(isset($_SESSION['error'])){
  echo "<script>alert('Username and password is not exist!');</script>";
  $_SESSION['error'] = NULL;
}
?>

<?php include('script.php');?>

<script type="text/javascript">
  $(document).ready(function(){
    var table = $('#example').DataTable();
    var length = table.page.info().recordsTotal;
    var totality = $('.totality').val(length);
    $(document).on('click','#clear',function(){
         document.getElementById("searchfield").value = "";
    });
    $('#newarticle').addClass('active');
    $('#newarticle').DataTable({
    "bLengthChange": true,
    "bInfo": true,
    "bPaginate": true,
    "bFilter": true,
    "bSort": true,
    "pageLength": 500
    });
    $('#oldarticle').DataTable({
    "bLengthChange": true,
    "bInfo": true,
    "bPaginate": true,
    "bFilter": true,
    "bSort": true,
    "pageLength": 500
    });
});
</script>

</body>

</html>