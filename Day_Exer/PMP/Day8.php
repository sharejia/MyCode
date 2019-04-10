<?php
/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-20 10:51:37
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-20 11:15:30
 */


class Day7{

	public function __construct(){
		$res = $this->change("EbUser");
		var_dump($res);
	}

	public function change($param = ''){
		return strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '_', $param));
		// return preg_replace('/([A-Z])/','_$1',$param);
	}




}
new Day7();