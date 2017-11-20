<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
		public function code(){
			$Verify = new \Think\Verify();
			$Verify->fontSize = 20;
			$Verify->length   = 4;
			$Verify->useNoise = false;
			
    		$Verify->entry();
		}
	

}