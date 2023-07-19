<?php
    require "koneksi.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryproduk = mysqli_query($con, "SELECT * FROM produk WHERE nama = '$nama'");
    $produk = mysqli_fetch_array($queryproduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahra Petshop | Detail Produk</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- Detail produk -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="image/<?php echo $produk['foto']; ?>" class="w-100" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h1><?php echo $produk['nama']; ?></h1>
                    <p class="fs-5"><?php echo $produk['detail']; ?></p>
                    <p class="fs-5 text-warning">Rp. <?php echo $produk['harga']; ?></p>
                    <p class="fs-5">Ketersediaan : <strong><?php echo $produk['ketersediaan_stok']; ?></strong></p>
                    <a href="https://wa.me/085329072937" class="btn warna3 text-white">Pesan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid warna1 py-5 text-light">
        <div class="container text-center">
            <h4 class="text-white">Temui Kami</h4>
            <div class="row justify-content-center">
                <div class="col-4 col-sm-2 mt-2 mb-2">
                    <a href="https://facebook.com" class="text-light"><i class="fab fa-facebook fs-4"></i></a>
                </div>
                <div class="col-4 col-sm-2 mt-2 mb-2">
                    <a href="https://whatsapp.com" class="text-light"><i class="fab fa-whatsapp fs-4"></i></a>
                </div>
                <div class="col-4 col-sm-2 mt-2 mb-2">
                    <a href="https://instagram.com" class="text-light"><i class="fab fa-instagram fs-4"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-3 bg-dark text-light">
        <div class="container d-flex justify-content-between">
                <label>&copy; 2023 Zahra Petshop</label>
                <label>Created by Avonirt</label>
        </div>
    </div>
    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
