<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-20 14:36:31
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-20 20:59:13
 */
class Exer{

	public function __construct(){
		// $res = $this->NumGroup([1,2,3,4]);
		
		// ['小明','小李','小王','小赵','小刘','小苏','小马','小花']
		$res = $this->child(['小明','小李','小王']);
		var_dump($res);
	}

	public function child($param = ''){
		$Rand_num = 2;

		for($i=0;$i<count($param);$i++){
			if(count($param) == 1){
				return $param;
			}

			// if($Rand_num > count($param)){
			// 	$key = $param[(-(count($param) - $Rand_num)) - 1];
			// }else{
			// 	$key = $Rand_num - 1;
			// }

			// unset($param[$Rand_num - 1]);
			// $param = array_values($param);
			// $i = $Rand_num - 1;
			// var_dump($param);die();

		}


	}




	public function NumGroup($param = ''){

		$data = [];
		for($i=0;$i<count($param);$i++){
			$data[1][$i+1] = $param[$i];
		}

		for($i=0;$i<count($param);$i++){
			for($j=$i+1;$j<	count($param);$j++){
				$data[2][$i+$j] = $param[$i].$param[$j];
			}
		}

		return $data;
	}


}

new Exer();