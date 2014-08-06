<?php

/**
 *
 * SQLite用設定クラス
 *
 */
class SQLiteConfig implements IDBConfig
{
	/**
	 * DBファイル
	 */
	private $_file = NULL;
	
	/**
	 * 暗号キー
	 */
	private $_key = NULL;
	
	/**
	 * コンストラクタ
	 *
	 * @param file SQLite ファイル
	 * @param key 暗号化キー
	 *
	 */
	public function __construct($file, $key = NULL)
	{
		$this->_file = $file;
		$this->_key = $key;
	}
	
	/**
	 * 接続文字列を返します.
	 *
	 * @return 接続文字列
	 */
	public function getConnectionString()
	{
		if(!isset($_file))
		{
			throw new DBUtilException("Not Set SQLite File.");
		}
		$str = "FILE=".$_file;
		
		if(isset($_key))
		{
			$str .= "&KEY=".$_key;
		}
		
		return $str;
	}
}
?>
