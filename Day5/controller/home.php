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
		var_dump($data);
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php",$data);
		
	}else if($_GET["action"]=="outXML"){
	
		$data = $usersmodel->getUsers();
		header("Content-Type: text/xml");
		?>
		<employees>
			<? foreach($data as $user){ ?>
			<person>
			<firstname><?=$user["username"]?></firstname>
			<password><?=$user["password"]?></password>
			<img>/files/images/<?=$user["userimg"]?></img>
			</person>
			<? } ?>
		</employees>
		
		<?
	
	}else if($_GET["action"]=="inJSON"){
		$data = file_get_contents("http://localhost:8888/Day5/?controller=home&action=outJSON");
		$JSONarr = json_decode($data, true);
		var_dump($data);
		
		foreach($JSONarr as $user){
			echo "username: ".$user["username"]."<br>";
		}
	
		
	}else if($_GET["action"]=="outJSON"){
		header("Content-Type: application/json");
		$data = $usersmodel->getUsers();
		echo json_encode($data);
		
	}else if($_GET["action"]=="update"){
		$data = $usersmodel->updateUser($_POST["username"],$_POST["password"],$_GET["id"]);
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php",$data);
	
	}else if($_GET["action"]=="updateForm"){
		$viewmodel->getView("views/header.php");
		$data = $usersmodel->getUser($_GET["id"]);
		$viewmodel->getView("views/updateForm.php",$data);
		
		
	
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
		
	}else if($_GET["action"]=="delete"){
		
		$usersmodel->deleteUser($_GET["id"]);
		$data = $usersmodel->getUsers();
		$viewmodel->getView("views/header.php");
		$viewmodel->getView("views/body.php",$data);
	
		
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