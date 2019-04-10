<?php
/**
 * Created by PhpStorm.
 * User: 贾鑫晨
 * Date: 2019/3/22
 * Time: 11:09
 */
include('Model.php');
$Model = new Model();

/**
 *表名->支持字符串形式"user" 区别名直接 user u 形式
 *字段->支持字符串形式"name,pwd" 支持数组形式['name','pwd']  若字段中携带'.' 例如 u.* 则不加反引号
 *条件->支持字符串形式"name = jxc and pwd = 123" 支持字符串形式"name = jxc,pwd = 123" 支持数组形式['name'=>'jxc','pwd'=>'123']  若字符串条件值不手动加引号，则没有引号；手动加了就有。 数组条件值无论有没有引号会自动加引号。
 * 联查->表名区别名直接空格别名 例如：user u 。关联条件与sql语句的一样，联查方式写left或right或inner
 * limit->偏移量和每页显示条数,默认每页显示10条，可不穿nums参数。若没有offset参数，一致默认为第一页。
 * order->字段和排序方式 ASC 或 DESC 默认ASC方式，可不写。
 * select->查询方法
 */
    $res = $Model
        ->table("goods g")
        ->join("userinfo u","g.goods_id = u.user_id","left")
        ->join("ticket t","u.user_id = t.id","left")
        ->filed("goods_name,u.*,t.*")
        ->where(['goods_id'=>1])
        ->like("u.user_name","%贾%")
        ->like("u.user_pwd","%123%")
        ->limit(0,10)
        ->order('goods_price','ASC')
        ->select();


var_dump($res);die();



    $res = $Model->table('userinfo')->where(['user_id'=>3])->Delete();

    $data = ['addtime'=>time()];
    $res = $Model->table('userinfo')->where(['user_id'=>1])->Save($data);

    $data = [
        'user_name' => '苏帅兵',
        'user_pwd' => '123',
        'addtime' => time(),
    ];
    $res = $Model->table('userinfo')->Insert($data);