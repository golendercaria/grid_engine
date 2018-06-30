<!doctype html>
<html class="no-js" lang="fr">
<head>
		<meta charset="UTF-8">
		<title>Grid core</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="stylesheets/grid-core.css" />
</head>
<body>
	
	<div class="d-grid grid-cols-12">
		<div class="panel yellow col-12"></div>
		
		<div class="panel orange col-6 col-s-12"></div>
		<div class="panel blue   col-6 col-s-12"></div>
		
		<div class="panel purple col-4 col-m-12"></div>
		<div class="panel yellow col-4 col-m-12"></div>
		<div class="panel green col-4 col-m-12"></div>
		
		<div class="panel orange d-grid grid-rows-3 col-12">
			<div class="panel col-6 row-2 col-m-12"></div>
			<div class="panel col-6 row-1 col-s-12"></div>
			<div class="panel col-6 row-1 col-s-12"></div>
			<div class="panel col-12 row-1"></div>
		</div>
		
		
		<ul class="galerie d-grid col-12 grid-cols-6 flow-dense">
			<li class="col-1">1</li>
			<li class="col-2">2</li>
			<li class="col-1">3</li>
			<li class="col-2">4</li>
			<li class="col-1">5</li>
			<li class="col-1">6</li>
			<li class="col-2">7</li>
			<li class="col-3">8</li>
			<li class="col-2">9</li>
			<li class="col-1">10</li>
		</ul>
		
		<div class="d-grid col-12 grid-cols-4 grid-rows-4">
			<div class="panel blue row-start-1 row-end-4 col-start-2 col-end-4 row-start-s-1 row-end-s-5 col-start-s-1 col-end-5"></div>
			<div class="panel orange row-start-2 row-end-5 col-start-3 col-end-5 row-start-s-2 row-end-s-4 col-start-s-2 col-end-s-4"></div>
		</div>
	</div>



</body>
</html>