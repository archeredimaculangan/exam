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

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="btn btn-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
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
                <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="images mt-10">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="{{url('/images/img-cta-3.jpg')}}" alt="">
                    </div>
                    <div class="col-3">
                        <img src="{{url('/images/img-cta-2.jpg')}}" alt="">
                    </div>
                    <div class="col-3">
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
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
<script>
    $('#banner').carousel({
        interval: 2000
    });
</script>
