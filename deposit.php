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
    
    p{
        color:red;
    }
    
    </style>

</html>
<?php
$deposit = $_REQUEST["amt"];
$accountNum = $_REQUEST["acc"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "account";
$balance = 0;
$sql ="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
$sql = "SELECT FirstName, LastName, ID, Balance FROM acc WHERE ID =" . $accountNum ;
$flag = true;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
        $balance = $row["Balance"] + $deposit;
       $newsql = "UPDATE acc SET Balance=".  $balance . " WHERE ID=" . $accountNum;
       $results = $conn->query($newsql);
                        

         }
    }
        
else 
{
    echo "<p>". "No account found for Account number: " . $accountNum . "</p>";
    $flag = false;
}

$conn->close();
if($flag){
$con = new mysqli($servername, $username, $password, $dbname);
$q = "SELECT FirstName, LastName, ID, Balance FROM acc WHERE ID=" . $accountNum;
$newresult = $con->query($q);

if ($newresult->num_rows > 0) {
  while($rows = $newresult->fetch_assoc()) {
        echo "<h1>Deposit Succesful</h1>";
          echo "<table><tr><th>FirstName</th><th>LastName</th><th>Account Number </th>
          <th>Balance </th></tr>";
        
        echo "<tr><td> " . $rows["FirstName"]. "<td>". $rows["LastName"]. "</td>". "<td>" . $rows["ID"] . "</td>"  . "<td>" . $rows["Balance"] . "</td>". "</tr>";
        echo "</table>";

    }
}
}
?>





