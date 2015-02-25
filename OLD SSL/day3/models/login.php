<? 
//View Modal

class login{

    public function checklogin($username="", $password=""){
        
        $un = "root";
        $pa = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8888', 'root', 'root');
        $stmnt = $dbh -> prepare('select username, password, avatar 
                                from users 
                                where 
                                username = :username
                                and
                                password = :password');
        
//        $sth -> bindParam(':username','$username'); //:key, $value
        $stmnt -> execute(array(":username"=>$username,
                              ":password"=>$password
                               ));
        
        $results = $stmnt -> fetchAll();
        
//        var_dump($results);
        
        if($stmnt->rowCount() > 0){
        $_SESSION['current_user'] = $results[0]['username'];
        $_SESSION['current_avatar'] = $results[0]['avatar'];    
        $_SESSION['login_success'] = true;
            
        }
        else{
        $_SESSION["login_success"] = false;
        }
        return $results;
        
//        var_dump($result);
    
    
}
}






?>