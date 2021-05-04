<?php
require_once('config/config.php')
?>

<head>
    <title>Главная страница</title>
	<link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="media/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php

echo "<table border='1' cellpadding='0' cellspacing='0' width='100%'>

<tr>
<th width='30%'>Лого</th>
<th width='70%'>Название</th>
</tr>
<tr>
<td width='20%'>
<ul>
<li><a href='index.php?p=1' title='Ссылка 1'>1)Главная</a></li>
<li>2)Товар</li>
<ul><li><a href='index.php?p=3' title='Ссылка 2'>Категория 1</a></li></ul>
<ul><li><a href='/products.php'>Категория 2</li></ul>
<ul><li>Категория 3</li></ul>
</li>
<li><a href='index.php?url=contacts' title='Ссылка 3'>3)Контакты</a></li>
</ul>
</td>
<td width='80%' align='left'>";
?>
<div class="container">
  <div class="row">
    <div class="col-sm border" >
      <button type="button" class="btn btn-primary">Primary</button>
    </div>
    <div class="col-sm border" >
      
   