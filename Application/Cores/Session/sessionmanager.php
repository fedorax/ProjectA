<?php
class SessionManager
{
	/**
	 * セッション名
	 *
	 * @var PROJECT_NAME
	 */
	protected $_sessionName = PROJECT_NAME;

	/**
	 * セッション開始状態
	 *
	 * @var セッションが開始済みの場合:true
	 */
	protected  static $_isStarted = false;

	/**
	 * コンストラクタ
	 */
	public function __construct()
	{
		self::start();
		if (!isset($_SESSION[$this->_sessionName])) {
			$_SESSION[$this->_sessionName] = array();
		}
	}

	/**
	 * セッション開始
	 */
	public static function start()
	{
		if (self::$_isStarted == false) {
			session_start();
			self::$_isStarted = true;
		}
	}
	/**
	 * セッションを書き込んで終了
	 */
	public static function closeWrite()
	{
		session_write_close();
		self::$_isStarted = false;
	}

	/**
	 * セッションから値を取得します。
	 * 指定されたキーが存在しない場合、nullを返します。
	 *
	 * @param key キー
	 * @return 値
	 */
	public function get($key = null)
	{
		self::start();
		$ret = null;
		if ($key === null) {
			$ret = $_SESSION[$this->_sessionName];
		} else {
			if ($this->exists($key)) {
				$ret = $_SESSION[$this->_sessionName][$key];
			}
		}
		return $ret;
	}

	/**
	 * セッションに値を格納します。
	 *
	 * @param key キー
	 * @param val 値
	 */
	public function set($key, $val)
	{
		self::start();
		$_SESSION[$this->_sessionName][$key] = $val;
		//self::closeWrite();
	}

	/**
	 * セッションに値を設定します。
	 * $sessionMgr->key = valとして利用できます。
	 *
	 * @param キー
	 * @param 値
	 */
	public function __set($key, $val)
	{
		$this->set($key, $val);
	}

	/**
	 * セッションから値を取得します。
	 * val = $sessionMgr->keyとして利用できます。
	 *
	 * @param キー
	 * @return 値
	 */
	public function __get($key = null)
	{
		return $this->get($key);
	}

	/**
	 * セッション内にキーが存在してるか確認します。
	 *
	 * @param キー
	 * @return 存在している場合(true)
	 */
	public function exists($key)
	{
		if (!isset($_SESSION[$this->_sessionName][$key])) {
			return false;
		}
		return true;
	}

	/**
	 * セッションに格納されているキーの一覧を取得します。
	 *
	 * @return キーの一覧:
	 */
	public function getKeys()
	{
		return array_keys($this->get());
	}
}

?>