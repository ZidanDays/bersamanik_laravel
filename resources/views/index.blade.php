<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BersamaNik</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrapp.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="assets/style62.css">
    <link rel="stylesheet" href="assets/navbarr.css">

    <link rel="stylesheet" href="assets/loader.css">
    <link rel="stylesheet" href="assets/testimonial4.css">

    <!-- Load jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Link Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- POPPER -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <!-- OWL -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
    </script>



    <!-- Tambahkan di bagian head -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">


</head>

<body>

    <!-- <div id="loading-screen">
        <img src="assets/img/logo/logonik.png" alt="Loading Image">
    </div>
    <script>
        $(window).on('load', function() {
            $('#loading-screen').delay(1000).fadeOut('slow');
        });

    $('a').click(function() {
        var href = $(this).attr('href');
        if (href !== undefined && href.indexOf('#') !== 0) {
            $('#loading-screen').fadeIn('fast');
        }
    });
    </script> -->

    <div class="navbar-navbar" id="navbar">
        <div class="logo-nav">
            <img src="assets/img/logo/logonik.png" alt="Logo" width="250">
        </div>
        <div class="menu">
            <button class="red-btn">Gabung</button>
            <button class="blue-btn">Donasi</button>
            <div class="menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars icon-nav"></i>
            </div>
        </div>
    </div>

    <div class="mobile-menu-overlay" onclick="closeMenu()"></div>
    <div class="mobile-menu">
        <a href="#beranda">Beranda</a>
        <a href="#biodata">Biodata</a>
    </div>





    <!-- END NAVBAR -->

    <?php
    // include 'link.php';
    ?>

    {{-- test beranda --}}

    <!-- Konten -->

<div class="container-fluid content-wrapper" style="z-index: 0;">
    <img src="assets/img/beranda/manikterbaru.png" alt="Deskripsi Gambar" class="background-image-atas">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center text-center tinggi">
            <button class="btn btn-primary btn-profile-gue">Lihat Profile Gue <i class="fa-solid fa-angle-right kanan"></i></button>
        </div>
        <div class="col-md-6 text-white d-flex flex-column justify-content-center tinggi2">
            <h1 class="batas">“Penting bagi kita pemuda untuk muncul dalam kursi parlemen demi menciptakan
                ekosistem politik yang
                baik.”
            </h1>
            <p class="tagp">MANIK MARGANAMAHENDRA <br> CALEG DPRD DKI JAKARTA</p>
            <!-- Icon Media Sosial -->
            <div class="social-icons">
                <a href="https://youtube.com/@ManikMarganamahendraOfficial?si=IsQhkLjpfaSl46UN" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.facebook.com/manik.marganamahendra?mibextid=LQQJ4d"><i class="fa-brands fa-facebook" target="_blank"></i></a>
                <a href="https://www.instagram.com/marganamahendra/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/manikmarganam/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.tiktok.com/@margana.mahendra?_t=8hR7OQeqB7A&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            </div>

        </div>
    </div>
</div>

<!--konten-->
<div class="background">
    <!-- merah -->
    <div class="container-fluid-biru1">
        <div class="container">
            <div class="row">
                <!-- Bagian  (Teks) -->
                <div class="col-md-8 mt-3 mb-5" data-aos="fade-up" data-aos-duration="800">
                    <pc class="menu-merah">Siapa Sih <br>
                        Manik Marganamahendra?</pc>
                    <p class="link-merah atas"><a href=""> Nih Jawabannya!! ></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end merah -->
    <!-- biru -->
    <div class="container-fluid-biru2">
        <div class="container">
            <div class="row">
                <!-- Bagian (Teks) -->
                <div class="mt-3 mb-5 text-right" data-aos="fade-up" data-aos-duration="800" style="direction: rtl;">
                    <pc class="menu-merah">? Apa Aja Sih Program Andalan Manik</pc>
                    <p class="link-merah"><a href="">!!Nih Jawabannya > </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end biru -->
    <!-- merah -->
    <div class="container-fluid-biru1">
        <div class="container mb-lg-5">
            <h3 class="sub-menu-program text-center mt-4">Program Unggulan</h3>
            <div class="row mb-5">
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Sembako Murah</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"> <a href="">Pelatihan Ketenagakerjaan</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Pendampingan Bisnis</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Serap Aspirasi</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Gerak Bareng Manik</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Debatin Manik</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Diskusi Edukasi</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Melek Politik Bareng Manik</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Senam Sehat</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Jaga Lingkungan</a></p>
                </div>
                <div class="col-md-4 text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                    <p class="menu-program"><a href="">Cek Kesehatan Gratis</a></p>
                </div>
            </div>
        </div>
        <!-- end merah -->
    </div>
</div>

<!-- konten -->

<!-- Isu Strategis -->
<div class="container-fluid-biru3">
    <div class="container">
        <div class="row">
            <div class="mt-5 mb-5 text-center" data-aos="fade-up" data-aos-duration="800">
                <h1 class="sub-isu">Isu Strategis</h1>
            </div>
        </div>
    </div>
    <div class="row menu-isu">
        <!-- Bagian Kiri (Teks) -->
        <div class="col-md-6 mt-4" data-aos="fade-up" data-aos-duration="800">
            <p class="menu-isu-kiri isu"><a href=""> Kesejahteraan dan
                    Kesehatan Publik</a></p>
        </div>
        <!-- Bagian Kanan (Teks dan Button) -->
        <div class="col-md-6 mt-4  " data-aos="fade-up" data-aos-duration="800">
            <p class="menu-isu-kanan isu"><a href="">Keadaan Iklim</a></p>
        </div>
        <div class="col-md-6 mt-4 " data-aos="fade-up" data-aos-duration="800">
            <p class="menu-isu-kanan isu"><a href="">Good
                    Governance</a></p>
        </div>
        <!-- Bagian Kanan (Teks dan Button) -->
        <div class="col-md-6 mt-4 " data-aos="fade-up" data-aos-duration="800">
            <p class="menu-isu-kiri isu"><a href="">Meaningful Youth
                    Participation</a></p>
        </div>
    </div>
</div>

<!-- end Isu Strategis -->
<style>
    .background {
        position: relative;
    }

    .background::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('assets/img/11.png');
        /* Ganti dengan path gambar latar belakang Anda */
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        /* Sesuaikan tingkat transparansi sesuai kebutuhan */
    }
</style>



<!-- Testimonial Section -->
<div class="demo">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 mt-5 text-center">
                    <h6>Artikel</h6>
                    <h2>Berita Terkait</h2>
                </div>
                <div class="galery-line-biru"></div>
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial mt-2">
                        <div class="testimonial-content text-center">
                            <img src="assets/img/foto/2.png" class="img-fluid mb-3" alt="User Image" width="300">
                            <p class="description text-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                            <a href="#" class="read-more" style="text-align: left;">
                                Lihat Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="testimonial mt-2">
                        <div class="testimonial-content text-center">
                            <img src="assets/img/foto/2.png" class="img-fluid mb-3" alt="User Image" width="300">
                            <p class="description text-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                            <a href="#" class="read-more" style="text-align: left;">
                                Lihat Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="testimonial mt-2">
                        <div class="testimonial-content text-center">
                            <img src="assets/img/foto/2.png" class="img-fluid mb-3" alt="User Image" width="300">
                            <p class="description text-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                            <a href="#" class="read-more" style="text-align: left;">
                                Lihat Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="testimonial mt-2">
                        <div class="testimonial-content text-center">
                            <img src="assets/img/foto/2.png" class="img-fluid mb-3" alt="User Image" width="300">
                            <p class="description text-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                            <a href="#" class="read-more" style="text-align: left;">
                                Lihat Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <<<<<<< HEAD=======>>>>>>> 5c9cc0a4aadc63a485f8da9f9a7d0afa063601d7
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Section -->




<!-- Konten Keempat -->
<div class="container-fluid-merah">
    <div class="container">
        <div class="row">
            <!-- Bagian Kiri (Teks) -->
            <div class="col-md-8 mt-5 mb-5" data-aos="fade-up" data-aos-duration="800">
                <h1 class="berkembang" style="font-weight: bold;">Berkembang Bersama <br>
                    Menuju Hal Yang Lebih Baik</h1>

            </div>
            <!-- Bagian Kanan (Teks dan Button) -->
            <div class="col-md-4 mt-5 mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="text-center mt-4">
                    <a href="?q=kontak" class="btn btn-primary btn-berkembang">Lapornik</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial-slider">
    <div id="carouselExampleControls" class="carousel carousel-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-title menu-tanggapan">
                        <i class="fa-solid fa-quote-left display-1"></i>
                        <h2 class="fw-bold display-6 ">Apa Kata <span style="color: var(--main-color);">Mereka</span>
                            <br>Terhadap <span style="color: var(--second-color);">Manik</span>
                        </h2>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col-md-8">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-2-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-3-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-4-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-5-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-6-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 6</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var multipleCardCarousel = document.querySelector("#carouselExampleControls");

    if (window.matchMedia("(min-width: 576px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false
        });
        var carouselWidth = $(".carousel-inner")[0].scrollWidth;
        var cardWidth = $(".carousel-item").width();
        var scrollPosition = 0;
        $("#carouselExampleControls .carousel-control-next").on("click", function() {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
                scrollPosition += cardWidth;
                $("#carouselExampleControls .carousel-inner").animate({
                        scrollLeft: scrollPosition
                    },
                    600
                );
            }
        });
        $("#carouselExampleControls .carousel-control-prev").on("click", function() {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                $("#carouselExampleControls .carousel-inner").animate({
                        scrollLeft: scrollPosition
                    },
                    600
                );
            }
        });
    } else {
        $(multipleCardCarousel).addClass("slide");
    }
</script>

<!-- Konten Keempat -->
<div class="container-fluid-biru">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-center mb-5" style="font-weight: bold;">Media Center</h2>

                <!-- Video Sejajar -->
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="video-container rounded">
                            <!-- Video Pertama -->
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <h4 class="mt-3">Judul Video 1</h4>
                        <p>Tanggal Upload 1</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="video-container rounded">
                            <!-- Video Kedua -->
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID2" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <h4 class="mt-3">Judul Video 2</h4>
                        <p>Tanggal Upload 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="container-fluid mt-5 mb-5">
    <div class="container">
        <div class="row">

            <!-- Bagian Kiri (Teks) -->
            <div class="col-md-6 mt-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="800">
                <h1 class="animate__animated animate__fadeInRight sub-bio" style="font-weight: bold;">Fakta
                    Tentang Jakarta</h1>
                <div class="galery-line-bio " data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="800">
                </div>
                <p class="mt-4 animate__animated animate__fadeInRight limited-width konten-bio" style="text-align: justify;">
                    Jakarta berada dalam urutan ke 74 dalam Global Cities Index ranking yang dirilis
                    oleh KEARNEY pada
                    tahun 2022. Jakarta berada di bawah Singapura, Bangkok dan Kuala Lumpur yang
                    memiliki nilai lebih
                    tinggi pada aspek: aktivitas bisnis, sumber daya manusia, pertukaran informasi,
                    pengalaman
                    kebudayaan dan keterlibatan politik.
                </p>
                <p class="mt-4 animate__animated animate__fadeInRight limited-width konten-bio" style="text-align: justify;">
                    Ketimpangan ekonomi di daerah perkotaan cenderung melebar. Belum lagi kasus
                    kesehatan seperti ISPA
                    yang sempat naik sangat tinggi di Jakarta, dari 50.000 kasus saat pandemi menjadi
                    200.000 kasus per
                    Agustus 2023. Hal ini menunjukkan potensi kerentanan penduduk pada sektor ekonomi
                    dan kesehatan.
                </p>
                <p class="mt-4 animate__animated animate__fadeInRight limited-width konten-bio" style="text-align: justify;">
                    Upaya membangun Global City tentu juga harus dimulai dengan mewujudkan
                    kesejahteraan, kesehatan
                    masyarakat dan kelestarian lingkungan di level yang lebih baik agar sumber daya
                    manusianya semakin
                    unggul dan aspek bisnis hingga politik dapat ditingkatkan kualitasnya.
                </p>
                <div class="d-flex justify-content-start align-items-center mt-4">
                    <a href="#" class="btn btn-primary btn-fakta" style="width: 100%;">Masih Kurang Percaya??
                    </a>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <a href="#" class="btn btn-danger btn-fakta" style="width: 45%;">Lihat Selengkapnya</a>
                    <a href="" class="btn btn-danger btn-fakta" style="width: 45%;">Ini Solusinya</a>
                </div>

            </div>

            <!-- Bagian Kanan (Gambar) -->
            <div class="col-md-6 text-center mt-5" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/img/fakta2.png" alt="Your Image 1" class="img-fluid-bio foto_bio" style="border-radius: 20px;">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid-merah">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5" data-aos="fade-up" data-aos-duration="800">
                <h1 class="text-center sub-jargon">Mari Bersamanik Untuk Mewujudkan <br>
                    Jakarta Sebagai Global City</h1>
            </div>
            <div class="col-md-12" data-aos="fade-up" data-aos-duration="800">
                <p class="text-center mb-5 konten-jargon">Dengan dukungan finansial dari masyarakat yang
                    peduli, kita dapat memberikan kontribusi positif untuk memajukan infrastruktur, pendidikan, dan
                    berbagai sektor penting lainnya. Bersama, kita bisa menciptakan sebuah Jakarta yang berdaya saing
                    global, memberikan manfaat jangka panjang bagi seluruh warganya. Ayo, mari bersamanik untuk
                    mewujudkan cita-cita luar biasa ini!</p>
            </div>

            <div class="col-md-12 text-center ">
                <button class="btn btn-primary btn-jargon">Donasi</button>
                <button class="btn btn-light btn-jargon" style="color: blue;">Gabung</button>
            </div>

        </div>
    </div>
</div>


    <!-- Footer -->
    <div class="container garis" data-aos="fade-up" data-aos-duration="600"></div>
    <footer class="footer" id="footer" data-aos="fade-up" data-aos-duration="600">
        <div class="container text-center">
            <img src="assets/img/logo/logonik.png" alt="BersamaNik Logo" class="logo-footer">
            <p class="sub-footer">FOLLOW DULU BIAR MAKIN AKRAB</p>
            <div class="sosmed-icon">
                <a href="https://youtube.com/@ManikMarganamahendraOfficial?si=IsQhkLjpfaSl46UN" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.facebook.com/manik.marganamahendra?mibextid=LQQJ4d"><i class="fa-brands fa-facebook" target="_blank"></i></a>
                <a href="https://www.instagram.com/marganamahendra/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/manikmarganam/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.tiktok.com/@margana.mahendra?_t=8hR7OQeqB7A&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <div class="menu-footer">
                <div class="bawah">
                    <a href="?q=pengalaman" class="foot-link">Tentang Manik</a>
                    <a href="?q=galery" class="foot-link">Media Center</a>
                    <a href="" class="foot-link">News</a>
                    <a href="" class="foot-link">Program Manik</a>
                    <a href="?q=lapornik" class="foot-link">LaporNik</a>
                    <a href="" class="foot-link">Kata Mereka</a>
                    <a href="   " class="foot-link">Kontrak Politik</a>

                </div>
            </div>
        </div>
        <h6 class="copy">Copyright © 2023 • Manik Margamahendra</h6>
    </footer>



    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


    <!-- Tambahkan sebelum tag </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>





    <script src="assets/js/aos.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/jalann.js"></script>
    <script src="assets/js/main5.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/testimonial.js"></script>
    <!-- <script src="assets/js/jquery.mixitup.min.js"></script> -->



    <!-- Tombol Kembali ke Atas -->
    <div class="scroll-to-top">
        <a href="#top" class="scroll-to-top-link">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>



</body>

</html>