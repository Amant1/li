<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	  //初始化方法
    	  function _initialize(){
                        $m = M("jingli");
                        $arr = $m->find(1);
       		if($_SESSION['username'] == "" || $_SESSION['kouling'] !=md5(md5($arr['kouling']))){
       			$this->error('非法操作',U('Admin/Login/login'),3);
       		}
         	}

            public function myRelust($result){
                if($result == false){
                    $this->error("操作失败！");
                }else{
                    $this->success("操作成功！");
                }
            }
}
