<!DOCTYPE html>
<html lang="en">
<head>
  <title>AYAM JAGO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="FreeHTML5.co" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="manifest" href="manifest.json">
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
      <a class="navbar-brand" href="index.php">AYAM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="koleksi.php">DATA</a></li>
   
      </ul>

    
  </div>
</div>
      </ul>
    </div>
  </div>
</nav>



<?php
  include("koneksi.php");
  $sql_select = "SELECT * FROM ayam " ;
  
  $query_select = mysqli_query($konek, $sql_select) ;
?>

<h1>DATA AYAM</h1>
<table border="1" class="table table-bordered">
  <tr>
    <th>NO</th></th><th>AYAM</th> <th>UKURAN</th><th>UMUR</th>
    <th> OPERASI </th>
  </tr>
  <?php
  while($row_ayam = mysqli_fetch_assoc($query_select) ) {
    ?>
    <tr>
      <td><?php echo $row_ayam['no'] ?></td> 
      <td><?php echo $row_ayam['noring'] ?></td> 
      <td><?php echo $row_ayam['jenis'] ?></td> 
      <td><?php echo $row_ayam['umur'] ?></td> 
      <td>
       <a href="update.php?noring=<?php echo $row_ayam['no'] ?>"> Update I</a> 
       <a href="delete.php?noring=<?php echo $row_ayam['no'] ?>"> Delete </a> 
      </td>
    </tr>
    <?php
  }
  ?>
</table>


<footer class="container-fluid text-center">
  <p>&copy by . .</p>  
 
</footer>

</body>
</html>
