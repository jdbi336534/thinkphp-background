<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' =>'mysql',
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'background',
    'DB_USER'=>'root',
    'DB_PWD'=>'jdbi336534',
    'DB_PORT'=>'3306',
    'DB_PREFIX'=>'',
		// 配置邮件发送服务器
		'MAIL_HOST' =>'smtp.woline.top',
		'MAIL_SMTPAUTH' =>true, //启用smtp认证
		'MAIL_USERNAME' =>'woline@woline.top',
		'MAIL_FROM' =>'woline@woline.top',
		'MAIL_FROMNAME' =>'www.woline.top',
		'MAIL_PASSWORD' =>'Jdbi336534',
		'MAIL_CHARSET' =>'UTF-8',
		'MAIL_ISHTML' =>true, // 是否HTML格式邮件
    //session
    'SESSION_AUTO_START'    =>  true,
    'SESSION_OPTIONS'       =>  array('name'=>'session_id','expire'=>3600),
    'SESSION_TYPE'          =>  '',
    'SESSION_PREFIX'        =>  '',
);
