<?php
// acerta vari�veis globais para v�rias vers�es do PHP
extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_SKIP, 'p');

$im = imagecreatefrompng ("$p_filename");
imagepng ($im);
?>

