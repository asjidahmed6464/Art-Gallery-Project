<?php
	include "connect.php";

	$artistNo = $_POST["txtArtistno"];

    //--------------------------------------------------------------------
    $getinfo = "SELECT 
                   ARTIST_ID, 
				   ARTIST_LNAME,
                   ARTIST_FNAME, 
                   ARTIST_PHONE
                FROM artist 
             where ARTIST_ID ='$artistNo'";
    $res = $con->query($getinfo);
    
	
	
	
	 if($res->num_rows > 0)
    {
        $row = $res->fetch_assoc();
        $artist_id= $row["ARTIST_ID"];
        $artist_lname= $row["ARTIST_LNAME"];
        $artist_fname= $row["ARTIST_FNAME"];
		$artist_phone= $row["ARTIST_PHONE"];
	}
	else
	{
		echo'Something went wrong!';
	}
    //-------------------------------------------------------------------

	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Data Retrieved!";
	}
	else
		$msg = "Error!";
		header("Location:NoData.php");

	header("Location:modify_artist_fetch.php?artist_id=$artist_id&artist_lname=$artist_lname&artist_fname=$artist_fname&artist_phone=$artist_phone");
?>
