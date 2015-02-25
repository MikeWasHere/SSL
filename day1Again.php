<?
$name = "Joe";
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

foreach($_POST as $x){
	echo $x;
} //<--- For Loops

?>