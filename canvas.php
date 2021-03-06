<!DOCTYPE html>
<html lang="en">
<head>
	<title>180 Projects :: Canvas</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Titan+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/canvas.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>180 Websites - 180 Days<h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="http://180project.brendanoxford.com/">Home</a></li>
				<li><a href="http://180sites.brendanoxford.com/">Blog</a></li>
				<li><a href="https://github.com/oxfordbr/180Sites">Github Repo</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Day 2</h2>
			<h3>HTML5 Canvas</h3>
			<canvas id="canvas" width="500" height="250"></canvas>
		</div>
		<div id="footer">
			<p>&copy; <?php echo date('Y'); ?> - Brendan Oxford <a href="http://www.brendanoxford.com">www.brendanoxford.com</a></p>
		</div>
	</div>
<script type="text/javascript">
	window.onload = draw();
</script>
</body>
</html>