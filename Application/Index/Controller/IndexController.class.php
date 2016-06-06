<?php
namespace Index\Controller;
use Think\Controller;


/**
 * Class IndexController
 * @package Index\Controller
 * @author Eass_September<15522280@qq.com>
 * @date 201606061532
 * @todo Thinkphp3.2 Message Test Project
 */
class IndexController extends Controller {
    /**
     * @todo 显示基础数据控制器
     */
    public function init(){
        $list = D("Data")->getList($field="id,title,context,inputtime",$where=array(),$limit="",$order="inputtime DESC");//获取所有数据
        $this->assign('list',$list);
        $this->display("index");
    }

    /**
     * @todo 添加与修改界面
     */
    public function add(){
        $id        = I("get.id");
        $result = D("Data")->getOne(array("id"=>$id));
        $this->assign('result',$result);
        $this->display();
    }

    /**
     * @todo 接收数据控制器
     */
    public function doUp(){
        if(IS_POST){
            $id        = I("post.id");
            $title     = I("post.title");
            $context   = I("post.context");
            $inputtime = time();
            empty($title)   && $this->error("请输入标题");
            empty($context) && $this->error("请输入内容");
            $updateRus = D("Data")->updateInfo($id,$title,$context,$inputtime);
            if(0<$updateRus){
                $this->success("操作成功",U("Index/index/init"));
            }else{
                $this->success("操作失败");
            }
        }else{
            $this->display();
            //exit("error");
        }

    }

    /**
     * @todo 删除数据控制器
     */
    public function del(){
        $id        = I("get.id");
        $result = D("Data")->del(array("id"=>$id));
        if(0<$result){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
}
}