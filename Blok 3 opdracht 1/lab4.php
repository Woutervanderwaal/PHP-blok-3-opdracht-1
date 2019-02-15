<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 4</title>
</head>
<body>

<?php include 'header.php'; ?>  
    
<?php
    define("START", "yatzee");
    define("SPELEN", true);
    define("TIJD", 2);

    switch(START)
    {
        case "schaken":
        echo("Je wilt schaken <br>");
        
        if(SPELEN == true)
        {
            echo("Hoe lang wil je spelen? <br>");
            if(TIJD == 2)
            {
                echo("Je wilt Schaken want je vindt zwart en wit leuk <br>");
            }
            else
            {
                echo("Je wilt schaken want je denkt slimmer dan mij te zijn <br>");
            }
            
        }

        else
        {
            if(TIJD == -1)
            {
                echo("Je wilt echt niet schaken <br>");
            }
            else
            {
                echo("Je wilt gewoon niet schaken <br>");
            }
        }
        break;

        case "monopoly":
        echo("Je wilt monopoly <br>");

        if(SPELEN == true)
        {
            echo("Hoe lang wil je spelen <br>");
            if(TIJD == 1)
            {
                echo("Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg <br>");
            }

            elseif(TIJD > 1)
            {
                echo("Je wilt monopoly spelen want je houd er van om iedereen blut ta maken <br>");
            }
        }

        else
        {
            if(TIJD == 2 or TIJD > 120)
            {
                echo("Je wilt Monopoly niet spelenwant je hebt geen zin in een spel van 2 uur <br>");
            }

            else
            {
                echo("Je wilt Monopoly niet spelen want je houd niet van hotels <br>");
            }
        }
        break;

        case "yatzee":
        echo("Je wilt Yathzee spelen <br>");

        if(SPELEN == true)
        {
            echo("Hoe lang wil je spelen <br>");
            if(TIJD > 15 And TIJD < 30)
            {
                echo("Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd <br>");
            }
            elseif(TIJD < 15 Or Tijd > 30)
            {
                echo("Je wilt Yathzee spelen want dat wind je gewoon leuk <br>");
            }
        }

        else
        {
            if(TIJD > 100)
            {
                echo("Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien <br>");
            }

            elseif(TIJD <= 100)
            {
                echo("Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen <br>");
            }
        }
        break;
    }

?>



<?php include 'footer.php'; ?>  

<style>
    footer
    {
        bottom: 0;
    }
</style>
</body>
</html>