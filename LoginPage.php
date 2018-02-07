<?php
session_start();
$id = session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="EggFarmCSS.css"/>
</head>

<div class="panel">
    <img id="sunPosition" src="../img/eggPlant2_files/image001.png" class="sunPosition">
    <br>
    <h1 style="text-align:center">Login</h1>
    <br>
    <form action="Status_page.php" method="post" name ="loginInput" onsubmit ="return(validateInput())">
        Username<input type="text" name="Username" required>
        <br>
        Password<input type="password" name="Password" required>
        <br>
    <input type="submit" value="Submit">
    </form>
    <img src="../img/eggPlant2_files/ultrarare_blueegg.png" class="eggDecoration2">

</div>
<script>
    function validateInput(){
     if (document.loginInput.Username.value == ""){
         alert ("Please enter Username")
     }
     if(document.loginInput.Password.value == ""){
         alert ("Please enter Password")
     }
     else{
         return true;
     }
    }




</script>

</body>
</html>