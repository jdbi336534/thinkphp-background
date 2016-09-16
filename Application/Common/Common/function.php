<?php

//function verify(){ //初始化验证码
//			$verify = new \Think\Verify();
//			$verify->entry(1);   //entry方法需要传入可标识的信息,entry(1)表示验证码一
//		}

   function check_code($code, $id =1){  
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
} 

?>