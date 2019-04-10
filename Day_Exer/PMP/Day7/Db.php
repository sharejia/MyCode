<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-19 10:53:10
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-19 11:08:02
 */

/**
 * 私有静态属性 私有构造 私有克隆 公有静态方法
 */
class Db{
	private static $Instance = '';

	private function __construct(){


	}

	private function __clone(){

	}

	public static function newInstance(){
		if(self::$Instance instanceof Db){

		}else{
			self::$Instance = new Db();
		}
	}




}