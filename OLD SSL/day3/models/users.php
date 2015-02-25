<?
class users {
    public function getUsers(){
        $dbh = new PDO("mysql:host=localhost;dbname=ssl1410;port=3360","root","root")
        $stmnt = $dbh->prepare("select * from users");
        $stmnt -> execute();
        $result = $stmnt->fetchAll();
        return $result;
    }

    public function addUser($username='',$password=''){
        $dbh = new PDO("mysql:host=localhost;dbname=ssl1410;port=3360","root","root")
        $stmnt = $dbh->prepare("insert into user
                            (users,password)
                            values
                            (:username,:password)");
        $stmnt->execute(array(":username"=>$username,
                              ":password"=>$password));
    }
    //deleteUser

?>