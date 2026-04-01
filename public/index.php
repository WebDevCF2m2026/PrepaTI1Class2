<?php
# public/index.php 
/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/
require_once '../config.php';

// appel de la vue
include ROOT_PATH."/view/homepage.php";
