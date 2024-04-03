<?php

$owoce = array("jablko", "banan", "pomarancza");

foreach ($owoce as $owoc) {
    $dlugosc = strlen($owoc);
    echo "Owoc: ";
    for ($i = $dlugosc - 1; $i >= 0; $i--) {
        echo $owoc[$i];
    }
    echo "<br>";

    
    if ($owoc[0] == 'p' || $owoc[0] == 'P') {
        echo "Rozpoczyna się od litery 'p'.";
    } else {
        echo "Nie rozpoczyna się od litery 'p'.";
    }
    echo "<br><br>";
}
?>
