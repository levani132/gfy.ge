<?php 

	/* Includes file, while passing map of string variables. */
	function includeWithVars($vars, $url){
		include $url;
	}

	/* Returns curent page code. */
	function curPage(){
		if(!array_key_exists('cur', $_GET))
			return 'home';
		return $_GET['cur'];
	}

	/* Returns curent subpage code. */
	function subPage(){
		if(!array_key_exists('sub', $_GET))
			return 'index.php';
		return $_GET['sub'].'.php';
	}

	/* Includes curent page php file. */
	function render($curPage, $subPage){
		if($curPage == 'home')
			include "home.php";
		else 
			include 'pages/'.$curPage.'/'.$subPage;
	}

	/* Returns current language. */
	function getLan(){
		if(!array_key_exists('lan', $_GET))
			return 'geo';
		return $_GET['lan'];
	}

	/* Subpage codes mapped with names in georgian. */
	$subPagesgeo = [
		"facts" => '50 ფაქტი საქართველოზე',
		"cuis" => 'ქართული სამზარეულო',
		"wine" => 'საქართველო და ღვინო',
		"visa" => 'Виза в Грузию',
		"duty" => 'Таможенные правила',
		"border" => 'Пересечение границы',
		"railway" => 'Железная дорога в Грузии',
		"car" => 'Путешествующим на автомобиле'
	];

	/* Subpage codes mapped with names in russian. */
	$subPagesrus = [
		"facts" => '50 ფაქტი საქართველოზე',
		"cuis" => 'ქართული სამზარეულო',
		"wine" => 'საქართველო და ღვინო',
		"visa" => 'Виза в Грузию',
		"duty" => 'Таможенные правила',
		"border" => 'Пересечение границы',
		"railway" => 'Железная дорога в Грузии',
		"car" => 'Путешествующим на автомобиле'
	];

	/* Subpage codes mapped with names in russian. */
	$subPageseng = [
		"facts" => '50 ფაქტი საქართველოზე',
		"cuis" => 'ქართული სამზარეულო',
		"wine" => 'საქართველო და ღვინო',
		"visa" => 'Виза в Грузию',
		"duty" => 'Таможенные правила',
		"border" => 'Пересечение границы',
		"railway" => 'Железная дорога в Грузии',
		"car" => 'Путешествующим на автомобиле'
	];

	/* Adds submenu bar for id navigation link. */
	function addSubMenu($arr, $id){
		global $subPagesgeo;
		global $subPageseng;
		global $subPagesrus;
		global $lan;
		if($lan == "eng")
			$pages = $subPageseng;
		else if($lan == "rus")
			$pages = $subPagesrus;
		else
			$pages = $subPagesgeo;
		$str = "<ul id = '$id' class='subMenu'>";
		foreach($arr as $li){
			$str .= "<li class='link'>
			<a href='?lan=$lan&cur=$id&sub=$li'>
			$pages[$li]
			</a>
			</li>";
		}
		$str .= "</ul>"; 
		echo $str;
	}
?>