<?php
//user information for creating bank account
$accountNum = 0;
$firstname ="";
$lastname ="";
$initialBal = 0;
 if(isset($_REQUEST["first"]) && isset($_REQUEST["last"])){
  $firstname = $_REQUEST["first"];
  $lastname = $_REQUEST["last"];
  $initialBal = $_REQUEST["initial"];
  $accountNum = mt_rand();
 }



?>

<html>
<body>
    
    
    </body>
    
    <style>
        body {
            background-color:aqua;
        }
        h1 {
            text-align: center;
        }
    </style>
    <p id = "firstLine"></p>
     <p id = "secondLine"></p>
        <p id = "thirdLine"></p>
        <p id = "fourthLine"></p>
             <p id = "fifthLine"></p>
    <p id = "sixLine"></p>

<script>
    var validate
    
    
    </script>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "account");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database

$i = 0;
mysqli_select_db($conn,"account");
$sql="SELECT * FROM acc WHERE FirstName = '".$firstname."'" . "AND LastName = '".$lastname."'" ;
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0){
  header("Location: failure.php");
}
else {
          echo "<h1>" . " Welcome to the Bank of Telugu " . "</h1>" . "\n";

      echo "<h1>" . "Thank You for Banking with us " . $firstname . "</h1>" . "\n";
echo  "<h1><u>" . "Your bank details " . "</u></h1>" . "\n" ;
echo "<h1>" . "First Name: "  .$firstname . "</h1>" . "\n" ;
echo "<h1>" . "Last Name: " .$lastname . "</h1>" . "\n" ;
echo "<h1>" . "Balance: ". $initialBal  . "<h1>" . "\n";
echo "<h1>" . "Account Number: ". $accountNum . "</h1>" . "\n";
    $i = 1;
}

if($i){
    $con = new mysqli("localhost", "root", "", "account");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO acc (FirstName, LastName, ID, Balance)
VALUES ('$firstname', '$lastname', '$accountNum', '$initialBal')";

$con->close();
}
$conn->close();
?>
<htmnl>
<a href = "bankHome.php"><button id ="goback">Home</button></a>
    <style>
#goback {
        
         width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px  550px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
        
    }
        </style>
    
</htmnl>