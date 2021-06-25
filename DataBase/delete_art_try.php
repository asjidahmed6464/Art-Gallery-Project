<?php
	include "connect.php";
	$artId = $_POST["txtArtid"];
	$qry = "DELETE FROM art WHERE ART_ID='".$artId."'";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Artwork Deleted!";
	}
	else
		$msg = "Error!";

	header("Location:delete_art.php?Message=$msg")
?>