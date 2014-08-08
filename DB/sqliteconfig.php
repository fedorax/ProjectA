<?php
/**
 * SQLite用設定クラス
 *
 * @author fedorax
 * @version 1.0.0
 */
class SQLiteConfig extends DBConfig
{

	/**
	 * コンストラクタ
	 *
	 * @param file SQLite ファイル
	 */
	public function __construct($file)
	{
		$this->_dsn = "sqlite:".$file;
	}
}
?>
