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
<title>ORDER DETAILS</title>
<h1 style="color:MediumSeaGreen";><u> ORDER DETAILS </u></h1>
<?php
    $result = mysqli_query($con,"SELECT * FROM sold");

    
    echo "<table class=center>

    <tr>
        <th> Order ID </th>
        <th> Artist ID  </th>
        <th> Buyer ID  </th>
        <th> Art ID </th>
        <th> Price </th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td style=text-align:center;>" . $row['ORDER_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ARTIST_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['BUYER_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ART_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['PRICE'] . "</td>";
        echo "</tr>";
    }

echo "</table>";
mysqli_close($con);
?>
</body>
</html>