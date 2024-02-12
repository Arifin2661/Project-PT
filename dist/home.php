<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <!-- Favicon -->
    <link href="../dairy-website-template/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../dairy-website-template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../dairy-website-template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../dairy-website-template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../dairy-website-template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../dairy-website-template/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include "header.php"; ?>
    <!-- Searcbox -->
    <section id="searchbox">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row text-center mb-3">
                        <div class="col">
                            <h1>PT YONKI MANDIRI GYPSUM</h1>
                        </div>
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- SearcboxEND -->
    <!-- Carousel Start -->
    <br>
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../dairy-website-template/img/product-4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">WELCOME TO GYPSUM MANDIRI</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">GYPSUM MANDIRI adalah pilihan anda</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">4</h1>
                                <small class="fs-5 fw-bold">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="../dairy-website-template/img/service-1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="../dairy-website-template/img/service-2.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="../dairy-website-template/img/service-3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Eksplorasi Toko Buku Kami</h1>
                    <p class="mb-4">Jelajahi koleksi buku kami yang beragam. Kami hadir untuk memberikan pengalaman membaca yang tak terlupakan.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="../dairy-website-template/img/service.png" alt="">
                            <h5 class="mb-3">Layanan yang Profesional</h5>
                            <span>Memberikan layanan yang profesional untuk membantu dan memberikan solusi terbaik untuk kebutuhan baca Anda.</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="../dairy-website-template/img/product.png" alt="">
                            <h5 class="mb-3">Koleksi Buku yang Luas</h5>
                            <span>Temukan beragam genre dan penulis, hadirkan pengalaman membaca yang tak terbatas.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Books</p>
                <h1 class="mb-5">Explore Our Collection of Books</h1>
            </div>
            <div class="row gx-4">

                <?php
                include "../koneksi.php";

                $result = mysqli_query($data, "SELECT * FROM shop");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo $row['gambar_produk']; ?>" alt="<?php echo $row['nama_produk']; ?>">

                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="shop.php"><?php echo $row['nama_produk']; ?></a>
                                <span class="text-primary me-1">Rp. <?php echo number_format($row['harga_produk'], 0, ',', '.'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Lokasi section start -->
    <section id="lokasi" class="lokasi" style="text-align:center ;">
        <h2><span>Lokasi</span> Kami</h2>

        <div class=" alamat">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9263259549243!2d107.01230327464194!3d-6.273418093715344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e0cdcd980b7%3A0x8b0def22d0f3a954!2sFutsal%20AWK!5e0!3m2!1sid!2sid!4v1684331083322!5m2!1sid!2sid" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>

    </section>
    <!-- Lokasi section end -->


    <!-- FOTTER -->

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <a class="navbar-brand" href="https://www.instagram.com/fawwaz9969/">
            <img src="asset/img/instagram.png" alt="Logo" style="width:60px;">
        </a>
        <h5 style=" color: #F8F8FF;">JALAN DOANG JADIAN KAGA</h5>
        <img src="asset/img/logo adams putih.png" alt="Logo" style="width:80px;">
    </div>

    <!-- FOTTER END -->

    <script src="\asset\css/js/bootstrap.bundle.min.js"></script>
</body>

</html>