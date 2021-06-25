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
	<title>Modify Buys</title>
</head>
<body  background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="modify_buys_change.php" method="post">
		<table align="center">
			<th colspan="2"><u>Buys Info</u></th>
			<tr>
				<td>
					Order ID
				</td>
				<td>				
					<input type="text" name="txtOrder" value='<?php echo $_GET['order_id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Artist ID
				</td>
				<td>
					<input type="text" name="txtArtist" value='<?php echo $_GET['artist_id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Buyer ID
				</td>
				<td>
					<input type="text" name="txtBuyer" value='<?php echo $_GET['buyer_id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Art ID
				</td>
				<td>
					<input type="text" name="txtArt" value= '<?php echo $_GET['art_id']?>' required>
				</td>
			</tr>

            <tr>
				<td>
					Price
				</td>
				<td>
					<input type="text" name="txtPrice" value= '<?php echo $_GET['price']?>' required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="txtCondition" value= '<?php echo $_GET['order_id']?>' required hidden>
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
