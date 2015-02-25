<?
session_start();
//Home Controller
include 'model/view.php';
$viewmodel = new view();

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
	
		$_SESSION["username"] = $_POST["username"];
		
		if($_POST["username"]=="Mike" && $_POST["password"]=="1234"){
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["loggedin"] = true;
		}else{
			$_SESSION["username"] = "";
			$_SESSION["loggedin"] = false;
		}
		$data = $_POST;
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php");

	}else if($_GET["action"]=="checkSession"){
	
		$data = $_SESSION;
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php");
	}
}
	
?>