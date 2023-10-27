<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Manajemen Percetakan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>
<body>
    <link
  href="https://unpkg.com/@blueprintjs/core@5/lib/css/blueprint.css"
  rel="stylesheet"
/>
<!-- add polotno bundle -->
<!-- (!) important: make sure it is added into body of document (not <head>) -->
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

<!-- create container for editor -->
<div id="container"></div>
<!-- init the editor -->
<script>
  const { store } = createPolotnoApp({
    // this is a demo key just for that project
    // (!) please don't use it in your projects
    // to create your own API key please go here: https://polotno.com/cabinet
    key: 'qZyUO6LiRfYbwmcJqZ2H',
    // you can hide back-link on a paid license
    // but it will be good if you can keep it for Polotno project support
    showCredit: true,
    container: document.getElementById('container'),
  });
  // you can use full store API available here: https://polotno.com/docs/store-overview
</script>
</body>
</html>