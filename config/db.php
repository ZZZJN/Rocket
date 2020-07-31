<?php
$mysql_host=require("mysql_host-local.php");
return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=$mysql_host;dbname=Rocket",
    'username' => 'root',
    'password' => 'pw123456',
    'charset' => 'utf8mb4',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
