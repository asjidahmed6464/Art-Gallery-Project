<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>

title {text-align: center;}
h1 {text-align: center;padding: 12px;}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
<title>ART DETAILS</title>
<h1 style="color:MediumSeaGreen";><u> ART DETAILS </u></h1>
<?php
    $result = mysqli_query($con,"SELECT * FROM art");

    
    echo "<table class=center>

    <tr>
        <th> Art ID </th>
        <th> Artist ID  </th>
        <th> Art Genre  </th>
        <th> Art Price </th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td style=text-align:center;>" . $row['ART_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ARTIST_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ART_GENRE'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ART_PRICE'] . "</td>";
        echo "</tr>";
    }

echo "</table>";
mysqli_close($con);
?>
</body>
</html>