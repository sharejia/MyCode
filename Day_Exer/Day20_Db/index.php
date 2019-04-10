<?php
/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 11:32:00
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-03 16:08:03
 */

//自动加载
include("Loder.php");
spl_autoload_register("Loder::autoload");

//接受参数方法名
$action = $_GET['a'];
//接收控制器名称
$class 	= $_GET['c'];

//实例化类
$name = "app\controllers"."\\".$class."Controller";
$new  = new $name();

//调用方法
$new->$action();