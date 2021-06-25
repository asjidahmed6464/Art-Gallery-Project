<!DOCTYPE html>
<html>
<?php
	include "connect.php";

	$artId = $_POST["txtArtid"];
	
	//-------------------------------------------------------
	$getinfo = "SELECT 
                   ART_ID, 
				   ARTIST_ID,
                   ART_GENRE, 
                   ART_PRICE
                FROM art 
             where ART_ID ='$artId'";
    $res = $con->query($getinfo);
    
	
	
	
	 if($res->num_rows > 0)
    {
        $row = $res->fetch_assoc();
        $art_id= $row["ART_ID"];
        $artist_id= $row["ARTIST_ID"];
        $art_genre= $row["ART_GENRE"];
		$art_price= $row["ART_PRICE"];
		header("Location:modify_art_fetch.php?art_id=$art_id&artist_id=$artist_id&art_genre=$art_genre&art_price=$art_price");
	}
	else
	{
		header("Location:NoData.php");
	}
	//-------------------------------------------------------


	if ($con->query($getinfo)) {
		$msg ="Data Retrieved!";
	}
	else
		$msg = "Error!";

?>
</html>