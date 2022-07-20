<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanflix</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
    <!-- External CSS -->
    <link rel="stylesheet" href="./css/navbar-forgot.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Font Link -->
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    
    <style>
        @import url('http://fonts.cdnfonts.com/css/gotham');
    </style>
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img id="logo" src="./images/logo2.png">
        </a>
        
        <form class="button">
        <button class="btn btn-outline-danger text-white" type="submit">Join Hanflix</button>
        <button class="btn btn-outline-danger text-white" type="submit">Sign in</button>
        </form>    
        </div>
    </nav>
        @yield('content')
        
</body>
</html>