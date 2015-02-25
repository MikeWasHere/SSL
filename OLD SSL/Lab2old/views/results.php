<? 
$a = $data;
    
foreach ($data as $key){
echo "<p>".$key."</p>";
}

if($data["state"] == "FL"){
    echo "<p>I see you like the sunshine state</p></br>";
}else if($data["state"] == "NY"){
    echo "<p>From the streets of shaolin, the Wu Tang Clan rises again</p></br>";
}else{
    echo"<p>TIP TOWWING IN MY JAAWWDDIINNZZ</p>";
}
?>