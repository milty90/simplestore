<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
</head>
<body>
<h1>Menu</h1>
<?php
$content = htmlspecialchars($_GET['content'], ENT_QUOTES, "UTF-8");
echo "<p>Currently in the $content section</p>\n";
?>
</body>
</html>