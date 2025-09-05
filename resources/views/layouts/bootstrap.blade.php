<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="{{ asset('css/style3.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand"><img src="{{ asset('img/logo2.png') }}" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" 
	data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="#" class="nav-link active">Home</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">About</a>
			</li><li class="nav-item">
				<a href="#" class="nav-link">Services</a>
			</li><li class="nav-item">
				<a href="#" class="nav-link">Team</a>
			</li><li class="nav-item">
				<a href="#" class="nav-link">Connect</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0"
	 class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>

<div class="carousel-inner">
	<div class="carousel-item active">
		<img class="d-block w-100"
		 src="{{ asset('img/background.png') }}" alt="">
		<div class="carousel-caption">
			<h1 class="display-2">PEHAMS</h1>
			<h3>Complete Layout</h3>
			<button type="button" 
			class="btn btn-outline-light btn-lg">
				VIEW DEMO</button>
			<button class="btn btn-primary-btn-lg">
				Get Started</button>
		</div>
	</div>
	<div class="carousel-item">
		<img class="d-block w-100"
		 src="{{ asset('img/background2.png') }}" alt="">
	</div>
	<div class="carousel-item">
		<img class="d-block w-100" 
		src="{{ asset('img/background3.png') }}" alt="">
	</div>
</div>

</div>
<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere magnam similique quod aspernatur? Quidem vitae excepturi iste eum! Libero ea itaque eaque deserunt! Corporis vitae magni repellat aliquid dolores?</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
		<a href="">
			<button type="button" class="btn btn-outline-secondary btn-lg">
				Web Hosting
			</button>
		</a>
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome">
		<div class="col-12">
			<h1 class="display-2">Built with ease</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead text-center">Lorem ipsum, dolor sit amet
				 consectetur adipisicing elit. Excepturi
					sint consectetur dolores consequatur
					 architecto iusto vitae corporis facilis
					  cupiditate debitis!</p>
		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>HTML5</h3>
			<p>Voluptate quis irure sit ex velit voluptate culpa.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-bold"></i>
			<h3>BOOTSTRAP</h3>
			<p>Ullamco cupidatat tempor tempor officia tempor.</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<i class="fab fa-css3"></i>
			<h3>CSS3</h3>
			<p>Sunt pariatur minim cillum cillum deserunt sitea.</p>
		</div>
		
	</div>
	<hr class="my-4">
	
</div>

<!--- Two Column Section -->


<!--- Fixed background -->


<!--- Emoji Section -->

  
<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->




</body>
</html>




<!-- View in Browser: Drew's #1 Trending YouTube Tutorial
<div class="youtube-tutorial">
	<a href="http://w3n.link/bundle-bonus-playlist" target="_blank" style="cursor: pointer!important;">
    <img src="https://w3newbie.com/wp-content/uploads/12-site-bundle-banner.png" style="max-width: 100%; position: absolute; bottom: 0;">
  </a>
</div>
 End View in Browser: Drew's #1 Trending YouTube Tutorial -->


