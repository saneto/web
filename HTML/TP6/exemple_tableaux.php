<html>
<head>
<title> Exemple de tableau </title>
</head>
<body>
<?php
$exemple[0]='valeur 0';
$exemple[1]='valeur 1';
$exemple[]='valeur 2';
$exemple2 = array ('val 0','val 1','val 2');
$exemple3 = array (1=> 'val b', 2=> 'val c', 3=> 'val d');

for($i=0;$i<=2;$i++){
echo 'compteur : '.$i.'<br />';
echo 'valeur exemple : '.$exemple[$i].'<br />';
echo 'valeur exemple2 : '.$exemple2[$i].'<br />';
echo 'valeur exemple3 : '.$exemple3[$i+1].'<br />';
echo '<br />';
}
?>
</body>
</html>