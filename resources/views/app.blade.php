<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Masjid Ibnu Sabil - Pusat kegiatan keagamaan dan sosial di Pisangan Baru, Matraman, Jakarta Timur. Jadwal sholat real-time, transparansi keuangan, dan layanan modern untuk umat.">
        <meta name="keywords" content="masjid, ibnu sabil, jakarta timur, jadwal sholat, islam, kajian, donasi, pisangan baru, matraman">
        <meta name="author" content="Masjid Ibnu Sabil">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Masjid Ibnu Sabil - Jakarta Timur">
        <meta property="og:description" content="Pusat kegiatan keagamaan dan sosial dengan fasilitas modern di Pisangan Baru, Matraman, Jakarta Timur.">
        <meta property="og:image" content="{{ url('/images/masjid-og-image.jpg') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url('/') }}">
        <meta property="twitter:title" content="Masjid Ibnu Sabil - Jakarta Timur">
        <meta property="twitter:description" content="Pusat kegiatan keagamaan dan sosial dengan fasilitas modern di Pisangan Baru, Matraman, Jakarta Timur.">
        <meta property="twitter:image" content="{{ url('/images/masjid-og-image.jpg') }}">
        
        <title inertia>{{ config('app.name', 'Masjid Ibnu Sabil') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        
        <!-- Scripts -->
        @routes
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
        
        <!-- Theme Color -->
        <meta name="theme-color" content="#16a34a">
        <meta name="msapplication-TileColor" content="#16a34a">
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>