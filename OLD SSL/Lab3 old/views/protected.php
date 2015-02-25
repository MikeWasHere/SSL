<? 

if(isset($_SESSION["logingood"])){
    
    if(!$_SESSION["logingood"]){
        header("location:/Lab3/index.php?action=loginForm");
    }
}else{
        header("location:/Lab3/index.php?action=loginForm");
}

echo "User Name: ".$_SESSION["current_user"];
echo '<img src="images/'.$_SESSION["current_avatar"].'"/>';
echo '<button action="index.php?action=loginForm">Log Out</button>'
?>