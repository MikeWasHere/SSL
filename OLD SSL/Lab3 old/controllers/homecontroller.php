<?
// Home Controller
include("models/views.php");
include("models/login.php");

$views = new views();
$login = new login();

if(!empty($_GET["action"])){

    if($_GET["action"] == "registerForm"){
        
        $views->getView("views/form.php");
        $views->getView("views/header.php");
    }
    else if($_GET["action"] == "loginAction"){
        
        $data = $login->checklogin($_POST["username"],sha1($_POST["password"]));

        
        if($data){  
            $_SESSION["logingood"] = true;
            $views->getView("views/protected.php");
        }else{
            $_SESSION["logingood"] = false;
            header("Location: /day3/index.php?action=loginForm");
        }
            
    }
    else if($_GET["action"] == "activeForm"){
        $uploaddir = './images/'; //physical path on Apache
        $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
        }
        else{
        $views->getView("views/header.php");
        } 
    }
}
else{
    
    $views->getView("views/form.php");
    $views->getView("views/header.php");
}




?>
