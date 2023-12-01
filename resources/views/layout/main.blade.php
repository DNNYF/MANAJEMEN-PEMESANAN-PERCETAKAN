<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('dist/css/lightbox.css') }}"> --}}
    <title>Wibawa Printing | @yield('title')</title>
</head>
<body>
        @yield('main_content')
        {{-- <script src="{{ asset('dist/js/lightbox-plus-jquery.js') }}"></script> --}}
     
</body>
</html>
