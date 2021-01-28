<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type ="text/css "href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Travel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>
      
   
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
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
      <img src="images/img-1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img-8.jpg" alt="Dubai" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Desert Safari</h3>
        <p>Thank you, Dubai!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img-9.jpg" alt="New York" width="1100" height="500">
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
		<h1 class="text-center">About Us</h1>
	</div>

<div class="container-fluid">
<div class="row">
	<div class="col-lg-6 col-md-6 col-12">
		<img src="images/boy.jpg" class="img-fluid aboutimg">
	</div>
	<div class="col-lg-6 col-md-6 col-12">
	<h2 >STAY UPDATED ON THE BEST TRAVEL DEALS AND TIPS!</h2>
	<p>Besides being one of my all-time favorite people in the world, Jodi is also a damn amazing blogger who writes often about food and culture. She devotes a lot of time to food on the road, taking mouthwatering photos that make me jealous of her ability to do so. A former lawyer, she also writes a series called “Thrillable Hours” about other lawyers who gave up being a corporate lackey for life on the road.</p>
  <a href="about.php" class="btn btn-success"> Check more </a>
	</div>

	</div>
</div>
</section>

<section>
  <div class="my-5">
    <div >
      <h1 class="text-center">Services</h1>
    </div>
  </div>
  <div class ="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/nature.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
           <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/nature.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
           <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/nature.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
      
    </div>
  </div>
</section>
<section>
  <div class="my-5">
    <div >
      <h1 class="text-center new">Our Gallery</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
       <div class="col-lg-4 col-md-4 col-12" >
          <img src="images/light.jpg" class="img-fluid pb-4"/>
      </div>
    </div>
    </section>

    <section>
  <div class="my-5">
    <div >
      <h1 class="text-center new">Contact Us</h1>
    </div>
    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type ="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>EmailId</label>
        <input type ="text" name="emailid" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobileno</label>
        <input type ="text" name="mobileno" autocomplete="off" class="form-control">
      </div>
     <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
<button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  </section>

  <footer>
    <p class="p-5 bg-dark text-white text-center"> @Travelproduction</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>