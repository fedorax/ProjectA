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
		try {
			$this->_handle = new PDO($this->_config->getDsn(), $this->_config->getUser(), $this->_config->getPassword());
		}
		catch (Exception $ex)
		{
			throw new DBUtilException($ex->getMessage(), $ex->getLine(), $ex);
		}
	}
	/**
	 * DBの接続状況を返します。
	 */
	public function isopen()
	{
		return isset($this->_handle);
	}

	/**
	 * DBから切断します。
	 */
	public function close()
	{
		$this->_handle = null;
	}
	/**
	 * DBに接続します
	 * @see open
	 */
	public  function connect()
	{
		return $this->open();
	}
	/**
	 * DBから切断します
	 * @see close
	 */
	public function disconnect()
	{
		return $this->close();
	}

}
?>