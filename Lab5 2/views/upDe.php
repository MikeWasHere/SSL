<p>Body</p>
<? 
echo "<div id='upDe'>

		<h2 id='AU'>Authorized Users</h2>";
foreach($par2 as $user){
	echo $user["username"];
	echo "<a id='delete'  class='btn btn-danger pull-right' href='?controller=home&action=delete&id=".$user["id"]."'>delete</a>";
	echo "<a id='update' class='btn btn-primary pull-right' href='?controller=home&action=updateForm&id=".$user["id"]."'>update</a>";
	echo "<br>";
	}
echo "</div>"
?>
