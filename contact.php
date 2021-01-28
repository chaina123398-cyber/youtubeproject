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

<div class="jumbotron">
  <h1>Travel Agency</h1>
  <p>Best way to find the path</p>
</div>

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

</body>
</html>