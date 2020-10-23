<?php include 'templates/header.php'; ?>

<div class="main">
    <p>
        <?php
        $countrys = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

        $userInput = $_POST["countryName"];
        if (!array_key_exists($_POST["countryName"], $countrys)) {

            echo "Invalid input, the first letter must be upper case, try again.";
        } else {
            echo ("The capital of " . $_POST["countryName"] . " is : " . $countrys[$_POST["countryName"]]);
        }
        // check if user does not miss press submit
        if (empty($_POST["countryName"])) {
            header("Location: forms.php?forms=empty ");
            exit();
        }
        ?>.
    </p>
    <button class="button"><a href="forms.php"> Choose Again</a></button>
</div>
<?php include 'templates/footer.php'; ?>