<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" /> --}}
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.min.css') }}"></script>
    <title>Wibawa Printing | {{ $title }}</title>
</head>
<body>

@yield('main_content');

</body>

</html>