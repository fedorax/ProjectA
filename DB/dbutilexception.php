<?php
/**
 * DBUtil例外クラス
 */
class DBUtilException extends Exception
{
	/**
	 * コンストラクタ
	 *
	 * @param message メッセージ
	 * @param code 行数
	 * @param exception 例外
	 *
	 */
    public function __construct($message, $code = 0, 
    							Exception $exception = null) {
        parent::__construct($message, $code, $exception);
    }
}
?>
