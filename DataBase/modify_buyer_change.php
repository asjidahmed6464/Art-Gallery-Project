<?php
	include "connect.php";

	$Id = $_POST["txtBuyerNo"];
	$Fname = $_POST["txtFname"];
	$Lname = $_POST["txtLname"];
	$Phone = $_POST["txtPhone"];
    $condition = $_POST["txtCondition"];
    
    $qry = "UPDATE buyer
    SET BUYER_ID = '".$Id."', BUYER_LNAME = '".$Lname."' , BUYER_FNAME = '".$Fname."' , PHONE_NO = '".$Phone."'
    WHERE BUYER_ID = '".$condition."' ";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Changes Applied Successfully!";
	}
	else
		$msg = "Error Here!";
	header("Location:modify_buyer.php?Message=$msg");
?>