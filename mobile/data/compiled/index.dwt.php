<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>触摸屏</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/ectouch.css?v=2014" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script>
<style>
.famous_sale_wrap {
margin: 0 0px;
border: 1px solid #e5e5e5;
}
.tbl-type {
display: table;
width: 100%;
}
.tbl-cell {
display: table-cell;
vertical-align: top;
text-align: center;
}
.tbl-cell {
width: 50%;
overflow: hidden;
}
.tbl-type a {
display: block;
text-align: center;
}
.half-img {
width: 100%;
height: auto!important;
overflow: hidden;
}
.tbl-type img {
vertical-align: top;
}
.racks1-left {
border-left: 1px solid #e5e5e5;
}
.racks-border {
border-bottom: 1px solid #e5e5e5;
}
.ico_52{background:url(themes/jiajuz/images/fsyj.png) no-repeat 50% 50%;-webkit-background-size: 85px 30px;-moz-background-size: 85px 30px;-o-background-size: 85px 30px;background-size: 85px 30px;}  /* 菜单栏图标 */
#header .header_ll{position: absolute;top: 0;left: 3rem;}
#header .header_ll a {width: 5rem;height:3rem;display: block;padding: 0 0.2rem;text-indent: -999em;overflow: hidden;}
</style>
</head>
<body>

<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <div class="header_ll"> <a class="ico_52" href="#">  </a> </div>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>
 

<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
    

  </div>
</div>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#focus",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".bd ul", 
	effect:"leftLoop", 
	autoPlay:true,//自动播放
	autoPage:true //自动分页
});
</script>

<div class="blank2"> </div>

<div id=content class="wrap">
  
	<?php echo $this->fetch('library/index_search.lbi'); ?>
  
  <div class="region row row_category">
    <ul class="flex flex-f-row">
    
	  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
      <li class="flex_in"> <a href="<?php echo $this->_var['nav']['url']; ?>"<?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank"<?php endif; ?> title="<?php echo $this->_var['nav']['name']; ?>"> <img src="<?php echo $this->_var['nav']['pic']; ?>" /> </a>
        <p> <?php echo $this->_var['nav']['name']; ?> </p>
      </li>
      <?php if ($this->_foreach['nav_middle_list']['iteration'] % 4 == 0 && $this->_foreach['nav_middle_list']['iteration'] != $this->_foreach['nav_middle_list']['total']): ?>
      </ul><ul class="flex flex-f-row">
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  
<!--				<div class="famous_sale_wrap">
					<div class="tbl-type">
                        <div class="tbl-cell">
							<a href="goods.php?id=195">
                                <img src="themes/jiajuz/images/hot_1.jpg" class="half-img" width="160" alt="欧芙伦来袭！128元的8寸蛋糕28元抢！！！" />
                            </a>
                        </div>
                        <div class="tbl-cell">
                            <div class="racks1-left" style="display:block!important">
								<a href="goods.php?id=198" class="racks-border">
                                    <img src="themes/jiajuz/images/hot_2.jpg" class="half-img" width="160" alt="比老干妈更好吃的辣椒酱来啦！不好吃不要钱，火的一塌糊涂！" />
                                </a>
								<a href="goods.php?id=199">
                                    <img src="themes/jiajuz/images/hot_3.jpg" class="half-img" width="160" alt="买牛奶送鸡蛋" />
                                </a>
                            </div>
                        </div>
					</div>
				</div>-->
<div class="blank2"> </div>

<?php $this->assign('cat_goods',$this->_var['cat_goods_4']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_4']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

</div>
 
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<nav id="menu" style="display:None">
  <ul>
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
    <li> <a href="<?php echo $this->_var['cat']['url']; ?>"> <?php echo htmlspecialchars($this->_var['cat']['name']); ?> </a>
      <ul>
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <li> <a href="<?php echo $this->_var['child']['url']; ?>"> <?php echo htmlspecialchars($this->_var['child']['name']); ?> </a>
          <ul>
            <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
            <li> <a href="<?php echo $this->_var['childer']['url']; ?>"> <?php echo htmlspecialchars($this->_var['childer']['name']); ?> </a> </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</nav>

<div id="main-search" class="main-search">
<div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
<div class="bd">
  <div class="search_box">
    <form action="search.php" method="post" id="searchForm" name="searchForm">
      <div class="content">
        <input class="text" type="search" name="keywords" id="keywordBox" autofocus />
        <button class="ico_07" type="submit" value="搜 索" onclick="return check('keywordBox')"></button>
      </div>
    </form>
  </div>
</div>
</div>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/ectouch.js"></script>
<script type="text/javascript">
window.onload = function(){
  $('#menu').css('display','');
}
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})
});
</script>
</body>
</html>