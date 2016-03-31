<?php


	$dateBase = 2; // base de datos seleccionada


	switch ($dateBase) {

		case '1':

			//DESARROLLO DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', 'root');//
			if (!defined('DB_CLAVE')) define('DB_CLAVE', '');
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', 'rinadentdb');
			if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);

		break;

		case '2':

			//PRODUCCION DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', 'root');//
			if (!defined('DB_CLAVE')) define('DB_CLAVE', 'rootshell@#');
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', 'rinadentdb');
			if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);

		break;

	}


?>
