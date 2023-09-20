<?php
//Naam variable
$name = 'Piet';
//Geboorte datum in een DateTime functie
$dob = new DateTime('06.06.1944');
//Datum van vandaag in een DateTime functie
$today = new Datetime(date('d.m.y'));
//Leeftijd berekend door $dob geformateerd naar jaartal - $todat geformateerd naar jaartal
$age = $today->format("Y")-$dob->format("Y");
//Display van alle info
echo "Piet is geboren op ", $dob->format('d.m.Y'), "<br>Piet is $age jaar oud. <br><hr>";

//multidimensional array
$ddd = [
    ['name'=> 'Robin', 'age' => 18, 'hobby' =>'gamen'],
    ['name' => "Pascal", 'age' => 21, 'hobby' =>'trainen, gamen'],
    ['name' => "Bram", 'age' => 18, 'hobby' =>'voetbal, gamen']
];

//loop door de array heen en format de info
foreach ($ddd as $student) {
    echo $student['name']. " " . $student['age'].
        "<br>&nbsp"  . $student['hobby']. "<hr>";
}

$nums = [1,1,1,1,2,2,2,3,4,5,5,5];

$i =0;
$j = 1;
$countN = count($nums);

while ($i < $countN){
    if ($nums[$i] === $nums[$j]) {
        unset($nums[$j]);
        $j++;
    } else {
        $i = $j;
        $j++;
    }
}
echo implode($nums);
//while ($i < count($nums)){
 //   echo "$nums[$i]";
//    $i++;
//}

/**
 * Array
*/

/**
 * Multidimensional Array
 */

/**
 * for-loop
 */

/**
 * foreach-loop
 */

/**
 * Haal de presentatie van een variabele binnen
 */
