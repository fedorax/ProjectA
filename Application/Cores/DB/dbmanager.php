<?php
/**
 * DB接続部品
 *
 * @author fedorax
 * @version 1.0.0
 */
class DBManager extends PDO
{
	/**
	 * DB設定インスタンス
	 * @var DBConfig
	 */
	private $_config;
	/**
	 * DBハンドルのインスタンス
	 * @var DBハンドル
	 */
	private $_handle;
	/**
	 * コンストラクタ
	 * DBで利用するDBConfigのインスタンスを設定します。
	 *
	 * @param IDBConfig $config
	 */
	public function __construct(IDBConfig $config)
	{
		$this->_config = $config;
	}
	/**
	 * DBに接続します。
	 */
	public function open()
	{
		$this->_handle = parent::__construct($this->_config->getDsn(), $this->_config->getUser(), $this->_config->getPassword());
	}
	/**
	 * DBから切断します。
	 */
	public function close()
	{
		$this->_handle = null;
	}

}
?>