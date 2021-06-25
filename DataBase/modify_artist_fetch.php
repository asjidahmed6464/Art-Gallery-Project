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
	<title>Modify artist</title>
</head>
<body background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="modify_artist_change.php" method="post">
		<table align="center">
			<th colspan="2"><u>Artist Info</u></th>
			<tr>
				<td>
					Artist ID
				</td>
				<td>				
					<input type="text" name="txtArtistno" value='<?php echo $_GET['artist_id']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Artist First Name
				</td>
				<td>
					<input type="text" name="txtFname" value='<?php echo $_GET['artist_fname']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Artist Last Name
				</td>
				<td>
					<input type="text" name="txtLname" value='<?php echo $_GET['artist_lname']?>' required>
				</td>
			</tr>
			<tr>
				<td>
					Artist Phone
				</td>
				<td>
					<input type="text" name="txtPhone" value= '<?php echo $_GET['artist_phone']?>' required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="txtCondition" value= '<?php echo $_GET['artist_id']?>' required hidden>
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
