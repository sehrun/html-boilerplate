<?php
// header("HTTP/1.0 404 Not Found");
?>
<!doctype html>
<html lang="ru">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>title</title> 


<!-- unnecessary -->
<meta name="description" content="xxx">
<!-- suggest surrounding user interface -->
<meta name="theme-color" content="#890c58">
<!-- Open Graph -->
<meta property="og:locale" content="ru_RU"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="xxx"/>
<meta property="og:description" content="xxx"/>
<meta property="og:url" content="https://xxx"/>
<meta property="og:site_name" content="xxx"/>
<meta property="og:image" content="https://xxx/og.png"/>
<!-- unnecessary -->


<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<?
$tempArr = ['https://fonts.gstatic.com/','https://use.fontawesome.com/'];
foreach($tempArr as $item){
?>
<link rel="preconnect" href="<?=$item?>" crossorigin>
<link rel="dns-prefetch" href="<?=$item?>">
<?}?>


<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

<link href="/assets/style.css?<?=date('his')?>" rel="stylesheet" />

<div class="hp1">
	<div class="hp2 cwidth">

	</div>
</div>






<script src="/assets/script.js?<?=date('his')?>"></script>

</html>

	
			

















