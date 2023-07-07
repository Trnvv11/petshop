<?php
    require "session.php";
    require "../koneksi.php";

    $query = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($query);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>
        a {
        text-decoration: none;
        }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class= "container mt-5">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="../admin" class= "text-muted">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class=""></i>Produk
                    </li>
                </ol>
            </nav>

            <div class="my-3 col-12 col-md-6">
                <h4>Tambah Kategori</h4>

                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" autocomplete=off required>
                    </div>
                    <div class="mt-2">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control" required>
                            <option value="">-- pilih kategori --</option>
                            <?php
                                while($data=mysqli_fetch_array($queryKategori)){
                            ?>
                                <option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" required>
                    </div>
                    <div class="mt-2">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <div class="mt-2">
                        <label for="detail">Detail</label>
                        <textarea name="detail" id="detail" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mt-2">
                        <label for="ketersediaan_stok">Ketersediaan Stok</label>
                        <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                            <option value="tersedia">Tersedia</option>
                            <option value="habis">Habis</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                </form>
            </div>

            <div class="mt-3">
                <h2>List Produk</h2>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Ketersediaan Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($jumlahProduk==0){
                            ?>
                                <tr>
                                    <td colspan=5 class="text-center">Data produk tidak ada</td>
                                </tr>
                            <?php
                                }
                                else{
                                    $jumlah = 1;
                                    while($data=mysqli_fetch_array($query)){
                            ?>
                                    <tr>
                                        <td><?php echo $jumlah;?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td><?php echo $data['kategori_id'];?></td>
                                        <td><?php echo $data['harga'];?></td>
                                        <td><?php echo $data['ketersediaan_stok'];?></td>
                                    </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                </table>
                </div>
            </div>
    
    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>