<? 
//form view
?>


    
<!--
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
-->
    
<!--
    <form enctype="multipart/form-data" action="/Day4/index.php?action=addUserAction" method="POST" class="col-md-1">
        <label for="username">username: </label>
        <input type="text" name="username" /> </br>
    
        <label for="password">Password: </label>
        <input type="text" name="password" id="password" /> </br>

        <button type="submit">Submit</button>

        
</form> 
-->
    
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <div class="row-fluid user-row">
                        <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                    </div>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form-signin" enctype="multipart/form-data" action="/Lab4/index.php?action=loginAction" method="POST">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input class="form-control" placeholder="Username" id="username" name="username" type="text">
                            <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                            <br></br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>