<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom : Gabriel Bélanger
-------------------------------------------------------------------------
Cette page devrait contenir les tests des méthodes
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php
=========================================================================
*/
include_once("../src/Auto.php");
include_once("../src/donnees.inc.php");
/*LIGNE DE TEST*/
//echo Auto::titre('Ford', 'Fiesta', 'strong');
//echo Auto::titre('Nissan', 'Versa', 'h1');

//var_dump(Auto::trouverModele($voitures, 'Ford', 'Fiesta'));
//var_dump(Auto::trouverModele($voitures, 'Lada', 'Fiesta'));

//echo Auto::ariane('Nissan', 'Versa');
//echo Auto::ariane('Ferrari');
//echo Auto::ariane();

//echo Auto::lien('Nissan','Versa');

//echo Auto::image('Nissan','Versa');
//echo Auto::image('Ford','Fiesta');
//echo Auto::image('Ford','Focus','FORD_FOCUS');

echo Auto::listeMarques($voitures);