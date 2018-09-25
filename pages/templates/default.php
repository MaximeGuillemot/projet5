<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<title>T5C Editor</title>

		<link rel="icon" sizes="16x16" href="images/favicon.ico" />
		<link href="css/main_styles.css" type="text/css" rel="stylesheet" media="all" />
	</head>

	<body>
		<header>
			<h1><a href="index.php">T5C Editor</a></h1>
		</header>

		<div id="wrapper" class="flex">
			<nav>
				<a href="index.php?p=items">
					<div id="nav_items"></div>
					<p id="items_desc">Items</p>
				</a>
				<a href="index.php?p=creatures">
					<div id="nav_creatures"></div>
					<p id="creatures_desc">Creatures</p>
				</a>
				<a href="index.php?p=npcs">
					<div id="nav_npcs"></div>
					<p id="npcs_desc">NPCs</p>
				</a>
				<a href="index.php?p=clans">
					<div id="nav_clans"></div>
					<p id="clans_desc">Clans</p>
				</a>
				<a href="index.php?p=spells">
					<div id="nav_spells"></div>
					<p id="spells_desc">Spells</p>
				</a>
				<a href="index.php?p=flags">
					<div id="nav_flags"></div>
					<p id="flags_desc">Flags</p>
				</a>
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
