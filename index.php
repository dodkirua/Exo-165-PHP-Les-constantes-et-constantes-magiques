<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.

define("NB1",12);
define("NB2",2);

echo "<p>NB1 * NB2 = ".NB1*NB2."</p>";

define("STR1","C'est cool le PHP");

echo "<p>(NB1 + NB2) * la taille de STR1 = ".(NB1+NB2)*strlen(STR1)."</p>";
/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.


var_dump(__FILE__);
echo "<br>";
echo  basename(__FILE__);
echo "<br>";
echo dirname(__FILE__);
echo "<br>";
echo pathinfo(__FILE__,PATHINFO_ALL);
echo "<br>";
echo realpath(__FILE__);