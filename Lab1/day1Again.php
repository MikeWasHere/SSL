<?
/* $name = "Joe"; */
/*
$myarr = array("name"=>"mike");

function get(){
	echo "inside get";
}

var_dump(get());

*/

/* echo "my name is $name, Hello" <-- same thing, different ways*/
/* echo 'my name is '.$name.', Hello' <-- same thing, different ways*/

/*
var_dump($_GET);
var_dump($_POST); <--- Lets me know what i am recieving
*/

/* echo $_POST["firstname"]." ".$_GET["lastname"]; */

/*
foreach($_POST as $x){
	echo $x;
} //<--- For Loops
*/

/*
$a = $data;
    
foreach ($data as $key){
echo "<p>".$key."</p>";
}
*/

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
		</div>
	  </body>
	</html>";



?>