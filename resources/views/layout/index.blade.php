<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-News | {{ $title }}</title>
    @vite('resources/css/app.css')
    <style>
        .slider {
            transform: translateX(0);
        }
        .navlist {
            transition: all 1s ease;
        }
        * {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-200">
    @include('sweetalert::alert')

    @auth
        @include('layout.navbar_auth')
    @endauth
    @guest
        @include('layout.navbar_guest')
    @endguest

    @yield('container')
    

    <script>
        const nav = document.querySelector('.navlist')
        const menu = document.querySelector('.menu')

        menu.addEventListener('click', function() {
            nav.classList.toggle('slider');
        })
    </script>
    <script>
            const audio = document.querySelector('#audio');
            audio.play();
    </script>

    
</body>
</html>