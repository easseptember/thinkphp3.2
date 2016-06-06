<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

/**
 * Class IndexController
 * @package Home\Controller
 * @author
 * @date
 */
class IndexController extends Controller {


     function _initialize(){

    }



    public function index(){

       // $Model = new Model(); // 实例化一个model对象 没有对应任何数据表
//        $this->model = new Model();
//        $rs = $this->model->query("select a.userid,b.roleid,a.realname from __ADMIN__ a,__ADMIN_ROLE__ b WHERE a.roleid=b.roleid and a.userid=1");
//        dump($rs);
        $this->display();
    }



    public function fit($n){
//        if ($n <= 0) {
//
//            return 0;
//
//        } elseif ($n == 1) {
//
//            return 1;
//
//        } else {
//
//            return $this->fit($n - 1) + $this->fit($n - 2);
//
//        }
    }
}