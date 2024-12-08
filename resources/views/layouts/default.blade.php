<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}"/>
    <link rel="manifest" href="{{ asset('site.webmanifest') }}"/>
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body id="default">

@yield('content')

@impersonating()
<a href="{{ route('impersonate.leave') }}"
   class="bg-black text-white text-center w-100 py-3 text-decoration-none position-absolute bottom-0"
   style="position: absolute; z-index: 999999; font-size: 14px;">
    <x-heroicon-o-arrow-left-end-on-rectangle/>
    Tinggalkan Pengecekan Akun
</a>
@endImpersonating

{{-- Page Specific Scripts --}}
@stack('scripts')

</body>
</html>
