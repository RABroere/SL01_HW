<?php
//alle teammembers met index
$teamMembers = [
    "1" => "Robin",
    "2" => "Pascal",
    "3" => "Bram"
];
//details Robin: 18 , Harderwijk, Backend; Pascal: Almere, Front-end; Bram: 18, Fullstack, bus
$detailsS = [
    1 => [1=> "18"],
    2 => [1=> "harderwijk"],
    3 => [1=> "back-end"],
    4 => [2=> "almere"],
    5 => [2=> "front-end"],
    6 => [3=> "18"],
    7 => [3=> "fullstack"],
    8 => [3=> "bus"]
];

//multidimensional array met namen en extra info
$teams = ["Robin" => ['Hobby' => "Mariokart", 'Leeftijd' => "18", 'Woonplaats' => "Harderwijk" ],
    "Bram" => ['Hobby'=> "Gamen", 'Leeftijd' => "18"],
    "Pascal" => ['Hobby' => "Programeren", 'Leeftijd' => "21", 'Woonplaats' => "Almere", 'Haarkleur' => "blond"]
];

/**array van welke personen er informatie op het scherm gezet wordt
* [0,2] zijn de indexen dus index 0 (Robin) en 2 (Pascal) wordt op het scherm gezet
*/
$info = [0,2];

//test variables voor arrayInfo() functie
$yesNo = true;
$text = "Hello";
$num = 7;
$meters = 1.84;
$names = ["Robin", "Bram", "Pascal"];

$testArray = ["stephan", "jan", "arie", "wout","rene", "polina"];


/**
 * Created by: Stephan Hoeksema 2023
 * SL01 -  Display of the variables
 */