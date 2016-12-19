<?php

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot



// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
define('DB_HOST','localhost');
define('DB_NAME','schoolcheck');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

//define('DB_HOST','localhost');
//define('DB_NAME','myband');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','');

define('ITEMS_PER_PAGE',2);
?>
