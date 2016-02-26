<?php


	$dateBase = 1; // base de datos seleccionada


	switch ($dateBase) {

		case '1':

			//DESARROLLO DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', 'root');//
			if (!defined('DB_CLAVE')) define('DB_CLAVE', '');
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', 'rinaDentDB');
			if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);

		break;

		case '2':

			//PRODUCCION DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', '');//
			if (!defined('DB_CLAVE')) define('DB_CLAVE', '');
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', '');
			if (!defined('DB_HOST')) define('DB_HOST', '');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);

		break;

	}


?>
