<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <h3>Tampil produk</h3>

    <table class="table table-hover table-striped">

        <thead>

            <tr>

                <th>ID Produk</th><th>NAMA Produk</th><th>deskripsi</th>

    <th>harga</th>  <th>foto produk</th> <th>AKSI</th>

    
            </tr>

        </thead>

        <tbody>

            <?php 

            include "koneksitoko.php";

$qry_petugas=mysqli_query($conn,"select * from produk ");

            $no=0;

            while($data_petugas=mysqli_fetch_array($qry_petugas)){

            $no++;?>

<tr>              <td><?=$data_petugas['id_produk']?></td> <td><?=$data_petugas['nama_produk']?></td> <td><?=$data_petugas['deskripsi']?></td><td><?=$data_petugas['harga']?></td> <td><?=$data_petugas['foto_produk']?></td> <td><a href="ubah_produk.php?id_produk=<?=$data_petugas['id_produk']?>" class="btn btn-success">Ubah</a> | <a href="hapus_produk.php?id_produk=<?=$data_petugas['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>


            </tr>

            <?php 

            }

            ?>

        </tbody>

    </table>
    <a href="tambah_produk.php??>" class="btn btn-primary">tambah produk</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>