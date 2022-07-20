<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hanflix</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/landing.css">
</head>

<body>
	<div class="bg"></div>
		<div class="header">
			<a href="{{url('login')}}" class="btn" role="button" aria-disabled="true">Sign in</a>
		</div>
		<div class="mid-box">
			<img src="./images/logo2.png" href="{{url('home')}}">
			<h3>Watch your favorite Movies <br>and Livestream here!</h3>
			<p>Hanflix and chill?</p>
			<a href="{{url('register')}}" class="btn" role="button" aria-disabled="true">Register Now!</a>
		</div>
		
		<div class="container ">
			<div class="row">
				<div class="col">
					<h3>Watch anywhere!</h3>
					<p>Enjoy your free time while<br>watching movies</p>
					<img src="./images/flatscreentv.jpg"></div>
				<div class="col">
					<h3>Subscribe to have<br>profile features</h3>
					<p>Enjoy anytime<br>and cancel anytime!</p>
					<div class="email-box">
						<input type="text" placeholder="Enter email" name="">
						<button>Submit</button>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<h3><a href="https://www.google.com">Watch Now!</a></h3>
			<a href=""><img src="./images/ambulance.jpg"></a>
			<a href=""><img src="./images/secrets-of-dumbledore.jpg"></a>
			<a href=""><img src="./images/pan's-labyrinth.jpg"></a>
			<a href=""><img src="./images/the-art-of-defense.jpg"></a>
			<a href=""><img src="./images/the-batman.jpg"></a>
			<a href=""><img src="./images/silverston-siege.jpg"></a>
		</div>
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>