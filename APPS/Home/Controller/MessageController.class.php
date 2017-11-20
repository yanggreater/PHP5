<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
	public function domessage(){
		$m=M('message');
		$m->create();
		$upload = new \Think\Upload();
		$upload->rootPath='./APPS/Uploads/';
		$info=$upload->upload();//此时的info包括你上传文件的各种信息
		if(!$info){//判断是否上传成功
				$this->error($upload->getError());
				
			}else{
				
				$m->filename=$info['filename']['savename'];//继续为数据库中添加信息
				$m->time=NOW_TIME;//时间为当前时间
				$m->uid=$_SESSION['id'];//uid是留言者user的id  之前在登录时将id存在SESSION中
				$n=$m->add();//n为填加后返回的id号
				if($n) {
					$this->success('留言成功');
				}else{
					$this->error('留言失败');
					
			    }
			}
			
			
	}


}