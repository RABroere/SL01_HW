<?php
//extern bestand voor alle gebruikte functies
require "functions.php";

//huiswerkopdracht
//multidimensional array met namen en extra info
$teams = ["Robin" => ['Hobby' => "Mariokart", 'Leeftijd' => "18", 'Woonplaats' => "Harderwijk" ],
                "Bram" => ['Hobby'=> "Gamen", 'Leeftijd' => "18"],
                "Pascal" => ['Hobby' => "Programeren", 'Leeftijd' => "21", 'Woonplaats' => "Almere", 'Haarkleur' => "blond"]
    ];
/**array van welke personen er informatie op het scherm gezet wordt
 * [0,2] zijn de indexen dus index 0 (Robin) en 2 (Pascal) wordt op het scherm gezet
*/
$info = [0,2];
//zie functions.php voor de arrayInfo function




//changecolor functie veranderd de achtergrondkleur op basis van heet uur van de dag
//changeColor();
//
//test variables voor varInfo functie
$yesNo = true;
$text = "Hello";
$num = 7;
$meters = 1.84;
$names = ["Robin", "Bram", "Pascal"];
//
//varInfo functie neem een input van elk dataType en geeft weer wat voor datatype het is, wat de waarde is en de lengte van de strings
//varInfo($yesNo);
//
//test array voor randomArray functie
$testArray = ["stephan", "jan", "arie", "wout","rene", "polina"];
//
//randomArray functie neemt alleen een array als input en geeft 1 random waarde uit deze array weer
//randomArray($testArray);

/**
 * Verplaats alles naar een function directory, en require de function file.
 verplaatst naar functions.php
 */

/**
 * Haal de presentatie van een variabele binnen
 */

require 'views/index.view.php';
