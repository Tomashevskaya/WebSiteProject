<?php
require_once('config/config.php')
?>
<!Doctype html>
<html lang='ru'>
<head>
<meta charset='utf-8'>
<title>Главная страница</title>
<meta name='description' content='1-2-3 предложения'>
<meta name='keywords' content='3-10 ключевые слова'>
<meta name='author' content='Tomashevskaya'>
<link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href='media/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id='header'>
	<h1 id='logotext'>Интернет-магазин Котопёс</h1>
	<img src='media/img/logo5.png' id='logo'>
	<br style='clear:both'/>
	<div id='auth'>
		<a href='/register.php'>Регистрация</a> | <a href='/login.php'>Вход</a>
	</div>
</div>
<div id='menu'>
<a href='/'>Главная</a>
<a href='index.php?url=about'>О компании</a>
<a href='index.php?url=services'>Услуги</a>
<a href='/products.php'>Товары</a>
<a href='index.php?url=contacts'>Контакты</a>
</div>
<div id = "content">
<div class="container">
  <div class="row">
    <div class="col-sm " >
		<div class="d-grid gap-2 col-6 mx-auto">
		  <button type="button" class="btn btn-outline-primary">Primary</button>
			<button type="button" class="btn btn-outline-secondary">Secondary</button>
			<button type="button" class="btn btn-outline-success">Success</button>
		</div>
	</div>
    <div class="col-sm border" >
      
   