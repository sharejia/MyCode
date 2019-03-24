<?php
/**
 * Created by PhpStorm.
 * User: 贾鑫晨
 * Date: 2019/3/22
 * Time: 10:09
 */
class Db{
    private static $_Db = '';
    private static $_Con = null;

    private function __construct(){

    }

    private function __clone(){
        // TODO: Implement __clone() method.
    }

    /**
     * 实例化Db本类
     * @return Db|string
     */
    public static function Instance(){
        if(!self::$_Db instanceof Db){
            self::$_Db = new Db();
        }
        return self::$_Db;
    }

    public static function connect(){
        if(self::$_Con === null){
            self::$_Con = new PDO("mysql:host=127.0.0.1;dbname=yii","root","root");
        }
        return self::$_Con;
    }


}