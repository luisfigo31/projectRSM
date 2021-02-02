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
              <a class="nav-link" href="artikel.html">Artikel</a>
              <a class="nav-link" href="foto.html">Photo Gallery</a>
              <a class="nav-link" href="video.html">Video Gallery</a>
              <a class="nav-link" href="about.html">About Me</a>
              <a class="nav-link" href="contact.php">Contact Us</a>
             
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

    <div class="container">
        <div class="card">
            <div class="card-body">

        <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection, 'input_form');
            $query = "SELECT * FROM input_tabel";
            $query_run = mysqli_query($connection,$query);
        ?>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kota</th>
                        <th scope="col">No Telpon</th>
                    </tr>
                </thead>
        <?php
            if($query_run)
            {
                 foreach($query_run as $row)
                {
        ?>
                <tbody>
                    <tr>
                        <td> <?php echo $row['ID']; ?></td>
                        <td> <?php echo $row['nama']; ?></td>
                        <td> <?php echo $row['kota']; ?></td>
                        <td> <?php echo $row['telp']; ?></td>
                    </tr>
                </tbody>
        <?php
                }
            }
            else
            {
                echo "Data Nihil";
            }
        ?>
 
                </table>
            </div>
        </div>
    </div>

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