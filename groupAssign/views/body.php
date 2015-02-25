<?php
/**
 * Created by PhpStorm.
 * User: patrickhalton
 * Date: 2/13/15
 * Time: 5:38 PM
 */?>
 
 <div class="header alt vert">
  <div class="container">
    
    <h1>Facebook API</h1>
      <p class="lead">Facebook API for SSL</p>
      <div>&nbsp;</div>
      <!-- Small modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Sign in</button> -->


      <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Get Started</a>
      <!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Login user</h4>
      </div>
      
      
       <div class="modal-body">

	<button type="submit" name="submit" value="Login" class="btn btn-primary" id="fb" ><img src="/groupAssign/uploads/Facebook-10.png" height="25px" width="25px">Login With Facebook</button> </br>
	
	<div id="left"></div><b><i>or</i></b><div id="right"></div>
	
	<form enctype="multipart/form-data" action="?controller=home&action=login" method="POST" id="login">
	   <ul>
		<li class="width">
			<label for="username" class="label_text">User Name: </label>
            <input type="text" name="username" class="label_text"/> </br>
        </li>
        
        <li class="width">  
            <label for="password" class="label_text">Password: </label>
            <input type="text" name="password" id="password" class="label_text" /> </br>
        </li>
       </ul>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
            <button type="submit" name="submit" value="Login" class="btn btn-primary">Login</button>
        </div>   
            
	</form>
	
</div>
      
      
    </div>
  </div>
</div>

  </div>
</div>

<hr>

<div id="sec1" class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>The Simplicity of Bootstrap</h1>
        <p class="lead">The Most Popular Responsive Framework</p>
      </div>
      <div class="col-md-5">
        <h1 class="pull-right"><i class="icon-mobile-phone icon-3x"></i> <i class="icon-tablet icon-3x"></i> <i class="icon-laptop icon-3x"></i></h1>
      </div>
    </div>
  </div>
</div>

<div class="featurette" id="sec2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Amazing Features</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-2 text-center">
        <div class="featurette-item">
          <i class="icon-rocket"></i>
          <h4>Rocket</h4>
          <p>Up-up-and-away with this starter template.</p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-magnet"></i>
          <h4>Magnet</h4>
          <p>For you are a magnet and I am steel.</p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-shield"></i>
          <h4>Shield</h4>
          <p>Protect yourself. Don't design like it's 1999.</p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-pencil"></i>
          <h4>Scholar</h4>
          <p>Because lead pencils are pretty smart looking.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="callout" id="sec3">
  <div class="vert">
    <div class="col-md-12 text-center"><h2>Random People With Smiles</h2></div>
    <div class="col-md-12 text-center">&nbsp;</div>
    <div class="col-md-8 col-md-offset-2 text-center">
      <div class="row hidden-xs">
       <div class="col-sm-2"><img class="img-circle grayscale" src="http://api.randomuser.me/portraits/thumb/women/12.jpg"></div>
       <div class="col-sm-2"><img class="img-circle grayscale" src="http://api.randomuser.me/portraits/thumb/men/95.jpg"></div>
       <div class="col-sm-2"><img class="img-circle grayscale" src="http://api.randomuser.me/portraits/thumb/women/67.jpg"></div>
       <div class="col-sm-2"><img class="img-circle grayscale" src="http://api.randomuser.me/portraits/thumb/men/27.jpg"></div>
       <div class="col-sm-2"><img class="img-circle grayscale" src="http://api.randomuser.me/portraits/thumb/women/15.jpg"></div>  
       <div class="col-sm-2"><img class="img-circle grayscale" src="http://api.randomuser.me/portraits/thumb/men/18.jpg"></div>
      </div>
    </div>
  </div>
</div>

<div class="blurb" id="sec4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Mobile-first</h1>
        <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
      </div>
    </div>
  </div>
</div>

<hr>

<div class="gallery">
  
  <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h5>This Template is Responsive</h5>
        <h2>Features Galore</h2>
        <br>
      </div>
  </div>
  
  <div class="container well well-lg">
    
    <div class="row">
    		
      	<div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-film"></i></span> Carousel</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-folder-close-alt"></i></span> Tabs</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-credit-card"></i></span> Modal</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-reorder"></i></span> Navigation</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-mobile-phone"></i></span> Mobile-first</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-align-justify"></i></span> Accordion</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-list-alt"></i></span> Panel</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-check"></i></span> Form</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-table"></i></span> Table</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-eye-open"></i></span> Icons</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-th"></i></span> Responsive Grid</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <span class="text-success"><i class="icon-font"></i></span> Typography</a>
          </div>
        </div>      
    </div>
  </div>
</div>

<div class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h1><i class="icon-plane icon-3x"></i></h1>
      </div>
      <div class="col-md-7">
        <h1 class="pull-right">Launch Your Web Design</h1>
        <p class="lead pull-right">With this Responsive Bootstrap Template</p>
      </div>
    </div>
  </div>
</div>

<div class="blurb bright">
  
  <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h3>Smashing Heading</h3>
        <br>
      </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2><i class="icon-chevron-left"></i> Left</h2></div>
         <div class="panel-body text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis si.
            <div class="row">&nbsp;</div>
          <button class="btn btn-lg btn-primary btn-block">Login</button> 
          </div>
         </div>
 	</div>
    <div class="col-sm-4">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2>Right <i class="icon-chevron-right"></i></h2></div>
         <div class="panel-body text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit.
           <div class="row">&nbsp;</div>
          <button class="btn btn-lg btn-primary btn-block">Sign Up</button> 
           
          </div>
         </div>
 	</div>
  </div>
</div>

<div class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h3>Sharing the Bootstrap Love</h3>
        <p class="lead"></p>
      </div>
    </div>
  </div>
</div>