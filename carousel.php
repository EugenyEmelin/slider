<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>carousel</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="slider-block">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<?php
			$c=0; // количество файлов. Считаем с нуля
 			$d=dir('img'); // 
 			while($str=$d->read()) { 
  				if($str{0}!='.') { 
    				if(is_dir($dir.'/'.$str)) $c+=count_files($dir.'/'.$str); 
    				else $c++; 
  				}; 
 			} 
 			$d->close(); // закрываем директорию
			?>
  			<ol class="carousel-indicators">
   				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   				<?php
  				for ($i = 1; $i < $c; $i++) {
  				?>
  					<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li>
  				<?php
  				}
  				?>
   				<!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
 			</ol>
  			<div class="carousel-inner">
  				<div class="carousel-item active">
  			    	<img class="d-block w-100 slider-img" src="img/0.jpg">
  			    	<div class="carousel-caption d-none d-md-block">
   					<h5>Заголовок</h5>
    				<p>Описание</p>
 				 </div>
  			  	</div>
  			  	<div class="carousel-item">
  			    	<img class="d-block w-100 slider-img" src="img/1.jpg">
  			    <div class="carousel-caption d-none d-md-block">
   					<h5>Заголовок</h5>
    				<p>Описание</p>
 				 </div>
  			 	 </div>
  			 	<div class="carousel-item">
  			    	<img class="d-block w-100 slider-img" src="img/2.jpg">
  			    <div class="carousel-caption d-none d-md-block">
   					<h5>Заголовок</h5>
    				<p>Описание</p>
 				 </div>
  			 	 </div>
  			 	 <div class="carousel-item slider-img">
  			    	<img class="d-block w-100" src="img/3.jpg">
  			    <div class="carousel-caption d-none d-md-block">
   					<h5>Заголовок</h5>
    				<p>Описание</p>
 				</div>
  			  	</div>
  			   	<div class="carousel-item">
  			    	<img class="d-block w-100 slider-img" src="img/4.jpg">
  			    <div class="carousel-caption d-none d-md-block">
   					<h5>Заголовок</h5>
    				<p>Описание</p>
 				</div>
  			  </div>
  			</div>
  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  			  <span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  			  <span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>