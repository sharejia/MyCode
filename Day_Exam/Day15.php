<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-29 08:38:39
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-29 09:15:11
 */

class Day15{

	public function __construct(){
		$res = $this->str(['A','A','A','D']);
		var_dump($res);
	}

	public function str($param = []){
		foreach ($param as $k => $v) {
			$left_arr	= array_slice($param,0,$k);
			$right_arr	= array_slice($param,$k+1);

			$left_sear  = array_search($v,$left_arr);
			$right_sear  = array_search($v,$right_arr);
			
			if($left_sear === false && $right_sear === false){
				return "符合条件的第一个位置在第".($k+1).'位';
			}
		}
		return -1;
	}





}

new Day15();