<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<title>智能家庭中央控制系统</title>
  <script>
    window.confirm = function(){};
    window.prompt  = function(){};
    window.open    = function(){};
    window.print   = function(){};
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }
	
	function checkField(val)
{
	if(val==true)
	{
		alert("1");
	}
	else if(val==false)
	{
		alert("0");
	}
//alert("输入值已更改。新值是：" + val);
}
   
  </script>
  <script src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="/thinkphp3.2.3/Public/css/my.css">
<script type="text/javascript" src="/thinkphp3.2.3/Public/js/my.js"></script>
<script type="text/javascript">
function loadXMLDoc(val,vvl)
{
	
var xmlhttp;
var number=document.getElementById(val).name;
var name="Name="+number+"&Value=";
if(vvl==true){vvl=1;}
	else if(vvl==false){vvl=2;}
//alert( name);
if (window.XMLHttpRequest)
  
else
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   // alert("更新成功！" );
    }
  }
  var combine="/switch/switchbackground.php?"+name+vvl;
 // alert(combine);
xmlhttp.open("GET",combine,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send();

}
</script>

 <link rel="stylesheet" type="text/css" href="/thinkphp3.2.3/Public/css/sheet.css" />
</head>
<body background="/thinkphp3.2.3/Public/image/bgg.jpg">

<h2 style="text-align:center; margin-mid: 7px;margin-bottom: 7px; color:#444; font-size:28px; font-family: 'Times New Roman', Times, serif;" >智能家庭中央控制系统</h2>


<div id="clock" class="light">
    <div class="display">
        <div class="date"></div>
        <div class="digits"></div>
    </div>
</div>

<div id="valuebox">
<div id="smoke" class="light">
<div class="smoketitle">
<h>当前室内烟雾浓度：</h>
</div>
<div class="smokevalue">
<h>5%</h>
</div>
</div>
<div id="temp" class="light">
<div class="temptitle">
<h>当前室内温度：</h>
</div>
<div class="tempvalue">
<h>20℃</h>
</div>
</div>
<div id="co2" class="light">
<div class="co2title">
<h>当前室内CO2浓度：</h>
</div>
<div class="co2value">
<h>345g/L</h>
</div>
</div>	
</div>
<script>
$(function(){
    var clock = $('#clock');
	//定义数字数组0-9
	var digit_to_name = ['zero','one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
	//定义星期
	var weekday = ['周日','周一','周二','周三','周四','周五','周六'];

    var digits = {};

    //定义时分秒位置
    var positions = [
        'h1', 'h2', ':', 'm1', 'm2', ':', 's1', 's2'
    ];

    //构建数字时钟的时分秒

    var digit_holder = clock.find('.digits');

    $.each(positions, function(){

        if(this == ':'){
            digit_holder.append('<div class="dots">');
        }
        else{

            var pos = $('<div>');

            for(var i=1; i<8; i++){
                pos.append('<span class="d' + i + '">');
            }

            digits[this] = pos;

            digit_holder.append(pos);
        }

    });
	

    // 让时钟跑起来
    (function update_time(){

        //调用moment.js来格式化时间
        var now = moment().format("HHmmss");

        digits.h1.attr('class', digit_to_name[now[0]]);
        digits.h2.attr('class', digit_to_name[now[1]]);
        digits.m1.attr('class', digit_to_name[now[2]]);
        digits.m2.attr('class', digit_to_name[now[3]]);
        digits.s1.attr('class', digit_to_name[now[4]]);
        digits.s2.attr('class', digit_to_name[now[5]]);

		var date = moment().format("YYYY年MM月DD日");
		var week = weekday[moment().format('d')];
		$(".date").html(date + ' ' + week);


        // 每秒钟运行一次
        setTimeout(update_time, 1000);

    })();
});
</script>

<table class="bordered">
<thead>
<tr>
<th width="15%">编号</th>
<th width="70%">位置</th>
<th width="15%">开关及状态</th>
</tr>
</thead>
<tr>
<td>1</td>
<td>客厅</td>
<td> <input type="checkbox" id="s1" name="1" value="0"  onChange="loadXMLDoc('s1',this.checked)" />
  <label class="slider-v2" for="s1"></label></td>
</tr>
<tr>
<td>2</td>
<td>卧室</td>
<td> <input type="checkbox" id="s2" name="2"   onChange="loadXMLDoc('s2',this.checked)" />
  <label class="slider-v2" for="s2"></label></td>
</tr>
<tr>

<td>3</td>
<td>厕所</td>
<td> <input type="checkbox" id="s3" name="3"   onChange="loadXMLDoc('s3',this.checked)" />
  <label class="slider-v2" for="s3"></label></td>
</tr>
<tr>
<td>4</td>
<td>阳台</td>
<td> <input type="checkbox" id="s4" name="4"   onChange="loadXMLDoc('s4',this.checked)" />
  <label class="slider-v2" for="s4"></label></td>

</tr>
<tr>
<td>5</td>
<td>卧室1</td>
<td> <input type="checkbox" id="s5" name="5"   onChange="loadXMLDoc('s5',this.checked)" />
  <label class="slider-v2" for="s5"></label></td>
</tr>
<tr>
<td>6</td>
<td>WIFI</td>

<td> <input type="checkbox" id="s6" name="6"   onChange="loadXMLDoc('s6',this.checked)" />
  <label class="slider-v2" for="s6"></label></td>
</tr>
<tr>
<td>7</td>
<td>冰箱</td>
<td> <input type="checkbox" id="s7" name="7"   onChange="loadXMLDoc('s7',this.checked)" />
  <label class="slider-v2" for="s7"></label></td>
</tr>
<tr>
<td>8</td>
<td>电视</td>
<td><input type="checkbox" id="s8" name="8"   onChange="loadXMLDoc('s8',this.checked)" />
  <label class="slider-v2" for="s8"></label></td>
</tr>
</table>


  <script src=""></script>
  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
  </script>
  
<div id="footer">
<div class="hr1">
<hr style=" margin-top:20px;margin-left:-300px; width:1210PX; height:1px;border:none;border-top:1px solid #555555;"/>
</div>
<div class="foot">
<a>亲爱的用户，你好！欢迎使用本智能家居中央控制系统。如果在使用过程中有任何的意见或建议请随时<a href="#">联系我们</a>!</a><br/>
<a>Design by @Peace</a>丨<a>E-mail：992042912@qq.com</a>丨<a>Tel:18604554253</a>
</div>
</div>  
</body>
</html>