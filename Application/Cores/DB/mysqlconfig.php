<?php
/**
 * Mysql用設定クラス
*
* @author fedorax
* @version 1.0.0
*/
class MysqlConfig extends DBConfig
{

	/**
	 * コンストラクタ
	 *
	 * @param $host 接続ホスト
	 * @param $port ポート
	 * @param $user ユーザ名
	 * @param $pass パスワード
	 */
	public function __construct($user, $pass, $dbname, $host, $port)
	{

		$this->_dsn = "mysql:host=".$host. ($is_port ? ';port=' . $port : '') . ';dbname=' . $dbname;
		$this->_user = $user;
		$this->_pass = $pass;
	}
}
?>
