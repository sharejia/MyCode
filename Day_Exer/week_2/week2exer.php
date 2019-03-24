<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-23 08:30:18
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-23 09:15:50
 */
class week2{

	public function __construct(){
		$res = $this->threeNum([1,2,3,4]);

		$res = $this->listDir();
		var_dump($res);
	}	

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

	function listDir($dir){
		  if(is_dir($dir))
		  {
		    if($handle = opendir($dir))
		    {
		      while($file = readdir($handle))
		      {
		        if($file != '.' && $file != '..')
		        {
		          if(is_dir($dir.DIRECTORY_SEPARATOR.$file))
		          {
		            echo '目录名：'.$dir.DIRECTORY_SEPARATOR.'<font color="red">'.$file.'</font><br />';
		            listDir($dir.DIRECTORY_SEPARATOR.$file);
		          }else{
		            echo '文件名：'.$dir.DIRECTORY_SEPARATOR.$file.'<br />';
		          }
		        }
		      }
		    }
		    return closedir($handle);
		  }else{
		    return '非有效目录!';
		  }
	}




}
new week2();