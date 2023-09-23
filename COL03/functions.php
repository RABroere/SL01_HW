<?php
require "views/variables.php";
function displayArray(array $members, array $details){
    foreach ($members as $index => $member){
        echo "member is, <a href='views/details.view.php?index=$index'>$member</a>  index is $index"  . "<br>";
    }
}

function displayDetails(int $persoonIndex, array $details) {
    foreach ($details as $rowIndex => $detailInfo){
           if (key($detailInfo) == $persoonIndex){
               echo $detailInfo[$persoonIndex] . "<br>" ;
           }
    }
}







//arrayInfo neemt een $array en $index en laat de keys($naam) van de $array zien en afhankelijk van $infoArray ook extra informatie
function arrayInfo(array $array, array $index ){
    //slaat een index op
    $i = 0;
    //loopt door de $array en zet de namen (keys) op het scherm
    foreach ($array as $naam => $info){
        echo "<hr><b>" . $naam. "</b>    <br>";
        //de index $i wordt vergeleken met de array $index
        if (in_array($i, $index)){
            //als de index $i in de array $index zit wordt de detail informatie weergegeven
            foreach ($info as $thing){
                echo $thing . " ";
            }
            //als de index $i niet in de array $index zit begint de loop overnieuw;
        }else{
            $i++;
            continue;
        }
        $i++;
    }
}


/**
 * Schrijf een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
 */

//changeColor is een functie die achtergrond kleur van een pagina kan veranderen op basis van het uur van de dag
function changeColor(){
    //set de default tijdzone naar Nederlandsetijd
    date_default_timezone_set("Europe/Amsterdam");
    //haalt uur van nu en stopt dit in de variable $hour
    $hour = date('H');

    //een array met 24 kleuren, 1 kleur voor elk uur
    $kleur = ["blue","red","green","purple","white","black","yellow","brown","crimson",
        "cyan","orange","pink","gold","lime","navy","salmon","violet","wheat","teal",
        "seagreen","midnightblue","maroon","indigo","grey",
    ];

    //$color is bepaald uit de array $kleur[$hour-1] de -1 is wegens zero based index
    $color = $kleur[$hour-1];

    //de achtergrond kleur wordt veranderd naar de kleur $color
    echo
    "    <style> 
                body{background-color: $color}
            </style>
        ";
    echo "<div><hr>Hello ADSD <br></div>";
}


/**
 * Schrijf een functie waarbij de waarde van een variable getoond wordt, hoeveel het
 * er zijn en welk type het is.
 */

/**varInfo is een functie die elk soort variable als input neemt en geeft weer wat voor
 * datatype het is, wat de value is en de lengte van de string(s)
 */
function varInfo($var){
    //type van de variable wordt opgeslagen in $type
    $type = gettype($var);
    //de type wordt op het scherm gezet
    echo "var type is ", $type . "<br>" ;
    //if statement om te bepalen of datatype een array is
    if ($type == "array"){
        //als de var een array is wordt de lengte van de array op het scherm gezet
        echo "lenght of array is ", (count($var) + 1), "<br>";
        //een foreachloop die voor elk stuk data uit de array de waarde en stringlengte op het scherm zet
        foreach ($var as $array){
            echo $array . " lenght of string is ", strlen($array) , "<br>";
        }
    }
    //als var geen array is wordt de waarde en stringlengte van de var zelf op het schermgezet
    else{
        echo "Value is ",$var . "<br>" ;
        echo "Lenght of string is ",strlen($var) . "<br>";
    }

}

/**
 * Schrijf een functie waarbij een array random een andere waarde toont vanuit de array
 */

//rancomArray is een functie die alleen een array als input neemt en een random item uit die array op het scherm zet
function randomArray(array $array){
    //de lengte van de array wordt bepaald en in de var $arrayLenght gezet
    $arrayLenght = count($array);
    //er wordt een random nummer met een minimale waarde van 1 en een maximale waarde van de array in $randNmbr gezet
    $randNmbr = rand(1,$arrayLenght);
    //met randNmbr - 1 wegens zero based index wordt er een random item uit de array op het scherm gezet
    echo $array[$randNmbr - 1];
}