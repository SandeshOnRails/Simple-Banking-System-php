<html>
    <h1> Please fill out the form below </h1>
<body>
    
    
    </body>


<style>
    h1{
            
font-family: "Comic Sans MS", cursive, sans-serif;
color:#4CAF50;
    }
    body {
    }
    
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    
    </style>
<div>
  <form name="myForm" action ="createAccount.php"  onsubmit ="return validate()" method ="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="first" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last" placeholder="Your last name.." required>

    <label for="initial">Initial Balance</label>
    <select id="initial" name="initial">
      <option value= 500>500</option>
      <option value= 1500>1500</option>
      <option value= 2000>2000</option>
      <option value = 5000> 5000</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
</html>

<script>
function validate(){
        var first = document.forms["myForm"]["first"].value;
        var last = document.forms["myForm"]["last"].value;
        xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "validation.php?first=" + str+ "&last ="+ last, true);
        xmlhttp.send();
    }

}





</script>