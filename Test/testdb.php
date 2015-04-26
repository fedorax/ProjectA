<?php
try {
	$config = new SQLiteConfig(SQLITE_DB);
	$mgr = new DBManager($config);
	echo $mgr->isopen() ? "true" : "false";
	$mgr->open();
	echo $mgr->isopen() ? "true" : "false";
	$mgr->beginTransaction();
	$mgr->rollBack();
	$mgr->close();

}
catch (Exception $ex)
{
	echo $ex->getMessage();
}
?>