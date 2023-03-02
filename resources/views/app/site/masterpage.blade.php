<!DOCTYPE html>
<html lang="tr">
<head>
@include("app.site.inc.head")
</head>
<body>
<!-- Header Section Begin -->
@include("app.site.inc.header")
<!-- Header End -->


@yield("content")



<!-- Footer Section Begin -->
@include("app.site.inc.footer")
<!-- Footer Section End -->
@include("app.site.inc.page_script")
</body>
</html>
