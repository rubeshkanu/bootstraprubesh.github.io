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


<div class="jumbotron"><!--bootsrap4-> jumbotron-->
  <h1>Rubesh Production</h1>
  <p>Welcome to about page</p>
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


<footer>
  <p class="p-3 bg-dark text-white text-center">@rubeshtechnical Production</p>
  
</footer>

</body>


</html>