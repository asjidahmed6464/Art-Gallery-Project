<?php
	include "connect.php";

	$Id = $_POST["txtArtistno"];
	$Fname = $_POST["txtFname"];
	$Lname = $_POST["txtLname"];
	$Phone = $_POST["txtPhone"];
    $condition = $_POST["txtCondition"];
    
    $qry = "UPDATE artist
    SET ARTIST_ID = '".$Id."', ARTIST_LNAME = '".$Lname."' , ARTIST_FNAME = '".$Fname."' , ARTIST_PHONE = '".$Phone."'
    WHERE ARTIST_ID = '".$condition."' ";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Changes Applied Successfully!";
	}
	else
		$msg = "Error Here!";
	header("Location:modify_artist.php?Message=$msg");
?>