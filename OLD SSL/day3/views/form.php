<? 
//form view
?>

<html>
<body>
    
    <style>
        form{
            width: 25%;
            border: 3px red solid;
            padding-top: 2%;
            padding-bottom: 2%;
        }
        
        label{
            padding-left: 15%;
            float: left;
            width: 30%;
            margin-bottom: 20px;
        }
        
        input{
            margin-bottom: 20px;
        }
        
        button{
            width: 69%;
            font-size: 1.4em;
            padding: 10px;
            background-color: #CC3535;
            border: none;
            border-radius: 5px;
            margin-left: 15%;
            transition: 1s ease ;
        }
        
        button:hover{
            background-color: #DE1D1D;
        }
    </style>
    
    <form enctype="multipart/form-data" action="index.php?action=loginAction" method="POST">
        <label for="username">username: </label>
        <input type="text" name="username" /> </br>
    
        <label for="password">Password: </label>
        <input type="text" name="password" id="password" /> </br>

        <button type="submit">Submit</button>

        
</form> 
    
</body>
</html>