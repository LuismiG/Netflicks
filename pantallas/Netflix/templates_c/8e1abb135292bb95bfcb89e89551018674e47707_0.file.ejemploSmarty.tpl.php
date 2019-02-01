<?php
/* Smarty version 3.1.33, created on 2019-01-30 10:11:58
  from 'G:\Users\DAW2.Lenovo-PC.001\Desktop\UwAmp\UwAmp\pantallas\ejemploSmarty\templates\ejemploSmarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c516a5e3ffed9_83164142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1abb135292bb95bfcb89e89551018674e47707' => 
    array (
      0 => 'G:\\Users\\DAW2.Lenovo-PC.001\\Desktop\\UwAmp\\UwAmp\\pantallas\\ejemploSmarty\\templates\\ejemploSmarty.tpl',
      1 => 1548837836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c516a5e3ffed9_83164142 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo Smarty</title>
		<meta charset="utf-8" />
		<?php echo '<script'; ?>
 type="text/javascript">
            <?php echo $_smarty_tpl->tpl_vars['miFuncion']->value;?>

            function hola(){
                alert("hola");
            }
        <?php echo '</script'; ?>
>
	</head>
	<body onload="hola();">
	(if $par_s eq "par")
	    <span style="color:red;">El valor a mostrar es ($valor)</span>
	        (else)
	        <span style="color:green;">El valor a mostrar es ($valor)</span>
    (/if)
	</body>
</html><?php }
}
