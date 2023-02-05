<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            <nav class="navbar shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{url('/images/logo-ole-affiliate.svg')}}" alt="KONGSI OLE777"/>
                    </a>

                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="btn btn-warning" href="#">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-warning" href="#}}">{{ __('Daftar Sekarang') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tentang OLE777</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Komisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Peraturan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Pertanyaan & Jawaban</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">OLE777 Official</a>
                </li>
            </ul>
            <div id="banner" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($slides as $key => $slide)
                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                        <img class="d-block w-100" src="{{$slide['img']}}" alt="{{$slide['name']}}">
                    </div>
                    @endforeach
                    
                </div>
                <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev" onclick="$('#banner').carousel('prev')">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#banner" role="button" data-slide="next" onclick="$('#banner').carousel('next')">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
            <div class="images mt-10">
                <div class="row justify-content-center">
                    <div class="col-3 col-sm-3">
                        <img src="{{url('/images/img-cta-3.jpg')}}" alt="">
                    </div>
                    <div class="col-3 col-sm-3">
                        <img src="{{url('/images/img-cta-2.jpg')}}" alt="">
                    </div>
                    <div class="col-3 col-sm-3">
                        <img src="{{url('/images/img-cta-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <p>
                        <b>Kongsi OLE777</b> adalah program OLE777 Affiliate bola yang memberikan member dan non-member penghasilan dengan platform OLE777.
                        Berdiri sejak tahun 2014, OLE777 memberikan hiburan online dengan kenyamanan, kualitas produk, layanan pelanggan terbaik, dan keuntungan bagi untuk seluruh player, dan anggota Kongsi OLE777 Affiliate Bola. 
                    </p>
                    <br>
                    <p>
                        <b>Langkah-langkah mendapatkan komisi dengan menjadi Kongsi OLE777:</b>
                    </p>
                    <ul class="list-data">
                        <li><span>1</span>Daftar dengan klik tombol " Daftar Sekarang" atau melalui link yang diberikan oleh tim kami.</li>
                        <li><span>2</span>Lakukan Pendaftaran.</li>
                        <li><span>3</span>Sebarkan link khusus yang Anda dapat dari akun Anda.</li>
                        <li><span>3</span>Anda bisa menyebarkan link melalui akun-akun Sosial Media Anda, seperti Facebook, Instagram, YouTube, Twitter, dan lain-lain.</li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-3 text-center first">
                        <img src="{{url('/images/img-group.svg')}}" alt="Group Icon">
                        <h2>Tim Pembayaran<br>yang Profesional</h2>
                        <p>
                            Metode pembayaran beragam dan terpercaya. Setiap dana pemain aman dan terjamin.
                        </p>
                    </div>
                    <div class="col-3 text-center">
                        <img src="{{url('/images/img-domino.svg')}}" alt="Group Icon">
                        <h2>Brand yang<br>Terkenal</h2>
                        <p>
                            Anggaran pemasaran yang luar biasa. Biarkan Anda menikmati efek dari merek berkualitas.
                        </p>
                    </div>
                    <div class="col-3 text-center">
                        <img src="{{url('/images/img-document.svg')}}" alt="Group Icon">
                        <h2>Sistem Laporan<br>Profesional</h2>
                        <p>
                            Format pelaporan yang rapi & bersih. Lihat laporan harian & bulanan di satu titik 
                        </p>
                    </div>
                    <div class="col-3 text-center">
                        <img src="{{url('/images/img-settings.svg')}}" alt="Group Icon">
                        <h2>Personalisasikan<br>Paket Pribadi</h2>
                        <p>
                            Kami dapat menyesuaikan promosi khusus untuk Anda. Membuat promosi Anda menjadi Mudah 
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <img src="{{url('/images/Sticker WhatsApp Gratis - Kongsi OLE777.gif')}}" alt="ad">
                </div>
            </div>
            <div class="contacts">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <img src="{{url('/images/icon-skype.svg')}}" alt="skype">
                            <span  class="white">Pelayanan Pelanggan Skype: <span class="gold">affiliasi.id@oleintl.com</span></span>
                        </div>
                        <div class="col-4">
                            <img src="{{url('/images/icon-email.svg')}}" alt="mail">
                            <span class="white">Email: <span class="gold">affiliatebola@ole777-indo.com</span></span>
                        </div>
                        <div class="col-4">
                            <img src="{{url('/images/icon-whatsapp.svg')}}" alt="whatsapp">
                            <span class="white">Whatsapp: <span class="gold">+6287807264445</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{url('/images/logo-chelsea.svg')}}" alt="chelsea">
                        </div>
                        <div class="col-3">
                            <img src="{{url('/images/logo-pagcor.png')}}" alt="pagcor">
                        </div>
                        <div class="col-3">
                            <img src="{{url('/images/logo-iom.png')}}" alt="iom">
                        </div>
                        <div class="col-3">
                            <img src="{{url('/images/ole777-white.png')}}" alt="ole777">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $('#banner').carousel({
        interval: 2000
    });
</script>
