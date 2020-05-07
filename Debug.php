<?php

class Debug
{
	public static function p($target)
	{
		if (self::checkAllowIp($_SERVER['REMOTE_ADDR'])) {
			echo "<pre>";
			print_r($target);
			echo "</pre>";
		}
	}

	public static function checkAllowIp($ip)
	{
		return in_array($ip, self::allowIp());
	}

	public static function allowIp()
	{
		return [
			'109.171.61.86'
		];
	}
}