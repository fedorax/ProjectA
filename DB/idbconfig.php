<?php

/**
 * DB設定用のインターフェイス
 *
 * @author fedorax
 * @version 1.0.0
 */
interface IDBConfig
{
	/**
	 *
	 * 接続文字列を取得します
	 *
	 * @return 接続文字列
	 */
	public function getDsn();
	/**
	 *
	 * ユーザ名を取得します。
	 *
	 * @return ユーザ名
	 */
	public function getUser();
	/**
	 *
	 * パスワードを取得します。
	 *
	 * @return パスワード
	 */
	public function getPassword();
}

?>
