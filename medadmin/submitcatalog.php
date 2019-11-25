<?php
require('../dbconnect/dbconnections.php');
session_start();
if(isset($_POST['show'])){

	$row_title = array();

	$query_title = "SELECT titleID FROM t_title ORDER BY titleID desc LIMIT 1";
	$result_title = mysqli_query($conn, $query_title);
	$num_title = mysqli_num_rows($result_title);
	$row_title = mysqli_fetch_array($result_title);
	if($num_title > 0){
		$row_title['titleID'] += 1;
	}else{
		$row_title['titleID'] = 1;
	}
	$english_title = mysqli_escape_string($conn,$_POST['englishtitle']);
	$english_title_delimiter = mysqli_escape_string($conn, $_POST['englishtitledelimeter']);
	$english_title_value = mysqli_escape_string($conn, $_POST['englishtitlevalue']);

	$title = $english_title_delimiter."".$english_title_value."".$english_title;

	$title_insert = $conn->prepare("INSERT INTO t_title (title, primaryno) VALUES (?,?) ");
	$title_insert->bind_Param("si", $title, $row_title['titleID']);
	$title_insert->execute();

	/*
	$primaryidquery = mysqli_query($conn, "SELECT titleID from t_title ORDER BY titleID desc LIMIT 1");
	$primaryid = mysqli_fetch_array($primaryidquery);
	$primaryidno = $primaryid['titleID'];
	$nno1 = $primaryidno + 1;
	$primaryno = $nno1;
	*/

	// foreach ($_POST['englishtitle'] as $key => $value) {
		/*
		$englishtitle = $_POST['englishtitle'][$key8];
		$englishtitledelimeter = $_POST['englishtitledelimeter'][$key8];
		$englishtitlevalue = $_POST['englishtitlevalue'][$key8];
		$all9 = $englishtitledelimeter."".$englishtitlevalue."".$englishtitle;
		$santol .= $all9.",";
		$enginsert = $conn->prepare("INSERT INTO t_title (titleID, title, primaryno) VALUES (?, ?, ?)");
		$enginsert->bind_Param("sss", $primaryno, $all9, $primaryno);
		$enginsert->execute();
		*/
	// }
			
	foreach ($_POST['personalauthor'] as $key => $value) {
		$personal_author = mysqli_escape_string($conn, $_POST['personalauthor'][$key]);
		$personal_author_delimeter = mysqli_escape_string($conn, $_POST['personalauthordelimeter'][$key]);
		$personal_author_value = mysqli_escape_string($conn, $_POST['personalauthorvalue'][$key]);
		$personal_author_all = $personal_author_delimeter."".$personal_author_value."".$personal_author;
		$persona_author_insert = $conn->prepare("INSERT INTO t_author (author, primaryno) VALUES (?, ?)");
		$persona_author_insert->bind_Param("si", $personal_author_all, $row_title['titleID']);
		$persona_author_insert->execute();

	}

	foreach ($_POST['sourcedocument'] as $key => $value) {
		$source_document = mysqli_escape_string($conn, $_POST['sourcedocument'][$key]);
		$source_document_delimeter = mysqli_escape_string($conn, $_POST['sourcedocumentdelimeter'][$key]);
		$source_document_value = mysqli_escape_string($conn, $_POST['sourcedocumentvalue'][$key]);

		$source_document_date = mysqli_escape_string($conn, $_POST['sourcedocumentdate'][$key]);
		$source_document_date_delimeter = mysqli_escape_string($conn, $_POST['sourcedocumentdatedelimeter'][$key]);
		$source_document_date_value = mysqli_escape_string($conn, $_POST['sourcedocumentdatevalue'][$key]);

		$source_document_page = mysqli_escape_string($conn, $_POST['sourcedocumentpage'][$key]);
		$source_document_page_delimeter = mysqli_escape_string($conn, $_POST['sourcedocumentpagedelimeter'][$key]);
		$source_document_page_value = mysqli_escape_string($conn, $_POST['sourcedocumentpagevalue'][$key]);

		$source_document_all = $source_document_delimeter."".$source_document_value."".$source_document;
		$source_document_date_all = $source_document_date_delimeter."".$source_document_date_value."".$source_document_date;
		$source_document_page_all = $source_document_page_delimeter."".$source_document_page_value."".$source_document_page;

		$source_document_overall = $source_document_all."".$source_document_date_all."".$source_document_page_all;

		$source_document_insert = $conn->prepare("INSERT INTO t_source (source_document,source_document_date,source_document_page, primaryno) VALUES (?,?,?,?)");
		$source_document_insert->bind_Param("sssi", $source_document_all,$source_document_date_all,$source_document_page_all,$row_title['titleID']);
		$source_document_insert->execute();



	}


	// foreach ($_POST['encoder'] as $key20 => $value20) {
		$encoder = mysqli_escape_string($conn, $_POST['encoder']);
		$encoder_delimiter = mysqli_escape_string($conn, $_POST['encoderdelimeter']);
		$encoder_value = mysqli_escape_string($conn, $_POST['encodervalue']);
		$encoder_all = $encoder_delimiter."".$encoder_value."".$encoder;

		$encoder_insert = $conn->prepare("INSERT INTO t_encoder (encoder, primaryno) VALUES (?, ?)");
		$encoder_insert->bind_Param("ss", $encoder_all, $row_title['titleID']);
		$encoder_insert->execute();

	// }
	foreach ($_POST['physicalclassification'] as $key => $value) {
		$physical_classification = mysqli_escape_string($conn, $_POST['physicalclassification'][$key]);
		$physical_classification_delimeter = mysqli_escape_string($conn, $_POST['physicalclassificationdelimeter'][$key]);
		$physical_classification_value = mysqli_escape_string($conn, $_POST['physicalclassificationvalue'][$key]);

		$physical_classification_all = $physical_classification_delimeter."".$physical_classification_value."".$physical_classification;

		$physical_classification_insert = $conn->prepare("INSERT INTO t_phyclass (phyclass, primaryno) VALUES (?, ?)");
		$physical_classification_insert->bind_Param("si", $physical_classification_all, $row_title['titleID']);
		$physical_classification_insert->execute();
	}

	foreach ($_POST['typeofmaterialdocument'] as $key => $value) {
		$type_of_material_document = mysqli_escape_string($conn, $_POST['typeofmaterialdocument'][$key]);
		$type_of_material_document_delimeter = mysqli_escape_string($conn, $_POST['typeofmaterialdocumentdelimeter'][$key]);
		$type_of_material_document_value = mysqli_escape_string($conn, $_POST['typeofmaterialdocumentvalue'][$key]);

		$type_of_material_document_all = $type_of_material_document_delimeter."".$type_of_material_document_value."".$type_of_material_document;

		$type_of_material_document_insert = $conn->prepare("INSERT INTO t_mattype (mattype, primaryno) VALUES (?, ?)");
		$type_of_material_document_insert->bind_Param("si", $type_of_material_document_all, $row_title['titleID']);
		$type_of_material_document_insert->execute();
	}

	foreach ($_POST['languageoftext'] as $key => $value) {
		$language_of_text = mysqli_escape_string($conn, $_POST['languageoftext'][$key]);
		$language_of_text_delimeter = mysqli_escape_string($conn, $_POST['languageoftextdelimeter'][$key]);
		$language_of_text_value = mysqli_escape_string($conn, $_POST['languageoftextvalue'][$key]);

		$language_of_text_all = $language_of_text_delimeter."".$language_of_text_value."".$language_of_text;

		$language_of_text_insert = $conn->prepare("INSERT INTO t_language (language, primaryno) VALUES (?, ?)");
		$language_of_text_insert->bind_Param("si", $language_of_text_all, $row_title['titleID']);
		$language_of_text_insert->execute();
	}

	foreach ($_POST['subjectheadings'] as $key => $value) {
		$subject_headings = mysqli_escape_string($conn, $_POST['subjectheadings'][$key]);
		$subject_headings_delimeter = mysqli_escape_string($conn, $_POST['subjectheadingsdelimeter'][$key]);
		$subject_headings_value = mysqli_escape_string($conn, $_POST['subjectheadingsvalue'][$key]);

		$subject_headings_all = $subject_headings_delimeter."".$subject_headings_value."".$subject_headings;

		$subject_headings_insert = $conn->prepare("INSERT INTO t_subject (subject, primaryno) VALUES (?, ?)");
		$subject_headings_insert->bind_Param("si", $subject_headings_all, $row_title['titleID']);
		$subject_headings_insert->execute();

	}
		
	foreach ($_POST['keywords'] as $key => $value) {
		$keywords = mysqli_escape_string($conn, $_POST['keywords'][$key]);
		$keywords_delimeter = mysqli_escape_string($conn, $_POST['keywordsdelimeter'][$key]);
		$keywords_value = mysqli_escape_string($conn, $_POST['keywordsvalue'][$key]);
		$keywords_all = $keywords_delimeter."".$keywords_value."".$keywords;

		$keywords_insert = $conn->prepare("INSERT INTO t_keyword (keyword, primaryno) VALUES (?, ?)");
		$keywords_insert->bind_Param("si", $keywords_all, $row_title['titleID']);
		$keywords_insert->execute();


	}

	foreach ($_POST['abstract'] as $key => $value) {
		$abstract = mysqli_escape_string($conn, $_POST['abstract'][$key]);
		$abstract_delimeter = mysqli_escape_string($conn, $_POST['abstractdelimeter'][$key]);
		$abstract_value = mysqli_escape_string($conn, $_POST['abstractvalue'][$key]);
		$abstract_all = $abstract_delimeter."".$abstract_value."".$abstract;

		$abstract_insert = $conn->prepare("INSERT INTO t_abstract (abstract, primaryno) VALUES (?, ?)");
		$abstract_insert->bind_Param("si", $abstract_all, $row_title['titleID']);
		$abstract_insert->execute();

	}

}
?>