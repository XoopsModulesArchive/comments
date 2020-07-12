<?php
$modversion['name'] = _DB_COMMENTS_NAME;
$modversion['version'] = 1.01;
$modversion['description'] = _DB_COMMENTS_DESC;
$modversion['author'] = "kaper@zk-p.pl";
$modversion['credits'] = "Kaper";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "slogo.png";
$modversion['dirname'] = "comments";

// Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminindex'] = "";

// Menu
$modversion['hasMain'] = 1;

//Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "comments_search";

?>
