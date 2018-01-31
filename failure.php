<html>
<h1 id = "errorMessage"></h1>
<a href = "accountForm.php"><button id ="goback">Try Again </button></a>
    <body>
    
    </body>
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
    
    h1 {
        text-align: center;
        font-family: "Comic Sans MS", cursive, sans-serif;
        color:#4CAF50;
    }
    body {
        background-color: azure;
    }
    </style>
<script>
  document.getElementById("errorMessage").innerHTML = "Sorry First and Last Name already taken"; 

    </script>
</html>