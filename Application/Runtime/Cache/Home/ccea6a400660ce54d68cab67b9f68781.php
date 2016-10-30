<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="/background/Public/img/favicon.ico" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" href="/background/Public/css/reset.css" />
		<link rel="stylesheet" href="/background/Public/css/style.css" />
		<script type="text/javascript" src="/background/Public/js/jquery-3.1.0.min.js"></script>
		<!--[if IE]>
		<script src="/background/Public/js/jquery-1.10.1.min.js"></script>
	    <![endif]-->
	     <script type="text/javascript" src="js/jQueryRotate.2.2.js"></script>
		<script type="text/javascript" src="/background/Public/js/login.js"></script>
		<script type="text/javascript" src="/background/Public/js/globle.js"></script>
	</head>

	<body class="w1280">
		<div class="header">
			<div class="head-top">
				<div class="layout">
					<ul class="fl shouye">
						<li>
							<a href="#">邮乐首页</a>
						</li>
					</ul>
					<ul class="fr userinfo">
						<li class="welcome "><a href="#"><?php echo (session('name')); ?></a> 您好，欢迎来到邮乐网！</li>
						<li class="login">
							<a href="/thinkphp3.2.3/index.php/Home/Index/openlogin">[请登录] </a>
							<a href="<?php echo U('Index/openurl');?>" target="_blank">[免费注册]</a>
						</li>
						<li class="bldr dropdown mylu">
							<a href="#">我的邮乐</a>
							<ul>
								<li>
									<a href="#">我的订单</a>
								</li>
								<li>
									<a href="#">我的收藏</a>
								</li>
								<li>
									<a href="#">我的站内信</a>
								</li>
							</ul>
						</li>
						<li class="bldr dropdown pifa">
							<a href="#">采集批发</a>
							<ul>
								<li>
									<a href="#">集团采购</a>
								</li>
								<li>
									<a href="#">商品批发</a>
								</li>
							</ul>
						</li>
						<li class="bldr all">
							<span></span>
							<a href="#">全部商品分类</a>
							<ul>
								<li></li>
							</ul>
						</li>
						<li class="bldr">
							<a href="#">网站地图</a>
						</li>
						<li class="bldr dropdown help">
							<a href="#">帮助中心</a>
							<ul>
								<li>
									<a href="#">购物指南</a>
								</li>
								<li>
									<a href="#">支付帮助</a>
								</li>
								<li>
									<a href="#">配送方式</a>
								</li>
								<li>
									<a href="#">售后服务</a>
								</li>
								<li>
									<a href="#">关于邮乐</a>
								</li>

							</ul>
						</li>
						<li class="bldr liphone">
							<span class="phone">11185</span>
							<p class="phonetips"></p>
						</li>
					</ul>
				</div>
				<div class="allCategory" id="allCategory" style="display: none;">
					<div class="allCategory_box">
						<ul class="allCategory_main clear" data-uspm="112" data-uspm-type="all">
							<li>
								<h4> <a href="#" target="_blank">美妆洗护</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">面部护肤 </a>
									<a href="#" target="_blank">美发护发 </a>
									<a href="#" target="_blank">口腔护理 </a>
									<a href="#" target="_blank">身体护理 </a>
									<a href="#" target="_blank">女性护理 </a>
									<a href="#" target="_blank">时尚彩妆 </a>
									<a href="#" target="_blank">香水 </a>
									<a href="#" target="_blank">男士护理 </a>
									<a href="#" target="_blank">洗浴用品 </a>
									<a href="#" target="_blank">成人用品 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">女装、饰品、配件</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">帽子 </a>
									<a href="#" target="_blank">裙裤 </a>
									<a href="#" target="_blank">外套 </a>
									<a href="#" target="_blank">流行饰品 </a>
									<a href="#" target="_blank">T恤/衬衫 </a>
									<a href="#" target="_blank">精致内衣 </a>
									<a href="#" target="_blank">针织衫 </a>
									<a href="#" target="_blank">手表/配件/眼镜 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">家居生活</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">家居用品 </a>
									<a href="#" target="_blank">床上用品 </a>
									<a href="#" target="_blank">收纳洗晒 </a>
									<a href="#" target="_blank">时尚灯具 </a>
									<a href="#" target="_blank">家装建材 </a>
									<a href="#" target="_blank">家纺日用 </a>
									<a href="#" target="_blank">学生文具 </a>
									<a href="#" target="_blank">五金装潢 </a>
									<a href="#" target="_blank">宠物生活 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">汽车用品</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">美容清洁 </a>
									<a href="#" target="_blank">车饰精品 </a>
									<a href="#" target="_blank">车载电器 </a>
									<a href="#" target="_blank">维修保养 </a>
									<a href="#" target="_blank">安全自驾 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">特色美食</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">干货 </a>
									<a href="#" target="_blank">健康粮油 </a>
									<a href="#" target="_blank">冲调食品 </a>
									<a href="#" target="_blank">酒类 </a>
									<a href="#" target="_blank">生鲜食品 </a>
									<a href="#" target="_blank">休闲零食 </a>
									<a href="#" target="_blank">饮料/水/牛奶 </a>
									<a href="#" target="_blank">厨房调料/方便速食 </a>
									<a href="#" target="_blank">特供礼盒 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">魅力男装</a> 
									<a href="h#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">衬衫 </a>
									<a href="#" target="_blank">男裤 </a>
									<a href="#" target="_blank">针织衫 </a>
									<a href="#" target="_blank">秋冬服 </a>
									<a href="#" target="_blank">T恤 </a>
									<a href="#" target="_blank">内衣 </a>
									<a href="#" target="_blank">外套 </a>
									<a href="#" target="_blank">配件 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">厨卫清洁</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">清洁剂 </a>
									<a href="#" target="_blank">一次性用品 </a>
									<a href="#" target="_blank">厨房保鲜 </a>
									<a href="#" target="_blank">生活用纸 </a>
									<a href="#" target="_blank">水具酒具 </a>
									<a href="#" target="_blank">清洁工具 </a>
									<a href="#" target="_blank">锅具水壶 </a>
									<a href="#" target="_blank">精美餐具 </a>
									<a href="#" target="_blank">厨房用具 </a>
									<a href="#" target="_blank">浴室用品 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">手机数码</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">手机通讯 </a>
									<a href="#" target="_blank">数码摄像 </a>
									<a href="#" target="_blank">数码影音 </a>
									<a href="#" target="_blank">手机配件 </a>
									<a href="#" target="_blank">数码配件 </a>
									<a href="#" target="_blank">智能设备 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">进口食品</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">进口乳制品 </a>
									<a href="#" target="_blank">进口糖果/巧克力 </a>
									<a href="#" target="_blank">进口食用油 </a>
									<a href="#" target="_blank">进口冲饮咖啡/茶 </a>
									<a href="#" target="_blank">进口休闲零食 </a>
									<a href="#" target="_blank">进口调味品 </a>
									<a href="#" target="_blank">进口酒类 </a>
									<a href="#" target="_blank">进口饼干糕点 </a>
									<a href="#" target="_blank">进口果干/蜜饯 </a>
									<a href="#" target="_blank">进口冲饮/早餐谷物 </a>
									<a href="#" target="_blank">进口饮用水/饮料 </a>
									<a href="#" target="_blank">进口米/面 </a>
									<a href="#" target="_blank">进口罐头 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">箱包鞋帽</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">功能箱包 </a>
									<a href="#" target="_blank">精品男包 </a>
									<a href="#" target="_blank">流行男鞋 </a>
									<a href="#" target="_blank">时尚女包 </a>
									<a href="#" target="_blank">潮流女鞋 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">电脑办公</a> <a href="#" target="_blank">商务礼品</a> </h4>
								<p>
									<a href="#" target="_blank">办公设备 </a>
									<a href="#" target="_blank">电脑硬件 </a>
									<a href="#" target="_blank">文具/耗材 </a>
									<a href="#" target="_blank">游戏设备 </a>
									<a href="#" target="_blank">电脑整机 </a>
									<a href="#" target="_blank">外设产品 </a>
									<a href="#" target="_blank">网络设备 </a>
									<a href="#" target="_blank">特色礼品 </a>
									<a href="#" target="_blank">纪念收藏 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">家用电器</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">生活电器 </a>
									<a href="#" target="_blank">个人护理电器 </a>
									<a href="#" target="_blank">厨房电器 </a>
									<a href="#" target="_blank">大家电 </a>
								</p>
							</li>
							<li style="display: none;">
								<h4> <a href="#" target="_blank">保健品</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">增强免疫力/抗疲劳 </a>
									<a href="#" target="_blank">减肥瘦身 </a>
									<a href="#" target="_blank">调节血压/血脂/血糖 </a>
									<a href="#" target="_blank">养生参茸食材 </a>
									<a href="#" target="_blank">美容养颜 </a>
									<a href="#" target="_blank">男/女性调养 </a>
									<a href="#" target="_blank">儿童营养 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">运动户外</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">运动服饰 </a>
									<a href="#" target="_blank">运动配件 </a>
									<a href="#" target="_blank">户外装备 </a>
									<a href="#" target="_blank">户外服饰 </a>
									<a href="#" target="_blank">户外包 </a>
									<a href="#" target="_blank">运动鞋包 </a>
									<a href="#" target="_blank">运动休闲健身 </a>
									<a href="#" target="_blank">运动器材 </a>
									<a href="#" target="_blank">户外鞋 </a>
								</p>
							</li>
							<li>
								<h4> <a href="#" target="_blank">母婴玩具</a> <a href="#" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="#" target="_blank">食品保健 </a>
									<a href="#" target="_blank">宝宝服饰 </a>
									<a href="#" target="_blank">寝室家具 </a>
									<a href="#" target="_blank">尿裤湿巾 </a>
									<a href="#" target="_blank">洗护用品 </a>
									<a href="#" target="_blank">妈妈用品 </a>
									<a href="#" target="_blank">哺喂用品 </a>
									<a href="#" target="_blank">出行用品 </a>
									<a href="#" target="_blank">玩具书籍 </a>
									<a href="#" target="_blank">儿童服饰 </a>
								</p>
							</li>
						</ul>
						<p class="allCategory_side" data-uspm="113">
							<a href="#" target="_blank">各地特产</a>
							<a href="#" target="_blank" class="s2">手机充值</a>
							<a href="#" target="_blank">生活缴费</a>
							<a href="#" target="_blank" class="s2">海外馆</a>
						</p>
					</div>
				</div>
			</div>

			<div class="head-main">
				<div class="head-logo" data-uspm="101">
					<a href="#" class="logo-ule">邮乐网</a>
				</div>

			</div>

		</div>
		<!--head-check-end-->
		<div id="wrapper">
			<div class="lunbo">
				<div class="wrapper-box lunbo1">
					<a href="#" class="alink"></a>
				</div>
				<div class="wrapper-box lunbo2">
					<a href="#" class="alink"></a>
				</div>
				<div class="wrapper-box lunbo3">
					<a href="#" class="alink"></a>
				</div>
			</div>

			<div class="login-box">
				<div class="login-form">
					<span class="box-title">登录</span>
					<form action="/background/index.php/Home/Index/login" method="post">

						<div class="email-wrap">
							<i class="email-icon"></i>
							<input type="text" class="account" name="username" value="" tabindex="1" autocomplete="off" placeholder="邮箱地址或手机号码">
							<span class="mail-error-tips" style="display: none;"> 此账号还未注册，请注册后再试!</span>

						</div>
						<div class="input-wrap">
							<i class="pwd-icon"></i>
							<input type="password" autocomplete="off" id="passwd" class="password" placeholder="密码" name="password" tabindex="2">
							<span class="psd-error-tips"> </span>

						</div>

						<div class="autologin">
							<input type="checkbox" name="freeLogin" id="J_autologin" tabindex="3" value="Y">
							<label for="J_autologin" class="autotip">这台电脑30天内免登录</label>
							<span class="forgot"><a href="https://my.ule.com/usr/forgetUserInfor.do" target="_blank" class="blueLink">忘记密码?</a></span>
						</div>
						<input type="submit" value="立即登录" class="login-btn">
						<span class="no-account">没有帐号？<a id="reg" href="<?php echo U('Index/openurl');?>">立即注册</a></span>
					</form>
					<div class="coop-site" id="openId">

						<span class="txt">您也可以使用以下合作网站帐号或<a href="http://my.ule.com/usr/bindHqUsr.do" class="yaoqingma">邀请码登录</a></span>
						<a href="#" class="pic-link1 sina" ></a>
						<a href="http://my.ule.com/usr/ThirdpartyLogin.do?thirdtype=qq" class="pic-link2"></a>
						<a href="#" class="pic-link3 tom"></a>
						<a href="#" class="pic-link4 ziyouyizu"></a>

					</div>
					<div class="alpha-layout"></div>
				</div>
				<div class="logo weixin">

				</div>
				<div class="weixinpanel" style="display: none;">
					<h3>手机扫码&nbsp;&nbsp;&nbsp;安全登录</h3>
					<div class="weixincontent">
						<p class="errorMsg" style="display: none;">二维码失效<br><span>请刷新二维码后重新扫描</span></p>
						<img src="https://my.ule.com/usr/ajax/qrcodeSave.do?data=1473404749846">
						<p class="btn">手机端登录后扫描</p>
						<p class="refreshImg">刷新二维码 |
							<a href="http://help.ule.com/helpcenter/573/322.html?uspm=1.2001.101569_21.nav.322_573.1" target="_blank" style="color:#1675be">使用帮助</a>
						</p>
					</div>
					<div class="succcontent" style="display: none;">
						<p class="succp">扫描成功！</p>
						<p class="tip">请按手机提示操作,请勿刷新本页面</p>
					</div>
				</div>
			</div>
		</div>

		<!--footer开始-->
		<div class="footer">
			<div class="layout">
				<div class="foot-banner">
					<a class="foot-banner-post" href="#" target="_blank" title="中国邮政">中国邮政</a>
					<a class="foot-banner-tom" href="#" target="_blank" title="TOM">TOM</a>
					<a class="foot-banner-commitment" href="#" target="_blank" title="100%正品承诺">100%正品承诺</a>
					<a class="foot-banner-free" href="#" target="_blank" title="覆盖城乡 安全速达">覆盖城乡 安全速达</a>
				</div>

				<div class="foot-helper">
					<ul class="clearfix">
						<li class="i1">
							<h4>购物指南</h4>
							<p data-uspm="141">
								<a target="_blank" href="#">购物流程</a>
								<a target="_blank" href="#">使用优惠券</a>
								<a target="_blank" href="#">积分规则</a>
								<a target="_blank" href="#">如何找回密码</a>
								<a target="_blank" href="#">订单多包裹配送</a>
								<a target="_blank" href="#">热搜关键词</a>
								<a target="_blank" href="#">在线客服（邮乐通）</a>
							</p>
						</li>
						<li class="i2">
							<h4>支付帮助</h4>
							<p data-uspm="142">
								<a target="_blank" href="#">邮乐卡支付</a>
								<a target="_blank" href="#">网上银行支付</a>
								<a target="_blank" href="#">邮储快捷支付</a>
								<a target="_blank" href="#">邮乐快捷支付协议</a>
								<a target="_blank" href="#">发票说明</a>
							</p>
						</li>
						<li class="i3">
							<h4>配送方式</h4>
							<p data-uspm="143">
								<a target="_blank" href="#">海外购物配送</a>
								<a target="_blank" href="#">签收拒收规则</a>
								<a target="_blank" href="#">配送时间/范围/运费</a>
							</p>
						</li>
						<li class="i4">
							<h4>售后服务</h4>
							<p data-uspm="144">
								<a target="_blank" href="#">退换货规则</a>
								<a target="_blank" href="#">退款说明</a>
								<a target="_blank" href="#">联系客服</a>
								<a target="_blank" href="#">退换货流程</a>
								<a target="_blank" href="#">退换货运费补偿标准</a>
								<a target="_blank" href="#">线下购物订单服务</a>
								<a target="_blank" href="#">纠纷申诉</a>
								<a target="_blank" href="#">纠纷申诉处理规则说明</a>
							</p>
						</li>
						<li class="i5">
							<h4>特色服务</h4>
							<p data-uspm="145">
								<a target="_blank" href="#">邮掌柜</a>
								<a target="_blank" href="#">大客户团购</a>
								<a target="_blank" href="#">邮乐海外站</a>
								<a target="_blank" href="#">手机充值</a>
							</p>
						</li>
						<li class="i6">
							<h4>关于邮乐</h4>
							<p data-uspm="146">
								<a target="_blank" href="#">邮乐简介</a>
								<a target="_blank" href="#">邮乐招商</a>
								<a target="_blank" href="#">商家入驻</a>
								<a target="_blank" href="#">批销商家入驻</a>
								<a target="_blank" href="#">诚聘英才</a>
								<a target="_blank" href="#">友情链接</a>
								<a target="_blank" href="#">用户协议</a>
								<a target="_blank" href="#">隐私权保护</a>
								<a target="_blank" href="#">网站地图</a>
							</p>
						</li>
					</ul>
				</div>

				<div class="foot-license">
					<ul>
						<li class="first">出版物经营许可证编号：沪零字第L6687号</li>
						<li>酒类商品零售许可证：0318030103000002</li>
						<li>食品流通许可证：SP3101151560900563</li>
						<li>统一社会信用代码:913100006916203638</li>
					</ul>
				</div>

				<div class="foot-copyright">沪ICP备:13037728 号 Copyright 2009-2015, 版权所有上海邮乐网络技术有限公司 ULE.COM</div>

				<div class="foot-iconlink clearfix">
					<a href="#" target="_blank" title="中国邮政"><b>中国邮政</b></a>
					<a href="#" target="_blank" title="TOM"><b>TOM</b></a>
					<a href="#" target="_blank" title="可信网站身份验证"><b>可信网站</b></a>
					<a href="#" target="_blank" title="EMS"><b>EMS</b></a>
					<a href="#" target="_blank" title="中国邮政储蓄银行"><b>中国邮政储蓄银行</b></a>
					<a href="#" target="_blank"><b>不良信息举报中心</b></a>
					<a href="#" target="_blank"><b>上海网警网络110</b></a>
					<a href="#" target="_blank"><b>上海工商</b></a>
					<a href="#" target="_blank"><b>诚信网站</b></a>
				</div>

			</div>
		</div>


	</body>

</html>