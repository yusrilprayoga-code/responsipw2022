<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";

    $konek = mysqli_connect($hostname, $username, $password, $database);
    if(!$konek)
    {
        die("<script> alert('connection failed') </script>");
    }

    function query($query){
        global $konek;

        $result = mysqli_query($konek, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function data($data){
        global $konek;

        $vehicle = htmlspecialchars($data['vehicle']);
        $device = htmlspecialchars($data['device']);
        $tipe = htmlspecialchars($data['tipe']);
        $series = htmlspecialchars($data['series']);
        $wiper = htmlspecialchars($data['wiper']);

        $query = "INSERT INTO `vehicle` VALUES ('', '$vehicle', '$device', '$tipe', '$series', '$wiper')";
        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function ubah($data){
        global $konek;

        $id = $_GET["id"];
        $vehicle = htmlspecialchars($data['vehicle']);
        $device = htmlspecialchars($data['device']);
        $tipe = htmlspecialchars($data['tipe']);
        $series = htmlspecialchars($data['series']);
        $wiper = htmlspecialchars($data['wiper']);

        $query = "UPDATE `vehicle` SET `vehicle_name` = '$vehicle', `device_name` = '$device', `type` = '$tipe', `series` = '$series', `wiper_width` = '$wiper' WHERE `vehicle`.`VIN` = $id";
        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function hapus($id){
        global $konek;
        mysqli_query($konek, "DELETE FROM vehicle WHERE VIN =$id");

        return mysqli_affected_rows($konek);
    }
?>