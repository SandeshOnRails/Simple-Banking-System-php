<html>
<head>
  <title> Bank of Telugu </title> 
    <h1 id="welcome">Simple Banking System</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
    </head>
<style>
    #welcome {
    font-family: "Comic Sans MS", cursive, sans-serif;
      text-align: center;
        color:4CAF50 ;
    }
    #tech {
    background-size: cover;
       width: 100%;
       height: 40%;
    }
   #panel1, #flip, #panel2, #panel3 , #panel4{  
    padding: 20px;  
    text-align: center;  
    background-color: darkslategrey;  
    border: solid 3px #c3c3c3; 
    font-family: "Comic Sans MS", cursive, sans-serif;

}  
#panel1 , #panel2 , #panel3 , #panel4{  
    padding: 25px;  
    display:none;  
}  
     a {
    display: block;
 color:4CAF50 ;
  padding: 8px 16px;
    text-decoration: none;
    font-family: "Comic Sans MS", cursive, sans-serif;
         text-align: center;

}

a:hover {
    background-color: #555;
    color: white;

}

    #foot{
        text-align: center;
            font-family: "Comic Sans MS", cursive, sans-serif;
        

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
    #fn{
        margin-left: 815px;
        margin-top: 100px;
        font-family: "Comic Sans MS", cursive, sans-serif;
    }
    #ad{
         margin-left: 805px;
        margin-top: 100px;
        font-family: "Comic Sans MS", cursive, sans-serif;
    
    }
    body {
        background-color:darkslategray;
    }
    #contact {
        text-align: center;
        background-color: blanchedalmond;
        text-decoration-color: darkslategrey;
        font-family: "Comic Sans MS", cursive, sans-serif;

    }
    #con {
        text-align: center;
    }
    </style>
    <body>
   <div id="flip">Menu</div>  
<div id="panel1" style="text-decoration-style: solid"><a href="accountForm.php">Open an account </a> </div> 
<div id="panel2" style="text-decoration-style: solid"><a href="balanceform.php">Check Balance</a> </div> 
<div id="panel3" style="text-decoration-style: solid"><a href="withdrawalform.php">Withdrawal</a></div>
<div id="panel4" style="text-decoration-style: solid"><a href="depositform.php">Deposit</a></div> 

  
        <div id="contact">
            <h1 id= "con"> Contact </h1>
<ul style="list-style: none;">    
  <li><a data-email="myname@gmail.com" href="username@gmail.com">CE0 : Yaman Niroula</a></li>
  <li><a data-email="myfriend@gmail.com" href="username@gmail.com">CTO : Friend</a></li>
      <li><a data-email="myfriend@gmail.com" href="username@gmail.com">COO : Friend</a></li>

</ul> 
        </div>
    </body>
<script>   
$(document).ready(function(){  
    $("#flip").click(function(){  
        $("#panel1").slideToggle("slow");  
    });  
});  
    $(document).ready(function(){  
    $("#flip").click(function(){  
        $("#panel2").slideToggle("slow");  
    });  
}); 
    $(document).ready(function(){  
    $("#flip").click(function(){  
        $("#panel3").slideToggle("slow");  
    });  
});  
    $(document).ready(function(){  
    $("#flip").click(function(){  
        $("#panel4").slideToggle("slow");  
    });  
});  
</script> 
<h1 id="foot"> Refining Tomorrow via Commerce</h1>
</html>


