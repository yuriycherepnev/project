<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lemon</title>
	<link rel="shortcut icon" href="<?php echo URL; ?>public/img/icon.png" type="img/png">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/main.css">
</head>
<body class="body">
	<div class="logo">
		<img src="<?php echo URL; ?>public/img/logo.png" alt="Lemon">
    </div>
	<nav class="container nav flex-row space-evenly align-items-center">
		<img src="<?php echo URL; ?>public/img/logo.png" alt="Lemon">
		<a href="home">home</a>
		<div class="drop"><a href="#">recipes</a>
		    <div class="drop-menu">
		      <a href="popular">popular</a>
		      <a href="#">quick&easy</a>
	  		  <a href="#">healthy</a>
		      <a href="#">meat&fish</a>
		      <a href="#">bakery</a>
	  	    </div>
	  	</div>
		<a href="#">reviews</a>
		<a href="chefs">chefs</a>
		<a href="#auth" id="my_page">my page</a>
		<form class="search" action="" method="get">
          <input name="s" placeholder="find a recipe" type="search">
          <button type="submit"></button>
        </form>
	</nav>