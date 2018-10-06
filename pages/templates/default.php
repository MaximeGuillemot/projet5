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
                    <li id="nav_items" class="nav_items_blank">
                        <span>Items</span>
                    </li>
                    <li id="nav_creatures" class="nav_creatures_blank">
                        <span>Creatures</span>
                    </li>
                    <li id="nav_npcs" class="nav_npcs_blank">
                        <span>NPCs</span>
                    </li>
                    <li id="nav_clans" class="nav_clans_blank">
                        <span>Clans</span>
                    </li>
                    <li id="nav_spells" class="nav_spells_blank">
                        <span>Spells</span>
                    </li>
                    <li id="nav_flags" class="nav_flags_blank">
                        <span>Flags</span>
                    </li>
                </ul>
			</nav>

			<main class="flex">
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
		<script src="../public/js/Table.js"></script>
		<script src="../public/js/main.js"></script>
	</body>
</html>
