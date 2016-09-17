<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html ng-app="indexApp" ng-controller="indexCtrl">

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="/thinkphp3.2.3/Public/img/favicon.ico" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/reset.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/thinkphp3.2.3/Public/css/model1.css" />
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/jquery-3.1.0.min.js"></script>
		<!--[if IE]>
		<script src="/thinkphp3.2.3/Public/js/jquery-1.10.1.min.js"></script>
	    <![endif]-->
	    <script src="/thinkphp3.2.3/Public/js/angular.min.js"></script>
	    <script type="text/javascript" src="/thinkphp3.2.3/Public/js/index.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/jQueryRotate.2.2.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/globle.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/model1.js"></script>
	</head>

	<body class="w1280" >
		<div class="header">
			<div class="head-top">
				<div class="layout">
					<ul class="fl shouye">
						<li>
							<a href="#">邮乐首页</a>
						</li>
					</ul>
					<ul class="fr userinfo">
						<li class="welcome ">您好，欢迎来到邮乐网！</li>
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
			<div class="head-topline">
				<a href="#"></a>
			</div>
			<div class="head-main">
				<div class="head-logo" data-uspm="101">
					<a href="#" class="logo-ule">邮乐网</a>
				</div>
				<div class="head-shopcart" data-uspm="104" data-uspm-type="all">
					<span class="shopcart-sum" style="display:block;">购物车<span class="shopcart-num">0</span></span>
					<s></s>
					<ul class="shopcart-list">
						<li class="list-empty">您购物车里还没有任何宝贝，快来挑选吧</li>
					</ul>
				</div>
				<div class="head-search">
					<form id="headerSearch" name="headerSearch" action="#" target="_blank" autocomplete="off">
						<input type="hidden" name="uspm" data-uspm="102" />
						<input type="hidden" name="srcid" />
						<input type="text" name="keywords" class="txt-keyword" />
						<button type="submit" class="btn-search">搜索</button>
					</form>
					<ul class="search-suggest"></ul>

					<p class="search-hotkeys">
						<a href="#" target="_blank">
							<font color="red">新乡馆</font>
						</a>
						<a href="h#" target="_blank">太阳镜</a>
						<a href="#" target="_blank">美白面膜</a>
						<a href="#" target="_blank">
							<font color="red">薯片</font>
						</a>
						<a href="#" target="_blank">旺旺食品</a>
						<a href="#" target="_blank">纸巾</a>
						<a href="#" target="_blank">
							<font color="red">学生书包</font>
						</a>
						<a href="#" target="_blank">月饼</a>
						<a href="#" target="_blank">
							<font color="red">苹果</font>
						</a>
						<a href="#" target="_blank">
							<font color="red">精选手机</font>
						</a>

					</p>
				</div>
			</div>
			<div class="head-nav">
				<div class="layout">
					<ul class="navlinks" data-uspm="121" data-uspm-type="all">
						<li class="li-home on">
							<a class="nav-home" href="#" target="_blank">首页</a>
						</li>
						<li class="li-ju">
							<a class="nav-ju" href="#" target="_blank">聚热销
								<img style="position:absolute;margin-top:-13px;margin-left:-6px;display:inline;" src="img/ico_new.png"></a>
						</li>
						<li class="li-special">
							<a class="nav-special" href="#" target="_blank">天天特卖</a>
						</li>
						<li class="li-board">
							<a class="nav-board txt-down" href="#" target="_blank">海外馆</a>
						</li>
						<li class="li-techan">
							<a class="nav-techan" href="#" target="_blank">各地特产</a>
						</li>
						<li class="li-ulenp">
							<a class="nav-ulenp" href="#" target="_blank">邮乐农品</a>
						</li>
						<li class="li-life">
							<a class="nav-life" href="#" target="_blank">生活缴费</a>
						</li>
						<li class="li-trip">
							<a class="nav-trip" href="#" target="_blank">邮乐旅行</a>
						</li>
						<li class="li-coupon dropdown" name="coupon">
							<a data-uspm="coupon" class="nav-coupon txt-down" href="#" srcid="Homepage_nav_008" target="_blank">兑奖卡券<i></i></a>
							<div class="navcon ">
								<div class="navcon-frame">
									<ul>
										<li class="dc1">
											<a data-uspm="dc1" href="#" srcid="Homepage_nav_coupon_dc1" target="_blank">
												<img src="img/dc1.jpg">
												<label><strong>兑奖换礼</strong><span>专为端午卡、手拉手奖品、奶粉卡等设立的专供兑换的频道。在这里兑换的商品总会有一款是您的最爱。</span></label></a>
										</li>
										<li class="dc2">
											<a data-uspm="dc2" href="#" srcid="Homepage_nav_coupon_dc2" target="_blank">
												<img src="img/dc2.jpg">
												<label><strong>邮乐卡</strong><span>邮乐网专属购物卡，一卡通用完全打破域地域限制。是节日礼品，商务馈赠，企业福利的最好选择。</span></label></a>
										</li>
										<li class="dc3">
											<a data-uspm="dc3" href="#" srcid="Homepage_nav_coupon_dc3" target="_blank">
												<img src="img/dc3.jpg">
												<label><strong>优惠券</strong><span>邮乐优惠券大合集,让您省钱、省心、省力。别犹豫了，赶快领券，释放你买买买的洪荒之力吧。</span></label></a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="li-mobile dropdown" name="mobile">
							<a  class="nav-mobile txt-down" href="#"  target="_blank">手机邮乐<i></i></a>
							<div class="navcon navcon-mobile">
								<div class="navcon-frame">
									<ul>
										<li class="mb1">
											<a  href="#" target="_blank">
												<img src="img/mb1.jpg">
												<label>
													<strong>邮乐网</strong>
													<span>专业一站式B2C手机购物软件，海量商品，覆盖城乡，专享优惠，一手掌握，100%正品承诺。</span></label></a>
										</li>
										<li class="mb2">
											<a  href="#"  target="_blank">
												<img src="img/mb2.jpg">
												<label>
													<strong>邮生活</strong>
													<span>移动生活，你是专家！ <br>充值缴费面面俱到，做全能大管家 <br>机票酒店天马行空，做任性旅行家 <br>网购淘货一手掌握，做品质生活家</span></label></a>
										</li>
										<li class="mb3">
											<a  href="#"  target="_blank">
												<img src="img/mb3.jpg">
												<label>
													<strong>邮乐金融</strong>
													<span>让借钱从此变得简单、方便、不伤感情！ 免面签，免指纹，手机点几下，躺着就把钱借了！分期12个月，还款无压力。</span></label></a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--header结束-->
		<div class="firstscreen">
			<div class="mod-topslide">
				<ul class="slide-items banner_img">
					<li class="item-list" >
						<a href="#"><img id="lbimg1" ng-src="/thinkphp3.2.3/Public/{{item[0].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg2" ng-src="/thinkphp3.2.3/Public/{{item[1].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg3" ng-src="/thinkphp3.2.3/Public/{{item[2].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg4" ng-src="/thinkphp3.2.3/Public/{{item[3].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg5" ng-src="/thinkphp3.2.3/Public/{{item[4].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg6" ng-src="/thinkphp3.2.3/Public/{{item[5].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg7" ng-src="/thinkphp3.2.3/Public/{{item[6].imgsrc}}" /></a>
					</li>
					<li class="item-list" >
						<a href="#"><img id="lbimg8" ng-src="/thinkphp3.2.3/Public/{{item[7].imgsrc}}" /></a>
					</li>
					
					
				</ul>
				<div class="slide-bottom"></div>
				<div class="slide-index imgnum">
					<span index="0" class="">1</span>
					<span index="1" class="">2</span>
					<span index="2" class="">3</span>
					<span index="3" class="">4</span>
					<span index="4" class="">5</span>
					<span index="5" class="">6</span>
					<span index="6" class="">7</span>
					<span index="7" class="">8</span>
				</div>
			</div>
			<div class="grid-lmr clear">
				<div class="col-left mod-category" id="boxleft">
					<!--左边菜单-->
					<div class="cate-menu">
						<a href="#"></a>
					</div>
					<dl class="cate-bd">
						<dt morekey="数码" class="">
									<a class="z24"  href="#" ><i></i>手机/数码</a>
								</dt>
						<dd style="display: none;">
							<div class="subcate-recom ">
								<p>
									<a href="#" target="_blank" class="more" data-uspm="28032352m">数码</a>
									<a href="#" target="_blank" data-uspm="28032352t1">苹果机情 值得买的手机</a>
									<a href="#" target="_blank" data-uspm="28032352t2">九洲科瑞数码 Galaxy Note7耀世发售</a>
									<a href="#" target="_blank" data-uspm="28032352t3">OPPO R9 充电5分钟 通话2小时</a>
								</p>
							</div>
							<div class="clearfix wid">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--2697-huaweiHUAWEI------0-1.html" style="" target="_blank">华为</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--16504-sanxingSAMSUNG------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.13.1" style="" target="_blank">三星</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--5465-xiaomiMIUI------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.14.1" style="red" target="_blank">小米</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--8631-pingguoAPPLE------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.16.1" style="" target="_blank">苹果</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--16833-OPPO------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.21.1" style="" target="_blank">OPPO</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--37970-meizuMEIZU------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.33.1" style="" target="_blank">魅族</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--19151-leshi------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.29.1" style="" target="_blank">乐视</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--2400-HTC------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.78.1" style="" target="_blank">HTC</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--1513-lianxiangLenovo------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.48.1" style="red" target="_blank">联想</a>
											</li>
											<li>
												<a href="http://shuma.ule.com/28032352-shoujishuma--5800-pinsheng------0-1.html?uspm=1.1.103_C28032352_O0_P1.1033.17.1" style="" target="_blank">品胜</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032363" class="subcate-title" href="http://shuma.ule.com/28032363-shoujipeijian---------0-1.html" srcid="cateNav_28032352_4" target="_blank">手机配件</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032365" href="http://shuma.ule.com/28032365-shoujidianchi---------0-1.html" srcid="cateNav_28032352_5" target="_blank">手机电池</a>
											</li>
											<li>
												<a data-uspm="28032366" href="http://shuma.ule.com/28032366-erji---------0-1.html" srcid="cateNav_28032352_6" target="_blank">耳机</a>
											</li>
											<li>
												<a data-uspm="28032369" href="http://shuma.ule.com/28032369-shoujicunchuka---------0-1.html" srcid="cateNav_28032352_7" target="_blank">手机存储卡</a>
											</li>
											<li>
												<a data-uspm="28032370" href="http://shuma.ule.com/28032370-shujuxian---------0-1.html" srcid="cateNav_28032352_8" target="_blank">数据线</a>
											</li>
											<li>
												<a data-uspm="28032373" href="http://shuma.ule.com/28032373-baohutao---------0-1.html" srcid="cateNav_28032352_9" target="_blank">保护套</a>
											</li>
											<li>
												<a data-uspm="28032374" href="http://shuma.ule.com/28032374-tiemo---------0-1.html" srcid="cateNav_28032352_10" target="_blank">贴膜</a>
											</li>
											<li>
												<a data-uspm="28032376" href="http://shuma.ule.com/28032376-lanyaerji---------0-1.html" srcid="cateNav_28032352_11" target="_blank">蓝牙耳机</a>
											</li>
											<li>
												<a data-uspm="28032378" href="http://shuma.ule.com/28032378-shoujishipin---------0-1.html" srcid="cateNav_28032352_12" target="_blank">手机饰品</a>
											</li>
											<li>
												<a data-uspm="28032381" href="http://shuma.ule.com/28032381-shoujizhijia---------0-1.html" srcid="cateNav_28032352_13" target="_blank">手机支架</a>
											</li>
											<li>
												<a data-uspm="28032382" href="http://shuma.ule.com/28032382-paizhaopeijian---------0-1.html" srcid="cateNav_28032352_14" target="_blank">拍照配件</a>
											</li>
											<li>
												<a data-uspm="28033258" href="http://shuma.ule.com/28033258-yidongdianyuan---------0-1.html" srcid="cateNav_28032352_15" target="_blank">移动电源</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032398" class="subcate-title" href="http://shuma.ule.com/28032398-shumapeijian---------0-1.html" srcid="cateNav_28032352_23" target="_blank">数码配件</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032400" href="http://shuma.ule.com/28032400-cunchuka---------0-1.html" srcid="cateNav_28032352_24" target="_blank">存储卡</a>
											</li>
											<li>
												<a data-uspm="28032401" href="http://shuma.ule.com/28032401-dianchichongdianqi---------0-1.html" srcid="cateNav_28032352_25" target="_blank">电池/充电器</a>
											</li>
											<li>
												<a data-uspm="28032402" href="http://shuma.ule.com/28032402-dukaqi---------0-1.html" srcid="cateNav_28032352_26" target="_blank">读卡器</a>
											</li>
											<li>
												<a data-uspm="28032403" href="http://shuma.ule.com/28032403-xiangjibao---------0-1.html" srcid="cateNav_28032352_27" target="_blank">相机包</a>
											</li>
											<li>
												<a data-uspm="28032404" href="http://shuma.ule.com/28032404-lujing---------0-1.html" srcid="cateNav_28032352_28" target="_blank">滤镜</a>
											</li>
											<li>
												<a data-uspm="28032405" href="http://shuma.ule.com/28032405-qingjieyongpintiemo---------0-1.html" srcid="cateNav_28032352_29" target="_blank">清洁用品/贴膜</a>
											</li>
											<li>
												<a data-uspm="28032406" href="http://shuma.ule.com/28032406-sanjiaojiayuntai---------0-1.html" srcid="cateNav_28032352_30" target="_blank">三脚架/云台</a>
											</li>
											<li>
												<a data-uspm="28032408" href="http://shuma.ule.com/28032408-jingtou---------0-1.html" srcid="cateNav_28032352_31" target="_blank">镜头</a>
											</li>
											<li>
												<a data-uspm="28032409" href="http://shuma.ule.com/28032409-shanguangdengshoubing---------0-1.html" srcid="cateNav_28032352_32" target="_blank">闪光灯/手柄</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032424" class="subcate-title" href="http://shuma.ule.com/28032424-zhinengshebei---------0-1.html" srcid="cateNav_28032352_40" target="_blank">智能设备</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032425" href="http://shuma.ule.com/28032425-zhinengshoubiao---------0-1.html" srcid="cateNav_28032352_41" target="_blank">智能手表</a>
											</li>
											<li>
												<a data-uspm="28032427" href="http://shuma.ule.com/28032427-zhinengshouhuan---------0-1.html" srcid="cateNav_28032352_42" target="_blank">智能手环</a>
											</li>
											<li>
												<a data-uspm="28032428" href="http://shuma.ule.com/28032428-tiganche---------0-1.html" srcid="cateNav_28032352_43" target="_blank">体感车</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032359" class="subcate-title" href="http://shuma.ule.com/28032359-shoujitongxun---------0-1.html" srcid="cateNav_28032352_1" target="_blank">手机通讯</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032360" href="http://shuma.ule.com/28032360-shouji---------0-1.html" srcid="cateNav_28032352_2" target="_blank">手机</a>
											</li>
											<li>
												<a data-uspm="28032362" href="http://shuma.ule.com/28032362-duijiangji---------0-1.html" srcid="cateNav_28032352_3" target="_blank">对讲机</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032384" class="subcate-title" href="http://shuma.ule.com/28032384-sheyingshexiang---------0-1.html" srcid="cateNav_28032352_16" target="_blank">摄影摄像</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032385" href="http://shuma.ule.com/28032385-dandianweidanxiangji---------0-1.html" srcid="cateNav_28032352_17" target="_blank">单电/微单相机</a>
											</li>
											<li>
												<a data-uspm="28032387" href="http://shuma.ule.com/28032387-danfanxiangji---------0-1.html" srcid="cateNav_28032352_18" target="_blank">单反相机</a>
											</li>
											<li>
												<a data-uspm="28032393" href="http://shuma.ule.com/28032393-pailide---------0-1.html" srcid="cateNav_28032352_19" target="_blank">拍立得</a>
											</li>
											<li>
												<a data-uspm="28032389" href="http://shuma.ule.com/28032389-shexiangji---------0-1.html" srcid="cateNav_28032352_20" target="_blank">摄像机</a>
											</li>
											<li>
												<a data-uspm="28032390" href="http://shuma.ule.com/28032390-jingtou---------0-1.html" srcid="cateNav_28032352_21" target="_blank">镜头</a>
											</li>
											<li>
												<a data-uspm="28032391" href="http://shuma.ule.com/28032391-sheyingqicai---------0-1.html" srcid="cateNav_28032352_22" target="_blank">摄影器材</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032411" class="subcate-title" href="http://shuma.ule.com/28032411-shumayingyin---------0-1.html" srcid="cateNav_28032352_33" target="_blank">数码影音</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032412" href="http://shuma.ule.com/28032412-MP3MP4---------0-1.html" srcid="cateNav_28032352_34" target="_blank">MP3/MP4</a>
											</li>
											<li>
												<a data-uspm="28032413" href="http://shuma.ule.com/28032413-bianxiewuxianyinxiang---------0-1.html" srcid="cateNav_28032352_35" target="_blank">便携/无线音箱</a>
											</li>
											<li>
												<a data-uspm="28032414" href="http://shuma.ule.com/28032414-erjierfang---------0-1.html" srcid="cateNav_28032352_36" target="_blank">耳机/耳放</a>
											</li>
											<li>
												<a data-uspm="28032415" href="http://shuma.ule.com/28032415-shouyinji---------0-1.html" srcid="cateNav_28032352_37" target="_blank">收音机</a>
											</li>
											<li>
												<a data-uspm="28032417" href="http://shuma.ule.com/28032417-luyinbimaikefeng---------0-1.html" srcid="cateNav_28032352_38" target="_blank">录音笔/麦克风</a>
											</li>
											<li>
												<a data-uspm="28032416" href="http://shuma.ule.com/28032416-dianzijiaoyu---------0-1.html" srcid="cateNav_28032352_39" target="_blank">电子教育</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="电脑" class="">
									<a class="z28" data-uspm="z28032883" href="http://diannao.ule.com/" srcid="28032883_channel_home"><i></i>电脑办公</a>
								</dt>
						<dd style="display: none;">
							<div class="subcate-recom subcate-recom-c28032883">
								<p>
									<a href="http://diannao.ule.com/" target="_blank" class="more" data-uspm="28032883m">电脑</a>
									<a href="http://diannao.ule.com/2809-diannaozhengji---------0-1.html?uspm=1.1.1_V2014.100014.2809.1&amp;srcid=cateNav_28_1" target="_blank" data-uspm="28032883t1">高性能游戏/办公整机 华丽上新</a>
									<a href="http://diannao.ule.com/2803-bangongshebei---------0-1.html" target="_blank" data-uspm="28032883t2">办公设备一站购</a>
									<a href="http://diannao.ule.com/280901-bijiben--1513-lianxiangLENOVO------0-1.html?uspm=1.1.103_C280901_O0_P1.1033.2.1" target="_blank" data-uspm="28032883t3">Lenovo 联想 高性价比超极本</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-1513-lianxiangLenovo------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.13.1" style="" target="_blank">联想</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-1548-daierDELL------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.16.1" style="" target="_blank">戴尔</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-1833-huipu------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.12.1" style="" target="_blank">惠普</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-8631-pingguoAPPLE------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.11.1" style="" target="_blank">苹果</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-1563-THINKPAD------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.29.1" style="" target="_blank">THINKPAD</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-2697-huaweiHUAWEI------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.14.1" style="" target="_blank">华为</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-5465-xiaomiMIUI------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.17.1" style="" target="_blank">小米</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-16504-sanxingSAMSUNG------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.18.1" style="" target="_blank">三星</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032954-diannaozhengji-%E7%94%B5%E8%84%91-2505-beierjin------0-1.html?uspm=1.1.103_C28032954_O0_P1.1033.20.1" style="" target="_blank">贝尔金</a>
											</li>
											<li>
												<a href="http://diannao.ule.com/28032883-diannaobangong-%E7%94%B5%E8%84%91-33245-leijiRAJFOO------0-1.html?uspm=1.1.103_C28032883_O0_P1.1033.18.1" style="" target="_blank">雷技</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032962" class="subcate-title" href="http://diannao.ule.com/28032962-diannaoyingjian---------0-1.html" srcid="cateNav_28032883_9" target="_blank">电脑硬件</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032964" href="http://diannao.ule.com/28032964-yingpan---------0-1.html" srcid="cateNav_28032883_10" target="_blank">硬盘</a>
											</li>
											<li>
												<a data-uspm="28032965" href="http://diannao.ule.com/28032965-neicun---------0-1.html" srcid="cateNav_28032883_11" target="_blank">内存</a>
											</li>
											<li>
												<a data-uspm="28032966" href="http://diannao.ule.com/28032966-xianka---------0-1.html" srcid="cateNav_28032883_12" target="_blank">显卡</a>
											</li>
											<li>
												<a data-uspm="28032968" href="http://diannao.ule.com/28032968-sanreqi---------0-1.html" srcid="cateNav_28032883_13" target="_blank">散热器</a>
											</li>
											<li>
												<a data-uspm="28032969" href="http://diannao.ule.com/28032969-kelujiguangqu---------0-1.html" srcid="cateNav_28032883_14" target="_blank">刻录机/光驱</a>
											</li>
											<li>
												<a data-uspm="28032970" href="http://diannao.ule.com/28032970-shengkakuozhanka---------0-1.html" srcid="cateNav_28032883_15" target="_blank">声卡/扩展卡</a>
											</li>
											<li>
												<a data-uspm="28032971" href="http://diannao.ule.com/28032971-jixiang---------0-1.html" srcid="cateNav_28032883_16" target="_blank">机箱</a>
											</li>
											<li>
												<a data-uspm="28032975" href="http://diannao.ule.com/28032975-xianshiqi---------0-1.html" srcid="cateNav_28032883_17" target="_blank">显示器</a>
											</li>
											<li>
												<a data-uspm="28032973" href="http://diannao.ule.com/28032973-zhuangjipeijian---------0-1.html" srcid="cateNav_28032883_18" target="_blank">装机配件</a>
											</li>
											<li>
												<a data-uspm="28032972" href="http://diannao.ule.com/28032972-dianyuan---------0-1.html" srcid="cateNav_28032883_19" target="_blank">电源</a>
											</li>
											<li>
												<a data-uspm="28032974" href="http://diannao.ule.com/28032974-zuzhuangdiannao---------0-1.html" srcid="cateNav_28032883_20" target="_blank">组装电脑</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032999" class="subcate-title" href="http://diannao.ule.com/28032999-wangluoshebei---------0-1.html" srcid="cateNav_28032883_31" target="_blank">网络设备</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033000" href="http://diannao.ule.com/28033000-luyouqi---------0-1.html" srcid="cateNav_28032883_32" target="_blank">路由器</a>
											</li>
											<li>
												<a data-uspm="28033001" href="http://diannao.ule.com/28033001-wangka---------0-1.html" srcid="cateNav_28032883_33" target="_blank">网卡</a>
											</li>
											<li>
												<a data-uspm="28033002" href="http://diannao.ule.com/28033002-4G3Gshangwang---------0-1.html" srcid="cateNav_28032883_34" target="_blank">4G/3G上网</a>
											</li>
											<li>
												<a data-uspm="28033003" href="http://diannao.ule.com/28033003-jiaohuanji---------0-1.html" srcid="cateNav_28032883_35" target="_blank">交换机</a>
											</li>
											<li>
												<a data-uspm="28033004" href="http://diannao.ule.com/28033004-wangluohezi---------0-1.html" srcid="cateNav_28032883_36" target="_blank">网络盒子</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032885" class="subcate-title" href="http://diannao.ule.com/28032885-bangongshebei---------0-1.html" srcid="cateNav_28032883_41" target="_blank">办公设备</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032896" href="http://diannao.ule.com/28032896-dayinji---------0-1.html" srcid="cateNav_28032883_42" target="_blank">打印机</a>
											</li>
											<li>
												<a data-uspm="28032899" href="http://diannao.ule.com/28032899-touyingji---------0-1.html" srcid="cateNav_28032883_43" target="_blank">投影机</a>
											</li>
											<li>
												<a data-uspm="28032941" href="http://diannao.ule.com/28032941-saomiaoji---------0-1.html" srcid="cateNav_28032883_44" target="_blank">扫描机</a>
											</li>
											<li>
												<a data-uspm="28032942" href="http://diannao.ule.com/28032942-suizhiji---------0-1.html" srcid="cateNav_28032883_45" target="_blank">碎纸机</a>
											</li>
											<li>
												<a data-uspm="28032943" href="http://diannao.ule.com/28032943-kaoqinji---------0-1.html" srcid="cateNav_28032883_46" target="_blank">考勤机</a>
											</li>
											<li>
												<a data-uspm="28032944" href="http://diannao.ule.com/28032944-yanchaodianchaoji---------0-1.html" srcid="cateNav_28032883_47" target="_blank">验钞/点钞机</a>
											</li>
											<li>
												<a data-uspm="28032945" href="http://diannao.ule.com/28032945-zhuangdingsufengji---------0-1.html" srcid="cateNav_28032883_48" target="_blank">装订/塑封机</a>
											</li>
											<li>
												<a data-uspm="28032947" href="http://diannao.ule.com/28032947-duogongnengyitiji---------0-1.html" srcid="cateNav_28032883_49" target="_blank">多功能一体机</a>
											</li>
											<li>
												<a data-uspm="28032952" href="http://diannao.ule.com/28032952-baoxianxiangbaoxianju---------0-1.html" srcid="cateNav_28032883_50" target="_blank">保险箱/保险柜</a>
											</li>
											<li>
												<a data-uspm="28032948" href="http://diannao.ule.com/28032948-bangongjiaju---------0-1.html" srcid="cateNav_28032883_51" target="_blank">办公家具</a>
											</li>
											<li>
												<a data-uspm="28032949" href="http://diannao.ule.com/28032949-shoukuanPOSji---------0-1.html" srcid="cateNav_28032883_52" target="_blank">收款/POS机</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032954" class="subcate-title" href="http://diannao.ule.com/28032954-diannaozhengji---------0-1.html" srcid="cateNav_28032883_1" target="_blank">电脑整机</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032955" href="http://diannao.ule.com/28032955-bijiben---------0-1.html" srcid="cateNav_28032883_2" target="_blank">笔记本</a>
											</li>
											<li>
												<a data-uspm="28032956" href="http://diannao.ule.com/28032956-taishiji---------0-1.html" srcid="cateNav_28032883_3" target="_blank">台式机</a>
											</li>
											<li>
												<a data-uspm="28032957" href="http://diannao.ule.com/28032957-bijibenpeijian---------0-1.html" srcid="cateNav_28032883_4" target="_blank">笔记本配件</a>
											</li>
											<li>
												<a data-uspm="28032959" href="http://diannao.ule.com/28032959-chaojiben---------0-1.html" srcid="cateNav_28032883_5" target="_blank">超极本</a>
											</li>
											<li>
												<a data-uspm="28032958" href="http://diannao.ule.com/28032958-pingbandiannao---------0-1.html" srcid="cateNav_28032883_6" target="_blank">平板电脑</a>
											</li>
											<li>
												<a data-uspm="28032960" href="http://diannao.ule.com/28032960-pingbandiannaopeijian---------0-1.html" srcid="cateNav_28032883_7" target="_blank">平板电脑配件</a>
											</li>
											<li>
												<a data-uspm="28032961" href="http://diannao.ule.com/28032961-fuwuqigongzuozhan---------0-1.html" srcid="cateNav_28032883_8" target="_blank">服务器/工作站</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032976" class="subcate-title" href="http://diannao.ule.com/28032976-waishechanpin---------0-1.html" srcid="cateNav_28032883_21" target="_blank">外设产品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032977" href="http://diannao.ule.com/28032977-shubiao---------0-1.html" srcid="cateNav_28032883_22" target="_blank">鼠标</a>
											</li>
											<li>
												<a data-uspm="28032978" href="http://diannao.ule.com/28032978-jianpan---------0-1.html" srcid="cateNav_28032883_23" target="_blank">键盘</a>
											</li>
											<li>
												<a data-uspm="28032979" href="http://diannao.ule.com/28032979-yidongyingpan---------0-1.html" srcid="cateNav_28032883_24" target="_blank">移动硬盘</a>
											</li>
											<li>
												<a data-uspm="28032980" href="http://diannao.ule.com/28032980-Upan---------0-1.html" srcid="cateNav_28032883_25" target="_blank">U盘</a>
											</li>
											<li>
												<a data-uspm="28032981" href="http://diannao.ule.com/28032981-shexiangtou---------0-1.html" srcid="cateNav_28032883_26" target="_blank">摄像头</a>
											</li>
											<li>
												<a data-uspm="28032983" href="http://diannao.ule.com/28032983-shubiaodian---------0-1.html" srcid="cateNav_28032883_27" target="_blank">鼠标垫</a>
											</li>
											<li>
												<a data-uspm="28032986" href="http://diannao.ule.com/28032986-UPSdianyuan---------0-1.html" srcid="cateNav_28032883_28" target="_blank">UPS电源</a>
											</li>
											<li>
												<a data-uspm="28032984" href="http://diannao.ule.com/28032984-chazuo---------0-1.html" srcid="cateNav_28032883_29" target="_blank">插座</a>
											</li>
											<li>
												<a data-uspm="28032985" href="http://diannao.ule.com/28032985-shujuxianxianlan---------0-1.html" srcid="cateNav_28032883_30" target="_blank">数据线/线缆</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033005" class="subcate-title" href="http://diannao.ule.com/28033005-youxishebei---------0-1.html" srcid="cateNav_28032883_37" target="_blank">游戏设备</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033006" href="http://diannao.ule.com/28033006-youxizhuji---------0-1.html" srcid="cateNav_28032883_38" target="_blank">游戏主机</a>
											</li>
											<li>
												<a data-uspm="28033007" href="http://diannao.ule.com/28033007-ermaiyinxiang---------0-1.html" srcid="cateNav_28032883_39" target="_blank">耳麦/音箱</a>
											</li>
											<li>
												<a data-uspm="28033008" href="http://diannao.ule.com/28033008-shoubingfangxiangpan---------0-1.html" srcid="cateNav_28032883_40" target="_blank">手柄/方向盘</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032987" class="subcate-title" href="http://diannao.ule.com/28032987-wenjuhaocai---------0-1.html" srcid="cateNav_28032883_53" target="_blank">文具/耗材</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032997" href="http://diannao.ule.com/28032997-xigumofen---------0-1.html" srcid="cateNav_28032883_54" target="_blank">硒鼓/墨粉</a>
											</li>
											<li>
												<a data-uspm="28032995" href="http://diannao.ule.com/28032995-mohe---------0-1.html" srcid="cateNav_28032883_55" target="_blank">墨盒</a>
											</li>
											<li>
												<a data-uspm="28032994" href="http://diannao.ule.com/28032994-zhipin---------0-1.html" srcid="cateNav_28032883_56" target="_blank">纸品</a>
											</li>
											<li>
												<a data-uspm="28032993" href="http://diannao.ule.com/28032993-jisuanqi---------0-1.html" srcid="cateNav_28032883_57" target="_blank">计算器</a>
											</li>
											<li>
												<a data-uspm="28032990" href="http://diannao.ule.com/28032990-caihuiyongpin---------0-1.html" srcid="cateNav_28032883_58" target="_blank">财会用品</a>
											</li>
											<li>
												<a data-uspm="28032989" href="http://diannao.ule.com/28032989-wenjianguanli---------0-1.html" srcid="cateNav_28032883_59" target="_blank">文件管理</a>
											</li>
											<li>
												<a data-uspm="28032991" href="http://diannao.ule.com/28032991-bilei---------0-1.html" srcid="cateNav_28032883_60" target="_blank">笔类</a>
											</li>
											<li>
												<a data-uspm="28032992" href="http://diannao.ule.com/28032992-bencebianqian---------0-1.html" srcid="cateNav_28032883_61" target="_blank">本册/便签</a>
											</li>
											<li>
												<a data-uspm="28032988" href="http://diannao.ule.com/28032988-wenju---------0-1.html" srcid="cateNav_28032883_62" target="_blank">文具</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="家电" class="">
									<a class="z11" data-uspm="z28032176" href="http://jiadian.ule.com/" srcid="28032176_channel_home"><i></i>家用电器</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28032176">
								<p>
									<a href="http://jiadian.ule.com/" target="_blank" class="more" data-uspm="28032176m">家电</a>
									<a href="http://store.ule.com/store/7125.html" target="_blank" data-uspm="28032176t1">乐活健康专柜 满100减10</a>
									<a href="http://store.ule.com/store/6972.html" target="_blank" data-uspm="28032176t2">九阳旗舰店 满300减50</a>
									<a href="http://store.ule.com/store/9294.html" target="_blank" data-uspm="28032176t3">荣事达小家电 全场低于99</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E4%B9%9D%E9%98%B3.1&amp;srcid=searchkeywords_%E4%B9%9D%E9%98%B3&amp;keywords=%E4%B9%9D%E9%98%B3" style="" target="_blank">九阳</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E7%BE%8E%E7%9A%84.1&amp;srcid=searchkeywords_%E7%BE%8E%E7%9A%84&amp;keywords=%E7%BE%8E%E7%9A%84" style="" target="_blank">美的</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%8B%8F%E6%B3%8A%E5%B0%94.1&amp;srcid=searchkeywords_%E8%8B%8F%E6%B3%8A%E5%B0%94&amp;keywords=%E8%8B%8F%E6%B3%8A%E5%B0%94" style="" target="_blank">苏泊尔</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E9%A3%9E%E7%A7%91.1&amp;srcid=searchkeywords_%E9%A3%9E%E7%A7%91&amp;keywords=%E9%A3%9E%E7%A7%91" style="" target="_blank">飞科</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E5%A4%A9%E9%99%85.1&amp;srcid=searchkeywords_%E5%A4%A9%E9%99%85&amp;keywords=%E5%A4%A9%E9%99%85" style="" target="_blank">天际</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E9%A3%9E%E5%88%A9%E6%B5%A6.1&amp;srcid=searchkeywords_%E9%A3%9E%E5%88%A9%E6%B5%A6&amp;keywords=%E9%A3%9E%E5%88%A9%E6%B5%A6" style="" target="_blank">飞利浦</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E5%B0%8F%E7%86%8A.1&amp;srcid=searchkeywords_%E5%B0%8F%E7%86%8A&amp;keywords=%E5%B0%8F%E7%86%8A" style="" target="_blank">小熊</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%8D%A3%E4%BA%8B%E8%BE%BE.1&amp;srcid=searchkeywords_%E8%8D%A3%E4%BA%8B%E8%BE%BE&amp;keywords=%E8%8D%A3%E4%BA%8B%E8%BE%BE" style="" target="_blank">荣事达</a>
											</li>
											<li>
												<a href="http://search.ule.com/--%E6%B5%B7%E5%B0%94-19840-haierHaier------0-1.html?uspm=1.1.103_O99_P1.1033.2.1" style="" target="_blank">海尔</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E5%A5%94%E8%85%BE.1&amp;srcid=searchkeywords_%E5%A5%94%E8%85%BE&amp;keywords=%E5%A5%94%E8%85%BE" style="" target="_blank">奔腾</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032295" class="subcate-title" href="http://jiadian.ule.com/28032295-chufangdianqi---------0-1.html" srcid="cateNav_28032176_18" target="_blank">厨房电器</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032299" href="http://jiadian.ule.com/28032299-dianfanbao---------0-1.html" srcid="cateNav_28032176_19" target="_blank">电饭煲</a>
											</li>
											<li>
												<a data-uspm="28032337" href="http://jiadian.ule.com/28032337-dianyaliguo---------0-1.html" srcid="cateNav_28032176_20" target="_blank">电压力锅</a>
											</li>
											<li>
												<a data-uspm="28032342" href="http://jiadian.ule.com/28032342-zhazhijiaobanji---------0-1.html" srcid="cateNav_28032176_21" target="_blank">榨汁/搅拌机</a>
											</li>
											<li>
												<a data-uspm="28032367" href="http://jiadian.ule.com/28032367-doujiangji---------0-1.html" srcid="cateNav_28032176_22" target="_blank">豆浆机</a>
											</li>
											<li>
												<a data-uspm="28032380" href="http://jiadian.ule.com/28032380-weibolu---------0-1.html" srcid="cateNav_28032176_23" target="_blank">微波炉</a>
											</li>
											<li>
												<a data-uspm="28032388" href="http://jiadian.ule.com/28032388-diankaoxiang---------0-1.html" srcid="cateNav_28032176_24" target="_blank">电烤箱</a>
											</li>
											<li>
												<a data-uspm="28032372" href="http://jiadian.ule.com/28032372-kafeiji---------0-1.html" srcid="cateNav_28032176_25" target="_blank">咖啡机</a>
											</li>
											<li>
												<a data-uspm="28032392" href="http://jiadian.ule.com/28032392-mianbaojiduoshilu---------0-1.html" srcid="cateNav_28032176_26" target="_blank">面包机/多士炉</a>
											</li>
											<li>
												<a data-uspm="28032455" href="http://jiadian.ule.com/28032455-diandunguodiandunzhong---------0-1.html" srcid="cateNav_28032176_27" target="_blank">电炖锅/电炖盅</a>
											</li>
											<li>
												<a data-uspm="28032496" href="http://jiadian.ule.com/28032496-dianhuoguo---------0-1.html" srcid="cateNav_28032176_28" target="_blank">电火锅</a>
											</li>
											<li>
												<a data-uspm="28032440" href="http://jiadian.ule.com/28032440-duoyongtuguo---------0-1.html" srcid="cateNav_28032176_29" target="_blank">多用途锅</a>
											</li>
											<li>
												<a data-uspm="28032396" href="http://jiadian.ule.com/28032396-dianshuihudianreshuiping---------0-1.html" srcid="cateNav_28032176_30" target="_blank">电水壶/电热水瓶</a>
											</li>
											<li>
												<a data-uspm="28032483" href="http://jiadian.ule.com/28032483-yangshenghujianyaohu---------0-1.html" srcid="cateNav_28032176_31" target="_blank">养生壶/煎药壶</a>
											</li>
											<li>
												<a data-uspm="28032397" href="http://jiadian.ule.com/28032397-zhudanqi---------0-1.html" srcid="cateNav_28032176_32" target="_blank">煮蛋器</a>
											</li>
											<li>
												<a data-uspm="28032407" href="http://jiadian.ule.com/28032407-suannaiji---------0-1.html" srcid="cateNav_28032176_33" target="_blank">酸奶机</a>
											</li>
											<li>
												<a data-uspm="28032444" href="http://jiadian.ule.com/28032444-dianbingdangjiankaoji---------0-1.html" srcid="cateNav_28032176_34" target="_blank">电饼铛/煎烤机</a>
											</li>
											<li>
												<a data-uspm="28032488" href="http://jiadian.ule.com/28032488-dianrefanhe---------0-1.html" srcid="cateNav_28032176_35" target="_blank">电热饭盒</a>
											</li>
											<li>
												<a data-uspm="28032499" href="http://jiadian.ule.com/28032499-dadanqi---------0-1.html" srcid="cateNav_28032176_36" target="_blank">打蛋器</a>
											</li>
											<li>
												<a data-uspm="28032426" href="http://jiadian.ule.com/28032426-qitachufangdianqi---------0-1.html" srcid="cateNav_28032176_37" target="_blank">其他厨房电器</a>
											</li>
											<li>
												<a data-uspm="28032451" href="http://jiadian.ule.com/28032451-guoshujieduji---------0-1.html" srcid="cateNav_28032176_38" target="_blank">果蔬解毒机</a>
											</li>
											<li>
												<a data-uspm="28032460" href="http://jiadian.ule.com/28032460-bingqilinji---------0-1.html" srcid="cateNav_28032176_39" target="_blank">冰淇淋机</a>
											</li>
											<li>
												<a data-uspm="28032465" href="http://jiadian.ule.com/28032465-yanjizaoju---------0-1.html" srcid="cateNav_28032176_40" target="_blank">烟机/灶具</a>
											</li>
											<li>
												<a data-uspm="28032474" href="http://jiadian.ule.com/28032474-kongqizhaguo---------0-1.html" srcid="cateNav_28032176_41" target="_blank">空气炸锅</a>
											</li>
											<li>
												<a data-uspm="28032436" href="http://jiadian.ule.com/28032436-chufangcheng---------0-1.html" srcid="cateNav_28032176_42" target="_blank">厨房秤</a>
											</li>
											<li>
												<a data-uspm="28032332" href="http://jiadian.ule.com/28032332-diancilu---------0-1.html" srcid="cateNav_28032176_43" target="_blank">电磁炉</a>
											</li>
											<li>
												<a data-uspm="28032503" href="http://jiadian.ule.com/28032503-dianzhengguo---------0-1.html" srcid="cateNav_28032176_44" target="_blank">电蒸锅</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032546" class="subcate-title" href="http://jiadian.ule.com/28032546-dajiadian---------0-1.html" srcid="cateNav_28032176_64" target="_blank">大家电</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032548" href="http://jiadian.ule.com/28032548-pingbandianshi---------0-1.html" srcid="cateNav_28032176_65" target="_blank">平板电视</a>
											</li>
											<li>
												<a data-uspm="28032552" href="http://jiadian.ule.com/28032552-bingxiang---------0-1.html" srcid="cateNav_28032176_66" target="_blank">冰箱</a>
											</li>
											<li>
												<a data-uspm="28032558" href="http://jiadian.ule.com/28032558-xiyiji---------0-1.html" srcid="cateNav_28032176_67" target="_blank">洗衣机</a>
											</li>
											<li>
												<a data-uspm="28032574" href="http://jiadian.ule.com/28032574-bingjubingbalengju---------0-1.html" srcid="cateNav_28032176_68" target="_blank">冰柜/冰吧/冷柜</a>
											</li>
											<li>
												<a data-uspm="28032563" href="http://jiadian.ule.com/28032563-reshuiqi---------0-1.html" srcid="cateNav_28032176_69" target="_blank">热水器</a>
											</li>
											<li>
												<a data-uspm="28032578" href="http://jiadian.ule.com/28032578-kongdiao---------0-1.html" srcid="cateNav_28032176_70" target="_blank">空调</a>
											</li>
											<li>
												<a data-uspm="28032580" href="http://jiadian.ule.com/28032580-xiaodujuxiwanji---------0-1.html" srcid="cateNav_28032176_71" target="_blank">消毒柜/洗碗机</a>
											</li>
											<li>
												<a data-uspm="28032571" href="http://jiadian.ule.com/28032571-jiatingyingyuan---------0-1.html" srcid="cateNav_28032176_72" target="_blank">家庭影院</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032318" class="subcate-title" href="http://jiadian.ule.com/28032318-gerenhulidianqi---------0-1.html" srcid="cateNav_28032176_1" target="_blank">个人护理电器</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032543" href="http://jiadian.ule.com/28032543-qianyinqi---------0-1.html" srcid="cateNav_28032176_2" target="_blank">牵引器</a>
											</li>
											<li>
												<a data-uspm="28032325" href="http://jiadian.ule.com/28032325-tixudao---------0-1.html" srcid="cateNav_28032176_3" target="_blank">剃须刀</a>
											</li>
											<li>
												<a data-uspm="28032512" href="http://jiadian.ule.com/28032512-dianchuifeng---------0-1.html" srcid="cateNav_28032176_4" target="_blank">电吹风</a>
											</li>
											<li>
												<a data-uspm="28032521" href="http://jiadian.ule.com/28032521-diandongyashua---------0-1.html" srcid="cateNav_28032176_5" target="_blank">电动牙刷</a>
											</li>
											<li>
												<a data-uspm="28032526" href="http://jiadian.ule.com/28032526-anmoqi---------0-1.html" srcid="cateNav_28032176_6" target="_blank">按摩器</a>
											</li>
											<li>
												<a data-uspm="28032524" href="http://jiadian.ule.com/28032524-meirongyi---------0-1.html" srcid="cateNav_28032176_7" target="_blank">美容仪</a>
											</li>
											<li>
												<a data-uspm="28032527" href="http://jiadian.ule.com/28032527-zuyupen---------0-1.html" srcid="cateNav_28032176_8" target="_blank">足浴盆</a>
											</li>
											<li>
												<a data-uspm="28032529" href="http://jiadian.ule.com/28032529-xueyaji---------0-1.html" srcid="cateNav_28032176_9" target="_blank">血压计</a>
											</li>
											<li>
												<a data-uspm="28032531" href="http://jiadian.ule.com/28032531-xuetangyi---------0-1.html" srcid="cateNav_28032176_10" target="_blank">血糖仪</a>
											</li>
											<li>
												<a data-uspm="28032532" href="http://jiadian.ule.com/28032532-tiwenji---------0-1.html" srcid="cateNav_28032176_11" target="_blank">体温计</a>
											</li>
											<li>
												<a data-uspm="28032523" href="http://jiadian.ule.com/28032523-tituomaoqi---------0-1.html" srcid="cateNav_28032176_12" target="_blank">剃/脱毛器</a>
											</li>
											<li>
												<a data-uspm="28032534" href="http://jiadian.ule.com/28032534-jiankangchengrenticheng---------0-1.html" srcid="cateNav_28032176_13" target="_blank">健康秤/人体秤</a>
											</li>
											<li>
												<a data-uspm="28032536" href="http://jiadian.ule.com/28032536-jibuqi---------0-1.html" srcid="cateNav_28032176_14" target="_blank">计步器</a>
											</li>
											<li>
												<a data-uspm="28032539" href="http://jiadian.ule.com/28032539-jiankangdianqi---------0-1.html" srcid="cateNav_28032176_15" target="_blank">健康电器</a>
											</li>
											<li>
												<a data-uspm="28032541" href="http://jiadian.ule.com/28032541-meifaqi---------0-1.html" srcid="cateNav_28032176_16" target="_blank">美发器</a>
											</li>
											<li>
												<a data-uspm="28032544" href="http://jiadian.ule.com/28032544-qitagehujiankang---------0-1.html" srcid="cateNav_28032176_17" target="_blank">其他个护健康</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032178" class="subcate-title" href="http://jiadian.ule.com/28032178-shenghuodianqi---------0-1.html" srcid="cateNav_28032176_45" target="_blank">生活电器</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032270" href="http://jiadian.ule.com/28032270-maoqiuxiujianqi---------0-1.html" srcid="cateNav_28032176_46" target="_blank">毛球修剪器</a>
											</li>
											<li>
												<a data-uspm="28032179" href="http://jiadian.ule.com/28032179-xichenqi---------0-1.html" srcid="cateNav_28032176_47" target="_blank">吸尘器</a>
											</li>
											<li>
												<a data-uspm="28032253" href="http://jiadian.ule.com/28032253-kongqijinghuaqi---------0-1.html" srcid="cateNav_28032176_48" target="_blank">空气净化器</a>
											</li>
											<li>
												<a data-uspm="28032193" href="http://jiadian.ule.com/28032193-qunuandianqi---------0-1.html" srcid="cateNav_28032176_49" target="_blank">取暖电器</a>
											</li>
											<li>
												<a data-uspm="28032181" href="http://jiadian.ule.com/28032181-ganyiji---------0-1.html" srcid="cateNav_28032176_50" target="_blank">干衣机</a>
											</li>
											<li>
												<a data-uspm="28032188" href="http://jiadian.ule.com/28032188-yinshuiji---------0-1.html" srcid="cateNav_28032176_51" target="_blank">饮水机</a>
											</li>
											<li>
												<a data-uspm="28032199" href="http://jiadian.ule.com/28032199-jiashiqichushiqi---------0-1.html" srcid="cateNav_28032176_52" target="_blank">加湿器/除湿器</a>
											</li>
											<li>
												<a data-uspm="28032233" href="http://jiadian.ule.com/28032233-guatangyuntang---------0-1.html" srcid="cateNav_28032176_53" target="_blank">挂烫/熨烫</a>
											</li>
											<li>
												<a data-uspm="28032221" href="http://jiadian.ule.com/28032221-dianfengshan---------0-1.html" srcid="cateNav_28032176_54" target="_blank">电风扇</a>
											</li>
											<li>
												<a data-uspm="28032229" href="http://jiadian.ule.com/28032229-jingshuishebei---------0-1.html" srcid="cateNav_28032176_55" target="_blank">净水设备</a>
											</li>
											<li>
												<a data-uspm="28032238" href="http://jiadian.ule.com/28032238-shouluyinji---------0-1.html" srcid="cateNav_28032176_56" target="_blank">收录音机</a>
											</li>
											<li>
												<a data-uspm="28032243" href="http://jiadian.ule.com/28032243-youshengwushengdianhuaji---------0-1.html" srcid="cateNav_28032176_57" target="_blank">有绳/无绳电话机</a>
											</li>
											<li>
												<a data-uspm="28032266" href="http://jiadian.ule.com/28032266-miewendengdianwenpai---------0-1.html" srcid="cateNav_28032176_58" target="_blank">灭蚊灯/电蚊拍</a>
											</li>
											<li>
												<a data-uspm="28032275" href="http://jiadian.ule.com/28032275-diandonggongju---------0-1.html" srcid="cateNav_28032176_59" target="_blank">电动工具</a>
											</li>
											<li>
												<a data-uspm="28032249" href="http://jiadian.ule.com/28032249-qitashenghuodianqi---------0-1.html" srcid="cateNav_28032176_60" target="_blank">其他生活电器</a>
											</li>
											<li>
												<a data-uspm="28032262" href="http://jiadian.ule.com/28032262-kongdiaoshan---------0-1.html" srcid="cateNav_28032176_61" target="_blank">空调扇</a>
											</li>
											<li>
												<a data-uspm="28032273" href="http://jiadian.ule.com/28032273-zhengqituobagaoyaqingjieji---------0-1.html" srcid="cateNav_28032176_62" target="_blank">蒸汽拖把/高压清洁机</a>
											</li>
											<li>
												<a data-uspm="28032285" href="http://jiadian.ule.com/28032285-yuba---------0-1.html" srcid="cateNav_28032176_63" target="_blank">浴霸</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="美妆" class="">
									<a class="z15" data-uspm="z28031942" href="http://meizhuang.ule.com/" srcid="28031942_channel_home"><i></i>美妆/洗护</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28031942">
								<p>
									<a href="http://meizhuang.ule.com/" target="_blank" class="more" data-uspm="28031942m">美妆</a>
									<a href="http://store.ule.com/store/5955.html" target="_blank" data-uspm="28031942t1">韩束 满59赠旅行三件套</a>
									<a href="http://store.ule.com/store/6919.html" target="_blank" data-uspm="28031942t2">美丽会客厅 满50送泥膜</a>
									<a href="http://store.ule.com/store/262.html" target="_blank" data-uspm="28031942t3">宝洁 全场满100立减10元</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.1_V2014.102.%E9%BB%91%E4%BA%BA.1&amp;srcid=searchkeywords_%E9%BB%91%E4%BA%BA&amp;keywords=%E9%BB%91%E4%BA%BA" style="" target="_blank">黑人</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E4%BD%B3%E6%B4%81%E5%A3%AB.1&amp;srcid=searchkeywords_%E4%BD%B3%E6%B4%81%E5%A3%AB&amp;keywords=%E4%BD%B3%E6%B4%81%E5%A3%AB" style="" target="_blank">佳洁士</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E9%AB%98%E9%9C%B2%E6%B4%81.1&amp;srcid=searchkeywords_%E9%AB%98%E9%9C%B2%E6%B4%81&amp;keywords=%E9%AB%98%E9%9C%B2%E6%B4%81" style="" target="_blank">高露洁</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%88%92%E9%80%82%E8%BE%BE.1&amp;srcid=searchkeywords_%E8%88%92%E9%80%82%E8%BE%BE&amp;keywords=%E8%88%92%E9%80%82%E8%BE%BE" style="" target="_blank">舒适达</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%88%92%E8%82%A4%E4%BD%B3.1&amp;srcid=searchkeywords_%E8%88%92%E8%82%A4%E4%BD%B3&amp;keywords=%E8%88%92%E8%82%A4%E4%BD%B3" style="" target="_blank">舒肤佳</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E6%8A%A4%E8%88%92%E5%AE%9D.1&amp;srcid=searchkeywords_%E6%8A%A4%E8%88%92%E5%AE%9D&amp;keywords=%E6%8A%A4%E8%88%92%E5%AE%9D" style="" target="_blank">护舒宝</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E4%B8%83%E5%BA%A6%E7%A9%BA%E9%97%B4.1&amp;srcid=searchkeywords_%E4%B8%83%E5%BA%A6%E7%A9%BA%E9%97%B4&amp;keywords=%E4%B8%83%E5%BA%A6%E7%A9%BA%E9%97%B4" style="" target="_blank">七度空间</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E6%B5%B7%E9%A3%9E%E4%B8%9D.1&amp;srcid=searchkeywords_%E6%B5%B7%E9%A3%9E%E4%B8%9D&amp;keywords=%E6%B5%B7%E9%A3%9E%E4%B8%9D" style="" target="_blank">海飞丝</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E6%9B%BC%E7%A7%80%E9%9B%B7%E6%95%A6.1&amp;srcid=searchkeywords_%E6%9B%BC%E7%A7%80%E9%9B%B7%E6%95%A6&amp;keywords=%E6%9B%BC%E7%A7%80%E9%9B%B7%E6%95%A6" style="" target="_blank">曼秀雷敦</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E7%99%BE%E9%9B%80%E7%BE%9A.1&amp;srcid=searchkeywords_%E7%99%BE%E9%9B%80%E7%BE%9A&amp;keywords=%E7%99%BE%E9%9B%80%E7%BE%9A" style="" target="_blank">百雀羚</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031943" class="subcate-title" href="http://meizhuang.ule.com/28031943-mianbuhufu---------0-1.html" srcid="cateNav_28031942_9" target="_blank">面部护肤</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032811" href="http://meizhuang.ule.com/28032811-jiemian---------0-1.html" srcid="cateNav_28031942_10" target="_blank">洁面</a>
											</li>
											<li>
												<a data-uspm="28031944" href="http://meizhuang.ule.com/28031944-roufushuishuangfushui---------0-1.html" srcid="cateNav_28031942_11" target="_blank">柔肤水/爽肤水</a>
											</li>
											<li>
												<a data-uspm="28031945" href="http://meizhuang.ule.com/28031945-ruyemianshuangninglu---------0-1.html" srcid="cateNav_28031942_12" target="_blank">乳液/面霜/凝露</a>
											</li>
											<li>
												<a data-uspm="28031957" href="http://meizhuang.ule.com/28031957-jinghua---------0-1.html" srcid="cateNav_28031942_13" target="_blank">精华</a>
											</li>
											<li>
												<a data-uspm="28031946" href="http://meizhuang.ule.com/28031946-mianmo---------0-1.html" srcid="cateNav_28031942_14" target="_blank">面膜</a>
											</li>
											<li>
												<a data-uspm="28032821" href="http://meizhuang.ule.com/28032821-yanbuhuli---------0-1.html" srcid="cateNav_28031942_15" target="_blank">眼部护理</a>
											</li>
											<li>
												<a data-uspm="28031950" href="http://meizhuang.ule.com/28031950-hufutaozhuang---------0-1.html" srcid="cateNav_28031942_16" target="_blank">护肤套装</a>
											</li>
											<li>
												<a data-uspm="28032829" href="http://meizhuang.ule.com/28032829-chunbuhuli---------0-1.html" srcid="cateNav_28031942_17" target="_blank">唇部护理</a>
											</li>
											<li>
												<a data-uspm="28031948" href="http://meizhuang.ule.com/28031948-bibuhuli---------0-1.html" srcid="cateNav_28031942_18" target="_blank">鼻部护理</a>
											</li>
											<li>
												<a data-uspm="28031947" href="http://meizhuang.ule.com/28031947-xiangxunjingyou---------0-1.html" srcid="cateNav_28031942_19" target="_blank">香薰精油</a>
											</li>
											<li>
												<a data-uspm="28032813" href="http://meizhuang.ule.com/28032813-qita---------0-1.html" srcid="cateNav_28031942_20" target="_blank">其他</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031968" class="subcate-title" href="http://meizhuang.ule.com/28031968-nuxinghuli---------0-1.html" srcid="cateNav_28031942_30" target="_blank">女性护理</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032118" href="http://meizhuang.ule.com/28032118-weishengjinhudian---------0-1.html" srcid="cateNav_28031942_31" target="_blank">卫生巾/护垫</a>
											</li>
											<li>
												<a data-uspm="28032120" href="http://meizhuang.ule.com/28032120-nuxingxiyeshijin---------0-1.html" srcid="cateNav_28031942_32" target="_blank">女性洗液/湿巾</a>
											</li>
											<li>
												<a data-uspm="28032119" href="http://meizhuang.ule.com/28032119-chengrenzhiniaoku---------0-1.html" srcid="cateNav_28031942_33" target="_blank">成人纸尿裤</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031967" class="subcate-title" href="http://meizhuang.ule.com/28031967-xiyuyongpin---------0-1.html" srcid="cateNav_28031942_45" target="_blank">洗浴用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032115" href="http://meizhuang.ule.com/28032115-xishouye---------0-1.html" srcid="cateNav_28031942_46" target="_blank">洗手液</a>
											</li>
											<li>
												<a data-uspm="28032110" href="http://meizhuang.ule.com/28032110-muyulu---------0-1.html" srcid="cateNav_28031942_47" target="_blank">沐浴露</a>
											</li>
											<li>
												<a data-uspm="28032111" href="http://meizhuang.ule.com/28032111-yuyanxiangzao---------0-1.html" srcid="cateNav_28031942_48" target="_blank">浴盐/香皂</a>
											</li>
											<li>
												<a data-uspm="28032113" href="http://meizhuang.ule.com/28032113-muyutaozhuang---------0-1.html" srcid="cateNav_28031942_49" target="_blank">沐浴套装</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031966" class="subcate-title" href="http://meizhuang.ule.com/28031966-shentihuli---------0-1.html" srcid="cateNav_28031942_54" target="_blank">身体护理</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032105" href="http://meizhuang.ule.com/28032105-zubuhuli---------0-1.html" srcid="cateNav_28031942_55" target="_blank">足部护理</a>
											</li>
											<li>
												<a data-uspm="28032106" href="http://meizhuang.ule.com/28032106-shoubuhuli---------0-1.html" srcid="cateNav_28031942_56" target="_blank">手部护理</a>
											</li>
											<li>
												<a data-uspm="28032099" href="http://meizhuang.ule.com/28032099-runtiru---------0-1.html" srcid="cateNav_28031942_57" target="_blank">润体乳</a>
											</li>
											<li>
												<a data-uspm="28032102" href="http://meizhuang.ule.com/28032102-tuomao---------0-1.html" srcid="cateNav_28031942_58" target="_blank">脱毛</a>
											</li>
											<li>
												<a data-uspm="28032103" href="http://meizhuang.ule.com/28032103-shoushenxianti---------0-1.html" srcid="cateNav_28031942_59" target="_blank">瘦身纤体</a>
											</li>
											<li>
												<a data-uspm="28032107" href="http://meizhuang.ule.com/28032107-hualushuizhiyang---------0-1.html" srcid="cateNav_28031942_60" target="_blank">花露水/止痒</a>
											</li>
											<li>
												<a data-uspm="28032100" href="http://meizhuang.ule.com/28032100-qujiaozhimosha---------0-1.html" srcid="cateNav_28031942_61" target="_blank">去角质/磨砂</a>
											</li>
											<li>
												<a data-uspm="28032104" href="http://meizhuang.ule.com/28032104-fengxiongmeiru---------0-1.html" srcid="cateNav_28031942_62" target="_blank">丰胸美乳</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031962" class="subcate-title" href="http://meizhuang.ule.com/28031962-xiangshui---------0-1.html" srcid="cateNav_28031942_67" target="_blank">香水</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032071" href="http://meizhuang.ule.com/28032071-nushixiangshui---------0-1.html" srcid="cateNav_28031942_68" target="_blank">女士香水</a>
											</li>
											<li>
												<a data-uspm="28032073" href="http://meizhuang.ule.com/28032073-nanshixiangshui---------0-1.html" srcid="cateNav_28031942_69" target="_blank">男士香水</a>
											</li>
											<li>
												<a data-uspm="28032075" href="http://meizhuang.ule.com/28032075-xiangtizouzhupenwu---------0-1.html" srcid="cateNav_28031942_70" target="_blank">香体走珠/喷雾</a>
											</li>
											<li>
												<a data-uspm="28032074" href="http://meizhuang.ule.com/28032074-taozhuanglihe---------0-1.html" srcid="cateNav_28031942_71" target="_blank">套装礼盒</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28031961" class="subcate-title" href="http://meizhuang.ule.com/28031961-meifahufa---------0-1.html" srcid="cateNav_28031942_1" target="_blank">美发护发</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032060" href="http://meizhuang.ule.com/28032060-xifashuixifalu---------0-1.html" srcid="cateNav_28031942_2" target="_blank">洗发水/洗发露</a>
											</li>
											<li>
												<a data-uspm="28032061" href="http://meizhuang.ule.com/28032061-hufasurunfaru---------0-1.html" srcid="cateNav_28031942_3" target="_blank">护发素/润发乳</a>
											</li>
											<li>
												<a data-uspm="28032063" href="http://meizhuang.ule.com/28032063-zaoxing---------0-1.html" srcid="cateNav_28031942_4" target="_blank">造型</a>
											</li>
											<li>
												<a data-uspm="28032065" href="http://meizhuang.ule.com/28032065-xihutaozhuang---------0-1.html" srcid="cateNav_28031942_5" target="_blank">洗护套装</a>
											</li>
											<li>
												<a data-uspm="28032064" href="http://meizhuang.ule.com/28032064-ranfatangfayongpin---------0-1.html" srcid="cateNav_28031942_6" target="_blank">染发/烫发用品</a>
											</li>
											<li>
												<a data-uspm="28032067" href="http://meizhuang.ule.com/28032067-meifagongju---------0-1.html" srcid="cateNav_28031942_7" target="_blank">美发工具</a>
											</li>
											<li>
												<a data-uspm="28032068" href="http://meizhuang.ule.com/28032068-jiafajiafapeijian---------0-1.html" srcid="cateNav_28031942_8" target="_blank">假发/假发配件</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031965" class="subcate-title" href="http://meizhuang.ule.com/28031965-nanshihuli---------0-1.html" srcid="cateNav_28031942_21" target="_blank">男士护理</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032096" href="http://meizhuang.ule.com/28032096-tixupaoxuhoushui---------0-1.html" srcid="cateNav_28031942_22" target="_blank">剃须泡/须后水</a>
											</li>
											<li>
												<a data-uspm="28032090" href="http://meizhuang.ule.com/28032090-roufushuishuangfushui---------0-1.html" srcid="cateNav_28031942_23" target="_blank">柔肤水/爽肤水</a>
											</li>
											<li>
												<a data-uspm="28032089" href="http://meizhuang.ule.com/28032089-jiemian---------0-1.html" srcid="cateNav_28031942_24" target="_blank">洁面</a>
											</li>
											<li>
												<a data-uspm="28032091" href="http://meizhuang.ule.com/28032091-ruyemianshuangninglu---------0-1.html" srcid="cateNav_28031942_25" target="_blank">乳液/面霜/凝露</a>
											</li>
											<li>
												<a data-uspm="28032094" href="http://meizhuang.ule.com/28032094-chunbuhuli---------0-1.html" srcid="cateNav_28031942_26" target="_blank">唇部护理</a>
											</li>
											<li>
												<a data-uspm="28032095" href="http://meizhuang.ule.com/28032095-tixudaotixudaojia---------0-1.html" srcid="cateNav_28031942_27" target="_blank">剃须刀/剃须刀架</a>
											</li>
											<li>
												<a data-uspm="28032092" href="http://meizhuang.ule.com/28032092-yanbuhuli---------0-1.html" srcid="cateNav_28031942_28" target="_blank">眼部护理</a>
											</li>
											<li>
												<a data-uspm="28032093" href="http://meizhuang.ule.com/28032093-fangshaigeli---------0-1.html" srcid="cateNav_28031942_29" target="_blank">防晒/隔离</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031960" class="subcate-title" href="http://meizhuang.ule.com/28031960-shishangcaizhuang---------0-1.html" srcid="cateNav_28031942_34" target="_blank">时尚彩妆</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032056" href="http://meizhuang.ule.com/28032056-meizhuanggongju---------0-1.html" srcid="cateNav_28031942_35" target="_blank">美妆工具</a>
											</li>
											<li>
												<a data-uspm="28032050" href="http://meizhuang.ule.com/28032050-BBshuangfangshaigeli---------0-1.html" srcid="cateNav_28031942_36" target="_blank">BB霜/防晒/隔离</a>
											</li>
											<li>
												<a data-uspm="28032051" href="http://meizhuang.ule.com/28032051-fendifenbing---------0-1.html" srcid="cateNav_28031942_37" target="_blank">粉底/粉饼</a>
											</li>
											<li>
												<a data-uspm="28032049" href="http://meizhuang.ule.com/28032049-xiezhuang---------0-1.html" srcid="cateNav_28031942_38" target="_blank">卸妆</a>
											</li>
											<li>
												<a data-uspm="28032054" href="http://meizhuang.ule.com/28032054-saihong---------0-1.html" srcid="cateNav_28031942_39" target="_blank">腮红</a>
											</li>
											<li>
												<a data-uspm="28032046" href="http://meizhuang.ule.com/28032046-chungaochunxianbichuncaikouhong---------0-1.html" srcid="cateNav_28031942_40" target="_blank">唇膏/唇线笔/唇彩/口红</a>
											</li>
											<li>
												<a data-uspm="28032053" href="http://meizhuang.ule.com/28032053-yanyingjiemaogaoyanxianbiyanxianyejiajiemao---------0-1.html" srcid="cateNav_28031942_41" target="_blank">眼影/睫毛膏/眼线笔/眼线液/假睫毛</a>
											</li>
											<li>
												<a data-uspm="28032052" href="http://meizhuang.ule.com/28032052-meibimeifenmeigao---------0-1.html" srcid="cateNav_28031942_42" target="_blank">眉笔/眉粉/眉膏</a>
											</li>
											<li>
												<a data-uspm="28032057" href="http://meizhuang.ule.com/28032057-caizhuanglihe---------0-1.html" srcid="cateNav_28031942_43" target="_blank">彩妆礼盒</a>
											</li>
											<li>
												<a data-uspm="28032055" href="http://meizhuang.ule.com/28032055-meijia---------0-1.html" srcid="cateNav_28031942_44" target="_blank">美甲</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031963" class="subcate-title" href="http://meizhuang.ule.com/28031963-kouqianghuli---------0-1.html" srcid="cateNav_28031942_50" target="_blank">口腔护理</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032538" href="http://meizhuang.ule.com/28032538-yashuayaxian---------0-1.html" srcid="cateNav_28031942_51" target="_blank">牙刷牙线</a>
											</li>
											<li>
												<a data-uspm="28032082" href="http://meizhuang.ule.com/28032082-yagaoyafen---------0-1.html" srcid="cateNav_28031942_52" target="_blank">牙膏牙粉</a>
											</li>
											<li>
												<a data-uspm="28032088" href="http://meizhuang.ule.com/28032088-shukoushuikouqiqingxinji---------0-1.html" srcid="cateNav_28031942_53" target="_blank">漱口水/口气清新剂</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031969" class="subcate-title" href="http://meizhuang.ule.com/28031969-chengrenyongpin---------0-1.html" srcid="cateNav_28031942_63" target="_blank">成人用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032122" href="http://meizhuang.ule.com/28032122-biyuntao---------0-1.html" srcid="cateNav_28031942_64" target="_blank">避孕套</a>
											</li>
											<li>
												<a data-uspm="28032125" href="http://meizhuang.ule.com/28032125-qingquyongpin---------0-1.html" srcid="cateNav_28031942_65" target="_blank">情趣用品</a>
											</li>
											<li>
												<a data-uspm="28032123" href="http://meizhuang.ule.com/28032123-runhuajiyanyun---------0-1.html" srcid="cateNav_28031942_66" target="_blank">润滑剂/验孕</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="女装" class="">
									<a class="z23" data-uspm="z28032271" href="http://nvzhuang.ule.com/" srcid="28032271_channel_home"><i></i>女装/饰品/配件</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28032271">
								<p>
									<a href="http://nvzhuang.ule.com/" target="_blank" class="more" data-uspm="28032271m">女装</a>
									<a href="http://store.ule.com/store/6810.html" target="_blank" data-uspm="28032271t1">粤通旗舰店 一份礼物一份爱</a>
									<a href="http://store.ule.com/store/8144.html" target="_blank" data-uspm="28032271t2">一副T台镜 潮流一夏天</a>
									<a href="http://store.ule.com/store/8092.html" target="_blank" data-uspm="28032271t3">千足珍珠 满499减30</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/6810.html?uspm=1.1.103_C2306_O0_P1.1036.52.1" style="color:#FFCC33;font-weight:bold;" target="_blank">粤通国际珠宝</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10285.html?uspm=1.1.103_O99_P1.1036.4.1" style="color:#FFCC33;font-weight:bold;" target="_blank">老庙黄金</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/11180.html?uspm=1.1.121_L1442719_T144271901_S11180_M800106639.1407.1.1" style="" target="_blank">RayBan 雷朋眼镜</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/11251.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">Etam艾格</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6669.html?uspm=1.1.103_C2302_O0_P1.1036.136.1" style="" target="_blank">梦娜</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8092.html?uspm=1.1.103_C2306_O0_P1.1036.112.1" style="" target="_blank">千足珍珠</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6217.html?uspm=1.1.121_L557241_T55724101_S6217_M800105703.1407.1.1" style="" target="_blank">好安怡</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/9389.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">轩品媛</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032284" class="subcate-title" href="http://nvzhuang.ule.com/28032284-Txuchenshan---------0-1.html" srcid="cateNav_28032271_8" target="_blank">T恤/衬衫</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032294" href="http://nvzhuang.ule.com/28032294-duanxiuTxu---------0-1.html" srcid="cateNav_28032271_9" target="_blank">短袖T恤</a>
											</li>
											<li>
												<a data-uspm="28032296" href="http://nvzhuang.ule.com/28032296-zhangxiuTxu---------0-1.html" srcid="cateNav_28032271_10" target="_blank">长袖T恤</a>
											</li>
											<li>
												<a data-uspm="28032297" href="http://nvzhuang.ule.com/28032297-duanxiuchenshan---------0-1.html" srcid="cateNav_28032271_11" target="_blank">短袖衬衫</a>
											</li>
											<li>
												<a data-uspm="28032298" href="http://nvzhuang.ule.com/28032298-zhangxiuchenshan---------0-1.html" srcid="cateNav_28032271_12" target="_blank">长袖衬衫</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032287" class="subcate-title" href="http://nvzhuang.ule.com/28032287-jingzhineiyi---------0-1.html" srcid="cateNav_28032271_19" target="_blank">精致内衣</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032308" href="http://nvzhuang.ule.com/28032308-shuiyijiajufu---------0-1.html" srcid="cateNav_28032271_20" target="_blank">睡衣/家居服</a>
											</li>
											<li>
												<a data-uspm="28032309" href="http://nvzhuang.ule.com/28032309-wenxiong---------0-1.html" srcid="cateNav_28032271_21" target="_blank">文胸</a>
											</li>
											<li>
												<a data-uspm="28032311" href="http://nvzhuang.ule.com/28032311-baonuanyi---------0-1.html" srcid="cateNav_28032271_22" target="_blank">保暖衣</a>
											</li>
											<li>
												<a data-uspm="28032312" href="http://nvzhuang.ule.com/28032312-neiku---------0-1.html" srcid="cateNav_28032271_23" target="_blank">内裤</a>
											</li>
											<li>
												<a data-uspm="28032313" href="http://nvzhuang.ule.com/28032313-wazi---------0-1.html" srcid="cateNav_28032271_24" target="_blank">袜子</a>
											</li>
											<li>
												<a data-uspm="28032314" href="http://nvzhuang.ule.com/28032314-diaodaibeixin---------0-1.html" srcid="cateNav_28032271_25" target="_blank">吊带/背心</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032290" class="subcate-title" href="http://nvzhuang.ule.com/28032290-zhenzhishan---------0-1.html" srcid="cateNav_28032271_33" target="_blank">针织衫</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032324" href="http://nvzhuang.ule.com/28032324-maoyi---------0-1.html" srcid="cateNav_28032271_34" target="_blank">毛衣</a>
											</li>
											<li>
												<a data-uspm="28032326" href="http://nvzhuang.ule.com/28032326-kaishan---------0-1.html" srcid="cateNav_28032271_35" target="_blank">开衫</a>
											</li>
											<li>
												<a data-uspm="28032328" href="http://nvzhuang.ule.com/28032328-dadishan---------0-1.html" srcid="cateNav_28032271_36" target="_blank">打底衫</a>
											</li>
											<li>
												<a data-uspm="28032329" href="http://nvzhuang.ule.com/28032329-taoshan---------0-1.html" srcid="cateNav_28032271_37" target="_blank">套衫</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032292" class="subcate-title" href="http://nvzhuang.ule.com/28032292-shoubiaopeijianyanjing---------0-1.html" srcid="cateNav_28032271_46" target="_blank">手表/配件/眼镜</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032341" href="http://nvzhuang.ule.com/28032341-sijin---------0-1.html" srcid="cateNav_28032271_47" target="_blank">丝巾</a>
											</li>
											<li>
												<a data-uspm="28032343" href="http://nvzhuang.ule.com/28032343-weijin---------0-1.html" srcid="cateNav_28032271_48" target="_blank">围巾</a>
											</li>
											<li>
												<a data-uspm="28032344" href="http://nvzhuang.ule.com/28032344-shoutao---------0-1.html" srcid="cateNav_28032271_49" target="_blank">手套</a>
											</li>
											<li>
												<a data-uspm="28032345" href="http://nvzhuang.ule.com/28032345-yanjing---------0-1.html" srcid="cateNav_28032271_50" target="_blank">眼镜</a>
											</li>
											<li>
												<a data-uspm="28032347" href="http://nvzhuang.ule.com/28032347-taiyangjing---------0-1.html" srcid="cateNav_28032271_51" target="_blank">太阳镜</a>
											</li>
											<li>
												<a data-uspm="28032348" href="http://nvzhuang.ule.com/28032348-shoubiao---------0-1.html" srcid="cateNav_28032271_52" target="_blank">手表</a>
											</li>
											<li>
												<a data-uspm="28032349" href="http://nvzhuang.ule.com/28032349-pidai---------0-1.html" srcid="cateNav_28032271_53" target="_blank">皮带</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032274" class="subcate-title" href="http://nvzhuang.ule.com/28032274-maozi---------0-1.html" srcid="cateNav_28032271_1" target="_blank">帽子</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032276" href="http://nvzhuang.ule.com/28032276-zheyangmao---------0-1.html" srcid="cateNav_28032271_2" target="_blank">遮阳帽</a>
											</li>
											<li>
												<a data-uspm="28032277" href="http://nvzhuang.ule.com/28032277-bangqiumao---------0-1.html" srcid="cateNav_28032271_3" target="_blank">棒球帽</a>
											</li>
											<li>
												<a data-uspm="28032279" href="http://nvzhuang.ule.com/28032279-yashemao---------0-1.html" srcid="cateNav_28032271_4" target="_blank">鸭舌帽</a>
											</li>
											<li>
												<a data-uspm="28032280" href="http://nvzhuang.ule.com/28032280-shatanmao---------0-1.html" srcid="cateNav_28032271_5" target="_blank">沙滩帽</a>
											</li>
											<li>
												<a data-uspm="28032281" href="http://nvzhuang.ule.com/28032281-caomao---------0-1.html" srcid="cateNav_28032271_6" target="_blank">草帽</a>
											</li>
											<li>
												<a data-uspm="28032283" href="http://nvzhuang.ule.com/28032283-qita---------0-1.html" srcid="cateNav_28032271_7" target="_blank">其他</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032286" class="subcate-title" href="http://nvzhuang.ule.com/28032286-qunku---------0-1.html" srcid="cateNav_28032271_13" target="_blank">裙裤</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032300" href="http://nvzhuang.ule.com/28032300-lianyiqun---------0-1.html" srcid="cateNav_28032271_14" target="_blank">连衣裙</a>
											</li>
											<li>
												<a data-uspm="28032301" href="http://nvzhuang.ule.com/28032301-banqun---------0-1.html" srcid="cateNav_28032271_15" target="_blank">半裙</a>
											</li>
											<li>
												<a data-uspm="28032302" href="http://nvzhuang.ule.com/28032302-zhangku---------0-1.html" srcid="cateNav_28032271_16" target="_blank">长裤</a>
											</li>
											<li>
												<a data-uspm="28032303" href="http://nvzhuang.ule.com/28032303-niuziku---------0-1.html" srcid="cateNav_28032271_17" target="_blank">牛仔裤</a>
											</li>
											<li>
												<a data-uspm="28032304" href="http://nvzhuang.ule.com/28032304-duankudadiku---------0-1.html" srcid="cateNav_28032271_18" target="_blank">短裤/打底裤</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032288" class="subcate-title" href="http://nvzhuang.ule.com/28032288-waitao---------0-1.html" srcid="cateNav_28032271_26" target="_blank">外套</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032316" href="http://nvzhuang.ule.com/28032316-duanwaitao---------0-1.html" srcid="cateNav_28032271_27" target="_blank">短外套</a>
											</li>
											<li>
												<a data-uspm="28032317" href="http://nvzhuang.ule.com/28032317-xiaoxizhuang---------0-1.html" srcid="cateNav_28032271_28" target="_blank">小西装</a>
											</li>
											<li>
												<a data-uspm="28032319" href="http://nvzhuang.ule.com/28032319-weiyi---------0-1.html" srcid="cateNav_28032271_29" target="_blank">卫衣</a>
											</li>
											<li>
												<a data-uspm="28032321" href="http://nvzhuang.ule.com/28032321-fengyi---------0-1.html" srcid="cateNav_28032271_30" target="_blank">风衣</a>
											</li>
											<li>
												<a data-uspm="28032322" href="http://nvzhuang.ule.com/28032322-dayi---------0-1.html" srcid="cateNav_28032271_31" target="_blank">大衣</a>
											</li>
											<li>
												<a data-uspm="28032323" href="http://nvzhuang.ule.com/28032323-yurongfu---------0-1.html" srcid="cateNav_28032271_32" target="_blank">羽绒服</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032291" class="subcate-title" href="http://nvzhuang.ule.com/28032291-liuxingshipin---------0-1.html" srcid="cateNav_28032271_38" target="_blank">流行饰品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032330" href="http://nvzhuang.ule.com/28032330-jinyinshipin---------0-1.html" srcid="cateNav_28032271_39" target="_blank">金银饰品</a>
											</li>
											<li>
												<a data-uspm="28032331" href="http://nvzhuang.ule.com/28032331-jiezhi---------0-1.html" srcid="cateNav_28032271_40" target="_blank">戒指</a>
											</li>
											<li>
												<a data-uspm="28032334" href="http://nvzhuang.ule.com/28032334-toushixiongzhen---------0-1.html" srcid="cateNav_28032271_41" target="_blank">头饰/胸针</a>
											</li>
											<li>
												<a data-uspm="28032335" href="http://nvzhuang.ule.com/28032335-xianglian---------0-1.html" srcid="cateNav_28032271_42" target="_blank">项链</a>
											</li>
											<li>
												<a data-uspm="28032336" href="http://nvzhuang.ule.com/28032336-xiangqianshipin---------0-1.html" srcid="cateNav_28032271_43" target="_blank">镶嵌饰品</a>
											</li>
											<li>
												<a data-uspm="28032339" href="http://nvzhuang.ule.com/28032339-erhuan---------0-1.html" srcid="cateNav_28032271_44" target="_blank">耳环</a>
											</li>
											<li>
												<a data-uspm="28032340" href="http://nvzhuang.ule.com/28032340-shouzhuoshoulian---------0-1.html" srcid="cateNav_28032271_45" target="_blank">手镯手链</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="箱包" class="">
									<a class="z14" data-uspm="z28032887" href="http://xiangbao.ule.com/" srcid="28032887_channel_home"><i></i>箱包鞋帽</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28032887">
								<p>
									<a href="http://xiangbao.ule.com/" target="_blank" class="more" data-uspm="28032887m">箱包</a>
									<a href="http://store.ule.com/store/10078----117228.html" target="_blank" data-uspm="28032887t1">功能随心 个性随行</a>
									<a href="http://store.ule.com/store/10538.html" target="_blank" data-uspm="28032887t2">Global Freeman 领略时尚魅力</a>
									<a href="http://store.ule.com/store/6296.html" target="_blank" data-uspm="28032887t3">金猴旗舰店 全场满299减10</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/6296.html?srcid=ule2014_hp_07_leftfocus_001&amp;uspm=1.1.1_V2014.100002.left1.1" style="" target="_blank">金猴</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/12980.html?uspm=1.1.103_B31980_O0_P1.1036.4.1" style="" target="_blank">迪阿伦箱包</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6947.html?uspm=1.1.103_O99_P1.1036.16.1" style="" target="_blank">波斯丹顿</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10538.html?uspm=1.1.121_L1633090_T163309001_S10538_M800110581.1407.1.1" style="" target="_blank">GLOBAL FREEMAN</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10914.html?uspm=1.1.103_C28032888_B2322_O0_P1.1036.4.1" style="" target="_blank">丹尼熊</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/11145.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">玛丽兰</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8624.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">红火鸟</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8441.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">达芙妮</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032901" class="subcate-title" href="http://xiangbao.ule.com/28032901-shishangnubao---------0-1.html" srcid="cateNav_28032887_12" target="_blank">时尚女包</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032902" href="http://xiangbao.ule.com/28032902-kabaolingqianbao---------0-1.html" srcid="cateNav_28032887_13" target="_blank">卡包/零钱包</a>
											</li>
											<li>
												<a data-uspm="28032903" href="http://xiangbao.ule.com/28032903-shoutibao---------0-1.html" srcid="cateNav_28032887_14" target="_blank">手提包</a>
											</li>
											<li>
												<a data-uspm="28032904" href="http://xiangbao.ule.com/28032904-shuangjianbao---------0-1.html" srcid="cateNav_28032887_15" target="_blank">双肩包</a>
											</li>
											<li>
												<a data-uspm="28032905" href="http://xiangbao.ule.com/28032905-danjianbao---------0-1.html" srcid="cateNav_28032887_16" target="_blank">单肩包</a>
											</li>
											<li>
												<a data-uspm="28032906" href="http://xiangbao.ule.com/28032906-xiekuabao---------0-1.html" srcid="cateNav_28032887_17" target="_blank">斜挎包</a>
											</li>
											<li>
												<a data-uspm="28032907" href="http://xiangbao.ule.com/28032907-huazhuangbaohe---------0-1.html" srcid="cateNav_28032887_18" target="_blank">化妆包/盒</a>
											</li>
											<li>
												<a data-uspm="28032908" href="http://xiangbao.ule.com/28032908-qianbao---------0-1.html" srcid="cateNav_28032887_19" target="_blank">钱包</a>
											</li>
											<li>
												<a data-uspm="28032909" href="http://xiangbao.ule.com/28032909-qita---------0-1.html" srcid="cateNav_28032887_20" target="_blank">其他</a>
											</li>
											<li>
												<a data-uspm="28032910" href="http://xiangbao.ule.com/28032910-shouzhuabaowanyanbao---------0-1.html" srcid="cateNav_28032887_21" target="_blank">手抓包/晚宴包</a>
											</li>
											<li>
												<a data-uspm="28032911" href="http://xiangbao.ule.com/28032911-yaochibao---------0-1.html" srcid="cateNav_28032887_22" target="_blank">钥匙包</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032919" class="subcate-title" href="http://xiangbao.ule.com/28032919-chaoliunuxie---------0-1.html" srcid="cateNav_28032887_30" target="_blank">潮流女鞋</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032920" href="http://xiangbao.ule.com/28032920-danxie---------0-1.html" srcid="cateNav_28032887_31" target="_blank">单鞋</a>
											</li>
											<li>
												<a data-uspm="28032921" href="http://xiangbao.ule.com/28032921-xiuxianxie---------0-1.html" srcid="cateNav_28032887_32" target="_blank">休闲鞋</a>
											</li>
											<li>
												<a data-uspm="28032922" href="http://xiangbao.ule.com/28032922-liangxie---------0-1.html" srcid="cateNav_28032887_33" target="_blank">凉鞋</a>
											</li>
											<li>
												<a data-uspm="28032923" href="http://xiangbao.ule.com/28032923-tuoxierenzituo---------0-1.html" srcid="cateNav_28032887_34" target="_blank">拖鞋/人字拖</a>
											</li>
											<li>
												<a data-uspm="28032924" href="http://xiangbao.ule.com/28032924-nuxue---------0-1.html" srcid="cateNav_28032887_35" target="_blank">女靴</a>
											</li>
											<li>
												<a data-uspm="28032925" href="http://xiangbao.ule.com/28032925-fanbuxie---------0-1.html" srcid="cateNav_28032887_36" target="_blank">帆布鞋</a>
											</li>
											<li>
												<a data-uspm="28032926" href="http://xiangbao.ule.com/28032926-yuxieyuxue---------0-1.html" srcid="cateNav_28032887_37" target="_blank">雨鞋/雨靴</a>
											</li>
											<li>
												<a data-uspm="28032927" href="http://xiangbao.ule.com/28032927-xuedixue---------0-1.html" srcid="cateNav_28032887_38" target="_blank">雪地靴</a>
											</li>
											<li>
												<a data-uspm="28032928" href="http://xiangbao.ule.com/28032928-yuzuixie---------0-1.html" srcid="cateNav_28032887_39" target="_blank">鱼嘴鞋</a>
											</li>
											<li>
												<a data-uspm="28032929" href="http://xiangbao.ule.com/28032929-madingxue---------0-1.html" srcid="cateNav_28032887_40" target="_blank">马丁靴</a>
											</li>
											<li>
												<a data-uspm="28032930" href="http://xiangbao.ule.com/28032930-buxiexiuhuaxie---------0-1.html" srcid="cateNav_28032887_41" target="_blank">布鞋/绣花鞋</a>
											</li>
											<li>
												<a data-uspm="28032931" href="http://xiangbao.ule.com/28032931-mamaxie---------0-1.html" srcid="cateNav_28032887_42" target="_blank">妈妈鞋</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032888" class="subcate-title" href="http://xiangbao.ule.com/28032888-gongnengxiangbao---------0-1.html" srcid="cateNav_28032887_1" target="_blank">功能箱包</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032889" href="http://xiangbao.ule.com/28032889-laganxianglaganbao---------0-1.html" srcid="cateNav_28032887_2" target="_blank">拉杆箱/拉杆包</a>
											</li>
											<li>
												<a data-uspm="28032890" href="http://xiangbao.ule.com/28032890-diannaobao---------0-1.html" srcid="cateNav_28032887_3" target="_blank">电脑包</a>
											</li>
											<li>
												<a data-uspm="28032891" href="http://xiangbao.ule.com/28032891-yaobaoxiongbao---------0-1.html" srcid="cateNav_28032887_4" target="_blank">腰包/胸包</a>
											</li>
											<li>
												<a data-uspm="28032892" href="http://xiangbao.ule.com/28032892-xiangjibao---------0-1.html" srcid="cateNav_28032887_5" target="_blank">相机包</a>
											</li>
											<li>
												<a data-uspm="28032893" href="http://xiangbao.ule.com/28032893-luxingpeijian---------0-1.html" srcid="cateNav_28032887_6" target="_blank">旅行配件</a>
											</li>
											<li>
												<a data-uspm="28032894" href="http://xiangbao.ule.com/28032894-luxingbao---------0-1.html" srcid="cateNav_28032887_7" target="_blank">旅行包</a>
											</li>
											<li>
												<a data-uspm="28032895" href="http://xiangbao.ule.com/28032895-shubao---------0-1.html" srcid="cateNav_28032887_8" target="_blank">书包</a>
											</li>
											<li>
												<a data-uspm="28032897" href="http://xiangbao.ule.com/28032897-dengshanbao---------0-1.html" srcid="cateNav_28032887_9" target="_blank">登山包</a>
											</li>
											<li>
												<a data-uspm="28032898" href="http://xiangbao.ule.com/28032898-mamibao---------0-1.html" srcid="cateNav_28032887_10" target="_blank">妈咪包</a>
											</li>
											<li>
												<a data-uspm="28032900" href="http://xiangbao.ule.com/28032900-xiuxianyundongbao---------0-1.html" srcid="cateNav_28032887_11" target="_blank">休闲运动包</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032912" class="subcate-title" href="http://xiangbao.ule.com/28032912-jingpinnanbao---------0-1.html" srcid="cateNav_28032887_23" target="_blank">精品男包</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032913" href="http://xiangbao.ule.com/28032913-shangwugongwenbao---------0-1.html" srcid="cateNav_28032887_24" target="_blank">商务公文包</a>
											</li>
											<li>
												<a data-uspm="28032914" href="http://xiangbao.ule.com/28032914-danjianxiekuabao---------0-1.html" srcid="cateNav_28032887_25" target="_blank">单肩/斜跨包</a>
											</li>
											<li>
												<a data-uspm="28032915" href="http://xiangbao.ule.com/28032915-nanshishoubao---------0-1.html" srcid="cateNav_28032887_26" target="_blank">男士手包</a>
											</li>
											<li>
												<a data-uspm="28032916" href="http://xiangbao.ule.com/28032916-qianbaokabao---------0-1.html" srcid="cateNav_28032887_27" target="_blank">钱包/卡包</a>
											</li>
											<li>
												<a data-uspm="28032917" href="http://xiangbao.ule.com/28032917-shuangjianbao---------0-1.html" srcid="cateNav_28032887_28" target="_blank">双肩包</a>
											</li>
											<li>
												<a data-uspm="28032918" href="http://xiangbao.ule.com/28032918-yaochibao---------0-1.html" srcid="cateNav_28032887_29" target="_blank">钥匙包</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032932" class="subcate-title" href="http://xiangbao.ule.com/28032932-liuxingnanxie---------0-1.html" srcid="cateNav_28032887_43" target="_blank">流行男鞋</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032933" href="http://xiangbao.ule.com/28032933-xiuxianxie---------0-1.html" srcid="cateNav_28032887_44" target="_blank">休闲鞋</a>
											</li>
											<li>
												<a data-uspm="28032934" href="http://xiangbao.ule.com/28032934-liangxieshatanxie---------0-1.html" srcid="cateNav_28032887_45" target="_blank">凉鞋/沙滩鞋</a>
											</li>
											<li>
												<a data-uspm="28032935" href="http://xiangbao.ule.com/28032935-tuoxierenzituo---------0-1.html" srcid="cateNav_28032887_46" target="_blank">拖鞋/人字拖</a>
											</li>
											<li>
												<a data-uspm="28032936" href="http://xiangbao.ule.com/28032936-nanxue---------0-1.html" srcid="cateNav_28032887_47" target="_blank">男靴</a>
											</li>
											<li>
												<a data-uspm="28032937" href="http://xiangbao.ule.com/28032937-fanbuxie---------0-1.html" srcid="cateNav_28032887_48" target="_blank">帆布鞋</a>
											</li>
											<li>
												<a data-uspm="28032938" href="http://xiangbao.ule.com/28032938-yuxieyuxue---------0-1.html" srcid="cateNav_28032887_49" target="_blank">雨鞋/雨靴</a>
											</li>
											<li>
												<a data-uspm="28032939" href="http://xiangbao.ule.com/28032939-shangwuzhengzhuangxie---------0-1.html" srcid="cateNav_28032887_50" target="_blank">商务正装鞋</a>
											</li>
											<li>
												<a data-uspm="28032950" href="http://xiangbao.ule.com/28032950-chuantongbuxie---------0-1.html" srcid="cateNav_28032887_51" target="_blank">传统布鞋</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="男装" class="">
									<a class="z22" data-uspm="z28032196" href="http://nanzhuang.ule.com/" srcid="28032196_channel_home"><i></i>魅力男装</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28032196">
								<p>
									<a href="http://nanzhuang.ule.com/" target="_blank" class="more" data-uspm="28032196m">男装</a>
									<a href="http://store.ule.com/store/6619.html" target="_blank" data-uspm="28032196t1">LESMART 全场夏装低价出清</a>
									<a href="http://store.ule.com/store/8464.html" target="_blank" data-uspm="28032196t2">欧联时骏腕表 经典从这里开始</a>
									<a href="http://store.ule.com/store/6382.html" target="_blank" data-uspm="28032196t3">占姆士旗舰店 清仓任意买</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/6382.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">占姆士</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6619.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">LESMART</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/12383.html?uspm=1.1.103_C22_O0_P1.1036.4.1" style="" target="_blank">红豆</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/12938.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">CK STORM</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/9773.html?uspm=1.1.103_C2302_O0_P1.1036.40.1" style="" target="_blank">南极人</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8095.html?uspm=1.1.103_C2302_O0_P1.1036.10.1" style="" target="_blank">HANRIS</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10588.html?uspm=1.1.121_L1371617_T137161701_S10588_M800111051.1407.1.1" style="" target="_blank">DW腕表</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8464.html?uspm=1.1.103_C230706_O0_P1.1036.52.1" style="" target="_blank">天梭腕表</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6294.html?uspm=1.1.103_C2302_O0_P1.1036.52.1" style="" target="_blank">壹恺男装</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/9923.html?uspm=1.1.121_L1324017_T132401701_S9923_M800110769.1407.2.1" style="" target="_blank">七匹狼</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032211" class="subcate-title" href="http://nanzhuang.ule.com/28032211-Txu---------0-1.html" srcid="cateNav_28032196_6" target="_blank">T恤</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032213" href="http://nanzhuang.ule.com/28032213-yuanlingduanxiuTxu---------0-1.html" srcid="cateNav_28032196_7" target="_blank">圆领短袖T恤</a>
											</li>
											<li>
												<a data-uspm="28032214" href="http://nanzhuang.ule.com/28032214-fanlingduanxiuTxu---------0-1.html" srcid="cateNav_28032196_8" target="_blank">翻领短袖T恤</a>
											</li>
											<li>
												<a data-uspm="28032215" href="http://nanzhuang.ule.com/28032215-yuanlingzhangxiuTxu---------0-1.html" srcid="cateNav_28032196_9" target="_blank">圆领长袖T恤</a>
											</li>
											<li>
												<a data-uspm="28032216" href="http://nanzhuang.ule.com/28032216-fanlingzhangxiuTxu---------0-1.html" srcid="cateNav_28032196_10" target="_blank">翻领长袖T恤</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032226" class="subcate-title" href="http://nanzhuang.ule.com/28032226-neiyi---------0-1.html" srcid="cateNav_28032196_17" target="_blank">内衣</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032227" href="http://nanzhuang.ule.com/28032227-baonuanneiyiku---------0-1.html" srcid="cateNav_28032196_18" target="_blank">保暖内衣/裤</a>
											</li>
											<li>
												<a data-uspm="28032230" href="http://nanzhuang.ule.com/28032230-neiku---------0-1.html" srcid="cateNav_28032196_19" target="_blank">内裤</a>
											</li>
											<li>
												<a data-uspm="28032231" href="http://nanzhuang.ule.com/28032231-beixin---------0-1.html" srcid="cateNav_28032196_20" target="_blank">背心</a>
											</li>
											<li>
												<a data-uspm="28032232" href="http://nanzhuang.ule.com/28032232-nanwa---------0-1.html" srcid="cateNav_28032196_21" target="_blank">男袜</a>
											</li>
											<li>
												<a data-uspm="28032234" href="http://nanzhuang.ule.com/28032234-shuiyi---------0-1.html" srcid="cateNav_28032196_22" target="_blank">睡衣</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032244" class="subcate-title" href="http://nanzhuang.ule.com/28032244-waitao---------0-1.html" srcid="cateNav_28032196_29" target="_blank">外套</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032245" href="http://nanzhuang.ule.com/28032245-xizhuang---------0-1.html" srcid="cateNav_28032196_30" target="_blank">西装</a>
											</li>
											<li>
												<a data-uspm="28032247" href="http://nanzhuang.ule.com/28032247-bianzhuang---------0-1.html" srcid="cateNav_28032196_31" target="_blank">便装</a>
											</li>
											<li>
												<a data-uspm="28032248" href="http://nanzhuang.ule.com/28032248-jiake---------0-1.html" srcid="cateNav_28032196_32" target="_blank">夹克</a>
											</li>
											<li>
												<a data-uspm="28032250" href="http://nanzhuang.ule.com/28032250-fengyi---------0-1.html" srcid="cateNav_28032196_33" target="_blank">风衣</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032259" class="subcate-title" href="http://nanzhuang.ule.com/28032259-peijian---------0-1.html" srcid="cateNav_28032196_39" target="_blank">配件</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032260" href="http://nanzhuang.ule.com/28032260-weijinshoutao---------0-1.html" srcid="cateNav_28032196_40" target="_blank">围巾/手套</a>
											</li>
											<li>
												<a data-uspm="28032261" href="http://nanzhuang.ule.com/28032261-yanjingshoubiao---------0-1.html" srcid="cateNav_28032196_41" target="_blank">眼镜/手表</a>
											</li>
											<li>
												<a data-uspm="28032263" href="http://nanzhuang.ule.com/28032263-pidai---------0-1.html" srcid="cateNav_28032196_42" target="_blank">皮带</a>
											</li>
											<li>
												<a data-uspm="28032268" href="http://nanzhuang.ule.com/28032268-lingdailingjia---------0-1.html" srcid="cateNav_28032196_43" target="_blank">领带/领夹</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032200" class="subcate-title" href="http://nanzhuang.ule.com/28032200-chenshan---------0-1.html" srcid="cateNav_28032196_1" target="_blank">衬衫</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032201" href="http://nanzhuang.ule.com/28032201-zhengzhuangduanxiuchenshan---------0-1.html" srcid="cateNav_28032196_2" target="_blank">正装短袖衬衫</a>
											</li>
											<li>
												<a data-uspm="28032202" href="http://nanzhuang.ule.com/28032202-xiuxianduanxiuchenshan---------0-1.html" srcid="cateNav_28032196_3" target="_blank">休闲短袖衬衫</a>
											</li>
											<li>
												<a data-uspm="28032203" href="http://nanzhuang.ule.com/28032203-zhengzhuangzhangxiuchenshan---------0-1.html" srcid="cateNav_28032196_4" target="_blank">正装长袖衬衫</a>
											</li>
											<li>
												<a data-uspm="28032205" href="http://nanzhuang.ule.com/28032205-xiuxianzhangxiuchenshan---------0-1.html" srcid="cateNav_28032196_5" target="_blank">休闲长袖衬衫</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032217" class="subcate-title" href="http://nanzhuang.ule.com/28032217-nanku---------0-1.html" srcid="cateNav_28032196_11" target="_blank">男裤</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032219" href="http://nanzhuang.ule.com/28032219-xiku---------0-1.html" srcid="cateNav_28032196_12" target="_blank">西裤</a>
											</li>
											<li>
												<a data-uspm="28032220" href="http://nanzhuang.ule.com/28032220-xiushenxiuxianzhangku---------0-1.html" srcid="cateNav_28032196_13" target="_blank">修身休闲长裤</a>
											</li>
											<li>
												<a data-uspm="28032222" href="http://nanzhuang.ule.com/28032222-zhitongxiuxianzhangku---------0-1.html" srcid="cateNav_28032196_14" target="_blank">直筒休闲长裤</a>
											</li>
											<li>
												<a data-uspm="28032223" href="http://nanzhuang.ule.com/28032223-xiuxianzhongduanku---------0-1.html" srcid="cateNav_28032196_15" target="_blank">休闲中、短裤</a>
											</li>
											<li>
												<a data-uspm="28032224" href="http://nanzhuang.ule.com/28032224-niuziku---------0-1.html" srcid="cateNav_28032196_16" target="_blank">牛仔裤</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032235" class="subcate-title" href="http://nanzhuang.ule.com/28032235-zhenzhishan---------0-1.html" srcid="cateNav_28032196_23" target="_blank">针织衫</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032236" href="http://nanzhuang.ule.com/28032236-yuanlingzhenzhishan---------0-1.html" srcid="cateNav_28032196_24" target="_blank">圆领针织衫</a>
											</li>
											<li>
												<a data-uspm="28032239" href="http://nanzhuang.ule.com/28032239-Vlingzhenzhishan---------0-1.html" srcid="cateNav_28032196_25" target="_blank">V领针织衫</a>
											</li>
											<li>
												<a data-uspm="28032240" href="http://nanzhuang.ule.com/28032240-fanlingzhenzhishan---------0-1.html" srcid="cateNav_28032196_26" target="_blank">翻领针织衫</a>
											</li>
											<li>
												<a data-uspm="28032241" href="http://nanzhuang.ule.com/28032241-kaishan---------0-1.html" srcid="cateNav_28032196_27" target="_blank">开衫</a>
											</li>
											<li>
												<a data-uspm="28032242" href="http://nanzhuang.ule.com/28032242-maobeixin---------0-1.html" srcid="cateNav_28032196_28" target="_blank">毛背心</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032251" class="subcate-title" href="http://nanzhuang.ule.com/28032251-qiudongfu---------0-1.html" srcid="cateNav_28032196_34" target="_blank">秋冬服</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032254" href="http://nanzhuang.ule.com/28032254-dayipizhuang---------0-1.html" srcid="cateNav_28032196_35" target="_blank">大衣/皮装</a>
											</li>
											<li>
												<a data-uspm="28032255" href="http://nanzhuang.ule.com/28032255-duankuanmianfu---------0-1.html" srcid="cateNav_28032196_36" target="_blank">短款棉服</a>
											</li>
											<li>
												<a data-uspm="28032256" href="http://nanzhuang.ule.com/28032256-zhongzhangkuanmianfu---------0-1.html" srcid="cateNav_28032196_37" target="_blank">中长款棉服</a>
											</li>
											<li>
												<a data-uspm="28032257" href="http://nanzhuang.ule.com/28032257-yurongfu---------0-1.html" srcid="cateNav_28032196_38" target="_blank">羽绒服</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="户外" class="">
									<a class="z16" data-uspm="z28031970" href="http://outdoor.ule.com/" srcid="28031970_channel_home"><i></i>运动/户外/器械</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28031970">
								<p>
									<a href="http://outdoor.ule.com/" target="_blank" class="more" data-uspm="28031970m">户外</a>
									<a href="http://store.ule.com/store/7308.html" target="_blank" data-uspm="28031970t1">猎鹰计划 户外装备低至1.4折起</a>
									<a href="http://store.ule.com/store/10944.html" target="_blank" data-uspm="28031970t2">正江运动户外 全场满300立减20</a>
									<a href="http://store.ule.com/store/6570.html" target="_blank" data-uspm="28031970t3">创悦 陪你挑战自我</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/10944--5p2O5a6B----10.html" style="" target="_blank">李宁</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/13649.html" style="" target="_blank">派衣阁</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10733--5bq35bCUS2luZ0NhbXA=----10.html" style="" target="_blank">康尔KingCamp</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8290.html" style="" target="_blank">特步</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6570.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">朗康 </a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10448.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">耐克</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10448.html?uspm=1.1.103_O99_P1.1036.4.2" style="" target="_blank">阿迪达斯</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031983" class="subcate-title" href="http://outdoor.ule.com/28031983-huwaixie---------0-1.html" srcid="cateNav_28031970_8" target="_blank">户外鞋</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032628" href="http://outdoor.ule.com/28032628-dengshanxie---------0-1.html" srcid="cateNav_28031970_9" target="_blank">登山鞋</a>
											</li>
											<li>
												<a data-uspm="28032631" href="http://outdoor.ule.com/28032631-suxixie---------0-1.html" srcid="cateNav_28031970_10" target="_blank">溯溪鞋</a>
											</li>
											<li>
												<a data-uspm="28032630" href="http://outdoor.ule.com/28032630-tubuxie---------0-1.html" srcid="cateNav_28031970_11" target="_blank">徒步鞋</a>
											</li>
											<li>
												<a data-uspm="28032634" href="http://outdoor.ule.com/28032634-yueyexie---------0-1.html" srcid="cateNav_28031970_12" target="_blank">越野鞋</a>
											</li>
											<li>
												<a data-uspm="28032632" href="http://outdoor.ule.com/28032632-shatanxie---------0-1.html" srcid="cateNav_28031970_13" target="_blank">沙滩鞋</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031972" class="subcate-title" href="http://outdoor.ule.com/28031972-yundongfushi---------0-1.html" srcid="cateNav_28031970_27" target="_blank">运动服饰</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032190" href="http://outdoor.ule.com/28032190-Txu---------0-1.html" srcid="cateNav_28031970_28" target="_blank">T恤</a>
											</li>
											<li>
												<a data-uspm="28032191" href="http://outdoor.ule.com/28032191-jiakefengyi---------0-1.html" srcid="cateNav_28031970_29" target="_blank">夹克/风衣</a>
											</li>
											<li>
												<a data-uspm="28032195" href="http://outdoor.ule.com/28032195-maoxianxianshan---------0-1.html" srcid="cateNav_28031970_30" target="_blank">毛线/线衫</a>
											</li>
											<li>
												<a data-uspm="28032192" href="http://outdoor.ule.com/28032192-mianfu---------0-1.html" srcid="cateNav_28031970_31" target="_blank">棉服</a>
											</li>
											<li>
												<a data-uspm="28032185" href="http://outdoor.ule.com/28032185-weiyitaotoushan---------0-1.html" srcid="cateNav_28031970_32" target="_blank">卫衣/套头衫</a>
											</li>
											<li>
												<a data-uspm="28032187" href="http://outdoor.ule.com/28032187-yundongbeixin---------0-1.html" srcid="cateNav_28031970_33" target="_blank">运动背心</a>
											</li>
											<li>
												<a data-uspm="28032186" href="http://outdoor.ule.com/28032186-yundongkuqun---------0-1.html" srcid="cateNav_28031970_34" target="_blank">运动裤/裙</a>
											</li>
											<li>
												<a data-uspm="28032198" href="http://outdoor.ule.com/28032198-yundongpeishi---------0-1.html" srcid="cateNav_28031970_35" target="_blank">运动配饰</a>
											</li>
											<li>
												<a data-uspm="28032189" href="http://outdoor.ule.com/28032189-yundongtaozhuang---------0-1.html" srcid="cateNav_28031970_36" target="_blank">运动套装</a>
											</li>
											<li>
												<a data-uspm="28032194" href="http://outdoor.ule.com/28032194-yurongfu---------0-1.html" srcid="cateNav_28031970_37" target="_blank">羽绒服</a>
											</li>
											<li>
												<a data-uspm="28032197" href="http://outdoor.ule.com/28032197-xunlianfu---------0-1.html" srcid="cateNav_28031970_38" target="_blank">训练服</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031976" class="subcate-title" href="http://outdoor.ule.com/28031976-yundongpeijian---------0-1.html" srcid="cateNav_28031970_51" target="_blank">运动配件</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032573" href="http://outdoor.ule.com/28032573-guajian---------0-1.html" srcid="cateNav_28031970_52" target="_blank">挂件</a>
											</li>
											<li>
												<a data-uspm="28032567" href="http://outdoor.ule.com/28032567-huju---------0-1.html" srcid="cateNav_28031970_53" target="_blank">护具</a>
											</li>
											<li>
												<a data-uspm="28032566" href="http://outdoor.ule.com/28032566-maozi---------0-1.html" srcid="cateNav_28031970_54" target="_blank">帽子</a>
											</li>
											<li>
												<a data-uspm="28032564" href="http://outdoor.ule.com/28032564-wazi---------0-1.html" srcid="cateNav_28031970_55" target="_blank">袜子</a>
											</li>
											<li>
												<a data-uspm="28032570" href="http://outdoor.ule.com/28032570-weijin---------0-1.html" srcid="cateNav_28031970_56" target="_blank">围巾</a>
											</li>
											<li>
												<a data-uspm="28032572" href="http://outdoor.ule.com/28032572-jinghuan---------0-1.html" srcid="cateNav_28031970_57" target="_blank">颈环</a>
											</li>
											<li>
												<a data-uspm="28032575" href="http://outdoor.ule.com/28032575-wandai---------0-1.html" srcid="cateNav_28031970_58" target="_blank">腕带</a>
											</li>
											<li>
												<a data-uspm="28032568" href="http://outdoor.ule.com/28032568-qita---------0-1.html" srcid="cateNav_28031970_59" target="_blank">其他</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031981" class="subcate-title" href="http://outdoor.ule.com/28031981-yundongqicai---------0-1.html" srcid="cateNav_28031970_69" target="_blank">运动器材</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032609" href="http://outdoor.ule.com/28032609-tabuji---------0-1.html" srcid="cateNav_28031970_70" target="_blank">踏步机</a>
											</li>
											<li>
												<a data-uspm="28032610" href="http://outdoor.ule.com/28032610-yangwoban---------0-1.html" srcid="cateNav_28031970_71" target="_blank">仰卧板</a>
											</li>
											<li>
												<a data-uspm="28032612" href="http://outdoor.ule.com/28032612-huabanche---------0-1.html" srcid="cateNav_28031970_72" target="_blank">滑板车</a>
											</li>
											<li>
												<a data-uspm="28032614" href="http://outdoor.ule.com/28032614-yaling---------0-1.html" srcid="cateNav_28031970_73" target="_blank">哑铃</a>
											</li>
											<li>
												<a data-uspm="28032615" href="http://outdoor.ule.com/28032615-tiaosheng---------0-1.html" srcid="cateNav_28031970_74" target="_blank">跳绳</a>
											</li>
											<li>
												<a data-uspm="28032616" href="http://outdoor.ule.com/28032616-zhipailun---------0-1.html" srcid="cateNav_28031970_75" target="_blank">直排轮</a>
											</li>
											<li>
												<a data-uspm="28032617" href="http://outdoor.ule.com/28032617-huaban---------0-1.html" srcid="cateNav_28031970_76" target="_blank">滑板</a>
											</li>
											<li>
												<a data-uspm="28032618" href="http://outdoor.ule.com/28032618-qita---------0-1.html" srcid="cateNav_28031970_77" target="_blank">其他</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28031982" class="subcate-title" href="http://outdoor.ule.com/28031982-huwaifushi---------0-1.html" srcid="cateNav_28031970_1" target="_blank">户外服饰</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032620" href="http://outdoor.ule.com/28032620-chongfengyiku---------0-1.html" srcid="cateNav_28031970_2" target="_blank">冲锋衣裤</a>
											</li>
											<li>
												<a data-uspm="28032627" href="http://outdoor.ule.com/28032627-chuidiaofu---------0-1.html" srcid="cateNav_28031970_3" target="_blank">垂钓服</a>
											</li>
											<li>
												<a data-uspm="28032624" href="http://outdoor.ule.com/28032624-suganyiku---------0-1.html" srcid="cateNav_28031970_4" target="_blank">速干衣裤</a>
											</li>
											<li>
												<a data-uspm="28032621" href="http://outdoor.ule.com/28032621-zhuarongfu---------0-1.html" srcid="cateNav_28031970_5" target="_blank">抓绒服</a>
											</li>
											<li>
												<a data-uspm="28032623" href="http://outdoor.ule.com/28032623-yurongyiku---------0-1.html" srcid="cateNav_28031970_6" target="_blank">羽绒衣裤</a>
											</li>
											<li>
												<a data-uspm="28032626" href="http://outdoor.ule.com/28032626-huaxuefu---------0-1.html" srcid="cateNav_28031970_7" target="_blank">滑雪服</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031980" class="subcate-title" href="http://outdoor.ule.com/28031980-huwaizhuangbei---------0-1.html" srcid="cateNav_28031970_14" target="_blank">户外装备</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032607" href="http://outdoor.ule.com/28032607-chuidiaozhuangbei---------0-1.html" srcid="cateNav_28031970_15" target="_blank">垂钓装备</a>
											</li>
											<li>
												<a data-uspm="28032600" href="http://outdoor.ule.com/28032600-dengshanzhang---------0-1.html" srcid="cateNav_28031970_16" target="_blank">登山杖</a>
											</li>
											<li>
												<a data-uspm="28032601" href="http://outdoor.ule.com/28032601-fangchaodiandixi---------0-1.html" srcid="cateNav_28031970_17" target="_blank">防潮垫/地席</a>
											</li>
											<li>
												<a data-uspm="28032596" href="http://outdoor.ule.com/28032596-gongjulei---------0-1.html" srcid="cateNav_28031970_18" target="_blank">工具类</a>
											</li>
											<li>
												<a data-uspm="28032603" href="http://outdoor.ule.com/28032603-lujuyecanyongpin---------0-1.html" srcid="cateNav_28031970_19" target="_blank">炉具/野餐用品</a>
											</li>
											<li>
												<a data-uspm="28032599" href="http://outdoor.ule.com/28032599-shuijulei---------0-1.html" srcid="cateNav_28031970_20" target="_blank">水具类</a>
											</li>
											<li>
												<a data-uspm="28032592" href="http://outdoor.ule.com/28032592-shuidailei---------0-1.html" srcid="cateNav_28031970_21" target="_blank">睡袋类</a>
											</li>
											<li>
												<a data-uspm="28032590" href="http://outdoor.ule.com/28032590-zhangpenglei---------0-1.html" srcid="cateNav_28031970_22" target="_blank">帐篷类</a>
											</li>
											<li>
												<a data-uspm="28032597" href="http://outdoor.ule.com/28032597-zhaominglei---------0-1.html" srcid="cateNav_28031970_23" target="_blank">照明类</a>
											</li>
											<li>
												<a data-uspm="28032593" href="http://outdoor.ule.com/28032593-didianlei---------0-1.html" srcid="cateNav_28031970_24" target="_blank">地垫类</a>
											</li>
											<li>
												<a data-uspm="28032594" href="http://outdoor.ule.com/28032594-canjulei---------0-1.html" srcid="cateNav_28031970_25" target="_blank">餐具类</a>
											</li>
											<li>
												<a data-uspm="28032606" href="http://outdoor.ule.com/28032606-jijiufanghuzhuangbei---------0-1.html" srcid="cateNav_28031970_26" target="_blank">急救防护装备</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031974" class="subcate-title" href="http://outdoor.ule.com/28031974-yundongxiebao---------0-1.html" srcid="cateNav_28031970_39" target="_blank">运动鞋包</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032550" href="http://outdoor.ule.com/28032550-banxie---------0-1.html" srcid="cateNav_28031970_40" target="_blank">板鞋</a>
											</li>
											<li>
												<a data-uspm="28032551" href="http://outdoor.ule.com/28032551-fanbuxie---------0-1.html" srcid="cateNav_28031970_41" target="_blank">帆布鞋</a>
											</li>
											<li>
												<a data-uspm="28032549" href="http://outdoor.ule.com/28032549-lanqiuxie---------0-1.html" srcid="cateNav_28031970_42" target="_blank">篮球鞋</a>
											</li>
											<li>
												<a data-uspm="28032553" href="http://outdoor.ule.com/28032553-paobuxie---------0-1.html" srcid="cateNav_28031970_43" target="_blank">跑步鞋</a>
											</li>
											<li>
												<a data-uspm="28032561" href="http://outdoor.ule.com/28032561-pingyuqiuxie---------0-1.html" srcid="cateNav_28031970_44" target="_blank">乒羽球鞋</a>
											</li>
											<li>
												<a data-uspm="28032555" href="http://outdoor.ule.com/28032555-tuoxierenzituo---------0-1.html" srcid="cateNav_28031970_45" target="_blank">拖鞋/人字拖</a>
											</li>
											<li>
												<a data-uspm="28032554" href="http://outdoor.ule.com/28032554-xiuxianxie---------0-1.html" srcid="cateNav_28031970_46" target="_blank">休闲鞋</a>
											</li>
											<li>
												<a data-uspm="28032560" href="http://outdoor.ule.com/28032560-xunlianxie---------0-1.html" srcid="cateNav_28031970_47" target="_blank">训练鞋</a>
											</li>
											<li>
												<a data-uspm="28032562" href="http://outdoor.ule.com/28032562-yundongbao---------0-1.html" srcid="cateNav_28031970_48" target="_blank">运动包</a>
											</li>
											<li>
												<a data-uspm="28032557" href="http://outdoor.ule.com/28032557-zhuanxiangyundongxie---------0-1.html" srcid="cateNav_28031970_49" target="_blank">专项运动鞋</a>
											</li>
											<li>
												<a data-uspm="28032559" href="http://outdoor.ule.com/28032559-zuqiuxie---------0-1.html" srcid="cateNav_28031970_50" target="_blank">足球鞋</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031979" class="subcate-title" href="http://outdoor.ule.com/28031979-yundongxiuxianjianshen---------0-1.html" srcid="cateNav_28031970_60" target="_blank">运动休闲健身</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032577" href="http://outdoor.ule.com/28032577-qiulei---------0-1.html" srcid="cateNav_28031970_61" target="_blank">球类</a>
											</li>
											<li>
												<a data-uspm="28032579" href="http://outdoor.ule.com/28032579-yujia---------0-1.html" srcid="cateNav_28031970_62" target="_blank">瑜伽</a>
											</li>
											<li>
												<a data-uspm="28032582" href="http://outdoor.ule.com/28032582-yumaoqiupai---------0-1.html" srcid="cateNav_28031970_63" target="_blank">羽毛球拍</a>
											</li>
											<li>
												<a data-uspm="28032583" href="http://outdoor.ule.com/28032583-pingpangqiupai---------0-1.html" srcid="cateNav_28031970_64" target="_blank">乒乓球拍</a>
											</li>
											<li>
												<a data-uspm="28032584" href="http://outdoor.ule.com/28032584-wangqiupai---------0-1.html" srcid="cateNav_28031970_65" target="_blank">网球拍</a>
											</li>
											<li>
												<a data-uspm="28032587" href="http://outdoor.ule.com/28032587-yongzhuang---------0-1.html" srcid="cateNav_28031970_66" target="_blank">泳装</a>
											</li>
											<li>
												<a data-uspm="28032588" href="http://outdoor.ule.com/28032588-youyongpeijian---------0-1.html" srcid="cateNav_28031970_67" target="_blank">游泳配件</a>
											</li>
											<li>
												<a data-uspm="28032589" href="http://outdoor.ule.com/28032589-yongjingyongmao---------0-1.html" srcid="cateNav_28031970_68" target="_blank">泳镜/泳帽</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031984" class="subcate-title" href="http://outdoor.ule.com/28031984-huwaibao---------0-1.html" srcid="cateNav_28031970_78" target="_blank">户外包</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032635" href="http://outdoor.ule.com/28032635-dengshanbao---------0-1.html" srcid="cateNav_28031970_79" target="_blank">登山包</a>
											</li>
											<li>
												<a data-uspm="28032636" href="http://outdoor.ule.com/28032636-yaobao---------0-1.html" srcid="cateNav_28031970_80" target="_blank">腰包</a>
											</li>
											<li>
												<a data-uspm="28032637" href="http://outdoor.ule.com/28032637-xishubao---------0-1.html" srcid="cateNav_28031970_81" target="_blank">洗漱包</a>
											</li>
											<li>
												<a data-uspm="28032638" href="http://outdoor.ule.com/28032638-yecanbao---------0-1.html" srcid="cateNav_28031970_82" target="_blank">野餐包</a>
											</li>
											<li>
												<a data-uspm="28032639" href="http://outdoor.ule.com/28032639-jijiubao---------0-1.html" srcid="cateNav_28031970_83" target="_blank">急救包</a>
											</li>
											<li>
												<a data-uspm="28032641" href="http://outdoor.ule.com/28032641-shounabao---------0-1.html" srcid="cateNav_28031970_84" target="_blank">收纳包</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="母婴" class="">
									<a class="z17" data-uspm="z28031987" href="http://muying.ule.com/" srcid="28031987_channel_home"><i></i>母婴/玩具</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28031987">
								<p>
									<a href="http://muying.ule.com/" target="_blank" class="more" data-uspm="28031987m">母婴</a>
									<a href="http://store.ule.com/store/12509.html" target="_blank" data-uspm="28031987t1">优彼小警察 智能早教机</a>
									<a href="http://store.ule.com/store/9971.html" target="_blank" data-uspm="28031987t2">纸尿裤专场 花王低至89</a>
									<a href="http://store.ule.com/store/9971----116534.html" target="_blank" data-uspm="28031987t3">进口直营店 好奇专场低至79元</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/8919.html" style="" target="_blank">贝因美</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E7%89%9B%E6%A0%8F.1&amp;srcid=searchkeywords_%E7%89%9B%E6%A0%8F&amp;keywords=%E7%89%9B%E6%A0%8F" style="" target="_blank">牛栏</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%8A%B1%E7%8E%8B.1&amp;srcid=searchkeywords_%E8%8A%B1%E7%8E%8B&amp;keywords=%E8%8A%B1%E7%8E%8B" style="" target="_blank">花王</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.moony.1&amp;srcid=searchkeywords_moony&amp;keywords=moony" style="" target="_blank">moony</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E5%B8%AE%E5%AE%9D%E9%80%82.1&amp;srcid=searchkeywords_%E5%B8%AE%E5%AE%9D%E9%80%82&amp;keywords=%E5%B8%AE%E5%AE%9D%E9%80%82" style="" target="_blank">帮宝适</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%B4%9D%E4%BA%B2.1&amp;srcid=searchkeywords_%E8%B4%9D%E4%BA%B2&amp;keywords=%E8%B4%9D%E4%BA%B2" style="" target="_blank">贝亲</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8613.html" style="" target="_blank">新安怡</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8645.html" style="" target="_blank">伊威</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031994" class="subcate-title" href="http://muying.ule.com/28031994-niaokushijin---------0-1.html" srcid="cateNav_28031987_6" target="_blank">尿裤湿巾</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032710" href="http://muying.ule.com/28032710-zhiniaoku---------0-1.html" srcid="cateNav_28031987_7" target="_blank">纸尿裤</a>
											</li>
											<li>
												<a data-uspm="28032714" href="http://muying.ule.com/28032714-shijin---------0-1.html" srcid="cateNav_28031987_8" target="_blank">湿巾</a>
											</li>
											<li>
												<a data-uspm="28032709" href="http://muying.ule.com/28032709-zhizhipin---------0-1.html" srcid="cateNav_28031987_9" target="_blank">纸制品</a>
											</li>
											<li>
												<a data-uspm="28032713" href="http://muying.ule.com/28032713-niaobudian---------0-1.html" srcid="cateNav_28031987_10" target="_blank">尿布垫</a>
											</li>
											<li>
												<a data-uspm="28032715" href="http://muying.ule.com/28032715-chengrenzhiniaoku---------0-1.html" srcid="cateNav_28031987_11" target="_blank">成人纸尿裤</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031991" class="subcate-title" href="http://muying.ule.com/28031991-buweiyongpin---------0-1.html" srcid="cateNav_28031987_22" target="_blank">哺喂用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032687" href="http://muying.ule.com/28032687-canjuxilie---------0-1.html" srcid="cateNav_28031987_23" target="_blank">餐具系列</a>
											</li>
											<li>
												<a data-uspm="28032690" href="http://muying.ule.com/28032690-baobaobeihu---------0-1.html" srcid="cateNav_28031987_24" target="_blank">宝宝杯/壶</a>
											</li>
											<li>
												<a data-uspm="28032692" href="http://muying.ule.com/28032692-buweidianqi---------0-1.html" srcid="cateNav_28031987_25" target="_blank">哺喂电器</a>
											</li>
											<li>
												<a data-uspm="28032684" href="http://muying.ule.com/28032684-naipingxilie---------0-1.html" srcid="cateNav_28031987_26" target="_blank">奶瓶系列</a>
											</li>
											<li>
												<a data-uspm="28032686" href="http://muying.ule.com/28032686-naizuixilie---------0-1.html" srcid="cateNav_28031987_27" target="_blank">奶嘴系列</a>
											</li>
											<li>
												<a data-uspm="28032689" href="http://muying.ule.com/28032689-fuzhuyongpin---------0-1.html" srcid="cateNav_28031987_28" target="_blank">辅助用品</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031990" class="subcate-title" href="http://muying.ule.com/28031990-baobaofushi---------0-1.html" srcid="cateNav_28031987_40" target="_blank">宝宝服饰</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032675" href="http://muying.ule.com/28032675-neiyixilie---------0-1.html" srcid="cateNav_28031987_41" target="_blank">内衣系列</a>
											</li>
											<li>
												<a data-uspm="28032677" href="http://muying.ule.com/28032677-waifuxilie---------0-1.html" srcid="cateNav_28031987_42" target="_blank">外服系列</a>
											</li>
											<li>
												<a data-uspm="28032681" href="http://muying.ule.com/28032681-xiezixilie---------0-1.html" srcid="cateNav_28031987_43" target="_blank">鞋子系列</a>
											</li>
											<li>
												<a data-uspm="28032682" href="http://muying.ule.com/28032682-fushipeijian---------0-1.html" srcid="cateNav_28031987_44" target="_blank">服饰配件</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031992" class="subcate-title" href="http://muying.ule.com/28031992-qinshijiaju---------0-1.html" srcid="cateNav_28031987_50" target="_blank">寝室家具</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032694" href="http://muying.ule.com/28032694-chuangshangyongpin---------0-1.html" srcid="cateNav_28031987_51" target="_blank">床上用品</a>
											</li>
											<li>
												<a data-uspm="28032693" href="http://muying.ule.com/28032693-tongchuang---------0-1.html" srcid="cateNav_28031987_52" target="_blank">童床</a>
											</li>
											<li>
												<a data-uspm="28032697" href="http://muying.ule.com/28032697-canzhuoyi---------0-1.html" srcid="cateNav_28031987_53" target="_blank">餐桌/椅</a>
											</li>
											<li>
												<a data-uspm="28032696" href="http://muying.ule.com/28032696-dengju---------0-1.html" srcid="cateNav_28031987_54" target="_blank">灯具</a>
											</li>
											<li>
												<a data-uspm="28032695" href="http://muying.ule.com/28032695-jiaju---------0-1.html" srcid="cateNav_28031987_55" target="_blank">家具</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031993" class="subcate-title" href="http://muying.ule.com/28031993-chuxingyongpin---------0-1.html" srcid="cateNav_28031987_65" target="_blank">出行用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032707" href="http://muying.ule.com/28032707-anquanzuoyi---------0-1.html" srcid="cateNav_28031987_66" target="_blank">安全座椅</a>
											</li>
											<li>
												<a data-uspm="28032698" href="http://muying.ule.com/28032698-yingertuiche---------0-1.html" srcid="cateNav_28031987_67" target="_blank">婴儿推车</a>
											</li>
											<li>
												<a data-uspm="28032706" href="http://muying.ule.com/28032706-huabanche---------0-1.html" srcid="cateNav_28031987_68" target="_blank">滑板车</a>
											</li>
											<li>
												<a data-uspm="28032705" href="http://muying.ule.com/28032705-zixingche---------0-1.html" srcid="cateNav_28031987_69" target="_blank">自行车</a>
											</li>
											<li>
												<a data-uspm="28032702" href="http://muying.ule.com/28032702-xuebuche---------0-1.html" srcid="cateNav_28031987_70" target="_blank">学步车</a>
											</li>
											<li>
												<a data-uspm="28032704" href="http://muying.ule.com/28032704-diandongche---------0-1.html" srcid="cateNav_28031987_71" target="_blank">电动车</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28031988" class="subcate-title" href="http://muying.ule.com/28031988-shipinbaojian---------0-1.html" srcid="cateNav_28031987_1" target="_blank">食品保健</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032650" href="http://muying.ule.com/28032650-baobaonaifen---------0-1.html" srcid="cateNav_28031987_2" target="_blank">宝宝奶粉</a>
											</li>
											<li>
												<a data-uspm="28032643" href="http://muying.ule.com/28032643-yunfunaifen---------0-1.html" srcid="cateNav_28031987_3" target="_blank">孕妇奶粉</a>
											</li>
											<li>
												<a data-uspm="28032646" href="http://muying.ule.com/28032646-chengrennaifen---------0-1.html" srcid="cateNav_28031987_4" target="_blank">成人奶粉</a>
											</li>
											<li>
												<a data-uspm="28032651" href="http://muying.ule.com/28032651-fushi---------0-1.html" srcid="cateNav_28031987_5" target="_blank">辅食</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031997" class="subcate-title" href="http://muying.ule.com/28031997-wanjushuji---------0-1.html" srcid="cateNav_28031987_12" target="_blank">玩具书籍</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032725" href="http://muying.ule.com/28032725-muzhiwanju---------0-1.html" srcid="cateNav_28031987_13" target="_blank">木质玩具</a>
											</li>
											<li>
												<a data-uspm="28032723" href="http://muying.ule.com/28032723-sujiaowanju---------0-1.html" srcid="cateNav_28031987_14" target="_blank">塑胶玩具</a>
											</li>
											<li>
												<a data-uspm="28032726" href="http://muying.ule.com/28032726-diandongwanju---------0-1.html" srcid="cateNav_28031987_15" target="_blank">电动玩具</a>
											</li>
											<li>
												<a data-uspm="28032728" href="http://muying.ule.com/28032728-yinlewanju---------0-1.html" srcid="cateNav_28031987_16" target="_blank">音乐玩具</a>
											</li>
											<li>
												<a data-uspm="28032727" href="http://muying.ule.com/28032727-qizhiwanju---------0-1.html" srcid="cateNav_28031987_17" target="_blank">启智玩具</a>
											</li>
											<li>
												<a data-uspm="28032722" href="http://muying.ule.com/28032722-maorongwanju---------0-1.html" srcid="cateNav_28031987_18" target="_blank">毛绒玩具</a>
											</li>
											<li>
												<a data-uspm="28032721" href="http://muying.ule.com/28032721-xuexiwenjuyongpin---------0-1.html" srcid="cateNav_28031987_19" target="_blank">学习文具用品</a>
											</li>
											<li>
												<a data-uspm="28032719" href="http://muying.ule.com/28032719-yuershuji---------0-1.html" srcid="cateNav_28031987_20" target="_blank">育儿书籍</a>
											</li>
											<li>
												<a data-uspm="28032718" href="http://muying.ule.com/28032718-yundongjianshen---------0-1.html" srcid="cateNav_28031987_21" target="_blank">运动健身</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031999" class="subcate-title" href="http://muying.ule.com/28031999-xihuyongpin---------0-1.html" srcid="cateNav_28031987_29" target="_blank">洗护用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032749" href="http://muying.ule.com/28032749-anquanfanghu---------0-1.html" srcid="cateNav_28031987_30" target="_blank">安全防护</a>
											</li>
											<li>
												<a data-uspm="28032750" href="http://muying.ule.com/28032750-gerenhuli---------0-1.html" srcid="cateNav_28031987_31" target="_blank">个人护理</a>
											</li>
											<li>
												<a data-uspm="28032738" href="http://muying.ule.com/28032738-zuobianqi---------0-1.html" srcid="cateNav_28031987_32" target="_blank">座便器</a>
											</li>
											<li>
												<a data-uspm="28032731" href="http://muying.ule.com/28032731-xiyuyongpin---------0-1.html" srcid="cateNav_28031987_33" target="_blank">洗浴用品</a>
											</li>
											<li>
												<a data-uspm="28032741" href="http://muying.ule.com/28032741-kouqiangqingjie---------0-1.html" srcid="cateNav_28031987_34" target="_blank">口腔清洁</a>
											</li>
											<li>
												<a data-uspm="28032740" href="http://muying.ule.com/28032740-qingjiejixidiji---------0-1.html" srcid="cateNav_28031987_35" target="_blank">清洁剂/洗涤剂</a>
											</li>
											<li>
												<a data-uspm="28032747" href="http://muying.ule.com/28032747-hutunxilie---------0-1.html" srcid="cateNav_28031987_36" target="_blank">护臀系列</a>
											</li>
											<li>
												<a data-uspm="28032742" href="http://muying.ule.com/28032742-runfuxilie---------0-1.html" srcid="cateNav_28031987_37" target="_blank">润肤系列</a>
											</li>
											<li>
												<a data-uspm="28032746" href="http://muying.ule.com/28032746-shuangshenxilie---------0-1.html" srcid="cateNav_28031987_38" target="_blank">爽身系列</a>
											</li>
											<li>
												<a data-uspm="28032744" href="http://muying.ule.com/28032744-fangwenxilie---------0-1.html" srcid="cateNav_28031987_39" target="_blank">防蚊系列</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032001" class="subcate-title" href="http://muying.ule.com/28032001-ertongfushi---------0-1.html" srcid="cateNav_28031987_45" target="_blank">儿童服饰</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032751" href="http://muying.ule.com/28032751-neiyixilie---------0-1.html" srcid="cateNav_28031987_46" target="_blank">内衣系列</a>
											</li>
											<li>
												<a data-uspm="28032752" href="http://muying.ule.com/28032752-waifuxilie---------0-1.html" srcid="cateNav_28031987_47" target="_blank">外服系列</a>
											</li>
											<li>
												<a data-uspm="28032753" href="http://muying.ule.com/28032753-xiezixilie---------0-1.html" srcid="cateNav_28031987_48" target="_blank">鞋子系列</a>
											</li>
											<li>
												<a data-uspm="28032755" href="http://muying.ule.com/28032755-fushipeijian---------0-1.html" srcid="cateNav_28031987_49" target="_blank">服饰配件</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031989" class="subcate-title" href="http://muying.ule.com/28031989-mamayongpin---------0-1.html" srcid="cateNav_28031987_56" target="_blank">妈妈用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032656" href="http://muying.ule.com/28032656-neiyixilie---------0-1.html" srcid="cateNav_28031987_57" target="_blank">内衣系列</a>
											</li>
											<li>
												<a data-uspm="28032654" href="http://muying.ule.com/28032654-yunfuzhuang---------0-1.html" srcid="cateNav_28031987_58" target="_blank">孕妇装</a>
											</li>
											<li>
												<a data-uspm="28032659" href="http://muying.ule.com/28032659-xiyuhufu---------0-1.html" srcid="cateNav_28031987_59" target="_blank">洗浴护肤</a>
											</li>
											<li>
												<a data-uspm="28032661" href="http://muying.ule.com/28032661-weishengyongpin---------0-1.html" srcid="cateNav_28031987_60" target="_blank">卫生用品</a>
											</li>
											<li>
												<a data-uspm="28032660" href="http://muying.ule.com/28032660-kouqiangyongpin---------0-1.html" srcid="cateNav_28031987_61" target="_blank">口腔用品</a>
											</li>
											<li>
												<a data-uspm="28032657" href="http://muying.ule.com/28032657-buruyongpin---------0-1.html" srcid="cateNav_28031987_62" target="_blank">哺乳用品</a>
											</li>
											<li>
												<a data-uspm="28032662" href="http://muying.ule.com/28032662-waichuyongpin---------0-1.html" srcid="cateNav_28031987_63" target="_blank">外出用品</a>
											</li>
											<li>
												<a data-uspm="28032663" href="http://muying.ule.com/28032663-yunfuyongpin---------0-1.html" srcid="cateNav_28031987_64" target="_blank">孕妇用品</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="美食" class="">
									<a class="z10" data-uspm="z28031909" href="http://meishi.ule.com/" srcid="28031909_channel_home"><i></i>特色美食</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28031909">
								<p>
									<a href="http://meishi.ule.com/" target="_blank" class="more" data-uspm="28031909m">美食</a>
									<a href="http://np.ule.com/store/12405.html" target="_blank" data-uspm="28031909t1">家乡卤制品 低至26元包邮</a>
									<a href="http://store.ule.com/store/7687.html" target="_blank" data-uspm="28031909t2">新农哥食品 满88减5</a>
									<a href="http://store.ule.com/store/8543.html" target="_blank" data-uspm="28031909t3">美时尚 全场3折起</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/7868.html" style="" target="_blank">旺旺</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/7687.html" style="" target="_blank">新农哥</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6868.html" style="" target="_blank">禾煜</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/12905----156491.html" style="" target="_blank">乐事</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10508----121456.html" style="" target="_blank">莫斯利安</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8892----120571--10--18728.html" style="" target="_blank">娃哈哈</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8270.html" style="" target="_blank">五粮液</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/12790.html" style="" target="_blank">泸州老窖</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031910" class="subcate-title" href="http://meishi.ule.com/28031910-ganhuo---------0-1.html" srcid="cateNav_28031909_1" target="_blank">干货</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031911" href="http://meishi.ule.com/28031911-zaolei---------0-1.html" srcid="cateNav_28031909_2" target="_blank">枣类</a>
											</li>
											<li>
												<a data-uspm="28031912" href="http://meishi.ule.com/28031912-jungulei---------0-1.html" srcid="cateNav_28031909_3" target="_blank">菌菇类</a>
											</li>
											<li>
												<a data-uspm="28031937" href="http://meishi.ule.com/28031937-alazhipin---------0-1.html" srcid="cateNav_28031909_4" target="_blank">腌腊制品</a>
											</li>
											<li>
												<a data-uspm="28031938" href="http://meishi.ule.com/28031938-gancai---------0-1.html" srcid="cateNav_28031909_5" target="_blank">干菜</a>
											</li>
											<li>
												<a data-uspm="28031939" href="http://meishi.ule.com/28031939-jishidouzhipinlei---------0-1.html" srcid="cateNav_28031909_6" target="_blank">即食豆制品类</a>
											</li>
											<li>
												<a data-uspm="28031940" href="http://meishi.ule.com/28031940-fensi---------0-1.html" srcid="cateNav_28031909_7" target="_blank">粉丝</a>
											</li>
											<li>
												<a data-uspm="28031941" href="http://meishi.ule.com/28031941-heimueryiner---------0-1.html" srcid="cateNav_28031909_8" target="_blank">黑木耳/银耳</a>
											</li>
											<li>
												<a data-uspm="28032045" href="http://meishi.ule.com/28032045-aganshuichanpin---------0-1.html" srcid="cateNav_28031909_9" target="_blank">腌干水产品</a>
											</li>
											<li>
												<a data-uspm="28032047" href="http://meishi.ule.com/28032047-lianzibaihe---------0-1.html" srcid="cateNav_28031909_10" target="_blank">莲子/百合</a>
											</li>
											<li>
												<a data-uspm="28032048" href="http://meishi.ule.com/28032048-gouqiguiyuanganlongyan---------0-1.html" srcid="cateNav_28031909_11" target="_blank">枸杞/桂圆干/龙眼</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031914" class="subcate-title" href="http://meishi.ule.com/28031914-jiankangliangyou---------0-1.html" srcid="cateNav_28031909_24" target="_blank">健康粮油</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031915" href="http://meishi.ule.com/28031915-shiyongyou---------0-1.html" srcid="cateNav_28031909_25" target="_blank">食用油</a>
											</li>
											<li>
												<a data-uspm="28031933" href="http://meishi.ule.com/28031933-mimianfen---------0-1.html" srcid="cateNav_28031909_26" target="_blank">米/面粉</a>
											</li>
											<li>
												<a data-uspm="28031934" href="http://meishi.ule.com/28031934-zaliang---------0-1.html" srcid="cateNav_28031909_27" target="_blank">杂粮</a>
											</li>
											<li>
												<a data-uspm="28031935" href="http://meishi.ule.com/28031935-guamian---------0-1.html" srcid="cateNav_28031909_28" target="_blank">挂面</a>
											</li>
											<li>
												<a data-uspm="28031936" href="http://meishi.ule.com/28031936-sushimimian---------0-1.html" srcid="cateNav_28031909_29" target="_blank">速食米面</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031919" class="subcate-title" href="http://meishi.ule.com/28031919-chongdiaoshipin---------0-1.html" srcid="cateNav_28031909_37" target="_blank">冲调食品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031920" href="http://meishi.ule.com/28031920-maipianleihulei---------0-1.html" srcid="cateNav_28031909_38" target="_blank">麦片类/糊类</a>
											</li>
											<li>
												<a data-uspm="28032121" href="http://meishi.ule.com/28032121-fengchanpin---------0-1.html" srcid="cateNav_28031909_39" target="_blank">蜂产品</a>
											</li>
											<li>
												<a data-uspm="28032124" href="http://meishi.ule.com/28032124-naicha---------0-1.html" srcid="cateNav_28031909_40" target="_blank">奶茶</a>
											</li>
											<li>
												<a data-uspm="28032133" href="http://meishi.ule.com/28032133-naifen---------0-1.html" srcid="cateNav_28031909_41" target="_blank">奶粉</a>
											</li>
											<li>
												<a data-uspm="28032134" href="http://meishi.ule.com/28032134-kafei---------0-1.html" srcid="cateNav_28031909_42" target="_blank">咖啡</a>
											</li>
											<li>
												<a data-uspm="28032135" href="http://meishi.ule.com/28032135-chaye---------0-1.html" srcid="cateNav_28031909_43" target="_blank">茶叶</a>
											</li>
											<li>
												<a data-uspm="28032136" href="http://meishi.ule.com/28032136-surongchongyin---------0-1.html" srcid="cateNav_28031909_44" target="_blank">速溶冲饮</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031923" class="subcate-title" href="http://meishi.ule.com/28031923-jiulei---------0-1.html" srcid="cateNav_28031909_55" target="_blank">酒类</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031924" href="http://meishi.ule.com/28031924-yangjiu---------0-1.html" srcid="cateNav_28031909_56" target="_blank">洋酒</a>
											</li>
											<li>
												<a data-uspm="28032151" href="http://meishi.ule.com/28032151-putaojiu---------0-1.html" srcid="cateNav_28031909_57" target="_blank">葡萄酒</a>
											</li>
											<li>
												<a data-uspm="28032152" href="http://meishi.ule.com/28032152-baijiu---------0-1.html" srcid="cateNav_28031909_58" target="_blank">白酒</a>
											</li>
											<li>
												<a data-uspm="28032153" href="http://meishi.ule.com/28032153-pijiu---------0-1.html" srcid="cateNav_28031909_59" target="_blank">啤酒</a>
											</li>
											<li>
												<a data-uspm="28032154" href="http://meishi.ule.com/28032154-zibujiu---------0-1.html" srcid="cateNav_28031909_60" target="_blank">滋补酒</a>
											</li>
											<li>
												<a data-uspm="28032155" href="http://meishi.ule.com/28032155-huangjiu---------0-1.html" srcid="cateNav_28031909_61" target="_blank">黄酒</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031929" class="subcate-title" href="http://meishi.ule.com/28031929-shengxianshipin---------0-1.html" srcid="cateNav_28031909_66" target="_blank">生鲜食品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031930" href="http://meishi.ule.com/28031930-xinxianshuguo---------0-1.html" srcid="cateNav_28031909_67" target="_blank">新鲜蔬果</a>
											</li>
											<li>
												<a data-uspm="28032166" href="http://meishi.ule.com/28032166-qindandanzhipin---------0-1.html" srcid="cateNav_28031909_68" target="_blank">禽/蛋/蛋制品</a>
											</li>
											<li>
												<a data-uspm="28032169" href="http://meishi.ule.com/28032169-lengxianrourouzhipin---------0-1.html" srcid="cateNav_28031909_69" target="_blank">冷鲜肉/肉制品</a>
											</li>
											<li>
												<a data-uspm="28032171" href="http://meishi.ule.com/28032171-haixianshuichanpinshuichanzhipin---------0-1.html" srcid="cateNav_28031909_70" target="_blank">海鲜/水产品/水产制品</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">为你推荐</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://store.ule.com/store/10217.html" style="" target="_blank">农垦精选放心食材</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031913" class="subcate-title" href="http://meishi.ule.com/28031913-xiuxianlingshi---------0-1.html" srcid="cateNav_28031909_12" target="_blank">休闲零食</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031916" href="http://meishi.ule.com/28031916-jianguochaohuo---------0-1.html" srcid="cateNav_28031909_13" target="_blank">坚果炒货</a>
											</li>
											<li>
												<a data-uspm="28032058" href="http://meishi.ule.com/28032058-guodongbudingguilinggao---------0-1.html" srcid="cateNav_28031909_14" target="_blank">果冻/布丁/龟苓膏</a>
											</li>
											<li>
												<a data-uspm="28032059" href="http://meishi.ule.com/28032059-penghuashipin---------0-1.html" srcid="cateNav_28031909_15" target="_blank">膨化食品</a>
											</li>
											<li>
												<a data-uspm="28032062" href="http://meishi.ule.com/28032062-rouganroufudouganshushi---------0-1.html" srcid="cateNav_28031909_16" target="_blank">肉干肉脯/豆干/熟食</a>
											</li>
											<li>
												<a data-uspm="28032066" href="http://meishi.ule.com/28032066-youyusiyuganhaiweijishi---------0-1.html" srcid="cateNav_28031909_17" target="_blank">鱿鱼丝/鱼干/海味即食</a>
											</li>
											<li>
												<a data-uspm="28032069" href="http://meishi.ule.com/28032069-mijian---------0-1.html" srcid="cateNav_28031909_18" target="_blank">蜜饯</a>
											</li>
											<li>
												<a data-uspm="28032070" href="http://meishi.ule.com/28032070-qitaxiuxianlingshi---------0-1.html" srcid="cateNav_28031909_19" target="_blank">其他休闲零食</a>
											</li>
											<li>
												<a data-uspm="28032072" href="http://meishi.ule.com/28032072-binggan---------0-1.html" srcid="cateNav_28031909_20" target="_blank">饼干</a>
											</li>
											<li>
												<a data-uspm="28032077" href="http://meishi.ule.com/28032077-gaodian---------0-1.html" srcid="cateNav_28031909_21" target="_blank">糕点</a>
											</li>
											<li>
												<a data-uspm="28032079" href="http://meishi.ule.com/28032079-tangguo---------0-1.html" srcid="cateNav_28031909_22" target="_blank">糖果</a>
											</li>
											<li>
												<a data-uspm="28032080" href="http://meishi.ule.com/28032080-qiaokeli---------0-1.html" srcid="cateNav_28031909_23" target="_blank">巧克力</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031917" class="subcate-title" href="http://meishi.ule.com/28031917-yinliaoshuiniunai---------0-1.html" srcid="cateNav_28031909_30" target="_blank">饮料/水/牛奶</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031918" href="http://meishi.ule.com/28031918-guozhi---------0-1.html" srcid="cateNav_28031909_31" target="_blank">果汁</a>
											</li>
											<li>
												<a data-uspm="28032083" href="http://meishi.ule.com/28032083-chayinliao---------0-1.html" srcid="cateNav_28031909_32" target="_blank">茶饮料</a>
											</li>
											<li>
												<a data-uspm="28032084" href="http://meishi.ule.com/28032084-shuikafei---------0-1.html" srcid="cateNav_28031909_33" target="_blank">水/咖啡</a>
											</li>
											<li>
												<a data-uspm="28032085" href="http://meishi.ule.com/28032085-tansuanyinliao---------0-1.html" srcid="cateNav_28031909_34" target="_blank">碳酸饮料</a>
											</li>
											<li>
												<a data-uspm="28032086" href="http://meishi.ule.com/28032086-gongnengyinliao---------0-1.html" srcid="cateNav_28031909_35" target="_blank">功能饮料</a>
											</li>
											<li>
												<a data-uspm="28032087" href="http://meishi.ule.com/28032087-ruzhipin---------0-1.html" srcid="cateNav_28031909_36" target="_blank">乳制品</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031921" class="subcate-title" href="http://meishi.ule.com/28031921-chufangdiaoliaofangbiansushi---------0-1.html" srcid="cateNav_28031909_45" target="_blank">厨房调料/方便速食</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031922" href="http://meishi.ule.com/28031922-diaoweiliao---------0-1.html" srcid="cateNav_28031909_46" target="_blank">调味料</a>
											</li>
											<li>
												<a data-uspm="28032138" href="http://meishi.ule.com/28032138-diaoweijiang---------0-1.html" srcid="cateNav_28031909_47" target="_blank">调味酱</a>
											</li>
											<li>
												<a data-uspm="28032139" href="http://meishi.ule.com/28032139-tangliao---------0-1.html" srcid="cateNav_28031909_48" target="_blank">汤料</a>
											</li>
											<li>
												<a data-uspm="28032141" href="http://meishi.ule.com/28032141-diaoweiyou---------0-1.html" srcid="cateNav_28031909_49" target="_blank">调味油</a>
											</li>
											<li>
												<a data-uspm="28032144" href="http://meishi.ule.com/28032144-jiangcai---------0-1.html" srcid="cateNav_28031909_50" target="_blank">酱菜</a>
											</li>
											<li>
												<a data-uspm="28032147" href="http://meishi.ule.com/28032147-guantou---------0-1.html" srcid="cateNav_28031909_51" target="_blank">罐头</a>
											</li>
											<li>
												<a data-uspm="28032148" href="http://meishi.ule.com/28032148-huotuichang---------0-1.html" srcid="cateNav_28031909_52" target="_blank">火腿肠</a>
											</li>
											<li>
												<a data-uspm="28032149" href="http://meishi.ule.com/28032149-jishishushi---------0-1.html" srcid="cateNav_28031909_53" target="_blank">即食熟食</a>
											</li>
											<li>
												<a data-uspm="28032150" href="http://meishi.ule.com/28032150-yantangcu---------0-1.html" srcid="cateNav_28031909_54" target="_blank">盐/糖/醋</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031925" class="subcate-title" href="http://meishi.ule.com/28031925-tegonglihe---------0-1.html" srcid="cateNav_28031909_62" target="_blank">特供礼盒</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031926" href="http://meishi.ule.com/28031926-zongzi---------0-1.html" srcid="cateNav_28031909_63" target="_blank">粽子</a>
											</li>
											<li>
												<a data-uspm="28031927" href="http://meishi.ule.com/28031927-zongheshipinlihe---------0-1.html" srcid="cateNav_28031909_64" target="_blank">综合食品礼盒</a>
											</li>
											<li>
												<a data-uspm="28031928" href="http://meishi.ule.com/28031928-zhongqiuyuebing---------0-1.html" srcid="cateNav_28031909_65" target="_blank">中秋月饼</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033241" class="subcate-title" href="http://meishi.ule.com/28033241-yangshengcanrongshicai---------0-1.html" srcid="cateNav_28031909_71" target="_blank">养生参茸食材</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033242" href="http://meishi.ule.com/28033242-dongchongxiacao---------0-1.html" srcid="cateNav_28031909_72" target="_blank">冬虫夏草</a>
											</li>
											<li>
												<a data-uspm="28033243" href="http://meishi.ule.com/28033243-gaolican---------0-1.html" srcid="cateNav_28031909_73" target="_blank">高丽参</a>
											</li>
											<li>
												<a data-uspm="28033244" href="http://meishi.ule.com/28033244-haichanpinlingzhi---------0-1.html" srcid="cateNav_28031909_74" target="_blank">海产品/灵芝</a>
											</li>
											<li>
												<a data-uspm="28033245" href="http://meishi.ule.com/28033245-yanwo---------0-1.html" srcid="cateNav_28031909_75" target="_blank">燕窝</a>
											</li>
											<li>
												<a data-uspm="28033246" href="http://meishi.ule.com/28033246-rencan---------0-1.html" srcid="cateNav_28031909_76" target="_blank">人参</a>
											</li>
											<li>
												<a data-uspm="28033247" href="http://meishi.ule.com/28033247-shihufengdou---------0-1.html" srcid="cateNav_28031909_77" target="_blank">石斛/枫斗</a>
											</li>
											<li>
												<a data-uspm="28033248" href="http://meishi.ule.com/28033248-xiyangcanhuaqican---------0-1.html" srcid="cateNav_28031909_78" target="_blank">西洋参/花旗参</a>
											</li>
											<li>
												<a data-uspm="28033249" href="http://meishi.ule.com/28033249-xuehaluchanpin---------0-1.html" srcid="cateNav_28031909_79" target="_blank">雪蛤/鹿产品</a>
											</li>
											<li>
												<a data-uspm="28033250" href="http://meishi.ule.com/28033250-fenghuachanpin---------0-1.html" srcid="cateNav_28031909_80" target="_blank">蜂花产品</a>
											</li>
											<li>
												<a data-uspm="28033251" href="http://meishi.ule.com/28033251-yaoshitongyuan---------0-1.html" srcid="cateNav_28031909_81" target="_blank">药食同源</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="食品" class="">
									<a data-uspm="z28031995" href="http://jinkoushipin.ule.com/" srcid="28031995_channel_home" class="z21"><i></i>进口食品</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%B6%8A%E5%8D%97Tipo%E9%9D%A2%E5%8C%85%E5%B9%B2.1&amp;srcid=searchkeywords_%E8%B6%8A%E5%8D%97Tipo%E9%9D%A2%E5%8C%85%E5%B9%B2&amp;keywords=%E8%B6%8A%E5%8D%97Tipo%E9%9D%A2%E5%8C%85%E5%B9%B2" style="" target="_blank">Tipo</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E4%B8%BD%E8%8A%9D%E5%A3%AB.1&amp;srcid=searchkeywords_%E4%B8%BD%E8%8A%9D%E5%A3%AB&amp;keywords=%E4%B8%BD%E8%8A%9D%E5%A3%AB" style="" target="_blank">丽芝士</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E3%80%81%E8%93%9D%E7%BD%90.1&amp;srcid=searchkeywords_%E3%80%81%E8%93%9D%E7%BD%90&amp;keywords=%E3%80%81%E8%93%9D%E7%BD%90" style="" target="_blank">蓝罐</a>
											</li>
											<li>
												<a href="http://search.ule.com/--%E5%BC%A0%E5%90%9B%E9%9B%85--------9-1.html?uspm=1.1.103_O99_P1.1034.s2.1" style="" target="_blank">张君雅</a>
											</li>
											<li>
												<a href="http://item.ule.com/item/1399960-0-1.html?uspm=1.1.103_O99_P1.1036.1.1" style="" target="_blank">北田</a>
											</li>
											<li>
												<a href="http://search.ule.com/--%E8%B4%B9%E5%88%97%E7%BD%97--------9-1.html?uspm=1.1.103_O99_P1.1034.s2.1" style="" target="_blank">费列罗</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O9_P1.102.%E5%BE%B7%E8%8F%B2%E4%B8%9D.1&amp;srcid=searchkeywords_%E5%BE%B7%E8%8F%B2%E4%B8%9D&amp;keywords=%E5%BE%B7%E8%8F%B2%E4%B8%9D" style="" target="_blank">德菲丝</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E7%9B%8A%E6%98%8C.1&amp;srcid=searchkeywords_%E7%9B%8A%E6%98%8C&amp;keywords=%E7%9B%8A%E6%98%8C" style="" target="_blank">益昌</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E8%8E%B1%E5%AE%B6.1&amp;srcid=searchkeywords_%E8%8E%B1%E5%AE%B6&amp;keywords=%E8%8E%B1%E5%AE%B6" style="" target="_blank">莱家</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E4%B9%90%E5%A4%A9.1&amp;srcid=searchkeywords_%E4%B9%90%E5%A4%A9&amp;keywords=%E4%B9%90%E5%A4%A9" style="" target="_blank">乐天</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031998" class="subcate-title" href="http://jinkoushipin.ule.com/28031998-jinkoubinggangaodian---------0-1.html" srcid="cateNav_28031995_3" target="_blank">进口饼干糕点</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032035" href="http://jinkoushipin.ule.com/28032035-jinkoubinggan---------0-1.html" srcid="cateNav_28031995_4" target="_blank">进口饼干</a>
											</li>
											<li>
												<a data-uspm="28032036" href="http://jinkoushipin.ule.com/28032036-jinkouquqi---------0-1.html" srcid="cateNav_28031995_5" target="_blank">进口曲奇</a>
											</li>
											<li>
												<a data-uspm="28032037" href="http://jinkoushipin.ule.com/28032037-jinkouweihua---------0-1.html" srcid="cateNav_28031995_6" target="_blank">进口威化</a>
											</li>
											<li>
												<a data-uspm="28032038" href="http://jinkoushipin.ule.com/28032038-jinkougaodian---------0-1.html" srcid="cateNav_28031995_7" target="_blank">进口糕点</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032002" class="subcate-title" href="http://jinkoushipin.ule.com/28032002-jinkouguoganmijian---------0-1.html" srcid="cateNav_28031995_11" target="_blank">进口果干/蜜饯</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032042" href="http://jinkoushipin.ule.com/28032042-jinkouguogan---------0-1.html" srcid="cateNav_28031995_12" target="_blank">进口果干</a>
											</li>
											<li>
												<a data-uspm="28032043" href="http://jinkoushipin.ule.com/28032043-jinkoujianguo---------0-1.html" srcid="cateNav_28031995_13" target="_blank">进口坚果</a>
											</li>
											<li>
												<a data-uspm="28032044" href="http://jinkoushipin.ule.com/28032044-jinkoumijian---------0-1.html" srcid="cateNav_28031995_14" target="_blank">进口蜜饯</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032004" class="subcate-title" href="http://jinkoushipin.ule.com/28032004-jinkouchongyinzaocanguwu---------0-1.html" srcid="cateNav_28031995_18" target="_blank">进口冲饮/早餐谷物</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032081" href="http://jinkoushipin.ule.com/28032081-jinkouzaocanguwu---------0-1.html" srcid="cateNav_28031995_19" target="_blank">进口早餐谷物</a>
											</li>
											<li>
												<a data-uspm="28032097" href="http://jinkoushipin.ule.com/28032097-jinkoufengmi---------0-1.html" srcid="cateNav_28031995_20" target="_blank">进口蜂蜜</a>
											</li>
											<li>
												<a data-uspm="28032098" href="http://jinkoushipin.ule.com/28032098-jinkouchongyin---------0-1.html" srcid="cateNav_28031995_21" target="_blank">进口冲饮</a>
											</li>
											<li>
												<a data-uspm="28032101" href="http://jinkoushipin.ule.com/28032101-jinkouchengrennaifen---------0-1.html" srcid="cateNav_28031995_22" target="_blank">进口成人奶粉</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032008" class="subcate-title" href="http://jinkoushipin.ule.com/28032008-jinkouyinyongshuiyinliao---------0-1.html" srcid="cateNav_28031995_30" target="_blank">进口饮用水/饮料</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032126" href="http://jinkoushipin.ule.com/28032126-jinkouyinyongshui---------0-1.html" srcid="cateNav_28031995_31" target="_blank">进口饮用水</a>
											</li>
											<li>
												<a data-uspm="28032127" href="http://jinkoushipin.ule.com/28032127-jinkouguozhi---------0-1.html" srcid="cateNav_28031995_32" target="_blank">进口果汁</a>
											</li>
											<li>
												<a data-uspm="28032129" href="http://jinkoushipin.ule.com/28032129-jinkouchayinliao---------0-1.html" srcid="cateNav_28031995_33" target="_blank">进口茶饮料</a>
											</li>
											<li>
												<a data-uspm="28032130" href="http://jinkoushipin.ule.com/28032130-jinkoutansuanyinliao---------0-1.html" srcid="cateNav_28031995_34" target="_blank">进口碳酸饮料</a>
											</li>
											<li>
												<a data-uspm="28032131" href="http://jinkoushipin.ule.com/28032131-jinkougongnengxingyinliao---------0-1.html" srcid="cateNav_28031995_35" target="_blank">进口功能性饮料</a>
											</li>
											<li>
												<a data-uspm="28032132" href="http://jinkoushipin.ule.com/28032132-jinkoukafeiyinpin---------0-1.html" srcid="cateNav_28031995_36" target="_blank">进口咖啡饮品</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032012" class="subcate-title" href="http://jinkoushipin.ule.com/28032012-jinkoumimian---------0-1.html" srcid="cateNav_28031995_44" target="_blank">进口米/面</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032157" href="http://jinkoushipin.ule.com/28032157-jinkouyimian---------0-1.html" srcid="cateNav_28031995_45" target="_blank">进口意面</a>
											</li>
											<li>
												<a data-uspm="28032158" href="http://jinkoushipin.ule.com/28032158-jinkousushi---------0-1.html" srcid="cateNav_28031995_46" target="_blank">进口速食</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032016" class="subcate-title" href="http://jinkoushipin.ule.com/28032016-jinkouguantou---------0-1.html" srcid="cateNav_28031995_50" target="_blank">进口罐头</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032170" href="http://jinkoushipin.ule.com/28032170-jinkouyuguantou---------0-1.html" srcid="cateNav_28031995_51" target="_blank">进口鱼罐头</a>
											</li>
											<li>
												<a data-uspm="28032172" href="http://jinkoushipin.ule.com/28032172-jinkourouguantou---------0-1.html" srcid="cateNav_28031995_52" target="_blank">进口肉罐头</a>
											</li>
											<li>
												<a data-uspm="28032173" href="http://jinkoushipin.ule.com/28032173-jinkoushuiguoguantou---------0-1.html" srcid="cateNav_28031995_53" target="_blank">进口水果罐头</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28031996" class="subcate-title" href="http://jinkoushipin.ule.com/28031996-jinkouruzhipin---------0-1.html" srcid="cateNav_28031995_1" target="_blank">进口乳制品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032022" href="http://jinkoushipin.ule.com/28032022-jinkouniunai---------0-1.html" srcid="cateNav_28031995_2" target="_blank">进口牛奶</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032000" class="subcate-title" href="http://jinkoushipin.ule.com/28032000-jinkoutangguoqiaokeli---------0-1.html" srcid="cateNav_28031995_8" target="_blank">进口糖果/巧克力</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032040" href="http://jinkoushipin.ule.com/28032040-jinkouqiaokeli---------0-1.html" srcid="cateNav_28031995_9" target="_blank">进口巧克力</a>
											</li>
											<li>
												<a data-uspm="28032041" href="http://jinkoushipin.ule.com/28032041-jinkoutangguo---------0-1.html" srcid="cateNav_28031995_10" target="_blank">进口糖果</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032003" class="subcate-title" href="http://jinkoushipin.ule.com/28032003-jinkoushiyongyou---------0-1.html" srcid="cateNav_28031995_15" target="_blank">进口食用油</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032076" href="http://jinkoushipin.ule.com/28032076-jinkouganlanyou---------0-1.html" srcid="cateNav_28031995_16" target="_blank">进口橄榄油</a>
											</li>
											<li>
												<a data-uspm="28032078" href="http://jinkoushipin.ule.com/28032078-jinkoushiyongyou---------0-1.html" srcid="cateNav_28031995_17" target="_blank">进口食用油</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032006" class="subcate-title" href="http://jinkoushipin.ule.com/28032006-jinkouchongyinkafeicha---------0-1.html" srcid="cateNav_28031995_23" target="_blank">进口冲饮咖啡/茶</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032108" href="http://jinkoushipin.ule.com/28032108-jinkouyangshengcha---------0-1.html" srcid="cateNav_28031995_24" target="_blank">进口养生茶</a>
											</li>
											<li>
												<a data-uspm="28032109" href="http://jinkoushipin.ule.com/28032109-jinkouhongcha---------0-1.html" srcid="cateNav_28031995_25" target="_blank">进口红茶</a>
											</li>
											<li>
												<a data-uspm="28032112" href="http://jinkoushipin.ule.com/28032112-jinkouhuaguocha---------0-1.html" srcid="cateNav_28031995_26" target="_blank">进口花果茶</a>
											</li>
											<li>
												<a data-uspm="28032114" href="http://jinkoushipin.ule.com/28032114-jinkoulucha---------0-1.html" srcid="cateNav_28031995_27" target="_blank">进口绿茶</a>
											</li>
											<li>
												<a data-uspm="28032116" href="http://jinkoushipin.ule.com/28032116-jinkousurongkafei---------0-1.html" srcid="cateNav_28031995_28" target="_blank">进口速溶咖啡</a>
											</li>
											<li>
												<a data-uspm="28032117" href="http://jinkoushipin.ule.com/28032117-jinkouhongbeikafei---------0-1.html" srcid="cateNav_28031995_29" target="_blank">进口烘焙咖啡</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032010" class="subcate-title" href="http://jinkoushipin.ule.com/28032010-jinkouxiuxianlingshi---------0-1.html" srcid="cateNav_28031995_37" target="_blank">进口休闲零食</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032137" href="http://jinkoushipin.ule.com/28032137-jinkoupenghua---------0-1.html" srcid="cateNav_28031995_38" target="_blank">进口膨化</a>
											</li>
											<li>
												<a data-uspm="28032140" href="http://jinkoushipin.ule.com/28032140-jinkoushupian---------0-1.html" srcid="cateNav_28031995_39" target="_blank">进口薯片</a>
											</li>
											<li>
												<a data-uspm="28032142" href="http://jinkoushipin.ule.com/28032142-jinkouhaichanpin---------0-1.html" srcid="cateNav_28031995_40" target="_blank">进口海产品</a>
											</li>
											<li>
												<a data-uspm="28032143" href="http://jinkoushipin.ule.com/28032143-jinkouguodongbuding---------0-1.html" srcid="cateNav_28031995_41" target="_blank">进口果冻/布丁</a>
											</li>
											<li>
												<a data-uspm="28032145" href="http://jinkoushipin.ule.com/28032145-jinkourouganrousong---------0-1.html" srcid="cateNav_28031995_42" target="_blank">进口肉干、肉松</a>
											</li>
											<li>
												<a data-uspm="28032146" href="http://jinkoushipin.ule.com/28032146-jinkousushi---------0-1.html" srcid="cateNav_28031995_43" target="_blank">进口素食</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032014" class="subcate-title" href="http://jinkoushipin.ule.com/28032014-jinkoudiaoweipin---------0-1.html" srcid="cateNav_28031995_47" target="_blank">进口调味品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032159" href="http://jinkoushipin.ule.com/28032159-jinkoudiaoweiliao---------0-1.html" srcid="cateNav_28031995_48" target="_blank">进口调味料</a>
											</li>
											<li>
												<a data-uspm="28032160" href="http://jinkoushipin.ule.com/28032160-jinkoudiaoweijiang---------0-1.html" srcid="cateNav_28031995_49" target="_blank">进口调味酱</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032018" class="subcate-title" href="http://jinkoushipin.ule.com/28032018-jinkoujiulei---------0-1.html" srcid="cateNav_28031995_54" target="_blank">进口酒类</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032180" href="http://jinkoushipin.ule.com/28032180-jinkouputaojiu---------0-1.html" srcid="cateNav_28031995_55" target="_blank">进口葡萄酒</a>
											</li>
											<li>
												<a data-uspm="28032182" href="http://jinkoushipin.ule.com/28032182-jinkoupijiu---------0-1.html" srcid="cateNav_28031995_56" target="_blank">进口啤酒</a>
											</li>
											<li>
												<a data-uspm="28032183" href="http://jinkoushipin.ule.com/28032183-jinkouliejiu---------0-1.html" srcid="cateNav_28031995_57" target="_blank">进口烈酒</a>
											</li>
											<li>
												<a data-uspm="28032184" href="http://jinkoushipin.ule.com/28032184-qitajinkoujiu---------0-1.html" srcid="cateNav_28031995_58" target="_blank">其他进口酒</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" style="display: none;" class="">
									<a class="z99" data-uspm="z99" href="http://www.ule.com/ulenp/greenfood.html" srcid="99_channel_home"><i></i>绿色食品<ins class="new"></ins></a>
								</dt>
						<dt data-uspm="100014" morekey="保健品" style="display: none;" class="">
									<a class="z27" data-uspm="z28032161" href="http://baojianpin.ule.com/" srcid="28032161_channel_home"><i></i>保健品</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032162" class="subcate-title" href="http://baojianpin.ule.com/28032162-zengqiangmianyilikangpilao---------0-1.html" srcid="cateNav_28032161_1" target="_blank">增强免疫力/抗疲劳</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032458" href="http://baojianpin.ule.com/28032458-canleizhipin---------0-1.html" srcid="cateNav_28032161_2" target="_blank">参类制品</a>
											</li>
											<li>
												<a data-uspm="28032461" href="http://baojianpin.ule.com/28032461-yangyanrunhou---------0-1.html" srcid="cateNav_28032161_3" target="_blank">养眼润喉</a>
											</li>
											<li>
												<a data-uspm="28032509" href="http://baojianpin.ule.com/28032509-anjisuandasuanyou---------0-1.html" srcid="cateNav_28032161_4" target="_blank">氨基酸/大蒜油</a>
											</li>
											<li>
												<a data-uspm="28032510" href="http://baojianpin.ule.com/28032510-baojianjiu---------0-1.html" srcid="cateNav_28032161_5" target="_blank">保健酒</a>
											</li>
											<li>
												<a data-uspm="28032514" href="http://baojianpin.ule.com/28032514-luoxuanzao---------0-1.html" srcid="cateNav_28032161_6" target="_blank">螺旋藻</a>
											</li>
											<li>
												<a data-uspm="28032515" href="http://baojianpin.ule.com/28032515-ruqingdanbaizhifen---------0-1.html" srcid="cateNav_28032161_7" target="_blank">乳清蛋白质粉</a>
											</li>
											<li>
												<a data-uspm="28032516" href="http://baojianpin.ule.com/28032516-baojiancha---------0-1.html" srcid="cateNav_28032161_8" target="_blank">保健茶</a>
											</li>
											<li>
												<a data-uspm="28032518" href="http://baojianpin.ule.com/28032518-niuchurudanbaizhifen---------0-1.html" srcid="cateNav_28032161_9" target="_blank">牛初乳/蛋白质粉</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032517" class="subcate-title" href="http://baojianpin.ule.com/28032517-jianfeishoushen---------0-1.html" srcid="cateNav_28032161_17" target="_blank">减肥瘦身</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032519" href="http://baojianpin.ule.com/28032519-jianfeicha---------0-1.html" srcid="cateNav_28032161_18" target="_blank">减肥茶</a>
											</li>
											<li>
												<a data-uspm="28032520" href="http://baojianpin.ule.com/28032520-pingguocusuan---------0-1.html" srcid="cateNav_28032161_19" target="_blank">苹果醋/酸</a>
											</li>
											<li>
												<a data-uspm="28032522" href="http://baojianpin.ule.com/28032522-xiushenkafeidaicanfen---------0-1.html" srcid="cateNav_28032161_20" target="_blank">修身咖啡/代餐粉</a>
											</li>
											<li>
												<a data-uspm="28032525" href="http://baojianpin.ule.com/28032525-zuoxuanroujian---------0-1.html" srcid="cateNav_28032161_21" target="_blank">左旋肉碱</a>
											</li>
											<li>
												<a data-uspm="28032528" href="http://baojianpin.ule.com/28032528-ranzhisuxianti---------0-1.html" srcid="cateNav_28032161_22" target="_blank">燃脂素/纤体</a>
											</li>
											<li>
												<a data-uspm="28032530" href="http://baojianpin.ule.com/28032530-diaojiechangwei---------0-1.html" srcid="cateNav_28032161_23" target="_blank">调节肠胃</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032537" class="subcate-title" href="http://baojianpin.ule.com/28032537-diaojiexueyaxuezhixuetang---------0-1.html" srcid="cateNav_28032161_39" target="_blank">调节血压/血脂/血糖</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032540" href="http://baojianpin.ule.com/28032540-yinxing---------0-1.html" srcid="cateNav_28032161_40" target="_blank">银杏</a>
											</li>
											<li>
												<a data-uspm="28032611" href="http://baojianpin.ule.com/28032611-nadou---------0-1.html" srcid="cateNav_28032161_41" target="_blank">纳豆</a>
											</li>
											<li>
												<a data-uspm="28032613" href="http://baojianpin.ule.com/28032613-luanlinzhi---------0-1.html" srcid="cateNav_28032161_42" target="_blank">卵磷脂</a>
											</li>
											<li>
												<a data-uspm="28032619" href="http://baojianpin.ule.com/28032619-diaojiexuezhi---------0-1.html" srcid="cateNav_28032161_43" target="_blank">调节血脂</a>
											</li>
											<li>
												<a data-uspm="28032622" href="http://baojianpin.ule.com/28032622-diaojiexuetang---------0-1.html" srcid="cateNav_28032161_44" target="_blank">调节血糖</a>
											</li>
											<li>
												<a data-uspm="28032625" href="http://baojianpin.ule.com/28032625-yuyou---------0-1.html" srcid="cateNav_28032161_45" target="_blank">鱼油</a>
											</li>
											<li>
												<a data-uspm="28032629" href="http://baojianpin.ule.com/28032629-fengjiao---------0-1.html" srcid="cateNav_28032161_46" target="_blank">蜂胶</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032468" class="subcate-title" href="http://baojianpin.ule.com/28032468-meirongyangyan---------0-1.html" srcid="cateNav_28032161_10" target="_blank">美容养颜</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032490" href="http://baojianpin.ule.com/28032490-yanwoyinpinfumeiyin---------0-1.html" srcid="cateNav_28032161_11" target="_blank">燕窝饮品/馥莓饮</a>
											</li>
											<li>
												<a data-uspm="28032497" href="http://baojianpin.ule.com/28032497-zhenzhufen---------0-1.html" srcid="cateNav_28032161_12" target="_blank">珍珠粉</a>
											</li>
											<li>
												<a data-uspm="28032500" href="http://baojianpin.ule.com/28032500-jiaoyuandanbai---------0-1.html" srcid="cateNav_28032161_13" target="_blank">胶原蛋白</a>
											</li>
											<li>
												<a data-uspm="28032505" href="http://baojianpin.ule.com/28032505-buxuebuqi---------0-1.html" srcid="cateNav_28032161_14" target="_blank">补血补气</a>
											</li>
											<li>
												<a data-uspm="28032508" href="http://baojianpin.ule.com/28032508-taipansu---------0-1.html" srcid="cateNav_28032161_15" target="_blank">胎盘素</a>
											</li>
											<li>
												<a data-uspm="28032513" href="http://baojianpin.ule.com/28032513-koufumeirongyinpin---------0-1.html" srcid="cateNav_28032161_16" target="_blank">口服美容饮品</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032533" class="subcate-title" href="http://baojianpin.ule.com/28032533-nannuxingdiaoyang---------0-1.html" srcid="cateNav_28032161_24" target="_blank">男/女性调养</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032535" href="http://baojianpin.ule.com/28032535-qianliexianyanghu---------0-1.html" srcid="cateNav_28032161_25" target="_blank">前列腺养护</a>
											</li>
											<li>
												<a data-uspm="28032542" href="http://baojianpin.ule.com/28032542-nanxingnuxingyingyangsu---------0-1.html" srcid="cateNav_28032161_26" target="_blank">男性/女性营养素</a>
											</li>
											<li>
												<a data-uspm="28032545" href="http://baojianpin.ule.com/28032545-bushenqiangshen---------0-1.html" srcid="cateNav_28032161_27" target="_blank">补肾强身</a>
											</li>
											<li>
												<a data-uspm="28032547" href="http://baojianpin.ule.com/28032547-huganjiejiujieyan---------0-1.html" srcid="cateNav_28032161_28" target="_blank">护肝解酒/戒烟</a>
											</li>
											<li>
												<a data-uspm="28032556" href="http://baojianpin.ule.com/28032556-meitifengxiong---------0-1.html" srcid="cateNav_28032161_29" target="_blank">美体丰胸</a>
											</li>
											<li>
												<a data-uspm="28032565" href="http://baojianpin.ule.com/28032565-neifenmidiaojie---------0-1.html" srcid="cateNav_28032161_30" target="_blank">内分泌调节</a>
											</li>
											<li>
												<a data-uspm="28032569" href="http://baojianpin.ule.com/28032569-fangfusheyanhuanshuailaokangzhongliu---------0-1.html" srcid="cateNav_28032161_31" target="_blank">防辐射/延缓衰老/抗肿瘤</a>
											</li>
											<li>
												<a data-uspm="28032576" href="http://baojianpin.ule.com/28032576-gezhongweishengsu---------0-1.html" srcid="cateNav_28032161_32" target="_blank">各种维生素</a>
											</li>
											<li>
												<a data-uspm="28032586" href="http://baojianpin.ule.com/28032586-gaizhiji---------0-1.html" srcid="cateNav_28032161_33" target="_blank">钙质剂</a>
											</li>
											<li>
												<a data-uspm="28032598" href="http://baojianpin.ule.com/28032598-gugeqiangjian---------0-1.html" srcid="cateNav_28032161_34" target="_blank">骨骼强健</a>
											</li>
											<li>
												<a data-uspm="28032602" href="http://baojianpin.ule.com/28032602-meilihufa---------0-1.html" srcid="cateNav_28032161_35" target="_blank">魅力护发</a>
											</li>
											<li>
												<a data-uspm="28032604" href="http://baojianpin.ule.com/28032604-huyanrunhou---------0-1.html" srcid="cateNav_28032161_36" target="_blank">护眼润喉</a>
											</li>
											<li>
												<a data-uspm="28032605" href="http://baojianpin.ule.com/28032605-gaishanshuimian---------0-1.html" srcid="cateNav_28032161_37" target="_blank">改善睡眠</a>
											</li>
											<li>
												<a data-uspm="28032608" href="http://baojianpin.ule.com/28032608-dadouyihuangtong---------0-1.html" srcid="cateNav_28032161_38" target="_blank">大豆异黄酮</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032645" class="subcate-title" href="http://baojianpin.ule.com/28032645-ertongyingyang---------0-1.html" srcid="cateNav_28032161_47" target="_blank">儿童营养</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032647" href="http://baojianpin.ule.com/28032647-zhuzhangyingyangsu---------0-1.html" srcid="cateNav_28032161_48" target="_blank">助长营养素</a>
											</li>
											<li>
												<a data-uspm="28032649" href="http://baojianpin.ule.com/28032649-jiannaoyizhi---------0-1.html" srcid="cateNav_28032161_49" target="_blank">健脑益智</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="家居" class="">
									<a class="z12" data-uspm="z28032585" href="http://jiaju.ule.com/" srcid="28032585_channel_home"><i></i>家居生活</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28032585">
								<p>
									<a href="http://jiaju.ule.com/" target="_blank" class="more" data-uspm="28032585m">家居</a>
									<a href="http://store.ule.com/store/7296.html" target="_blank" data-uspm="28032585t1">家纺大促 全民疯抢</a>
									<a href="http://store.ule.com/store/7539.html" target="_blank" data-uspm="28032585t2">毕加索收纳 全场满99立减10</a>
									<a href="http://store.ule.com/store/7101.html" target="_blank" data-uspm="28032585t3">美臣家居 全场满99送杯刷</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_C28032644_O0_P1.102.%E5%A4%A9%E5%A0%82%E4%BC%9E.1&amp;srcid=searchkeywords_%E5%A4%A9%E5%A0%82%E4%BC%9E&amp;keywords=%E5%A4%A9%E5%A0%82%E4%BC%9E" style="" target="_blank">天堂伞</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/10947.html?uspm=1.1.103_O99_P1.1036.4.1" style="" target="_blank">科莎家纺</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/7972.html?uspm=1.1.103_O99_P1.1036.16.1" style="" target="_blank">妙洁</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/7365.html?uspm=1.1.103_O99_P1.1036.16.1" style="" target="_blank">洁玉</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6745.html?uspm=1.1.103_O99_P1.1036.8.1" style="" target="_blank">逸轩家纺</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032671" class="subcate-title" href="http://jiaju.ule.com/28032671-jiafangriyong---------0-1.html" srcid="cateNav_28032585_14" target="_blank">家纺日用</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032672" href="http://jiaju.ule.com/28032672-maojin---------0-1.html" srcid="cateNav_28032585_15" target="_blank">毛巾</a>
											</li>
											<li>
												<a data-uspm="28032673" href="http://jiaju.ule.com/28032673-ditandidian---------0-1.html" srcid="cateNav_28032585_16" target="_blank">地毯/地垫</a>
											</li>
											<li>
												<a data-uspm="28032674" href="http://jiaju.ule.com/28032674-zuodiankaodianshafadian---------0-1.html" srcid="cateNav_28032585_17" target="_blank">座垫/靠垫/沙发垫</a>
											</li>
											<li>
												<a data-uspm="28032676" href="http://jiaju.ule.com/28032676-jujiaxiejiajufu---------0-1.html" srcid="cateNav_28032585_18" target="_blank">居家鞋/家居服</a>
											</li>
											<li>
												<a data-uspm="28032683" href="http://jiaju.ule.com/28032683-yuyiyujin---------0-1.html" srcid="cateNav_28032585_19" target="_blank">浴衣/浴巾</a>
											</li>
											<li>
												<a data-uspm="28032685" href="http://jiaju.ule.com/28032685-weiquntaibu---------0-1.html" srcid="cateNav_28032585_20" target="_blank">围裙/台布</a>
											</li>
											<li>
												<a data-uspm="28032691" href="http://jiaju.ule.com/28032691-diannaozhuo---------0-1.html" srcid="cateNav_28032585_21" target="_blank">电脑桌</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032759" class="subcate-title" href="http://jiaju.ule.com/28032759-shounaxishai---------0-1.html" srcid="cateNav_28032585_33" target="_blank">收纳洗晒</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032760" href="http://jiaju.ule.com/28032760-shounadai---------0-1.html" srcid="cateNav_28032585_34" target="_blank">收纳袋</a>
											</li>
											<li>
												<a data-uspm="28032761" href="http://jiaju.ule.com/28032761-shounacengjia---------0-1.html" srcid="cateNav_28032585_35" target="_blank">收纳层架</a>
											</li>
											<li>
												<a data-uspm="28032762" href="http://jiaju.ule.com/28032762-yasuodaibeng---------0-1.html" srcid="cateNav_28032585_36" target="_blank">压缩袋/泵</a>
											</li>
											<li>
												<a data-uspm="28032763" href="http://jiaju.ule.com/28032763-liangyijiaxishaipeijian---------0-1.html" srcid="cateNav_28032585_37" target="_blank">晾衣架/洗晒配件</a>
											</li>
											<li>
												<a data-uspm="28032765" href="http://jiaju.ule.com/28032765-shounahexiang---------0-1.html" srcid="cateNav_28032585_38" target="_blank">收纳盒/箱</a>
											</li>
											<li>
												<a data-uspm="28032770" href="http://jiaju.ule.com/28032770-yizhaofanghuzhao---------0-1.html" srcid="cateNav_28032585_39" target="_blank">衣罩/防护罩</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032861" class="subcate-title" href="http://jiaju.ule.com/28032861-jiazhuangjiancai---------0-1.html" srcid="cateNav_28032585_45" target="_blank">家装建材</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032864" href="http://jiaju.ule.com/28032864-diban---------0-1.html" srcid="cateNav_28032585_46" target="_blank">地板</a>
											</li>
											<li>
												<a data-uspm="28032873" href="http://jiaju.ule.com/28032873-youqibizhi---------0-1.html" srcid="cateNav_28032585_47" target="_blank">油漆/壁纸</a>
											</li>
											<li>
												<a data-uspm="28032875" href="http://jiaju.ule.com/28032875-diangongdianliao---------0-1.html" srcid="cateNav_28032585_48" target="_blank">电工电料</a>
											</li>
											<li>
												<a data-uspm="28032877" href="http://jiaju.ule.com/28032877-qitajiancai---------0-1.html" srcid="cateNav_28032585_49" target="_blank">其他建材</a>
											</li>
											<li>
												<a data-uspm="28032882" href="http://jiaju.ule.com/28032882-zhuangxiushigong---------0-1.html" srcid="cateNav_28032585_50" target="_blank">装修施工</a>
											</li>
											<li>
												<a data-uspm="28032886" href="http://jiaju.ule.com/28032886-bangongjiaju---------0-1.html" srcid="cateNav_28032585_51" target="_blank">办公家具</a>
											</li>
											<li>
												<a data-uspm="28033252" href="http://jiaju.ule.com/28033252-dengjufujian---------0-1.html" srcid="cateNav_28032585_52" target="_blank">灯具附件</a>
											</li>
											<li>
												<a data-uspm="28033255" href="http://jiaju.ule.com/28033255-shishangdengju---------0-1.html" srcid="cateNav_28032585_53" target="_blank">时尚灯具</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032591" class="subcate-title" href="http://jiaju.ule.com/28032591-jiajuyongpin---------0-1.html" srcid="cateNav_28032585_1" target="_blank">家居用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032595" href="http://jiaju.ule.com/28032595-shishangjiaju---------0-1.html" srcid="cateNav_28032585_2" target="_blank">时尚家具</a>
											</li>
											<li>
												<a data-uspm="28032640" href="http://jiaju.ule.com/28032640-shishangjiashi---------0-1.html" srcid="cateNav_28032585_3" target="_blank">时尚家饰</a>
											</li>
											<li>
												<a data-uspm="28032644" href="http://jiaju.ule.com/28032644-yujuyangsan---------0-1.html" srcid="cateNav_28032585_4" target="_blank">雨具/阳伞</a>
											</li>
											<li>
												<a data-uspm="28032648" href="http://jiaju.ule.com/28032648-taiguazhong---------0-1.html" srcid="cateNav_28032585_5" target="_blank">台/挂钟</a>
											</li>
											<li>
												<a data-uspm="28032653" href="http://jiaju.ule.com/28032653-tanjinghua---------0-1.html" srcid="cateNav_28032585_6" target="_blank">炭净化</a>
											</li>
											<li>
												<a data-uspm="28032655" href="http://jiaju.ule.com/28032655-baojiananmo---------0-1.html" srcid="cateNav_28032585_7" target="_blank">保健/按摩</a>
											</li>
											<li>
												<a data-uspm="28032658" href="http://jiaju.ule.com/28032658-kouzhao---------0-1.html" srcid="cateNav_28032585_8" target="_blank">口罩</a>
											</li>
											<li>
												<a data-uspm="28032664" href="http://jiaju.ule.com/28032664-baonuanjiangwen---------0-1.html" srcid="cateNav_28032585_9" target="_blank">保暖/降温</a>
											</li>
											<li>
												<a data-uspm="28032665" href="http://jiaju.ule.com/28032665-xiedianxiepeijian---------0-1.html" srcid="cateNav_28032585_10" target="_blank">鞋垫/鞋配件</a>
											</li>
											<li>
												<a data-uspm="28033253" href="http://jiaju.ule.com/28033253-rongxian---------0-1.html" srcid="cateNav_28032585_11" target="_blank">绒线</a>
											</li>
											<li>
												<a data-uspm="28033254" href="http://jiaju.ule.com/28033254-xueshengwenju---------0-1.html" srcid="cateNav_28032585_12" target="_blank">学生文具</a>
											</li>
											<li>
												<a data-uspm="28033256" href="http://jiaju.ule.com/28033256-chongwushenghuo---------0-1.html" srcid="cateNav_28032585_13" target="_blank">宠物生活</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032699" class="subcate-title" href="http://jiaju.ule.com/28032699-chuangshangyongpin---------0-1.html" srcid="cateNav_28032585_22" target="_blank">床上用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032700" href="http://jiaju.ule.com/28032700-chuangpintaojian---------0-1.html" srcid="cateNav_28032585_23" target="_blank">床品套件</a>
											</li>
											<li>
												<a data-uspm="28032701" href="http://jiaju.ule.com/28032701-tanzimaojintandianretan---------0-1.html" srcid="cateNav_28032585_24" target="_blank">毯子/毛巾毯/电热毯</a>
											</li>
											<li>
												<a data-uspm="28032712" href="http://jiaju.ule.com/28032712-dongbei---------0-1.html" srcid="cateNav_28032585_25" target="_blank">冬被</a>
											</li>
											<li>
												<a data-uspm="28032716" href="http://jiaju.ule.com/28032716-chunqiubei---------0-1.html" srcid="cateNav_28032585_26" target="_blank">春秋被</a>
											</li>
											<li>
												<a data-uspm="28032720" href="http://jiaju.ule.com/28032720-xialiangbei---------0-1.html" srcid="cateNav_28032585_27" target="_blank">夏凉被</a>
											</li>
											<li>
												<a data-uspm="28032724" href="http://jiaju.ule.com/28032724-chuangdanbeitao---------0-1.html" srcid="cateNav_28032585_28" target="_blank">床单被套</a>
											</li>
											<li>
												<a data-uspm="28032730" href="http://jiaju.ule.com/28032730-zhentouzhenxin---------0-1.html" srcid="cateNav_28032585_29" target="_blank">枕头/枕芯</a>
											</li>
											<li>
												<a data-uspm="28032732" href="http://jiaju.ule.com/28032732-liangxiliangzhen---------0-1.html" srcid="cateNav_28032585_30" target="_blank">凉席/凉枕</a>
											</li>
											<li>
												<a data-uspm="28032734" href="http://jiaju.ule.com/28032734-wenzhang---------0-1.html" srcid="cateNav_28032585_31" target="_blank">蚊帐</a>
											</li>
											<li>
												<a data-uspm="28032736" href="http://jiaju.ule.com/28032736-chuangdianchuangru---------0-1.html" srcid="cateNav_28032585_32" target="_blank">床垫/床褥</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032774" class="subcate-title" href="http://jiaju.ule.com/28032774-wujinzhuanghuang---------0-1.html" srcid="cateNav_28032585_40" target="_blank">五金装潢</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032777" href="http://jiaju.ule.com/28032777-shoudonggongju---------0-1.html" srcid="cateNav_28032585_41" target="_blank">手动工具</a>
											</li>
											<li>
												<a data-uspm="28032779" href="http://jiaju.ule.com/28032779-linyuhuasa---------0-1.html" srcid="cateNav_28032585_42" target="_blank">淋浴花洒</a>
											</li>
											<li>
												<a data-uspm="28032786" href="http://jiaju.ule.com/28032786-chuweiwujin---------0-1.html" srcid="cateNav_28032585_43" target="_blank">厨卫五金</a>
											</li>
											<li>
												<a data-uspm="28032791" href="http://jiaju.ule.com/28032791-kaiguanchazuo---------0-1.html" srcid="cateNav_28032585_44" target="_blank">开关/插座</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="厨卫" class="">
									<a class="z20" data-uspm="z28031902" href="http://chuwei.ule.com/" srcid="28031902_channel_home"><i></i>厨卫清洁</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.121_L1645550_T164555001_S10206_M800111119.102.%E7%BB%B4%E8%BE%BE.1&amp;srcid=searchkeywords_%E7%BB%B4%E8%BE%BE&amp;storeId=10206&amp;keywords=%E7%BB%B4%E8%BE%BE" style="" target="_blank">维达</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/8695.html?uspm=1.1.103_C28032830_O0_P1.1036.70.1" style="" target="_blank">超能</a>
											</li>
											<li>
												<a href="http://search.ule.com/search.do?uspm=1.1.103_C28032831_O0_P1.102.%E5%A5%A5%E5%A6%99.1&amp;srcid=searchkeywords_%E5%A5%A5%E5%A6%99&amp;keywords=%E5%A5%A5%E5%A6%99" style="" target="_blank">奥妙</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/7028.html?uspm=1.1.103_C28031952_O0_P1.1036.106.1" style="" target="_blank">利临</a>
											</li>
											<li>
												<a href="http://chuwei.ule.com/28032011-shenghuoyongzhi-%E6%B8%85%E9%A3%8E--------0-1.html?srcid=searchkeywords_%E6%B8%85%E9%A3%8E&amp;uspm=1.1.103_C28032011_O0_P1.102.%E6%B8%85%E9%A3%8E.1" style="" target="_blank">清风</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031949" class="subcate-title" href="http://chuwei.ule.com/28031949-qingjiegongju---------0-1.html" srcid="cateNav_28031902_10" target="_blank">清洁工具</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031951" href="http://chuwei.ule.com/28031951-baijiebumobuqingjieqiu---------0-1.html" srcid="cateNav_28031902_11" target="_blank">百洁布/抹布/清洁球</a>
											</li>
											<li>
												<a data-uspm="28031952" href="http://chuwei.ule.com/28031952-tuobachentuijipeijian---------0-1.html" srcid="cateNav_28031902_12" target="_blank">拖把尘推及配件</a>
											</li>
											<li>
												<a data-uspm="28031953" href="http://chuwei.ule.com/28031953-qingjieshuaqingjiegunlun---------0-1.html" srcid="cateNav_28031902_13" target="_blank">清洁刷/清洁滚轮</a>
											</li>
											<li>
												<a data-uspm="28031954" href="http://chuwei.ule.com/28031954-hufushoutao---------0-1.html" srcid="cateNav_28031902_14" target="_blank">护肤手套</a>
											</li>
											<li>
												<a data-uspm="28031955" href="http://chuwei.ule.com/28031955-lajitong---------0-1.html" srcid="cateNav_28031902_15" target="_blank">垃圾桶</a>
											</li>
											<li>
												<a data-uspm="28031956" href="http://chuwei.ule.com/28031956-qingjiexiaojian---------0-1.html" srcid="cateNav_28031902_16" target="_blank">清洁小件</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032005" class="subcate-title" href="http://chuwei.ule.com/28032005-guojushuihu---------0-1.html" srcid="cateNav_28031902_22" target="_blank">锅具水壶</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032764" href="http://chuwei.ule.com/28032764-chaoguo---------0-1.html" srcid="cateNav_28031902_23" target="_blank">炒锅</a>
											</li>
											<li>
												<a data-uspm="28032766" href="http://chuwei.ule.com/28032766-yaliguo---------0-1.html" srcid="cateNav_28031902_24" target="_blank">压力锅</a>
											</li>
											<li>
												<a data-uspm="28032769" href="http://chuwei.ule.com/28032769-tangguo---------0-1.html" srcid="cateNav_28031902_25" target="_blank">汤锅</a>
											</li>
											<li>
												<a data-uspm="28032771" href="http://chuwei.ule.com/28032771-zhengguo---------0-1.html" srcid="cateNav_28031902_26" target="_blank">蒸锅</a>
											</li>
											<li>
												<a data-uspm="28032772" href="http://chuwei.ule.com/28032772-jianguopingdiguo---------0-1.html" srcid="cateNav_28031902_27" target="_blank">煎锅/平底锅</a>
											</li>
											<li>
												<a data-uspm="28032773" href="http://chuwei.ule.com/28032773-naiguo---------0-1.html" srcid="cateNav_28031902_28" target="_blank">奶锅</a>
											</li>
											<li>
												<a data-uspm="28032775" href="http://chuwei.ule.com/28032775-taoguo---------0-1.html" srcid="cateNav_28031902_29" target="_blank">套锅</a>
											</li>
											<li>
												<a data-uspm="28032776" href="http://chuwei.ule.com/28032776-shuihu---------0-1.html" srcid="cateNav_28031902_30" target="_blank">水壶</a>
											</li>
											<li>
												<a data-uspm="28032778" href="http://chuwei.ule.com/28032778-guojupeijian---------0-1.html" srcid="cateNav_28031902_31" target="_blank">锅具配件</a>
											</li>
											<li>
												<a data-uspm="28032780" href="http://chuwei.ule.com/28032780-baolei---------0-1.html" srcid="cateNav_28031902_32" target="_blank">煲类</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032011" class="subcate-title" href="http://chuwei.ule.com/28032011-shenghuoyongzhi---------0-1.html" srcid="cateNav_28031902_40" target="_blank">生活用纸</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032797" href="http://chuwei.ule.com/28032797-juanzhipingbanzhi---------0-1.html" srcid="cateNav_28031902_41" target="_blank">卷纸/平板纸</a>
											</li>
											<li>
												<a data-uspm="28032798" href="http://chuwei.ule.com/28032798-hezhuangchouqushimianzhi---------0-1.html" srcid="cateNav_28031902_42" target="_blank">盒装抽取式面纸</a>
											</li>
											<li>
												<a data-uspm="28032799" href="http://chuwei.ule.com/28032799-ruanbaozhuangchouqushimianzhi---------0-1.html" srcid="cateNav_28031902_43" target="_blank">软包装抽取式面纸</a>
											</li>
											<li>
												<a data-uspm="28032800" href="http://chuwei.ule.com/28032800-chufangyongzhi---------0-1.html" srcid="cateNav_28031902_44" target="_blank">厨房用纸</a>
											</li>
											<li>
												<a data-uspm="28032801" href="http://chuwei.ule.com/28032801-shijinzhi---------0-1.html" srcid="cateNav_28031902_45" target="_blank">湿巾纸</a>
											</li>
											<li>
												<a data-uspm="28032802" href="http://chuwei.ule.com/28032802-shoupazhi---------0-1.html" srcid="cateNav_28031902_46" target="_blank">手帕纸</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032015" class="subcate-title" href="http://chuwei.ule.com/28032015-shuijujiuju---------0-1.html" srcid="cateNav_28031902_55" target="_blank">水具酒具</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032814" href="http://chuwei.ule.com/28032814-baowenbeihu---------0-1.html" srcid="cateNav_28031902_56" target="_blank">保温杯/壶</a>
											</li>
											<li>
												<a data-uspm="28032815" href="http://chuwei.ule.com/28032815-shuibeihu---------0-1.html" srcid="cateNav_28031902_57" target="_blank">水杯/壶</a>
											</li>
											<li>
												<a data-uspm="28032816" href="http://chuwei.ule.com/28032816-taozhuangchajupeijian---------0-1.html" srcid="cateNav_28031902_58" target="_blank">套装茶具/配件</a>
											</li>
											<li>
												<a data-uspm="28032817" href="http://chuwei.ule.com/28032817-jiujujiubeikafeiqiju---------0-1.html" srcid="cateNav_28031902_59" target="_blank">酒具/酒杯/咖啡器具</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28031903" class="subcate-title" href="http://chuwei.ule.com/28031903-qingjieji---------0-1.html" srcid="cateNav_28031902_1" target="_blank">清洁剂</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031932" href="http://chuwei.ule.com/28031932-xishouye---------0-1.html" srcid="cateNav_28031902_2" target="_blank">洗手液</a>
											</li>
											<li>
												<a data-uspm="28032830" href="http://chuwei.ule.com/28032830-xiyizaofen---------0-1.html" srcid="cateNav_28031902_3" target="_blank">洗衣皂/粉</a>
											</li>
											<li>
												<a data-uspm="28032831" href="http://chuwei.ule.com/28032831-xiyiye---------0-1.html" srcid="cateNav_28031902_4" target="_blank">洗衣液</a>
											</li>
											<li>
												<a data-uspm="28032832" href="http://chuwei.ule.com/28032832-yiwuhuli---------0-1.html" srcid="cateNav_28031902_5" target="_blank">衣物护理</a>
											</li>
											<li>
												<a data-uspm="28032835" href="http://chuwei.ule.com/28032835-chufangqingjieji---------0-1.html" srcid="cateNav_28031902_6" target="_blank">厨房清洁剂</a>
											</li>
											<li>
												<a data-uspm="28032839" href="http://chuwei.ule.com/28032839-quchongyongpin---------0-1.html" srcid="cateNav_28031902_7" target="_blank">驱虫用品</a>
											</li>
											<li>
												<a data-uspm="28032840" href="http://chuwei.ule.com/28032840-jushiqingjieji---------0-1.html" srcid="cateNav_28031902_8" target="_blank">居室清洁剂</a>
											</li>
											<li>
												<a data-uspm="28032843" href="http://chuwei.ule.com/28032843-yushiqingjieji---------0-1.html" srcid="cateNav_28031902_9" target="_blank">浴室清洁剂</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28031959" class="subcate-title" href="http://chuwei.ule.com/28031959-yicixingyongpin---------0-1.html" srcid="cateNav_28031902_17" target="_blank">一次性用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28031971" href="http://chuwei.ule.com/28031971-lajidai---------0-1.html" srcid="cateNav_28031902_18" target="_blank">垃圾袋</a>
											</li>
											<li>
												<a data-uspm="28031973" href="http://chuwei.ule.com/28031973-yicixingcanju---------0-1.html" srcid="cateNav_28031902_19" target="_blank">一次性餐具</a>
											</li>
											<li>
												<a data-uspm="28031977" href="http://chuwei.ule.com/28031977-yicixingxietaoshoutaozhuobu---------0-1.html" srcid="cateNav_28031902_20" target="_blank">一次性鞋套/手套/桌布</a>
											</li>
											<li>
												<a data-uspm="28031985" href="http://chuwei.ule.com/28031985-baoxianmodai---------0-1.html" srcid="cateNav_28031902_21" target="_blank">保鲜膜/袋</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032009" class="subcate-title" href="http://chuwei.ule.com/28032009-jingmeicanju---------0-1.html" srcid="cateNav_28031902_33" target="_blank">精美餐具</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032788" href="http://chuwei.ule.com/28032788-kuaishaodaocha---------0-1.html" srcid="cateNav_28031902_34" target="_blank">筷勺/刀叉</a>
											</li>
											<li>
												<a data-uspm="28032789" href="http://chuwei.ule.com/28032789-wanpendie---------0-1.html" srcid="cateNav_28031902_35" target="_blank">碗/盆/碟</a>
											</li>
											<li>
												<a data-uspm="28032790" href="http://chuwei.ule.com/28032790-taozhuangcanju---------0-1.html" srcid="cateNav_28031902_36" target="_blank">套装餐具</a>
											</li>
											<li>
												<a data-uspm="28032792" href="http://chuwei.ule.com/28032792-baowenfanhe---------0-1.html" srcid="cateNav_28031902_37" target="_blank">保温饭盒</a>
											</li>
											<li>
												<a data-uspm="28032793" href="http://chuwei.ule.com/28032793-canzhuoxiaowu---------0-1.html" srcid="cateNav_28031902_38" target="_blank">餐桌小物</a>
											</li>
											<li>
												<a data-uspm="28032796" href="http://chuwei.ule.com/28032796-baoxianrongqi---------0-1.html" srcid="cateNav_28031902_39" target="_blank">保鲜容器</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032013" class="subcate-title" href="http://chuwei.ule.com/28032013-chufangyongju---------0-1.html" srcid="cateNav_28031902_47" target="_blank">厨房用具</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032804" href="http://chuwei.ule.com/28032804-daojian---------0-1.html" srcid="cateNav_28031902_48" target="_blank">刀/剪</a>
											</li>
											<li>
												<a data-uspm="28032805" href="http://chuwei.ule.com/28032805-diaoweipingguan---------0-1.html" srcid="cateNav_28031902_49" target="_blank">调味瓶/罐</a>
											</li>
											<li>
												<a data-uspm="28032806" href="http://chuwei.ule.com/28032806-chufangchuwu---------0-1.html" srcid="cateNav_28031902_50" target="_blank">厨房储物</a>
											</li>
											<li>
												<a data-uspm="28032807" href="http://chuwei.ule.com/28032807-pengrengongju---------0-1.html" srcid="cateNav_28031902_51" target="_blank">烹饪工具</a>
											</li>
											<li>
												<a data-uspm="28032808" href="http://chuwei.ule.com/28032808-caibanzhenban---------0-1.html" srcid="cateNav_28031902_52" target="_blank">菜板砧板</a>
											</li>
											<li>
												<a data-uspm="28032809" href="http://chuwei.ule.com/28032809-yicixingyongpin---------0-1.html" srcid="cateNav_28031902_53" target="_blank">一次性用品</a>
											</li>
											<li>
												<a data-uspm="28032810" href="http://chuwei.ule.com/28032810-qita---------0-1.html" srcid="cateNav_28031902_54" target="_blank">其他</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032017" class="subcate-title" href="http://chuwei.ule.com/28032017-yushiyongpin---------0-1.html" srcid="cateNav_28031902_60" target="_blank">浴室用品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032820" href="http://chuwei.ule.com/28032820-gualianzhuangshi---------0-1.html" srcid="cateNav_28031902_61" target="_blank">挂帘/装饰</a>
											</li>
											<li>
												<a data-uspm="28032822" href="http://chuwei.ule.com/28032822-yushidian---------0-1.html" srcid="cateNav_28031902_62" target="_blank">浴室垫</a>
											</li>
											<li>
												<a data-uspm="28032823" href="http://chuwei.ule.com/28032823-muyuyongpin---------0-1.html" srcid="cateNav_28031902_63" target="_blank">沐浴用品</a>
											</li>
											<li>
												<a data-uspm="28032824" href="http://chuwei.ule.com/28032824-shukoubei---------0-1.html" srcid="cateNav_28031902_64" target="_blank">漱口杯</a>
											</li>
											<li>
												<a data-uspm="28032825" href="http://chuwei.ule.com/28032825-yushizhiwujia---------0-1.html" srcid="cateNav_28031902_65" target="_blank">浴室置物架</a>
											</li>
											<li>
												<a data-uspm="28032827" href="http://chuwei.ule.com/28032827-matongquanshua---------0-1.html" srcid="cateNav_28031902_66" target="_blank">马桶圈/刷</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="汽车用品" class="">
									<a class="z26" data-uspm="z28032429" href="http://qicheyongpin.ule.com/" srcid="28032429_channel_home"><i></i>汽车用品</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="subcate-recom subcate-recom-c28032429">
								<p>
									<a href="http://qicheyongpin.ule.com/" target="_blank" class="more" data-uspm="28032429m">汽车用品</a>
									<a href="http://store.ule.com/store/9739.html?uspm=1.1.121_L1402535_T140253501_S10887_M800110861.1407.2.1" target="_blank" data-uspm="28032429t1">奇果车品 轻便出游</a>
									<a href="http://search.ule.com/search.do?uspm=1.1.1_V2014.102.%E6%B1%BD%E8%BD%A6%E5%86%85%E9%A5%B0.1&amp;srcid=searchkeywords_%E6%B1%BD%E8%BD%A6%E5%86%85%E9%A5%B0&amp;keywords=%E6%B1%BD%E8%BD%A6%E5%86%85%E9%A5%B0" target="_blank" data-uspm="28032429t2">精品内饰</a>
									<a href="http://store.ule.com/store/6754.html?uspm=1.1.121_L1402535_T140253501_S10887_M800110861.1407.2.1" target="_blank" data-uspm="28032429t3">坦川车品 一站式齐购</a>
								</p>
							</div>
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a class="subcate-title" style="cursor: default;">精选品牌</a>
										<ul class="subcate-detail">
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--22816-lingdu------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.27.1" style="" target="_blank">凌度</a>
											</li>
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--4623-guipai------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.35.1" style="" target="_blank">龟牌</a>
											</li>
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--11896-jiedu------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.261.1" style="" target="_blank">捷渡</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/6355.html?uspm=1.1.103_C28032429_B8192_O0_P1.1036.4.1" style="" target="_blank">安美驰</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/5926.html?uspm=1.1.103_C28032429_B5998_O0_P1.1036.4.1" style="" target="_blank">E路驰</a>
											</li>
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--5290-xiandai------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.33.1" style="" target="_blank">现代</a>
											</li>
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--3545-aoshuer------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.19.1" style="" target="_blank">奥舒尔</a>
											</li>
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--4839-jiabaili------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.22.1" style="" target="_blank">佳百丽</a>
											</li>
											<li>
												<a href="http://qicheyongpin.ule.com/28032429-qicheyongpin--5214-kuaimeite------0-1.html?uspm=1.1.103_C28032429_O0_P1.1033.28.1" style="" target="_blank">快美特</a>
											</li>
											<li>
												<a href="http://store.ule.com/store/5926.html?uspm=1.1.103_C28032429_B5998_O0_P1.1036.4.1" style="" target="_blank">RACING</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032438" class="subcate-title" href="http://qicheyongpin.ule.com/28032438-weixiubaoyang---------0-1.html" srcid="cateNav_28032429_8" target="_blank">维修保养</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032441" href="http://qicheyongpin.ule.com/28032441-dipanzhuangjiahuban---------0-1.html" srcid="cateNav_28032429_9" target="_blank">底盘装甲/护板</a>
											</li>
											<li>
												<a data-uspm="28032442" href="http://qicheyongpin.ule.com/28032442-fangdongye---------0-1.html" srcid="cateNav_28032429_10" target="_blank">防冻液</a>
											</li>
											<li>
												<a data-uspm="28032443" href="http://qicheyongpin.ule.com/28032443-runhuayou---------0-1.html" srcid="cateNav_28032429_11" target="_blank">润滑油</a>
											</li>
											<li>
												<a data-uspm="28032445" href="http://qicheyongpin.ule.com/28032445-tianjiaji---------0-1.html" srcid="cateNav_28032429_12" target="_blank">添加剂</a>
											</li>
											<li>
												<a data-uspm="28032447" href="http://qicheyongpin.ule.com/28032447-yushua---------0-1.html" srcid="cateNav_28032429_13" target="_blank">雨刷</a>
											</li>
											<li>
												<a data-uspm="28032448" href="http://qicheyongpin.ule.com/28032448-chedeng---------0-1.html" srcid="cateNav_28032429_14" target="_blank">车灯</a>
											</li>
											<li>
												<a data-uspm="28032452" href="http://qicheyongpin.ule.com/28032452-weixiupeijian---------0-1.html" srcid="cateNav_28032429_15" target="_blank">维修配件</a>
											</li>
											<li>
												<a data-uspm="28032453" href="http://qicheyongpin.ule.com/28032453-tiemo---------0-1.html" srcid="cateNav_28032429_16" target="_blank">贴膜</a>
											</li>
											<li>
												<a data-uspm="28032454" href="http://qicheyongpin.ule.com/28032454-luntailungu---------0-1.html" srcid="cateNav_28032429_17" target="_blank">轮胎/轮毂</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032471" class="subcate-title" href="http://qicheyongpin.ule.com/28032471-anquanzijia---------0-1.html" srcid="cateNav_28032429_28" target="_blank">安全自驾</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032472" href="http://qicheyongpin.ule.com/28032472-taiyajiance---------0-1.html" srcid="cateNav_28032429_29" target="_blank">胎压监测</a>
											</li>
											<li>
												<a data-uspm="28032475" href="http://qicheyongpin.ule.com/28032475-anquanzuoyi---------0-1.html" srcid="cateNav_28032429_30" target="_blank">安全座椅</a>
											</li>
											<li>
												<a data-uspm="28032476" href="http://qicheyongpin.ule.com/28032476-zijiayeying---------0-1.html" srcid="cateNav_28032429_31" target="_blank">自驾野营</a>
											</li>
											<li>
												<a data-uspm="28032477" href="http://qicheyongpin.ule.com/28032477-yingjijiuyuan---------0-1.html" srcid="cateNav_28032429_32" target="_blank">应急救援</a>
											</li>
											<li>
												<a data-uspm="28032478" href="http://qicheyongpin.ule.com/28032478-baowenxiangzhiwuxiang---------0-1.html" srcid="cateNav_28032429_33" target="_blank">保温箱/置物箱</a>
											</li>
											<li>
												<a data-uspm="28032479" href="http://qicheyongpin.ule.com/28032479-fangdaoyongpin---------0-1.html" srcid="cateNav_28032429_34" target="_blank">防盗用品</a>
											</li>
											<li>
												<a data-uspm="28032480" href="http://qicheyongpin.ule.com/28032480-motuochezhuangbei---------0-1.html" srcid="cateNav_28032429_35" target="_blank">摩托车装备</a>
											</li>
											<li>
												<a data-uspm="28032481" href="http://qicheyongpin.ule.com/28032481-chongqibeng---------0-1.html" srcid="cateNav_28032429_36" target="_blank">充气泵</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28032430" class="subcate-title" href="http://qicheyongpin.ule.com/28032430-meirongqingjie---------0-1.html" srcid="cateNav_28032429_1" target="_blank">美容清洁</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032431" href="http://qicheyongpin.ule.com/28032431-chela---------0-1.html" srcid="cateNav_28032429_2" target="_blank">车蜡</a>
											</li>
											<li>
												<a data-uspm="28032432" href="http://qicheyongpin.ule.com/28032432-xicheyongpin---------0-1.html" srcid="cateNav_28032429_3" target="_blank">洗车用品</a>
											</li>
											<li>
												<a data-uspm="28032433" href="http://qicheyongpin.ule.com/28032433-qingjieji---------0-1.html" srcid="cateNav_28032429_4" target="_blank">清洁剂</a>
											</li>
											<li>
												<a data-uspm="28032434" href="http://qicheyongpin.ule.com/28032434-buqibi---------0-1.html" srcid="cateNav_28032429_5" target="_blank">补漆笔</a>
											</li>
											<li>
												<a data-uspm="28032435" href="http://qicheyongpin.ule.com/28032435-bolishui---------0-1.html" srcid="cateNav_28032429_6" target="_blank">玻璃水</a>
											</li>
											<li>
												<a data-uspm="28032437" href="http://qicheyongpin.ule.com/28032437-shuiqiangxicheji---------0-1.html" srcid="cateNav_28032429_7" target="_blank">水枪/洗车机</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032456" class="subcate-title" href="http://qicheyongpin.ule.com/28032456-cheshijingpin---------0-1.html" srcid="cateNav_28032429_18" target="_blank">车饰精品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032457" href="http://qicheyongpin.ule.com/28032457-zuodianzuotao---------0-1.html" srcid="cateNav_28032429_19" target="_blank">座垫/座套</a>
											</li>
											<li>
												<a data-uspm="28032459" href="http://qicheyongpin.ule.com/28032459-jiaodian---------0-1.html" srcid="cateNav_28032429_20" target="_blank">脚垫</a>
											</li>
											<li>
												<a data-uspm="28032462" href="http://qicheyongpin.ule.com/28032462-houbeixiangdian---------0-1.html" srcid="cateNav_28032429_21" target="_blank">后备箱垫</a>
											</li>
											<li>
												<a data-uspm="28032463" href="http://qicheyongpin.ule.com/28032463-neishiguajian---------0-1.html" srcid="cateNav_28032429_22" target="_blank">内饰挂件</a>
											</li>
											<li>
												<a data-uspm="28032464" href="http://qicheyongpin.ule.com/28032464-touzhenyaokao---------0-1.html" srcid="cateNav_28032429_23" target="_blank">头枕/腰靠</a>
											</li>
											<li>
												<a data-uspm="28032466" href="http://qicheyongpin.ule.com/28032466-xiangshuichuwei---------0-1.html" srcid="cateNav_28032429_24" target="_blank">香水/除味</a>
											</li>
											<li>
												<a data-uspm="28032467" href="http://qicheyongpin.ule.com/28032467-gongnengshipin---------0-1.html" srcid="cateNav_28032429_25" target="_blank">功能饰品</a>
											</li>
											<li>
												<a data-uspm="28032469" href="http://qicheyongpin.ule.com/28032469-cheyi---------0-1.html" srcid="cateNav_28032429_26" target="_blank">车衣</a>
											</li>
											<li>
												<a data-uspm="28032470" href="http://qicheyongpin.ule.com/28032470-chetiewaishi---------0-1.html" srcid="cateNav_28032429_27" target="_blank">车贴/外饰</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28032482" class="subcate-title" href="http://qicheyongpin.ule.com/28032482-chezaidianqi---------0-1.html" srcid="cateNav_28032429_37" target="_blank">车载电器</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28032484" href="http://qicheyongpin.ule.com/28032484-daohangyi---------0-1.html" srcid="cateNav_28032429_38" target="_blank">导航仪</a>
											</li>
											<li>
												<a data-uspm="28032485" href="http://qicheyongpin.ule.com/28032485-xingchejiluyi---------0-1.html" srcid="cateNav_28032429_39" target="_blank">行车记录仪</a>
											</li>
											<li>
												<a data-uspm="28032486" href="http://qicheyongpin.ule.com/28032486-anquanyujingyi---------0-1.html" srcid="cateNav_28032429_40" target="_blank">安全预警仪</a>
											</li>
											<li>
												<a data-uspm="28032487" href="http://qicheyongpin.ule.com/28032487-dianyuan---------0-1.html" srcid="cateNav_28032429_41" target="_blank">电源</a>
											</li>
											<li>
												<a data-uspm="28032489" href="http://qicheyongpin.ule.com/28032489-xichenqi---------0-1.html" srcid="cateNav_28032429_42" target="_blank">吸尘器</a>
											</li>
											<li>
												<a data-uspm="28032491" href="http://qicheyongpin.ule.com/28032491-bingxiang---------0-1.html" srcid="cateNav_28032429_43" target="_blank">冰箱</a>
											</li>
											<li>
												<a data-uspm="28032492" href="http://qicheyongpin.ule.com/28032492-chezailanya---------0-1.html" srcid="cateNav_28032429_44" target="_blank">车载蓝牙</a>
											</li>
											<li>
												<a data-uspm="28032493" href="http://qicheyongpin.ule.com/28032493-jinghuaqi---------0-1.html" srcid="cateNav_28032429_45" target="_blank">净化器</a>
											</li>
											<li>
												<a data-uspm="28032495" href="http://qicheyongpin.ule.com/28032495-zhinengjiashi---------0-1.html" srcid="cateNav_28032429_46" target="_blank">智能驾驶</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="商务礼品" class="">
									<a class="z29" data-uspm="z28033011" href="http://search.ule.com/catalogs/-29-shangwulipin.html" srcid="28033011_channel_home"><i></i>商务礼品</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28033012" class="subcate-title" href="http://search.ule.com/28033012-teselipin---------0-1.html" srcid="cateNav_28033011_1" target="_blank">特色礼品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033013" href="http://search.ule.com/28033013-wenfangsibao---------0-1.html" srcid="cateNav_28033011_2" target="_blank">文房四宝</a>
											</li>
											<li>
												<a data-uspm="28033014" href="http://search.ule.com/28033014-chajutaozhuang---------0-1.html" srcid="cateNav_28033011_3" target="_blank">茶具套装</a>
											</li>
											<li>
												<a data-uspm="28033015" href="http://search.ule.com/28033015-gongyibaijian---------0-1.html" srcid="cateNav_28033011_4" target="_blank">工艺摆件</a>
											</li>
											<li>
												<a data-uspm="28033016" href="http://search.ule.com/28033016-huojiyanju---------0-1.html" srcid="cateNav_28033011_5" target="_blank">火机/烟具</a>
											</li>
											<li>
												<a data-uspm="28033017" href="http://search.ule.com/28033017-liheliquan---------0-1.html" srcid="cateNav_28033011_6" target="_blank">礼盒礼券</a>
											</li>
											<li>
												<a data-uspm="28033018" href="http://search.ule.com/28033018-gexingdingzhi---------0-1.html" srcid="cateNav_28033011_7" target="_blank">个性定制</a>
											</li>
											<li>
												<a data-uspm="28033019" href="http://search.ule.com/28033019-tailiguali---------0-1.html" srcid="cateNav_28033011_8" target="_blank">台历/挂历</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033265" class="subcate-title" href="http://search.ule.com/28033265-xunishangpin---------0-1.html" srcid="cateNav_28033011_15" target="_blank">虚拟商品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033266" href="http://search.ule.com/28033266-youleka---------0-1.html" srcid="cateNav_28033011_16" target="_blank">邮乐卡</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28033020" class="subcate-title" href="http://search.ule.com/28033020-jinianshouzang---------0-1.html" srcid="cateNav_28033011_9" target="_blank">纪念收藏</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033021" href="http://search.ule.com/28033021-gaojitaoci---------0-1.html" srcid="cateNav_28033011_10" target="_blank">高级陶瓷</a>
											</li>
											<li>
												<a data-uspm="28033022" href="http://search.ule.com/28033022-shouzangbawan---------0-1.html" srcid="cateNav_28033011_11" target="_blank">收藏把玩</a>
											</li>
											<li>
												<a data-uspm="28033023" href="http://search.ule.com/28033023-jinianbi---------0-1.html" srcid="cateNav_28033011_12" target="_blank">纪念币</a>
											</li>
											<li>
												<a data-uspm="28033024" href="http://search.ule.com/28033024-hekamingxinpian---------0-1.html" srcid="cateNav_28033011_13" target="_blank">贺卡/明信片</a>
											</li>
											<li>
												<a data-uspm="28033025" href="http://search.ule.com/28033025-youpiaoshouzang---------0-1.html" srcid="cateNav_28033011_14" target="_blank">邮票收藏</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033267" class="subcate-title" href="http://search.ule.com/28033267-luyoumenpiao---------0-1.html" srcid="cateNav_28033011_17" target="_blank">旅游门票</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033268" href="http://search.ule.com/28033268-jingdianmenpiao---------0-1.html" srcid="cateNav_28033011_18" target="_blank">景点门票</a>
											</li>
											<li>
												<a data-uspm="28033269" href="http://search.ule.com/28033269-luyouyouhuiquan---------0-1.html" srcid="cateNav_28033011_19" target="_blank">旅游优惠券</a>
											</li>
											<li>
												<a data-uspm="28033272" href="http://search.ule.com/28033272-qita---------0-1.html" srcid="cateNav_28033011_20" target="_blank">其他</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt data-uspm="100014" morekey="图书" class="">
									<a class="z39" data-uspm="z28033026" href="http://tushu.ule.com/" srcid="28033026_channel_home"><i></i>图书/音像</a> 
									<a data-uspm="z92" href="http://search.ule.com/92-zaixianjiaoyu---------0-1.html" class="second" style="display: none;">在线教育</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28033027" class="subcate-title" href="http://tushu.ule.com/28033027-wenyi---------0-1.html" srcid="cateNav_28033026_1" target="_blank">文艺</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033028" href="http://tushu.ule.com/28033028-zhongguodangdaixiaoshuo---------0-1.html" srcid="cateNav_28033026_2" target="_blank">中国当代小说</a>
											</li>
											<li>
												<a data-uspm="28033029" href="http://tushu.ule.com/28033029-waiguoxiaoshuo---------0-1.html" srcid="cateNav_28033026_3" target="_blank">外国小说</a>
											</li>
											<li>
												<a data-uspm="28033030" href="http://tushu.ule.com/28033030-zhongguojinxiandaixiaoshuo---------0-1.html" srcid="cateNav_28033026_4" target="_blank">中国近现代小说</a>
											</li>
											<li>
												<a data-uspm="28033031" href="http://tushu.ule.com/28033031-zhongguogudianxiaoshuo---------0-1.html" srcid="cateNav_28033026_5" target="_blank">中国古典小说</a>
											</li>
											<li>
												<a data-uspm="28033032" href="http://tushu.ule.com/28033032-lishixiaoshuo---------0-1.html" srcid="cateNav_28033026_6" target="_blank">历史小说</a>
											</li>
											<li>
												<a data-uspm="28033033" href="http://tushu.ule.com/28033033-zhichang---------0-1.html" srcid="cateNav_28033026_7" target="_blank">职场</a>
											</li>
											<li>
												<a data-uspm="28033034" href="http://tushu.ule.com/28033034-yanqing---------0-1.html" srcid="cateNav_28033026_8" target="_blank">言情</a>
											</li>
											<li>
												<a data-uspm="28033036" href="http://tushu.ule.com/28033036-jingsongkongbu---------0-1.html" srcid="cateNav_28033026_9" target="_blank">惊悚/恐怖</a>
											</li>
											<li>
												<a data-uspm="28033037" href="http://tushu.ule.com/28033037-zhongguoxiandangdaisuibi---------0-1.html" srcid="cateNav_28033026_10" target="_blank">中国现当代随笔</a>
											</li>
											<li>
												<a data-uspm="28033038" href="http://tushu.ule.com/28033038-zhongguogushici---------0-1.html" srcid="cateNav_28033026_11" target="_blank">中国古诗词</a>
											</li>
											<li>
												<a data-uspm="28033041" href="http://tushu.ule.com/28033041-wenji---------0-1.html" srcid="cateNav_28033026_12" target="_blank">文集</a>
											</li>
											<li>
												<a data-uspm="28033043" href="http://tushu.ule.com/28033043-waiguosuibi---------0-1.html" srcid="cateNav_28033026_13" target="_blank">外国随笔</a>
											</li>
											<li>
												<a data-uspm="28033044" href="http://tushu.ule.com/28033044-wenxuewenzhai---------0-1.html" srcid="cateNav_28033026_14" target="_blank">文学文摘</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033054" class="subcate-title" href="http://tushu.ule.com/28033054-shenghuoshishang---------0-1.html" srcid="cateNav_28033026_24" target="_blank">生活时尚</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033055" href="http://tushu.ule.com/28033055-baojianyangsheng---------0-1.html" srcid="cateNav_28033026_25" target="_blank">保健/养生</a>
											</li>
											<li>
												<a data-uspm="28033056" href="http://tushu.ule.com/28033056-pengrenmeishi---------0-1.html" srcid="cateNav_28033026_26" target="_blank">烹饪/美食</a>
											</li>
											<li>
												<a data-uspm="28033057" href="http://tushu.ule.com/28033057-luyouditu---------0-1.html" srcid="cateNav_28033026_27" target="_blank">旅游/地图</a>
											</li>
											<li>
												<a data-uspm="28033058" href="http://tushu.ule.com/28033058-xiuxianaihao---------0-1.html" srcid="cateNav_28033026_28" target="_blank">休闲/爱好</a>
											</li>
											<li>
												<a data-uspm="28033059" href="http://tushu.ule.com/28033059-shishang---------0-1.html" srcid="cateNav_28033026_29" target="_blank">时尚</a>
											</li>
											<li>
												<a data-uspm="28033060" href="http://tushu.ule.com/28033060-caijing---------0-1.html" srcid="cateNav_28033026_30" target="_blank">财经</a>
											</li>
											<li>
												<a data-uspm="28033061" href="http://tushu.ule.com/28033061-dililuyou---------0-1.html" srcid="cateNav_28033026_31" target="_blank">地理旅游</a>
											</li>
											<li>
												<a data-uspm="28033062" href="http://tushu.ule.com/28033062-shenghuojiating---------0-1.html" srcid="cateNav_28033026_32" target="_blank">生活家庭</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033079" class="subcate-title" href="http://tushu.ule.com/28033079-renwensheke---------0-1.html" srcid="cateNav_28033026_44" target="_blank">人文社科</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033080" href="http://tushu.ule.com/28033080-lishi---------0-1.html" srcid="cateNav_28033026_45" target="_blank">历史</a>
											</li>
											<li>
												<a data-uspm="28033081" href="http://tushu.ule.com/28033081-zhexuezongjiao---------0-1.html" srcid="cateNav_28033026_46" target="_blank">哲学/宗教</a>
											</li>
											<li>
												<a data-uspm="28033082" href="http://tushu.ule.com/28033082-falu---------0-1.html" srcid="cateNav_28033026_47" target="_blank">法律</a>
											</li>
											<li>
												<a data-uspm="28033083" href="http://tushu.ule.com/28033083-zhengzhijunshi---------0-1.html" srcid="cateNav_28033026_48" target="_blank">政治/军事</a>
											</li>
											<li>
												<a data-uspm="28033084" href="http://tushu.ule.com/28033084-shehuikexue---------0-1.html" srcid="cateNav_28033026_49" target="_blank">社会科学</a>
											</li>
											<li>
												<a data-uspm="28033085" href="http://tushu.ule.com/28033085-wenhua---------0-1.html" srcid="cateNav_28033026_50" target="_blank">文化</a>
											</li>
											<li>
												<a data-uspm="28033086" href="http://tushu.ule.com/28033086-guji---------0-1.html" srcid="cateNav_28033026_51" target="_blank">古籍</a>
											</li>
											<li>
												<a data-uspm="28033087" href="http://tushu.ule.com/28033087-kepuduwu---------0-1.html" srcid="cateNav_28033026_52" target="_blank">科普读物</a>
											</li>
											<li>
												<a data-uspm="28033088" href="http://tushu.ule.com/28033088-jisuanjiwangluo---------0-1.html" srcid="cateNav_28033026_53" target="_blank">计算机/网络</a>
											</li>
											<li>
												<a data-uspm="28033089" href="http://tushu.ule.com/28033089-zirankexue---------0-1.html" srcid="cateNav_28033026_54" target="_blank">自然科学</a>
											</li>
											<li>
												<a data-uspm="28033090" href="http://tushu.ule.com/28033090-yixue---------0-1.html" srcid="cateNav_28033026_55" target="_blank">医学</a>
											</li>
											<li>
												<a data-uspm="28033091" href="http://tushu.ule.com/28033091-jianzhu---------0-1.html" srcid="cateNav_28033026_56" target="_blank">建筑</a>
											</li>
											<li>
												<a data-uspm="28033092" href="http://tushu.ule.com/28033092-gongyejishu---------0-1.html" srcid="cateNav_28033026_57" target="_blank">工业技术</a>
											</li>
											<li>
												<a data-uspm="28033093" href="http://tushu.ule.com/28033093-nongyelinye---------0-1.html" srcid="cateNav_28033026_58" target="_blank">农业/林业</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033102" class="subcate-title" href="http://tushu.ule.com/28033102-yinxiangzhipin---------0-1.html" srcid="cateNav_28033026_67" target="_blank">音像制品</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033103" href="http://tushu.ule.com/28033103-yinle---------0-1.html" srcid="cateNav_28033026_68" target="_blank">音乐</a>
											</li>
											<li>
												<a data-uspm="28033104" href="http://tushu.ule.com/28033104-yingshi---------0-1.html" srcid="cateNav_28033026_69" target="_blank">影视</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28033045" class="subcate-title" href="http://tushu.ule.com/28033045-yunyingshaoer---------0-1.html" srcid="cateNav_28033026_15" target="_blank">孕婴少儿</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033046" href="http://tushu.ule.com/28033046-yunchantaijiao---------0-1.html" srcid="cateNav_28033026_16" target="_blank">孕产/胎教</a>
											</li>
											<li>
												<a data-uspm="28033047" href="http://tushu.ule.com/28033047-yingerduwu02sui---------0-1.html" srcid="cateNav_28033026_17" target="_blank">婴儿读物（0-2岁）</a>
											</li>
											<li>
												<a data-uspm="28033048" href="http://tushu.ule.com/28033048-youerqimeng36sui---------0-1.html" srcid="cateNav_28033026_18" target="_blank">幼儿启蒙（3-6岁）</a>
											</li>
											<li>
												<a data-uspm="28033049" href="http://tushu.ule.com/28033049-shaoerwenxue710sui---------0-1.html" srcid="cateNav_28033026_19" target="_blank">少儿文学（7-10岁）</a>
											</li>
											<li>
												<a data-uspm="28033050" href="http://tushu.ule.com/28033050-ertongwenyi1114sui---------0-1.html" srcid="cateNav_28033026_20" target="_blank">儿童文艺（11-14岁）</a>
											</li>
											<li>
												<a data-uspm="28033051" href="http://tushu.ule.com/28033051-tuhuashu---------0-1.html" srcid="cateNav_28033026_21" target="_blank">图画书</a>
											</li>
											<li>
												<a data-uspm="28033052" href="http://tushu.ule.com/28033052-katongyizhi---------0-1.html" srcid="cateNav_28033026_22" target="_blank">卡通益智</a>
											</li>
											<li>
												<a data-uspm="28033053" href="http://tushu.ule.com/28033053-muyingqinzi---------0-1.html" srcid="cateNav_28033026_23" target="_blank">母婴亲子</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033067" class="subcate-title" href="http://tushu.ule.com/28033067-jingguanlizhi---------0-1.html" srcid="cateNav_28033026_33" target="_blank">经管励志</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033068" href="http://tushu.ule.com/28033068-guanlixue---------0-1.html" srcid="cateNav_28033026_34" target="_blank">管理学</a>
											</li>
											<li>
												<a data-uspm="28033069" href="http://tushu.ule.com/28033069-jingjixue---------0-1.html" srcid="cateNav_28033026_35" target="_blank">经济学</a>
											</li>
											<li>
												<a data-uspm="28033070" href="http://tushu.ule.com/28033070-touzilicai---------0-1.html" srcid="cateNav_28033026_36" target="_blank">投资理财</a>
											</li>
											<li>
												<a data-uspm="28033071" href="http://tushu.ule.com/28033071-huijixue---------0-1.html" srcid="cateNav_28033026_37" target="_blank">会计学</a>
											</li>
											<li>
												<a data-uspm="28033072" href="http://tushu.ule.com/28033072-shichangyingxiao---------0-1.html" srcid="cateNav_28033026_38" target="_blank">市场/营销</a>
											</li>
											<li>
												<a data-uspm="28033073" href="http://tushu.ule.com/28033073-zhichangrenji---------0-1.html" srcid="cateNav_28033026_39" target="_blank">职场/人际</a>
											</li>
											<li>
												<a data-uspm="28033074" href="http://tushu.ule.com/28033074-lizhijilimingyan---------0-1.html" srcid="cateNav_28033026_40" target="_blank">励志/激励/名言</a>
											</li>
											<li>
												<a data-uspm="28033075" href="http://tushu.ule.com/28033075-xiuyangzhexue---------0-1.html" srcid="cateNav_28033026_41" target="_blank">修养/哲学</a>
											</li>
											<li>
												<a data-uspm="28033076" href="http://tushu.ule.com/28033076-koucaiyanjiangbianlun---------0-1.html" srcid="cateNav_28033026_42" target="_blank">口才/演讲/辩论</a>
											</li>
											<li>
												<a data-uspm="28033077" href="http://tushu.ule.com/28033077-qingshangcaishangzhishang---------0-1.html" srcid="cateNav_28033026_43" target="_blank">情商/财商/智商</a>
											</li>
										</ul>
									</li>
									<li class="subcate-list clear">
										<a data-uspm="28033094" class="subcate-title" href="http://tushu.ule.com/28033094-jiaoyu---------0-1.html" srcid="cateNav_28033026_59" target="_blank">教育</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033095" href="http://tushu.ule.com/28033095-waiyu---------0-1.html" srcid="cateNav_28033026_60" target="_blank">外语</a>
											</li>
											<li>
												<a data-uspm="28033096" href="http://tushu.ule.com/28033096-zhongxiaoxuejiaofu---------0-1.html" srcid="cateNav_28033026_61" target="_blank">中小学教辅</a>
											</li>
											<li>
												<a data-uspm="28033097" href="http://tushu.ule.com/28033097-kaoshi---------0-1.html" srcid="cateNav_28033026_62" target="_blank">考试</a>
											</li>
											<li>
												<a data-uspm="28033098" href="http://tushu.ule.com/28033098-jiaocai---------0-1.html" srcid="cateNav_28033026_63" target="_blank">教材</a>
											</li>
											<li>
												<a data-uspm="28033099" href="http://tushu.ule.com/28033099-gongjushu---------0-1.html" srcid="cateNav_28033026_64" target="_blank">工具书</a>
											</li>
											<li>
												<a data-uspm="28033100" href="http://tushu.ule.com/28033100-jinkoutushugangtaitushu---------0-1.html" srcid="cateNav_28033026_65" target="_blank">进口图书、港台图书</a>
											</li>
											<li>
												<a data-uspm="28033101" href="http://tushu.ule.com/28033101-leqi---------0-1.html" srcid="cateNav_28033026_66" target="_blank">乐器</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
						<dt class="last" data-uspm="100014" morekey="消费券">
									<a class="z40" data-uspm="z28033105" href="http://search.ule.com/catalogs/-40-xiaofeikaquanpiaoquan.html" srcid="28033105_channel_home"><i></i>消费卡券/票券</a>
								</dt>
						<dd data-uspm="100014" style="display: none;">
							<div class="clearfix">
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28033108" class="subcate-title" href="http://search.ule.com/28033108-canyingouwukaquan---------0-1.html" srcid="cateNav_28033105_1" target="_blank">餐饮购物卡券</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033114" href="http://search.ule.com/28033114-yuebingzongzimianbaojitianpinquan---------0-1.html" srcid="cateNav_28033105_2" target="_blank">月饼/粽子/面包及甜品券</a>
											</li>
											<li>
												<a data-uspm="28033110" href="http://search.ule.com/28033110-lengyinkafeicha---------0-1.html" srcid="cateNav_28033105_3" target="_blank">冷饮/咖啡/茶</a>
											</li>
											<li>
												<a data-uspm="28033111" href="http://search.ule.com/28033111-shengxianshuichantihuo---------0-1.html" srcid="cateNav_28033105_4" target="_blank">生鲜水产提货</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="subcate-lists">
									<li class="subcate-list clear">
										<a data-uspm="28033119" class="subcate-title" href="http://search.ule.com/28033119-yulejianshenkaquan---------0-1.html" srcid="cateNav_28033105_5" target="_blank">娱乐健身卡券</a>
										<ul class="subcate-detail">
											<li>
												<a data-uspm="28033125" href="http://search.ule.com/28033125-yingshiyinlehuihuajusaishi---------0-1.html" srcid="cateNav_28033105_6" target="_blank">影视/音乐会/话剧/赛事</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</dd>
					</dl>

				</div>
				<div class="col-main2">
					<div class="mod-comlist">
						<div class="slide-index">
							<h4 class="active" index="0">底价来袭</h4>
							<h4 index="1" class="">新品上市</h4>
						</div>
						<div class="slide-items" style="height: 956px; margin-top: 0px;">
							<ul class="mod-cheaplist active">
								<li class="i1">
									<a class="prod-img" href="#" target="_blank" title="特惠Ilife/艾莱芙婴幼儿手口柔护肤湿巾 宝宝外出便携湿纸巾 25抽4包">
										<img src="img/topline3/521d84bd489856f2_-1x-1.jpg" alt="特惠Ilife/艾莱芙婴幼儿手口柔护肤湿巾 宝宝外出便携湿纸巾 25抽4包"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="特惠Ilife/艾莱芙婴幼儿手口柔护肤湿巾 宝宝外出便携湿纸巾 25抽4包">特惠Ilife/艾莱芙婴幼儿手口柔护肤湿巾 宝宝外出便携湿纸巾 25抽4包</a>
									</p>
									<p class="prod-price"><span>¥<strong>9.90</strong></span><del>¥39.00</del></p>
									<p class="prod-discount"><span>2.5折</span>
										<a href="#" class="btn-buy e-popcart">立即购买</a>
									</p>
								</li>
								<li class="i2">
									<a class="prod-img" href="#" target="_blank" title="包邮买一送一奥妙全自动洗衣液3kg深层洁净洗衣液">
										<img src="img/topline3/0ca4199a048b3abf_-1x-1.jpg" alt="包邮买一送一奥妙全自动洗衣液3kg深层洁净洗衣液"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="包邮买一送一奥妙全自动洗衣液3kg深层洁净洗衣液">包邮买一送一奥妙全自动洗衣液3kg深层洁净洗衣液</a>
									</p>
									<p class="prod-price"><span>¥<strong>59.00</strong></span><del>¥88.00</del></p>
									<p class="prod-discount"><span>6.7折</span>
										<a href="#" class="btn-buy e-popcart">立即购买</a>
									</p>
								</li>
								<li class="i3">
									<a class="prod-img" href="#" target="_blank" title="【清仓疯抢】ABC日用纤薄干爽超柔感网面卫生巾A13 240mm*4包装*8片">
										<img src="img/topline3/8d34b58190641499_-1x-1.jpg" alt="【清仓疯抢】ABC日用纤薄干爽超柔感网面卫生巾A13 240mm*4包装*8片"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="【清仓疯抢】ABC日用纤薄干爽超柔感网面卫生巾A13 240mm*4包装*8片">【清仓疯抢】ABC日用纤薄干爽超柔感网面卫生巾A13 240mm*4包装*8片</a>
									</p>
									<p class="prod-price"><span>¥<strong>19.90</strong></span><del>¥37.90</del></p>
									<p class="prod-discount"><span>5.3折</span>
										<a href="#" class="btn-buy e-popcart">立即购买</a>
									</p>
								</li>
								<li class="i4">
									<a class="prod-img" href="#" target="_blank" title="和澄 澄大 阳澄湖六月黄大闸蟹现货 8只礼盒装">
										<img src="img/topline3/e88096e4b89a5673_-1x-1.jpg" alt="和澄 澄大 阳澄湖六月黄大闸蟹现货 8只礼盒装"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="和澄 澄大 阳澄湖六月黄大闸蟹现货 8只礼盒装">和澄 澄大 阳澄湖六月黄大闸蟹现货 8只礼盒装</a>
									</p>
									<p class="prod-price"><span>¥<strong>109.90</strong></span><del>¥298.00</del></p>
									<p class="prod-discount"><span>3.7折</span>
										<a href="#" class="btn-buy e-popcart">立即购买</a>
									</p>
								</li>
							</ul>
							<ul class="mod-freshlist" >
								<li class="i1">
									<a class="prod-img" href="#" target="_blank" title="gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包" >
										<img src="img/headmenu/109dbf65989b8f4f_-1x-1.jpg" alt="gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包" >gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包</a>
									</p>
									<p class="prod-price"><span>¥<strong>168.00</strong></span><del>¥688.00</del></p>
								</li>
								<li class="i2">
									<a class="prod-img" href="#" target="_blank" title="云南蒙自石榴5斤装" >
										<img src="img/headmenu/4be486bab2b2925a_-1x-1.jpg" alt="云南蒙自石榴5斤装"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="云南蒙自石榴5斤装" >云南蒙自石榴5斤装</a>
									</p>
									<p class="prod-price"><span>¥<strong>22.80</strong></span><del>¥50.00</del></p>
								</li>
								<li class="i3">
									<a class="prod-img" href="#" target="_blank" title="美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07" >
										<img src="img/headmenu/7e280bb275bf3e12_-1x-1.jpg" alt="美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07" >美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07</a>
									</p>
									<p class="prod-price"><span>¥<strong>39.00</strong></span><del>¥198.00</del></p>
								</li>
								<li class="i4">
									<a class="prod-img" href="#" target="_blank" title="逸轩家纺   舒适枕芯一个" >
										<img src="img/headmenu/312946439c4d4846_-1x-1.jpg" alt="逸轩家纺   舒适枕芯一个"></a>
									<p class="prod-name">
										<a href="#" target="_blank" title="逸轩家纺   舒适枕芯一个" >逸轩家纺 舒适枕芯一个</a>
									</p>
									<p class="prod-price"><span>¥<strong>19.90</strong></span><del>¥69.00</del></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-ulelife">
						<div class="slide-index">
							<h4 class="active">
					<span >话费充值</span>
				</h4>
							<h4>
					<span >缴水电煤</span>
				</h4>
						</div>
						<div class="slide-items">
							<div class="mod-chongzhi">
								<div class="chongzhi-form active">
									<dl class="dl-mobile">
										<dt>手机号</dt>
										<dd>
											<input type="text" class="txt-mobile" placeholder="支持移动/联通/电信" maxlength="13" />
											<p class="txt-error">请输入正确的手机号码！</p>
										</dd>
									</dl>
									<dl class="dl-value">
										<dt>面　值</dt>
										<dd class="select">
											<select style="display: block;">
												<option value="30">30元</option>
												<option value="50">50元</option>
												<option value="100" selected="">100元</option>
												<option value="200">200元</option>
											</select>
										</dd>
										<dd class="amount"><strong>100.00</strong>元</dd>
										<dd class="help">
											<a href="#" target="_blank" title="充值帮助">充值帮助</a>
										</dd>
									</dl>
									<dl class="dl-button" style="background-image:none;">
										<dd><input data-uspm="cz" type="button" class="btn-chongzhi" value="立即充值"></dd>
										<dd class="error">抱歉，运营商系统繁忙，请避开繁忙时段后重新尝试，谢谢！</dd>
									</dl>
								</div>
								<div class="chongzhi-note">
									温馨提示:<br/>话费充值不支持邮乐卡支付
								</div>
							</div>
							<div class="mod-jiaofei">
								<div class="jiaofei-form">
									<dl class="dl-citys">
										<dt>缴费城市</dt>
										<dd>
											<h5>北京</h5>
											<p>
												<strong>热门城市</strong>
												<span class="citylist"><a data-areacode="210100">沈阳市</a><a data-areacode="610100">西安市</a><a data-areacode="230100">哈尔滨市</a><a data-areacode="520100">贵阳市</a><a data-areacode="450100">南宁市</a></span>
												<a class="more" href="http://life.ule.com/?uspm=1.1.1_C2014.100018.more.1" target="_blank" data-uspm-id="1.1.1_C2014.100018.more.1">更多&gt;&gt;</a>
											</p>
										</dd>

									</dl>
									<div class="jiaofei-buttons">
										<a class="shui" href="javascript:void(0)" data-uspm-id="1.1.1_C2014.100018.shui.1">
											<span class="unsupport">缴水费</span></a>
										<a class="dian" href="#" target="_blank"><span class="">缴电费</span></a>
										<a class="ranq" href="#" target="_blank"><span class="unsupport">缴燃气费</span></a>
									</div>
								</div>
								<div class="jiaofei-note">温馨提示：<br>缴水电煤不支持邮乐卡支付</div>
							</div>

						</div>

					</div>
					<div class="mod-rightfocus">
						<ul class="slide-items">
							<li>
								<a href="#">
									<img id="lbimg9" src="/thinkphp3.2.3/Public/{{imgsrc}}" />
								</a>
							</li>
							<li>
								<a href="#">
									<img id="lbimg10" src="/thinkphp3.2.3/Public/{{imgsrc}}" />
								</a>
							</li>
							<li>
								<a href="#">
									<img id="lbimg11" src="/thinkphp3.2.3/Public/{{item[0].imgsrc}}" />
								</a>
							</li>
							<li>
								<a href="#">
									<img id="lbimg12" src="/thinkphp3.2.3/Public/{{item[0].imgsrc}}" />
								</a>
							</li>
							
						</ul>
						<div class="slide-button">
							<a class="btn-prev"></a>
							<a class="btn-next"></a>
						</div>
						<div class="slide-index">
							<span index="0" class="active">1</span>
							<span index="1" class="">2</span>
							<span index="2" class="">3</span>
							<span index="3" class="">4</span>
						</div>
					</div>
					<div class="mod-rightstore">
						<div class="hd">
							<h4>品牌店铺推荐</h4>
							<p class="minipage">
								<a class="btn-prev disabled"></a>
								<span class="txt-page">1/1</span>
								<a class="btn-next disabled"></a>
							</p>
						</div>
						<div class="dd">
							<ul class="slide-items">
								<li>
									<a href="#">
										<img src="img/5b847f09bf975e4f_-1x-1.jpg" />
										<span class="btn-visit"></span>
									</a>
								</li>
							</ul>

						</div>
					</div>

				</div>
			</div>

		</div>

		<div class="topline3">
			<a href="#"><img src="img/topline3/67eb1fd0b46e19d4_-1x-1.jpg" /></a>
			<a href="#"><img src="img/topline3/62c238325eb4292b_-1x-1.jpg" /></a>
			<a href="#"><img src="img/topline3/c4b56b48d39fa830_-1x-1.jpg" /></a>
		</div>
		<!--topline3结束-->
		<!--moduel-->
		<!--title-->
		<div class="mod-1 channel louceng">
			<div class="title">
				<h3>
					<a class="img" href="#">
						<strong>各地特产</strong>
						<span>吃货最爱 绿豆限量优选</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">肉类熏腊</a>
					<a href="#">低温乳品</a>
					<a href="#">咖啡美味</a>
					<a href="#">尝鲜烘焙</a>
					<a href="#">甜品啤酒</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/cb6a89d47c2478a5_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="piclist-c2">
						<a href="#" class="pic1">
							<img src="img/jianguo1.jpg" />
							<div></div>
						</a>
						<a href="#" class="pic2">
							<img src="img/jianguo2.jpg" />
							<div></div>
						</a>
					</div>
					<div class="piclist-c5">
						<ul>
							<li class="i1">
								<a class="prod-img" href="#" target="_blank" title="【光明】莫斯利安酸奶 ">
									<img src="img/d5b35ea2064d219c_-1x-1.jpg">
								</a>
								<p class="prod-name">
									<a data-uspm="pd11" href="#" target="_blank">【光明】莫斯利安酸奶 钻石装 200g*12瓶/提 保质期到16年11月18日</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>49.90</strong></span>
								</p>
							</li>

							<li class="i2">
								<a class="prod-img" href="#" target="_blank" title="【光明】莫斯利安酸奶 ">
									<img src="img/c8503245dc14ad88_p800x800_130x130.jpg">
								</a>
								<p class="prod-name">
									<a data-uspm="pd11" href="#" target="_blank">【光明】莫斯利安酸奶 钻石装 200g*12瓶/提 保质期到16年11月18日</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>49.90</strong></span>

								</p>
							</li>
							<li class="i3">
								<a class="prod-img" href="#" target="_blank" title="【光明】莫斯利安酸奶 ">
									<img src="img/d34659a49e29eb81_p1000x1000_130x130.jpg">
								</a>
								<p class="prod-name">
									<a data-uspm="pd11" href="#" target="_blank">【光明】莫斯利安酸奶 钻石装 200g*12瓶/提 保质期到16年11月18日</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>49.90</strong></span>

								</p>
							</li>
							<li class="i4">
								<a class="prod-img" href="#" target="_blank" title="【光明】莫斯利安酸奶 ">
									<img src="img/51e444cd5ac84620_p800x800_130x130.jpg">
								</a>
								<p class="prod-name">
									<a data-uspm="pd11" href="#" target="_blank">【光明】莫斯利安酸奶 钻石装 200g*12瓶/提 保质期到16年11月18日</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>49.90</strong></span>

								</p>
							</li>
							<li class="i5">
								<a class="prod-img" href="#" target="_blank" title="【光明】莫斯利安酸奶 ">
									<img src="img/238f4b4f90e56d47_p700x700_130x130.jpg">
								</a>
								<p class="prod-name">
									<a data-uspm="pd11" href="#" target="_blank">【光明】莫斯利安酸奶 钻石装 200g*12瓶/提 保质期到16年11月18日</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>49.90</strong></span>

								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="prodlist-r3">
						<ul>
							<li class="i1">
								<a href="#" class="prod-img"><img src="img/0dafa2eeff874a4b_-1x-1.jpg" /></a>
								<p class="prod-name">
									<a href="#">吾悦 东北黑木耳 特级黄松甸木耳 野生秋木耳干货 510克吾悦 东北黑木耳 特级黄松甸木耳 野生</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>85.00</strong></span>
									<del>¥120.00</del>
								</p>
							</li>
							<li class="i2">
								<a href="#" class="prod-img"><img src="img/37a47e507d7cda35_p790x587_100x100.jpg" /></a>
								<p class="prod-name">
									<a href="#">吾悦 东北黑木耳 特级黄松甸木耳 野生秋木耳干货 510克吾悦 东北黑木耳 特级黄松甸木耳 野生</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>85.00</strong></span>
									<del>¥120.00</del>
								</p>
							</li>
							<li class="i3">
								<a href="#" class="prod-img"><img src="img/223a3d53f38962db_p600x600_100x100.jpg" /></a>
								<p class="prod-name">
									<a href="#">吾悦 东北黑木耳 特级黄松甸木耳 野生秋木耳干货 510克吾悦 东北黑木耳 特级黄松甸木耳 野生</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>85.00</strong></span>
									<del>¥120.00</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--moduel-->
		<!--moduel2-->
		<!--title-->
		<div class="mod-2 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color">手机数码</strong>
						<span>超越裸机手感 纤薄透明壳</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">iphone6S</a>
					<a href="#">移动电源</a>
					<a href="#">手机保护套</a>
					<a href="#">智能手环</a>
					<a href="#">平板电脑</a>
					<a href="#">笔记本电脑</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/0a9e9e441a337f6b_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="col-42">
						<ul>
							<li>
								<a class="prod-img" href="#">
									<img src="img/img1/28bd3ff6f54f1a1a_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/42a78f3b401b45e3_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/6a82f8ce6914fce8_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/881b9e864a548c93_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/bdda93f24e2f2bd9_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/28bd3ff6f54f1a1a_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/42a78f3b401b45e3_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/881b9e864a548c93_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r5">
						<h4>热销榜单</h4>
						<ul>
							<li class="i1">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>1</label>
							</li>
							<li class="i2">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>2</label>
							</li>
							<li class="i3">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>3</label>
							</li>
							<li class="i4">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>4</label>
							</li>
							<li class="i5">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>5</label>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<!--moduel2-->
		<!--top-line-->
		<div class="topline">
			<a href="#">
				<img src="img/164b8aa6e4b8d547_-1x-1.jpg" alt="" />
			</a>
		</div>
		<!--top-line-->
		<!--moduel3-->
		<!--title-->
		<div class="mod-2 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#4d8aca;">家用电器</strong>
						<span>美的电饭煲  蒸煮烹饪神器</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">空气净化器</a>
					<a href="#">电风扇</a>
					<a href="#">个户健康</a>
					<a href="#">生活电器</a>
					<a href="#">声波牙刷</a>
					<a href="#">扫地机器人</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/0a9e9e441a337f6b_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="col-42">
						<ul>
							<li>
								<a class="prod-img" href="#">
									<img src="img/img1/28bd3ff6f54f1a1a_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Midea/美的 电水壶 MK-HP1703 1.7L热水壶 不锈钢内壁 按键恒温</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/42a78f3b401b45e3_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/6a82f8ce6914fce8_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/881b9e864a548c93_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/bdda93f24e2f2bd9_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/28bd3ff6f54f1a1a_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/42a78f3b401b45e3_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/881b9e864a548c93_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r5">
						<h4>热销榜单</h4>
						<ul>
							<li class="i1">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>1</label>
							</li>
							<li class="i2">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>2</label>
							</li>
							<li class="i3">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>3</label>
							</li>
							<li class="i4">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>4</label>
							</li>
							<li class="i5">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>5</label>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<!--moduel3-->
		<!--moduel4-->
		<!--title-->
		<div class="mod-3 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#ef3c9a;">美妆洗护</strong>
						<span>防晒补水  带你去探索</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">热销面膜</a>
					<a href="#">纸品湿巾</a>
					<a href="#">洗发护发</a>
					<a href="#">衣物洗护</a>
					<a href="#">男士精品</a>
					<a href="#">防晒霜</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/a4e8ca9633913bfe_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-piclist-c3 mod-piclist-c3-1">
						<a href="#" class="i1">
							<img src="img/9eebaeb48a4b3d94_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i2">
							<img src="img/1e61f1f4a178b114_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i3">
							<img src="img/6cc14c341339a4ef_-1x-1.jpg" />
							<div></div>
						</a>
					</div>
					<div class="mod-prodlist-c41">
						<ul>
							<li>
								<a class="img" href="#">
									<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" class="cowhite">尼维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-speclist">
						<div class="slide-main">
							<ul class="slide-items slid-ul1">
								<li>
									<a href="#">
										<img src="img/littlelinbo/288c3faf719db7b4_-1x-1.jpg" />
										<strong>韩束</strong>
										<span>金盏花润乳液30ml</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/littlelinbo/7442aa895bd55efd_-1x-1.jpg" />
										<strong>甜蜜爱人香水</strong>
										<span>持久淡香30ml</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/littlelinbo/45249d5b1990debb_-1x-1.jpg" />
										<strong>曼秀雷敦</strong>
										<span>控油清爽50g</span>
									</a>
								</li>
							</ul>
							<div class="slide-quote"></div>

						</div>
						<div class="slide-index slide-index-1">
							<a href="#" class="active">
								<img src="img/littlelinbo/288c3faf719db7b4_-1x-1.jpg" />
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/7442aa895bd55efd_-1x-1.jpg" />
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/45249d5b1990debb_-1x-1.jpg" />
								<i></i>
							</a>
						</div>
					</div>

					<div class="mod-brandlist">
						<ul>
							<li>
								<a href="#"><img src="img/logo/844477da2bf439e3_-1x-1.jpg" alt="" /> <span>兰芝</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/ae9034568be39d59_-1x-1.jpg" alt="" /><span>曼秀雷敦</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/9e0492f828d2ecbf_-1x-1.jpg" alt="" /><span>阿芙</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/606283c4d379c038_-1x-1.jpg" alt="" /><span>美宝莲</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/d2923afea3dd264a_-1x-1.jpg" alt="" /><span>欧莱雅</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/b08bb94bce36f26d_-1x-1.jpg" alt="" /><span>倍力乐</span></a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		
		<!--moduel4-->
		<!--moduel5-->
		<!--title-->
		<div class="mod-3 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#a2619e;">女妆/饰品/配件</strong>
						<span>商场同款 连衣裙打折热卖</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">新款连衣裙</a>
					<a href="#">太阳镜</a>
					<a href="#">珠宝饰品</a>
					<a href="#">雪纺衬衫</a>
					<a href="#">时尚女鞋</a>
					<a href="#">女装内衣</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/a4e8ca9633913bfe_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-piclist-c3 mod-piclist-c3-2">
						<a href="#" class="i1">
							<img src="img/9eebaeb48a4b3d94_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i2">
							<img src="img/1e61f1f4a178b114_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i3">
							<img src="img/6cc14c341339a4ef_-1x-1.jpg" />
							<div></div>
						</a>
					</div>
					<div class="mod-prodlist-c41">
						<ul>
							<li>
								<a class="img" href="#">
									<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" class="cowhite">尼维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r31">
						<h4>大家都在买</h4>
						<ul>
							<li>
								<a href="#">
									<img src="img/logoshop/6037cc7194ce19a7_m.jpg" />
								</a>
								<p class="prod-name">
									<a data-uspm="pd22" href="#" target="_blank">俞兆林 加厚抗风型保暖内衣套装女士套装YZLNHFSF0019</a>
								</p>
								<p class="prod-price"><span>¥<strong>39.00</strong></span>

								</p>
							</li>
							<li>
								<a href="#">
									<img src="img/logoshop/26d13e9c4286b51c_m.jpg" />
								</a>
								<p class="prod-name">
									<a data-uspm="pd22" href="#" target="_blank">俞兆林 加厚抗风型保暖内衣套装女士套装YZLNHFSF0019</a>
								</p>
								<p class="prod-price"><span>¥<strong>119.00</strong></span>

								</p>
							</li>
							<li class="noborder">
								<a href="#">
									<img src="img/logoshop/57ca7f1e3437cb85_m.jpg" />
								</a>
								<p class="prod-name">
									<a data-uspm="pd22" href="#" target="_blank">俞兆林 加厚抗风型保暖内衣套装女士套装YZLNHFSF0019</a>
								</p>
								<p class="prod-price"><span>¥<strong>79.00</strong></span>

								</p>
							</li>
						</ul>
					</div>
					<div class="mod-brandlist">
						<ul>
							<li>
								<a href="#"><img src="img/logo/844477da2bf439e3_-1x-1.jpg" alt="" /> <span>兰芝</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/ae9034568be39d59_-1x-1.jpg" alt="" /><span>曼秀雷敦</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/9e0492f828d2ecbf_-1x-1.jpg" alt="" /><span>阿芙</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/606283c4d379c038_-1x-1.jpg" alt="" /><span>美宝莲</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/d2923afea3dd264a_-1x-1.jpg" alt="" /><span>欧莱雅</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/b08bb94bce36f26d_-1x-1.jpg" alt="" /><span>倍力乐</span></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!--moduel5-->
		<div class="topline">
			<a href="#"><img src="img/360106cf34220bfd_-1x-1.jpg" alt="" /></a>
		</div>
		<!--moduel5-->
		<!--title-->
		<div class="mod-3 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#2c71b2;">魅力男装</strong>
						<span>商场同款 连衣裙打折热卖</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">新款连衣裙</a>
					<a href="#">太阳镜</a>
					<a href="#">珠宝饰品</a>
					<a href="#">雪纺衬衫</a>
					<a href="#">时尚女鞋</a>
					<a href="#">女装内衣</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/a4e8ca9633913bfe_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-piclist-c3 mod-piclist-c3-3">
						<a href="#" class="i1">
							<img src="img/9eebaeb48a4b3d94_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i2">
							<img src="img/1e61f1f4a178b114_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i3">
							<img src="img/6cc14c341339a4ef_-1x-1.jpg" />
							<div></div>
						</a>
					</div>
					<div class="mod-prodlist-c41">
						<ul>
							<li>
								<a class="img" href="#">
									<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" class="cowhite">尼维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r31">
						<h4>大家都在买</h4>
						<ul>
							<li>
								<a href="#">
									<img src="img/logoshop/6037cc7194ce19a7_m.jpg" />
								</a>
								<p class="prod-name">
									<a data-uspm="pd22" href="#" target="_blank">俞兆林 加厚抗风型保暖内衣套装女士套装YZLNHFSF0019</a>
								</p>
								<p class="prod-price"><span>¥<strong>39.00</strong></span>

								</p>
							</li>
							<li>
								<a href="#">
									<img src="img/logoshop/26d13e9c4286b51c_m.jpg" />
								</a>
								<p class="prod-name">
									<a data-uspm="pd22" href="#" target="_blank">俞兆林 加厚抗风型保暖内衣套装女士套装YZLNHFSF0019</a>
								</p>
								<p class="prod-price"><span>¥<strong>119.00</strong></span>

								</p>
							</li>
							<li class="noborder">
								<a href="#">
									<img src="img/logoshop/57ca7f1e3437cb85_m.jpg" />
								</a>
								<p class="prod-name">
									<a data-uspm="pd22" href="#" target="_blank">俞兆林 加厚抗风型保暖内衣套装女士套装YZLNHFSF0019</a>
								</p>
								<p class="prod-price"><span>¥<strong>79.00</strong></span>

								</p>
							</li>
						</ul>
					</div>
					<div class="mod-brandlist">
						<ul>
							<li>
								<a href="#"><img src="img/logo/844477da2bf439e3_-1x-1.jpg" alt="" /> <span>兰芝</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/ae9034568be39d59_-1x-1.jpg" alt="" /><span>曼秀雷敦</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/9e0492f828d2ecbf_-1x-1.jpg" alt="" /><span>阿芙</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/606283c4d379c038_-1x-1.jpg" alt="" /><span>美宝莲</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/d2923afea3dd264a_-1x-1.jpg" alt="" /><span>欧莱雅</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/b08bb94bce36f26d_-1x-1.jpg" alt="" /><span>倍力乐</span></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!--moduel5-->

		<!--moduel4-->
		<!--title-->
		<div class="mod-3 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#d39671;">箱包鞋帽</strong>
						<span>商场同款 连衣裙打折热卖</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">新款连衣裙</a>
					<a href="#">太阳镜</a>
					<a href="#">珠宝饰品</a>
					<a href="#">雪纺衬衫</a>
					<a href="#">时尚女鞋</a>
					<a href="#">女装内衣</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/a4e8ca9633913bfe_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-piclist-c3 mod-piclist-c3-1">
						<a href="#" class="i1">
							<img src="img/9eebaeb48a4b3d94_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i2">
							<img src="img/1e61f1f4a178b114_-1x-1.jpg" />
							<div></div>
						</a>
						<a href="#" class="i3">
							<img src="img/6cc14c341339a4ef_-1x-1.jpg" />
							<div></div>
						</a>
					</div>
					<div class="mod-prodlist-c41">
						<ul>
							<li>
								<a class="img" href="#">
									<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" class="cowhite">尼维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
							<li>
								<a href="#">
									<a class="img" href="#">
										<img src="img/74adbbb7f85ec122_-1x-1.jpg" alt="" />
									</a>
									<p class="prod-name">
										<a href="#" class="cowhite">维雅男士控油冰极矿物炭洁面泥100g+50克套装 妮维雅盒套盒 极酷冰爽</a>
									</p>
									<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-speclist">
						<div class="slide-main">
							<ul class="slide-items slid-ul2">
								<li>
									<a href="#">
										<img src="img/littlelinbo/288c3faf719db7b4_-1x-1.jpg" />
										<strong>韩束</strong>
										<span>金盏花润乳液30ml</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/littlelinbo/7442aa895bd55efd_-1x-1.jpg" />
										<strong>甜蜜爱人香水</strong>
										<span>持久淡香30ml</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/littlelinbo/45249d5b1990debb_-1x-1.jpg" />
										<strong>曼秀雷敦</strong>
										<span>控油清爽50g</span>
									</a>
								</li>
							</ul>
							<div class="slide-quote"></div>

						</div>
						<div class="slide-index slide-index-2">
							<a href="#" class="active">
								<img src="img/littlelinbo/288c3faf719db7b4_-1x-1.jpg" />
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/7442aa895bd55efd_-1x-1.jpg" />
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/45249d5b1990debb_-1x-1.jpg" />
								<i></i>
							</a>
						</div>
					</div>
					<div class="mod-brandlist">
						<ul>
							<li>
								<a href="#"><img src="img/logo/844477da2bf439e3_-1x-1.jpg" alt="" /> <span>兰芝</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/ae9034568be39d59_-1x-1.jpg" alt="" /><span>曼秀雷敦</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/9e0492f828d2ecbf_-1x-1.jpg" alt="" /><span>阿芙</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/606283c4d379c038_-1x-1.jpg" alt="" /><span>美宝莲</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/d2923afea3dd264a_-1x-1.jpg" alt="" /><span>欧莱雅</span></a>
							</li>
							<li>
								<a href="#"><img src="img/logo/b08bb94bce36f26d_-1x-1.jpg" alt="" /><span>倍力乐</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--moduel4-->
		<!--moduel3-->
		<!--title-->
		<div class="mod-2 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#f75d59;">母婴玩具</strong>
						<span>美的电饭煲  蒸煮烹饪神器</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">空气净化器</a>
					<a href="#">电风扇</a>
					<a href="#">个户健康</a>
					<a href="#">生活电器</a>
					<a href="#">声波牙刷</a>
					<a href="#">扫地机器人</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/0a9e9e441a337f6b_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="col-42">
						<ul>
							<li>
								<a class="prod-img" href="#">
									<img src="img/img1/28bd3ff6f54f1a1a_-1x-1.jpg" alt="" />
								</a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Midea/美的 电水壶 MK-HP1703 1.7L热水壶 不锈钢内壁 按键恒温</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/42a78f3b401b45e3_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/6a82f8ce6914fce8_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/881b9e864a548c93_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/bdda93f24e2f2bd9_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/28bd3ff6f54f1a1a_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/42a78f3b401b45e3_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img"><img src="img/img1/881b9e864a548c93_-1x-1.jpg" alt="" /></a>
								<p class="prod-name">
									<a href="#" target="_blank" class="cowhite">Le/乐视 乐2（X620）32GB 移动联通电信4G手机 双卡双待(金色)</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>1088.00</strong></span><del>¥1499.00</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r5">
						<h4>热销榜单</h4>
						<ul>
							<li class="i1">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>1</label>
							</li>
							<li class="i2">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>2</label>
							</li>
							<li class="i3">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>3</label>
							</li>
							<li class="i4">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>4</label>
							</li>
							<li class="i5">
								<a href="#" class="prod-img">
									<img src="img/img1/d9945af94486a6bd_m.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">亿捷移动电源P5200R</a>
								</p>
								<p class="prod-price"><span>¥<strong>88.00</strong></span><del>¥159.00</del></p>
								<label>5</label>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<!--moduel3-->
		<div class="topline">
			<a href="#"><img src="img/19864270404744f3_-1x-1.jpg" alt="" /></a>
		</div>
		<!--moduel6-->
		<div class="mod-6 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#ef8e96;">家居/厨卫</strong>
						<span>100%纯棉 可以裸睡的床单</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">晴雨伞</a>
					<a href="#">床上用品</a>
					<a href="#">凉席</a>
					<a href="#">厨房用品</a>
					<a href="#">纸品</a>
					<a href="#">空调被</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/3188146e6ae02c80_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-prodlist-c4">
						<ul>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r2">
						<ul>
							<li class="i1">
								<a href="#" class="prod-img">
									<img src="img/r2-1.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">超能洗衣液植萃低泡2.5kg赠送1kg超能洗衣液</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li class="i2">
								<a href="#" class="prod-img">
									<img src="img/r2-1.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">超能洗衣液植萃低泡2.5kg赠送1kg超能洗衣液</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--moduel6-->
		<div class="mod-6 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#41aadf;">运动/汽配</strong>
						<span>跑步鞋品牌当季上新</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">健身训练</a>
					<a href="#">运动包</a>
					<a href="#">跑步鞋</a>
					<a href="#">运动鞋服</a>
					<a href="#">休闲户外</a>
					<a href="#">运动配件</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/3188146e6ae02c80_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-prodlist-c4">
						<ul>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r2">
						<ul>
							<li class="i1">
								<a href="#" class="prod-img">
									<img src="img/r2-1.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">超能洗衣液植萃低泡2.5kg赠送1kg超能洗衣液</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li class="i2">
								<a href="#" class="prod-img">
									<img src="img/r2-1.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">超能洗衣液植萃低泡2.5kg赠送1kg超能洗衣液</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--moduel6-->
		<div class="mod-6 channel louceng">
			<div class="title">
				<h3>
					<a class="img " href="#">
						<strong class="color" style="color:#fb5d38;">食品/保健品</strong>
						<span>进口好货 饼干全球爆款</span>
					</a>
				</h3>
				<p class="list">
					<a href="#">粮油生鲜</a>
					<a href="#">休闲食品</a>
					<a href="#">冲饮麦片</a>
					<a href="#">鼎级白酒</a>
					<a href="#">糖果巧克力</a>
					<a href="#">红枣钜惠</a>
					<a class="more" href="#"></a>
				</p>
			</div>
			<!--title-->
			<div class="grid-lmr">
				<div class="col-left">
					<a href="#">
						<img src="img/3188146e6ae02c80_-1x-1.jpg" />
					</a>
				</div>
				<div class="col-main">
					<div class="mod-prodlist-c4">
						<ul>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li>
								<a href="#" class="prod-img">
									<img src="img/11.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 50cm*55cm*0.01mm*10卷 E洁 垃圾袋 中号清洁袋 自动收口 家用厨房抽绳15个/卷 </a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-right">
					<div class="mod-prodlist-r2">
						<ul>
							<li class="i1">
								<a href="#" class="prod-img">
									<img src="img/r2-1.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">超能洗衣液植萃低泡2.5kg赠送1kg超能洗衣液</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
							<li class="i2">
								<a href="#" class="prod-img">
									<img src="img/r2-1.jpg" />
								</a>
								<p class="prod-name">
									<a href="#">超能洗衣液植萃低泡2.5kg赠送1kg超能洗衣液</a>
								</p>
								<p class="prod-price">
									<span>¥<strong>39.80</strong></span><del>¥69.30</del>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!--top-line-->
		<div class="topline">
			<a href="#">
				<img src="img/e58147044e43b216_-1x-1.jpg" alt="" />
			</a>
		</div>
		<!--top-line-->
		<!--floor-start-->
		<div id="floatTool" class="fix-bottom-10"  status="show">
			<a  class="f01" title="前往 1F 各地特产"><span>1F</span><label>各地特产</label></a>
			<a  class="f02" title="前往 2F 手机数码"><span>2F</span><label>手机数码</label></a>
			<a  class="f03" title="前往 3F 家用电器"><span>3F</span><label>家用电器</label></a>
			<a  class="f04" title="前往 4F 美妆洗护"><span>4F</span><label>美妆洗护</label></a>
			<a  class="f05" title="前往 5F 女装饰品"><span>5F</span><label>女装饰品</label></a>
			<a  class="f06" title="前往 6F 魅力男装"><span>6F</span><label>魅力男装</label></a>
			<a  class="f07" title="前往 7F 箱包鞋帽"><span>7F</span><label>箱包鞋帽</label></a>
			<a  class="f08" title="前往 8F 母婴玩具"><span>8F</span><label>母婴玩具</label></a>
			<a  class="f09" title="前往 9F 家居厨卫"><span>9F</span><label>家居厨卫</label></a>
			<a  class="f10" title="前往 10F 运动汽配"><span>10F</span><label>运动汽配</label></a>
			<a  class="f11" title="前往 11F 食品保健"><span>11F</span><label>食品保健</label></a>
			<a  class="returntop" title="返回顶部"></a>
		</div>
		<!--floor-end-->
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