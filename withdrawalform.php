

<html>
<h1>Please provide the following details to Withdraw</h1>
<h2> - Withdrawal Amount should be multiples of 20 (20, 40, 60 ....)</h2>
<h2> - Withdrawal Amount should not exceed 1000</h2>
    <hr>
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
    h2 {
        color:#4CAF50;
         font-family: "Comic Sans MS", cursive, sans-serif;
    }
    p{
        color:red; 
    }
    #result {
        color:#4CAF50;
         font-family: "Comic Sans MS", cursive, sans-serif;
    }
    
    </style>
    <div id="f">
<form name ="valid">
    <h1 id ="as">Account Number</h1>
    <input type = "number" name ="acc" required><p id = "error"></p>
    <hr>
    <h1>Amount</h1>
        <input type = "number" name ="amt" required><p id = "err"></p>
<hr>
<input type="button" value ="Withdraw" id ="balCheck" onclick ="validate()">
</form>
    </div>
        <p id="result"> Results</p>

    <script>
        var done = false;
        var accNum = 0;
        var amount = 0;
     function validate(){
        accNum = document.forms["valid"]["acc"].value;
        
         amount = document.forms["valid"]["amt"].value;
        if(accNum <= 0 ){
            document.getElementById("error").innerHTML = "* Your account number should be more than 0";
            return false;
        }
        if(accNum <= 9999){
            document.getElementById("error").innerHTML = "* Your account number should at least be 5 digits or more";
            return false;
        }
        if (amount % 20 != 0){
            document.getElementById("err").innerHTML = "* Withdrawal amount should be multiples of 20";
            return false;
        }
        if(amount > 1000){
            document.getElementById("err").innerHTML = "* Withdrawal amount should not exceed 1000";
            return false;
        }
        done = true;
        if(done){
             var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "deposit.php?acc="+ accNum +"&amt="+amount, true);
        xmlhttp.send();
        }
        return true;
    }
       
        
       
            
        
    </script>
</html>