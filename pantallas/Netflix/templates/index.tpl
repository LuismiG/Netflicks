<!doctype html>
<html lang="es">
<head>
<meta charset="utf8" />
<title>Tienda ON-Line</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<script type="text/javascript">
function muestraMensaje(mensaje){
	if (mensaje!='')
		alert(mensaje);
}
</script>
</head>
<body onload="muestraMensaje('{$mensaje}');">
<header id="cabecera">
	<img src="imagenes/titulo.png" alt="Tienda" />
</header>
<section>
<!--<article id="navegacion">
	<div id="carrito">
		<img src="imagenes/basket.png" alt="carrito" class="alinea" />
		<a href="cesta.php">{$numero} productos</a>
	</div>
</article>-->
<article id="articulo">
{foreach from=$avideos item=avideo}
	<div class="flota">
	<a href="muestra.php?codigo={$avideo->codigo}" >
		<img src="{$avideo->baja}" alt="{$avideo->baja}" />
	</a>
	<br>
	{$avideo->precio}&euro;
	</div>
{/foreach}
</article>
</section>
<footer class="pie">
<a href="aviso.php" class="boton" >Aviso Legal</a>
</footer>
</body>
</html>