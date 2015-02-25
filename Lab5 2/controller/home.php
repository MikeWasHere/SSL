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
	 $json_string = file_get_contents("http://api.wunderground.com/api/526d578ed66c1406/geolookup/conditions/q/FL/orlando.json");
  $viewmodel->getView("views/header.php");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  echo " <div id='weather'>
  			<h2>Current Weather</h2>
  		Current temperature in ${location} is: ${temp_f}\n
  		 </div>";
  
	
		
	}else if($_GET["action"]=="outJSON"){
		header("Content-Type: application/json");
		$data = $usersmodel->getUsers();
		echo json_encode($data);

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