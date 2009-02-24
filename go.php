
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<font class="normal"><br/><br/>
<?php

include("lib.inc.php");
include("get.inc.php");

$lib = init($lib, "HOMBRE", "EDUARD");
$lib = init($lib, "HOMBRE", "CASIELLES");
$lib = init($lib, "HOMBRE", "AHEDO");
$lib = init($lib, "HOMBRE", "JESUS");
$lib = init($lib, "ISA", "ISA");

$lib = init($lib, "LOSALGO", "LOSNOVATOS");
$lib = init($lib, "LOSALGO", "LOSPUTOSAMOS");

$lib = init($lib, "ELCARRO", "ELCARRO");
$lib = init($lib, "ELMOVIL", "ELMOVIL");
$lib = init($lib, "UNABIRRA", "UNABIRRA");

$lib = init($lib, "MADRID", "MADRID");
$lib = init($lib, "ELCHAMI", "ELCHAMI");
$lib = init($lib, "LAETSIA_", "LAETSIA");
$lib = init($lib, "LAETSIA_", "LACAFETERIA");

$lib = init($lib, "ARMA", "ARMA");
$lib = init($lib, "COSA", "COSA");
$lib = init($lib, "RANGO", "COLEGIAL");
$lib = init($lib, "RANGO", "DIRECTOR");

srand((double)microtime()*1000000);
/*
print "> Eduard: ".getr($lib,"EDUARD")."<br/>";
print "> Casielles: ".getr($lib,"CASIELLES")."<br/>";
print "> Ahedo: ".getr($lib,"AHEDO")."<br/>";
print "> Jesús: ".getr($lib,"JESUS")."<br/>";
print "> Isa: ".getr($lib,"ISA")."<br/>";
print "> Los Putos Amos: ".getr($lib,"LOSPUTOSAMOS")."<br/>";
print "> Los Novatos: ".getr($lib,"LOSNOVATOS")."<br/>";
print "> El carro: ".getr($lib,"ELCARRO")."<br/>";
print "> El móvil: ".getr($lib,"ELMOVIL")."<br/>";
print "> Una birra: ".getr($lib,"UNABIRRA")."<br/>";
print "> Madrid: ".getr($lib,"MADRID")."<br/>";
print "> El Chami: ".getr($lib,"ELCHAMI")."<br/>";
print "> La ETSIA: ".getr($lib,"LAETSIA")."<br/>";
print "> La cafetería: ".getr($lib,"LACAFETERIA")."<br/>";
print "> Arma: ".getr($lib,"ARMA")."<br/>";
print "> Cosa: ".getr($lib,"COSA")."<br/>";
print "> Colegial: ".getr($lib,"COLEGIAL")."<br/>";
print "> Director: ".getr($lib,"DIRECTOR")."<br/>";
*/
print "<br/>";

switch(rand(1,4))
{
	case 1:
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		print "<br/><br/>";
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		break;
	case 2:
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		print "<br/><br/>";
		$lib = get($lib,"pre-dialogo"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		print "<br/><br/>";
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		break;
	case 3:
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		print "<br/><br/>";
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		print "<br/><br/>";
		$lib = get($lib,"pre-dialogo"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		break;
	default:
		$lib = get($lib,"pre-dialogo"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		print "<br/><br/>";
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-esc");
		print "<br/><br/>";
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		break;	
}

print "<br/><br/>";

switch(rand(1,2))
{
	case 1:
		$lib = get($lib,3301);
		$lib = get($lib,3302);
		$lib = get($lib,3303);
		$lib = get($lib,3304);
		$lib = get($lib,3305);
		$lib = get($lib,3306);
		$lib = get($lib,3307);
		$lib = get($lib,3308);
		$lib = get($lib,3309);
		echo "<br/>";
		$lib = get($lib,"intro-esc");
		$lib = get($lib,"intro-pers");
		$lib = get($lib,"pre-dialogo"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		$lib = get($lib,"1a"); echo '<br/>';
		$lib = get($lib,"2a"); echo '<br/>';
		echo "<br/><br/>";
		$lib = get($lib,3310);
		$lib = get($lib,3311);
		$lib = get($lib,3312);
		$lib = get($lib,3313); echo "<br/><br/>";
		$lib = get($lib,"intro-esc");
		$lib = get($lib,3314); echo "<br/><br/>";
		$lib = get($lib,3315); echo "<br/><br/>";
		$lib = get($lib,3316); echo "<br/>";
		$lib = get($lib,3317);
		$lib = get($lib,3318); echo "<br/>";
		$lib = get($lib,3319); echo "<br/><br/>";
		$lib = get($lib,3320); echo "<br/><br/>";
		$lib = get($lib,3321); echo "<br/><br/>";
		break;
	default:
		for($i = 1101; $i <= 1131; $i++)
		{
			$lib = get($lib,$i); echo "<br/><br/>";
		}
		break;
	}
		




?>
<br/><br/>
</font>
</body>
</html>