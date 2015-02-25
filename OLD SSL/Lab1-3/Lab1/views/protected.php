<? 

if(isset($_SESSION["logingood"])){
    
    if(!$_SESSION["logingood"]){
        header("location:/Lab3/index.php?action=loginForm");
    }
}else{
        header("location:/Lab3/index.php?action=loginForm");
}

if($_POST["state"] == "NY"){
    echo "<b>Empire state.</b>";
}else if($_POST["state"] == "FL"){
    echo"<b>Sunshine State</b>";
}

echo '<div id="results">';
echo "<b>User Name: </b>".$_SESSION["current_user"]."</br>";
//echo '<img src="images/'.$_SESSION["current_avatar"].'"/>';
echo "<b>your password is: </b>".$_POST["password"]."</br>";
echo "<b>your address on file: </b>".$_POST["address"]."</br>";
echo "<b>City: </b>".$_POST["city"]."</br>";
echo "<b>State: </b>".$_POST["state"]."</br>";
echo "<b>Zip: </b>".$_POST["zip"]."</br>";
echo "<b>E-Mail: </b>".$_POST["email"]."</br>";
echo "<b>Phone Number: </b>".$_POST["phonenumber"]."</br>";
echo "<b>Website: </b>".$_POST["website"]."</br>";
echo '<a href="/Lab1/index.php" class="btn btn-danger">Log Out</a>';
echo "</div>";
?>