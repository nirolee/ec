<div id="JS_sort_panel" class="sort-panel">
	<div class="w list-bg sort-wrap">
    	<form method="GET" name="listform">
    		<ul class="s-attrs clearfix">
        		<li>
            		<a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="a-key <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?> list-bg a-cur<?php endif; ?>">综合</a>
            	</li>
            	<li>
            		<a class="a-key <?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>sales_volume_<?php echo $this->_var['pager']['order']; ?> list-bg a-cur<?php endif; ?>" title="销量" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" >销量 <b class="list-bg k-icon k-<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?><?php echo $this->_var['pager']['order']; ?><?php endif; ?>"></b></a>
            	</li>
            	<li>
            		<a class="a-key <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>search_<?php echo $this->_var['pager']['order']; ?> list-bg a-cur<?php endif; ?>" title="价格" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格 <b class="list-bg k-icon k-<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php endif; ?>"></b></a>
            	</li>
            	<li>
            		<a class="a-key <?php if ($this->_var['pager']['sort'] == 'last_update'): ?>search_<?php echo $this->_var['pager']['order']; ?> list-bg a-cur<?php endif; ?>" title="上架时间" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">最新 <b class="list-bg k-icon k-<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php endif; ?>"></b></a>
            	</li>
        	</ul>
        	<input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      		<input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      		<input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      		<input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      		<input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      		<input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      		<input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      		<input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      		<input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
        </form>
        <div class="s-options">
        	<div class="s-page">
            	<span class="p-info"><?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['pager']['page'] == $this->_var['key']): ?><?php echo $this->_var['key']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>/<?php echo $this->_var['pager']['page_count']; ?></span>
                <?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="list-bg p-btn p-prev"></a><?php else: ?><a href="javascript:void(0);" class="list-bg p-btn p-prev-disabled"></a><?php endif; ?> 
        		<?php if ($this->_var['pager']['page_next']): ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="list-bg p-btn p-next"></a><?php else: ?><a href="javascript:void(0);" class="list-bg p-btn p-next-disabled"></a><?php endif; ?>
            </div>
        </div>
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

