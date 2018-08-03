<!DOCTYPE html>
<html lang="en">
<head>
  <title>AYAM JAGO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
	  background-color: cyan;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      background-image:url("images/h1.jpg"); 
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">

  <div class="container text-center">
    <h1>AYAM</h1>      
    <p>JAGO</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"polo
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Ayam</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="koleksi.php">Data</a></li>
   
      </ul>

    
  </div>
</div>
      </ul>
    </div>
  </div>
</nav>
<h1> DATA FORM</h1>

 <div class="container">
        <form action="proses.php" method="post">
          <div class="form-group">
            <label for="text">Ayam :</label>
            <input type="text" class="form-control" name="noring">
          </div>
          <div class="form-group">
            <label for="text">Ukuran:</label>
            <input type="text" class="form-control" name="jenis">
          </div>
          <div class="form-group">
            <label for="text">Umur:</label>
            <input type="text" class="form-control" name="umur">
          </div>

          <button type="submit" class="btn btn-primary" name="submit">TAMBAH</button>
        </form>
        </div>


<footer class="container-fluid text-center">
  <p>&copy by . .</p>  
 
</footer>

</body>
</html>
