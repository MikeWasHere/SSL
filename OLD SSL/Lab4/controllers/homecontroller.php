<?
session_start();

include("models/views.php");
include("models/login.php");
include("models/users.php");

$views = new views();
$login = new login();
$users = new users();
        

if(!empty($_GET["action"])) {
    if($_GET["action"] == "registerForm") {
        $views->getView("views/header.php");
        $views->getView("views/register.php");
        $views->getView("views/footer.php");
    }else if($_GET["action"] == "registerAction") { 
        $_SESSION["new_use"] = $_POST["username"];
        $_SESSION["new_pass"] = $_POST["password"];
        
        $uploaddir = './images/';
        $uploadfile = $uploaddir . basename($_FILES['file']['name']);
        if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            $_SESSION['file'] = $_FILES['file']['name'];
            $users->addUser($_SESSION["new_use"], $_SESSION['new_pass'], $_SESSION['file']);
            header("Location: /Lab4/?action=loginAction");
        }            
    
    }else if($_GET["action"] == "logout") {
        session_destroy();
        header("Location: /Lab4/");
        
    } else if($_GET["action"] == "peaceOut") {
            $users->peaceOut($_GET["id"]);
            header("Location: /Lab4/?action=loginAction");
    
    } else if($_GET["action"] == "loginAction") {
    
        if(!isset($_SESSION["logingood"])) {
            if(isset($_POST["username"]) && isset($_POST["password"]) || 
               isset($_SESSION["new_use"]) && isset ($_SESSION["new_pass"])) {
                
                $r = false;
                
                if(isset($_POST["username"]) && isset($_POST["password"])) {
                    $r = $login->checkLogin($_POST["username"], $_POST["password"]); 
                } else if(isset($_SESSION["new_use"]) && isset($_SESSION["new_pass"])) {
                    $r = $login->checkLogin($_SESSION["new_use"], $_SESSION["new_pass"]);
                }

                if($r) {
                    $data = $users->getUsers();
                    $views->getView("views/header.php");
                    $views->getView("views/protected.php", $data);
                    $views->getView("views/footer.php");
                } else {
                    header("Location: /Lab4/");
                }
            } else {
                header("Location: /Lab4/");
            }
        } else {
            $data = $users->getUsers();
            $views->getView("views/header.php");
            $views->getView("views/protected.php", $data);
            $views->getView("views/footer.php");
        }
    } else if($_GET["action"] == "updateUserForm") {
        
	    $views->getView("views/header.php");
	    $data = $users->getUser($_GET["id"]);
	    $views->getView("views/updateView.php", $data);
    
    } else if($_GET["action"] == "updateAction") {
        $users->updateUser($_GET["id"],$_POST["username"],$_POST["password"]);
    
    } else {
    	$views->getView("views/header.php");
		$views->getView("views/form.php");
		$views->getView("views/footer.php");
    }
    
    
} else {
	$views->getView("views/header.php");
    $views->getView("views/form.php");
    $views->getView("views/footer.php");
}

//
// else {
//        header("Location: /Lab4/index.php");
//    }
//            
//            var_dump($_SESSION);
//            
//            if($r){
//                $data = $users->getUsers();
//                $views->getView("views/header.php");
//                echo "WORKING!";
//                $views->getView("views/footer.php");
//            } else {
//                 header("Location: /Lab4/index.php");
//            } 
//	    } else {
//		      header("Location: /Lab4/index.php");
//	    }

?>