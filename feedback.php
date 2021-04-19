<html>

	<head>
	
		<title> Land Pollution </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			body {
				position: relative
			}
		</style>
		
	</head>
	
	<body>
	
		<div class = "jumbotron text-center" style = "background-image: url(http://4.bp.blogspot.com/-dI3wIiQRSqc/VbiVGHOB6tI/AAAAAAAATAE/qZVOG72g-qY/s1600/%25EB%25B0%2595%25EC%2598%2581%25EC%25A1%25B0-%25EC%258B%25A0%25EC%25B2%259C%25EC%259D%25B4%25ED%259D%2590%25EB%25A5%25B4%25EB%258A%2594%25EB%258F%2584%25EC%258B%25AC.jpg)" style = "background-size: 700,100";>
			<FONT COLOR = "#FFFFFF"> <CENTER> <B> <h1> Light Pollution </h1> </B> </CENTER> </FONT>
		</div>
		
		<nav class="navbar navbar-expand-sm" style = "background-color: #C2B280";>
			<a class="navbar-brand" href="#">💡</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
		    <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.html"  style = "color: #FFFFFF"> Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="LandPollutionHome.html" style = "color: #FFFFFF"> Land </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="LightPollutionHome.html" style = "color: #FFFFFF"> Light </a>
					</li>    
					<li class="nav-item">
						<a class="nav-link" href="WaterPollution.html" style = "color: #FFFFFF"> Water </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="airpollution.html" style = "color: #FFFFFF"> Air </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="NoisePollution.html" style = "color: #FFFFFF"> Noise </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="deforestation.html" style = "color: #FFFFFF"> Deforestation </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="GlobalWarming.html" style = "color: #FFFFFF"> Global Warming </a>  
					</li>
					<li class="nav-item">
						<a class="nav-link" href="feedback.php" style = "color: #FFFFFF"> Feedback </a>  
					</li>
				</ul>
			</div>  
		</nav>
		
		<div class="container">
			<h2>Feedback Form</h2>
			<form action="submission.php" method="POST">
				<div class="form-group">
					<label for="name">Name: </label>
					<input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
				</div>
				<div class="form-group">
					<label for="email">Email: </label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<div class="form-group">
					<label for="idea">Idea: </label>
					<input type="idea" class="form-control" id="idea" placeholder="What's your idea" name="idea">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
	</body>

</html>