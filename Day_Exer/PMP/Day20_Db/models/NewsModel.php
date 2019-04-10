<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 11:33:02
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-03 11:33:04
 */
namespace app\models;
use app\models\DbHelp;

class NewsModel{

    public function select($dbname='',$table=''){
        $Db = new DbHelp($dbname);
        $data = $Db->select($table);
        return $data;
    }

    public function find($dbname = '',$table = '',$condition = ''){
        $Db = new DbHelp($dbname);
        $data = $Db->find($table,$condition);
        return $data;
    }




}