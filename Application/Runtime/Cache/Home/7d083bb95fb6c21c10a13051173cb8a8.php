<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/ngDialog.min.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/reset.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/background.css" />
		<script src="/thinkphp3.2.3/Public/js/jquery.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/angular.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/ngDialog.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/table.js"></script>
		<script src="/thinkphp3.2.3/Public/js/bootstrap.min.js"></script>
		<script src="/thinkphp3.2.3/Public/js/background.js"></script>
		<title></title>
	</head>

	<body data-ng-app="backApp" ng-controller="backCtrl">

		<div class="page-content">

			<div class="title">
				<p>
					<span class="glyphicon glyphicon-home"></span>
					<a href="index.html">主页</a>
					<i>&gt;</i>
					<a href="#">列表页商品管理</a>
				</p>
			
			</div>
				<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1" id="additem">
  			    <span class="glyphicon glyphicon-pencil"></span>
 			     增加
 				</button>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>商品名</th>
						<th>价格</th>
						<th>图片位置</th>
						<th>店铺置</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<tr data-ng-repeat="x in categorie track by $index">
						<td>{{x.prdname1}}<i>{{x.prdfont1}}</i>{{x.prdi}}<i>{{x.prdfont2}}</i>{{x.prdname2}}</td>
						<td><i>{{x.prdprice}}</i></td>
						<td><img ng-src="/thinkphp3.2.3/Public/{{x.prdimgsrc}}" style="width:60px;height:60px;" /></td>
						<td>{{x.prddianpu}}</td>
						<td>

							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" data-ng-click="getindex($index)">
  			    <span class="glyphicon glyphicon-pencil"></span>
 			        编辑
 				</button>
							<button type="button" class="btn btn-danger btn-sm" data-ng-click="deldata($index)">
   			    <span class="glyphicon glyphicon-remove"></span>
 			        删除
				</button>

						</td>
					</tr>

				</tbody>
			</table>

			<!-- 模态框（Modal）编辑 -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
							<h4 class="modal-title" id="myModalLabel">
					修改商品信息
				</h4>
						</div>
						<div class="modal-body">
							<div class="input-group">
								<span class="input-group-addon">商品名</span>
								<input type="text" class="form-control" placeholder="请输入要修改的商品名" ng-model="prdname1" ng-value="{{33}}">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">关键字1</span>
								<input type="text" class="form-control" placeholder="请输入要修改的关键字1" ng-model="prdfont1">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">关键字中间名</span>
								<input type="text" class="form-control" placeholder="请输入要修改的关键字中间名" ng-model="prdi">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">关键字2</span>
								<input type="text" class="form-control" placeholder="请输入要修改的关键字2" ng-model="prdfont2">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">商品名补充</span>
								<input type="text" class="form-control" placeholder="请输入要修改的商品名补充" ng-model="prdname2">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">价格</span>
								<input type="text" class="form-control" placeholder="请输入要修改的商品价格" ng-model="prdprice">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">图片路径</span>
								<input type="text" class="form-control" placeholder="请输入要修改的图片路径" ng-model="prdimgsrc">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">店铺名</span>
								<input type="text" class="form-control" placeholder="请输入要修改的店铺名" ng-model="prddianpu">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">？人评价</span>
								<input type="text" class="form-control" placeholder="请输入要评价的人数" ng-model="prdpingjia">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
							<button type="button" class="btn btn-primary" ng-click="gengxin()">
					提交更改
				</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal -->
			</div>
			
			
			
			
			
			
			
			
			
			
<!-- 模态框（Modal） -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
							<h4 class="modal-title" id="myModalLabel">
					增加商品
				</h4>
						</div>
						<div class="modal-body">
							<div class="input-group">
								<span class="input-group-addon">商品名</span>
								<input type="text" class="form-control" placeholder="请输入要添加的商品名" ng-model="prdname1">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">关键字1</span>
								<input type="text" class="form-control" placeholder="请输入要添加的关键字1" ng-model="prdfont1">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">关键字中间名</span>
								<input type="text" class="form-control" placeholder="请输入要添加的关键字中间名" ng-model="prdi">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">关键字2</span>
								<input type="text" class="form-control" placeholder="请输入要添加的关键字2" ng-model="prdfont2">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">商品名补充</span>
								<input type="text" class="form-control" placeholder="请输入要添加的商品名补充" ng-model="prdname2">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">价格</span>
								<input type="text" class="form-control" placeholder="请输入要添加的商品价格" ng-model="prdprice">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">图片路径</span>
								<input type="text" class="form-control" placeholder="请输入要添加的图片路径" ng-model="prdimgsrc">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">店铺名</span>
								<input type="text" class="form-control" placeholder="请输入要添加的店铺名" ng-model="prddianpu">
							</div>
							<br/>
							<div class="input-group">
								<span class="input-group-addon">？人评价</span>
								<input type="text" class="form-control" placeholder="请输入要评价的人数" ng-model="prdpingjia">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
							<button type="button" class="btn btn-primary" ng-click="getval()">
					确认提交
				</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal -->
			</div>
		</div>

	</body>

</html>