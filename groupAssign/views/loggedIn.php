<body class="container sb">
		
<div class="row" id="secPage">	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/groupAssign/uploads/a9d5Mqj_460s.jpg" alt="bert" >
      <div class="carousel-caption">
       <h3>first one</h3>
       <p>first description</p>
      </div>
    </div>
    
    <div class="item">
      <img src="/groupAssign/uploads/aYbDx2x_460s.jpg" alt="ernie">
      <div class="carousel-caption">
        <h3>Second One</h3>
        <p>Second Description</p>  
    </div>
    
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--
<div style="width: 50%;
			border: 5px white solid;
			border-radius: 20px;
			margin: 10px auto;"> </div>
-->
	

	<div class="col-md-8">
		<form id="change">
			<h3>Carousel Settings</h3>
			<ul>
				<li class="width">
					<label for="username" class="label_text">Title: </label>
					<input type="text" name="username" class="label_text"/> </br>
				</li>
    
				<li class="width">  
					<label for="password" class="label_text">Text: </label>
					<input type="text" name="password" id="password" class="label_text" /> </br>
				</li>
				<input id="file" type="file" name="files"/> </br>
				<button type="submit" name="submit" value="Login" class="btn btn-primary">Update</button>
			</ul>
		</form>
	</div>
</div>
