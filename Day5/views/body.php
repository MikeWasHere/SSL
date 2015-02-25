<p>Body</p>
<? 
foreach($par2 as $user){
	echo $user["username"];
	echo "<a href='?controller=home&action=delete&id=".$user["id"]."'>delete</a>";
	echo "<a href='?controller=home&action=update&id=".$user["id"]."'>update</a>";
	echo "<br>";
	}
?>
