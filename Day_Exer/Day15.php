<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-28 19:33:33
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-28 21:02:57
 */
class Day15{

	public function __construct(){  //ABCDEFGHIA
		// $gifts = [
  //               [
  //                   "name"=>"mac",
  //                   "prop"=>1
  //               ],
  //               [
  //                   "name"=>"红米",
  //                   "prop"=>10
  //               ],
  //               [
  //                   "name"=>"u盘",
  //                   "prop"=>40
  //               ],
  //               [
  //                   "name"=>"香皂",
  //                   "prop"=>49
  //               ]
  //           ];
		// $res = $this->rand($gifts);
		
		$res = $this->string();
		var_dump($res);
	}

	public function string(){
		// $arr = range('A','Z');
		// $arr[] = "A";

		$arr = ['A','B','A'];

		$head_arr = array_slice($arr,0,26);
		if (count($head_arr) != count(array_unique($head_arr))){
			/**
			 * 去重之后数组减短了，说明被去重了某些数据
			 */
			for($i=0;$i<count($head_arr);$i++){
				$uniq_val = $head_arr[$i];
				for($j=$i+1;$j<count($head_arr);$j++){
					if($head_arr[$j] == $uniq_val){
						return $msg = '第'.($i+1).'个字符是第一个重复的';
					}
				}
			}
    	}else{
    		$value = $arr[26];
    		$posi = array_search($value,$head_arr);

    		$msg = '第'.($posi+1).'个字符是第一个重复的';
    		return $msg;
    	}
	}





	public function rand($param = []){
		
	}


}

new Day15();