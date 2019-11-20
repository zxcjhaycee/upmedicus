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
	foreach ($_POST['recordtype'] as $key => $value) {
				$recordtype = $_POST['recordtype'][$key];
				$recorddelimeter = $_POST['recorddelimeter'][$key];
				$recordvalue = $_POST['recordvalue'][$key];
				$recordtypeall = $recorddelimeter."".$recordvalue."".$recordtype;
		// $all2 = $recordtype;
		$santol .= $recordtypeall.",";
	}
			foreach ($_POST['controlnumber'] as $key2 => $value2) {
		$controlnumber = $_POST['controlnumber'][$key2];
		$controldelimeter = $_POST['controldelimeter'][$key2];
		$controlvalue = $_POST['controlvalue'][$key2];
		$all3 = $controldelimeter."".$controlvalue."".$controlnumber;
		$santol .= $all3.",";
	}
			foreach ($_POST['recordnumber'] as $key3 => $value3) {
		$recordnumber = $_POST['recordnumber'][$key3];
		$recordnumberdelimeter = $_POST['recordnumberdelimeter'][$key3];
		$recordnumbervalue = $_POST['recordnumbervalue'][$key3];
		$all4 = $recordnumberdelimeter."".$recordnumbervalue."".$recordnumber;
		$santol .= $all4.",";
	}
			foreach ($_POST['bibliographiclevel'] as $key4 => $value4) {
		$bibliographiclevel = $_POST['bibliographiclevel'][$key4];
		$bibliographicleveldelimeter = $_POST['bibliographicleveldelimeter'][$key4];
		$bibliographiclevelvalue = $_POST['bibliographiclevelvalue'][$key4];
		$all5 = $bibliographicleveldelimeter."".$bibliographiclevelvalue."".$bibliographiclevel;
		$santol .= $all5.",";
	}
			foreach ($_POST['locationofdocument'] as $key5 => $value5) {
		$locationofdocument = $_POST['locationofdocument'][$key5];
		$locationofdocumentdelimeter = $_POST['locationofdocumentdelimeter'][$key5];
		$locationofdocumentvalue = $_POST['locationofdocumentvalue'][$key5];
		$all6 = $locationofdocumentdelimeter."".$locationofdocumentvalue."".$locationofdocument;
		$santol .= $all6.",";
	}
			foreach ($_POST['isbnissn'] as $key6 => $value6) {
		$isbnissn = $_POST['isbnissn'][$key6];
		$isbnissndelimeter = $_POST['isbnissndelimeter'][$key6];
		$isbnissnvalue = $_POST['isbnissnvalue'][$key6];
		$all7 = $isbnissndelimeter."".$isbnissnvalue."".$isbnissn;
		$santol .= $all7.",";
	}
			foreach ($_POST['contributing'] as $key7 => $value7) {
		$contributing = $_POST['contributing'][$key7];
		$contributinginstitutiondelimeter = $_POST['contributinginstitutiondelimeter'][$key7];
		$contributinginstitutionvalue = $_POST['contributinginstitutionvalue'][$key7];
		$all8 = $contributinginstitutiondelimeter."".$contributinginstitutionvalue."".$contributing;
		$santol .= $all8.",";
	}
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
			foreach ($_POST['nonenglishtitle'] as $key9 => $value9) {
		$nonenglishtitle = $_POST['nonenglishtitle'][$key9];
		$nonenglishtitledelimeter = $_POST['nonenglishtitledelimeter'][$key9];
		$nonenglishtitlevalue = $_POST['nonenglishtitlevalue'][$key9];
		$all10 = $nonenglishtitledelimeter."".$nonenglishtitlevalue."".$nonenglishtitle;
		$santol .= $all10.",";
	}
			foreach ($_POST['editionstatement'] as $key10 => $value10) {
		$editionstatement = $_POST['editionstatement'][$key10];
		$editionstatementdelimeter = $_POST['editionstatementdelimeter'][$key10];
		$editionstatementvalue = $_POST['editionstatementvalue'][$key10];
		$all11 = $editionstatementdelimeter."".$editionstatementvalue."".$editionstatement;
		$santol .= $all11.",";
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
			foreach ($_POST['authoraffilation'] as $key12 => $value12) {
		$authoraffilation = $_POST['authoraffilation'][$key12];
		$authoraffilationdelimeter = $_POST['authoraffilationdelimeter'][$key12];
		$authoraffilationvalue = $_POST['authoraffilationvalue'][$key12];
		$all13 = $authoraffilationdelimeter."".$authoraffilationvalue."".$authoraffilation;
		$santol .= $all13.",";
	}
			foreach ($_POST['corporateauthor'] as $key13 => $value13) {
		$corporateauthor = $_POST['corporateauthor'][$key13];
		$corporateauthordelimeter = $_POST['corporateauthordelimeter'][$key13];
		$corporateauthorvalue = $_POST['corporateauthorvalue'][$key13];
		$all14 = $corporateauthordelimeter."".$corporateauthorvalue."".$corporateauthor;
		$santol .= $all14.",";
	}
			foreach ($_POST['publicationdata'] as $key14 => $value14) {
		$publicationdata = $_POST['publicationdata'][$key14];
		$publicationdatadelimeter = $_POST['publicationdatadelimeter'][$key14];
		$publicationdatavalue = $_POST['publicationdatavalue'][$key14];
		$all15 = $publicationdatadelimeter."".$publicationdatavalue."".$publicationdata;
		$santol .= $all15.",";
	}
			foreach ($_POST['sourcedocument'] as $key15 => $value15) {
		$sourcedocument = $_POST['sourcedocument'][$key15];
		$sourcedocumentdelimeter = $_POST['sourcedocumentdelimeter'][$key15];
		$sourcedocumentvalue = $_POST['sourcedocumentvalue'][$key15];
		$all16 = $sourcedocumentdelimeter."".$sourcedocumentvalue."".$sourcedocument;
		$santol .= $all16.",";
		$sourceinsert = $conn->prepare("INSERT INTO dd (recordtype) VALUES (?)");
		$sourceinsert->bind_Param("s", $all16);
		$sourceinsert->execute();
	}
			foreach ($_POST['seriesstament'] as $key16 => $value16) {
		$seriesstament = $_POST['seriesstament'][$key16];
		$seriesstamentdelimeter = $_POST['seriesstamentdelimeter'][$key16];
		$seriesstamentvalue = $_POST['seriesstamentvalue'][$key16];
		$all17 = $seriesstamentdelimeter."".$seriesstamentvalue."".$seriesstament;
		$santol .= $all17.",";
	}
			foreach ($_POST['notes'] as $key17 => $value17) {
		$notes = $_POST['notes'][$key17];
		$notesdelimeter = $_POST['notesdelimeter'][$key17];
		$notesvalue = $_POST['notesvalue'][$key17];
		$all18 = $notesdelimeter."".$notesvalue."".$notes;
		$santol .= $all18.",";
	}
			foreach ($_POST['thesisnote'] as $key18 => $value18) {
		$thesisnote = $_POST['thesisnote'][$key18];
		$thesisnotedelimeter = $_POST['thesisnotedelimeter'][$key18];
		$thesisnotevalue = $_POST['thesisnotevalue'][$key18];
		$all19 = $thesisnotedelimeter."".$thesisnotevalue."".$thesisnote;
		$santol .= $all19.",";
	}
			foreach ($_POST['meetingconference'] as $key19 => $value19) {
		$meetingconference = $_POST['meetingconference'][$key19];
		$meetingconferencedelimeter = $_POST['meetingconferencedelimeter'][$key19];
		$meetingconferencevalue = $_POST['meetingconferencevalue'][$key19];
		$all20 = $meetingconferencedelimeter."".$meetingconferencevalue."".$meetingconference;
		$santol .= $all20.",";
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
			foreach ($_POST['physicaldescription'] as $key24 => $value24) {
		$physicaldescription = $_POST['physicaldescription'][$key24];
		$physicaldescriptiondelimeter = $_POST['physicaldescriptiondelimeter'][$key24];
		$physicaldescriptionvalue = $_POST['physicaldescriptionvalue'][$key24];
		$all25 = $physicaldescriptiondelimeter."".$physicaldescriptionvalue."".$physicaldescription;
		$santol .= $all25.",";
	}
			foreach ($_POST['abstract'] as $key25 => $value25) {
		$abstract = $_POST['abstract'][$key25];
		$abstractdelimeter = $_POST['abstractdelimeter'][$key25];
		$abstractvalue = $_POST['abstractvalue'][$key25];
		$all26 = $abstractdelimeter."".$abstractvalue."".$abstract;
		$santol .= $all26.",";
		$abstractinsert = $conn->prepare("INSERT INTO ii (recordtype) VALUES (?)");
		$abstractinsert->bind_Param("s", $all26);
		$abstractinsert->execute();
	}
	echo $santol;
	$query = mysqli_query($conn, "INSERT INTO aa (recordtype) VALUES ('$santol')");
}
?>