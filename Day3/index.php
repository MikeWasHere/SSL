<?

if(empty($_GET["controller"])){
	
	include 'controller/home.php';
	
}else{
	if($_GET["controller"]=="home"){
	
		include 'controller/home.php';
	
	}else{

	include 'controller/home.php'; 
}
 }
	
?>