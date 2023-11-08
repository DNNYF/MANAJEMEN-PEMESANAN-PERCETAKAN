<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="./favicon.ico" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description"
        content="Free online design editor. Create images for social media, youtube previews, facebook covers" />
    <link rel="apple-touch-icon" href= <?= assets('polotno/logo.png') ?> />
    <meta property="og:title" content="Polotno Studio - Online Free Design Editor" />
    <meta property="og:description"
        content="Create graphical designs for social media, youtube previews, facebook covers and more" />
    <meta property="og:image" content="https://studio.polotno.dev/studio-polotno-preview.jpg" />
    <meta property="og:url" content="https://studio.polotno.dev/" />
    <meta name="twitter:card" content="summary_large_image" />
    <link href="https://unpkg.com/@blueprintjs/core@5/lib/css/blueprint.css" rel="stylesheet" />
    <style>
        html {
            min-height: -webkit-fill-available
        }

        body {
            padding: 0;
            margin: 0
        }

        .bp5-dark #root {
            background-color: #30404d
        }

        #root {
            width: 100vw;
            height: 100%
        }

    </style>
    <link rel="manifest" href= <?= assets('polotno/asset-manifest.json') ?> />
    <title>Polotno Studio - Make graphical designs</title>
    <script defer="defer" src= <?= assets('polotno/static/js/main.ae39762d.js') ?>></script>
    <link href=<?= assets('polotno/static/css/main.31d6cfe0.css')?> rel="stylesheet">
</head>

<body class="bp5-dark"><noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <script async defer="defer" data-domain="%REACT_APP_PLAUSIBLE_DOMAIN%"
        src="https://plausible.io/js/script.tagged-events.js"></script>
</body>

</html>
