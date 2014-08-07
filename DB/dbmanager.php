<?php
class DBManager
{
	private $_config;
	private $_handle;
	public function __construct($config)
	{
		$this->_config = $config;	
	}
	public function open()
	{
		$args = $this->parse_args();
		$dbclass = new ReflectionClass($this->_config->_dbclass);
		$this->_handle = $dbclass->newInstanceArgs($args);
	}
	public function close()
	{
		$this->_handle->close();
	}
	private function parse_args()
	{
		$args = array();
		$ret = array();
		$args = split("&", $this->_config->getConnectionString());
		for($i=0; $i<count($args); $i++)
		{
			$str = split("=", $args[i]);
			$key = $str[0];
			$val = $str[1];
			$ret[$key] = $val;
		}
		return $ret;
	}
}
?>