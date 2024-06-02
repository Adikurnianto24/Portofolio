<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $portfolio->title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .image-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Empat kolom dengan lebar yang sama */
            gap: 16px; /* Jarak antar gambar */
        }
        .image-grid img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            opacity: 0; /* Mulai dengan gambar tidak terlihat */
            transform: translateY(20px); /* Mulai dengan gambar sedikit turun */
            transition: opacity 0.5s ease, transform 0.5s ease; /* Animasi transisi */
        }
        @media (max-width: 768px) {
            .image-grid {
                grid-template-columns: repeat(2, 1fr); /* Dua kolom pada layar kecil */
            }
        }
        @media (max-width: 480px) {
            .image-grid {
                grid-template-columns: 1fr; /* Satu kolom pada layar sangat kecil */
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold" style="text-align: center;">{{ $portfolio->title }}</h1>
        <div class="image-grid mt-4">
            @if($portfolio->RecyclerApp1)
                <img src="{{ asset('uploads/' . $portfolio->RecyclerApp1) }}" alt="{{ $portfolio->title }}">
            @endif
            @if($portfolio->RecyclerApp2)
                <img src="{{ asset('uploads/' . $portfolio->RecyclerApp2) }}" alt="{{ $portfolio->title }}">
            @endif
            @if($portfolio->RecyclerApp3)
                <img src="{{ asset('uploads/' . $portfolio->RecyclerApp3) }}" alt="{{ $portfolio->title }}">
            @endif
            @if($portfolio->RecyclerApp4)
                <img src="{{ asset('uploads/' . $portfolio->RecyclerApp4) }}" alt="{{ $portfolio->title }}">
            @endif
            @if($portfolio->RecyclerApp5)
                <img src="{{ asset('uploads/' . $portfolio->RecyclerApp5) }}" alt="{{ $portfolio->title }}">
            @endif
            @if($portfolio->RecyclerApp6)
                <img src="{{ asset('uploads/' . $portfolio->RecyclerApp6) }}" alt="{{ $portfolio->title }}">
            @endif
        </div>
    </div>

    <!-- Script untuk animasi dan scroll -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll('.image-grid img');
            images.forEach((img, index) => {
                setTimeout(() => {
                    img.style.opacity = 1;
                    img.style.transform = 'translateY(0)';
                    img.scrollIntoView({ behavior: 'smooth', block: 'end' });
                }, index * 500); // Delay 500ms untuk setiap gambar
            });
        });
    </script>
</body>
</html>