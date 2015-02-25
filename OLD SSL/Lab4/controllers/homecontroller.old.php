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
        $views->getView("views/form.php");
        $views->getView("views/footer.php");
    } else if($_GET["action"] == "registerAction") { 
        $users->addUser($_POST['username'], $_POST['password']);
        $data = $users->getUsers();
        
        $views->getView("views/header.php");
//      $views->getView("views/profile.php", $data);
        $views->getView("views/footer.php");
    } else if($_GET["action"] == "loginAction") {
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            
            $r = $login->checkLogin($_POST["username"], $_POST["password"]);
            
            if($r) {
                $data = $users->getUsers();
                $views->getView("views/header.php");
//              $views->getView("views/profile.php", $data);
                $views->getView("views/footer.php");
            } else {
                header("Location: /ssl/Lab4/index.php");
            }
	    } else {
		    header("Location: /ssl/Lab4/index.php");
	    }
    } else if($_GET["action"] == "updateUserForm") {
	    $views->getView("views/header.php");
	    $data = $user->getUser($_GET["id"]);
//	    $views->getView("views/updateView.php", $data);
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
?>