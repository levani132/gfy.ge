<!DOCTYPE HTML>
<html>
<head>
	<title>Sample</title>
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" type="text/css" href="stylesheets/w3.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
	<header>
		<img src="logo.png" class="logo">
		<div class="menuButton" onclick="toggleMenu();"></div>
		<table class="headerTable">
			<tr>
				<td>
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
							<a <?php echo 'href="/?lan='.$lan.'"'?>><?=HOME;?></a>
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
							<a href="#"><?=GEORGIA;?></a>
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
							<a href="#"><?=INSTR;?></a>
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
							<a <?php echo 'href="/?lan='.$lan.'&cur=tours"'?>><?=TOURS;?></a>
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
							<a <?php echo 'href="/?lan='.$lan.'&cur=advs"'?>><?=ADVS;?></a>
						</li>

						<!-- 6 -->
						<li 
						<?php 
						$class = "about inline nav link";
						if($curPage == 'about')
							echo 'class="'.$class.' cur underline"'; 
						else
							echo 'class="'.$class.'"';
						?>
						>
							<a <?php echo 'href="/?lan='.$lan.'&cur=about"'?>><?=ABOUT;?></a>
						</li>
					</ul>
				</td>
				<td>
					<ul class="lan">
						<li><a href="/?lan=1">GEO</a></li>
						<li><a href="/?lan=2">ENG</a></li>
						<li><a href="/?lan=3">RUS</a></li>
					</ul>
				</td>
				<td>
					<ul class="flags">
						<li><a href="/?lan=1"><img src="geo.png" width="22px" height="16px"></a></li>
						<li><a href="/?lan=2"><img src="eng.png" width="22px" height="16px"></a></li>
						<li><a href="/?lan=3"><img src="rus.png" width="22px" height="16px"></a></li>
					</ul>
				</td>
			</tr>
		</table>
		<ul class="mobileNav">
			<li class="link"><a href="#">
				მთავარი
			</a></li>
			<li class="link"><a href="#" onclick="toggleSubMenu('mgeo');">
				საქართველო
			</a><?php addSubMenu(["facts", "cuis", "wine"], "mgeo");?>
			</li>
			<li class="link"><a href="#" onclick="toggleSubMenu('minstr');">
				ინსტრუქციები
			</a><?php addSubMenu(["visa", "duty", "border", "railway", "car"], "minstr");?>
			</li>
			<li class="link"><a href="#">
				ტურები
			</a></li>
			<li class="link"><a href="#">
				თავგადასავლები
			</a></li>
			<li class="link"><a href="#">
				ჩვენს შესახებ
			</a></li>
		</ul>
		<script type="text/javascript" src="js/header.js"></script>
	</header>
	<div class="content">