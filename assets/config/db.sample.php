<?php

return array(
	'default' => array(
		'user'=>'root',
		'password' => 'root',
		'driver' => 'PDOV',
		
		//'Connection' is required if you use the PDO driver
		'connection'=>'mysql:host=mysql;dbname=hackazon',
		
		// 'db' and 'host' are required if you use Mysql driver
		'db' => 'hackazon',
		'host' => 'mysql',
        'port' => 3306
	)
);


/* note
 * mysql> create database hackazon;
 * mysql> GRANT ALL ON hackazon.* TO hackazon@'localhost' IDENTIFIED BY 'password';
*/
