<?php

echo "Insertion/modification effectuée";

    $location = "http://".$_SERVER["HTTP_HOST"]."/test/liste";
    echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="'.$location.'"
</SCRIPT>';