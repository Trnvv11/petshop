<?php
    require "session.php";
    require "../koneksi.php";

    $querykategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahkategori = mysqli_num_rows($querykategori);
    echo $jumlahkategori;
?>
<html lang-"en">
    <head> 
        <meta charset-"UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Home </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Link Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori{
        background-color: #1E90FF;
        border-radius: 15px;
    }
    .summary-produk{
        background-color: #00BFFF;
        border-radius: 15px;
    }
    .no-decoretion
        text-decoretion: none;
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-home"></i>Home</li>
            </ol>
        </nav>
    <h2> Halo Admin</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="summary-kategori p-3">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-align-justify fa-7x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h3 class="fs-2"> Kategori </h3>
                        <p class="fs-4"> 4 Kategori" </p>
                        <p><a href="kategori.php" class="text-white no-decoretion"> Lihat Detail </a></p>
                    </div>
                </div>
                </div>            
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="summary-produk p-3">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-box fa-7x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h3 class="fs-2"> Produk </h3>
                        <p class="fs-4"> 20 Produk" </p>
                        <p><a href="produk.php" class="text-white no-decoretion"> Lihat Detail </a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
