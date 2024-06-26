<?php

    $inno="Fratelli d'Italia,
    l'Italia s'è desta,
    dell'elmo di Scipio
    s'è cinta la testa.
    Dov'è la Vittoria?
    Le porga la chioma,
    ché schiava di Roma
    Iddio la creò.
    Fratelli d'Italia,
    l'Italia s'è desta,
    dell'elmo di Scipio
    s'è cinta la testa.
    Dov'è la Vittoria?
    Le porga la chioma,
    ché schiava di Roma
    Iddio la creò.
    Stringiamci a coorte,
    siam pronti alla morte.
    Siam pronti alla morte,
    l'Italia chiamò.
    Stringiamci a coorte,
    siam pronti alla morte.
    Siam pronti alla morte,
    l'Italia chiamò!";

   $inno = str_ireplace( $_GET["censura"] , "***" , $inno );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<p> <?php echo $inno ?> <br> <?php echo "lunghezza paragrafo:" . strlen($inno) ?> </p>

<form action="index.php" method="GET">
    
<input type="text"  name="censura" id="censura" placeholder="scrivi la parola da censurare">
<button type="submit">avvia la censura</button>
    
</form>

</body>
</html>