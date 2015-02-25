<body class="sb">
<form enctype="multipart/form-data" action="?controller=home&action=addUser" id="register" method="POST">

	<h3>Register Form</h3>

	  <ul>
		<li class="reg">
			<label for="username" class="label_text">User Name: </label>
            <input type="text" name="username" class="label_text"/> </br>
        </li>
        
        <li class="reg">  
            <label for="password" class="label_text">Password: </label>
            <input type="text" name="password" id="password" class="label_text" /> </br>
        </li>
        
        <li class="reg">
            <label for="address" class="label_text">Address: </label>
            <input type="text" name="address" class="label_text"/> </br>
        </li>
        
        <li class="reg">
            <label for="city" class="label_text">City: </label>
            <input type="text" name="city" class="label_text"/> </br>
        </li>
        
        <li class="reg">
            <label for="state" class="label_text">State: </label>
            <input type="text" name="state" class="label_text"/> </br>
        </li>
        
        <li class="reg">
            <label for="zip" class="label_text">Zip: </label>
            <input type="text" name="zip" class="label_text"/> </br>
        </li>
        
        <li class="reg">
            <label for="email;" class="label_text">Email: </label>
            <input type="text" name="email" class="label_text"/> </br>
        </li>
        
        <li class="reg">
            <label for="phonenumber" class="label_text">Phone Number: </label>
            <input type="text" name="phonenumber" class="label_text"/> </br>
        </li>
        
        <li class="reg">
            <label for="website" class="label_text">Website: </label>
            <input type="text" name="website" class="label_text"/> </br>
        </li>
      </ul>
        
	<input id="file" type="file" name="files"/>	
		<input id="sub" class="btn btn-default" type="submit"/>
</form>
</body>