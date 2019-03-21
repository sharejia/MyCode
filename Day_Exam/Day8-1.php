<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-21 08:39:14
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-21 19:41:51
 */
class Day8{

	public function __construct(){
		$res = $this->child(['小明','小李','小王','小马','小赵','小何','小七','小曹'],4);
		var_dump($res);
	}

	public function child($param = '',$m = ''){
		//标记变量
		$num = 0;

		while(count($param) > 1){
			foreach($param as $k => $v){
				$num++;
				if($num == $m){
					unset($param[$k]);
					//重置num
					$num = 0;
				}
			}
		}
		return $param;
	}

}
new Day8();