<?php

use TexLab\MyDB\Runner;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\DB;

include "../vendor/autoload.php";

$a = new Runner(DB::Link([
    'host' => 'localhost',
    'username'=> 'root' ,
    'password' => '',
    'dbname' => 'form'
]
));
echo "<pre>";
print_r($a->runSQL("SELECT * FROM `group`,`users` WHERE `group`.`id` = `users`.`group_id`"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

</body>
</html>