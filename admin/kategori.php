<?php
    require "session.php";
    require "../koneksi.php";

    $querykategori = mysqli_query($con,"SELECT * FROM kategori");
    $jumlahkategori = mysqli_num_rows($querykategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kategori</title>
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
                        <i class=""></i>kategori
                    </li>
                </ol>
            </nav>

            <div class="my-3 col-12 col-md-6">
                <h4>Tambah Kategori</h4>

                <form action="" method="post">
                    <div>
                        <label for="kategori">kategori</label>
                        <input type="text" id="kategori" name="kategori" placeholder="Input nama kategori" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" name="simpan_kategori">Simpan</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['kategori'])){
                        $kategori = htmlspecialchars($_POST['kategori']);
                    
                    $queryExist = mysqli_query($con, "SELECT nama FROM kategori WHERE nama='$kategori'");
                    $JumlahDataKategoriBaru = mysqli_num_rows($queryExist);

                    if($JumlahDataKategoriBaru > 0){
                        ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Kategori sudah tersedia
                        </div>
                        <?php
                    }
                    else{
                        $querySimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES ('$kategori')");

                        if($querySimpan){
                            ?>
                            <div class="alert alert-primary mt-3" role="alert">
                            Berhasil
                            </div>

                            <meta http-equiv="refresh" content="1; url=kategori.php" />
                            <?php
                        }
                        else{
                            echo mysqli_error($con);
                        }
                    }
                    }
                ?>
            </div>

            <div class="mt-3">
                <h2>List Kategori</h2>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                                while($data=mysqli_fetch_array($querykategori)){
                                    if($jumlahkategori==0){
                            ?>
                                    <tr>
                                        <td colspan=3 class="text-center">Tidak ada kategori</td>
                                    </tr>
                            <?php            
                                    }
                                    else{
                            ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td>
                                                <a href="kategori-detail.php?e=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-search"></i></a> 
                                            </td>
                                        </tr>
                            <?php
                                    }
                                    $number++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>