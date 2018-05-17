<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


        <title>LibraryDOTcom</title>

    </head>
    <body>

    <header>
        <section class="container">

            <img src="{{asset('img/header.png')}}">
        
            <ul class="nav nav-tabs">
             <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create">ADD BOOK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/search">ALL BOOKS</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="/blog">BLOG</a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="/register">SIGN UP</a>
                </li>
                     <li class="nav-item">
                    <a class="nav-link" href="/login">SIGN IN</a>
                </li>
                
                @if (Auth::check())
                 </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#">Hi, {{Auth::user()->name}} </a>
                </li>
                @endif
            </ul>
        
        </section>
    </header>
    <section class="container">
    

        @yield('content')
    
    </section>

    <footer>

    @include('footer')
    
    </footer>   
    </body>
</html>
