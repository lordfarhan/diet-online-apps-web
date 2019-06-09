<html>
{{-- 
Note :
Tambah animasi buat pilihan paket, pas diklik langsung tau descripsinya
Tambah scrolling animasi 
--}}

<head>
    <title>DION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"
        integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{asset('css/home-style.css')}}">
</head>
{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" id="fixednav">
    <a class="navbar-brand" href="#"><img src="{{asset('img/website/logo.png')}}" height="40px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="#showcase">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#description">Tentang DION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tentukan-paket">Pilih Paketmu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tim-kami">Tim Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
            </li>
        </ul>
    </div>
</nav>


<body data-spy="scroll" data-target="#navbar" data-offset="350">
    <section id="showcase">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-4" id="gambar-showcase">
                    <img src="{{asset('img/website/show.png')}}" class="showcase-img img-fluid">
                </div>

                <div class="col-lg-4" id="isi">
                    <img src="{{asset('img/website/bullet.png')}}" class="img-fluid" id="logo-circle"><br>
                    <span class="highlight">
                        <h1>DIET ONLINE</h1>
                    </span>
                    <span class="highlight text-nowrap">
                        <h4>Solusi Obesitas dan Diet Zaman Now</h4>
                    </span>
                    <h6 class="text-nowrap">Mulai paket dietmu sekarang secara online melalui aplikasi DION</h6>
                    <a href="#" class="btn bg-dark">
                        <table style="border:0px;color:white;">
                            <tr>
                                <th rowspan="2"><i class="fab fa-google-play" style="font-size:28px;"></i></th>
                                <td><span style="font-size:14px;">Get it On</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size:18px;">Google Play Store</span></td>
                            </tr>
                        </table>
                    </a>
                </div>
            </div>
        </div>
        <div id="art-showcase">
        </div>
        {{-- Gambar --}}
    </section>

    <section id="description">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5">
                    <iframe src="https://youtu.be/qir67U2_UsA?list=PLK2o01EsuMU9RsAgCO07RBYOHZzdo2rtY"></iframe>
                </div>
                <div class="col-lg-5">
                    <h3><span class="highlight">Tentang DION</span></h3><br>
                    <h6>DION merupakan layanan katering online yang menyediakan makanan sehat sesuai dengan kebutuhan
                        kamu. Tanpa harus mengunjungi ahli gizi, kamu dapat memesan makanan sesuai dengan keperluan
                        dietmu.</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="tentukan-paket">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-8">
                    <h3><span class="highlight">Pilih dari 4 Paket Berbeda</span></h3>
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('img/website/harian.png')}}" class="foto-menu shadow">
                        </div>
                        <div class="col">
                            <img src="{{asset('img/website/khusus.png')}}" class="foto-menu shadow-sm">
                        </div>
                        <div class="col">
                            <img src="{{asset('img/website/mayo.png')}}" class="foto-menu shadow-sm">
                        </div>
                        <div class="col">
                            <img src="{{asset('img/website/lunch.png')}}" class="foto-menu shadow-sm">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">Ikuti survei singkat untuk menentukan
                        paket yang cocok buat kamu
                    </div>
                    <br>
                    <a href="#" class="btn btn-warning">Pilih Paket yang Sesuai</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="mitra">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5">
                    <img>
                </div>
                <div class="col-lg-5">
                    <h3><span class="highlight">Mitra Kami</span></h3><br>
                    <h4><span class="highlight">DIETINDO</span></h4><br>
                    <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia aliquam perspiciatis, dolorum
                        quos pariatur cumque itaque incidunt culpa minima fuga eum, optio, minus aliquid doloribus sit
                        autem. Voluptatibus, quaerat illo.</h6>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="tim-kami">
        <div class="container">
            <h1><span class="highlight">Tim Kami</span></h1>
            <div class="row justify-content-around d-flex">
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/website/Akbar.png')}}" class="foto img-fluid"><br>
                    <h4>Akbar Satya Nugraha</h4>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/website/Ical.png')}}" class="foto img-fluid"><br>
                    <h4>Faisal Mohammad Rifqi Aqil</h4>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/website/Farhan.png')}}" class="foto img-fluid"><br>
                    <h4>Muhammad Farhan Abdur Rosyid</h4>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/website/Melina.png')}}" class="foto img-fluid"><br>
                    <h4>Melina Suhartono</h4>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/website/Ayu.png')}}" class="foto img-fluid"><br>
                    <h4>Ayu Lestari</h4>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/website/Bu-Inggita.png')}}" class="foto img-fluid"><br>
                    <h4>Inggita Kusumastuty, S.Gz, M.Biomed.</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="hubungi-kami">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5" id="hubungi">
                    <div class="form">
                        <form>
                            <h3><span class="highlight" style="color:black">Hubungi Kami</span></h3>
                            <br><br>
                            <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap"> <br>
                            <input type="email" name="email" class="form-control" placeholder="Email Anda"> <br>
                            <input type="text" name="pesan" class="form-control" placeholder="Pesan atau Pertanyaan">
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary"> <br>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h4><span class="highlight">Mitra DION</span></h4><br>
                    <p>DION merupakan wadah bagi mitra katering sehat untuk menyalurkan paket mereka. Penyedia makanan
                        dari DION yang pertama adalah PT.DIETINDO. Sementara ini, DION hanya dapat beroperasi di Kota
                        Malang.<br>
                        Untuk Info lebih lanjut mengenai DIETINDO dapat mengunjungi:
                    </p><br>
                    <img><a href="http://www.dietindo.com/">http://www.dietindo.com/</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <span class="footer-logo"><i class="fab fa-facebook"></i></span>
            <span class="footer-logo"><i class="fab fa-twitter"></i></span>
            <span class="footer-logo"><i class="fab fa-youtube"></i></span>
            <span class="footer-logo"><i class="fab fa-instagram"></i></span>
            <span class="footer-text">&copy; 2019 DION - Diet Online</span>
            <span class="footer-text">Solusi Diet & Obesitas Zaman Now</span>
        </div>
    </footer>
</body>
{{-- Scrolling Animation --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- Scrollspy --}}
<script src="{{asset('js/vanillajs-scrollspy.js')}}"></script>
<script>
    const navbar = document.querySelector('#fixednav');
    const scrollspy = new VanillaScrollspy(navbar);
    scrollspy.init();

</script>

</html>

{{-- Source Sans Pro --}}
{{-- Roboto Thin--}}