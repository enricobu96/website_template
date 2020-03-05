<?php

/*
 * Controller della pagina Home / Index
*/

require_once("includes/resources.php");

$page = (object) array(

    "title" => "Contatti | Enrico Buratto",
    "desc" => "Contatti",
    "keywords" => "contacts",
    "name" => "contacts",
    //"breadcrumb" => array($lang->aboutTitle => "about.php")
);


require_once("views/template/header.php");

require_once("views/contacts.php");

require_once("views/template/footer.php");


?>
