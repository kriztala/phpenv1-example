<?php

require_once '../vendor/autoload.php';

echo "hello world :)";

$database = new medoo ([

	'database_type' => 'sqlite',
	'datbase_fil' => '../storage/database.db'

]);

$array  = [1, "apple", "bannana", 2 , "foo", "bar"];
var_dump ($array);
dump($database);