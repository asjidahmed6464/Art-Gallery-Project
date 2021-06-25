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
<title>VIEW DETAILS</title>
<h1 style="color:MediumSeaGreen";><u> VIEW DETAILS </u></h1>
<?php
    $result = mysqli_query($con,"SELECT * FROM all_details");

    
    echo "<table class=center>

    <tr>
        <th> Artist ID </th>
        <th> Artist First Name  </th>
        <th> Artist Last Name  </th>
        <th> Artist Phone </th>
        <th> Art ID </th>
        <th> Art Genre </th>
        <th> Art Price </th>
        <th> Order ID </th>
        <th> Buyer ID </th>
        <th> Order Price </th>

    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td style=text-align:center;>" . $row['ARTIST_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ARTIST_FNAME'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ARTIST_LNAME'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ARTIST_PHONE'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ART_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ART_GENRE'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ART_PRICE'] . "</td>";
            echo "<td style=text-align:center;>" . $row['ORDER_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['BUYER_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['PRICE'] . "</td>";
        echo "</tr>";
    }

echo "</table>";
mysqli_close($con);

?>
</body>
</html>