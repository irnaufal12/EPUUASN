<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi UU</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="uu_asn">
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
                        <li id="home" class=""><a href="{{route('dashboard')}}">HOME</a></li>
                        <li id="uu_asn" class=""><a href="{{route('uu_asn')}}">UU ASN</a></li>
                        <li id="test" class=""><a href="{{route('menu')}}">TEST</a></li>
                        <li id="review" class=""><a href="{{route('review')}}">REVIEW SCORE</a></li>
                    </ul> 
                </nav>
                @endauth
            @endif

        </div>
    </div>
    
    @yield('content')
    
    <script>
        var pathname = window.location.pathname;
        const btnMenuIn = document.getElementById('in-menu')
        const nav = document.querySelector('nav')
        const btnMenuOut = document.getElementById('out-menu')  

        btnMenuIn.addEventListener('click', () => {
            nav.classList.add('menu-btn')
        })

        btnMenuOut.addEventListener('click', () => {
            nav.classList.remove('menu-btn')
        })

        // currentLinks = document.querySelectorAll('a[href="'+document.URL+'"]')
        // currentLinks.forE‌​ach(function(link) {
        // link.className += ' current')
        // });
        
        switch(pathname) {
        case "/uu_asn":
            a = document.getElementById('uu_asn');
            a.className = "current";
            break;
        case "/review":
            a = document.getElementById('review');
            a.className = "current";
            break;
        case "/menu":
            a = document.getElementById('test');
            a.className = "current";
            break;
        case "/test":
            a = document.getElementById('test');
            a.className = "current";
            break;

        }

        if(pathname != "/uu_asn"){
            document.body.className = "";
        }

        // if(window.location.href=="")
    </script>
</body>
</html>