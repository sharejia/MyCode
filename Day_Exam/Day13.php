<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-27 08:39:29
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-27 08:42:46
 */

class Day13{

	public function __construct(){
		$res = $this->add(0,10);
		var_dump($res);
	}

	public function add($num1 = '',$num2 = ''){
		$res = $num1 ^ $num2;
		return $res;
	}


}

new Day13();