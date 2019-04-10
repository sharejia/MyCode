<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 15:43:26
 * @Last Modified by:   sharejia
 * @Last Modified time: 2019-04-07 15:08:52
 */
class Loder{

	public static function autoload($class){
		$class = str_replace("\\","/",$class);
        $file_name = __DIR__.'/'.substr($class,4).'.php';
        if(file_exists($file_name)){
            include($file_name);
        }
    }
}

function View($html = '',$data = []){
    $path = __DIR__. '/views/news/'.$html.'.html';
    include($path);
}