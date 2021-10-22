<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .container {
        max-width: 2000px;
        margin-top: 20px;
      }
    </style>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container">
        <!-- CARD -->
    <div class="card">
  <div class="card-header bg-secondary text-white">
    Perpustakaan SMIT Al Marjan
  </div>
  <div class="card-body">
    <!--TEKS PENCARIAN-->
    <form action="" method="get">
  <div class="input-group mb-3">
    <form action="" method="get">
  <input type="text" class="form-control" placeholder="cari data buku" aria-label="Cari data buku" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">cari</button>
</div>
</form>
<!-- MODAL -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data Buku
</button>

<!-- Isi Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Identitas Buku Perpustakaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- INPUT DATA BUKU -->
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
  <input type="number" class="form-control" id="InputKodeBuku" placeholder="">
</div>
<div class="mb-3">
  <label for="InputJudulBuku" class="form-label">Judul Buku</label>
  <input type="text" class="form-control" id="InputJudulBuku" placeholder="">
</div>
<div class="mb-3">
  <label for="InputKategoriBuku" class="form-label">Kategori Buku</label>
  <input type="text" class="form-control" id="InputKategoriBuku" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
  <input type="text" class="form-control" id="InputPengarang" placeholder="">
</div>
<div class="mb-3">
  <label for="InputPenerbit" class="form-label">Penerbit</label>
  <input type="text" class="form-control" id="InputPenerbit" placeholder="">
</div>
<div class="mb-3">
  <label for="InputTahunTerbit" class="form-label">Tahun Terbit</label>
  <input type="number" class="form-control" id="InputTahunTerbit" placeholder="">
</div>
<div class="mb-3">
  <label for="InputJumlahHalaman" class="form-label">Jumlah Halaman</label>
  <input type="number" class="form-control" id="InputJumlahHalaman" placeholder="">
</div>
<div class="mb-3">
  <label for="InputJumlahEksemplar" class="form-label">Jumlah Eksemplar</label>
  <input type="number" class="form-control" id="InputJumlahEksemplar" placeholder="">
</div>
<div class="mb-3">
  <label for="InputNomorISBN" class="form-label">Nomor ISBN</label>
  <input type="number" class="form-control" id="InputNomorISBN" placeholder="">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="tomboltambahdata"> Tambah</button>
      </div>
    </div>
  </div>
</div>
<table class="table table-sm">
  <thead>
  <tr>
    <th>Kode Buku</th>
    <th>Judul Buku</th>
    <th>Kategori Buku</th>
    <th>Pengarang</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Tahun Terbit</th>
    <th>Jumlah Halaman</th>
    <th>Jumlah Eksemplar</th>
    <th>Nomor ISBN</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>001001</td>
      <td>IPA Kelas VII</td>
      <td>Pendidikan</td>
      <td>Asep Suryatna, Enjah Takari</td>
      <td>Pusat Perbukuan Deartemen Pend. Nasional</td>
      <td>2008</td>
      <td></td>
      <td></td>
      <td></td>
      <td>1234567891011</td>
      <td>
      <button type="button" class="btn btn-warning btn-sm">ubah</button>
      <button type="button" class="btn btn-danger btn-sm">hapus</button>
      </td>
    </tr>
  </tbody>
</table>
</div>   
</div>
    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

     <script>
       $('#tomboltambahdata').on('click', function() {
          var Kode Buku = $('#InputKodeBuku') val();
          var Judul Buku = $('InputJudulBuku') val();
          var Kategori Buku = $('InputKategoriBuku') val();
          var Pengarang = $('InputPengarang') val();
          var Penerbit = $('InputPenerbit') val();
          var Tahun Terbit = $('InputTahunTerbit') val();
          var Jumlah Halaman = $('InputJumlahHalaman') val();
          var Jumlah Eksemplar = $('InputJumlahEksemplar') val();
          var Nomor ISBN = $('InputNomorISBN') val();

          $.ajax({
            url:"<?php echo site_url("Buku/Tambah") ?>"
            type: "POST",
            success:function(hasil){
              alert(hasil);
            }

          });  
          });
     </script>
</body>

</html>