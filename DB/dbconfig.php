<?php
/**
 * DB設定クラス
 *
 * PDOで使用する接続文字列、ユーザ名、パスワードを設定、取得します
 *
 * @author fedorax
 * @version 1.0.0
 *
 */
class DBConfig implements IDBConfig
{
	/**
	 * DB接続文字列
	 *
	 * @var DSN
	 */
	protected   $_dsn;
	/**
	 * ユーザ名
	 *
	 * @var ユーザ名
	 */
	protected  $_user;
	/**
	 * パスワード
	 *
	 * @var パスワード
	 */
	protected  $_pass;
	/**
	 * 接続文字列を取得します
	 * @see IDBConfig::getDsn()
	 * @return 接続文字列
	 */
	public function getDsn()
	{
		return $this->_dsn;
	}
	/**
	 * ユーザ名を取得します
	 * @see IDBConfig::getUser()
	 * @return ユーザ名
	 */
	public function  getUser()
	{
		return  $this->_user;
	}
	/**
	 * パスワードを取得します
	 * @see IDBConfig::getPassword()
	 * @return パスワード
	 */
	public function  getPassword()
	{
		return  $this->_pass;
	}
}