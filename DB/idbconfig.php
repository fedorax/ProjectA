<?php

/**
 *
 * DB設定用のインターフェイス
 *
 */
interface IDBConfig
{
	/**
	 * 
	 * 接続文字列を取得します
	 *
	 * @return 接続文字列
	 */
	public function getConnectionString();
}

?>
