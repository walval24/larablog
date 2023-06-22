
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> @yield('pageTitle') </title>
    <!-- CSS files -->
    <link href="./back/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    @stack('stylesheet')
    <link href="./back/dist/css/demo.min.css" rel="stylesheet"/>
    
  </head>
  <body  class=" d-flex flex-column">
    <script src="./back/dist/js/demo-theme.min.js"></script>
   @yield('content')
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./back/dist/js/tabler.min.js" defer></script>
    @stack('scripts')
    <script src="./back/dist/js/demo.min.js" defer></script>
  </body>
</html>