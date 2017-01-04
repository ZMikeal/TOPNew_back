<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    private $model;
    private $tbl;
    private $perpage;
    public function _initialize(){
        $this->perpage=5;
        if(!session('?admin')){
          $this->redirect('Login/login');
          exit;
        }
    }
    public function index($tbl,$morder,$related=0,$tj)
    {
      $this->model=D($tbl);
      $count      = $this->model->where($tj)->count();// 查询满足要求的总记录数
      $Page       = new \Think\Page($count,$this->perpage);// 实例化分页类 传入总记录数和每页p/显示的记录数(25)
      $show       = $Page->show();// 分页显示输出
      // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = $this->model->order($morder)->where($tj)->limit($Page->firstRow.','.$Page->listRows)->select();

      $this->assign('list',$list);// 赋值数据集
      $this->assign('page',$show);// 赋值分页输出 
      if($related!==1){
        $list=$this->model->order($morder)->limit($Page->first.",".$Page->listRows)->select();
      }
      else
      {
         $list=$this->model->relation(true)->order($morder)->limit($Page->first.",".$Page->listRows)->select();
      }
      //dump($list);exit;
      $modal2 = M('class');
        $parentlist = $modal2->where('lzh_fclass=0')->select();
        //dump($parentlist);exit;
        $catlist=array();
        for($i=0;$i<count($parentlist);$i++){
          $cat = array();
          $cat['catid'] = $parentlist[$i]['lzh_cid'];
          $cat['name'] = $parentlist[$i]['lzh_cname'];
          $cat['subcat'] = $modal2->where('lzh_fclass='.$parentlist[$i]['lzh_cid'])->select();
          $catlist[]=$cat;
          
        }
        //dump($catlist);exit;
        session('catlist',$catlist);
      /*$data=$this->model->where()->order($morder)->select();
      $this->assign('users',$data);*/
      $this->display();
    }
     
    public function form($tbl){
      $this->display();
    }
     
    public function mod($tbl){
      $this->model=D($tbl);
      $id=I('get.uid');
      
      //$this->model=M('user');
      $one=$this->model->find($id);
      //dump($one);exit;
      $this->assign('one',$one);
      $this->display();
    } 

    public function add($tbl,$mfield='thumb',$time,$dizhi,$sess){
      $this->model=D($tbl);
      $data=I('post.');
        $data['lzh_text']=htmlspecialchars_decode($data['content']);
        unset($data['content']);
        $data[$time]=date('Y-m-d H:i:s');
        //dump($data);exit;
        if($sess!="")
        {
          $data['lzh_admin']=$sess;
        }
        $data[$mfield]='';
        if(!empty($_FILES[$mfield]['name'])){
            $data[$mfield]=$this->uploadfile($mfield); 
        }
        else
        {
          $data[$mfield]=$dizhi;
        }
        
      //dump($data);exit;
      //$data['lzh_username']='';
      //dump($data);exit;
      //$this->model=D('user');
      
      if($this->model->create($data)){
        $this->model->add();
        $this->success('添加成功！',U('index'));
      }
        else{
          $this->error($this->model->getError());
        }
    }

     public function update($tbl,$mfield='thumb'){
      $this->model=D($tbl);
      $data=I('post.');
      //$data[$mfield]='';
      //dump($_FILES[$mfield]);exit;
        if(!empty($_FILES[$mfield]['name'])){
            $data[$mfield]=$this->uploadfile($mfield); 
            //dump($data[$mfield]);exit;
        }
        else
        {
          unset($data[$mfield]);
        }
      //dump($data);exit;
      //$this->model=M('apptype');
       /*if(!empty($_FILES['lzh_img']['name'])){
            $one=$this->model->where('id='.$data['lzh_id'])->getField('lzh_img');
            if(is_file(filename)){
                unlink();
            }
            $data['lzh_img']=$this->uploadfile('lzh_img'); 
        }*/
      //$data['lzh_img']=$this->uploadfile('lzh_img'); 
        $cid=$data['lzh_cid'];
      if($this->model->create($data)){
        $this->model->save();
        $this->success('更新成功！',U('index'));
      }
        else{
          $this->error('更新失败！');
        }
    }
    
public function delete($tbl){
  $this->model=D($tbl);
      $id=I('get.uid');
      //$this->model=M('user');
      $result=$this->model->delete($id);
      if($result)
      {
        $this->success('删除成功',U('index'));
      }
      else
      {
            $this->failure('删除失败');
      }

      //M('user')->delete(I('get.id'));
    }





     protected function uploadfile($field,$tsize=70){
    
$config = array(
    'maxSize'    =>    3145728,
    'rootPath'   =>    './Uploads/',
    'savePath'   =>    '',
    //'saveName'   =    array('uniqid',''),
    'exts'       =>   array('jpg', 'gif', 'png', 'jpeg'),
    'autoSub'    =>    true,
    'subName'    =>    array('date','Ymd'),
);

          $upload = new \Think\Upload($config);// 实例化上传类
          $upload->saveName = time().'_'.mt_rand();
    // 上传单个文件 
    $info   =   $upload->uploadOne($_FILES[$field]);
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功 获取上传文件信息
         $image=new\Think\Image();
         $image->open($config['rootPath'].$info['savepath'].$info['savename']);
         $image->thumb($tsize,$tsize,3)->save($config['rootPath'].$info['savepath'].'thumb'.$info['savename']);
         return $info['savepath'].'thumb'.$info['savename'];
    }
    }
}