<? 
//View Modal

class login {
    public function checklogin($username="", $password="") {
        $un = "root";
        $pa = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8889', 'root', 'root');
        
        $stmnt = $dbh -> prepare(
            'select id, username, password, avatar
            from users 
            where 
            username = :username
            and
            password = :password'
        );
        
        $stmnt -> execute(array(":username"=>$username,
                              ":password"=>sha1($password)
                               ));
        
        $results = $stmnt -> fetchAll();
        if($stmnt->rowCount() > 0) {
            // $_SESSION["current_user_id"] = $results[0]["id"];
            // This never gets set... don't know why. :<
            $_SESSION['current_user'] = $results[0]['username'];
            $_SESSION['current_avatar'] = $results[0]['avatar'];    
            $_SESSION['logingood'] = true;
            $_SESSION['rowCount'] = $stmnt->rowCount();
            return true;
        } else {
            $_SESSION["logingood"] = false;
            return false;
        }
    }
}
?>