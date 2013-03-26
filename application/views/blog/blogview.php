<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title><?=$title?></title>
		<meta name="description" content="" />
		<meta name="author" content="Miqueias" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>

	<body>
		<div>
			<header>
				<h1><?=$heading?></h1>
			</header>
			<nav>
					<a href="/ci/blog">Home</a> | 
					<a href="/contact">Sobre</a> |
					<a href="/contact">Portifolio</a> |  
					<a href="/contact">Contato</a>
			</nav>

			<div>
				<p><?=$message?></p>
			</div>

			<footer>
				<p>
					&copy; Copyright  by Miqueias
				</p>
			</footer>
		</div>
	</body>
</html>
<? echo $this->benchmark->elapsed_time();?>
<br/>
<? echo $this->benchmark->memory_usage();?>
<br>
<?php foreach ($dados as $row) {
	echo $row."<br/>";
}
?>