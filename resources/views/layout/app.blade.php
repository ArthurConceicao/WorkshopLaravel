<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css" />
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">@yield('title')</div>
        <div class="card-body">@yield('content')</div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
