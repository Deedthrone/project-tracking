<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/image/logo/deedthrone.jpg">
    <link rel="stylesheet" href="css/partials/sidebar.css">
    <link rel="stylesheet" href="css/partials/navigationbar.css">
    <link rel="stylesheet" href="css/inbox.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Project Tracking | Dashboard</title>
  </head>
  <body>

  <header>
  @include('partials.sidebar') 
  </header>
  
  <div class="inbox">
    @yield('inbox')

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime dignissimos, dolores repellendus possimus, quam ab, nisi vero tenetur quas obcaecati molestias debitis aliquid vitae rerum doloremque. Ad porro quae modi?</p>
</div>


  </body>
</html>
