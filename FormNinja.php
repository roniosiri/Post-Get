<?php
    //koneksi database
    $server = "localhost";
    $user="root";
    $pass="";
    $database="dblatihan";

    $koneksi= mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    //tombol simpan
    if(isset($_POST['bsimpan']))
    {
        //data diedit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
                //data diedit
                $edit = mysqli_query($koneksi, " UPDATE tmhs set
                            nin = '$_POST[tnin]', 
                            nama = '$_POST[tnama]', 
                            alamat = '$_POST[talamat]', 
                            cakra = '$_POST[tcakra]'
                        WHERE id_ninja = '$_GET[id]'
                        ");
                //jika edit bisa   
                if($edit)
                {
                    echo"<script>
                            alert('Edit data berhasil');
                            document.location='FormNinja.php';
                        </script>";
                }
                else
                {
                    echo"<script>
                            alert('Edit data Gagal kuy');
                            document.location='FormNinja.php';
                        </script>";
                }
        }
        else 
        {
                //data disimpan baru
                $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nin, nama, alamat, cakra)
                VALUES  ('$_POST[tnin]', 
                    '$_POST[tnama]', 
                    '$_POST[talamat]', 
                    '$_POST[tcakra]')
                    ");
                //jika simpan   
                if($simpan)
                {
                    echo"<script>
                            alert('simpan data berhasil');
                            document.location='FormNinja.php';
                        </script>";
                }
                else
                {
                    echo"<script>
                            alert('simpan data Gagal');
                            document.location='FormNinja.php';
                        </script>";
                }
        }


        
    }

    //jika tombol edit/hapus di clik
    if(isset($_GET['hal']))
    {
        //jika edit data
        if($_GET['hal'] == "edit")
        {
            //Tampilkan data yang akan diedit
            $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs WHERE id_ninja = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                $vnin = $data['nin'];
                $vnama = $data['nama'];
                $valamat = $data['alamat'];
                $vcakra = $data['cakra'];
            }
        }
        else if ($_GET['hal'])
        {
            //hapus data
            $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_ninja = '$_GET[id]' ");
            if($hapus){
                echo"<script>
                            alert('Hapus data behasil, horee');
                            document.location='FormNinja.php';
                        </script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Ninja</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
<body>
<div class="container">
    <div class="mb-4 mt-2">
        <h1 class="text-center">Pendaftan Ninja Konaha</h1>
        <h4 class="text-center">isi data dengan benar dattebayo</h4>
    </div>
<!--awal form-->        
    <div class="card mb-3">
        <div class="card-header bg-info text-white">
        <h5> Form Input data ninja </h5>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group mb-2">
                    <label>NIN</label>
                    <input type="text" name="tnin" value="<?=@$vnin?>" class="form-control" 
                    placeholder="Input Nomer Induk Ninja Disini!" required>
                </div>
                <div class="form-group mb-2">
                    <label>Nama</label>
                    <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" 
                    placeholder="Isi Nama anda dengan benar" required>
                </div>
                <div class="form-group mb-2">
                    <label>Alamat</label>
                    <textarea name="talamat" class="form-control" 
                    placeholder="Isi alamat anda dengan benar"><?=@$valamat?></textarea>
                </div>
                <div class="form-group mb-5">
                    <label>jenis cakra</label>
                    <select  name="tcakra" class="form-control">
                        <option value="<?=@$vcakra?>"><?=@$vcakra?></option>
                        <option value="Air">Air</option>
                        <option value="Api">Api</option>
                        <option value="Bumi">Bumi</option>
                        <option value="Petir">Petir</option>
                        <option value="Angin">Angin</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
            </form>
        </div>
    </div>
<!--akhir form-->

<!--awal tabel-->        
<div class="card">
        <div class="card-header bg-secondary text-white">
        <h5> Daftar Ninja </h5>
        </div>
        <div class="card-body">
           <table class="table table-borderless table-striped">
               <tr>
                   <th>No.</th>
                   <th>NIN</th>
                   <th>Nama</th>
                   <th>Alamat</th>
                   <th>Cakra</th>
                   <th>Aksi</th>
               </tr>
               <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_ninja desc");
                while($data = mysqli_fetch_array($tampil)) :
               ?>
               <tr>
                   <td><?=$no++;?></td>
                   <td><?=$data['nin']?></td>
                   <td><?=$data['nama']?></td>
                   <td><?=$data['alamat']?></td>
                   <td><?=$data['cakra']?></td>
                   <td>
                       <a href="FormNinja.php?hal=edit&id=<?=$data['id_ninja']?>" class="btn btn-warning">Edit</a>
                       <a href="FormNinja.php?hal=hapus&id=<?=$data['id_ninja']?>" 
                       onclick="return confirm('yakin nih mau dihapus?')" class="btn btn-danger">Hapus</a>
                   </td>
               </tr>
               <?php endwhile;?>
           </table> 

        </div>
    </div>
<!--akhir tabel-->

</div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>