<meta property="qc:admins" content="2452717777621152116375" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js,meilele_common.js')); ?>
 


<style>
* {
    margin: 0;
    padding: 0;
    list-style: none;
}
img {
    border: 0;
}
.main-im {
    position: fixed;
    right: 10px;
    top: 300px;
    z-index: 100;
    width: 110px;
    height: 272px;
}
.main-im .qq-a {
    display: block;
    width: 106px;
    height: 116px;
    font-size: 14px;
    color: #0484cd;
    text-align: center;
    position: relative;
}
.main-im .qq-a span {
    bottom: 5px;
    position: absolute;
    width: 90px;
    left: 10px;
}
.main-im .qq-hover-c {
    width: 70px;
    height: 70px;
    border-radius: 35px;
    position: absolute;
    left: 18px;
    top: 10px;
    overflow: hidden;
    z-index: 9;
}
.main-im .qq-container {
    z-index: 99;
    position: absolute;
    width: 109px;
    height: 118px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom: 1px solid #dddddd;
    background: url(http://demo.lanrenzhijia.com/2014/service1008/images/qq-icon-bg.png) no-repeat center 8px;
}
.main-im .img-qq {
    max-width: 60px;
    display: block;
    position: absolute;
    left: 6px;
    top: 3px;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.main-im .im-qq:hover .img-qq {
    max-width: 70px;
    left: 1px;
    top: 8px;
    position: absolute;
}
.main-im .im_main {
    background: #F9FAFB;
    border: 1px solid #dddddd;
    border-radius: 10px;
    background: #F9FAFB;
    display: none;
}
.main-im .im_main .im-tel {
    color: #000000;
    text-align: center;
    width: 109px;
    height: 105px;
    border-bottom: 1px solid #dddddd;
}
.main-im .im_main .im-tel div {
    font-weight: bold;
    font-size: 12px;
    margin-top: 11px;
}
.main-im .im_main .im-tel .tel-num {
    font-family: Arial;
    font-weight: bold;
    color: #e66d15;
}
.main-im .im_main .im-tel:hover {
    background: #fafafa;
}
.main-im .im_main .weixing-container {
    width: 55px;
    height: 47px;
    border-right: 1px solid #dddddd;
    background: #f5f5f5;
    border-bottom-left-radius: 10px;
    background: url(http://demo.lanrenzhijia.com/2014/service1008/images/weixing-icon.png) no-repeat center center;
    float: left;
}
.main-im .im_main .weixing-show {
    width: 112px;
    height: 172px;
    background: #ffffff;
    border-radius: 10px;
    border: 1px solid #dddddd;
    position: absolute;
    left: -125px;
    top: -126px;
}
.main-im .im_main .weixing-show .weixing-sanjiao {
    width: 0;
    height: 0;
    border-style: solid;
    border-color: transparent transparent transparent #ffffff;
    border-width: 6px;
    left: 112px;
    top: 134px;
    position: absolute;
    z-index: 2;
}
.main-im .im_main .weixing-show .weixing-sanjiao-big {
    width: 0;
    height: 0;
    border-style: solid;
    border-color: transparent transparent transparent #dddddd;
    border-width: 8px;
    left: 112px;
    top: 132px;
    position: absolute;
}
.main-im .im_main .weixing-show .weixing-ma {
    width: 104px;
    height: 103px;
    padding-left: 5px;
    padding-top: 5px;
}
.main-im .im_main .weixing-show .weixing-txt {
    position: absolute;
    top: 110px;
    left: 7px;
    width: 100px;
    margin: 0 auto;
    text-align: center;
    font-size: 12px;
}
.main-im .im_main .go-top {
    width: 50px;
    height: 47px;
    background: #f5f5f5;
    border-bottom-right-radius: 10px;
    background: url(http://demo.lanrenzhijia.com/2014/service1008/images/toTop-icon.png) no-repeat center center;
    float: right;
}
.main-im .im_main .go-top a {
    display: block;
    width: 52px;
    height: 47px;
}
.main-im .close-im {
    position: absolute;
    right: 10px;
    top: -12px;
    z-index: 100;
    width: 24px;
    height: 24px;
}
.main-im .close-im a {
    display: block;
    width: 24px;
    height: 24px;
    background: url(http://demo.lanrenzhijia.com/2014/service1008/images/close_im.png) no-repeat left top;
}
.main-im .close-im a:hover {
    text-decoration: none;
}
.main-im .open-im {
    cursor: pointer;
    margin-left: 68px;
    width: 40px;
    height: 133px;
    background: url(http://demo.lanrenzhijia.com/2014/service1008/images/open_im.png) no-repeat left top;
}
</style>
<div class="main-im">
    <div id="open_im" class="open-im"></div>
    <div class="im_main" id="im_main">
        <div id="close_im" class="close-im">
            <a href="javascript:void(0);" title="点击关闭"></a>
        </div>
        <a href="http://wpa.qq.com/msgrd?v=3&uin=4526115&site=qq&menu=yes" class="im-qq qq-a" title="在线QQ客服">
            <div class="qq-container"></div>
            <div class="qq-hover-c"><img class="img-qq" src="http://demo.lanrenzhijia.com/2014/service1008/images/qq.png">
            </div>
            <span> QQ在线咨询</span> </a>
        <div class="im-tel">
            <div>售前咨询热线</div>
            <div class="tel-num">0831-8888825</div>
            <div>售后咨询热线</div>
            <div class="tel-num">400-665-2251</div>
        </div>
        <div class="im-footer" style="position:relative">
            <div class="weixing-container">
                <div class="weixing-show">
                    <div class="weixing-txt">微信扫一扫
                        <br>关注我们</div>
                    <img class="weixing-ma" src="themes/meilele/images/erweima.png">
                    <div class="weixing-sanjiao"></div>
                    <div class="weixing-sanjiao-big"></div>
                </div>
            </div>
            <div class="go-top">
                <a href="javascript:;" title="返回顶部"></a>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function() {
    $('#close_im').bind('click', function() {
        $('#main-im').css("height", "0");
        $('#im_main').hide();
        $('#open_im').show();
    });
    $('#open_im').bind('click', function(e) {
        $('#main-im').css("height", "272");
        $('#im_main').show();
        $(this).hide();
    }).trigger('click');
    $('.go-top').bind('click', function() {
        $(window).scrollTop(0);
    });
    $(".weixing-container").bind('mouseenter', function() {
        $('.weixing-show').show();
    })
    $(".weixing-container").bind('mouseleave', function() {
        $('.weixing-show').hide();
    });
});
</script>
<div class="AD_tonglan">
	<div style="width:980px;height:50px;margin:0 auto">
    	<?php 
$k = array (
  'name' => 'ads',
  'id' => '3',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
</div>
<div class="site-nav">
	<div class="w sn-container">
    	<div class="snc-wraper Left clearfix">
        	<a class="common-bg snc-link snc-app" target="_blank" href="/mobile">移动客户端</a>
			<a class="common-bg snc-link snc-weibo" target="_blank" href="http://weibo.com/3364004570/profile?topnav=1&wvr=6">新浪微博</a>
			<s class="snc-line">|</s>
            <span id="ECS_MEMBERZONE">
            	<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </span>
        </div>
        <ul id="JS_quick_memu" class="snc-qmenu">
        	<?php if ($this->_var['navigator_list']['top']): ?>
            <li class="sncq-item">
            	<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            		<a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?> class="snc-link snc-order"><?php echo $this->_var['nav']['name']; ?></a>
             		<s class="snc-line">|</s>
    			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </li>
            <?php endif; ?>
            <li class="sncq-item">
            	<a class="snc-link snc-mll" rel="nofollow" target="_blank" href="user.php">我的家居网<b class="common-bg snc-arrow"></b></a><s class="snc-line">|</s><span class="blank"></span>
                <ul class="sncq-submenu">
                	<li class="sncq-subitem">
						<a class="sncq-sublink" href="user.php?act=account_log" rel="nofollow" target="_blank">我的余额</a>
					</li>
                    <li class="sncq-subitem">
						<a class="sncq-sublink" href="user.php?act=bonus" rel="nofollow" target="_blank">我的红包</a>
					</li>
                    <li class="sncq-subitem">	
						<a class="sncq-sublink" href="user.php?act=collection_list" rel="nofollow" target="_blank">我的收藏</a>
					</li>
                    <li class="sncq-subitem">
						<a class="sncq-sublink" href="user.php?act=comment_list" rel="nofollow" target="_blank">我的评论</a>
					</li>
                    <li class="sncq-subitem">
						<a class="sncq-sublink" href="article.php?id=22" rel="nofollow" target="_blank">售后保证</a>
					</li>
                </ul>
            </li>
            <li class="sncq-item">
            	<a class="snc-link snc-help" rel="nofollow" target="_blank" href="article_cat.php?id=3">帮助中心<b class="common-bg snc-arrow"></b></a><s class="snc-line">|</s><span class="blank blank-help"></span>
                <ul class="sncq-submenu sncq-submenu-help">
                	<li class="sncq-subitem">
						<a class="sncq-sublink" rel="nofollow" href="article.php?id=10" target="_blank">购买流程</a>
					</li>
                    <li class="sncq-subitem">
                    	<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['no']['iteration']++;
?>
                        <?php if ($this->_var['im']): ?>
                        <?php if ($this->_foreach['no']['iteration'] == 1): ?> 
						<a class="sncq-sublink" rel="nofollow" href="http://wpa.qq.com/msgrd?V=1&amp;uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes">在线帮助</a>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</li>
                </ul>
            </li>
            <li class="sncq-item">
				<a class="snc-link snc-collect" id="favorite_wb" href="javascript:;" rel="nofollow">收藏本站</a><s class="snc-line">|</s>
			</li>
            <li class="sncq-item" style="width:225px">
            	<div id="JS_head_scoll_phone_527" class="JS_head_scoll_phone_527_active_br">
                	<div style="height:22px;width:213px;padding:0 5px;padding-left:7px;line-height:15px;line-height:13px\9;*line-height:13px;overflow:hidden;">
						<span>全国热线：</span><span class="hotLine">400 888 8888</span>
					</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
<div class="page-header">
	<div class="w ph-container clearfix">
    	<a class="phc-logo Left" href="./index.php">
			<img width="146" height="53" alt="logo" src="themes/meilele/images/logo.gif">
		</a>
        <div class="phc-citys Left">
        	<div class="city">
        		<span class="common-bg city-logo"></span>
            </div>
        </div>
        <a class="phc-ad Left" rel="nofollow" target="_blank" href="#" title="5.1家年华">
			<img width="170" height="60" alt="5.1家年华" src="themes/meilele/images/logo-right-img.gif" style="position:relative;top:4px;">
		</a>
        <div class="phc-search Left">
        	<form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()" class="search-form">
        		<input class="search-input" type="text" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" autocomplete="off">
        		<input type="hidden" value="k1" name="dataBi">
        		<button type="submit" class="submit-btn Right">搜 索</button>
      		</form>
            <div class="search-hot" id="hotKeywordsShow">
            	<?php if ($this->_var['searchkeywords']): ?> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" class="hot-item"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?>
            </div>
        </div>
        <div id="ECS_CARTINFO" class="phc-cart Right">
        	<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
</div>
<div class="mll-navigator navigator-other">
	<div class="w clearfix">
    	<div id="JS_mll_header_menu_panel" class="menu-panel">
        	<h2>
				<span>全部商品分类</span>
                <i></i>
			</h2>
            <ul id="JS_mll_menu_map" class="top" style=" display:none">
            	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cate'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cate']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cate']['iteration']++;
?>
                <li class="top-item">
                	<em class="flag flag<?php echo $this->_foreach['cate']['iteration']; ?>" style="margin-left: 14px;"></em>
                	<a target="_blank" href="<?php echo $this->_var['cat']['url']; ?>" class="txt"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
                    <div class="sub">
                    	<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?>
                    	<div class="title clearfix">
                        	<h4 class="Left">
                            	<a class="red" href="<?php echo $this->_var['child']['url']; ?>" target="_blank">
									<?php echo htmlspecialchars($this->_var['child']['name']); ?> <span class="darrow">>></span>
								</a>
                            </h4>
                            <div class="Right link">
								<a href="<?php echo $this->_var['child']['url']; ?>" target="_blank">
									<?php echo htmlspecialchars($this->_var['child']['name']); ?> <span class="red"> <?php echo $this->_var['cat']['goods_num']; ?> </span>件商品<span class="darrow" style="margin-left:-3px"> >></span>
								</a>
							</div>
                        </div>
                        <div class="list clearfix">
                        	<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> 
              				<a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank" class="sub-item"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a> 
            				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                        <?php if ($this->_foreach['foo']['total'] == 1): ?>
                        <div class="ad">
                        	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '右侧导航广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                        </div>
                         <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <i class="arrow"></i>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <ul class="navigator">
        	<li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
        	<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
            <li <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> rel="nofollow"><?php echo $this->_var['nav']['name']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </ul>
    </div>
</div>


