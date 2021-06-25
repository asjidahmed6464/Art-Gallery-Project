<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<style>
	th 
	{
		font-size: 40px;
		text-align: center;
		padding: 12px;
		color: MediumSeaGreen;
	}
</style>
<head>
	<title>Modify Buyer</title>
</head>
<body background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="modify_buyer_change.php" method="post">
		<table align="center">
			<th colspan="2"><u>Buyer Info</u></th>
			<tr>
				<td>
					Buyer ID
				</td>
				<td>				
					<input type="text" name="txtBuyerNo" value='<?php echo $_GET['id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Buyer First Name
				</td>
				<td>
					<input type="text" name="txtFname" value='<?php echo $_GET['f_name']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Buyer Last Name
				</td>
				<td>
					<input type="text" name="txtLname" value='<?php echo $_GET['l_name']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Buyer Phone
				</td>
				<td>
					<input type="text" name="txtPhone" value= '<?php echo $_GET['phone_no']?>' required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="txtCondition" value= '<?php echo $_GET['id']?>' required hidden>
				</td>
			</tr>
			

			<tr>
				<td colspan="2" align="left">
					<input type="submit" value="Submit">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php
						if (isset($_GET["Message"])) {
							echo $_GET["Message"];
								
						}
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
