<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-27 11:42:10
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-28 11:09:57
 */
class Day14{

	public function __construct(){
		$arr = [
			[
				'id' => 1,
				'name' => 'A1',
				'pid' => 0,
			],
			[
				'id' => 2,
				'name' => 'A2',
				'pid' => 1,
			],
			[
				'id' => 3,
				'name' => 'B1',
				'pid' => 0
			],
			[
				'id' => 4,
				'name' => 'B2',
				'pid' => 3,
			],
		];
		$res = $this->GetTree($arr);

		$info = [
		     [
		         '1_class'=> '工具',
		         '2_class'=> '备忘录',
		         '1_id'=> 1,
		         '2_id'=> 2
		     ],
		     [
		         '1_class'=> '教育',
		         '2_class'=> '学历教育',
		         '3_class'=> '中等',
		         '1_id'=> 3,
		         '2_id'=> 4,
		         '3_id'=> 6
		     ],
		     [
		         '1_class'=> '教育',
		         '2_class'=> '学历教育',
		         '3_class'=> '高等',
		         '1_id'=> 3,
		         '2_id'=> 4,
		         '3_id'=> 5
		     ],
		     [
		         '1_class'=> '教育',
		         '2_class'=> '成人教育',
		         '1_id'=> 3,
		         '2_id'=> 7,
		     ],
	 	];
		$res = $this->Data($info);
		var_dump($res);
	}


	public function Data($arr = []){
		/**
		 * 定义新数组
		 * @var [type]
		 */
		$new_arr	 = [];

		/**
		 * 双层循环  外层循环每一个模块
		 * @var [type]
		 */
		foreach ($arr as $k => $v) {
			/**
			 * 内层循环每一个模块中的单条数据
			 * @var [type]
			 */
			foreach ($v as $k2 => $v2) {
				//只循环class包含class的Key对应的数据，其他需要的数据按条件取出即可
				if(strstr($k2,'class')){
					/**
					 * 将Key按照_拆分 前段是class和id的关系的标识数字 后段表示class还是id
					 */
					$ex_arr = explode('_',$k2);
					
					/**
					 * numId是前部的标识数字
					 * @var [type]
					 */
					$numId = $ex_arr[0];

					/**
					 * name是  class或id  本程序中没用到$name
					 * @var [type]
					 */
					$name  = $ex_arr[1];

					/**
					 * 要取出Key为 数字_id所对应的值，我们拼出字符串 例如:1_id 2_id
					 * @var [type]
					 */
					$this_Id = $numId.'_id';

					/**
					 * 整理新数组
					 * 若$new_arr[$k]中还没有数据，说明现在循环的是一个模块中的第一条数据
					 * 我们使用Key 下划线前部分的内容作为第二维的Key，因为对应的class和id前部的数字是一样的
					 */
					if(empty($new_arr[$k])){
						$new_arr[$k][$numId]['id'] 		= $arr[$k][$this_Id]; //使用$this_id取出id的值
						$new_arr[$k][$numId]['class'] 	= $v2;				  //v2值就是class的值
						$new_arr[$k][$numId]['pid'] 	= 0;				  //数组中为空 此条数据一定为顶级分类
					}else{
						$new_arr[$k][$numId]['id']	   	= $arr[$k][$this_Id];
						$new_arr[$k][$numId]['class']  	= $v2;
						$new_arr[$k][$numId]['pid']    	= $new_arr[$k][$numId-1]['id']; 
						//父级id是上一条数据的id 所以第二维Key为此时的$numId减去1，也就是Key的前缀数字值减1，它是有顺序的
					}
				}
			}
		}

		//再通过另一个function进行处理
		$res = $this->getStruct($new_arr,0);
		return $res;
	}

	public function getStruct($new_arr = [],$pid = 0){
		$arr = [];
		//我们给这个数据降低一个维度，便于递归
		foreach ($new_arr as $k => $v) {
			foreach ($v as $k2=> $v2) {
				$arr[$v2['id']] = $v2;
			}
		}

		//去递归
		$res = $this->GetTree($arr,0);
		return $res;
	}

	//分类获得树形结构
	public function GetTree($arr = [],$pid = 0){
		$res = [];

		foreach ($arr as $k => $v) {
			if($v['pid'] == $pid){
				$v['child'] = $this->GetTree($arr,$v['id']);
				//每一次循环找到符合条件的数据时，存放在栈中，直到此分支结束，这个栈会被整理成数组
				$res[] = $v;
			}
		}
		return $res;
	}
}
new Day14();