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
<link rel="stylesheet" type="text/css" href="themes/meilele/category_wide.css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'easydialog.min.js,meilele_category.js')); ?> 

<?php if ($this->_var['goods_list']): ?>
<div class="category-filter">
	<div class="w">
    	<div class="prompt-info" style=" border-bottom:1px solid #e6e6e6">
        	<strong class="red f14">
            	<?php if ($this->_var['intromode'] == 'best'): ?>
         		<?php echo $this->_var['lang']['best_goods']; ?>
         		<?php elseif ($this->_var['intromode'] == 'new'): ?>
         		<?php echo $this->_var['lang']['new_goods']; ?>
         		<?php elseif ($this->_var['intromode'] == 'hot'): ?>
         		<?php echo $this->_var['lang']['hot_goods']; ?>
         		<?php elseif ($this->_var['intromode'] == 'promotion'): ?>
         		<?php echo $this->_var['lang']['promotion_goods']; ?>
         		<?php else: ?>
         		<?php echo $this->_var['lang']['search_result']; ?>
         		<?php endif; ?>
            </strong>
        </div>
    </div>
</div>
<div class="w self-panel">
	<div class="self-wrap">
    	<div class="s-info">
        	共<b class="i-num"> <?php echo $this->_var['pager']['record_count']; ?> </b>件商品
        </div>
        <ul class="s-srvs clearfix">
        	<ul class="s-srvs clearfix">
            	<li class="s-item">
                	<span class="s-title">家居网配送商品服务</span>
                </li>
                <li class="s-item">
					<a class="link back" target="_blank" href="#">45天退换</a>
				</li>
                <li class="s-item">
					<a class="link year" target="_blank" href="#">质保三年</a>
				</li>
                <li class="s-item">
					<a class="link pay" target="_blank" href="#">贵就赔</a>
				</li>
            </ul>
        </ul>
    </div>
</div>
<div id="JS_list_panel" class="list-panel">
	<div class="w list-wrap">
    	<ul class="list-goods clearfix">
        	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['gli'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gli']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['gli']['iteration']++;
?>
          	<?php if ($this->_var['goods']['goods_id']): ?>
        	<li class="g-item <?php if (($this->_foreach['gli']['iteration'] - 1) % 4 == 3): ?>last4<?php endif; ?>">
            	<?php if ($this->_var['goods']['watermark_img'] != ""): ?>
            	<div class="g-float" style="background:url(themes/meilele/images/<?php echo $this->_var['goods']['watermark_img']; ?>.png) center center no-repeat;_background: none;_filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(images/<?php echo $this->_var['goods']['watermark_img']; ?>.png);"></div>
                <?php endif; ?>
                <div class="g-dtl">
                	<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img title="<?php echo $this->_var['goods']['goods_name']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" class="d-img"></a>
                    <div class="d-price">
                    	<strong class="p-money">
							<sub class="m-mark">¥</sub>
							<span class="m-count JS_async_price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?> </span>
						</strong>
                        <del class="p-del">
							<sub class="d-mark">¥</sub>
							<?php echo $this->_var['goods']['shop_price']; ?>
						</del>
                    </div>
                    <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="d-name"><span><?php echo $this->_var['goods']['goods_name']; ?></span><span class="n-extra"><?php echo $this->_var['goods']['goods_brief']; ?></span></a>
                    <div class="d-tags">
                    	<span class="t-item t-sale" style=" width:265px; border-right:none">
                        	<a href="javascript:void(0);">
								已售
								<b class="t-num JS_async_sale_num"><?php echo $this->_var['goods']['sales_volume']; ?></b>
							</a>
                        </span>
                    </div>
                    <div class="d-options">
                    	<a class="list-bg o-btn o-cart" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">
							<b class="list-bg o-icon"></b>
							<span>加入购物车</span>
						</a>
						<a class="list-bg o-btn o-collect" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);">收藏</a>
                    </div>
                </div>                
            </li>
            <?php endif; ?>
          	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</div>
<?php else: ?>
<div style="padding:20px 0px; text-align:center"><?php echo $this->_var['lang']['no_search_result']; ?></div>
<?php endif; ?>       
<div class="page-panel">
	<div class="w p-wrap">
    	<?php echo $this->fetch('library/pages.lbi'); ?>
    </div>
</div>
<div class="footer-box">
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
<?php echo $this->fetch('library/back-top.lbi'); ?>
<div id="JS_lightBox" class="lightBox MALERT MCONFIRM addToCart_LB" style="z-index: 300; display:none">
	
</div>
</body>
</html>


