<?php
require('../dbconnect/dbconnections.php');
session_start();
if(isset($_POST['show'])){
	$recordtype = "";
	$controlnumber = "";
	$all2 = "";
	$all3 = "";
	$all = "";
	$santol = "";


			foreach ($_POST['englishtitle'] as $key8 => $value8) {
		$englishtitle = $_POST['englishtitle'][$key8];
		$englishtitledelimeter = $_POST['englishtitledelimeter'][$key8];
		$englishtitlevalue = $_POST['englishtitlevalue'][$key8];
		$all9 = $englishtitledelimeter."".$englishtitlevalue."".$englishtitle;
		$santol .= $all9.",";
		$enginsert = $conn->prepare("INSERT INTO bb (recordtype) VALUES (?)");
		$enginsert->bind_Param("s", $all9);
		$enginsert->execute();
	}
			
			foreach ($_POST['personalauthor'] as $key11 => $value11) {
		$personalauthor = $_POST['personalauthor'][$key11];
		$personalauthordelimeter = $_POST['personalauthordelimeter'][$key11];
		$personalauthorvalue = $_POST['personalauthorvalue'][$key11];
		$all12 = $personalauthordelimeter."".$personalauthorvalue."".$personalauthor;
		$santol .= $all12.",";
		$personalinsert = $conn->prepare("INSERT INTO cc (recordtype) VALUES (?)");
		$personalinsert->bind_Param("s", $all12);
		$personalinsert->execute();
	}
			foreach ($_POST['sourcedocument'] as $key15 => $value15) {
		$sourcedocument = $_POST['sourcedocument'][$key15];
		$sourcedocumentdelimeter = $_POST['sourcedocumentdelimeter'][$key15];
		$sourcedocumentvalue = $_POST['sourcedocumentvalue'][$key15];
		$sourcedocumentdate = $_POST['sourcedocumentdate'][$key15];
		$sourcedocumentdatedelimeter = $_POST['sourcedocumentdatedelimeter'][$key15];
		$sourcedocumentdatevalue = $_POST['sourcedocumentdatevalue'][$key15];
		$sourcedocumentpage = $_POST['sourcedocumentpage'][$key15];
		$sourcedocumentpagedelimeter = $_POST['sourcedocumentpagedelimeter'][$key15];
		$sourcedocumentpagevalue = $_POST['sourcedocumentpagevalue'][$key15];
		$all16 = $sourcedocumentdelimeter."".$sourcedocumentvalue."".$sourcedocument;
		$santol .= $all16.",";
		$alldate = $sourcedocumentdatedelimeter."".$sourcedocumentdatevalue."".$sourcedocumentdate;
		$allpage = $sourcedocumentpagedelimeter."".$sourcedocumentpagevalue."".$sourcedocumentpage;
		$sourceinsert = $conn->prepare("INSERT INTO dd (recordtype, date_source, page) VALUES (?, ?, ?)");
		$sourceinsert->bind_Param("sss", $all16, $alldate, $allpage);
		$sourceinsert->execute();
	}
			foreach ($_POST['encoder'] as $key20 => $value20) {
		$encoder = $_POST['encoder'][$key20];
		$encoderdelimeter = $_POST['encoderdelimeter'][$key20];
		$encodervalue = $_POST['encodervalue'][$key20];
		$all21 = $encoderdelimeter."".$encodervalue."".$encoder;
		$santol .= $all21.",";
		$encoderinsert = $conn->prepare("INSERT INTO ee (recordtype) VALUES (?)");
		$encoderinsert->bind_Param("s", $all21);
		$encoderinsert->execute();

	}
			foreach ($_POST['physicalclassification'] as $key21 => $value21) {
		$physicalclassification = $_POST['physicalclassification'][$key21];
		$physicalclassificationdelimeter = $_POST['physicalclassificationdelimeter'][$key21];
		$physicalclassificationvalue = $_POST['physicalclassificationvalue'][$key21];
		$all22 = $physicalclassificationdelimeter."".$physicalclassificationvalue."".$physicalclassification;
		$santol .= $all22.",";
		$classinsert = $conn->prepare("INSERT INTO ff (recordtype) VALUES (?)");
		$classinsert->bind_Param("s", $all22);
		$classinsert->execute();
	}
			foreach ($_POST['typeofmaterialdocument'] as $key22 => $value22) {
		$typeofmaterialdocument = $_POST['typeofmaterialdocument'][$key22];
		$typeofmaterialdocumentdelimeter = $_POST['typeofmaterialdocumentdelimeter'][$key22];
		$typeofmaterialdocumentvalue = $_POST['typeofmaterialdocumentvalue'][$key22];
		$all23 = $typeofmaterialdocumentdelimeter."".$typeofmaterialdocumentvalue."".$typeofmaterialdocument;
		$santol .= $all23.",";
		$materialinsert = $conn->prepare("INSERT INTO gg (recordtype) VALUES (?)");
		$materialinsert->bind_Param("s", $all23);
		$materialinsert->execute();
	}
			foreach ($_POST['languageoftext'] as $key23 => $value23) {
		$languageoftext = $_POST['languageoftext'][$key23];
		$languageoftextdelimeter = $_POST['languageoftextdelimeter'][$key23];
		$languageoftextvalue = $_POST['languageoftextvalue'][$key23];
		$all24 = $languageoftextdelimeter."".$languageoftextvalue."".$languageoftext;
		$santol .= $all24.",";
		$langinsert = $conn->prepare("INSERT INTO hh (recordtype) VALUES (?)");
		$langinsert->bind_Param("s", $all24);
		$langinsert->execute();
	}
	foreach ($_POST['subjectheadings'] as $key26 => $value26) {
		$subjectheadings = $_POST['subjectheadings'][$key26];
		$subjectheadingsdelimeter = $_POST['subjectheadingsdelimeter'][$key26];
		$subjectheadingsvalue = $_POST['subjectheadingsvalue'][$key26];
		$all27 = $subjectheadingsdelimeter."".$subjectheadingsvalue."".$subjectheadings;
		$santol .= $all27.",";
		$subjinsert = $conn->prepare("INSERT INTO ii (recordtype) VALUES (?)");
		$subjinsert->bind_Param("s", $all27);
		$subjinsert->execute();
	}
		foreach ($_POST['keywords'] as $key27 => $value27) {
		$keywords = $_POST['keywords'][$key27];
		$keywordsdelimeter = $_POST['keywordsdelimeter'][$key27];
		$keywordsvalue = $_POST['keywordsvalue'][$key27];
		$all28 = $keywordsdelimeter."".$keywordsvalue."".$keywords;
		$santol .= $all28.",";
		$keywordsinsert = $conn->prepare("INSERT INTO jj (recordtype) VALUES (?)");
		$keywordsinsert->bind_Param("s", $all28);
		$keywordsinsert->execute();
	}
			foreach ($_POST['abstract'] as $key25 => $value25) {
		$abstract = $_POST['abstract'][$key25];
		$abstractdelimeter = $_POST['abstractdelimeter'][$key25];
		$abstractvalue = $_POST['abstractvalue'][$key25];
		$all26 = $abstractdelimeter."".$abstractvalue."".$abstract;
		$santol .= $all26.",";
		$abstractinsert = $conn->prepare("INSERT INTO kk (recordtype) VALUES (?)");
		$abstractinsert->bind_Param("s", $all26);
		$abstractinsert->execute();
	}
	echo $santol;
	$query = mysqli_query($conn, "INSERT INTO aa (recordtype) VALUES ('$santol')");
}
?>