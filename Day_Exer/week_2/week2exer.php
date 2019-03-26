<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-23 08:30:18
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-24 19:41:06
 */
class week2{

	public function __construct(){
		$res = $this->threeNum([1,2,3,4]);

		$res = $this->Comm_dir();

		$res = $this->listDir("E:\Phpstudy\PHPTutorial\WWW\MyGitCode\Day_Exer\Day3");
		var_dump($res);
	}	

	//组成三位数
	public function threeNum($param = []){
		$array = [];

		for($i=0;$i<count($param);$i++){
			for($j=0;$j<count($param);$j++){
				for($k=0;$k<count($param);$k++){
					if($i != $j && $j != $k && $k != $i){
						$array[] = $param[$i].$param[$j].$param[$k];
					}
				}
			}
		}
		return $array;
	}

	//判断目录公共部分
	public function Comm_dir(){
		$dir_1 = "/a/b/c/d/e/index.php";
		$dir_2 = "/a/b/c/d/e.php";

		$dir_1_arr = explode('/',$dir_1); 
		$dir_2_arr = explode('/',$dir_2);

		//统计长度
		$len = count($dir_1_arr) > count($dir_2_arr) ? count($dir_2_arr) : count($dir_1_arr);
			
		for($i=0;$i<$len;$i++){
			if($dir_1_arr[$i] == $dir_2_arr[$i]){
				$res[] = $dir_1_arr[$i];
			}
		}

		$res = implode($res,'/');
		return $res;

	}



	//便利目录
	function listDir($dir = ''){
		//打开文件句柄
		$handle = opendir($dir);
		//循环路径下的文件结点 读取当前的结点 赋值到一个变量
		while (($file=readdir($handle)) !== false){
			if ($file == '.' || $file == '..'){
				//如果是 . .. 说明不是文件或文件夹 继续下次循环
				continue;
			}
			//将文件名或文件夹名拼接在目录后边
			$filePath = $dir.'/'.$file;
			if(is_dir($filePath)){
				//如果是文件夹，递归判断
				$this->listDir($filePath);
			}else{
				//如果是文件，输出路径即可
				echo "<pre>";
				echo "<br>";
				echo $filePath;
			}
		}
		closedir($handle);
	}



}
new week2();