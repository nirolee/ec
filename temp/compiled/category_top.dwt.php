<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/meilele/category_top.css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body class="screen-root">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'meilele_category.js')); ?>
<div class="w clearfix heig">
	<div class="sideMenu">
    	<div id="JS_fixed_goods_cat">
        	<div class="in">
            	<div class="head">所有<?php echo $this->_var['cat_name']; ?>分类</div>
                <div class="body">
                	<?php $_from = $this->_var['categories_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?>
                    <?php if (($this->_foreach['foo']['iteration'] - 1) % 2 == 0): ?>
                    <div class="catItem">
                    	<dl class="item_show">
                        	<dt class="dt">
                            	<a class="t" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>" href="<?php echo $this->_var['child']['url']; ?>">
									<img width="20" height="20" src="themes/meilele/images/<?php echo $this->_var['child']['id']; ?>.png">
									<?php echo htmlspecialchars($this->_var['child']['name']); ?>
								</a>
                                <strong class="arrow">></strong>
                            </dt>
                            <dd class="dd">
                            	<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['child']['iteration']++;
?>
                                <?php if ($this->_foreach['child']['iteration'] < 4): ?>
              					<a target="_blank" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                                <?php endif; ?>
              					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </dd>
                        </dl>
                        <div class="coverMenu d<?php echo $this->_foreach['foo']['iteration']; ?>">
                        	<div class="allCat">
                            	<div class="cat ctitle">
                                	<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                                </div>
                                <div class="link">
                                	<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                                	<span class="gray">
										| 
										<a target="_blank" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
									</span>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </div>
                            <div class="activity">
                            	
<?php echo $this->fetch('library/promotion_info.lbi'); ?>

                            </div>
                            <div class="brand clearfix" style="height:62px;padding-top:8px;">
                            	
<?php echo $this->fetch('library/brands.lbi'); ?>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (($this->_foreach['foo']['iteration'] - 1) % 2 == 1): ?>
                    <div class="catItem cat_bg">
                    	<dl class="item_show">
                        	<dt class="dt">
                            	<a class="t" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>" href="<?php echo $this->_var['child']['url']; ?>">
									<img width="20" height="20" src="themes/meilele/images/<?php echo $this->_var['child']['id']; ?>.png">
									<?php echo htmlspecialchars($this->_var['child']['name']); ?>
								</a>
                                <strong class="arrow">></strong>
                            </dt>
                            <dd class="dd">
                            	<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['child']['iteration']++;
?>
                                <?php if ($this->_foreach['child']['iteration'] < 4): ?>
              					<a target="_blank" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                                <?php endif; ?>
              					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </dd>
                        </dl>
                        <div class="coverMenu d<?php echo $this->_foreach['foo']['iteration']; ?>">
                        	<div class="allCat">
                            	<div class="cat ctitle">
                                	<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                                </div>
                                <div class="link">
                                	<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                                	<span class="gray">
										| 
										<a target="_blank" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
									</span>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </div>
                            <div class="activity">
                            	
<?php echo $this->fetch('library/promotion_info.lbi'); ?>

                            </div>
                            <div class="brand clearfix" style="height:62px;padding-top:8px;">
                            	
<?php echo $this->fetch('library/brands.lbi'); ?>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
            <div class="mt10 weixin_hide weixin_dis">
            	
<?php echo $this->fetch('library/ad_position.lbi'); ?>

            </div>
        </div>
    </div>
    <div class="focus">
    	<div class="stage">
        	<div id="JS_focus_stage">
                	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_name'],
  'type' => '头部幻灯片1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_name'],
  'type' => '头部幻灯片2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_name'],
  'type' => '头部幻灯片3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>                  
                	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_name'],
  'type' => '头部幻灯片4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>                  
            </div>        	
        </div>
        <div id="JS_focus_nav" class="nav clearfix hd">
        	<?php echo $this->fetch('library/category_top_lb_tit.lbi'); ?>
        </div>
    </div>
    <div class="sideWidth newProduct">
    	<?php echo $this->fetch('library/recommend_promotion_category_top.lbi'); ?>
    </div>
</div>
<div class="w clearfix">
	<div class="mt15 own_w_box">
    	<div class="o_b1_header">
        	<span id="dangji" class="bg2 sp">
				<span class="font_1">当季热卖</span>
				<span class="font_2">HOT</span>
			</span>
            <span id="xinpin" class="bg1 sp ml2">
				<span class="font_1">新品推荐</span>
				<span class="font_2">NEW</span>
			</span>
        </div>
        <div id="dangji_else" class="o_body1 clearfix">
        	
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

        </div>
        <div id="xinpin_else" class="o_body1 clearfix none">
        	
<?php echo $this->fetch('library/recommend_new.lbi'); ?>

        </div>
    </div>
</div>
<?php $_from = $this->_var['on_top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top_goods_0_84926300_1478249051');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['top_goods_0_84926300_1478249051']):
        $this->_foreach['foo']['iteration']++;
?>
<div id="floor_loo_<?php echo $this->_foreach['foo']['iteration']; ?>" class="w clearfix">
	<div class="clearfix mt15 own_w_box">
    	<div class="o_b2_header clearfix b_h_<?php echo $this->_foreach['foo']['iteration']; ?>">
        	<div class="title Left">
            	<span class="font_t_1 title_c_<?php echo $this->_foreach['foo']['iteration']; ?>"><?php echo $this->_foreach['foo']['iteration']; ?>F <?php echo $this->_var['top_goods_0_84926300_1478249051']['cat_name']; ?> </span>
            </div>
            <div class="biaoti Right">
            	<a class="mor more more_p_1 hove_<?php echo $this->_foreach['foo']['iteration']; ?>" target="_blank" href="<?php echo $this->_var['cat']['url']; ?>">更多</a>
            	<?php $_from = $this->_var['top_goods_0_84926300_1478249051']['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo2']['iteration']++;
?> 
                <a target="_blank" title="<?php echo $this->_var['cat']['cat_name']; ?>" href="<?php echo $this->_var['cat']['url']; ?>" class="hove_<?php echo $this->_foreach['foo']['iteration']; ?>"><?php echo $this->_var['cat']['cat_name']; ?></a> 
                <span style="vertical-align: middle;"> | </span>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <div class="o_b2_body clearfix">
        	<div class="Left">
            	<div class="slide Left">
                	<div class="stage">
                    	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_84926300_1478249051']['cat_name'],
  'type' => '顶级分类页左侧广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
                    </div>
                </div>
            </div>
            <div class="o_b3_body Left">
            	<div class="list_2 Left clearfix">
                	<?php $_from = $this->_var['top_goods_0_84926300_1478249051']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['child_no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['child_no']['iteration']++;
?> 
                    <?php if ($this->_foreach['child_no']['iteration'] < 5): ?> 
                    <div class="in_li Left clearfix <?php if (($this->_foreach['child_no']['iteration'] - 1) % 2 == 1): ?>b_none<?php endif; ?>">
                    	<div class="img Left">
                        	<a title="" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="161" height="116" /></a>
                        </div>
                        <div class="word Left">
                        	<a title="<?php echo $this->_var['goods']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
                            <br>
							<p class="red fz_1"><?php echo $this->_var['goods']['brief']; ?></p>
                            <span class="lih">
								<span class="fz_1 red">¥</span>
								<span class="fz_2 red"><?php if ($this->_var['goods']['promote_price'] > 0): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span>
							</span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
            <div class="clearfix Left adv_3_box">
            	<div class="tip">热卖排行榜</div>
                <?php $_from = $this->_var['top_goods_0_84926300_1478249051']['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['yoo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['yoo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['yoo']['iteration']++;
?>
                <?php if ($this->_foreach['yoo']['iteration'] < 4): ?> 
                <div id="JS_<?php echo $this->_foreach['foo']['iteration']; ?>_<?php echo $this->_foreach['yoo']['iteration']; ?>" class="list Left" onmouseover="this.className='list Left d_hover_<?php echo $this->_foreach['foo']['iteration']; ?>'" onmouseout="this.className='list Left'">
                	<div class="up clearfix">
                    	<div class="img Left">
                        	<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">
                            	<i class="icon_adv icon_adv_<?php echo $this->_foreach['foo']['iteration']; ?>"><?php echo $this->_foreach['yoo']['iteration']; ?></i>
                            	<img width="100" height="65" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>">
                            </a>
                        </div>
                        <div class="words Left">
                        	<p class="red">
								<span class="red f_12">¥ </span>
								<span class="red f_20">
                                	<?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?>
                                </span>
							</p>
                            <p class="font_h">
								<a target="_blank" style="color: #999;" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a>
							</p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <div class="o_b4_body clearfix">
        	<div class="list_1 Left">
            	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_84926300_1478249051']['cat_name'],
  'type' => '顶级分类页底部广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
            </div>
            <div class="list_1 Left">
            	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_84926300_1478249051']['cat_name'],
  'type' => '顶级分类页底部广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
            </div>
            <div class="list_1 Left">
            	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_84926300_1478249051']['cat_name'],
  'type' => '顶级分类页底部广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
            </div>
            <div class="list_1 Left">
            	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_84926300_1478249051']['cat_name'],
  'type' => '顶级分类页底部广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
            </div>
        </div>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="w clearfix">
	<div class="own_w_box">
    	<div class="comMap clearfix">
        	<div class="mapItem cuxiao first Left">
				<?php echo $this->fetch('library/promotion_info_new.lbi'); ?>
			</div>
            <div class="mapItem moveLay reping Left">
                <div class="title">
                	<strong class="Left">最新热评</strong>
                </div>
                <div class="body outBox_top">
                	<div class="outBox bd">
                    	<div id="JS_comment_list_stage" class="top-ul">
                        	<?php $_from = $this->_var['my_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['no']['iteration']++;
?>
                            <div class="list">
                            	<div class="img">
                                	<a href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" title="<?php echo $this->_var['comments']['goods_name']; ?>" target="_blank">
        								<img alt="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" width="119" height="79" />
        							</a>
                                </div>
                                <p>
									<a title="<?php echo $this->_var['comments']['goods_name']; ?>" target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo sub_str($this->_var['comments']['content'],76); ?></a>
								</p>
                                <div class="star">
									<div class="bg">
										<span class="w<?php if ($this->_var['comments']['comment_rank'] == 1): ?>1<?php elseif ($this->_var['comments']['comment_rank'] == 2): ?>2<?php elseif ($this->_var['comments']['comment_rank'] == 3): ?>3<?php elseif ($this->_var['comments']['comment_rank'] == 4): ?>4<?php elseif ($this->_var['comments']['comment_rank'] == 5): ?>5<?php endif; ?>"></span>
									</div>
								</div>
                                <div class="uname">
                                	<a class="orange" target="_blank" href="user.php"><?php if ($_SESSION['user_name']): ?><?php echo $_SESSION['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></a>
                                </div>
                            </div>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="JS_newdeal" class="mapItem moveLay chengjiao Left">
            	<div class="title">
					<strong class="Left">最新成交</strong>
				</div>
                <div class="body">
                	<div class="outBox">
                    	<div id="INDEX_LeiHao_XXXXX">
                        	<?php $_from = $this->_var['new_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no1']['iteration']++;
?>
                   			<div class="list">
                            	<div class="img">
									<a title="<?php echo $this->_var['goods']['short_name']; ?>" target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">
										<img width="119" height="79" alt="<?php echo $this->_var['goods']['short_name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>">
									</a>
								</div>
                                <p class="name">
									<a title="<?php echo $this->_var['goods']['short_name']; ?>" target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
								</p>
                                <p class="uname">
									<a target="_blank" href="user.php"><?php echo $this->_var['goods']['user_name']; ?></a>
								</p>
                                <p class="time"><?php echo $this->_var['goods']['add_time']; ?>购买了此商品</p>
                            </div>
                   			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="comMap clearfix">
        	<div class="mapLeft Left">
            	<div class="mapItem chuangyi first">
                	
<?php echo $this->fetch('library/cat_articles.lbi'); ?>

                </div>
            </div>
            <div class="mapItem xiujia Left">
            	<div class="title">
					<strong class="Left">美家实拍秀</strong>
					<span class="Left">月月大礼，次次惊喜，更有热卖商品免费拿！</span>
					<a class="Right" title="我要晒家" target="_blank" href="user.php?act=single_sun">我要晒家>></a>
				</div>
                <div class="body">
                	<div class="map1 Left">
                    	<?php $_from = $this->_var['single_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'single');$this->_foreach['single'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['single']['total'] > 0):
    foreach ($_from AS $this->_var['single']):
        $this->_foreach['single']['iteration']++;
?>
                        <?php if ($this->_foreach['single']['iteration'] == 1): ?>
                        <div class="td">
                        	<a target="_blank" href="goods.php?id=<?php echo $this->_var['single']['goods_id']; ?>">
								<img src="<?php echo $this->_var['single']['thumb_url']; ?>" width="141" height="115" />
							</a>
                        </div>
                        <?php endif; ?>
                        <?php if ($this->_foreach['single']['iteration'] == 2): ?>
                        <div class="td mt3">
                        	<a target="_blank" href="goods.php?id=<?php echo $this->_var['single']['goods_id']; ?>">
								<img src="<?php echo $this->_var['single']['thumb_url']; ?>" width="141" height="115" />
							</a>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <div class="map2 Left">
                    	<?php $_from = $this->_var['single_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'single');$this->_foreach['single'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['single']['total'] > 0):
    foreach ($_from AS $this->_var['single']):
        $this->_foreach['single']['iteration']++;
?>
                        <?php if ($this->_foreach['single']['iteration'] == 3): ?>
                        <div class="td">
                        	<a target="_blank" href="goods.php?id=<?php echo $this->_var['single']['goods_id']; ?>">
								<img src="<?php echo $this->_var['single']['thumb_url']; ?>" width="327" height="233" />
							</a>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <div class="map1 Right">
                    	<?php $_from = $this->_var['single_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'single');$this->_foreach['single'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['single']['total'] > 0):
    foreach ($_from AS $this->_var['single']):
        $this->_foreach['single']['iteration']++;
?>
                        <?php if ($this->_foreach['single']['iteration'] == 4): ?>
                        <div class="td">
                        	<a target="_blank" href="goods.php?id=<?php echo $this->_var['single']['goods_id']; ?>">
								<img src="<?php echo $this->_var['single']['thumb_url']; ?>" width="141" height="115" />
							</a>
                        </div>
                        <?php endif; ?>
                        <?php if ($this->_foreach['single']['iteration'] == 5): ?>
                        <div class="td mt3">
                        	<a target="_blank" href="goods.php?id=<?php echo $this->_var['single']['goods_id']; ?>">
								<img src="<?php echo $this->_var['single']['thumb_url']; ?>" width="141" height="115" />
							</a>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<div class="footer-box">
	
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
	
</div>
<?php echo $this->fetch('library/back-top.lbi'); ?>
<script type="text/javascript">
 $(function() {
    var d = $("#xinpin");
    var k = $("#xinpin_else");
    var g = $("#dangji");
    var a = $("#dangji_else");
    d.mouseover (function() {
        a.attr("class","o_body1 clearfix none");
        k.attr("class","o_body1 clearfix");
        g.attr("class","bg1 sp ");
        d.attr("class","bg2 sp ml2");
    });
    g.mouseover (function() {
        k.attr("class","o_body1 clearfix none");
        a.attr("class","o_body1 clearfix");
        d.attr("class","bg1 sp ml2");
        g.attr("class","bg2 sp");
    });

 })
 jQuery(".outBox_top").slide({mainCell:".bd .top-ul",autoPage:true,effect:"top",autoPlay:true,vis:3});
 jQuery("#JS_newdeal").slide({mainCell:".body #INDEX_LeiHao_XXXXX",autoPage:true,effect:"top",autoPlay:true,vis:3});
</script>
<script type="text/javascript">
	$(function(){
		$('.catItem').mouseover(function(){
			$(this).addClass('hover')
		})
		$('.catItem').mouseout(function(){
			$(this).removeClass('hover')
		});
		
		
		var headHeight=253;  //这个高度其实有更好的办法的。使用者根据自己的需要可以手工调整。 
			var nav=$("#JS_fixed_goods_cat");
			$(window).scroll(function(){ 
				if($(this).scrollTop()>headHeight){
				nav.addClass("fixedLay");
			}
			else{
					nav.removeClass("fixedLay");
				}
		});
	});
</script>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>


