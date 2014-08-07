<?php
/**
 *
 * SQLite用設定クラス
 *
 */
class SQLiteConfig extends DBConfig
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
		$this->_dbclass = "SQLite3";
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
		if($this->_file == NULL)
		{
			throw new DBUtilException("Not Set SQLite File.");
		}
		$str = "FILE=".$this->_file;
		
		if($this->_key != NULL)
		{
			$str .= "&KEY=".$this->_key;
		}
		
		return $str;
	}
}
?>
