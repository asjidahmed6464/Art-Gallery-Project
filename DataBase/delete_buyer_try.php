0<?php
	include "connect.php";
	$buyerNo = $_POST["txtBuyerno"];
	$qry ="DELETE FROM buyer WHERE BUYER_ID='".$buyerNo."'";

	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Buyer Deleted!";
	}
	else
		$msg = "Error!";

	header("Location:delete_buyer.php?Message=$msg")
?>
