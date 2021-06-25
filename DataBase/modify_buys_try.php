<?php
	include "connect.php";

	$buyerNo = $_POST["txtOrderid"];

    //--------------------------------------------------------------------
    $getinfo = "SELECT 
                   ORDER_ID, 
				   ARTIST_ID,
                   BUYER_ID,
                   ART_ID, 
                   PRICE
                FROM sold 
             where ORDER_ID ='$buyerNo'";
    $res = $con->query($getinfo);
    
	
	
	
	 if($res->num_rows > 0)
    {
        $row = $res->fetch_assoc();
        $order_id= $row["ORDER_ID"];
        $artist_id= $row["ARTIST_ID"];
        $buyer_id= $row["BUYER_ID"];
		$art_id= $row["ART_ID"];
        $price= $row["PRICE"];
	}
	else
	{
		echo'No Data Found!';
        header("Location:NoData.php");
	}
    //-------------------------------------------------------------------

	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Data Retrieved!";
	}
	else
		$msg = "Error!";

	header("Location:modify_buys_fetch.php?order_id=$order_id&artist_id=$artist_id&buyer_id=$buyer_id&art_id=$art_id&price=$price");
?>
