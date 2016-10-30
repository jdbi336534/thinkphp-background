<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="/thinkphp3.2.3/Public/img/favicon.ico" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/reset.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/style.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/list.css" />
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/jquery-3.1.0.min.js"></script>
		<!--[if IE]>
		<script src="/thinkphp3.2.3/Public/js/jquery-1.10.1.min.js"></script>
	    <![endif]-->
	    <script type="text/javascript" src="/thinkphp3.2.3/Public/js/jQueryRotate.2.2.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/globle.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/angular.min.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/list.js"></script>
		<script type="text/javascript">
		</script>
	</head>

	<body class="w1280" data-ng-app="myApp" ng-controller="myCtrl">
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
				<div class="head-shopcart" data-uspm-id="1.1.1_C2014.104.0.1" data-uspm-count="0|1">
					<a href="/thinkphp3.2.3/index.php/Home/Index/opencart"><span class="shopcart-sum" style="display:block;">购物车<span class="shopcart-num">{{manycart}}</span></span></a>
					<s></s>
					<ul class="shopcart-list" style="display: none;">
						<li class="list-empty">您购物车里还没有任何宝贝，快来挑选吧</li>
					</ul>
				</div>
				<div class="head-search">
					<form id="headerSearch" name="headerSearch" action="http://search.ule.com/search.do" target="_blank" autocomplete="off">
						<input type="hidden" name="uspm" data-uspm-id="1.1.121_L1488262_T148826201_S10078_M800110948.102.{0}.1">
						<input type="hidden" name="srcid">
						<input type="hidden" name="storeId" class="e-loadevt" data-onload="this.value=window.storeId;" value="10078">
						<input type="text" name="keywords" class="txt-keyword" style="color: rgb(153, 153, 153);">
						<button type="submit" class="btn-search">搜索</button>
						<button type="submit" class="btn-searchstore" data-url="http://store.ule.com/searchCondition.do">搜索本店</button>
					</form>
					<ul class="search-suggest" style="display: none;"></ul>
					<p class="search-hotkeys" data-uspm="103" srcid="recommendKeywords_{d3}">
						<a href="http://store.ule.com/store/9269.html" target="_blank">
							<font color="red">新乡馆</font>
						</a>
						<a href="#" target="_blank">猕猴桃</a>
						<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E7%BE%8E%E7%99%BD%E9%9D%A2%E8%86%9C.1&amp;srcid=searchkeywords_%E7%BE%8E%E7%99%BD%E9%9D%A2%E8%86%9C&amp;keywords=%E7%BE%8E%E7%99%BD%E9%9D%A2%E8%86%9C" target="_blank">美白面膜</a>
						<a href="http://search.ule.com/search.do?keywords=%E8%96%AF%E7%89%87" target="_blank">
							<font color="red">薯片</font>
						</a>
						<a href="http://store.ule.com/store/7868.html" target="_blank">旺旺食品</a>
						<a href="http://search.ule.com/search.do?keywords=%E7%BA%B8%E5%B7%BE" target="_blank">纸巾</a>
						<a href="http://search.ule.com/search.do?uspm=1.1.103_O99_P1.102.%E4%B9%A6%E5%8C%85.1&amp;srcid=searchkeywords_%E4%B9%A6%E5%8C%85&amp;keywords=%E4%B9%A6%E5%8C%85" target="_blank">
							<font color="red">学生书包</font>
						</a>
						<a href="http://search.ule.com/search.do?uspm=1.1.1_V2014.102.%E6%9C%88%E9%A5%BC.1&amp;srcid=searchkeywords_%E6%9C%88%E9%A5%BC&amp;keywords=%E6%9C%88%E9%A5%BC" target="_blank">中秋月饼</a>
						<a href="http://shuma.ule.com/28032359-shoujitongxun--8631-pingguoAPPLE------0-1.html?uspm=1.1.103_C28032359_O0_P1.1033.15.1" target="_blank">
							<font color="red">苹果手机</font>
						</a>
						<a href="http://search.ule.com/search.do?uspm=1.1.1_C2014.102.%E8%A1%8C%E8%BD%A6%E8%AE%B0%E5%BD%95%E4%BB%AA.1&amp;srcid=searchkeywords_%E8%A1%8C%E8%BD%A6%E8%AE%B0%E5%BD%95%E4%BB%AA&amp;keywords=%E8%A1%8C%E8%BD%A6%E8%AE%B0%E5%BD%95%E4%BB%AA" target="_blank">
							<font color="red">行车记录仪</font>
						</a>
					</p>
				</div>

			</div>

		</div>
		<!--head-check-end-->
		<div class="w">

			<div id="J_crumbsBar" class="crumbs-bar">
				<div class="crumbs-nav">
					<div class="crumbs-nav-main clearfix">
						<div class="crumbs-nav-item">
							<div class="crumbs-first">
								<a href="#">全部结果</a>
							</div>
						</div>
						<i class="crumbs-arrow">&gt;</i>
						<div class="crumbs-nav-item">
							<strong class="search-key">"车载充电器头"</strong>
						</div>
					</div>
				</div>
			</div>
			<div id="J_container" class="container">
				<div id="J_selector" class="selector">
					<div class="J_selectorLine s-brand">
						<div class="sl-wrap">
							<div class="sl-key"><strong>品牌：</strong></div>
							<div class="sl-value">
								<!--<ul class="sl-b-letter J_brandLetter" onclick="searchlog(1,0,0,48)">
									<li data-initial="0" class="curr">所有品牌</li>
									<li data-initial="a">A</li>
									<li data-initial="b">B</li>
									<li data-initial="c">C</li>
									<li data-initial="d">D</li>
									<li data-initial="e">E</li>
									<li data-initial="f">F</li>
									<li data-initial="g">G</li>
									<li data-initial="h">H</li>
									<li data-initial="i">I</li>
									<li data-initial="j">J</li>
									<li data-initial="k">K</li>
									<li data-initial="l">L</li>
									<li data-initial="m">M</li>
									<li data-initial="n">N</li>
									<li data-initial="o">O</li>
									<li data-initial="p">P</li>
									<li data-initial="q">Q</li>
									<li data-initial="r">R</li>
									<li data-initial="s">S</li>
									<li data-initial="t">T</li>
									<li data-initial="u">U</li>
									<li data-initial="v">V</li>
									<li data-initial="w">W</li>
									<li data-initial="x">X</li>
									<li data-initial="y">Y</li>
									<li data-initial="z">Z</li>
									<li data-initial="other">其它</li>
								</ul>
								<div class="sl-b-search J_brandSearch">
									<i></i><input type="text" class="input-txt placehoder" data-placehoder="可输入拼音、汉字查找品牌">
								</div>
								<div class="clr"></div>-->
								<div class="sl-v-list">
									<ul class="J_valueList v-fixed">
										<li id="brand-18139" data-initial="x" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E5%85%88%E7%A7%91%EF%BC%88SAST%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,0,71,'品牌::先科（SAST）')" title="先科（SAST）">
												<i></i>先科（SAST） </a>
										</li>
										<li id="brand-156949" data-initial="n" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%BA%BD%E7%A6%8F%E5%85%8B%E6%96%AF%EF%BC%88NFA%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,1,71,'品牌::纽福克斯（NFA）')" title="纽福克斯（NFA）">
												<i></i>纽福克斯（NFA） </a>
										</li>
										<li id="brand-151513" data-initial="y" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E8%8B%B1%E6%89%8D%E6%98%9F%EF%BC%88HSC%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,2,71,'品牌::英才星（HSC）')" title="英才星（HSC）">
												<i></i>英才星（HSC） </a>
										</li>
										<li id="brand-6742" data-initial="f" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E9%A3%9E%E5%88%A9%E6%B5%A6%EF%BC%88PHILIPS%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,3,71,'品牌::飞利浦（PHILIPS）')" title="飞利浦（PHILIPS）">
												<i></i>飞利浦（PHILIPS） </a>
										</li>
										<li id="brand-29553" data-initial="n" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%BA%BD%E6%9B%BC%EF%BC%88Newman%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,4,71,'品牌::纽曼（Newman）')" title="纽曼（Newman）">
												<i></i>纽曼（Newman） </a>
										</li>
										<li id="brand-150398" data-initial="k" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E5%8D%A1%E5%84%BF%E9%85%B7%EF%BC%88CARKU%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,5,71,'品牌::卡儿酷（CARKU）')" title="卡儿酷（CARKU）">
												<i></i>卡儿酷（CARKU） </a>
										</li>
										<li id="brand-15127" data-initial="s" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E4%B8%89%E6%98%9F%EF%BC%88SAMSUNG%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,6,71,'品牌::三星（SAMSUNG）')" title="三星（SAMSUNG）">
												<i></i>三星（SAMSUNG） </a>
										</li>
										<li id="brand-6041" data-initial="d" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%99%BB%E8%B7%AF%E6%99%AE%EF%BC%88DUNLOP%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,7,71,'品牌::登路普（DUNLOP）')" title="登路普（DUNLOP）">
												<i></i>登路普（DUNLOP） </a>
										</li>
										<li id="brand-4096" data-initial="b" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%99%BE%E4%BA%8B%E6%B3%B0%EF%BC%88BESTEK%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,8,71,'品牌::百事泰（BESTEK）')" title="百事泰（BESTEK）">
												<i></i>百事泰（BESTEK） </a>
										</li>
										<li id="brand-12836" data-initial="m" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%B1%B3%E5%85%B6%E6%9E%97%EF%BC%88MICHELIN%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,9,71,'品牌::米其林（MICHELIN）')" title="米其林（MICHELIN）">
												<i></i>米其林（MICHELIN） </a>
										</li>
										<li id="brand-111186" data-initial="n" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%BA%BD%E6%9B%BC%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,10,71,'品牌::纽曼')" title="纽曼">
												<i></i>纽曼 </a>
										</li>
										<li id="brand-14006" data-initial="p" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E5%93%81%E8%83%9C%EF%BC%88PISEN%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,11,71,'品牌::品胜（PISEN）')" title="品胜（PISEN）">
												<i></i>品胜（PISEN） </a>
										</li>
										<li id="brand-150502" data-initial="a" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E5%A5%A5%E8%88%92%E5%B0%94%EF%BC%88OZIO%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,12,71,'品牌::奥舒尔（OZIO）')" title="奥舒尔（OZIO）">
												<i></i>奥舒尔（OZIO） </a>
										</li>
										<li id="brand-19063" data-initial="y" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E6%B2%BF%E9%80%94%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,13,71,'品牌::沿途')" title="沿途">
												<i></i>沿途 </a>
										</li>
										<li id="brand-18177" data-initial="x" style="display:block;">
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exbrand_%E7%8E%B0%E4%BB%A3%EF%BC%88HYUNDAI%EF%BC%89%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,14,71,'品牌::现代（HYUNDAI）')" title="现代（HYUNDAI）">
												<i></i>现代（HYUNDAI） </a>
										</li>
										
										
									</ul>
								</div>
								<div class="sl-b-selected J_brandSelected" style="display: none;"><span class="sl-b-key">已选条件：</span>
									<ul class="sl-v-list brand-selected"></ul>
								</div>
								<!--<div class="sl-btns">
									<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
									<a class="btn btn-default J_btnsCancel" href="javascript:;">取消</a>
								</div>-->
							</div>
							<div class="sl-ext" style="display: block;">
								<a class="sl-e-more J_extMore" href="javascript:;" style="visibility: visible;">更多<i class="arrow"></i></a>
								<a class="sl-e-multiple J_extMultiple" href="javascript:;">多选<i></i></a>
							</div>
						</div>
					</div>
					<div class="J_selectorLine s-category">
						<div class="sl-wrap">
							<div class="sl-key"><strong>车载电器：</strong></div>
							<div class="sl-value">
								<div class="sl-v-list">
									<ul class="J_valueList">
										<li>
											<a title="电源" data-v="6749" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=6749#J_crumbsBar" onclick="searchlog(1,6749,10000,51)"><i></i>电源</a>
										</li>
										<li>
											<a title="车载影音" data-v="6965" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=6965#J_crumbsBar" onclick="searchlog(1,6965,10001,51)"><i></i>车载影音</a>
										</li>
										<li>
											<a title="车载电器配件" data-v="13247" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=13247#J_crumbsBar" onclick="searchlog(1,13247,10002,51)"><i></i>车载电器配件</a>
										</li>
										<li>
											<a title="行车记录仪" data-v="6964" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=6964#J_crumbsBar" onclick="searchlog(1,6964,10003,51)"><i></i>行车记录仪</a>
										</li>
										<li>
											<a title="车载生活电器" data-v="13250" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=13250#J_crumbsBar" onclick="searchlog(1,13250,10004,51)"><i></i>车载生活电器</a>
										</li>
										<li>
											<a title="蓝牙设备" data-v="9962" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=9962#J_crumbsBar" onclick="searchlog(1,9962,10005,51)"><i></i>蓝牙设备</a>
										</li>
										<li>
											<a title="净化器" data-v="6807" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=6807#J_crumbsBar" onclick="searchlog(1,6807,10006,51)"><i></i>净化器</a>
										</li>
										<li class="no-relate-cat">
											<a title="吸尘器" data-v="6752" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=6752#J_crumbsBar" onclick="searchlog(1,6752,10007,51)"><i></i>吸尘器</a>
										</li>
										<li class="no-relate-cat">
											<a title="导航仪" data-v="11867" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=11867#J_crumbsBar" onclick="searchlog(1,11867,10008,51)"><i></i>导航仪</a>
										</li>
										<li class="no-relate-cat">
											<a title="冰箱" data-v="6753" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=6753#J_crumbsBar" onclick="searchlog(1,6753,10009,51)"><i></i>冰箱</a>
										</li>
									</ul>
								</div>
								<!--<div class="sl-btns">
									<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
									<a class="btn btn-default J_btnsCancel" href="javascript:;">取消</a>
								</div>-->
							</div>
							<div class="sl-ext">
								<a class="sl-e-more J_extMore" href="javascript:;" style="visibility: visible;">更多<i class="arrow"></i></a>
								<a class="sl-e-multiple J_extMultiple" href="javascript:;" style="visibility: hidden;">多选<i></i></a>
							</div>
						</div>
					</div>
					<div class="J_selectorLine s-category">
						<div class="sl-wrap">
							<div class="sl-key"><strong>手机配件：</strong></div>
							<div class="sl-value">
								<div class="sl-v-list">
									<ul class="J_valueList">
										<li>
											<a title="充电器" data-v="13660" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=13660#J_crumbsBar" onclick="searchlog(1,13660,20000,51)"><i></i>充电器</a>
										</li>
										<li>
											<a title="车载配件" data-v="864" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=864#J_crumbsBar" onclick="searchlog(1,864,20001,51)"><i></i>车载配件</a>
										</li>
										<li>
											<a title="数据线" data-v="13661" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=13661#J_crumbsBar" onclick="searchlog(1,13661,20002,51)"><i></i>数据线</a>
										</li>
										<li>
											<a title="移动电源" data-v="13658" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=13658#J_crumbsBar" onclick="searchlog(1,13658,20003,51)"><i></i>移动电源</a>
										</li>
										<li>
											<a title="拍照配件" data-v="12809" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=12809#J_crumbsBar" onclick="searchlog(1,12809,20004,51)"><i></i>拍照配件</a>
										</li>
										<li>
											<a title="手机支架" data-v="12811" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=12811#J_crumbsBar" onclick="searchlog(1,12811,20005,51)"><i></i>手机支架</a>
										</li>
										<li>
											<a title="创意配件" data-v="868" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=868#J_crumbsBar" onclick="searchlog(1,868,20006,51)"><i></i>创意配件</a>
										</li>
										<li class="no-relate-cat">
											<a title="苹果周边" data-v="13659" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=13659#J_crumbsBar" onclick="searchlog(1,13659,20007,51)"><i></i>苹果周边</a>
										</li>
										<li class="no-relate-cat">
											<a title="iPhone 配件" data-v="5003" href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=5003#J_crumbsBar" onclick="searchlog(1,5003,20008,51)"><i></i>iPhone 配件</a>
										</li>
									</ul>
								</div>
								<!--<div class="sl-btns">
									<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
									<a class="btn btn-default J_btnsCancel" href="javascript:;">取消</a>
								</div>-->
							</div>
							<div class="sl-ext">
								<a class="sl-e-more J_extMore" href="javascript:;" style="visibility: visible;">更多<i class="arrow"></i></a>
								<a class="sl-e-multiple J_extMultiple" href="javascript:;" style="visibility: hidden;">多选<i></i></a>
							</div>
						</div>
					</div>
					<div class="J_selectorLine s-line">
						<div class="sl-wrap">
							<div class="sl-key"><span>类型：</span></div>
							<div class="sl-value">
								<div class="sl-v-list">
									<ul class="J_valueList">
										<li>
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3184_10622%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,30000,71,'类型::充电插头')"><i></i>充电插头</a>
										</li>
										<li>
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3184_10623%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,30001,71,'类型::线充套装')"><i></i>线充套装</a>
										</li>
										<li>
											<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3184_40465%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,30002,71,'类型::车载充电器')"><i></i>车载充电器</a>
										</li>
									</ul>
								</div>
								<!--<div class="sl-btns">
									<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
									<a class="btn btn-default J_btnsCancel" href="javascript:;">取消</a>
								</div>-->
							</div>
							<div class="sl-ext">
								<a class="sl-e-more J_extMore" href="javascript:;" style="visibility: hidden;">更多<i></i></a>
								<a class="sl-e-multiple J_extMultiple" href="javascript:;" style="visibility: hidden;">多选<i></i></a>
							</div>
						</div>
					</div>
					<div id="J_selectorSenior" class="J_selectorLine s-line s-senior">
						<div class="sl-wrap">
							<div class="sl-key"><span>高级选项：</span></div>
							<div class="sl-value">
								<div class="sl-v-tab">
									<div class="sl-tab-trigger clearfix">
										<a class="trig-item" href="javascript:;"><span class="text">价格</span><i class="arrow"></i></a>
										<a class="trig-item" href="javascript:;"><span class="text">适用手机品牌</span><i class="arrow"></i></a>
										<a class="trig-item" href="javascript:;"><span class="text">USB输出电流</span><i class="arrow"></i></a>
										<a class="trig-item" href="javascript:;"><span class="text">输出功率</span><i class="arrow"></i></a>
										<a class="trig-item" href="javascript:;"><span class="text">其他分类</span><i class="arrow"></i></a>
									</div>
								</div>
							</div>
							<div class="sl-tab-cont">
								<div class="sl-tab-cont-item" style="display: none;">
									<div class="sl-v-list">
										<ul class="J_valueList clearfix">
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exprice_0-39%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,40000,71,'价格::0-39')"><i></i>0-39</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exprice_40-79%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,40001,71,'价格::40-79')"><i></i>40-79</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exprice_80-199%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,40002,71,'价格::80-199')"><i></i>80-199</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exprice_200-399%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,40003,71,'价格::200-399')"><i></i>200-399</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exprice_400-699%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,40004,71,'价格::400-699')"><i></i>400-699</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=exprice_700gt%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,40005,71,'价格::700以上')"><i></i>700以上</a>
											</li>
										</ul>
									</div>
									<!--<div class="sl-btns">
										<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
										<a class="btn btn-default J_tabCancel" href="javascript:;">取消</a>
									</div>-->
								</div>
								<div class="sl-tab-cont-item" style="display: none;">
									<div class="sl-v-list">
										<ul class="J_valueList clearfix">
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3966_39206%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,50000,71,'适用手机品牌::苹果')"><i></i>苹果</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3966_19343%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,50001,71,'适用手机品牌::通用')"><i></i>通用</a>
											</li>
										</ul>
										<a class="btn-multiple J_tabMultiple" href="javascript:;" style="visibility: hidden;">多选<i></i></a>
									</div>
									<!--<div class="sl-btns">
										<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
										<a class="btn btn-default J_tabCancel" href="javascript:;">取消</a>
									</div>-->
								</div>
								<div class="sl-tab-cont-item" style="display: none;">
									<div class="sl-v-list">
										<ul class="J_valueList clearfix">
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=2806_33575%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,60000,71,'USB输出电流::500-800mA')"><i></i>500-800mA</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=2806_33574%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,60001,71,'USB输出电流::1000mA（适用智能手机充电）')"><i></i>1000mA（适用智能手机充电）</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=2806_33576%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,60002,71,'USB输出电流::2100mA（适用平板电脑充电）')"><i></i>2100mA（适用平板电脑充电）</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=2806_70081%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,60003,71,'USB输出电流::2100mA以上')"><i></i>2100mA以上</a>
											</li>
										</ul>
										<a class="btn-multiple J_tabMultiple" href="javascript:;">多选<i></i></a>
									</div>
									<!--<div class="sl-btns">
										<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
										<a class="btn btn-default J_tabCancel" href="javascript:;">取消</a>
									</div>-->
								</div>
								<div class="sl-tab-cont-item" style="display: none;">
									<div class="sl-v-list">
										<ul class="J_valueList clearfix">
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3369_33577%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,70000,71,'输出功率::0-150W')"><i></i>0-150W</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;ev=3369_33578%40&amp;uc=0#J_crumbsBar" rel="nofollow" onclick="searchlog(1,0,70001,71,'输出功率::150-500W')"><i></i>150-500W</a>
											</li>
										</ul>
										<a class="btn-multiple J_tabMultiple" href="javascript:;" style="visibility: hidden;">多选<i></i></a>
									</div>
									<!--<div class="sl-btns">
										<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
										<a class="btn btn-default J_tabCancel" href="javascript:;">取消</a>
									</div>-->
								</div>
								<div class="sl-tab-cont-item" style="display: none;">
									<div class="sl-v-list">
										<ul class="J_valueList clearfix">
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=877#J_crumbsBar" rel="nofollow" data-v="877" onclick="searchlog(1,877,80000,51)"><i></i>家电配件</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=12370#J_crumbsBar" rel="nofollow" data-v="12370" onclick="searchlog(1,12370,80001,51)"><i></i>网络配件</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=6747#J_crumbsBar" rel="nofollow" data-v="6747" onclick="searchlog(1,6747,80002,51)"><i></i>安全自驾</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=6745#J_crumbsBar" rel="nofollow" data-v="6745" onclick="searchlog(1,6745,80003,51)"><i></i>汽车装饰</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=5146#J_crumbsBar" rel="nofollow" data-v="5146" onclick="searchlog(1,5146,80004,51)"><i></i>平板电脑配件</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=675#J_crumbsBar" rel="nofollow" data-v="675" onclick="searchlog(1,675,80005,51)"><i></i>笔记本配件</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=1462#J_crumbsBar" rel="nofollow" data-v="1462" onclick="searchlog(1,1462,80006,51)"><i></i>户外装备</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid3=1655#J_crumbsBar" rel="nofollow" data-v="1655" onclick="searchlog(1,1655,80007,51)"><i></i>收纳用品</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=2599#J_crumbsBar" rel="nofollow" data-v="2599" onclick="searchlog(1,2599,80008,51)"><i></i>礼品</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=6742#J_crumbsBar" rel="nofollow" data-v="6742" onclick="searchlog(1,6742,80009,51)"><i></i>维修保养</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=6743#J_crumbsBar" rel="nofollow" data-v="6743" onclick="searchlog(1,6743,80010,51)"><i></i>美容清洗</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=653#J_crumbsBar" rel="nofollow" data-v="653" onclick="searchlog(1,653,80011,51)"><i></i>手机通讯</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=12115#J_crumbsBar" rel="nofollow" data-v="12115" onclick="searchlog(1,12115,80012,51)"><i></i>骑行运动</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=12147#J_crumbsBar" rel="nofollow" data-v="12147" onclick="searchlog(1,12147,80013,51)"><i></i>垂钓用品</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=12102#J_crumbsBar" rel="nofollow" data-v="12102" onclick="searchlog(1,12102,80014,51)"><i></i>运动服饰</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=11158#J_crumbsBar" rel="nofollow" data-v="11158" onclick="searchlog(1,11158,80015,51)"><i></i>家装软饰</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=2575#J_crumbsBar" rel="nofollow" data-v="2575" onclick="searchlog(1,2575,80016,51)"><i></i>潮流女包</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=2577#J_crumbsBar" rel="nofollow" data-v="2577" onclick="searchlog(1,2577,80017,51)"><i></i>功能箱包</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=829#J_crumbsBar" rel="nofollow" data-v="829" onclick="searchlog(1,829,80018,51)"><i></i>数码配件</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=828#J_crumbsBar" rel="nofollow" data-v="828" onclick="searchlog(1,828,80019,51)"><i></i>影音娱乐</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=12345#J_crumbsBar" rel="nofollow" data-v="12345" onclick="searchlog(1,12345,80020,51)"><i></i>智能设备</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=654#J_crumbsBar" rel="nofollow" data-v="654" onclick="searchlog(1,654,80021,51)"><i></i>摄影摄像</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=686#J_crumbsBar" rel="nofollow" data-v="686" onclick="searchlog(1,686,80022,51)"><i></i>外设产品</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=9859#J_crumbsBar" rel="nofollow" data-v="9859" onclick="searchlog(1,9859,80023,51)"><i></i>电工电料</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=9856#J_crumbsBar" rel="nofollow" data-v="9856" onclick="searchlog(1,9856,80024,51)"><i></i>灯饰照明</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=6235#J_crumbsBar" rel="nofollow" data-v="6235" onclick="searchlog(1,6235,80025,51)"><i></i>遥控/电动</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=1276#J_crumbsBar" rel="nofollow" data-v="1276" onclick="searchlog(1,1276,80026,51)"><i></i>个护健康</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=1528#J_crumbsBar" rel="nofollow" data-v="1528" onclick="searchlog(1,1528,80027,51)"><i></i>童车童床</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=9110#J_crumbsBar" rel="nofollow" data-v="9110" onclick="searchlog(1,9110,80028,51)"><i></i>周边产品</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=9197#J_crumbsBar" rel="nofollow" data-v="9197" onclick="searchlog(1,9197,80029,51)"><i></i>保健器械</a>
											</li>
											<li>
												<a href="search?keyword=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8%E5%A4%B4&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;vt=2&amp;sttr=1&amp;offset=1&amp;suggest=1.def.0.regular&amp;wq=%E8%BD%A6%E8%BD%BD%E5%85%85%E7%94%B5%E5%99%A8&amp;cid2=11730#J_crumbsBar" rel="nofollow" data-v="11730" onclick="searchlog(1,11730,80030,51)"><i></i>流行男鞋</a>
											</li>
										</ul>
									</div>
									<!--<div class="sl-btns">
										<a class="btn btn-primary J_btnsConfirm disabled" href="javascript:;">确定</a>
										<a class="btn btn-default J_tabCancel" href="javascript:;">取消</a>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="J_main" class="g-main2" data-lazy-img-install="1">
					<div class="m-list">
						<div class="ml-wrap">
							<div id="J_filter" class="filter">
								<div class="f-line top">
									<div class="f-sort">
										<a href="javascript:;" class="curr" >综合排序<i></i></a>
										<a href="javascript:;" class="" >销量<i></i></a>
										<a href="javascript:;" class="" >价格<i></i></a>
										<a href="javascript:;" class="" >评论数<i></i></a>
										<a href="javascript:;" class="" >新品<i></i></a>
									</div>
									<div class="f-search">
										<input type="text" value="在结果中搜索" class="input-txt">
										<a  class="btn btn-default"  href="javascript:;">确定</a>
									</div>
									<div id="J_topPage" class="f-pager"><span class="fp-text"><b>1</b><em>/</em><i>40</i></span>
										<a class="fp-prev disabled" href="javascript:;">&lt;</a>
										<a class="fp-next" onclick="SEARCH.page(3)" href="javascript:;" title="使用方向键右键也可翻到下一页哦！">&gt;</a>
									</div>
									<div class="f-result-sum">共<span id="J_resCount" class="num">2397</span>件商品</div>
									<span class="clr"></span>
								</div>
								<div class="f-line">
									<div class="f-store">
										<div class="fs-cell delivery-location">配送至</div>
										<div id="store-selector" class="">
											<div class="text">北京朝阳区管庄<b></b></div>
											<div class="content">
												<div data-widget="tabs" class="m JD-stock">
													<div class="mt">
														
														<div class="stock-line"></div>
													</div>
													
													<div class="mc" data-area="3" data-widget="tab-content"></div>
												</div><span class="clr"></span></div>
											<div class="close" ></div>
										</div>
									</div>
									<div id="J_feature" class="f-feature">
										<ul>
											<li>
												<a data-field="wtype" data-val="1" class="" href="javascript:;" onclick="searchlog(1,0,0,43)"><i></i>邮乐配送</a>
											</li>
											<li>
												<a data-field="cod" data-val="1" class="" href="javascript:;" onclick="searchlog(1,0,0,34)"><i></i>货到付款</a>
											</li>
											<li>
												<a data-field="stock" data-val="1" class="" href="javascript:;" onclick="searchlog(1,0,0,41)"><i></i>仅显示有货</a>
											</li>
										</ul>
									</div>
									<div id="J_viewType" class="f-type" data-ref="1">
										<a class="ft-item shop" href="javascript:;" data-value="3"><i class="i-shop"></i>店铺</a>
										<a class="ft-item grid selected" href="javascript:;" data-value="2"><i class="i-grid"></i>商品</a>
									</div>
									<span class="clr"></span>
								</div>
							</div>
							<div id="J_goodsList" class="goods-list-v2 gl-type-3 J-goods-list" >
								<ul class="gl-warp clearfix" ng-if="flag">
									<!--商品列表-->
									<li  class="gl-item" data-ng-repeat="x in categorie">
										<div class="gl-i-wrap">
											<div class="p-img">
												<a target="_blank" href="/thinkphp3.2.3/index.php/Home/Index/openinfo" title="全店满49元起顺丰包邮 让订单飞到您的手里 详询客服">
													<img width="220" height="220" class="err-product"  ng-src="/thinkphp3.2.3/Public/{{x.prdimgsrc}}">
												</a>
												<div ></div>
											</div>
											<div class="p-price">
												<strong class="J_10104485767" ><em>￥</em><i>{{x.prdprice}}</i></strong> </div>
											<div class="p-name p-name-type-2">
												<a target="_blank" title="全店满49元起顺丰包邮 让订单飞到您的手里 详询客服" href="/thinkphp3.2.3/index.php/Home/Index/openinfo">
													<em>{{x.prdname1}}<font class="skcolor_ljg">{{x.prdfont1}}</font>
														<i>{{x.prdi}}</i>
														<font class="skcolor_ljg">{{x.prdfont2}}</font>
														{{x.prdname2}}
													</em>
												</a>
											</div>
											<div class="p-commit"><strong>已有<a target="_blank" href="#" >{{x.prdpingjia}}</a>人评价</strong></div>

											<div class="p-shop" ><span ><a target="_blank"  href="#" title={{x.prddianpu}}>{{x.prddianpu}}</a>
												
												<b class="im-01" title="联系第三方卖家进行咨询"></b></span></div>
												<a class="p-o-btn contrast J_contrast" data-sku="1353840" href="javascript:;">
        											<i></i>对比
     											 </a>
     											 <a class="p-o-btn focus J_focus" data-sku="1353840" href="javascript:;">
      												  <i></i>关注
   											     </a>
												<a class="p-o-btn addcart" target="_blank" href="javascript:;" ng-click="addcart(x.id)">
        											<i></i>加入购物车
      											</a>
										</div>
										
									</li>
							
									

									<!--商品列表结束-->
								</ul>
								<span class="clr"></span></div>
							<!--ul-end-->
							<div class="page clearfix">
								<div id="J_bottomPage" class="p-wrap">
									<span class="p-num">
										<a class="pn-prev disabled">
											<i>&lt;</i>
											<em>上一页</em>
										</a>
										<a href="javascript:;" class="curr">1</a>
										<a onclick="SEARCH.page(3, true)" href="javascript:;">2</a>
										<a onclick="SEARCH.page(5, true)" href="javascript:;">3</a>
										<a onclick="SEARCH.page(7, true)" href="javascript:;">4</a>
										<a onclick="SEARCH.page(9, true)" href="javascript:;">5</a>
										<a onclick="SEARCH.page(11, true)" href="javascript:;">6</a>
										<a onclick="SEARCH.page(13, true)" href="javascript:;">7</a>
										<b class="pn-break">...</b>
										<a class="pn-next" onclick="SEARCH.page(3, true)" href="javascript:;" title="使用方向键右键也可翻到下一页哦！">
											<em>下一页</em>
											<i>&gt;</i>
										</a>
									</span>
									<span class="p-skip">
										<em>共<b>40</b>页&nbsp;&nbsp;到第</em>
										<input class="input-txt" type="text" value="1" />
										<em>页</em>
										<a class="btn btn-default"  href="javascript:;">确定</a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="m-aside">
						<div class="aside-bar">
							<div id="J_promGoodsWrap_291" class="ab-goods u-ad-wrap" style="display:block;">
								<span class="u-ad"></span>
								<div class="mt">
									<h3>商品精选</h3></div>
								<div class="mc">
									<ul class="clearfix" data-x="ab">
										<!--左边的广告-->
										<li >
											<div class="p-img">
												<a target="_blank" href="https://ccc-x.jd.com/dsp/nc?ext=Y2xpY2sueC5qZC5jb20vSmRDbGljay8_eHVpZD01MjAwNyZ4c2l0ZWlkPTExNTcwNTU1XzI5MSZ0bz1odHRwOi8vaXRlbS5qZC5jb20vMTA0ODk1MjE1NzIuaHRtbA&amp;log=UFI9YMu5GY0PBkHfCcXw2J1Fg94vurDI5ilorMpwzkf2aVGR0XrHdvIaSPW3UI0FHNGrnyd4ec9HbR50XvBweu9Zhk7QrGTlnHxcPyFwvbbvtVJoYba0tU3oBh7jSdUQsbxGQeftreDrJ0WLSRckOWMRngKD7hOhOGTKwvRsONu3vgFTdmEvrw65Tvf4B6htSd0QpxSoSMfpbvooPfbPk6Ih7FUpmkihMY-pZlnL-EoqDJSnAzMmNWDoqNUTsRCVkC7VyHo9VRzCyHD27eqQjkIQ3YRHuBjyBEjzevJs7aqiwHT36lJbNJcS0Bp7K-X9AcdSLO5cx7jYY8BCBZRI64iYTHAGnTs423QecmPXuWffwjkbBD7iWmXbpoh-mduY7bQ0oBs4sqhuTb6UOliZ3QM34iE_0MXO5JeYh5tC3gQ&amp;v=404">
													<img width="160" height="160" data-img="1" src="/thinkphp3.2.3/Public/img/list/gg1.jpg" class="err-product">
													
												</a>
											</div>
											<div class="p-price">
												<strong class="J_10489521572" data-adv="1" data-done="1"><em>￥</em><i>38.00</i></strong>
											</div>
											<div class="p-name">
												<a target="_blank" href="#">
													<em>魅迪（MEIDI）<font class="skcolor_ljg">车载充电器</font> 一拖三车充苹果安卓Type-c手机汽车用点烟器车充 苹果安卓Type-c-通用白色A款</em>
												</a>
											</div>
											<div class="p-comm" style="padding:8px 10px 0">已有<span style="color:#005aa0">181</span>人评价</div>
										</li>
										<li onclick="searchlog(1,1215508,1,81)">
											<div class="p-img">
												<a target="_blank" href="#">
													<img width="160" height="160" data-img="1" src="/thinkphp3.2.3/Public/img/list/gg2.jpg" class="err-product">
													
												</a>
											</div>
											<div class="p-price">
												<strong class="J_1215508" data-adv="1" data-done="1"><em>￥</em><i>29.00</i></strong>
											</div>
											<div class="p-name">
												<a target="_blank" href="https://ccc-x.jd.com/dsp/nc?ext=Y2xpY2sueC5qZC5jb20vSmRDbGljay8_eHVpZD01MjAwNyZ4c2l0ZWlkPTExMjg4NDI1XzI5MSZ0bz1odHRwOi8vaXRlbS5qZC5jb20vMTIxNTUwOC5odG1s&amp;log=UFI9YMu5GY0PBkHfCcXw2J1Fg94vurDI5ilorMpwzkd9gbp4jGEdlT_pFlNRQB_I9oB9_fUA0DdrZ9NX15IYoMRhwn44ceHokEMNmwubsN2o5R0f-tMDZDzir6HovPmAm_TjB-9R6Ev2WDXJt4emf0TZaU4FtOTsbS_uXwJf03bCRSRk3pAI2ylXVbu3w8yzoen3bgZOClmdeSGuNI4hn1LnIbdrhga3YcSAfSMDPJNtx_lWLHQ7-1t867KS5yXIiEAsTmnNWW9qgC9SGRMCr7DY7M21MP4j9xCQNMiKjjd9iFQTMwD-cYqUmdhZm1WVf_PqAWEAoisQ6IOb8Wzxi6BjXVJBs5B0K8x3Pw448ayhfq_mZr2A8x6SdYM-7H9OD_e-EaD4nB9K-KttZIyFe0nJGIlp5295mEFlO6Us1l4&amp;v=404">
													<em>绿巨能(llano)iPhone6/6S/Plus<font class="skcolor_ljg">充电器</font>+数据线 苹果iphone5/5C/5S  5V1.2A智能手机通用充电插<font class="skcolor_ljg">头</font> 套装</em>
												</a>
											</div>
											<div class="p-comm" style="padding:8px 10px 0">已有<span style="color:#005aa0">23589</span>人评价</div>
										</li>
										<li onclick="searchlog(1,10576364935,2,81)">
											<!--左边的广告结束-->
											<div class="p-img">
												<a target="_blank" href="https://ccc-x.jd.com/dsp/nc?ext=Y2xpY2sueC5qZC5jb20vSmRDbGljay8_eHVpZD01MjAwNyZ4c2l0ZWlkPTEwODQzNDk2XzI5MSZ0bz1odHRwOi8vaXRlbS5qZC5jb20vMTA0Nzg5OTk1OTMuaHRtbA&amp;log=UFI9YMu5GY0PBkHfCcXw2J1Fg94vurDI5ilorMpwzkdydJhBQoUoyQFOYOAaU47uy0NvlcqQJ7mWt_EMXm94CeUyVI0Tf1a-BAZBU90QWAoyeS7QGXR_5Bz51yhDZ1venMmgt-gIOGe3hYiAu9IBz0pJ2kgp8x01XeUS9ObAbjsk8hsNpLU1jc-NirrDzvTsaJ_ERccxJ8xKyjrDiMXoYScTIl4hqBYOTxvzXUH_lHz5777LRDEbZzqJOZUeGGM9wSJPMlORsyj7J-tTrZll-10gOsTpD_vCGyokqSWrmuoya-Q3OAgw1Rja11dWGMuVPrVf32wX6UF2KFobot5HEL5v4c5CsjR1xOPzW_Xru14LZtk2_EyzH5VMmLpVE5kB_LGxECGugX943inx-0QIpg&amp;v=404">
													<img width="160" height="160" data-img="1" src="/thinkphp3.2.3/Public/img/list/gg3.png" class="err-product">
							
												</a>
											</div>
											<div class="p-price">
												<strong class="J_10478999593" data-adv="1" data-done="1"><em>￥</em><i>69.00</i></strong>
											</div>
											<div class="p-name">
												<a target="_blank" href="https://ccc-x.jd.com/dsp/nc?ext=Y2xpY2sueC5qZC5jb20vSmRDbGljay8_eHVpZD01MjAwNyZ4c2l0ZWlkPTEwODQzNDk2XzI5MSZ0bz1odHRwOi8vaXRlbS5qZC5jb20vMTA0Nzg5OTk1OTMuaHRtbA&amp;log=UFI9YMu5GY0PBkHfCcXw2J1Fg94vurDI5ilorMpwzkdydJhBQoUoyQFOYOAaU47uy0NvlcqQJ7mWt_EMXm94CeUyVI0Tf1a-BAZBU90QWAoyeS7QGXR_5Bz51yhDZ1venMmgt-gIOGe3hYiAu9IBz0pJ2kgp8x01XeUS9ObAbjsk8hsNpLU1jc-NirrDzvTsaJ_ERccxJ8xKyjrDiMXoYScTIl4hqBYOTxvzXUH_lHz5777LRDEbZzqJOZUeGGM9wSJPMlORsyj7J-tTrZll-10gOsTpD_vCGyokqSWrmuoya-Q3OAgw1Rja11dWGMuVPrVf32wX6UF2KFobot5HEL5v4c5CsjR1xOPzW_Xru14LZtk2_EyzH5VMmLpVE5kB_LGxECGugX943inx-0QIpg&amp;v=404">
													<em>韩国现代(HYUNDAI)杯架式<font class="skcolor_ljg">车载充电器</font>三USB手机一拖二点烟器插<font class="skcolor_ljg">头</font>汽车多功能小米车充 黑色畅销款</em>
												</a>
											</div>
											<div class="p-comm" style="padding:8px 10px 0">已有<span style="color:#005aa0">394</span>人评价</div>
										</li>
									</ul>
								</div>
							</div>

							<div id="miaozhen8148" class="ab-pic" style="display: block;">
								<a href="#" target="_blank" title="">
									<img src="/thinkphp3.2.3/Public/img/list/5631f17fNe9938dd6.jpg" width="180" height="240"></a>
								<a href="#" target="_blank" title="">
									<img src="/thinkphp3.2.3/Public/img/list/57d0cbeaN6372fb37.jpg" width="180" height="240"></a>
							</div>
						</div>
					</div>
					<span class="clr"></span>
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