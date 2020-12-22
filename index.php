<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:title" content="Astronomy Picture Of The Day">
    <meta property="og:description" content="Today's featured photo publish by Nasa ">
    <meta property="og:image" itemprop="image"  content="https://astrocamp.herokuapp.com/thu.jpg">
    <meta property="og:url" content="astrocamp.herokuapp.com">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>APOD(Astronomy Picture Of The Day</title>
  
  <!-- HTML -->
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CHIDACREATION</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-center">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="neo">near earth objects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
<h1 class="text-center" id="tit">Astronomy Picture of the Day </h1>
  <div class="card" >
      <div class="card-header text-center">
       <form class="form-inline">
          <div class="input-group">
              
              <input type="date" class="form-control rounded" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="date" min="1995-06-16" >
              <button type="submit"class="input-group-prepend btn btn-white  " id="btn">
                  <i class=" fa fa-search input-group-text rounded"></i>
              </button>
          </div>
      </form>
      </div>
      <div id="container">
          
      </div>
  </div>
  <div class="spinner-border text-dark" role="status" width="600" height="600" id="sp">
      
   <i class="fa fa-spinner" height="600" width="600" id="spin"></i>
  
  </div>
  <footer class="text-center">
      <br />
      ©All the copyrights are reserved <br />
      Created & Maintenance ~ Chidananda Ray Sarkar
  </footer>
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>
