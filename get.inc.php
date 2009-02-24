
<?php

function replacegeneric($frase, $libb, $title)
{
	$frase = str_replace($title, $libb[$title][0], $frase);
	return $frase;
}

// delete, replace
function get($libb,$from)
{	
	$i = rand(0,count($libb[$from])-1);
	$frase = $libb[$from][$i];
	
	array_splice($libb[$from],$i,1);

	$frase = replacegeneric($frase, $libb, "EDUARD");
	$frase = replacegeneric($frase, $libb, "CASIELLES");
	$frase = replacegeneric($frase, $libb, "AHEDO");
	$frase = replacegeneric($frase, $libb, "JESUS");
	$frase = replacegeneric($frase, $libb, "ISA");
	$frase = replacegeneric($frase, $libb, "LOSPUTOSAMOS");
	$frase = replacegeneric($frase, $libb, "LOSNOVATOS");
	$frase = replacegeneric($frase, $libb, "ELCARRO");
	$frase = replacegeneric($frase, $libb, "ELMOVIL");
	$frase = replacegeneric($frase, $libb, "UNABIRRA");
	$frase = replacegeneric($frase, $libb, "MADRID");
	$frase = replacegeneric($frase, $libb, "ELCHAMI");
	$frase = replacegeneric($frase, $libb, "LAETSIA");
	$frase = replacegeneric($frase, $libb, "LACAFETERIA");
	$frase = replacegeneric($frase, $libb, "ARMA");
	$frase = replacegeneric($frase, $libb, "COSA");
	$frase = replacegeneric($frase, $libb, "COLEGIAL");
	$frase = replacegeneric($frase, $libb, "DIRECTOR");

	$frase = str_replace("á", "&aacute;", $frase);
	$frase = str_replace("é", "&eacute;", $frase);
	$frase = str_replace("í", "&iacute;", $frase);
	$frase = str_replace("ó", "&oacute;", $frase);
	$frase = str_replace("ú", "&uacute;", $frase);
	$frase = str_replace("Á", "&Aacute;", $frase);
	$frase = str_replace("É", "&Eacute;", $frase);
	$frase = str_replace("Í", "&Iacute;", $frase);
	$frase = str_replace("Ó", "&Oacute;", $frase);
	$frase = str_replace("Ú", "&Uacute;", $frase);
	$frase = str_replace("ñ", "&ntilde;", $frase);
	$frase = str_replace("Ñ", "&Ntilde;", $frase);
	$frase = str_replace("¿", "&iquest;", $frase);
	$frase = str_replace("¡", "&iexcl;", $frase);
	

	if(!array_key_exists("end",$libb)) print $frase." ";
	
	if($frase[strlen($frase)-1] == ']') $libb["end"] = array("end");
	return $libb;
}

function getr($libb,$from)
{	
	$i = rand(0,count($libb[$from])-1);
	$frase = $libb[$from][$i];
	
	return $frase;
}

function init($libb,$from,$to)
{	
	$i = rand(0,count($libb[$from])-1);
	$frase = $libb[$from][$i];

	array_splice($libb[$from],$i,1);
	
	$libb[$to] = array($frase);

	return $libb;
}

?>
