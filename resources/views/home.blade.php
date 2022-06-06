<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi UU</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <img id="in-menu" class="out-menu" src="image/in-menu.svg" alt="Open Navigation">
            
            <a class="logo" href="{{route('dashboard')}}">EPUASN</a>
            
            <ul class="right-nav">
                @if (Route::has('login'))
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <li>
                                <a class="btn-logout" href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('LOG OUT') }}
                                </a> 
                            </li>
                        </form>
                    @else
                        <li><a class="btn-login" href="{{ route('login') }}">LOGIN</a></li>

                        @if (Route::has('register'))
                            <li><a class="btn-signup" href="{{ route('register') }}">SIGNUP</a></li>
                        @endif
                    @endauth
                    
                @endif
                {{-- <li><a class="btn-login" href="{{ route('login') }}">LOGIN</a></li>
                <li><a class="btn-signup" href="{{ route('register') }}">SIGNUP</a></li>   --}}
            </ul>
            
            @if(Route::has('login'))
                @auth
                <nav>
                    <img id="out-menu" class="out-menu" src="image/out-menu.svg" alt="Close Navigation">

                    <ul class="primary-navbar">
                        <li class="current"><a href="{{route('dashboard')}}">HOME</a></li>
                        <li><a href="{{route('uu_asn')}}">UU ASN</a></li>
                        <li><a href="{{route('menu')}}">TEST</a></li>
                        <li><a href="{{route('review')}}">REVIEW SCORE</a></li>
                    </ul> 
                </nav>
                @endauth
            @endif

        </div>
    </div>

    <section class="content">
        <div class="container">
            <div class="left-col">
                <img class="img-circle" src="image/bg-circle.svg" alt="Background Circle">
                <div class="center">
                    SELAMAT DATANG DI WEBSITE EVALUASI PENGETAHUAN TENTANG UU ASN
                </div>
            </div>
            
            @if (Route::has('login'))
                <div class="right-col">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                
            @else
                    <div class="dropdown-col">
                        <p>SEPERTINYA ANDA BELUM LOGIN, PILIH UNTUK MEMULAI</p>
                        <img src="image/dropdown.svg" alt="">
                    </div>
                    <a href="{{ route('login') }}">LOGIN</a>
                    <a href="{{ route('register') }}">REGISTER</a>
                </div>
                @endauth
            @endif
        </div>
    </section>

    <script>
        const btnMenuIn = document.getElementById('in-menu')
        const nav = document.querySelector('nav')
        const btnMenuOut = document.getElementById('out-menu')  

        btnMenuIn.addEventListener('click', () => {
            nav.classList.add('menu-btn')
        })

        btnMenuOut.addEventListener('click', () => {
            nav.classList.remove('menu-btn')
        })

        
    </script>
</body>
</html>