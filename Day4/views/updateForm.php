<p>Body</p>


<? 
foreach($par2 as $user){
	/*
echo $user["username"];
	echo "<a href='?controller=home&action=delete&id=".$user["id"]."'>delete</a>";
	echo "<a href='?controller=home&action=update&id=".$user["id"]."'>update</a>";
	echo "<br>";
*/
?>
<form action= "?controller=home&action=update&id=<?=$user['id']?>" method="POST">
<input type="text" name="username" value="<? echo $user["username"]?>"/>
<input type="text" name="password" value="<? echo $user["password"]?>"/>
<input type="submit" />
<?
} 
?>
