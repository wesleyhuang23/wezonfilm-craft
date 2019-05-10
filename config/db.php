<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the default settings in `vendor/craftcms/cms/src/config/defaults/db.php`.
 */

return [
    'tablePrefix' => 'craft',
    'server' => getenv('DB_HOST'),
    'port' => getenv('DB_PORT'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'database' => getenv('DB_NAME')
];
