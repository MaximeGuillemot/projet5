<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<title>T5C Editor</title>

		<link rel="icon" sizes="16x16" href="images/favicon.ico" />
        <link href="css/main_styles.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/items_styles.css" type="text/css" rel="stylesheet" media="all" />
	</head>

	<body>
		<header>
			<h1><a href="index.php">T5C Editor</a></h1>
		</header>

		<div id="wrapper" class="flex">
			<nav>
                <ul>
                    <li id="nav_items">
                        <a href="index.php?p=items">Items</a>
                    </li>
                    <li id="nav_creatures">
                        <a href="index.php?p=creatures">Creatures</a>
                    </li>
                    <li id="nav_npcs">
                        <a href="index.php?p=npcs">NPCs</a>
                    </li>
                    <li id="nav_clans">
                        <a href="index.php?p=clans">Clans</a>
                    </li>
                    <li id="nav_spells">
                        <a href="index.php?p=spells">Spells</a>
                    </li>
                    <li id="nav_flags">
                        <a href="index.php?p=flags">Flags</a>
                    </li>
                </ul>
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

		<script src="../public/js/ajax.js"></script>
		<script src="../public/js/Item.js"></script>
		<script src="../public/js/API.js"></script>
	</body>
</html>
