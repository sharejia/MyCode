<?php
/**
 * Created by PhpStorm.
 * User: 贾鑫晨
 * Date: 2019/3/22
 * Time: 10:41
 */
include('Db.php');
class Model{

    protected $_db         = '';           //数据库连接信息
    protected $filed        = '*';        //字段默认所有
    protected $where     = 'where 1=1 ';  //条件默认true
    protected $table       = '';         //表名
    protected $limit        = '';          //区间查找
    protected $order      = '';          //排序的字段
    protected $_join      = "";         //联查语句（已组装）
    protected $like         = '';          //模糊查询

    /**
     * 实力化Db  连接数据库PDO
     * Model constructor.
     */
    public function __construct(){
        //实例化Db，连接数据库
        $Db = Db::Instance();
        $this->_db = $Db::connect();
    }

    /**
     * [filed description] 函数目的：接收字段条件filed
     * @param  [type] $filed [description]
     * @return [type]        [description]
     */
    public function filed($field){
        $sql = ' ';
        if(is_array($field)){
            foreach ($field as $k => $v) {
                if(strpos($v,'.')){
                    $sql .= $v.',';
                }else{
                    $sql .= '`'.$v.'`,';
                }
            }
            $sql = substr($sql,0,-1);
            $sql .= ' ';
        }else{
            $field_arr = explode(',',$field);
            foreach($field_arr as $k => $v){
                if(strpos($v,'.')){
                    $field_arr[$k] = $v;
                }else{
                    $field_arr[$k] = '`'.$v.'`';
                }
            }
            $sql = implode(',',$field_arr);
        }
        $this->filed = $sql;
        return $this;
    }

    /**
     * 函数目的：接收数据表名称
     * @param $table
     * @return $this
     */
    public function table($table){
        $this->table = ' from '.$table;
        return $this;
    }

    /**
     * 多表联查
     * @param string $table
     * @param string $condition
     * @param string $method
     * @return $this
     */
    public function join($table = "",$condition = "",$method = "left"){
        static $join = ' ';
        $join .= $method.' join '.$table.' on '.$condition.' ';
        $this->_join = $join;
        return $this;
    }

    /**
     * [where description] 函数目的：接收where条件
     * @param  [type] $where [description]
     * @return [type]        [description]
     */
    public function where($where){
        $sql = " where ";
        if(is_array($where)){
            foreach ($where as $k => $v) {
                $sql .= $k.' = '.'\''.$v.'\''.' and ';
            }
            $sql = substr($sql,0,-4);
        }else if(is_string($where) && !strstr($where,',')){
            //不包含逗号 例如"goods_name = 'jxc' and goods_id = 1" 值需要自己加单引号
            $sql .= "$where".' ';
        }elseif (strstr($where,',')) {
            //包含逗号 例如"goods_name = 'jxc',goods_id = '1'" 值需要自己加单引号
            $where_arr = explode(',',$where);
            foreach ($where_arr as $k => $v) {
                $sql .= $v.' and ';
            }
            $sql = substr($sql,0,-4);
        }
        $this->where = $sql;
        return $this;
    }

    /**
     * 函数目的：区间查找
     * @param int $offset
     * @param int $nums
     * @return $this
     */
    public function limit($offset = 0,$nums = 10){
        $sql = "limit ".$offset.','.$nums;
        $this->limit = $sql;
        return $this;
    }

    /**
     * 函数目的：排序条件
     * @param string $ord_field
     * @param string $method
     * @return $this
     */
    public function order($ord_field = '',$method = "ASC"){
        $sql = "ORDER BY ".$ord_field." ".$method.' ';
        $this->order = $sql;
        return $this;
    }

    public function like($field = '',$like = ''){
        static $sql = '';
        $sql .= ' and '.$field." like '".$like."' ";
        $this->like = $sql;
        return $this;
    }


    /**
     * 查询数据
     */
    public function Select(){
        $sql = "select ";
        /**
         * 处理字段field
         */
        $sql .= $this->filed;

        /**
         * 处理表名
         */
        $sql .= $this->table.' ';

        /**
         * 处理两表联查
         */
        $sql .= $this->_join;

        /**
         * 处理where条件
         */
        $sql .= $this->where;

        /**
         * 处理模糊查询
         */
        $sql .= $this->like;

        /**
         * 处理排序
         */
        $sql .= $this->order;

        /**
         * 处理limit条件
         */
        $sql .= $this->limit;
        $data = $this->_db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function Delete(){
        $sql = "delete from ";
        $sql .= $this->table.' ';
        $sql .= $this->where;
        $res = $this->_db->exec($sql);
        return$res;
    }

    public function Save($data = ''){
        $sql = "update ".$this->table.' set ';

        foreach($data as $k => $v){
            $sql .= $k.'='.$v;
        }
        $sql .= ' '.$this->where;
        $res = $this->_db->exec($sql);
        return $res;

    }

    public function Insert($data = ''){
        $sql = "insert into ".$this->table.' (';
        foreach($data as $k => $v){
            $sql .= $k.',';
        }
        $sql = substr($sql,0,-1);
        $sql .= ')VALUES(';

        foreach($data as $k => $v){
            $sql .= "'".$v."',";
        }
        $sql = substr($sql,0,-1);
        $sql .= ')';

        $res = $this->_db->exec($sql);
        return $res;
    }

}
new Model();