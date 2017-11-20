<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(!isset($_SESSION['username'])||$_SESSION['username']==''){
    		$this->redirect('Login/login');
    	}else{
    		 $m=M('message');
    		 $arr=$m->select();
    		 $this->assign('list',$arr);
    		 $this->display();
    		}
    	
      
    }
    public function top(){
    	$this->display();
    }
     public function left(){
     	$m=D('message');
     	$count=$m->count();
     	$page= new \Think\Page($count,3);
     	
     	$show1=$page->show();
    	$arr=$m->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign('list',$arr);
    	$this->assign('show2',$show1);
    	$this->display();
    }
     public function right(){
    	$this->display();
    }
}
