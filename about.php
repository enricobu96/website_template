<?php

/*
 * Controller della pagina Home / Index
*/

require_once("includes/resources.php");

$page = (object) array(

    "title" => "Chi sono | Enrico Buratto",
    "desc" => "Chi sono",
    "keywords" => "about",
    "name" => "about",
    //"breadcrumb" => array($lang->aboutTitle => "about.php")
);


require_once("views/template/header.php");

require_once("views/about.php");

require_once("views/template/footer.php");


?>
