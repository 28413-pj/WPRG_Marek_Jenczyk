<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $ilosc_osob = $_POST['ilosc_osob'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    $data_pobytu = $_POST['data_pobytu'];
    $godzina_przyjazdu = $_POST['godzina_przyjazdu'];
    $dostawka_dla_dziecka = isset($_POST['dostawka_dla_dziecka']) ? "Tak" : "Nie";
    $udogodnienia = isset($_POST['udogodnienia']) ? implode(", ", $_POST['udogodnienia']) : "Brak";

    // Szablon HTML
    $szablon = "
    <h2>Podsumowanie rezerwacji</h2>
    <p><strong>Ilość osób:</strong> $ilosc_osob</p>
    <p><strong>Imię:</strong> $imie</p>
    <p><strong>Nazwisko:</strong> $nazwisko</p>
    <p><strong>Adres:</strong> $adres</p>
    <p><strong>E-mail:</strong> $email</p>
    <p><strong>Data pobytu:</strong> $data_pobytu</p>
    <p><strong>Godzina przyjazdu:</strong> $godzina_przyjazdu</p>
    <p><strong>Dostawka dla dziecka:</strong> $dostawka_dla_dziecka</p>
    <p><strong>Udogodnienia:</strong> $udogodnienia</p>
    ";


    if ($ilosc_osob > 1) {
        $szablon .= "<h3>Dane dodatkowych osób:</h3>";
        for ($i = 2; $i <= $ilosc_osob; $i++) {
            $szablon .= "<fieldset>
                            <legend>Dane osoby $i</legend>
                            <label for='imie$i'>Imię:</label>
                            <input type='text' name='imie$i' id='imie$i' required>
                            <br>
                            <label for='nazwisko$i'>Nazwisko:</label>
                            <input type='text' name='nazwisko$i' id='nazwisko$i' required>
                        </fieldset>";
        }
    }

    // Wyświetlenie szablonu HTML
    echo $szablon;
}
?>
