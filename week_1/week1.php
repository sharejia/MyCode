<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-18 08:39:03
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-18 08:54:49
 */

class Week1{

	public function __construct(){
		//1-100求和
		$res = $this->Sum100_for(100);//方式1循环
		$res = $this->Sum100_half(100); //方式2折半计算
		$res = $this->Sum100_d(100); //方式3递归

		$res = $this->Daff_for(5); //方式一n的阶乘
		$res = $this->Daff_d(5);    //方式二递归

		$res = $this->recv('ABCDCBA');
		var_dump($res);
	}



	public function Sum100_for($param = ''){
		$value = 0;
		for($i=1;$i<=$param;$i++){
			$value += $i;
		}
		return $value;
	}

	public function Sum100_half($param = ''){
		$num = $param / 2;
		$value = $num * 101;
		return $value;
	}

	public function Sum100_d($param = ''){
		if($param == 1){
			return 1;
		}else{
			return $param += $this->Sum100_d($param - 1);
		}
	}

	public function Daff_for($param = ''){
		$value = 1;
		for($i=1;$i<=$param;$i++){
			$value *= $i;
		}
		return $value;
	}

	public function Daff_d($param = ''){
		if($param == 1){
			return 1;
		}else{
			return $param *= $this->Daff_d($param - 1);
		}
	}

	public function recv($param = ''){
		$recv_value = strrev($param);
		if($recv_value == $param){
			return '是回文';
		}else{
			return '不是回文';
		}
	}

}
new Week1();