<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	public function reg(){
		$this->display();
	}
	public function doreg(){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$repassword=$_POST['repassword'];
			$code=$_POST['code'];
			$sex=$_POST['sex'];
			
		if($username==''||$password==''||$repassword==''||$sex==''){
			$this->error('请完善信息');
		}else{
			$m=M('user');
			$m->username=$username;
			$m->password=$password;
			$m->sex=$sex;
			$n=$m->add();
			if($n){
				$this->success('注册成功',U('Login/login'));
			}else{
				$this->error('注册失败');
			}
		}
		
	}
	//检查用户还是不是注册过
	public function checkname(){
		$username=$_GET['username'];
		$m=M('user');
		$where['username']=$username;
		$num=$m->where($where)->count();
		if($num){
			echo "不允许";
		}else{
			echo "允许";
		}
	}
	public function checkcode(){
		$code=$_GET['code'];
		if(check_code($code)===false){
			echo "0";
		}else{
			echo "1";
		}
	}
	
}