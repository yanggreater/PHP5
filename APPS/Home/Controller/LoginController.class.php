<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
        public function login(){
    	$this->display();
      }
    public function dologin(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $code=$_POST['code'];
        if(check_code($code) === false){
                $this->error('验证码错误');
            }
        $m=M('user');
        $where['username']=$username; 
            $where['password']=$password;
            $arr=$m->field('id')->where($where)->find();
            if($arr){
                $_SESSION['username']=$username;
                $_SESSION['id']=$arr['id'];
                $this->redirect('Index/index');
            }else{
                $this->error('用户不存在或密码错误');
            }


        }
    public function logout(){
        $_SESSION=array();
            if(isset($COOKIE[session_name()])){
                setcookie(session_name(),'',time()-1,'/');
            }
            session_destroy();
            $this->redirect('Index/index');
    }
}
