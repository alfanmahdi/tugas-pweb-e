<?php
// Include the database connection file
require_once 'config.php';

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysql_connection, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit data | Web CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Edit Data</h2>
            </div>
            <div class="col-md-6">
                <a href="index.php" class="btn btn-primary float-end">Kembali</a>
            </div>
        </div>
        <div class="w-50">
        <form action="editAction.php" method="post" name="edit">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="Masukkan nama" class="form-control" id="name" name="name" value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label for="age" class="age">Usia</label>
                <input type="number" name="age" id="age" class="form-control" value=<?php echo $age; ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value=<?php echo $email; ?>>
            </div>
            <td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
            <input type="submit" name="update" class="btn btn-primary" value="Update Data">
        </form>
    </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>