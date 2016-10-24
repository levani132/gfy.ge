<?php include "php/functions.php" ?>
<?php $curPage = curPage(); ?>
<?php $curSubPage = subPage(); ?>
<?php $lan = getLan(); ?>
<?php include "php/header.php"; ?>
<?php render($curPage, $curSubPage); ?>
<?php include "php/footer.php"; ?>