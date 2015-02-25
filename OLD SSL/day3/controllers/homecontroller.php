<?
// Home Controller
include("models/views.php");
include("models/login.php");
include("models/users.php");

$views = new views();
$login = new login();
$users = new users();

session_start();
//$_SESSION['user'] = $_POST['user'];
//$_SESSION["password"] = $_POST['password'];
//echo md5($_SESSION['password']); 
//        
if(!empty($_GET["action"])){

    if($_GET["action"] == "registerForm"){
        
        $views->getView("views/form.php");
        $views->getView("views/header.php");
    }
    else if($_GET["action"] == "loginAction"){
        
//        $views->getView("views/header.php");
//        
//        $data = $_POST;
//        $views->getView("views/results.php", $data);
        
        $data = $login->checklogin($_POST["username"],sha1($_POST["password"]));
//        var_dump($data);
        
        if($data){  
            $_SESSION["logingood"] = true;
            
            $data = $users->getUsers();
            $views->getView("views/protected.php",$data);
        }else{
            $_SESSION["logingood"] = false;
            header("Location: /day3/index.php?action=loginForm");
        }
            
    }else{
    $views->getView("views/header.php");
    }
    
}else{
    $views->getView("views/form.php");
    $views->getView("views/header.php");
}



//if($_GET["action"] == "activeForm"){
//    $uploaddir = './images/'; //physical path on Apache
//    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
//    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//    echo "File is valid, and was successfully uploaded.\n";
//}
//    }

?>
