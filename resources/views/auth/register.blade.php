<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTH Demo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/register.css">

</head>
<body>

    <div class="container">
        <div class="row">
         <img src="images/logo2.png" class="img-logo" />
            <div class="col-lg col-md-offset-4" style="margin-top:20px;">
                <div class="register-menu">	
					<a id="loginBtn" href="{{ url('login') }}">Login</a>	
					<a id="registerBtn" href="{{ url('register') }}">Register</a>
				</div>
                
                <form action="registerUser" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-primary">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf

                    <div class="form-group mt-2">
                         <input type="text" id="form-control" class="form-control" placeholder="Enter First Name" name="firstName" value="{{old('firstName')}}">
                         <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                    </div>
                  
                    <div class="form-group mt-2">
                         <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" value="{{old('lastName')}}">
                         <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group mt-2">
                         <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                         <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group mt-2">
                         <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                         <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group mt-2">
                         <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}">
                         <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button id="btn" class="btn btn-block btn-primary" type="submit">Register</button>
                    </div> 
            </div>      
        </div>
    </div>

    <div class="bottom mt-5">
        <div class="bottom-width">
            Questions? Call <a href="tel:1-844-542-4813" class="tel-link">+63-955-286-7566</a>
            <div>
                <ul class="bottom-flex">
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Frequently ask questions
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Privacy 
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Help Center
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Facebook page
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Twitter
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                           Instagram
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                           Contact Us
                        </a>
                    </li>
                </ul>
            </div>




    <!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript"> 
 function myFunction() {
    document.getElementById("result").innerHTML = "This page is protected by Google reCAPTCHA to ensure youre not a bot. The information collected by Google reCAPTCHA is subject to the Google Privacy Policy and Terms of Service, and is used for providing, maintaining, and improving the reCAPTCHA service and for general security purposes it is not used for personalized advertising by Google.";
};
</script>
</body>
</html>