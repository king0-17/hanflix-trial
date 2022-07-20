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
    <link rel="stylesheet" href="./css/forgot-reset.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Font Link -->
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    
    <style>
        @import url('http://fonts.cdnfonts.com/css/gotham');
    </style>

</head>
<body>
    @extends('layout.navbar-forgot') 
    @section('content')
    <div class="mid-content text mt-4 text-center">
        <h4>Reset Password</h4>
        <hr>
        <p>Please enter all the following details</p>
    </div>

    <div class="container d-flex justify-content-center align-items-center"> 
        <div class="row">
            <div class="col-lg-12 col-md-12">
                    <form class="input">
                        <div class="mb-3">
                            <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password">
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-danger">Reset Password</button>
                        </div>
                    </form>    
            </div>
        </div>
    </div>
    @endsection
</body>
</html>