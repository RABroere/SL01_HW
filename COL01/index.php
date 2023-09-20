<!DOCTYPE html>
<html>
<head>
    <title>Mijn Website</title>
</head>
</html>



<?php
// Voornaam string (1)
$name = "Robin";
//Achternaam string (2)
$lastName = "Broere";
//Leeftijd interger (3)
$age = 18;
//Lengte in meter float (4)
$heightM = 1.84;
//Email string (5)
$email = "broere.robin@gmail.com";
//Heeft een vriendin? Boolean (6)
$hasGirlfriend = true;
//Familieleden array (7)
$family = ["Ineke", "Lennart", "Vera"];
//Woonplaats string (8)
$livingPlace = "harderwijk";
//Transport string (9)
$wayOfTransport = "bus";
//reistijd in minuten int (10)
$travelTimeM = 70;

//intro over mijzelf
echo
"Hallo mijn naam is $name $lastName, <br>
Ik ben $age jaar oud en $heightM meter lang<br>
Mijn email adres is $email<br>";

//ternary of ik wel/niet een vriendin heb
echo ($hasGirlfriend) ?  "Ik heb een vriendin<br>" : "Ik heb geen vriendin<br>";

//diepere informatie over mijzelf
echo
"Mijn moeder heet $family[0], Mijn vader heet $family[1] en mijn zus heet $family[2]<br>
Ik woon in $livingPlace en kom hier via de $wayOfTransport <br>
Ik doe er 
$travelTimeM minuten over.
";

//Set de tijdzone naar Amsterdam
date_default_timezone_set("Europe/Amsterdam");

//Boolean of het dag of nacht is
$dag = false;
//Variable met het actuele uur
$uur = date("H");
//Variable met het uur waarin de zon opkomt
$sunUp = 7;
//Variable met het uur waarin de zon ondergaat
$sunDown = 20;

//IfElse statement waarbij bepaald wordt of het dag of nacht is
if ($uur < $sunUp){
    $dag = false;
} elseif ($uur > $sunDown){
    $dag = false;
} else {
    $dag = true;
}

//Laat de text zien of het dag of nacht is met veranderende kleuren
echo "vandaag is het "; echo ($dag) ? "<font color='#ff7f50'><strong>Dag</strong>" : "<font color='#00008b'><strong>Nacht</strong>"; 
/** 
 * SHA leuk opgelost! wil ook graag zien dat je het met kleuren oplost wanneer jullie dit met FD gehad hebben.
*/
