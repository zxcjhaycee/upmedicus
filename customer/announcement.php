<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>

	<?php include('navbar.php'); ?>

<div class="col-sm-12">
	<div class="col-sm-1"></div>
	
	<div class="col-sm-10">
<center>
	<h3><b>
Announcement 
</b></h3>
</center>

<p>The library has installed the PhpMyLibrary to test and evaluate its capability. This is the default content of the PhpMyLibrary. They will change this as soon as the library has decided to use this software as their library automation software. </p>

<p>This program was created and maintained by the PhpMyLibrary Team at http://www.phpmylibrary.org. If you want to have a copy of PhpMyLibrary software for your library download it at http://www.phpmylibrary.org </p>

<p>This server is powered by PhpMyLibary version 2.0.3 </p>

<p>Major changes are the following:
Catalog card printing in 3x5 printable format. (Catalog Format)
Bugfix in UserAdmin Group Status (Overall Admin, Circulation, Cataloger)
Inventory Reports in 8.5x14 Paper size.</p>

<p>The following are the detailed reports that can be generated from the library collection.<br><br>
<b>Transaction Reports</b><br>
<ul>
<li>Book Status Code List - This report shows all book status id and short description.</li>
<li>General Library Transaction Listing - This report shows general library transaction.</li>
</ul>

<b>Circulation Reports</b><br>
<ul>
<li>Access Control Code List - This report shows all user access control code and short description.</li>
<li>User Type Code List - This report shows all user type code and short description. Borrowing privileges.</li>
<li>User Status Code List - This report shows all user status code and short description.</li>
<li>User Department or Category Code List - This report shows all user department or category code and short description.</li>
<li>General Lirary User Listing - This report shows general library user listing.</li>
</ul>


<b>Cataloging Reports</b><br>
<ul>
<li>Holdings Code List - This report shows all holdings codes for every branch with code and short description.</li>
<li>Branch/Location Code List - This report shows all branch/location codes for every branch with code and short description.</li>
<li>Book Type Code List - This report shows all book type id and short description.</li>
<li>Book Status Code List - This report shows all book status id and short description.</li>
<li>Total Inventory Collection (Raw) - This report shows inventory in the collection in printed format. The sum came from Accession Numbers.</li>
<li>Total Catalog Collection (Catalog Format-Raw) - This report shows catalogs in the collection in Catalog format. The sum came from Call Numbers.</li>
<li>Total Inventory Collection (Arranged by Author) - This report shows inventory in the collection in printed format. The sum came from Accession Numbers and arranged in Author order.</li>
<li>Total Inventory Collection (Arranged by Author Card Format) - This report shows inventory in the collection in catalog format. The sum came from Accession Numbers and arranged in Author order.</li>
<li>Total Inventory Collection (Arranged by Title) - This report shows inventory in the collection in printed format. The sum came from Accession </li>Numbers and arranged in Title order.</li>
<li>Total Inventory Collection (Arranged by Title Card Format) - This report shows inventory in the collection in catalog format. The sum came from Accession Numbers and arranged in Title order.</li>
<li>Total Inventory Collection (Arranged by Call Number) - This report shows inventory in the collection in printed format. The sum came from Accession <li>Numbers and arranged in Call Number order.</li>
<li>Total Inventory Collection (Arranged by Book Type) - This report shows inventory in the collection in printed format. The sum came from Accession Numbers and arranged in Book Type order.</li>
<li>Total Inventory Collection (Arranged by Year) - This report shows inventory in the collection in printed format. The sum came from Accession Numbers and arranged in Year order.</li>
<li>Total Inventory Collection (Arranged by Accession Number) - This report shows inventory in the collection in printed format. The sum came from Accession Numbers and arranged in Accession order.</li>
<li>Total Inventory Collection (Arranged by Location or Branch) - This report shows inventory in the collection in printed format. The sum came from Accession Numbers and arranged in Location or Branch order.</li>
</ul>

<b>Miscelleneous Reports</b><br>
<ul>
<li>Database Records Total - This report shows all the tables total.</li>
</ul>

<b>PhpMyLibrary Maintenance (Malformed Catalogs)</b><br>
<ul>
<li>Trace malformed catalog in different order - This will allow you to list all malformed entries in author, title, call number, and book type order and will allow you to modify or delete it.</li>
</ul>


<b>PhpMyLibrary Maintenance Re-initialize Databases</b><br>
<ul>
<li>Re-initialize Catalog Table - This will erase bibliographic entries.</li>
<li>Re-initialize Holdings Table - This will erase holdings entries.</li>
<li>Re-initialize Transaction Table - This will erase transaction entries.</li>
<li>Re-initialize Users Table - This will erase user entries. The Administrator, Cataloger, Circulation Officer group will not be deleted.</li>
</ul>

<b>Import MARC - modified and has been made the official importing methods for PhpMyLibrary. Before PhpMyLibrary was using Python-based polgensql3.py for importing function but to take into consideration the webhosting-based PhpMyLibrary installation we strive to make all the PhpMyLibrary functions PHP-based. The MARC Backup method had been created also. Please browse on Maintenance Link and there you will find Export MARC data. This will allow you to backup or save your MARC data in your desired file. This also allows flexibility on future versions of PhpMyLibrary.</b><br>
<ul><li>Be noted. Always put 949 as Accession related tagging standard for PhpMyLibray. i.e 949__$aQCMMLR$gACC-123
949__$aLocationCode$gAccessionNumber$hYear$bCall Number Prefix$cClassification$dAuthor Designator or Cutter</li></ul>

<b>Web-based Installation - The web-based installation is already active. To install, simply type, i.e http://localhost/PhpMyLibrary/installation/</b><br>
<ul>
<li>For the mean time, the library setting config editing should still be done manually, access it at PhpMyLibrary/polerio/module/config/conf.php</li>
</ul>
</p>


<p>Modify this file to reflect your changes at PhpMyLibrary/polerio/contents/anouncement.html</p>
</div>
<div class="col-sm-1"></div>

</div>

<div class="col-sm-12" style="height: 20px;">
</div>



<div class="col-sm-12">
<div style="background-color: #D5DBDB;"><center>
	<br><p style="font-size: 12px;"><b>Philippine Index Medicus</b><br>
Dr. Florentino B. Herrera Jr. Medical Library College of of Medicine, University of the Philippines Manila<br>
The Health Sciences Center . <br>
Copyright 2004 F.B. Herrera, Jr. Medical Library. All rights reserved.</p><br>
</center>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





</body>

</html>