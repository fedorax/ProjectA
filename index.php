<?php
    error_reporting(E_ALL|E_STRICT);
	require_once './DB/require.php';
	try {
		$config = new SQLiteConfig("project.db");
		$mgr = new DBManager($config);
		$mgr->open();
		$mgr->close();
	}
	catch (Exception $ex)
	{
		echo $ex->getMessage();
	}
	echo "Hello Project.";
?>