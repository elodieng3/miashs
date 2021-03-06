<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Accueil</a></li>
<li><a href="/articles">Article</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
</div>

<div class="callout large primary">
<div class="row column text-center">
<h1>Le Blog</h1>
<h2 class="subheader">Un petit blog</h2>
</div>
</div>

<div class="row medium-8 large-7 columns">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<footer>
<div class="top-bar" style="margin-top:185px;">
    <ul>
        <li class="menu-text">Un footer</li>
    </ul>
</div>
</footer>
</body>
</html>