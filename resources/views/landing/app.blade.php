<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>titipsini.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/ic2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    @include('landing.css.style_css')

    @yield("css")

</head>

<body>

    @include("landing.header.v_header")

    @yield("content")

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @include('landing.js.style_js')

</body>

</html>
