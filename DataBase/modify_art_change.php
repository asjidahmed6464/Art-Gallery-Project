<?php
	include "connect.php";

	$artId = $_POST["txtArtid"];
	$artistId = $_POST["txtArtistid"];
	$genre = $_POST["txtGenre"];
	$price = $_POST["numPrice"];
    $condition = $_POST["txtCondition"];
    
    $qry = "UPDATE art
    SET ART_ID = '".$artId."', ARTIST_ID = '".$artistId."' , ART_GENRE = '".$genre."' , ART_PRICE = ".$price."
    WHERE ART_ID = '".$condition."' ";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Changes Applied Successfully!";
	}
	else
		$msg = "Error!";

	header("Location:modify_art.php?Message=$msg");
?>