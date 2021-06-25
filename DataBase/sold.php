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
	<title>Buy</title>
</head>
<body background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="sold_try.php" method="post">
		<table align="center">
			<th colspan="2"><u>Buy</u></th>
			<tr>
				<td>
					Order ID
				</td>
				<td>
					<input type="text" name="txtOrderid" required>
				</td>
			</tr>
			<tr>
				<td>
					Artist ID
				</td>
				<td>
					<input type="text" name="txtArtistid" required>
				</td>
			</tr>
			<tr>
				<td>
					Buyer ID
				</td>
				<td>
					<input type="text" name="txtBuyerid" required>
				</td>
			</tr>
			<tr>
				<td>
					Art ID
				</td>
				<td>
					<input type="text" name="txtArtId" required>
				</td>
			</tr>
			<tr>
				<td>
					Price
				</td>
				<td>
					<input type="number" name="numPrice" required>
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