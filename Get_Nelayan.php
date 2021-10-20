<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <body style="background-color:aliceblue;">
    <!--header-->
    <header class="p-3 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
      
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Profil</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Info</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Program</a></li>
              </ul>
      
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="cari" aria-label="wow">
              </form>
      
              <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">cari</button>
                <button type="button" class="btn btn-warning">daftar</button>
              </div>
            </div>
          </div>
        </header>
    <!--input-->
        <form name=""  action="Get.php" method="get"> 
         
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <h3> <b> Pendaftaran Keluarga Nelayan sejahtera :</b></h3>
              </div>

              
              
              <div class="form-check mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label> 
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama" name="nama">
                <div class="invalid-feedback">
                Please enter a message in the textarea.
                </div>
              </div>
              <div class=" form-check mb-3">
                <label for="exampleFormControlInput1" class="form-label">Umur</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="18" name="umur">
              </div>
              <div class="form-check mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="cowok">
                laki-laki
                </div>
                <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="cewek" checked>
                perempuan
                </div></div>
              <div class="form-check mb-3">
                <label for="exampleFormControlInput1" class="form-label">alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat">
              </div>
              <div class="form-check mb-3">
                <label for="exampleFormControlInput1" class="form-label">Penghasilan</label>
                <select class="form-select" id="inputGroupSelect03" name="penghasilan">
                <option selected>- </option>
                <option value="0 - 500.000">0 - 500.000</option>
                <option value="500.000 - 2.000.000">500.000 - 2.000.000</option>
                <option value="2.000.000 - lebih">2.000.000 - lebih</option>
                </select>
              </div>
              <div class="form-check mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keluh Kesah</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
              </div>
              <div class="form-check mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">foto 3x4</label>
                <input type="file" class="form-control" aria-label="file example" required name="foto">
             </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit" value="simpan" name="tombol">daftar</button>
            </div>
            </div></div>
        
       
        </form>
        <!--copyright-->
        <footer class="container mt-5"><hr>
            <p>&copy; 2021 Roni Rusmana (2009226) &middot;</p>
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>