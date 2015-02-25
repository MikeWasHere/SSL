<? 

if(isset($_SESSION["logingood"])){
    
    if(!$_SESSION["logingood"]){
        header("location:/Lab3/index.php?action=loginForm");
    }
}else{
        header("location:/Lab3/index.php?action=loginForm");
}

//var_dump($data);

//foreach($data as $value){
//echo $value["username"]."<br>"; //one of the ways to do it and it will display the usernames only.
//}

?>

<a href="/Day4/?action=addUserForm">Add User</a><br>

<?

foreach($data as $key=>$value){
echo $value["username"];
echo "   <a href='/Day3/?action=updateForm'>Update</a> | ";
echo "   <a href='/Day3/?action=deleteUser&id=".$value["id"]."'>Delete</a>";
echo "<br>";
}

//echo "User Name: ".$_SESSION["current_user"];
//echo '<img src="images/'.$_SESSION["current_avatar"].'"/>';
//echo '<button action="index.php?action=loginForm">Log Out</button>'
?>