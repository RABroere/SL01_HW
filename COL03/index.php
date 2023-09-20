<?php
//extern bestand voor alle gebruikte functies
require "functions.php";

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
