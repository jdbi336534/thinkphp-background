<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />

		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/bootstrap.min.css">
		<!--	<link rel="stylesheet" href="css/reset.css">-->
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/background.css" />
		<script src="/thinkphp3.2.3/Public/js/jquery.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/bootstrap.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/background.js"></script>
		<title>邮乐网后台管理系统</title>
		<style type="text/css">
			.pannel-my {
				background: none;
				color: white;
				border-color: white;
				border: none;
				border-bottom: 1px solid #7d7d7d;
			}
		</style>
		<script type="text/javascript">
			$(function() {
				$('#collapseOne').collapse('show')
			});
		</script>
	</head>

	<body style="overflow-y: hidden;">
		<div id="top_nav">
			<a href="#"><img src="/thinkphp3.2.3/Public/img/ule.png" /></a>

			<ul class="nav nav-tabs" style="float:right;margin-right:20px;">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Oliver
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<!-- links -->

						<li>
							<a href="#"><span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>我的资料</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-envelope" style="margin-right:5px;"></span>我的消息</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-tasks" style="margin-right:5px;"></span>我的任务</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-off" style="margin-right:5px;"></span>退出登录</a>
						</li>
					</ul>
				</li>
			</ul>
			<a href="#"><span class="glyphicon glyphicon-tasks" style="color:white;font-size:18px;float:right;margin-right:20px;line-height: 43px;"></span></a>
			<a href="#"><span class="glyphicon glyphicon-envelope" style="color:white;font-size:18px;float:right;margin-right:20px;line-height: 43px;"></span></a>
		</div>
		<div id="left_nav">
			<div class="shangping">
				<span class="glyphicon glyphicon-th" style="margin-right:5px;"></span> 商品管理
				<span class="selected"></span>
			</div>
			<div class="panel-group" id="accordion">
				<div class="panel pannel-my">
					<div class="panel-heading">
						<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseOne" id="callone">
					<span class="glyphicon glyphicon-th-list" style="margin-right:5px;"></span>商品分类
					<span class="arrow arrleft"></span>
				</a>
			</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">

						<ul id="list-group">
							<li>
								<a href="#">主页商品</a>
							</li>
							<li>
								<a href="#" class="active">列表页商品</a>
							</li>
							<li>
								<a href="#">商品详情</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="panel pannel-my">
					<div class="panel-heading">
						<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseTwo" id="calltwo">
					<span class="glyphicon glyphicon-euro" style="margin-right:5px;"></span>财务管理
					<span class="arrow arrleft"></span>
				</a>
			</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<ul id="list-group">
							<li>
								<a href="#">菜单一</a>
							</li>
							<li>
								<a href="#">菜单二</a>
							</li>
							<li>
								<a href="#">菜单三</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="panel pannel-my">
					<div class="panel-heading">
						<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseThree" id="callthree">
					<span class="glyphicon glyphicon-flag" style="margin-right:5px;"></span>宣传管理
					<span class="arrow arrleft"></span>
				</a>
			</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<ul id="list-group">
							<li>
								<a href="#">添加商品</a>
							</li>
							<li>
								<a href="#">删除商品</a>
							</li>
							<li>
								<a href="#">修改商品</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<div id="show_div">
			<iframe src="table.html" frameborder="no" border="0" width="100%" height="auto"></iframe>
		</div>

	</body>

</html>