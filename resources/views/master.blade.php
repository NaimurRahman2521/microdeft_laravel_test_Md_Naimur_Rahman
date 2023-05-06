<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Microdeft Exam</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light shadow">
    <div class="container">
        <a href="{{route('product.add')}}" class="navbar-brand">Microdeft</a>
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('product.add')}}" class="nav-link">Add</a></li>
            <li><a href="{{route('product.manage')}}" class="nav-link">Manage</a></li>
        </ul>
    </div>
</nav>
@yield('body')
</body>
</html>
