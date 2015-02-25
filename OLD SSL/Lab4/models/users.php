<?

class users{
	
	public function getUser($id) {
		$user = "root";
        $pass = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8889', $user, $pass);
        
        $stmt = $dbh->prepare(
	      'SELECT id, username, password FROM users WHERE id = :id'  
        );
        
        $stmt->execute(array(":id"=>$id));
        $result = $stmt->fetchAll();
        return $result;
	}

    public function getUsers(){
        $user = "root";
        $pass = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8889', $user, $pass);
        
        $stmt = $dbh->prepare(
	      'SELECT * FROM users'  
        );
        
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    
	public function addUser($username, $password, $file) {
		$user = "root";
        $pass = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8889', $user, $pass);
        
        $stmt = $dbh->prepare(
	      'INSERT INTO users (username, password, avatar) VALUES (:username, :password, :avatar)'  
        );
        
        $stmt->execute(array(":username"=>$username, ":password"=>sha1($password),":avatar"=>$file));
	}
    
    public function peaceOut ($id) {
		$user = "root";
        $pass = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8889', $user, $pass);
        
        $stmt = $dbh->prepare(
	      'DELETE FROM users
           WHERE id = :id'  
        );
        
        $stmt->execute(array(":id"=>$id));
    }
    
	
	public function updateUser ($id, $user, $pass) {
		$user = "root";
        $pass = "root";
        $dbh = new PDO('mysql:host=localhost;dbname=ssl1410;port=8889', $user, $pass);
        
        $stmt = $dbh->prepare(
	      'UPDATE users set username = :username, password = :password
           WHERE id = :id'  
        );
        
        $stmt->execute(array(":id"=>$id,":username"=>$user, ":password"=>$pass));
	
	// Delete User
    }
}
?>