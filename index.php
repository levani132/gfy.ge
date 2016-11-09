<?php include "config.php" ?>
<?php include "changeLan.php" ?>
<?php include "php/functions.php" ?>
<?php $lan = getLan(); ?>
<?php if($lan == 'rus' || $lan == 'eng') header("Location: /$lan/?lan=$lan"); ?>
<?php $curPage = curPage(); ?>
<?php $curSubPage = subPage(); ?>
<?php include "php/header.php"; ?>
<?php render($curPage, $curSubPage); ?>
<?php include "php/footer.php"; ?>