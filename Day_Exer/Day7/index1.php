<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-19 10:52:59
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-19 15:02:54
 */
include("Model.php");
$model = new Model();
$res = $model->table("user")						//表名->支持字符串形式"user"
			 ->filed(['name','pwd'])				//字段->支持字符串形式"name,pwd" 支持数组形式['name','pwd']
			 ->where(['name'=>'jxc','pwd'=>'123'])	//条件->支持字符串形式"name = jxc and pwd = 123" 支持字符串形式"name = jxc,pwd = 123" 支持数组形式['name'=>'jxc','pwd'=>'123']
			 ->select();
var_dump($res);