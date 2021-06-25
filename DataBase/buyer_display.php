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
<title>BUYER DETAILS</title>
<h1 style="color:MediumSeaGreen";><u> BUYER DETAILS </u></h1>
<?php
    $result = mysqli_query($con,"SELECT * FROM buyer");

    
    echo "<table class=center>

    <tr>
        <th> Buyer ID </th>
        <th> First Name  </th>
        <th> Last Name  </th>
        <th> Phone </th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td style=text-align:center;>" . $row['BUYER_ID'] . "</td>";
            echo "<td style=text-align:center;>" . $row['BUYER_FNAME'] . "</td>";
            echo "<td style=text-align:center;>" . $row['BUYER_LNAME'] . "</td>";
            echo "<td style=text-align:center;>" . $row['PHONE_NO'] . "</td>";
        echo "</tr>";
    }

echo "</table>";
mysqli_close($con);
?>
</body>
</html>