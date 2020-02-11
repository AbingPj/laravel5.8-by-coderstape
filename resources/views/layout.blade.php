<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My First Project</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <ul class="nav">
        <li class="nav-item">
          <a href="/" class="nav-link"> Home</a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link"> About Us</a>
        </li>
        <li class="nav-item">
          <a href="/contact" class="nav-link"> Contact Us</a>
        </li>
        <li class="nav-item">
          <a href="/customers" class="nav-link"> Customer List</a>
        </li>
  </ul>

  <div class="container">
      @yield('content')
  </div>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>