<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$url = "http://www.xpertdeveloper.com/2013/05/check-url-existence-with-php/";
//$url = "foobarbaz";

//$regex = '/(www)/';
/*
$protocolo = explode(":" || ".", $url);
$dominio = explode("//", $url);

//preg_match($regex, $url, $result);
print_r($protocolo);
print_r($dominio);
*/
print_r(parse_url($url));
$url_parsed = parse_url($url);
echo "<br>";
echo "<br>";
echo "The URL domain is " . $url_parsed['host'];

echo "<br>";
$values =array(8, 10, 9, 6, 7, 9);
echo "<br>Mínimo " . min($values);
echo "<br>Máximo " . max($values);
echo "<br>Elementos " . count($values);
echo "<br>A média é " . array_sum($values)/count($values);

echo "<br>";
echo "<br>Teste de string para array";
$inteiroscomostring = "1,2,3,4,6,9";
$integerIDs = array_map('intval', explode(',', $inteiroscomostring));
echo "<br>";
print_r ($integerIDs);

?>

</body>
</html>