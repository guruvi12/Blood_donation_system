<!Doctype html>
<html>
<head>
<link rel="stylesheet"  href="table.css">
<title>Donor and Blood Bank details</title>
</head>
<style>
nav{
            border: 2px solid black;
            text-align: center;
            font-size: 25px;
            background-color: #FDD7E4 ;
            border-radius: 4px;
            padding: 1px;
        }
</style>
<body>
<nav> 
  <h1>DONOR AND BLOOD BANK DETAILS</h1>
</nav>  
<hr>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th >Donor Name</th>
      <th >Donor Id</th>
      <th >Blood Group</th>
      <th >Donor Phone_no</th>
      <th >Address</th>
      <th >Blood Bank Name</th>
      <th >Blood Bank Phone_no</th>
    </tr>
<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "project";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$sql = "SELECT * FROM donor_blood_bank ";

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                            <td> " .$row["dname"].  "</td>
                            <td>"  .$row["did"].  "</td>
                            <td>"  .$row["bloodgroup"].  "</td>
                            <td>"  .$row["d_phoneno"].  "</td>
                            <td>"  .$row["bb_address"].  "</td>
                            <td>"  .$row["bbname"].  "</td>
                            <td>"  .$row["bb_phoneno"].  "</td>
                </tr>";
}
?>
</table>
</body>
</html>