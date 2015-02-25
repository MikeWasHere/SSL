<? 

if(isset($_SESSION["logingood"])){
    
    if(!$_SESSION["logingood"]){
        header("location:/Day4/index.php?action=loginForm");
    }
}else{
        header("location:/Day4/index.php?action=loginForm");
}
echo "rest of content"

var_dump($data);

?>