<?
// Register view
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
                    <form accept-charset="UTF-8" role="form" class="form-signin" enctype="multipart/form-data" action="/Lab4/index.php?action=registerAction" method="POST">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input class="form-control" placeholder="Desired Username" id="username" name="username" type="text">
                            <input class="form-control" placeholder="Desired Password" id="password" name="password" type="password">
                            <input class="form-control" placeholder="Upload Image..." id="file" name="file" type="file">
                            <br></br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>