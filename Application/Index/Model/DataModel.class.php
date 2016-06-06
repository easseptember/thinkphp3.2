<?php
namespace Index\Model;
use Think\Model;

/**
 * Class DataModel
 * @package Index\Model
 * @author Eass_September<15522280@qq.com>
 * @date 201606061722
 * @todo DATA模型
 */
class DataModel extends Model{
    /**
     * @param int $id
     * @param string $title
     * @param string $context
     * @param string $inputtime
     * @return fix $proaccrs;
     * @todo 模型层更新操作总操作方法（增加与修改）
     */
    public function updateInfo($id = 0,$title = "",$context = "",$inputtime = ""){
        $data = array("id"=>$id,"title"=>$title,"context"=>$context,"inputtime"=>$inputtime);
        /**
         * 若ID=0(为空) 执行增加操作  ID>0 执行更新操作
         */
        if($id==0){
            $proaccrs = M("data")->add($data);
        }else{
            $proaccrs = M("data")->save($data);
        }
        return $proaccrs;
    }

    /**
     * @param string $field
     * @param array $where
     * @param string $limit
     * @param string $order
     * @return mixed $list
     * @todo 模型层获取数据(多条)
     */
    public function getList($field="",$where=array(),$limit="",$order=""){
        $list = M("data")->field($field)->where($where)->order($order)->limit($limit)->select();
        return $list;
    }

    /**
     * @param array $where
     * @return mixed $result
     * @todo 模型层获取数据（单条）
     */
    public function getOne($where=array()){
        $result = M("data")->where($where)->find();
        return $result;
    }
    public function del($where=array()){
        $result = M("data")->where($where)->delete();
        return $result;
    }
}