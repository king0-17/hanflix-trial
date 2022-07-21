<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
	
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="./css/home.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>

		<!-----------NavBar------------->
	<nav id="top-nav"class="navbar navbar-expand-lg ">
	  <div class="container-fluid">
		<div id="logo">
			<img  class=""src="./images/logo2.png">
		</div>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul id="top-nav-btn" class="navbar-nav me-auto mb-2 mb-lg-0" style="float: right;">
			        <li class="nav-item fs-5 px-4 ">
			          <a class="nav-link active text-danger border-bottom" aria-current="page" href="{{ url('home') }}">Home</a>
			        </li>
			        <li class="nav-item fs-5 px-4">
			          <a class="nav-link" href="#">Movies</a>
			        </li>
			        <li class="nav-item fs-5 px-4">
			          <a class="nav-link" href="{{ url('livestream') }}">Live</a>
			        </li>
		      </ul>
			      <form id="search"class="search-box search-form d-flex" role="search">
				       <input class="form-control me-2" type="search"  placeholder="" aria-label="Search">
				      	<img src="./icons/search-icon.png" style="height:30px">
			      </form>
			 <div class="dropdown">
			  <button id="profile-button"class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				 <img id="notif"src="./icons/notif.png">
			  </button>
			  
			  <ul class="dropdown-menu">
			  	<li>New releases</li>
			  	<li>New releases</li>
			  	<li>New releases</li>
			  	<li>New releases</li>
			  </ul>
			</div>
			 <div class="dropdown">
			  <button id="profile-button"class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				 <img id="profile"src="./icons/profile.png">
			  </button>
			  <ul class="dropdown-menu">
		  	 	<a id="logout-icon" class="px-4 text-dark" href=""></i>Log out</a>
			  </ul>
			</div>
		  </div>
	  </div>
	</nav>
	<!-----------Left-Container------------->
	<div class="left-container">
		<div id="nav-btn"><a href="#action">Action</a></div>
		<div id="nav-btn"><a href="#anime">Anime</a></div>
		<div id="nav-btn"><a href="#comedy">Comedies</a></div>
		<div id="nav-btn"><a href="#comedy">Action Comedy</a></div>
		<div id="nav-btn"><a href="">Dramas</a></div>
		<div id="nav-btn"><a href="">Documentaries</a></div>
		<div id="nav-btn"><a href="">Horror</a></div>
		<div id="nav-btn"><a href="">Music</a></div>
		<div id="nav-btn"><a href="">Romantic</a></div>
		<div id="nav-btn"><a href="">Sci-fi & Fantasy</a></div>
		<div id="nav-btn"><a href="">Sports</a></div>
		<div id="nav-btn"><a href="">Thrillers</a></div>
		
	</div>
	
	
	<!-----------Live-Stream-Container------------->
	<div id="live-stream-box">
		<h3>Live</h3>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  </div>
		  <div class="carousel-inner">
			    <div class="carousel-item active">
				    	<div class="live1-container">
						<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
						<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
						<div id="oper"></div>
						<div id="vid"></div>
						<script>
						player = new Clappr.Player({
						source: "http://alpharlive.mmdlive.lldns.net/alpharlive/4e5223aa5a8f46709ec75ede1c9d69fb/manifest.m3u8?p=36&h=329049f00f16eaae616dd371958cd918",
						mimeType: "application/x-mpegURL",
						autoPlay: true, 
						height: "500",
						width: "",
						plugins: {"core": [LevelSelector]}, 
						parentId: "#vid"});
						</script>
						</div>
		   		</div>
		    <div class="carousel-item">
		    	<div class="live1-container">
					<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
					<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
					<div id="oper"></div>
					<div id="vid2"></div>
					<script>
					player = new Clappr.Player({
					source: "http://alpharlive.mmdlive.lldns.net/alpharlive/d1259a9d3e144a3d88cb8869771b3246/manifest.m3u8?p=36&h=b86986277969232114a3299769d7af92",
					mimeType: "application/x-mpegURL",
					autoPlay: true, 
					height: "500",
					width: "",
					plugins: {"core": [LevelSelector]}, 
					parentId: "#vid2"});
					</script>
				</div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
			
			
	</div>
	<!-----------VOD-Container------------->
	<div class="container">
		<h3 id="recent">Recently Added</h3>
		<div class="row">
			<div class="vid col-1"><img src="./images/coherence.jpg"></div>
			<div class="vid col-1"><img src="./images/the-sopranos.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/the-art-of-defense.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/the-art-of-defense.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
			<div class="vid col-1"><img src="./images/mindhunter.jpg"></div>
			<div class="vid col-1"><img src="./images/x-men.jpg"></div>
			<div class="vid col-1"><img src="./images/the-sopranos.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
		</div>
		<h3 class="action-call">Action</h3>
		<a href="" name="action"></a>
		<div class="row">
			<div class="vid col-1"><img src="./images/adam-project.jpg"></div>
			<div class="vid col-1"><img src="./images/ambulance.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/the-art-of-defense.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/day-to-die.jpg"></div>
			<div class="vid col-1"><img src="./images/gemini-man.jpg"></div>
			<div class="vid col-1"><img src="./images/terminator-dark-fate.jpg"></div>
			<div class="vid col-1"><img src="./images/terror-on-the-prairie.jpg"></div>
			<div class="vid col-1"><img src="./images/the-commando.jpg"></div>
			<div class="vid col-1"><img src="./images/watcher.jpg"></div>
			<div class="vid col-1"><img src="./images/the-northman.jpg"></div>
		</div>
		<h3>Anime</h3>
		<a href="" name="anime"></a>
		<div class="row">
			<div class="vid col-1"><img src="./images/coherence.jpg"></div>
			<div class="vid col-1"><img src="./images/the-sopranos.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/the-art-of-defense.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/the-art-of-defense.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
			<div class="vid col-1"><img src="./images/mindhunter.jpg"></div>
			<div class="vid col-1"><img src="./images/x-men.jpg"></div>
			<div class="vid col-1"><img src="./images/the-sopranos.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
		</div>
		<h3>Comedies</h3>
		<div class="row">
			<div class="vid col-1"><img src="./images/zombie-land-2.jpg"></div>
			<div class="vid col-1"><img src="./images/mib-international.jpg"></div>
			<div class="vid col-1"><img src="./images/man-from-toronto.jpg"></div>
			<div class="vid col-1"><img src="./images/jumanji2.jpg"></div>
			<div class="vid col-1"><img src="./images/inglourious-basterds.jpg"></div>
			<div class="vid col-1"><img src="./images/adam-project.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
			<div class="vid col-1"><img src="./images/mindhunter.jpg"></div>
			<div class="vid col-1"><img src="./images/x-men.jpg"></div>
			<div class="vid col-1"><img src="./images/the-sopranos.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
		</div>
		<h3>Action Comedy</h3>
		<div class="row">
			<div class="vid col-1"><img src="./images/man-from-toronto.jpg"></div>
			<div class="vid col-1"><img src="./images/jumanji2.jpg"></div>
			<div class="vid col-1"><img src="./images/zombie-land-2.jpg"></div>
			<div class="vid col-1"><img src="./images/the-art-of-defense.jpg"></div>
			<div class="vid col-1"><img src="./images/mib-international.jpg"></div>
			<div class="vid col-1"><img src="./images/spiderman-far-from-home.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
			<div class="vid col-1"><img src="./images/mindhunter.jpg"></div>
			<div class="vid col-1"><img src="./images/x-men.jpg"></div>
			<div class="vid col-1"><img src="./images/the-sopranos.jpg"></div>
			<div class="vid col-1"><img src="./images/the-gentlemen.jpg"></div>
			<div class="vid col-1"><img src="./images/peaky-blinders.jpg"></div>
		</div>

	</div>
	<!---------
	<div class="footer">
		<div class="link-container">	
			<div>
				<a href="">Questions? Contact us.</a>
				<a href="">FAQ</a>
				<a href="">Investor Relations</a>
				<a href="">Ways to Watch</a>
				<a href="">Corporate Information</a>
			</div>
			<div>
				<a href="">Only on Netflix</a>
				<a href="">Hanflix Philippines</a>
				<a href="">Help Center</a>
				<a href="">Jobs</a>
				<a href="">Terms of Use</a>
			</div>
			<div>
				<a href="">Contact Us</a>
				<a href="">Privacy</a>
				<a href="">Speed Test</a>
				<a href="">Media Center</a>
			</div>
			<div>
				<a href="">Buy Gift Cards</a>
				<a href="">Cookie Preferences</a>
				<a href="">Legal Notices</a>
			</div>
		</div>
	</div>
	-------->

	<!-----------Scripts------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
 		
</body>
</html>
		 