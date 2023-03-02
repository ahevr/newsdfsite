<meta charset="UTF-8">
    <meta name="author" content="aheworks.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:title"       content="@yield("metaTitle")" />
    <meta property="og:description" content="@yield("metaDescription")" />
    <meta property="og:image"       content="@yield("metaImage")" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="egesedefavize.com" />
    <meta name="twitter:title" content="@yield("metaTitle")" />
    <meta name="twitter:description" content="@yield("metaDescription")" />
    <meta name="twitter:image" content="@yield("metaImage")" />



@include("app.site.inc.fav-icon")
<title>@yield("title")</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include("app.site.inc.page_style")
