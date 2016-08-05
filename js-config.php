<?php
/** The name of the database for Site */
define('DB_NAME', 'database_name');

/** MySQL database username */
define('DB_USER', 'user_name');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** connect to server */
$db = mysql_connect( 'localhost', DB_USER, DB_PASSWORD );

/** select database */
mysql_select_db( DB_NAME, $db);
