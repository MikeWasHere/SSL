<?
header("content-type:text/xml");
	echo "<xml version='1.0'>";
	foreach($data as $users){
		echo "<user>".$users["username"]."</users>";
	}
	echo "/xml";
?>