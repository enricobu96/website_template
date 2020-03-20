<?php

/*
 * Controller della pagina Home / Index
*/

require_once("includes/resources.php");

$page = (object) array(

    "title" => "",
    "desc" => "",
    "keywords" => "",
    "name" => "",
    //"breadcrumb" => array($lang->aboutTitle => "about.php")
);


require_once("views/template/header.php");

require_once("views/index.php");

require_once("views/template/footer.php");


?>
