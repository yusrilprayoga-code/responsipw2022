<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $password = mysqli_real_escape_string($konek, $_POST['password']);

    $query = "SELECT * FROM admin WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($konek, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        $_SESSION['admin_nama'] = 'Admin';
        header("location: index.php");
    } else {
        $error[] = 'Gagal Login';
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Responsi</title>
</head>
<style>
    .container {
        flex-direction: column;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: poppins;
    }

    .container form {
        width: 450px;
    }

    .card-img-overlay {
        margin-left: 20px;
        width: 300px;
        margin-top: 480px;
        margin-bottom: 20px;
        border-radius: 20px;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/opacity/see-through */
        color: white;
    }

    .container form .error-msg {
        margin: 10px 0;
        display: block;
        background: crimson;
        color: white;
        border-radius: 5px;
        font-size: 20px;
        padding: 10px;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col align-self-center ms-4">
                <div class="card bg-dark text-white">
                    <img width="650" height="650" src="mobil.jpg" alt="Gambar Mobil" class="card-img">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><strong>DISCOVER OUR SERVICES</strong></h5>
                        <p class="card-text">
                            There are hundreds are available <br>
                            Vehicle that will suits your business <br>
                            needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col align-self-center">
                <form method="POST">
                    <h4 class="text-center"><strong>LOGIN</strong></h4>
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<span class ="text-center error-msg">' . $error . '</span>';
                        }
                    }
                    ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep Me Logged in</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" name="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>