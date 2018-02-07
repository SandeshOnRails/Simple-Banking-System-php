<html>
        <p ><span id="result"></span> </p>

<style>
    
    #balCheck{
        
     width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px ;
    border: none;
    border-radius: 4px;
    cursor: pointer;
        
    } 
    input[type="number"]{
    width: 15%;
    padding: 12px 20px;
    margin: 8px ;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

    
    }
    
    h1 {
        color:#4CAF50;
         font-family: "Comic Sans MS", cursive, sans-serif;

    }
    
    </style>
    <div id="f">
<form name ="valid" action="checkBalance.php" onsubmit= "return validate()" method ="post">
    <h1 id ="as">Account Number</h1>
    <input type = "number" name ="acc" required><p id = "error"></p>
    <hr>
<input type="submit" value ="Check Balance" id ="balCheck">
</form>
    </div>
    <script>
    function validate(){
       var accNum = document.forms["valid"]["acc"].value;
        if(accNum <= 0 ){
            document.getElementById("error").innerHTML = "Your account number should be more than 0";
            return false;
        }
        if(accNum <= 9999){
            document.getElementById("error").innerHTML = "Your account number should at least be 5 digits or more";
            return false;
        }
    return true; 
    }
    
    
    
    </script>
</html>