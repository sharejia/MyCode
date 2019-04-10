<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-25 08:50:11
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-25 08:52:51
 */
class Db{

	private static $_Instance = null;

	private function __construct{

	}

	private function __clone(){

	}

	public static function getInstance(){
		if(!(self::$_Instance instanceof Db)){
			self::$_Instance = new Db();
		}
		return self::$_Instance;
	}

}