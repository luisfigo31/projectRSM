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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand" href="index.html">SumBarKu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
			<a class="nav-link active" aria-current="page" href="index.html">Home</a>
			<a class="nav-link active" aria-current="page" href="index.html">Home</a>
              <a class="nav-link" href="artikel.html">Artikel</a>
              <a class="nav-link" href="foto.html">Photo Gallery</a>
              <a class="nav-link" href="video.html">Video Gallery</a>
              <a class="nav-link" href="about.html">About Me</a>
              <a class="nav-link" href="contact.php">Contact Us</a>
              <a class="nav-link" href="validasi-huruf.php">us</a>
             
            </div>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Satu <span>Nusa</span> Satu <span>Bangsa</span></h1>
      </div>
    </div>
    <!-- Akhir Jumbotron -->
<?php
	// Membuat variabel
	include "2.php";
	$nama="";
	$kota="";
	$telp = "";
	$namaErr = "";
	$kotaErr = "";
	$telpErr = "";
	$kota_valid = true;
	$kota_valid_msg = "";
	
	// Cek form sudah di klik submit/belum
	if(isset($_POST['submit'])){
		$nama = trim($_POST['nama']);
		$kota = trim($_POST['kota']);
		$telp = trim($_POST['telp']);
		
		// Cek input kosong
		if(empty($nama)){
			$namaErr = "Nama masih kosong.<br>";
		}
		if(empty($kota)){
			$kotaErr = "kota masih kosong.<br>";
		}
		if(empty($telp)){
			$telpErr = "telp masih kosong.<br>";
		}
		
		// Kode cek username hanya boleh huruf a-z dan A-Z
		if(!preg_match("/^[A-Za-z]+$/",$kota)){
			$kota_valid = false;
			$kota_valid_msg = "Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi.<br>";
		}
		
		// Cek semua input sudah diisi apa belum
		if( !empty($nama) and !empty($kota) and !empty($telp) and $kota_valid ){
			// Disini tempat menulis kode (semua syarat sudah input terpenuhi).
			// Misalnya menulis kode query ke database
			echo 'Input Berhasil <a href="tabel.php" class="btn btn-primary tombol">Lihat Data</a>';
		}
	}
?> 


<?php
  include "2.php";
  $nama_valid=true;
  $nama_valid_msg="";
  $mysqli  = "INSERT INTO input_tabel (nama, kota, telp) VALUES ('$nama', '$kota', '$telp')";
  
?>

 
 <div class="container">
        <h2>Contact Us</h2>
       
        <form class="formhorizontal" method="POST" action="validasi-huruf.php">
		<div class="formgroup">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
               
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $nama; ?>">
                <?php echo $namaErr; ?>
                
			</div>
			<div class="formgroup">
                <label class="control-label col-sm-2" for="kota">Kota:</label> 
            <div class="col-sm-4">
                <input type="text" class="form-control" id="kota" placeholder="Masukkan Kota" name="kota" maxlength="12" value="<?php echo $kota; ?>">
                <?php echo $kotaErr .$kota_valid_msg; ?>
            </div>
            </div>
            <div class="formgroup">
            <label class="control-label col-sm-2" for="telp">No.Telp:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="telp" placeholder="Masukkan No.Telp" name="telp" maxlength="12" value="<?php echo $telp; ?>">
                <?php echo $telpErr; ?>
            </div>
            </div>
			<br>
      <div id="error"></div>
	<input type="submit" name="submit" value="submit">
	

</form>

<script>
      var kota=document.forms['formgroup']['kota'];
      var errors=document.getElementById('error');
      function validation()
      {
          if(kota.value=='')
          {
            errors.innerHTML="tidak boleh kosong";
            errors.style.display="block";
            return false;
          }
          else if(kota.value.length>2)
          {
            alert("kara harus lebih dari 2 kaarktr")
            errors.innerHTML="tidak boleh kosong";
            errors.style.display="block";
            return false;
          }
          return true;
      }
      </script>


<!-- Footer -->
<div class="footer">
        &copy;2018 All Right Reserved by Dispersion
      </div>
      </div>
    <!-- Akhir Footer -->
  
     <!-- Akhir Container -->
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