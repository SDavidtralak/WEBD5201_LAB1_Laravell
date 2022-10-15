
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Blog Template for Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="Public/css/album.css" rel="stylesheet">
      </head>

      <body>

        <div class="container">
          <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-4 pt-1">
                <a class="text-muted" href="#">Subscribe</a>
              </div>
              <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Large</a>
              </div>
              <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
              </div>
            </div>
    @include('layouts.nav')
</header>

@if ($flash = session('message'))
<div class="alert alert-success" role="alert">
   {{$flash}}
</div>
@endif

<main role="main">

 @yield('content')

</main>

@include('layouts.archives')

@include('layouts.footer')

  </body>
</html>
