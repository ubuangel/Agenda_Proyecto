<?php

// credenciales de la base de datos
define('DB_USUARIO', 'lamp_user');
define('DB_PASSWORD', '1234');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'lamp_db');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );

 //echo $conn->ping();
