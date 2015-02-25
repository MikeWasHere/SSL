<? 
//form view
?>
    
<!--
    <style>
        form{
            width: 25%;
            border: 3px red solid;
            padding-top: 2%;
            padding-bottom: 2%;
        }
        
        label{
            padding-left: 15%;
            float: left;
            width: 30%;
            margin-bottom: 20px;
        }
        
        input{
            margin-bottom: 20px;
        }
        
        button{
            width: 69%;
            font-size: 1.4em;
            padding: 10px;
            background-color: #CC3535;
            border: none;
            border-radius: 5px;
            margin-left: 15%;
            transition: 1s ease ;
        }
        
        button:hover{
            background-color: #DE1D1D;
        }
    </style>
-->
    
<!--
    <form enctype="multipart/form-data" action="index.php?action=loginAction" method="POST" class="col-md-1">
        <label for="username">username: </label>
        <input type="text" name="username" /> </br>
    
        <label for="password">Password: </label>
        <input type="text" name="password" id="password" /> </br>

        <button type="submit">Submit</button>

        
</form> 
-->
    
    <div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Birds</h3>

          <ul class="nav masthead-nav">
            <li class="active">
              <a href="#" target=
              "_blank">The Homies</a>
            </li>

            <li>
              <a href="index.php?action=registerForm">register form</a> 
            </li>

            <li>
              <a href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="inner cover">
        <h1 class="cover-heading">Full screen background cover page.</h1>

        <p class="lead">Cover is a one-page template for building simple and
        beautiful home pages. Download, edit the text, and add your own
        fullscreen background color and photo to make it your own.</p>

      </div>
        
        <!-- Small modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Sign in</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Login user</h4>
      </div>
        
      <div class="modal-body">
        <form enctype="multipart/form-data" action="index.php?action=loginAction" method="POST">
            <label for="username" class="label_text">User Name: </label>
            <input type="text" name="username" class="label_text"/> </br>
          
            <label for="password" class="label_text">Password: </label>
            <input type="text" name="password" id="password" class="label_text" /> </br>
          
            <label for="address" class="label_text">Address: </label>
            <input type="text" name="address" class="label_text"/> </br>
        
            <label for="city" class="label_text">City: </label>
            <input type="text" name="city" class="label_text"/> </br>
      
            <label for="state" class="label_text">State: </label>
            <input type="text" name="state" class="label_text"/> </br>
    
            <label for="zip" class="label_text">Zip: </label>
            <input type="text" name="zip" class="label_text"/> </br>
        
            <label for="email;" class="label_text">Email: </label>
            <input type="text" name="email" class="label_text"/> </br>
      
            <label for="phonenumber" class="label_text">Phone Number: </label>
            <input type="text" name="phonenumber" class="label_text"/> </br>
        
            <label for="website" class="label_text">Website: </label>
            <input type="text" name="website" class="label_text"/> </br>

            <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
            <button type="submit" class="btn btn-primary ">Login</button>
            
        </form> 
      </div>
      
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
        
      <!-- Small modal End -->  
      <div class="mastfoot">
        <div class="inner">
          <!-- Validation -->

          <p><a href=
          "http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fg6GWQ"
          target="_blank"><small>HTML</small><sup>5</sup></a></p>
          
          
          <p><a href=
          "https://github.com/twbs/bootlint"
          target="_blank"><small>Checked with Bootlint</small></a></p>          
      
          

          <p>© 2014 Your Name ~ <a href=
          "http://getbootstrap.com/">Bootstrap</a></p>
        </div>
      </div>
    </div>
</div>
</div>
    