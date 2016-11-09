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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>	
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'easydialog.min.js,meilele_category.js')); ?> 
<div class="category-filter">
	<div class="w">
    	
    	<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?> 
    	<div id="JS_category_filter" class="filter">
        	<?php if ($this->_var['brand_id'] || ( ( $this->_var['price_max'] > $this->_var['price_min'] ) && $this->_var['price_max'] > 0 ) || $this->_var['price_max'] || $this->_var['filter_attr_sum'] > 0): ?>
            <dl class="selected clearfix">
            	<dt>您已选择</dt>
                
                <dd>
                	<table>
                    	<tr>
                        	
                        	<td>
                            	<?php if ($this->_var['brands']['1']): ?>
                            	<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
?> 
        						<?php if ($this->_var['brand']['selected'] && $this->_var['key'] > 0): ?> 
                            	<div class="current">
                                	<span><?php echo $this->_var['brand']['brand_name']; ?></span>
                                	<a href="<?php echo $this->_var['brands']['0']['url']; ?>" class="item"></a> 
                                </div>
                                <?php endif; ?> 
        						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                <?php endif; ?>
                                
                                <?php if ($this->_var['filter_attr_sum'] > 0): ?>
                                <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_94802700_1478585563');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_94802700_1478585563']):
?> 
                				<?php $_from = $this->_var['filter_attr_0_94802700_1478585563']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['attr']):
?>
                				<?php if ($this->_var['attr']['selected'] && $this->_var['key'] > 0): ?> 
                            	<div class="current">
                                	<span><?php echo $this->_var['attr']['attr_value']; ?></span>
                 					<a href="<?php echo $this->_var['attr']['del_url']; ?>" class="item"></a> 
                                </div>
                                <?php endif; ?> 
                				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <?php endif; ?> 
                                
                                <?php if (( $this->_var['price_max'] > $this->_var['price_min'] ) && $this->_var['price_max'] > 0): ?>
                                <div class="current">
                                	<span><?php echo $this->_var['price_min']; ?>&nbsp;-&nbsp;<?php echo $this->_var['price_max']; ?></span>
        							<a href="<?php echo $this->_var['price_grade']['0']['url']; ?>" class="item"></a> 
                                </div>
                                <?php endif; ?>
                            </td>
                            <td>
								<a class="clear" name="RESET" href="<?php echo $this->_var['clear_filter']; ?>">清空选择</a>
							</td>                            
                        </tr>
                    </table>
                </dd>
            </dl>
            <?php endif; ?> 
            <div id="search-options">
        		<?php if ($this->_var['brands']['1'] && ! $this->_var['brand_id']): ?>
                <dl class="brand clearfix">
                   <dt>品牌</dt>
                   <dd>
                   		<div class="lists">
                       		<table>
                              <tr>
                              <td>
                                  <div id="JS_brand_overflow" class="shell" style="height: 53px; overflow: hidden;">
                                      <ul class="clearfix">
                                          <?php $_from = $this->_var['brands_new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');$this->_foreach['brand_foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foo']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
        $this->_foreach['brand_foo']['iteration']++;
?>
                                          <?php if ($this->_var['key'] > 0): ?>
                                          <li <?php if ($this->_foreach['brand_foo']['iteration'] < 11): ?>class="li7"<?php endif; ?>>
                                              <div class="relative">
                                                <a class="abs" title="<?php echo $this->_var['brand']['brand_name']; ?>" href="<?php echo $this->_var['brand']['url']; ?>">
                                                    <span class="txt"><?php echo $this->_var['brand']['brand_name']; ?></span>
                                                 </a>
                                              </div>
                                              <a class="a" title="<?php echo $this->_var['brand']['brand_name']; ?>" href="<?php echo $this->_var['brand']['url']; ?>">
                                                <img width="102" height="51" src="<?php echo $this->_var['brand']['logo']; ?>" alt="<?php echo $this->_var['brand']['brand_name']; ?>">
                                              </a>
                                          </li>
                                          <?php endif; ?>
                                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>      
                                      </ul>
                                  </div>
                              </td>
                              <td class="more">
                                  <a id="JS_brand_more" class="jMore close JS_more" title="更多" style="display: inline-block;" href="javascript:;">
                                        <span>更多</span>
                                        <i></i>
                                  </a>
                              </td>
                              </tr>
                          </table>
                        </div>
                   </dd>
                </dl>
            	<?php endif; ?>
                
                <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_94902700_1478585563');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_94902700_1478585563']):
?>
                <?php if (! $this->_var['filter_attr_0_94902700_1478585563']['selected']): ?>
                <dl class="normal clearfix">
                	<dt><?php echo htmlspecialchars($this->_var['filter_attr_0_94902700_1478585563']['filter_attr_name']); ?></dt>
                    <dd>
                    	<div class="shell">
                        	<table>
                            	<tr>
                                	<td class="list">
                                    	<?php $_from = $this->_var['filter_attr_0_94902700_1478585563']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['attr']):
?>
                 						<?php if ($this->_var['key'] > 0): ?> 
                						<a href="<?php echo $this->_var['attr']['url']; ?>" class="item"><?php echo $this->_var['attr']['attr_value']; ?></a>
          		 						<?php endif; ?>
                						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    </td>
                                    <td class="more">
                                  		<a id="JS_brand_more" class="jMore close JS_more" title="更多" style="display: inline-block;" href="javascript:;">
                                        	<span>更多</span>
                                        	<i></i>
                                  		</a>
                              		</td>
                                </tr>
                            </table>
                        </div>
                    </dd>
                </dl>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
                <?php if ($this->_var['price_grade']['1'] && ! $this->_var['price_min'] && ! $this->_var['price_max']): ?>
                <dl class="normal clearfix">
                	<dt>价格</dt>
                    <dd>
                    	<div class="shell">
                        	<table>
                            	<tr>
                                	<td class="list">
                                    	<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['grade']):
?>
                  						<?php if ($this->_var['key'] > 0): ?>
                						<a href="<?php echo $this->_var['grade']['url']; ?>" class="item"><?php echo $this->_var['grade']['price_range']; ?></a>
                						<?php endif; ?>
                						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                        <form action="<?php echo $this->_var['price_grade']['0']['url']; ?>" method="post" id="freepriceform" style=" display:inline-block">
                    						<input type="text" value="" name="price_min" id="pricemin" class="min-price">
                                             - 
                    						<input type="text" value="" name="price_max" id="pricemax" class="max-price">
                      						<input type="submit" value="确定" onclick="return makeUri();" class="price-btn">
                  						</form>
                                    </td>
                                    <td class="more">
                                  		<a id="JS_brand_more" class="jMore close JS_more" title="更多" style="display: inline-block;" href="javascript:;">
                                        	<span>更多</span>
                                        	<i></i>
                                  		</a>
                              		</td>
                                </tr>
                            </table>
                        </div>
                    </dd>
                </dl>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?> 
        <script type="text/javascript">

    function makeUri() {
        // 开始价格 pricemin
        var v1 = document.getElementById("pricemin").value;
        // 截止价格 pricemax
        var v2 = document.getElementById("pricemax").value;
        if(v1 == '' || v2 == '' || !$.isNumeric(v1) || !$.isNumeric(v2) || parseInt(v1) > parseInt(v2)){
            alert('请输入正确的价格区间');
			return false;
        }
    }

</script>
		<div class="handle">
        	<a id="JS_exp_fliter" href="javascript:;">
            	<span>更多选项</span>
				<i></i>
            </a>
        </div>
        
    </div>
</div>
<div class="w self-panel">
	<div class="self-wrap">
    	<div class="s-info">
        	共<b class="i-num"> <?php echo $this->_var['list_count']; ?> </b>件商品
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
<?php echo $this->fetch('library/goods_list.lbi'); ?>        
<div class="page-panel">
	<div class="w p-wrap">
    	<?php echo $this->fetch('library/pages.lbi'); ?>
    </div>
</div>
<div id="JS_like_root" class="list-panel favour-panel">
	<div class="w list-wrap">
    	<h2 class="f-title">
        	<span class="Left">猜您喜欢</span>
        </h2>
        <ul class="list-goods clearfix favour-list">
        	<?php $_from = $this->_var['browse_related']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['brow'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brow']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['brow']['iteration']++;
?>
            <?php if ($this->_foreach['brow']['iteration'] < 5): ?> 
            <li class="g-item <?php if ($this->_foreach['brow']['iteration'] == 4): ?>last4<?php endif; ?>">
            	<div class="g-dtl">
                	<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['name']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" class="d-img" /></a>
                    <div class="d-price">
                    	<strong class="p-money">
							<sub class="m-mark">¥</sub>
							<span class="m-count JS_async_price"><?php echo $this->_var['goods']['shop_price']; ?></span>
						</strong>
                    </div>
                    <a class="d-name" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['name']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
                    <div class="d-tags">
                    	<span class="t-item t-sale">
                        	<a href="javascript:void(0);">
								已售
								<b class="t-num JS_async_sale_num"><?php echo $this->_var['goods']['sales_volume']; ?></b>
							</a>
                        </span>
                        <span class="t-item t-score">
                        	<a href="javascript:void(0);">
								评分
								<b class="t-num JS_async_score"><?php echo $this->_var['goods']['comment_ranks']; ?></b>
							</a>
                        </span>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</div>
<div class="mt10"></div>
<div class="fixture clearfix">
	<div class="fixture_module pright">
    	<div id="JS_fixture_recom" class="fixture_header clearfix">
        	<div class="fixture_title fixture_title_hot Left current">热卖商品</div>
			<div class="fixture_title fixture_title_pro Left">促销商品</div>
        </div>
        <?php echo $this->fetch('library/recommend_hot_category.lbi'); ?>	
        <?php echo $this->fetch('library/recommend_promotion_category.lbi'); ?>	
    </div>
    <div class="fixture_module pleft pright">
    	<div id="JS_fixture_article" class="fixture_header clearfix">
			<div class="fixture_title fixture_title_zixun Left current">资讯</div>
			<div class="fixture_title fixture_title_retie Left">热帖</div>
		</div>
        <ul class="fixture_knowledge fixture_knowledge_zixun">
        
<?php echo $this->fetch('library/cat_articles.lbi'); ?>

</ul>
<ul class="fixture_knowledge fixture_knowledge_retie none">

<?php echo $this->fetch('library/cat_articles.lbi'); ?>

</ul>
    </div>
    <div class="fixture_module fixture_tag pleft">
    	<div id="JS_fixture_tag" class="fixture_header clearfix">
			<div class="fixture_tagname Left">热门索引</div>
			<div class="fixture_title Left current"><?php echo $this->_var['on_cat_name']; ?></div>
		</div>
        <div class="fixture_show">
        	<?php $_from = $this->_var['categories_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories_left'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_left']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories_left']['iteration']++;
?>
            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
            <a title="<?php echo $this->_var['child']['name']; ?>" href="<?php echo $this->_var['child']['url']; ?>"><?php echo $this->_var['child']['name']; ?></a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(function(){
		var btn=$(".icon2"),content=$(".category_body"),title=$(".category_title"),i=0;
		title.click(function(){
			var index=title.index(this);
			if(index==i){
				var status=content.eq(index).css("display");
				if(status=="block"){
					content.eq(index).hide();
					btn.eq(index).text("+");
				}else{
					content.eq(index).show();
					btn.eq(index).text("−");
				}
			}else{
				i=index;
				content.hide();
				content.eq(index).show();
				btn.text("+");
				btn.eq(index).text("−");
			}
			
			
		});
		
		
		$(".category").find("dl").each(function(){
			var dt=$(this).children("dt"),b=dt.find("b"),dd=$(this).find("dd"),done=false;
			dt.click(function(){
				if(!done){
					dd.show();
					done=!done;
					b.text("−");
					b.addClass("current");
				}else{
					dd.hide();
					done=!done;
					b.text("+");
					b.removeClass("current");
				}
			});
		});
	});	
	
	$(function(){
		$('.fixture_title_hot').mouseover(function(){
			$(this).addClass('current');
			$('.fixture_title_pro').removeClass('current')
			$('.fixture_commune_pro').addClass('none')
			$('.fixture_commune_hot').removeClass('none')
		});
		$('.fixture_title_pro').mouseover(function(){
			$(this).addClass('current');
			$('.fixture_title_hot').removeClass('current')
			$('.fixture_commune_hot').addClass('none')
			$('.fixture_commune_pro').removeClass('none')
		});
	})
	
	$(function(){
		$('.fixture_title_zixun').mouseover(function(){
			$(this).addClass('current');
			$('.fixture_title_retie').removeClass('current')
			$('.fixture_knowledge_retie').addClass('none')
			$('.fixture_knowledge_zixun').removeClass('none')
		});
		$('.fixture_title_retie').mouseover(function(){
			$(this).addClass('current');
			$('.fixture_title_zixun').removeClass('current')
			$('.fixture_knowledge_zixun').addClass('none')
			$('.fixture_knowledge_retie').removeClass('none')
		});
	})
</script>
<div class="footer-box">
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
<?php echo $this->fetch('library/back-top.lbi'); ?>


<div id="JS_lightBox" class="lightBox MALERT MCONFIRM addToCart_LB" style="z-index: 300; display:none">
	
</div>

</body>
</html>


