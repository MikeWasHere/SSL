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
	
	}else if($_GET["action"]=="loginForm"){

		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/form.php");
		$viewmodel->getView("views/footer.php");

	}else if($_GET["action"]=="processLogin"){
		$returnedLogin = $loginmodel->checkuser($_POST);
		
		if($returnedLogin){
			$_SESSION["username"] = $returnedLogin["username"];
			$_SESSION["loggedin"] = true;
			
			
		}else{
			$_SESSION["username"] = "";
			$_SESSION["loggedin"] = false;
		}
		
		$data = $returnedLogin;
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php"); 

	}else if($_GET["action"]=="checkSession"){
	
		$data = $_SESSION;
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php");
		
	}else if($_GET["action"]=="uploadForm"){
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/uploadForm.php");
		
	}else if($_GET["action"]=="uploadAction"){
	
		$filemodel->upload($_FILES);
	
		//var_dump($_POST);
		//var_dump($_GET);
		//var_dump($_FILES);
		
	}
}
	
?>