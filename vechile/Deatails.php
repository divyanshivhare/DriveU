<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>DriveU</title>
  </head>
  <body>
  <div class="had">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              <u><a class="nav-link active" aria-current="page" href="Deatails.php">Details</a></u>
            </div>
          </div>
        </div>
      </nav>
      </div>
      <div class="table">
      <h3>Vehicle Details</h3>
      
    <table class="table table-hover">
        <tr>
        <th>Registration number</th>
        <th>Owner Name</th>
        <th>Vehicle</th>
        <th>Registration year</th>
        <th>Fuel type</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","veichle");
        if ($conn-> connect_error){
            die("Connection failed:".$conn-> connect_eroor);
        }
        
        $sql = "SELECT * from vehicle";
        $result = $conn-> query($sql);
        if($result-> num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["rg_no"]."</td><td>".$row["name"]."</td><td>".$row["vname"]."</td><td>".$row["rg_year"]."</td><td>".$row["fule"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo"0 Result";
        }
        $conn-> close();
        ?>
        <br>
        <h3>Driver Details</h3>
    <table class="table table-hover">
        <tr>
        <th>DL number</th>
        <th>Driver Name</th>
        <th>Age</th>
        <th>Gender</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","veichle");
        if ($conn-> connect_error){
            die("Connection failed:".$conn-> connect_eroor);
        }
        
        $sql = "SELECT * from driver";
        $result = $conn-> query($sql);
        if($result-> num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["dl_no"]."</td><td>".$row["dname"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo"0 Result";
        }
        $conn-> close();
        ?>
        </div>
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