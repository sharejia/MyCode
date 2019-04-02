<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-02 08:39:33
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-02 09:02:54
 */
class Day18{

	public function __construct(){
		$res = $this->NumberOf1(10);
		var_dump($res);
	}

	public function NumberOf1($param = 0){
		header("Content-type:text/html;charset=utf-8");
		$res = '';
		$nums = 0;
		while(1){
			/**
			 * 余数
			 */
			$yu = $param % 2;
			if($yu == 1){$nums = $nums + 1;}
			/**
			 * 商
			 * @var [type]
			 */
			$param = floor($param / 2);

			/**
			 * 拼接2进制
			 */
			$res .= $yu;

			if($param == 0){
				return $nums;
			}
		}

	}



}
new Day18();