<?php
//define('RUTA', 'http://localhost:8030/ps4/');
require 'medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mysql',
  	'host' => 'bzw67vx61oprjcpqtqmy-mysql.services.clever-cloud.com',
  	'database' => 'bzw67vx61oprjcpqtqmy',
  	'username' => 'uwjdz1qvsv0gawhb',
  	'password' => 'pe1CTkfvHaj4O0Ut62oq',
   ]);
} catch (PDOException $e) {
  echo "No se pudo conectar a la Base de Datos";
}
?>
