<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/../MyConfig/autoload.php'; // Autoload files using MyConfig autoload
include "view/header/hearder.view.php";
include "view/bottom/bottom.view.php";
include "src/Template.php";

//loading la gestion des exceptions
new MyException\MyException();
//loading la gestion des exceptions
new MyORM\MyORM();

$Connexion = new MySQL\sql(MySQLServer, MySQLUser, MySQLPassword, MySQLDatabase, MySQLPort, MySQLTransactionMode, MySQLDebug, MySQLCharset);

//Sql connect 

if ( (isset($_GET["controller"])) && (isset($_GET["view"])) )
{
    /* Controller and View loading */
    $controllerfile = __DIR__ . "/../controller/".$_GET["controller"].".php";
    $viewfile = __DIR__ . "/../view/".$_GET["controller"]."/".$_GET["view"].".view.php";

    if (file_exists($controllerfile)) {
        require_once $controllerfile;
        
        if (method_exists($_GET["controller"],$_GET["view"]))
        {
			call_user_func(array($_GET["controller"], $_GET["view"]));
        }
        
    } else {
        throw new \Exception("Controller not found : '".$_GET["controller"]."'");
    }

    if (file_exists($viewfile)) {
        require_once $viewfile;
    } else {
        throw new \Exception("View not found : '".$_GET["view"]."'");
    }
}
else
{
    //redirection vers accueil/wellcome, bien entendu ca doit exister dans les controlleurs et les vues.
    $location = "http://".$_SERVER["HTTP_HOST"]."/accueil/welcome";
    echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="'.$location.'"
</SCRIPT>';
}