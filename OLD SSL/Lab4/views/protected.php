<? 
if(!isset($_SESSION["logingood"]) || 
   $_SESSION["logingood"] == FALSE ) {
     header("Location: /Lab4/");
}
?>

<a href="/Lab4/index.php?action=registerAction">Add User</a><br>

<?
foreach($data as $key=>$value){
echo $value["username"];
echo "   <a href='/Lab4/?action=updateUserForm&id=".$value["id"]."'>Update</a> | ";
echo "   <a href='/Lab4/?action=peaceOut&id=".$value["id"]."'>Delete</a>";
echo "<br>";
}

//echo '<img src="images/'.$_SESSION["current_avatar"].'"/>';
echo '<a href="index.php?action=logout">Log Out</a>';
?>