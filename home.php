<!-- <div class="slideShow">
	<div class="w3-content w3-display-container" style="width:100%;">
		<img class="mySlides" src="img_nature_wide.jpg" style="width:100%">
		<img class="mySlides" src="img_fjords_wide.jpg" style="width:100%">
		<img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
		<div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
			<div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
			<div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
		</div>
	</div>
</div> -->
<div class="slideShow">
<?php 
	$sql = mysqli_execute($db, "SELECT * FROM slider_images ORDER BY sort ASC");
	echo "<p>".$sql."</p>"
	while($row = mysqli_fetch_array($sql))
	{
		$link = "img/slideshow/".$row["image"];
?>

		<img class="mySlides" style="background-image: url('<?=$base_url.$link;?>')">

<?php 
	} 
?>
<a class="lefArrow" onclick="plusDivs(-1)">&#10094;</a>
<a class="rightArrow" onclick="plusDivs(+1)">&#10095;</a>
</div>

<script src="js/slideshow.js"></script>
<main>
</main>