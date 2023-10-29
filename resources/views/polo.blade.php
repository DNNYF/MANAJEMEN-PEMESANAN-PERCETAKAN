<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Manajemen Percetakan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@blueprintjs/core@5/lib/css/blueprint.css" rel="stylesheet" />
</head>
<body>

    <script src="https://unpkg.com/polotno@2/polotno.bundle.js"></script>

    <!-- set styles for the editor -->
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        #container {
            width: 100vw;
            height: 100vh;
        }
    </style>

    <div id="container"></div>

    <script>
        const { store } = createPolotnoApp({
            key: 'nFA5H9elEytDyPyvKL7T',
            showCredit: true,
            container: document.getElementById('container'),
            customImages: [] // Mengosongkan gambar bawaan
        });
    </script>
</body>
</html>
