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
    
    <ul>
        <a href="lab2.php"><span>Lab 2</span></a>
        <a href="lab3.php"><span>Lab 3</span></a>
        <a href="lab4.php"><span>Lab 4</span></a>
        <a  href="time.php"><span>Time</span></a>
    </ul>

</body>

<style>

html, body
{
    margin: 0;
    padding: 0;
}

ul
{
    margin: 0;
    padding: 0;
    position: relative;
    text-decoration: none;
    list-style-type: none;
    background-color: gray;
    opacity: 0.7;
    width: 100%;
    top: 0;
}

ul > a
{
    display: inline-block;
    width: 100px;
    height: 50px;
    background-color: black;
    opacity: 0.5;
    color: white;
    text-align: center;
    position: relative;
    left: 50px;
}


a > span
{
    position: relative;
    top: 14px;
    user-select: none;
}
</style>
</html>