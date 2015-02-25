<?

class file{
	public function upload($up){
		
		$uploaddir = './uploads/'; //Physical path on Apache
		$uploadfile = $uploaddir . basename($up['files']['name']);
		
		if (move_uploaded_file($up['files']['tmp_name'], $uploadfile)){
			echo "File is valid, and was successfully uploaded.\n";
			?>
			<img src="uploads/<?=$up['files']['name']?>"/>
			<?
		}
	}
	
	
}

?>