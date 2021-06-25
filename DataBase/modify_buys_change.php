<?php
	include "connect.php";

	$Order_Id = $_POST["txtOrder"];
	$Artist_Id = $_POST["txtArtist"];
	$Buyer_Id = $_POST["txtBuyer"];
	$Art_Id = $_POST["txtArt"];
    $Price = $_POST["txtPrice"];
    $condition = $_POST["txtCondition"];
    
    $qry = "UPDATE sold
    SET ORDER_ID = '".$Order_Id."', ARTIST_ID = '".$Artist_Id."' , BUYER_ID = '".$Buyer_Id."' , ART_ID = '".$Art_Id."' , PRICE = '".$Price."'
    WHERE ORDER_ID = '".$condition."' ";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Changes Applied Successfully!";
	}
	else
    {
		$msg = "Error Here!";
    }
    header("Location:modify_buys.php?Message=$msg");
?>