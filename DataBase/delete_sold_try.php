<?php
	include "connect.php";
	$orderId = $_POST["txtOrderid"];
	$qry = "DELETE FROM sold WHERE ORDER_ID='".$orderId."'";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Sold Deleted!";
	}
	else
		$msg = "Error!";

	header("Location:delete_sold.php?Message=$msg")
?>
