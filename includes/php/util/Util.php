<?php
abstract class Util {
	
	/**
	 * Base directory
	 * @var string
	 */
	private static $dir;
	
	/**
	 * To avoid setting a new base path, counting to 1.
	 * @var int
	 */
	private static $count_dir;
	
	static function setBaseDir($dir) {
		
		if($count_dir == 0) {
			self::$dir = $dir;
			$count_dir++;
		} else {
			return;
		}
		
	}
	
	static function getBaseDir() {
		
		return self::$dir;
		
	}
	
}