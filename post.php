<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
<?php

    $nama =$_POST["nama"];
    $umur=$_POST["umur"];
    $jenis_kelamin= $_POST["jenis_kelamin"];
    $alamat= $_POST["alamat"];
    $tombol= $_POST["tombol"];
    $email= $_POST["email"];

?>
</head>
<body style="background-color: aquamarine;">
    
      <header class="p-3 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
      
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-link px-3 text-blue"><img src="laut.png" alt="" width="35"> </li>
              </ul>
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li > <h3>Laut Sakti</h3></li>
              </ul>
              </ul>
              <ul class="nav justify-content-end">
                <li><a href="HalamanUtama.html" class="nav-link px-2 text-blue">Beranda</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profil
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="Sejarah.html">Sejarah</a></li>
                    <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                    <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                  </ul>
                </li>
                <li><a href="#" class="nav-link px-2 text-blue">Dwonload</a></li>
                <li><a href="#" class="nav-link px-2 text-blue">FAQ</a></li>
              </ul>
            </div>
          </div>
        </header>
        <div class="container">
        <div class="px-5 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="laut.png" alt="" width="75" height="67">
            <h1 class="display-5 fw-bold">Selamat Datang di Laut Sakti</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-5">terimakasih telah mendaftarkan diri anda<br>mari kita jaga dan lestarikan lautan</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-5 gap-1">beranda</button>
                
              </div>
            </div>
            <hr style="border: 4px;">
          </div>
        
          <div class="alert alert-success" role="alert">
          <div class="container">
            <table>
            <tr>
            <td><h5>Silahkan cek kembali kelengkapan data anda</h5></td>
            </tr>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td> <?php echo $nama ?></td>
            </tr>
            <tr>
                <td>umur</td>
                <td>:</td>
                <td> <?php echo $umur ?></td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td><?php echo $jenis_kelamin ?></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td> <?php echo $alamat ?></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><?php echo $email ?></td>
            </tr>
            </table>
        </div></div>

        
          <!--copyright-->
          <footer class="container mt-5"><hr>
            <p>&copy; 2021 Roni Rusmana (2009226) &middot;</p>
          </footer>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
        
    </body>
</html>     