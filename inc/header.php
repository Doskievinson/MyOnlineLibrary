<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Online Library</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">


<div class="wrapper">
<h1 class="branding title"><a href="#">My online Library</a></h1>
<ul class="nav">
<li class="books<?php if ($section =="books") { echo " on"; } ?>"><a href="catalog.php?cat=books">Books</a></li>
<li class="movies<?php if ($section =="movies") { echo " on"; } ?>">"><a href="catalog.php?cat=movies">Movies</a></li>
<li class="music<?php if ($section =="music") { echo " on"; } ?>">"><a href="catalog.php?cat=music">Music</a></li>
<li class="suggest<?php if ($section =="suggest") { echo " on"; } ?>">"><a href="catalog.php?cat=suggest">Suggest</a></li>
	</ul>
	</div>
	</div>
<div id="content">