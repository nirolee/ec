<a id="scrollUp" href="#top" style="position: fixed; z-index: 10;"></a>
<style>
#scrollUp {
	border-radius:100%;
	background-color: #777;
	background-position:center 5px;
	background-repeat:no-repeat; 
	background-image:url(themes/jiajuz/images/toppng.png);
	color: #eee;
	font-size: 60px;
	line-height: 1;text-align: center;text-decoration: none;bottom: 1em;right: 10px;overflow: hidden;width: 46px;
	height: 46px;
	border: none;
	opacity: 0.6;
}
	/*页脚悬浮菜单*/
body {margin-bottom:60px !important;}
a, button, input {-webkit-tap-highlight-color:rgba(255, 0, 0, 0);}
ul, li {list-style:none; margin:0; padding:0}
.top_bar {position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif;}
.top_menu {display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px;display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset;}
.top_bar .top_menu>li {-webkit-box-flex:1; position:relative; text-align:center;}
.top_menu li:first-child {background:none;}
.top_bar .top_menu>li>a {height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1;}
.top_bar .top_menu>li.home {max-width:70px}
.top_bar .top_menu>li.home a {height: 60px; width: 60px; margin: auto; border-radius: 60px; position: relative; top: -14px; background: url(themes/jiajuz/images/home.png) no-repeat center center; background-size: 100% 100%;}
.top_bar .top_menu>li>a label {overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center;}
.top_bar .top_menu>li>a img {padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle;}
.top_bar li:first-child a {display: block;}
.menu_font {text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);}
.menu_font.hidden {display:none;}
.menu_font {top:inherit !important; bottom:60px;}
.menu_font li a {height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1;}
.menu_font li a {text-align: left !important;}
.top_menu li:last-of-type a {background: none;}
.menu_font:after {top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%;}
.menu_font li {border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2);}
.menu_font li:first-of-type {border-top: 0;}
.menu_font li:last-of-type {border-bottom: 0;}
.menu_font li a {height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;}
.menu_font li a img {width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle;}
.menu_font>li>a label {padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0;}
#sharemcover {position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000;}
#sharemcover img {position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0;}
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active {background-color:#333;}
.menu_font li a:hover, .menu_font li a:active{background-color:#333;}
.menu_font li:first-of-type a {border-radius:5px 5px 0 0;}
.menu_font li:last-of-type a {border-radius:0 0 5px 5px;}
.litype{width:58px;}
#plug-wrap {position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800;}
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}
.global-nav__nav-shop-cart-num{
	position: absolute;
	height: 16px;
	line-height: 16px;
	padding: 0 5px;
	border-radius: 8px;
	background-color: #fd4609;
	color: #fff;
	font-size: 12px;
}
.global-nav__operate-cart-num{
	display: block;
}
</style>
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="<?php echo $this->_var['site_url']; ?>"> 电脑版 </a> <a href="./"> 触屏版 </a> <a href="#"> 苹果客户端 </a> <a class="#"> Android客户端 </a> </p>
  <p class="region"> 
    <?php if ($this->_var['icp_number']): ?> 
    <?php echo $this->_var['lang']['icp_number']; ?>: <a href="http://ceshi.1cx.cn/" target="_blank"> <?php echo $this->_var['icp_number']; ?> </a> 
    <?php endif; ?> 
    <?php echo $this->_var['copyright']; ?> </p>
</div>

  <div class="global-nav__operate-cart-num" id="globalId"></div>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
  <nav>
    <ul id="top_menu" class="top_menu">
<li class="home"><a href="./"></a></li>
    <li class="litype"> <a onclick="javascript:displayit(0)"><img src="themes/jiajuz/images/qbfl.png"><label>全部分类</label></a>
                    <ul id="menu_list0" class="menu_font" style=" display:none">
            <li> <a href="category.php?id=366"><img src="themes/jiajuz/images/yf.png"><label>家纺家饰</label></a></li><li> <a href="category.php?id=69"><img src="themes/jiajuz/images/xz.png"><label>家具城</label></a></li><li> <a href="category.php?id=202"><img src="themes/jiajuz/images/bb.png"><label>家居城</label></a></li><li> <a href="category.php?id=129"><img src="themes/jiajuz/images/sb.png"><label>建材城</label></a></li><li> <a href="category.php?id=322"><img src="themes/jiajuz/images/xs.png"><label>客厅家具</label></a></li><li> <a href="category.php?id=297"><img src="themes/jiajuz/images/cf.png"><label>书房家具</label></a></li><li> <a href="category.php?id=145"><img src="themes/jiajuz/images/xx.png"><label>卫浴用品</label></a></li>            </ul>
                     </li><li class="litype"> <a onclick="javascript:displayit(1)"><img src="themes/jiajuz/images/lxwm2.png"><label>联系我们</label></a>
                    <ul id="menu_list1" class="menu_font" style=" display:none">
            <li> <a href="ectouch.php?act=contact"><img src="themes/jiajuz/images/dpjs.png"><label>店铺介绍</label></a></li><li> <a href="ectouch.php?act=map&address=<?php echo $this->_var['shop_country']; ?><?php echo $this->_var['shop_province']; ?><?php echo $this->_var['shop_city']; ?><?php echo $this->_var['shop_address']; ?>"><img src="themes/jiajuz/images/dtdz.png"><label>实体地址</label></a></li><li> <a href="tel:4008538385"><img src="themes/jiajuz/images/dhkf.png"><label>电话咨询</label></a></li><li> <a href="javascript:void(0)"><img src="themes/jiajuz/images/lxwm.png"><label>网页客服</label></a></li><li> <a href="http://wpa.qq.com/msgrd?v=3&uin=7656336&site=<?php echo $this->_var['shop_name']; ?>&menu=yes" target="_blank"><img src="themes/jiajuz/images/qqkf.png"><label>QQ客服</label></a></li>            </ul>
                     </li><li class="litype"> <a href="javascript:displayit(2)"><img src="themes/jiajuz/images/cztc.png"><label>优惠活动</label></a>
                    <ul id="menu_list2" class="menu_font" style=" display:none">
            <!--<li> <a href="javascript:void(0)"><img src="themes/jiajuz/images/lhyk.png"><label>领会员卡</label></a></li><li> <a href="javascript:void(0)"><img src="themes/jiajuz/images/yjhx.png"><label>以旧换新</label></a></li>--><li> <a href="exchange.php"><img src="themes/jiajuz/images/jfhl.png"><label>积分换礼</label></a></li><li> <a href="group_buy.php"><img src="themes/jiajuz/images/tg.png"><label>最新团购</label></a></li><!--<li> <a href="javascript:void(0)"><img src="themes/jiajuz/images/szp.png"><label>幸运转盘</label></a></li><li> <a href="javascript:void(0)"><img src="themes/jiajuz/images/yhhd.png"><label>领现金卷</label></a></li>  -->          </ul>
                </li><li class="litype"> <a href="flow.php?step=cart"><img src="themes/jiajuz/images/gwc.png"><span class="global-nav__nav-shop-cart-num" id="carId"><?php 
$k = array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span><label>购物车</label></a>
                </li> 
    </ul>
  </nav>
</div>

<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });

   var navShow = function(){
     $nav.addClass('global-nav--current');
   }

   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script>
