<!DOCTYPE HTML>
<html>
<head>
	<title>Sample</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="stylesheets/w3.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<header>
		<img src="logo.png" class="logo">
		<table class="headerTable">
			<tr>
				<td style="">
					<ul class="navigation">
						<!-- 1 -->
						<li 
						<?php 
						$class = "home inline nav link";
						if($curPage == 'home') 
							echo 'class="'.$class.' cur underline"'; 
						else 
							echo 'class="'.$class.'"';
						?>
						>
							<a <?php echo 'href="?lan='.$lan.'"'?>>Home</a>
						</li>

						<!-- 2 -->
						<li 
						<?php 
						$class = "geo inline nav link";
						if($curPage == 'geo') 
							echo 'class="'.$class.' cur underline"'; 
						else 
							echo 'class="'.$class.'"';
						?>
						>
							<a href="#">Georgia</a>
							<?php 
							addSubMenu(['facts', 'cuis', 'wine'], 'geo'); 
							?>
						</li>

						<!-- 3 -->
						<li 
						<?php 
						$class = "instr inline nav link";
						if($curPage == 'instr') 
							echo 'class="'.$class.' cur underline"'; 
						else 
							echo 'class="'.$class.'"';
						?>
						>
							<a href="#">Instructions</a>
							<?php 
							addSubMenu(['visa', 'duty', 'border', 'railway', 'car'], 'instr'); 
							?>
						</li>

						<!-- 4 -->
						<li 
						<?php 
						$class = "tours inline nav link";
						if($curPage == 'tours') 
							echo 'class="'.$class.' cur underline"'; 
						else 
							echo 'class="'.$class.'"';
						?>
						>
							<a <?php echo 'href="?lan='.$lan.'&cur=tours"'?>>Tours</a>
						</li>

						<!-- 5 -->
						<li 
						<?php 
						$class = "advs inline nav link";
						if($curPage == 'advs')
							echo 'class="'.$class.' cur underline"'; 
						else
							echo 'class="'.$class.'"';
						?>
						>
							<a <?php echo 'href="?lan='.$lan.'&cur=advs"'?>>Adventures</a>
						</li>
					</ul>
					<script type="text/javascript" src="js/header.js"></script>
				</td>
				<td>
					<ul class="lan">
						<li>GEO</li>
						<li>ENG</li>
						<li>RUS</li>
					</ul>
				<td>
			</tr>
		</table>
	</header>
	<div class="content">