<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Tienda ON-Line</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<header id="cabecera">
	<img src="imagenes/titulo.png" alt="Tienda" />
</header>
<section>
<article id="navegacion">
	<a href="index.php"><img src="imagenes/volver.gif" alt="volver" /></a>
	<div id="carrito">
		<img src="imagenes/basket.png" alt="carrito" class="alinea" />
		<a href="cesta.php">{$numero} productos</a>
	</div>
</article>
<article id="articulo" class="centrar">
<!--<img src="{$avideo->baja}" alt="{$avideo->codigo}" />
<p><span class="grande">Titulo: {$avideo->titulo}</span></p>
<p><span class="grande">Sinopsis: {$avideo->sinopsis}</span></p>
<p><span class="grande">Precio: {$avideo->precio}&euro;</span></p>
<p>
	<form action="anyadir.php" method="post">
	<input type="hidden" name="codigo" value="{$avideo->codigo}" />
	<input type="image" src="imagenes/botoncomprar.png" alt="añadir al carrito" />
	</form>
</p>-->
</article>
</section>
</body>
</html>