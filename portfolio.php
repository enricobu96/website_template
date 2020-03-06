<?php

/*
 * Controller della pagina Home / Index
*/

require_once("includes/resources.php");

$page = (object) array(

    "title" => "Portfolio | Enrico Buratto",
    "desc" => "Portfolio",
    "keywords" => "portfolio",
    "name" => "portfolio",
    //"breadcrumb" => array($lang->aboutTitle => "about.php")
);


require_once("views/template/header.php");

require_once("views/portfolio.php");

require_once("views/template/footer.php");


?>
