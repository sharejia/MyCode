<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-16 08:47:55
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-17 12:56:03
 */
class Exer{

	public function __construct(){
		//计算所有水仙花数 n-m
		$res = $this->getNarc(100,999);

		//判断是否是回字符串
		$res = $this->Reve('ABCDCBA');

		//返回对应的英文字母组合
		$res = $this->getEng(701);
		var_dump($res);die();

		//斐波那契数列前N项
		$res = $this->FeiBo(10);

		//台阶不会
		$res = $this->Taijie(5);

		//求数组的临界点
		$res = $this->Demar([1,2,3,4,5,1]);

		//冒泡排序
		$res = $this->Bobb([1,2,3,9,5,6,4]);
	}	


	public function getNarc($start = '',$end = ''){
		//水仙花数  个位十位百位 立方和等于本身
		if($start > $end){
			return "数值错误";
		}

		$arr = [];
		for($i=$start;$i<=$end;$i++){
			$unit = ($i%10)*($i%10)*($i%10);
			$tens = (floor(($i%100)/10))*(floor(($i%100)/10))*(floor(($i%100)/10));
			$hund = (floor($i/100))*(floor($i/100))*(floor($i/100));
			
			$val = $unit + $tens + $hund;
			if($val == $i){
				$arr[] = $i;
			}
		}

		return $arr;
	}

	public function Reve($param = ''){
		$reve_str = strrev($param);
		if($reve_str == $param){
			return '是回文';
		}else{
			return '不是回文';
		}
	}

	//0123 => 0ABC
	public function getEng($param = ""){
		if($param > 701){return "对不起，能力有限！";}
		$English_arr = range('A','Z');
		$English_arr = array_combine(range(1,count($English_arr)),$English_arr);

		//求商 和 余数
		$Dea = floor($param/26);
		$Rem = $param % 26;

		$str = ''; //存放结果
		
		if($Dea == 0){
			if($Rem == 0){
				//商0余0
				return 0;
			}else{
				//商0有余数
				return $English_arr[$Rem];
			}
		}else{
			if($Dea > 26){
				//商不为0 商>26
				if($Rem != 0){
					//有余数
				}else{
					//余数为0
				}
			}else{
				//商不为0 商<=26
				if($Dea == 1){
					//商为1
					if($Rem != 0){
						//有余数
						$str .= $English_arr[1];
						$str .= $English_arr[$Rem];
					}else{
						//没余数
						$str .= $English_arr[26];
					}
				}else{
					if($Rem != 0){
						//有余数
						$str .= $English_arr[$Dea];
						$str .= $English_arr[$Rem];
					}else{
						//余数为0
						$str .= $English_arr[($Dea-1)];
						$str .= $English_arr[-($Rem-26)];
					}
				}
				
			}
		}
		return $str;
		
	}

	public function FeiBo($param = ''){
		$arr = [1,1];
		$str = '';

		for($i=0;$i<$param;$i++){
			if($i > 1){
				$arr[$i] = $arr[$i-1] + $arr[$i-2]; 
			}
		}
		$res = implode(',',$arr);
		return $res;
	}

	public function Taijie($param = ''){
		if($param == 1)return 1;
		if($param == 2)return 2;

		$res = $this->Taijie($param -1 ) + $this->Taijie($param -2);
		return $res;
	}


	public function Demar($param = []){
		for($i=1;$i<=count($param)-2;$i++){
			$Left_val = '';
			$Righ_val = '';
			$Now_val = $param[$i];

			for($j=0;$j<$i;$j++){
				$Left_val += $param[$j];
			}

			for($c=$i+1;$c<=count($param)-1;$c++){
				$Righ_val += $param[$c];
			}

			if($Left_val == $Righ_val){
				return $i;
			}
		}
	}

	public function Bobb($param = ''){
		$Temp = '';

		for($i=0;$i<count($param);$i++){
			for($j=$i+1;$j<count($param);$j++){
				if($param[$j] > $param[$i]){
					//后边放前边
					$Temp 	   = $param[$i];
					$param[$i] = $param[$j];
					$param[$j] = $Temp;
				}
			}
		}


		var_dump($param);die();
	}


}
new Exer();