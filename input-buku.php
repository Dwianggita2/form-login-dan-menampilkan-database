<!doctype html>
<html>
<head>
        <tittle><center>ISIKAN DATA DI BAWAH INI</tittle></center>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input-buku.php" method="post">
                        <div class="form-group">
                <label for="nim"><b>Id Buku</b></label>
                <Input type="text" name="id_buku" class="form-control">
            </div>
            <div class="form-group">
                <label for="nim"><b>Kode Buku </b></label>
                <Input type="text" name="kode_buku" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Judul Buku</b></label>
                <Input type="text" name="judul_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Penulis Buku</b></label>
                <Input type="text" name="penulis_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Penerbit Buku</b></label>
                <Input type="text" name="penerbit_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Tahun Penerbit</b></label>
                <Input type="date" name="tahun_penerbit"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Stok</b></label>
                <Input type="text" name="stok"class="form-control">
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
          
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>