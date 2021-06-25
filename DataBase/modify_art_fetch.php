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
	<title>Modify Art</title>
</head>
<body background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="modify_art_change.php" method="post">
		<table align="center">
			<th colspan="2"><u>Art Info</u></th>
			<tr>
				<td>
					Art ID
				</td>
				<td>				
					<input type="text" name="txtArtid" value='<?php echo $_GET['art_id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Artist ID
				</td>
				<td>
					<input type="text" name="txtArtistid" value='<?php echo $_GET['artist_id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Art Genre
				</td>
				<td>
					<input type="text" name="txtGenre" value='<?php echo $_GET['art_genre']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Art Price
				</td>
				<td>
					<input type="number" name="numPrice" value= '<?php echo $_GET['art_price']?>' required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="txtCondition" value= '<?php echo $_GET['art_id']?>' required hidden>
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
