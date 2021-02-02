<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

     <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <!--End CSS-->

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head> 
<body> 
<?php
  include "2.php";
  $nama_valid=true;
  $nama_valid_msg="";
  $nama  = $_REQUEST['nama'];
  $kota = $_REQUEST['kota'];
  $telp  = $_REQUEST['telp'];
  $mysqli  = "INSERT INTO input_tabel (nama, kota, telp) VALUES ('$nama', '$kota', '$telp')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>
<a href="tabel.php" class="btn btn-primary tombol">Lihat Data</a>
</body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="dist/sweetalert2.all.min.js"></script>
      <script src="script.js"></script>
      <script src="https://kit.fontawesome.com/61e5120832.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js"></script>
  
  </html>