<?php
	include "connect.php";

	$buyerNo = $_POST["txtBuyerno"];
	
	//-------------------------------------------------------
	$getinfo = "SELECT 
                   BUYER_ID, 
				   BUYER_FNAME,
                   BUYER_LNAME, 
                   PHONE_NO
                FROM buyer 
             where BUYER_ID ='$buyerNo'";
    $res = $con->query($getinfo);
    
	
	
	
	 if($res->num_rows > 0)
    {
        $row   = $res->fetch_assoc();

        $id    = $row["BUYER_ID"];
        $fname = $row["BUYER_FNAME"];
        $lname = $row["BUYER_LNAME"];
		$phone = $row["PHONE_NO"];
	}
	else
	{
		echo'Something went wrong!';
	}
	//-------------------------------------------------------


	if ($con->query($qry)) {
		$msg ="Data Retrieved!";
	}
	else
		$msg = "Error!";
		header("Location:NoData.php");

	header("Location:modify_buyer_fetch.php?id=$id&f_name=$fname&l_name=$lname&phone_no=$phone");
?>
