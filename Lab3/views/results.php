<?
var_dump($par2);
?>

<!--
<?
echo md5($par2);
?>
-->

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
echo '<body class="sb">
		<div id="results">
		<ul id="mid">';
echo "<li class='exposed'><b><p class='exp'>UserName: </p></b>".$_POST["username"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>Password: </p></b>".$_POST["password"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>Address: </p></b>".$_POST["address"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>City: </p></b>".$_POST["city"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>State: </p></b>".$_POST["state"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>Zip: </p></b>".$_POST["zip"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>E-Mail: </p></b>".$_POST["email"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>Phone: </p></b>".$_POST["phonenumber"]."</li></br>";
echo "<li class='exposed'><b><p class='exp'>Website: </p></b>".$_POST["website"]."</li></br>";
echo "	</ul>
<a id='logouut' class='btn btn-default btn-lg' href='?controller=home&action=Logout'>Logout</a>
		</div>
	  </body>
	</html>";
?>