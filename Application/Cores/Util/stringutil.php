<?php
class StringUtil
{
	public static function stripSlashesDeep($value) {
		$value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
		return $value;
	}
	public static function isNullorEmpty($value)
	{
		if(!isset($value))
		{
			return true;
		}
		if(is_null($value))
		{
			return true;
		}
		if("" == $value)
		{
			return true;
		}
		return false;
	}
}