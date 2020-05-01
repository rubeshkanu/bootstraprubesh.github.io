<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css"><!--bootstrap-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> <!--Google Font-->
</head>
<body>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
        </div>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>	
	</div>
	<div class="container-fluid"><!--container fluid for removing the downward scroll bar option-->
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/image4.jpg" class="img-fluid aboutimg"><!--img-fluid for making size compactible-->
				
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">My first dynamic page</h2>
				<p class="py-4">In this i have have bootstrap->documentation->for nav bar i have use navbaroption to choose
				and copy the code and paste.And also i have use various google fonts.And comparitively i have use css</p>
				<a href="about.php" class="btn btn-success">Wanna Know Me</a>
				
			</div>
		</div>
	</div>
	
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our services</h2>	
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">


				<div class="card" > <!--bootstrap4-> cards-->
  <img class="card-img-top" src="image/image5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful honeybee</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">


				<div class="card" > <!--bootstrap4-> cards-->
  <img class="card-img-top" src="image/image5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful honeybee</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">


				<div class="card" > <!--bootstrap4-> cards-->
  <img class="card-img-top" src="image/image5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful honeybee</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
				
			</div>
			
			
			
		</div>
	</div>
</section>



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Gallary</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/image6.jpg" class="img-fluid pb-4">
      
    </div>

    
  </div>
  
</div>

</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contacts</h2>
  </div>
   <div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
      
    </div> 
     <div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email"autocomplete="off" class="form-control">
      
    </div> 
     <div class="form-group">
      <label>Mobile Number</label>
      <input type="text" name="mobile"autocomplete="off" class="form-control">
      
    </div> 
    <div class="form-group">
      <label>Comment</label>
      <textarea class ="form-control" name="comment">
        
      </textarea>
    </div> 
    <button type="submit" class="btn btn-success">Submit</button>
     
   </form>

 </div>


</section>



<footer>
  <p class="p-3 bg-dark text-white text-center">@rubeshtechnical Production</p>
  
</footer>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
