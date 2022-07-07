<?php
include 'db.php';

$admin  = query("SELECT * FROM admin");
session_start();
if (empty($_SESSION['admin_nama'])) {
    echo "<script>
              alert('Anda Harus Login Terlebih Dahulu');
              document.location.href = 'login.php';
              </script>";
}

if(isset($_POST['submit'])){
    if (data($_POST) > 0){
        echo "<script>
              alert('Data Berhasil Ditambahkan');
              document.location.href = 'vehicle.php';
              </script>";
    } else{
        echo "<script>
              alert('Data Gagal Ditambahkan');
              document.location.href = 'vehicle.php';
              </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Responsi</title>
</head>
<style>
    .container {
        margin-top: 50px;
        width: 450px;
    }

    .container form {
        padding: 20px;
    }

    .btn-secondary:hover {
        color: cyan;
    }
</style>

<body>
    <div class="container">
        <form method="post" class="shadow">
            <h5><strong>Add Vehicle</strong></h5>
            <div class="mb-3">
                <button type="button" class="btn btn-outline-primary form-control" id="inputGroupFile01" style="height: 40px;">Add Vehicle Photo</button>
            </div>
            <div class="mb-3">
                <label for="vehicle" class="form-label">Vehicle Name</label>
                <input type="text" class="form-control" placeholder="Insert Vehicle Name" name="vehicle">
            </div>
            <div class="mb-3">
                <label for="device" class="form-label">Device Name</label>
                <input type="text" class="form-control" placeholder="Device Name" name="device">
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Vehicle Type</label>
                <input type="text" class="form-control" placeholder="Vehicle Type" name="tipe">
            </div>
            <div class="mb-3">
                 <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" placeholder="Vehicle Series" name="series">
            </div>
            <div class="mb-3">
                <label for="wiper" class="form-label">Wiper Width</label>
                <input type="number" class="form-control" name="wiper">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-link me-md-2" type="reset" style="color: red; text-decoration:none;">Cancel</button>
                <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>