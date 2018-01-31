<html>
<style>
   table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    a {
 display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: underline;
    font-family: "Comic Sans MS", cursive, sans-serif;
    text-align:center;
     margin-top: 150px;
    margin-left: 550px;
    background-color: #4CAF50;
    width: 20%;     
    } 
    
    
    
    </style>




<?php

$accountNum = $_REQUEST["acc"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Account";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
$sql = "SELECT FirstName, LastName, ID, Balance FROM acc WHERE ID =" . $accountNum ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
          echo "<table><tr><th>FirstName</th><th>LastName</th><th>Account Number </th>
          <th>Balance </th></tr>";
        
        echo "<tr><td> " . $row["FirstName"]. "<td>". $row["LastName"]. "</td>". "<td>" . $row["ID"] . "</td>"  . "<td>" . $row["Balance"] . "</td>". "</tr>";
        echo "</table>";

    }
} 
else 
{
    echo "No account found for Account number" . $accountNum;
}
$conn->close();
?>
    <a href="bankHome.php">Back to Homepage</a>

</html>