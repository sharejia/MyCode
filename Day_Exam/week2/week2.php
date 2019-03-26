<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-25 08:42:10
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-25 09:08:09
 */
class week2{

	public function __construct(){
		//给倒计时用的时间戳
		echo time();die();


		//组成不同的三位数
		$res = $this->ThreeNum([1,2,3,4]);

		//遍历目录
		// $res = $this->my_Dir("E:\Phpstudy\PHPTutorial\WWW\week2");

		//公共部分
		$res = $this->CommDir();
		var_dump($res);
	}

	//实现不同的三位数
	public function ThreeNum($param = []){
		for($i=0;$i<count($param);$i++){
			for($j=0;$j<count($param);$j++){
				for($k=0;$k<count($param);$k++){
					if($i != $j && $j != $k && $i != $k){
						$res[] = $param[$i].$param[$j].$param[$k];
					}
				}
			}
		}
		return $res;	
	}

	//实现遍历目录下的所有文件或文件夹
	public function my_Dir($dir = ""){
		$handle = opendir($dir);

		while (($filename = readdir($handle)) !== false) {
			if($filename == '.' || $filename == '..'){
				continue;
			}

			if(is_dir($filename)){
				$this->my_Dir($filename);
			}else{
				echo "<pre>";
				echo $filename;
			}
		}
		closedir($handle);
	}

	//查询目录下的公共部分
	public function CommDir(){
		$dir_1 = "/a/b/c/d/e/";
		$dir_2 = "/a/b/c/d/e.php";

		$arr_dir_1 = explode('/',$dir_1);
		$arr_dir_2 = explode('/',$dir_2);

		$len = count($arr_dir_1) > count($arr_dir_2) ? count($arr_dir_2) : count($arr_dir_1);
		
		for($i=0;$i<$len;$i++){
			if($arr_dir_1[$i] == $arr_dir_2[$i]){
				$res[] = $arr_dir_1[$i];
			}
		}

		$res = implode($res,'/');
		return $res;
	}


}

new week2();