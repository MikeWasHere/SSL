<?   
var_dump($data);
?>


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
                    <form accept-charset="UTF-8" role="form" class="form-signin" enctype="multipart/form-data" action="/Lab4/index.php?action=updateAction&id=<?=$data[0]["id"]?>" method="POST">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input class="form-control" placeholder="Username" id="username" name="username" type="text" value="<?=$data[0]["username"]?>">
                            <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="<?=$data[0]["password"]?>">
                            <br></br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" id="Update" value="Update">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>