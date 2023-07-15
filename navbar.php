<nav class="navbar navbar-expand-lg navbar-dark warna1">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <a href="#" class="navbar-brand">
                <img src="logo.jpg" alt="" width="55" height="40">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link "  href="index.php">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="kategori.php">Kategori</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="produk.php">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000; /* Pastikan z-index lebih tinggi dari elemen lain di halaman */
    }

    body {
        padding-top: 20px;
    }
</style>