<?php

/*
 * Controller della pagina Home / Index
*/

require_once("includes/resources.php");

$page = (object) array(

    "title" => "Pagina non trovata | Enrico Buratto",
    "desc" => "Errore 404",
    "keywords" => "404, error",
    "name" => "404",
    //"breadcrumb" => array($lang->aboutTitle => "about.php")
);


require_once("views/template/header.php");

require_once("views/404.php");

require_once("views/template/footer.php");

   
?>
