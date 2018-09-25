<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<title>T5C Editor</title>

		<link rel="icon" sizes="16x16" href="images/favicon.ico" />
		<link href="css/styles.css" type="text/css" rel="stylesheet" media="all" />
	</head>

	<body>
		<header>
			<h1><a href="index.php">T5C Editor</a></h1>
		</header>

		<div id="wrapper" class="flex">
			<nav>
				
			</nav>

			<main>
				<?php 
					if(!empty($content))
					{
						echo $content;
					}
					else
					{
						echo '<p>The page doesn\'t exist.</p>';
					}
				?>
			</main>
		</div>
		
		
		<footer>

		</footer>
	</body>
</html>
