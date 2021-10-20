<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
    </head>

<!--input data-->
<body style="background-color: rgb(255, 255, 255);">
    
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
    
       
    <form name="" action="post.php" method="post">
    <div class="container">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <h3> <b> Silahkan Daftar Anggota Laut Sakti</b></h3>
              </div>
              
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="alexander" name="nama">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Umur</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="19" name="umur">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="cowok">
                laki-laki
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="cewek" checked>
                perempuan
                </div></div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsikan mengenai laut</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
              </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit" value="simpan" name="tombol">Submit form</button>
            </div>
            </div></div>

            
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </form>
    </body>
</html>