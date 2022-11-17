
<!DOCTYPE HTML>
<html>
<head>
    <title>TitipSini.com | @yield("title")</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    @include("superadmin.layouts.partials.css.style")

    @yield("css")

    @include("superadmin.layouts.partials.js.style")

    @yield("js")

</head>

<body>
    @include("superadmin.layouts.partials.navbar.navbar")
    <div class="page-container">
        <div class="page-content">
            @include("superadmin.layouts.partials.sidebar.sidebar")

            <div class="content-wrapper">

                @yield("content")

            </div>
        </div>
    </div>
</body>

</html>
