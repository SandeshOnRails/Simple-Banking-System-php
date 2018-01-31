<html>
<form name="login" action="login.php" method="post" onsubmit=" return validate()">
  <p> Account Number <input type="number" name ="acc"></p>  <p id="error"></p>
    <input type="submit" value="Login" style="background-color: green;">
    
    </form>
<script>
    var acc =0;
    var x;
    function validate(){
        acc = document.forms["login"]["acc"].value;
        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                x =  <?php echo json_encode(this.responseText) ?>;
                alert(x);
            }
        };
        xmlhttp.open("GET", "login.php?acc="+acc);
        xmlhttp.send();
        alert(x);
return false;
    
    }
    
    
    
    </script>


</html>