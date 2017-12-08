<!DOCTYPE html>
<html>

<head>
  <title>{{ $titl or 'IT_START' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'Агенство Инновационного Развития' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'IT-START' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'IT-START' }}" />
  <meta property="og:description" content="{{ $meta or 'Агенство Инновационного Развития' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/Logo.png' }}" content="storage/{{ $img or 'pages/Logo.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="AIR" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic-ext" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
