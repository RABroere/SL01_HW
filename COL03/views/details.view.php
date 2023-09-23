<?php
//zorgt dat deze pagina gebruik kan maken van functies
require "../functions.php";
//haalt de index key op de in de url is meegestuurd
$personIndex = $_GET ['index'];
//zet details op het scherm
displayDetails($personIndex, $detailsS);
