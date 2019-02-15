<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'header.php'; ?>  

<?php

print("<h1>Hello world!</h1>");

define("TEXT", "Hello world!");
print("<h1>".TEXT."</h1>");

$stringOfText = "Learning PHP";
$stringOfText = "Hello world!";

echo("<h1>$stringOfText</h1>");

$stringHello = "Hello";
$stringWorld = " World!";

echo("<h1>$stringHello $stringWorld</h1>");

$array = array("Hello", " World!");

echo("<h1>$array[0] $array[1]</h1>");

?>

<?php include 'footer.php'; ?>  
</body>

<style>

footer
{
    bottom: 0;
}
</style>
</html>