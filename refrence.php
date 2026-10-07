<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A hivatkozási események tesztelése a PHP-ban</title>
</head>
<body>
<h1>Köszönjük, hogy ellátogattál hozzánk!</h1>
<?php
$content = $_GET['content'];
echo "<h2>Most épp a $content szakaszban vagy</h2>\n";
?>
</body>
</html>