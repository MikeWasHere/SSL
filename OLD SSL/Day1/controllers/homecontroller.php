<?
// Home Controller
include("models/views.php");
$views = new views();

if(!empty($_GET["action"])){

    if($_GET["action"] == "registerForm"){
        
        $views->getView("views/form.php");
        $views->getView("views/header.php");
    }
    else if($_GET["action"] == "registerAction"){
        
        $views->getView("views/header.php");
        
        $data = $_POST;
        $views->getView("views/results.php", $data);
            
    }else{
    $views->getView("views/header.php");
    
    }
    
}else{
    $views->getView("views/form.php");
    $views->getView("views/header.php");
}

?>
