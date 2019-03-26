<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-26 08:37:47
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-26 08:43:53
 */
class Day12{

	public function __construct(){
		$res = $this->Sum_Solution("5");
		var_dump($res);
	}

	public function Sum_Solution($param = ''){
		$param = range(1,$param);
		$res = array_sum($param);
		return $res;
	}



}
new Day12();