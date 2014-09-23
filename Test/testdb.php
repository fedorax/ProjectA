<?php
try {
	$config = new SQLiteConfig(SQLITE_DB);
	$mgr = new DBManager($config);
	$mgr->open();
	$mgr->beginTransaction();
	$mgr->rollBack();
	$mgr->close();

}
catch (Exception $ex)
{
	echo $ex->getMessage();
}
?>