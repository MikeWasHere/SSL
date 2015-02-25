<?
session_start();
//Home Controller
include 'model/view.php';
include 'model/file.php';
include 'model/login.php'; 
include 'model/users.php'; 

$viewmodel = new view();
$filemodel = new file();
$loginmodel = new login();
$usersmodel = new users();

if(empty($_GET["action"])){

	$viewmodel->getView("views/header.php");
	$viewmodel->getView("views/body.php");
	$viewmodel->getView("views/footer.php");
	
}else{
	
	if($_GET["action"]=="home"){
	
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php",$data);
		$viewmodel->getView("views/footer.php");
		
	/*
}else if($_GET["action"]=="register"){
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/register.php",$data);
		$viewmodel->getView("views/footer.php");
*/
		
		
	}else if($_GET["action"]=="addUser"){
		$data = $usersmodel->addUser($_POST["username"],$_POST["password"]);
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php");
		
		
	}else if($_GET["action"]=="update"){
		$data = $usersmodel->updateUser($_POST["username"],$_POST["password"],$_GET["id"]);
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/upDe.php",$data);
		$viewmodel->getView("views/footer.php");
	
	
	}else if($_GET["action"]=="updateForm"){
		$viewmodel->getView("views/header.php");
		$data = $usersmodel->getUser($_GET["id"]);
		$viewmodel->getView("views/updateForm.php",$data);
		
	
	/*
}else if($_GET["action"]=="loginForm"){
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php");
		$viewmodel->getView("views/footer.php");
*/
		

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

		
		

	}else if($_GET["action"]=="checkSession"){
	
		$data = $_SESSION;
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/results.php",$data);
		$viewmodel->getView("views/footer.php");
		
	}else if($_GET["action"]=="delete"){
		
		$usersmodel->deleteUser($_GET["id"]);
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/upDe.php",$data);
		$viewmodel->getView("views/footer.php");
		
	}else if($_GET["action"]=="uploadForm"){
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/upDe.php",$data);
		
	}else if($_GET["action"]=="uploadAction"){
	
		$filemodel->upload($_FILES);
	
		//var_dump($_POST);
		//var_dump($_GET);
		//var_dump($_FILES);
		
	}else if($_GET["action"]=="Logout"){
		session_destroy();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php");
		$viewmodel->getView("views/footer.php");
}

}
	
?>