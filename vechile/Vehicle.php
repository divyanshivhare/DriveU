<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link rel="stylesheet" href="style.css">

    </style>
    <title>DriveU</title>
  </head>  
  
  <body>
  
    
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <img src="cars.png" alt="" style="height: 50px; width: 70px;">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              <a class="nav-link active" aria-current="page" href="vd1.php">Vehicle</a>
              <a class="nav-link active" aria-current="page" href="dd1.php">Driver</a>
              <a class="nav-link active" aria-current="page" href="Deatails.php">Details</a>
            </div>
          </div>
        </div>
      </nav>
      <h1><center>VEHICLE REGISTRATION</center></h1>
      <br>  
      <form class="row gx-3 gy-2 align-items-center"action="vd.php" method="post">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Name</label>
    <input type="text" name="rg_no"class="form-control" id="specificSizeInputName" placeholder="Registration Number(MP04C****)" Required>
  </div>
  <div class="col-sm-3">
  <label class="visually-hidden" for="specificSizeInputName">Name</label>
  <input type="text" name="name"class="form-control" id="specificSizeInputName" placeholder="Owner Name" Required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Name</label>
    <input type="text" name="vname"class="form-control" id="specificSizeInputName" placeholder="Vehicle Name" Required>
  </div>
  <div class="col-sm-3">
  <label class="visually-hidden" for="specificSizeInputName">Name</label>
  <input type="text" name="rg_year"class="form-control" id="specificSizeInputName" placeholder="Year of registration" Required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select"name="fule" id="specificSizeSelect" Required>
      <option value="" placeholder="Fuel Type">Fuel Type</option>
      <option value="Diesel">Diesel</option>
      <option value="Petrol">Petrol</option>
    </select>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>