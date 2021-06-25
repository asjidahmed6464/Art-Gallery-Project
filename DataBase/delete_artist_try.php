<?php
	include "connect.php";
	$artistNo = $_POST["txtArtistno"];
	$qry = "DELETE FROM artist WHERE ARTIST_ID='".$artistNo."'";

	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Artist Deleted!";
	}
	else
		$msg = "Error!";

	header("Location:delete_artist.php?Message=$msg")
?>