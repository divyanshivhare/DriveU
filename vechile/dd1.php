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
              <u><a class="nav-link active" aria-current="page" href="dd1.php">Driver</a></u>
              <a class="nav-link active" aria-current="page" href="Deatails.php">Details</a>
            </div>
          </div>
        </div>
      </nav>

      <center><h3>Driver details</h3></center>
<table class="table table-hover">
    <tr>
        <th>DL number</th>
        <th>Driver Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Action</th> <!-- New column for delete option -->
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root","", "veichle");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM driver";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["dl_no"] . "</td><td>" . $row["dname"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td>";
            echo "<td><a href='delete.php?id=" . $row["dl_no"] . "' class='btn btn-danger'>Delete</a></td></tr>"; // Delete button
        }
        echo "</table>";
    } else {
        echo "0 Result";
    }
    $conn->close();
    ?>
</table>

<br><br>
