<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/public/foto">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <link rel="shourtcut icon" type="x-icon" href="/foto/t.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUSANTARA PICT</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-MOD3z6m+2/9Q3hQ9DP1v9M/1RZ9mLgdbXtwZkJPMpEmrTQy7CNUWkl2L/l0PO4Dk5e2E1lKX+uIkbfep7JlSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo"><a href = "\">Nusantara</a></div>
        <ul class="nav-links">
            <li><a href="\loadmore">Gallery</a></li>
            <li><a href="\about">About Developer</a></li>
            <li><a href="\campus">Find Us</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="grey-box">Profile</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="grey-box">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="grey-box">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
    
@yield('content')
<!-- footer -->
<footer id="footer" class="py-7">
    <div class="container">
        <div class="footer-content">
            <div>
                <h3>Group 6</h3>
            </div>
            <div>
                <li><a href="\"><h3>Back to Menu</h3></a></li>
                <ul class="flex">
                    <li><a href="\about">About Us</a></li>
                    <li><a href="\campus">Our Campus</a></li>
                    <li><a href="https://pnj.ac.id/">Website</a></li>
                    <li><a href="\contact">Contact Us</a></li>
                    <li><a href="https://www.instagram.com/politekniknegerijakarta/">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->