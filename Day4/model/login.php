<?

class login{

	public function checkuser($user){
		$dbh = new PDO("mysql:host=localhost;dbname=SSL;port=8889","root","root");
		
		$sql = "select username, password from users where 
						username = :username and password = :password";
						
		$st = $dbh->prepare($sql);
		
		$st->execute(array(":username"=>$user["username"],
							":password"=>md5($user["password"])));
		
		return $st->fetchAll();
	
		if($st->fetchAll()){
			return 1;
		}else{
			return 0;
		}
	
	}
	
		}
?>