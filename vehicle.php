<?php
include 'db.php';

$admin  = query("SELECT * FROM admin");
session_start();
if (empty($_SESSION['admin_nama'])) {
    header("location: login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsi</title>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <style>
        /*!
 * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

        /* Toggle Styles */

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: fixed;
            left: 250px;
            width: 0;
            height: 100%;
            margin-left: -250px;
            overflow-y: auto;
            background: #000;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            width: 100%;
            position: absolute;
            padding: 15px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        /* Sidebar Styles */

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sidebar-nav li {
            text-indent: 20px;
            line-height: 40px;
        }

        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: white;
        }

        .sidebar-nav li a:hover {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav>.sidebar-brand {
            height: 65px;
            font-size: 18px;
        }

        .sidebar-nav>.sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav>.sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        @media(min-width:768px) {
            #wrapper {
                padding-left: 250px;
            }

            #wrapper.toggled {
                padding-left: 0;
            }

            #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 0;
            }

            #page-content-wrapper {
                padding: 20px;
                position: relative;
            }

            #wrapper.toggled #page-content-wrapper {
                position: relative;
                margin-right: 0;
            }

            .sidebar-brand img {
                margin-left: 65px;
                margin-top: 30px;
                justify-content: center;
                align-items: center;
            }
        }
    </style>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <img width="110" src="profil.png" alt="" class="mb-2" style="border-radius: 60px;">
                    <?php foreach ($admin as $rows) : ?>
                        <a href="#" class="text-center"><?= $rows['nama_lengkap'] ?></a>
                        <a href="#" class="text-center"><?= $_SESSION['admin_nama']; ?></a>
                    <?php endforeach ?>
                </li>
                <br><br><br><br><br><br><br><br><br><br>
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <li>
                    <a href="vehicle.php">Vehicles</a>
                </li>
                <li>
                    <a href="logout.php" onclick="return confirm('Apakah Anda Ingin Log out?')">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        <div class="container mt-5">
                            <div class="card shadow" style="border-radius: 20px;">
                                <div class="card-body">
                                    <h3 class="ms-3 mb-5"><strong>Vehicles</strong></h3>
                                    <table class="table mt-5 ">
                                        <thead>
                                            <button type="button" class="btn btn-primary ms-3"><a style="color:white; text-decoration:none;" href="tambah.php">Tambah</a></button>
                                            <form action="" method="get">
                                                <input class="form-control ms-3 mt-3" type="text" placeholder="Search" aria-label="Search" style="width: 1100px;" name="cari">
                                            </form>
                                            <div class="container">
                                                <?php
                                                if (isset($_GET['cari'])) {
                                                    $cari = $_GET['cari'];
                                                    echo "<b>Hasil pencarian : " . $cari . "</b>";
                                                }
                                                ?>

                                                <tr>
                                                    <th scope="col">VIN</th>
                                                    <th scope="col">Vehicle Name</th>
                                                    <th scope="col">Device Name</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Series</th>
                                                    <th scope="col">Wiper Width</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </div>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['cari'])) {
                                                $cari = $_GET['cari'];
                                                $data = mysqli_query($konek, "select * from vehicle where vehicle_name like '%" . $cari . "%'");
                                            } else {
                                                $jumlahDataPerhalaman = 5;
                                                $jumlahData = count(query("SELECT * FROM vehicle"));
                                                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
                                                $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
                                                $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
                                                $data = mysqli_query($konek, "select * from vehicle LIMIT $awalData, $jumlahDataPerhalaman");
                                            }
                                            $no = 1;
                                            while ($d = mysqli_fetch_array($data)) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?= $d['vehicle_name']; ?></td>
                                                    <td><?= $d['device_name']; ?></td>
                                                    <td><?= $d['type'] ?></td>
                                                    <td><?= $d['series'] ?></td>
                                                    <td><?= $d['wiper_width'] ?></td>
                                                    <td>
                                                        <div>
                                                            <i type="button" class='bx bx-dots-vertical-rounded dropdown-toggle' data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                            <ul class="dropdown-menu">
                                                                <!-- Dropdown menu links -->
                                                                <li>
                                                                    <a href="edit.php?id=<?= $d['VIN'] ?>">Edit Data</a>
                                                                </li>
                                                                <li>
                                                                    <a href="delete.php?id=<?= $d['VIN']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data')">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                    <?php if($halamanAktif > 1) : ?> 
                                        <li class="page-item">
                                            <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>       
                                        </li> 
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                            <?php if ($i == $halamanAktif) : ?>
                                                <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>" style="font-weight: bold; color: blue;"><?= $i; ?></a></li>
                                            <?php else : ?>
                                                <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                        <?php if($halamanAktif < $jumlahHalaman) : ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?halaman=<?= $halamanAktif + 1 ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>