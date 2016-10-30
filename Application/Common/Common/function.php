<?php

//function verify(){ //初始化验证码
//			$verify = new \Think\Verify();
//			$verify->entry(1);   //entry方法需要传入可标识的信息,entry(1)表示验证码一
//		}

   function check_code($code, $id =1){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

/**
* 邮件发送函数
*/
function sendMail($to, $subject, $content) {

  Vendor('PHPMailer.PHPMailerAutoload');
  try {
  	$mail = new PHPMailer(true);
  	$mail->IsSMTP();
  	$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
  	$mail->SMTPAuth   = C('MAIL_SMTPAUTH');                  //开启认证
  	$mail->Port       = 25;
  	$mail->Host       = C('MAIL_HOST');
  	$mail->Username   = C('MAIL_USERNAME');
  	$mail->Password   = C('MAIL_PASSWORD');
  	//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could  not execute: /var/qmail/bin/sendmail ”的错误提示
  	$mail->AddReplyTo("992042912@qq.com","woline");//回复地址
  	$mail->From       = C('MAIL_FROM');
  	$mail->FromName   = C('MAIL_FROMNAME');
  	$mail->AddAddress($to);
  	$mail->Subject  = $subject;
  	// $mail->Body = "<h1>phpmail演示</h1>这是woline（<font color=red>www.woline.com</font>）对phpmailer的测试内容";
    $mail->Body = $content;
  	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
  	$mail->WordWrap   = 80; // 设置每行字符串的长度
  	//$mail->AddAttachment("f:/test.png");  //可以添加附件
  	$mail->IsHTML(true);
  	$mail->Send();
  	echo '邮件已发送';
  } catch (phpmailerException $e) {
  	echo "邮件发送失败：".$e->errorMessage();
  }
}
?>
