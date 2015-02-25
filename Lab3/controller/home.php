<?
session_start();
//Home Controller
include 'model/view.php';
include 'model/file.php';
include 'model/login.php';

$viewmodel = new view();
$filemodel = new file();
$loginmodel = new login();

if(empty($_GET["action"])){

	$viewmodel->getView("views/header.php");
	$viewmodel->getView("views/body.php");
	$viewmodel->getView("views/footer.php");
	
}else{
	
	if($_GET["action"]=="home"){
	
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php");
		$viewmodel->getView("views/footer.php");

	
	}else if($_GET["action"]=="loginForm"){

		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php");
		$viewmodel->getView("views/footer.php");

	}else if($_GET["action"]=="processLogin"){
	
			$returnedLogin = $loginmodel->checkuser($_POST);
		var_dump($returnedLogin);
		
		if($returnedLogin){
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["loggedin"] = true;
			
			$data = $_SESSION;
			$viewmodel->getView("views/header.php");
			$viewmodel->getView("views/results.php",$data);
			$viewmodel->getView("views/footer.php");
			
			
		}else{
			$_SESSION["username"] = "";
			$_SESSION["loggedin"] = false;
			$data = $_SESSION;
			$viewmodel->getView("views/header.php");
			$viewmodel->getView("views/body.php",$data);
			$viewmodel->getView("views/footer.php");
		}		
		
		//$data = $returnedLogin;
	

	}else if($_GET["action"]=="checkSession"){
	
		$data = $_SESSION;
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php");
		
	}else if($_GET["action"]=="Logout"){
		session_destroy();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php");
		$viewmodel->getView("views/footer.php");
}
}
	
?>