<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    href="https://unpkg.com/@blueprintjs/core@5/lib/css/blueprint.css"
    rel="stylesheet"
  />
  <style>
    body {
      padding: 0;
      margin: 0;
    }
    #root {
      width: 100vw;
      height: 100%;
    }
  </style>
    <title>Document</title>
</head>
<body>
    <div id="polotno-container"></div>

<script type="module" src="{{ asset('js/polotno.js') }}"></script>
<script>
  window.createEditor({
    container: document.getElementById('polotno-container'),
  });
</script>
</body>
</html>