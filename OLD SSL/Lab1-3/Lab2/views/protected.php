<? 

if(isset($_SESSION["logingood"])){
    
    if(!$_SESSION["logingood"]){
        header("location:/Lab3/index.php?action=loginForm");
    }
}else{
        header("location:/Lab3/index.php?action=loginForm");
}


echo '<div id="results">';
echo '<img src="images/'.$_SESSION["current_avatar"].'" width="100px" height="100px"/></br>';
echo "<p class='labels'><b>User Name: </b>".$_SESSION["current_user"]."</p></br>";
echo "<p class='labels'><b>your password is: </b>".$_POST["password"]."</p></br>";
echo '<a href="/Lab3/index.php" class="btn btn-danger">Log Out</a>';
echo "</div>";
?>