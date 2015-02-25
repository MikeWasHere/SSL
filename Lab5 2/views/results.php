<?

?>

<?
if($_POST["state"] == "FL"){
    echo "<p class='head'>I see you like the sunshine state</p></br>";
}else if($_POST["state"] == "NY"){
    echo "<p class='head'>Welcome to the Empire State</p></br>";
}else{
    echo"<p class='head'>Where are you from?</p>";
}

echo '<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link href="http://fonts.googleapis.com/css?family=Voltaire" rel="stylesheet" type="text/css">
	</header>';
echo '<body id="sb">
		<div id="results">
		<a href="?controller=home&action=uploadForm" >Update Database</a>
		<a href="?controller=home&action=inJSON">Check Weather</a>
		<ul id="mid">';
echo "<li class='exposed'><b><p class='exp'>UserName: </p></b>".$_POST["username"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>Password: </p></b>".$_POST["password"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>State: </p></b>".$_POST["state"]."</li></br>";
echo "	</ul>
<a id='logouut' class='btn btn-default btn-lg' href='?controller=home&action=Logout'>Logout</a>
		</div>
	  </body>
	</html>";
?>
