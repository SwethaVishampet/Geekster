<!DOCTYPE HTML>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="css/patch.css"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').carousel(/*{
				interval:1000
			}*/);
		});
	</script>
	</script> <link href="img/icon.png" rel="shortcut icon" />
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span7 well">
				<div id="myCarousel" class="carousel">
					<center>
						<div class="carousel-inner">
							<div class="item active"><img src="img/Screenshot1.jpg"></div>
							<div class="item"><img src="img/Screenshot2.jpg"></div>
							<div class="item"><img src="img/Screenshot3.jpg"></div>
							<div class="item"><img src="img/Screenshot4.jpg"></div>
						</div>
					</center>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>			
			</div>
			<div class="row-fluid">
				<div class="span4 offset1">
					<center>
						<div class="item">
							<img src="img/Logo.png">
						</div></br>
					</center>
				</div>
				<div class="span4 offset1">
					</br>
					<section class="patch-well">
						<center>
							<div class="row-fluid">
								<label>Member Login</label>
							</div>
						</center>
						<form class="well" method="post" action="checklogin.php">
							<div class="row-fluid">
								<div class="span4">
									<label>Username</label>
									<input type="text" placeholder="Type Username here..."/>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span4">
									<label>Password</label>
									<input type="text" placeholder="Type Password here..."/>
								</div>
							</div></br>
							<div class="row-fluid">
								<button class="btn btn-primary">Submit</button>
								<button class="btn">Clear</button>
							</div>
						</form>
					</section>
				</div>
				<div class="span4 offset1">
					</br>
					<section class="patch-well">
						<form method="post" action="register.php">
							<div class="row-fluid">
								<div class="item">
									<text>Don't have an account yet?</text>
									<button class="btn btn-primary">Register</button>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/Tooltip.js"></script>	
	<script src="js/Popover.js"></script>	
	<script src="js/Carousel.js"></script>	
</body>
</html>

<?php
/*$(function() {  
  $(".button").click(function() {  
    // validate and process form here  
  });  
});*/
?>