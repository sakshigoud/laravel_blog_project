<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href=" 'resources/css/app.css'"> 
</head>


<header>
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('posts.index') }}">Mini-Blog</a>
    </div>
  </nav>
</header>

<!-- Body -->
<body>
  @yield('content')
</body>

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container d-lg-flex justify-content-between">
    <span class="text-light">Mini-Blog © 2023</span>
  </div>
</footer>
<script src="resources/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>