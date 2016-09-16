<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="/thinkphp3.2.3/Public/img/favicon.ico" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/reset.css" />
		<link rel="stylesheet" href="/thinkphp3.2.3/Public/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/thinkphp3.2.3/Public/css/model1.css" />
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/jquery-3.1.0.min.js"></script>
		<!--[if IE]>
		<script src="js/jquery-1.10.1.min.js"></script>
	    <![endif]-->
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/globle.js"></script>
		<script type="text/javascript" src="/thinkphp3.2.3/Public/js/model1.js"></script>
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
						<li class="welcome ">您好，欢迎来到邮乐网！</li>
						<li class="login">
							<a href="/thinkphp3.2.3/index.php/Home/Index/openlogin">[请登录] </a>
							<a href="/thinkphp3.2.3/index.php/Home/Index/openurl" target="_blank">[免费注册]</a>
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
								<h4> <a href="http://meizhuang.ule.com/" target="_blank">美妆洗护</a> <a href="http://meizhuang.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28031943-mianbuhufu---------0-1.html" target="_blank">面部护肤 </a>
									<a href="http://diannao.ule.com/28031961-meifahufa---------0-1.html" target="_blank">美发护发 </a>
									<a href="http://diannao.ule.com/28031963-kouqianghuli---------0-1.html" target="_blank">口腔护理 </a>
									<a href="http://diannao.ule.com/28031966-shentihuli---------0-1.html" target="_blank">身体护理 </a>
									<a href="http://diannao.ule.com/28031968-nuxinghuli---------0-1.html" target="_blank">女性护理 </a>
									<a href="http://diannao.ule.com/28031960-shishangcaizhuang---------0-1.html" target="_blank">时尚彩妆 </a>
									<a href="http://diannao.ule.com/28031962-xiangshui---------0-1.html" target="_blank">香水 </a>
									<a href="http://diannao.ule.com/28031965-nanshihuli---------0-1.html" target="_blank">男士护理 </a>
									<a href="http://diannao.ule.com/28031967-xiyuyongpin---------0-1.html" target="_blank">洗浴用品 </a>
									<a href="http://diannao.ule.com/28031969-chengrenyongpin---------0-1.html" target="_blank">成人用品 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://nvzhuang.ule.com/" target="_blank">女装、饰品、配件</a> <a href="http://nvzhuang.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032274-maozi---------0-1.html" target="_blank">帽子 </a>
									<a href="http://diannao.ule.com/28032286-qunku---------0-1.html" target="_blank">裙裤 </a>
									<a href="http://diannao.ule.com/28032288-waitao---------0-1.html" target="_blank">外套 </a>
									<a href="http://diannao.ule.com/28032291-liuxingshipin---------0-1.html" target="_blank">流行饰品 </a>
									<a href="http://diannao.ule.com/28032284-Txuchenshan---------0-1.html" target="_blank">T恤/衬衫 </a>
									<a href="http://diannao.ule.com/28032287-jingzhineiyi---------0-1.html" target="_blank">精致内衣 </a>
									<a href="http://diannao.ule.com/28032290-zhenzhishan---------0-1.html" target="_blank">针织衫 </a>
									<a href="http://diannao.ule.com/28032292-shoubiaopeijianyanjing---------0-1.html" target="_blank">手表/配件/眼镜 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://jiaju.ule.com/" target="_blank">家居生活</a> <a href="http://jiaju.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032591-jiajuyongpin---------0-1.html" target="_blank">家居用品 </a>
									<a href="http://diannao.ule.com/28032699-chuangshangyongpin---------0-1.html" target="_blank">床上用品 </a>
									<a href="http://diannao.ule.com/28032759-shounaxishai---------0-1.html" target="_blank">收纳洗晒 </a>
									<a href="http://diannao.ule.com/28032833-shishangdengju---------0-1.html" target="_blank">时尚灯具 </a>
									<a href="http://diannao.ule.com/28032861-jiazhuangjiancai---------0-1.html" target="_blank">家装建材 </a>
									<a href="http://diannao.ule.com/28032671-jiafangriyong---------0-1.html" target="_blank">家纺日用 </a>
									<a href="http://diannao.ule.com/28032739-xueshengwenju---------0-1.html" target="_blank">学生文具 </a>
									<a href="http://diannao.ule.com/28032774-wujinzhuanghuang---------0-1.html" target="_blank">五金装潢 </a>
									<a href="http://diannao.ule.com/28032849-chongwushenghuo---------0-1.html" target="_blank">宠物生活 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://qicheyongpin.ule.com/" target="_blank">汽车用品</a> <a href="http://qicheyongpin.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032430-meirongqingjie---------0-1.html" target="_blank">美容清洁 </a>
									<a href="http://diannao.ule.com/28032456-cheshijingpin---------0-1.html" target="_blank">车饰精品 </a>
									<a href="http://diannao.ule.com/28032482-chezaidianqi---------0-1.html" target="_blank">车载电器 </a>
									<a href="http://diannao.ule.com/28032438-weixiubaoyang---------0-1.html" target="_blank">维修保养 </a>
									<a href="http://diannao.ule.com/28032471-anquanzijia---------0-1.html" target="_blank">安全自驾 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://meishi.ule.com/" target="_blank">特色美食</a> <a href="http://meishi.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28031910-ganhuo---------0-1.html" target="_blank">干货 </a>
									<a href="http://diannao.ule.com/28031914-jiankangliangyou---------0-1.html" target="_blank">健康粮油 </a>
									<a href="http://diannao.ule.com/28031919-chongdiaoshipin---------0-1.html" target="_blank">冲调食品 </a>
									<a href="http://diannao.ule.com/28031923-jiulei---------0-1.html" target="_blank">酒类 </a>
									<a href="http://diannao.ule.com/28031929-shengxianshipin---------0-1.html" target="_blank">生鲜食品 </a>
									<a href="http://diannao.ule.com/28031913-xiuxianlingshi---------0-1.html" target="_blank">休闲零食 </a>
									<a href="http://diannao.ule.com/28031917-yinliaoshuiniunai---------0-1.html" target="_blank">饮料/水/牛奶 </a>
									<a href="http://diannao.ule.com/28031921-chufangdiaoliaofangbiansushi---------0-1.html" target="_blank">厨房调料/方便速食 </a>
									<a href="http://diannao.ule.com/28031925-tegonglihe---------0-1.html" target="_blank">特供礼盒 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://nanzhuang.ule.com/" target="_blank">魅力男装</a> <a href="http://nanzhuang.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032200-chenshan---------0-1.html" target="_blank">衬衫 </a>
									<a href="http://diannao.ule.com/28032217-nanku---------0-1.html" target="_blank">男裤 </a>
									<a href="http://diannao.ule.com/28032235-zhenzhishan---------0-1.html" target="_blank">针织衫 </a>
									<a href="http://diannao.ule.com/28032251-qiudongfu---------0-1.html" target="_blank">秋冬服 </a>
									<a href="http://diannao.ule.com/28032211-Txu---------0-1.html" target="_blank">T恤 </a>
									<a href="http://diannao.ule.com/28032226-neiyi---------0-1.html" target="_blank">内衣 </a>
									<a href="http://diannao.ule.com/28032244-waitao---------0-1.html" target="_blank">外套 </a>
									<a href="http://diannao.ule.com/28032259-peijian---------0-1.html" target="_blank">配件 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://chuwei.ule.com/" target="_blank">厨卫清洁</a> <a href="http://chuwei.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28031903-qingjieji---------0-1.html" target="_blank">清洁剂 </a>
									<a href="http://diannao.ule.com/28031959-yicixingyongpin---------0-1.html" target="_blank">一次性用品 </a>
									<a href="http://diannao.ule.com/28032007-chufangbaoxian---------0-1.html" target="_blank">厨房保鲜 </a>
									<a href="http://diannao.ule.com/28032011-shenghuoyongzhi---------0-1.html" target="_blank">生活用纸 </a>
									<a href="http://diannao.ule.com/28032015-shuijujiuju---------0-1.html" target="_blank">水具酒具 </a>
									<a href="http://diannao.ule.com/28031949-qingjiegongju---------0-1.html" target="_blank">清洁工具 </a>
									<a href="http://diannao.ule.com/28032005-guojushuihu---------0-1.html" target="_blank">锅具水壶 </a>
									<a href="http://diannao.ule.com/28032009-jingmeicanju---------0-1.html" target="_blank">精美餐具 </a>
									<a href="http://diannao.ule.com/28032013-chufangyongju---------0-1.html" target="_blank">厨房用具 </a>
									<a href="http://diannao.ule.com/28032017-yushiyongpin---------0-1.html" target="_blank">浴室用品 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://shuma.ule.com/" target="_blank">手机数码</a> <a href="http://shuma.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032359-shoujitongxun---------0-1.html" target="_blank">手机通讯 </a>
									<a href="http://diannao.ule.com/28032384-shumashexiang---------0-1.html" target="_blank">数码摄像 </a>
									<a href="http://diannao.ule.com/28032411-shumayingyin---------0-1.html" target="_blank">数码影音 </a>
									<a href="http://diannao.ule.com/28032363-shoujipeijian---------0-1.html" target="_blank">手机配件 </a>
									<a href="http://diannao.ule.com/28032398-shumapeijian---------0-1.html" target="_blank">数码配件 </a>
									<a href="http://diannao.ule.com/28032424-zhinengshebei---------0-1.html" target="_blank">智能设备 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://jinkoushipin.ule.com/" target="_blank">进口食品</a> <a href="http://jinkoushipin.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28031996-jinkouruzhipin---------0-1.html" target="_blank">进口乳制品 </a>
									<a href="http://diannao.ule.com/28032000-jinkoutangguoqiaokeli---------0-1.html" target="_blank">进口糖果/巧克力 </a>
									<a href="http://diannao.ule.com/28032003-jinkoushiyongyou---------0-1.html" target="_blank">进口食用油 </a>
									<a href="http://diannao.ule.com/28032006-jinkouchongyinkafeicha---------0-1.html" target="_blank">进口冲饮咖啡/茶 </a>
									<a href="http://diannao.ule.com/28032010-jinkouxiuxianlingshi---------0-1.html" target="_blank">进口休闲零食 </a>
									<a href="http://diannao.ule.com/28032014-jinkoudiaoweipin---------0-1.html" target="_blank">进口调味品 </a>
									<a href="http://diannao.ule.com/28032018-jinkoujiulei---------0-1.html" target="_blank">进口酒类 </a>
									<a href="http://diannao.ule.com/28031998-jinkoubinggangaodian---------0-1.html" target="_blank">进口饼干糕点 </a>
									<a href="http://diannao.ule.com/28032002-jinkouguoganmijian---------0-1.html" target="_blank">进口果干/蜜饯 </a>
									<a href="http://diannao.ule.com/28032004-jinkouchongyinzaocanguwu---------0-1.html" target="_blank">进口冲饮/早餐谷物 </a>
									<a href="http://diannao.ule.com/28032008-jinkouyinyongshuiyinliao---------0-1.html" target="_blank">进口饮用水/饮料 </a>
									<a href="http://diannao.ule.com/28032012-jinkoumimian---------0-1.html" target="_blank">进口米/面 </a>
									<a href="http://diannao.ule.com/28032016-jinkouguantou---------0-1.html" target="_blank">进口罐头 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://xiangbao.ule.com/" target="_blank">箱包鞋帽</a> <a href="http://xiangbao.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032888-gongnengxiangbao---------0-1.html" target="_blank">功能箱包 </a>
									<a href="http://diannao.ule.com/28032912-jingpinnanbao---------0-1.html" target="_blank">精品男包 </a>
									<a href="http://diannao.ule.com/28032932-liuxingnanxie---------0-1.html" target="_blank">流行男鞋 </a>
									<a href="http://diannao.ule.com/28032901-shishangnubao---------0-1.html" target="_blank">时尚女包 </a>
									<a href="http://diannao.ule.com/28032919-chaoliunuxie---------0-1.html" target="_blank">潮流女鞋 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://diannao.ule.com/" target="_blank">电脑办公</a> <a href="http://search.ule.com/29-ule---------0-1.html" target="_blank">商务礼品</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032885-bangongshebei---------0-1.html" target="_blank">办公设备 </a>
									<a href="http://diannao.ule.com/28032962-diannaoyingjian---------0-1.html" target="_blank">电脑硬件 </a>
									<a href="http://diannao.ule.com/28032987-wenjuhaocai---------0-1.html" target="_blank">文具/耗材 </a>
									<a href="http://diannao.ule.com/28033005-youxishebei---------0-1.html" target="_blank">游戏设备 </a>
									<a href="http://diannao.ule.com/28032954-diannaozhengji---------0-1.html" target="_blank">电脑整机 </a>
									<a href="http://diannao.ule.com/28032976-waishechanpin---------0-1.html" target="_blank">外设产品 </a>
									<a href="http://diannao.ule.com/28032999-wangluoshebei---------0-1.html" target="_blank">网络设备 </a>
									<a href="http://diannao.ule.com/28033012-teselipin---------0-1.html" target="_blank">特色礼品 </a>
									<a href="http://diannao.ule.com/28033020-jinianshouzang---------0-1.html" target="_blank">纪念收藏 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://jiadian.ule.com/" target="_blank">家用电器</a> <a href="http://jiadian.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032178-shenghuodianqi---------0-1.html" target="_blank">生活电器 </a>
									<a href="http://diannao.ule.com/28032318-gerenhulidianqi---------0-1.html" target="_blank">个人护理电器 </a>
									<a href="http://diannao.ule.com/28032295-chufangdianqi---------0-1.html" target="_blank">厨房电器 </a>
									<a href="http://diannao.ule.com/28032546-dajiadian---------0-1.html" target="_blank">大家电 </a>
								</p>
							</li>
							<li style="display: none;">
								<h4> <a href="http://baojianpin.ule.com/" target="_blank">保健品</a> <a href="http://baojianpin.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28032162-zengqiangmianyilikangpilao---------0-1.html" target="_blank">增强免疫力/抗疲劳 </a>
									<a href="http://diannao.ule.com/28032517-jianfeishoushen---------0-1.html" target="_blank">减肥瘦身 </a>
									<a href="http://diannao.ule.com/28032537-diaojiexueyaxuezhixuetang---------0-1.html" target="_blank">调节血压/血脂/血糖 </a>
									<a href="http://diannao.ule.com/28032666-yangshengcanrongshicai---------0-1.html" target="_blank">养生参茸食材 </a>
									<a href="http://diannao.ule.com/28032468-meirongyangyan---------0-1.html" target="_blank">美容养颜 </a>
									<a href="http://diannao.ule.com/28032533-nannuxingdiaoyang---------0-1.html" target="_blank">男/女性调养 </a>
									<a href="http://diannao.ule.com/28032645-ertongyingyang---------0-1.html" target="_blank">儿童营养 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://outdoor.ule.com/" target="_blank">运动户外</a> <a href="http://outdoor.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28031972-yundongfushi---------0-1.html" target="_blank">运动服饰 </a>
									<a href="http://diannao.ule.com/28031976-yundongpeijian---------0-1.html" target="_blank">运动配件 </a>
									<a href="http://diannao.ule.com/28031980-huwaizhuangbei---------0-1.html" target="_blank">户外装备 </a>
									<a href="http://diannao.ule.com/28031982-huwaifushi---------0-1.html" target="_blank">户外服饰 </a>
									<a href="http://diannao.ule.com/28031984-huwaibao---------0-1.html" target="_blank">户外包 </a>
									<a href="http://diannao.ule.com/28031974-yundongxiebao---------0-1.html" target="_blank">运动鞋包 </a>
									<a href="http://diannao.ule.com/28031979-yundongxiuxianjianshen---------0-1.html" target="_blank">运动休闲健身 </a>
									<a href="http://diannao.ule.com/28031981-yundongqicai---------0-1.html" target="_blank">运动器材 </a>
									<a href="http://diannao.ule.com/28031983-huwaixie---------0-1.html" target="_blank">户外鞋 </a>
								</p>
							</li>
							<li>
								<h4> <a href="http://muying.ule.com/" target="_blank">母婴玩具</a> <a href="http://muying.ule.com/" target="_blank" class="more">more</a> </h4>
								<p>
									<a href="http://diannao.ule.com/28031988-shipinbaojian---------0-1.html" target="_blank">食品保健 </a>
									<a href="http://diannao.ule.com/28031990-baobaofushi---------0-1.html" target="_blank">宝宝服饰 </a>
									<a href="http://diannao.ule.com/28031992-qinshijiaju---------0-1.html" target="_blank">寝室家具 </a>
									<a href="http://diannao.ule.com/28031994-niaokushijin---------0-1.html" target="_blank">尿裤湿巾 </a>
									<a href="http://diannao.ule.com/28031999-xihuyongpin---------0-1.html" target="_blank">洗护用品 </a>
									<a href="http://diannao.ule.com/28031989-mamayongpin---------0-1.html" target="_blank">妈妈用品 </a>
									<a href="http://diannao.ule.com/28031991-buweiyongpin---------0-1.html" target="_blank">哺喂用品 </a>
									<a href="http://diannao.ule.com/28031993-chuxingyongpin---------0-1.html" target="_blank">出行用品 </a>
									<a href="http://diannao.ule.com/28031997-wanjushuji---------0-1.html" target="_blank">玩具书籍 </a>
									<a href="http://diannao.ule.com/28032001-ertongfushi---------0-1.html" target="_blank">儿童服饰 </a>
								</p>
							</li>
						</ul>
						<p class="allCategory_side" data-uspm="113">
							<a href="http://www.ule.com/native.html" target="_blank">各地特产</a>
							<a href="http://life.ule.com/calls.html" target="_blank" class="s2">手机充值</a>
							<a href="http://life.ule.com/" target="_blank">生活缴费</a>
							<a href="http://www.ule.com.hk/" target="_blank" class="s2">海外馆</a>
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
					<span data-uspm="cart" class="shopcart-sum" style="display:block;">购物车<span class="shopcart-num">0</span></span>
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

					<p class="search-hotkeys" data-uspm="103" srcid="recommendKeywords_{d3}">
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
							<a data-uspm="mobile" class="nav-mobile txt-down" href="#" srcid="Homepage_nav_009" target="_blank">手机邮乐<i></i></a>
							<div class="navcon navcon-mobile">
								<div class="navcon-frame">
									<ul>
										<li class="mb1">
											<a data-uspm="mb1" href="#" srcid="Homepage_nav_mobile_mb1" target="_blank">
												<img src="img/mb1.jpg">
												<label>
													<strong>邮乐网</strong>
													<span>专业一站式B2C手机购物软件，海量商品，覆盖城乡，专享优惠，一手掌握，100%正品承诺。</span></label></a>
										</li>
										<li class="mb2">
											<a data-uspm="mb2" href="#" srcid="Homepage_nav_mobile_mb2" target="_blank">
												<img src="img/mb2.jpg">
												<label>
													<strong>邮生活</strong>
													<span>移动生活，你是专家！ <br>充值缴费面面俱到，做全能大管家 <br>机票酒店天马行空，做任性旅行家 <br>网购淘货一手掌握，做品质生活家</span></label></a>
										</li>
										<li class="mb3">
											<a data-uspm="mb3" href="#" srcid="Homepage_nav_mobile_mb3" target="_blank">
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
				<ul class="slide-items">
					<li class="item-list">
						<a href="#"><img src="img/lunbo/0b8460891f5a966e_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/2a05e0634894b977_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/59ce3ee39128fc6c_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/a3496c2b408db9b2_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/b4c46c15d1467b89_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/c41202ce84a41c7b_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/d857d5dc684da7bd_-1x-1.jpg" /></a>
					</li>
					<li>
						<a href="#"><img src="img/lunbo/eda4d8dc9e058fb5_-1x-1.jpg" /></a>
					</li>
				</ul>
				<div class="slide-bottom"></div>
				<div class="slide-index">
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
				<div class="col-left">

				</div>
				<div class="col-main2">
					<div class="mod-comlist">
						<div class="slide-index">
							<h4 class="active" index="0">底价来袭</h4>
							<h4 index="1" class="">新品上市</h4>
						</div>
						<div class="slide-items" style="height: 956px; margin-top: 0px;">
							<ul class="mod-cheaplist active" >
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
							<ul class="mod-freshlist" key="ule2014_hp_freshlist" data-uspm-id="1.1.1_C2014.100017_S2.0.1" data-uspm-count="4|0">
								<li class="i1">
									<a class="prod-img" href="http://item.ule.com/item/1591277-0-1.html?srcid=ule2014_hp_freshlist_001&amp;uspm=1.1.1_C2014.100017_S2.1.1" target="_blank" title="gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包" data-uspm-id="1.1.1_C2014.100017_S2.1.1"><img src="http://pic2.ule.com/item/user_0102/desc20160908/109dbf65989b8f4f_-1x-1.jpg" alt="gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包"></a>
									<p class="prod-name">
										<a href="http://item.ule.com/item/1591277-0-1.html?srcid=ule2014_hp_freshlist_001&amp;uspm=1.1.1_C2014.100017_S2.1.1" target="_blank" title="gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包" data-uspm-id="1.1.1_C2014.100017_S2.1.1">gotrip女包达菲鸭可爱卡通双肩包女旅行背包拆卸式斜挎包</a>
									</p>
									<p class="prod-price"><span>¥<strong>168.00</strong></span><del>¥688.00</del></p>
								</li>
								<li class="i2">
									<a class="prod-img" href="http://item.ule.com/item/1754524-0-1.html?srcid=ule2014_hp_freshlist_002&amp;uspm=1.1.1_C2014.100017_S2.2.1" target="_blank" title="云南蒙自石榴5斤装" data-uspm-id="1.1.1_C2014.100017_S2.2.1"><img src="http://pic0.ule.com/item/user_0102/desc20160908/4be486bab2b2925a_-1x-1.jpg" alt="云南蒙自石榴5斤装"></a>
									<p class="prod-name">
										<a href="http://item.ule.com/item/1754524-0-1.html?srcid=ule2014_hp_freshlist_002&amp;uspm=1.1.1_C2014.100017_S2.2.1" target="_blank" title="云南蒙自石榴5斤装" data-uspm-id="1.1.1_C2014.100017_S2.2.1">云南蒙自石榴5斤装</a>
									</p>
									<p class="prod-price"><span>¥<strong>22.80</strong></span><del>¥50.00</del></p>
								</li>
								<li class="i3">
									<a class="prod-img" href="http://item.ule.com/item/1516383-0-1.html?srcid=ule2014_hp_freshlist_003&amp;uspm=1.1.1_C2014.100017_S2.3.1" target="_blank" title="美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07" data-uspm-id="1.1.1_C2014.100017_S2.3.1"><img src="http://pic4.ule.com/item/user_0102/desc20160908/7e280bb275bf3e12_-1x-1.jpg" alt="美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07"></a>
									<p class="prod-name">
										<a href="http://item.ule.com/item/1516383-0-1.html?srcid=ule2014_hp_freshlist_003&amp;uspm=1.1.1_C2014.100017_S2.3.1" target="_blank" title="美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07" data-uspm-id="1.1.1_C2014.100017_S2.3.1">美妙电子称 家用体重秤精准称重电子秤 人体秤体重称健康称MD-07</a>
									</p>
									<p class="prod-price"><span>¥<strong>39.00</strong></span><del>¥198.00</del></p>
								</li>
								<li class="i4">
									<a class="prod-img" href="http://item.ule.com/item/1611649-0-1.html?srcid=ule2014_hp_freshlist_004&amp;uspm=1.1.1_C2014.100017_S2.4.1" target="_blank" title="逸轩家纺   舒适枕芯一个" data-uspm-id="1.1.1_C2014.100017_S2.4.1"><img src="http://pic4.ule.com/item/user_0102/desc20160815/312946439c4d4846_-1x-1.jpg" alt="逸轩家纺   舒适枕芯一个"></a>
									<p class="prod-name">
										<a href="http://item.ule.com/item/1611649-0-1.html?srcid=ule2014_hp_freshlist_004&amp;uspm=1.1.1_C2014.100017_S2.4.1" target="_blank" title="逸轩家纺   舒适枕芯一个" data-uspm-id="1.1.1_C2014.100017_S2.4.1">逸轩家纺 舒适枕芯一个</a>
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
									<img src="img/topline3/0813bb60149cbbcb_-1x-1.jpg"/>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/topline3/74cf46e48a380272_-1x-1.jpg"/>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/topline3/9bcf27988949a09d_-1x-1.jpg"/>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/topline3/eaa3e4630a95d71f_-1x-1.jpg"/>
								</a>
							</li>
						</ul>
						<div class="slide-button" >
							<a class="btn-prev" ></a>
							<a class="btn-next" ></a>
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
								<img src="img/5b847f09bf975e4f_-1x-1.jpg"/>
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
		<div class="mod-1 channel">
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
		<div class="mod-2 channel">
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
		<div class="mod-2 channel">
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
		<div class="mod-3 channel">
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
								<img src="img/littlelinbo/288c3faf719db7b4_-1x-1.jpg"/>
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/7442aa895bd55efd_-1x-1.jpg"/>
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/45249d5b1990debb_-1x-1.jpg"/>
								<i></i>
							</a>
						</div>
					</div>

					<div class="mod-brandlist">
						<ul>
							<li>
								<a href="#" ><img src="img/logo/844477da2bf439e3_-1x-1.jpg" alt="" /> <span>兰芝</span></a>
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
		<div class="mod-3 channel">
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
		<div class="mod-3 channel">
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
		<div class="mod-3 channel">
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
								<img src="img/littlelinbo/288c3faf719db7b4_-1x-1.jpg"/>
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/7442aa895bd55efd_-1x-1.jpg"/>
								<i></i>
							</a>
							<a href="#">
								<img src="img/littlelinbo/45249d5b1990debb_-1x-1.jpg"/>
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
		<div class="mod-2 channel">
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
		<div class="mod-6 channel">
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
		<div class="mod-6 channel">
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
		<div class="mod-6 channel">
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
		<!--footer开始-->
		<div class="footer">
			<div class="layout">
				<div class="foot-banner" data-uspm="131">
					<a data-uspm="no" class="foot-banner-post" href="#" target="_blank" title="中国邮政">中国邮政</a>
					<a data-uspm="no" class="foot-banner-tom" href="#" target="_blank" title="TOM">TOM</a>
					<a class="foot-banner-commitment" href="#" target="_blank" title="100%正品承诺">100%正品承诺</a>
					<a class="foot-banner-free" href="#" target="_blank" title="覆盖城乡 安全速达">覆盖城乡 安全速达</a>
				</div>

				<div class="foot-helper">
					<ul class="clearfix">
						<li class="i1">
							<h4>购物指南</h4>
							<p data-uspm="141">
								<a target="_blank" rel="nofollow" href="#">购物流程</a>
								<a target="_blank" rel="nofollow" href="#">使用优惠券</a>
								<a target="_blank" rel="nofollow" href="#">积分规则</a>
								<a target="_blank" rel="nofollow" href="#">如何找回密码</a>
								<a target="_blank" rel="nofollow" href="#">订单多包裹配送</a>
								<a target="_blank" href="#">热搜关键词</a>
								<a target="_blank" href="#">在线客服（邮乐通）</a>
							</p>
						</li>
						<li class="i2">
							<h4>支付帮助</h4>
							<p data-uspm="142">
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/90/30.html">邮乐卡支付</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/86/26.html">网上银行支付</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/91/31.html">邮储快捷支付</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/81/21.html">邮乐快捷支付协议</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/67/7.html">发票说明</a>
							</p>
						</li>
						<li class="i3">
							<h4>配送方式</h4>
							<p data-uspm="143">
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/74/14.html">海外购物配送</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/65/5.html">签收拒收规则</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/64/4.html">配送时间/范围/运费</a>
							</p>
						</li>
						<li class="i4">
							<h4>售后服务</h4>
							<p data-uspm="144">
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/66/20.html">退换货规则</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/87/27.html">退款说明</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/68/8.html">联系客服</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/102/42.html">退换货流程</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/103/43.html">退换货运费补偿标准</a>
								<a target="_blank" rel="nofollow" href="http://my.ule.com/returnorders/login.jsp">线下购物订单服务</a>
								<a target="_blank" rel="nofollow" href="http://my.ule.com/myShoppingOrderWeb/buyerOrderView.do">纠纷申诉</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/105/45.html">纠纷申诉处理规则说明</a>
							</p>
						</li>
						<li class="i5">
							<h4>特色服务</h4>
							<p data-uspm="145">
								<a target="_blank" href="http://yzg.ule.com">邮掌柜</a>
								<a target="_blank" href="http://www.ule.com/tg/">大客户团购</a>
								<a target="_blank" href="http://help.ule.com/helpcenter/75/15.html">邮乐海外站</a>
								<a target="_blank" href="http://help.ule.com/helpcenter/85/25.html">手机充值</a>
							</p>
						</li>
						<li class="i6">
							<h4>关于邮乐</h4>
							<p data-uspm="146">
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/70/10.html">邮乐简介</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/72/12.html">邮乐招商</a>
								<a target="_blank" rel="nofollow" href="http://merchant2.ule.tom.com/merchantJoinIn/merApply/login.do?method=entry">商家入驻</a>
								<a target="_blank" href="http://merchant.ule.com/fxMerchantJoin/merApply/login.do">批销商家入驻</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/73/13.html">诚聘英才</a>
								<a target="_blank" href="http://search.ule.com/link.html">友情链接</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/62/16.html">用户协议</a>
								<a target="_blank" rel="nofollow" href="http://help.ule.com/helpcenter/63/3.html">隐私权保护</a>
								<a target="_blank" href="http://www.ule.com/zone/sitemap.html">网站地图</a>
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

				<div class="foot-iconlink clearfix" data-uspm="151">
					<a data-uspm="no" href="http://www.chinapost.cn/" target="_blank" title="中国邮政"><b>中国邮政</b></a>
					<a data-uspm="no" href="http://www.tom.com/" target="_blank" title="TOM"><b>TOM</b></a>
					<a data-uspm="no" rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=2010110500100002794&ct=df&a=1&pa=0.07429198059253395" target="_blank" title="可信网站身份验证"><b>可信网站</b></a>
					<a data-uspm="no" href="http://www.ems.com.cn/" target="_blank" title="EMS"><b>EMS</b></a>
					<a data-uspm="no" href="http://www.psbc.com/" target="_blank" title="中国邮政储蓄银行"><b>中国邮政储蓄银行</b></a>
					<a data-uspm="no" rel="nofollow" href="http://net.china.cn/" target="_blank"><b>不良信息举报中心</b></a>
					<a data-uspm="no" rel="nofollow" href="http://www.police.sh.cn/shga/gweb/email/110/" target="_blank"><b>上海网警网络110</b></a>
					<a data-uspm="no" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=2016022414024626" target="_blank"><b>上海工商</b></a>
					<a data-uspm="no" rel="nofollow" href="https://credit.szfw.org/CX20160129013585370170.html" target="_blank"><b>诚信网站</b></a>
				</div>

			</div>
		</div>

	</body>

</html>