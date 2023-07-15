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
              <a class="nav-link active" aria-current="page" href="Deatails.php">Details</a>
            </div>
          </div>
        </div>
      </nav>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
 

<?php
$conn = mysqli_connect("localhost", "root", "", "veichle");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ""; // Initialize the message variable

if (isset($_GET['id'])) {
    $rg_no = $_GET['id'];
    $sql = "DELETE FROM vehicle WHERE rg_no = '$rg_no'";
    if ($conn->query($sql) === TRUE) {
        // $message = "Record deleted successfully";
    } else {
        $message = "Error deleting record: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
  $dl_no = $_GET['id'];
  $sql = "DELETE FROM driver WHERE dl_no = '$dl_no'";
  if ($conn->query($sql) === TRUE) {
      // $message = "Record deleted successfully";
  } else {
      $message = "Error deleting record: " . $conn->error;
  }
}

$conn->close();
?>


   <center><h1>Record  Deleted successfully!</h1></center> 
   <br><br>
    <p><?php echo $message; ?></p>
    <center><h3><a href="Deatails.php">Back to Details</a></h3></center>
</body>
</html>