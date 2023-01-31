<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ $judul }}</title>
</head>

<body>
    <nav class="nav_view navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo Gas.png') }}" style="width: 40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentanggas">Tentang GAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#daftar">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Karir">Karir</a>
                    </li>
                    <li class="nav-item bg-primary nav-mitra">
                        <a class="nav-link text-light" href="#mitra">Masuk Mitra</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content" style="overflow: hidden">
        <div class="beranda" id="beranda">
            <div class="row">
                <div class="col-sm-6 p-5 bagian-kiri">
                    <h1>Bergabung dengan GAS</h1>
                    <p>Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Daftarkan tokomu dan
                        nikmati keuntungan bersama GAS!</p>
                    <button class="tombol-biru">Unduh Sekarang !</button>
                </div>
                <div class="col-sm-6 bagian-kanan">
                    <img src="img/gambar1.png" style="width:500px;">
                </div>
            </div>
        </div>
        <div class="tentanggas" id="tentanggas">
            <div class="row">
                <div class="col-sm-6 p-5 bagian-kiri">
                    <h3>GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Melalui
                        gerakan #AyoBelanjaTokoTetangga GAS mengajak untuk menjelajah dan mendukung usaha-usaha di
                        sekitarmu.</h3>
                </div>
                <div class="col-sm-6 bagian-kanan">
                    <img src="img/gambar1.png" style="width:500px;">
                </div>
            </div>
        </div>
        <div class="fitur" id="fitur">
            <div class="row">
                <div class="col-sm-6 p-5 bagian-kiri">
                    <h3>Ayo Nikmati Beragam Fitur GAS dan Kembangkan Usahamu Jadi Toko Online</h3>
                </div>
                <div class="col-sm-6 bagian-kanan">
                    <img src="img/gambar1.png" style="width:500px;">
                </div>
            </div>
        </div>
        <div class="daftar" id="daftar">
            <div class="row text-center">
                <h3>Apa pun jenis tokomu bisa bergabung bersama GAS</h3>
                <div class="video-daftar">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VxVWACx9NIY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="karir" id="karir">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h3>Temukan Karier Impianmu</h3>
                    <p>Mari bergabung bersama kami. Jadilah bagian dari kami dan kembangkan bakat, kreatifmu di GAS</p>
                </div>
                <div class="col-sm-4">
                    <div class="content-karir d-flex">
                        <img src="{{ asset('img/karir1.png') }}" style="max-height: 86px">
                        <div class="row text-karir">
                            <h6>Marketing Communication</h6>
                            <p>Merancang strategi komunikasi pemasaran mulai dari branding, iklan dan pemasaran
                                langsung.
                            </p>
                        </div>
                    </div>
                    <div class="content-karir d-flex">
                        <img src="{{ asset('img/karir3.png') }}" style="max-height: 86px">
                        <div class="row text-karir">
                            <h6>Customer Service</h6>
                            <p>Menjawab telepon, menanggapi pelanggan melalui email, dan memberikan informasi terkait
                                layanan.
                            </p>
                        </div>
                    </div>
                    {{-- <button class="tombol-biru">Selengkapnya</button> --}}
                    <div class="content-karir d-flex">
                        <img src="{{ asset('img/karir5.png') }}" style="max-height: 86px">
                        <div class="row text-karir">
                            <h6>Administration</h6>
                            <p>Membuat arsip data perusahaan, mengatur agenda kantor, dan menyusun laporan keuangan
                                perusahaan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-karir d-flex">
                        <img src="{{ asset('img/karir2.png') }}" style="max-height: 86px">
                        <div class="row text-karir">
                            <h6>Content Writer</h6>
                            <p>Membuat dan mengelola konten web atau artikel yang dapat membangun branding perusahaan.
                            </p>
                        </div>
                    </div>
                    <div class="content-karir d-flex">
                        <img src="{{ asset('img/karir4.png') }}" style="max-height: 86px">
                        <div class="row text-karir">
                            <h6>IOS Developer</h6>
                            <p>Pengalaman mengembangkan aplikasi IOS (minimal 4 aplikasi dipublikasikan). Akrab dengan
                                platform Swift atau Hybrid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="logo">
                    <img src="{{ asset('/img/logo Gas.png') }}" style="max-height: 100px">
                </div>
                <div class="tentang-footer">
                    <h6 class="fw-bold">Tentang GAS</h6>
                    <a href="#">Terms and Conditions</a>
                    <a href="#">Privacy</a>
                </div>
                <div class="hubungi-kami">
                    <h6 class="fw-bold">Hubungi Kami</h6>
                    <a href="#">Kritik dan Saran</a>
                </div>
                <div class="ikuti-kami">
                    <h6 class="fw-bold">Ikuti Kami</h6>
                    <a href=""><img src="{{ asset('img/facebook.png') }}" style="max-width: 40px;"></a>
                    <a href=""><img src="{{ asset('img/instagram.png') }}" style="max-width: 40px;"></a>
                    <a href=""><img src="{{ asset('img/youtube.png') }}" style="max-width: 40px;"></a>
                </div>
                <div class="Unduh">
                    <h6 class="fw-bold">Unduh</h6>
                    <a href=""><img src="{{ asset('img/playstore.png') }}" style="max-height: 60px;"></a>
                    <a href=""><img src="{{ asset('img/appstore.png') }}" style="max-height: 60px;"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
