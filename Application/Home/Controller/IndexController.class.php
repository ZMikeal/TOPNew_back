<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class IndexController extends BaseController {

	 
    public function index1(){
     //    $groups_list=M('admin')->where()->order('id desc')->select();
    	// $this->assign('groups_list',$groups_list);
       if(!session('?admin')){
          $this->redirect('login/login');
          exit;
        }
     // if(session('admin.id_level')!=2){
     //      $this->redirect('plan/index');
     //      exit;
     //  }
     if(session('admin.id_level')==2){
          $this->redirect('index/index2');
           exit;
      }
        $this->display();
    }
    public function index2(){

       if(!session('?admin')){
          $this->redirect('login/login');
          exit;
        }
        if(session('admin.id_level')!=2){
           $this->redirect('index/index1');
           exit;
       }
        $this->display();
    }
   
}