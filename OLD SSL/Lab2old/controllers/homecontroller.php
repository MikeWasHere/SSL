<?
// Home Controller
include("models/views.php");
$views = new views();

session_start();
$_SESSION['user'] = $_POST['user'];
$_SESSION["password"] = $_POST['password'];
echo md5($_SESSION['password']); 
        
if(!empty($_GET["action"])){

    if($_GET["action"] == "registerForm"){
        
        $views->getView("views/form.php");
        $views->getView("views/header.php");
    }
    else if($_GET["action"] == "registerAction"){
        
        $views->getView("views/header.php");
        
        $data = $_POST;
        $views->getView("views/results.php", $data);
            
    }else{
    $views->getView("views/header.php");
    
    }
    
}else{
    $views->getView("views/form.php");
    $views->getView("views/header.php");
}
    if($_GET["action"] == "activeForm"){
        $uploaddir = './images/'; //physical path on Apache
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
}
    }

?>
