<?php if ($this->_var['hot_goods']): ?>
<?php if ($this->_var['script_name'] == "category_top"): ?>
<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?>
<div class="o_list Left">
	<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img width="156" height="130" src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
    <div class="o_b1_title">
    	<table width="100%">
        	<tr>
            	<td class="c_1 f_1" width="45%">
                	<span class="s_1">¥</span>
					<span class="s_2">
                    	<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
            			<?php echo $this->_var['goods']['promote_price']; ?> 
            			<?php else: ?> 
            			<?php echo $this->_var['goods']['shop_price']; ?> 
            			<?php endif; ?>
            		</span>
                </td>
                <td width="55%">
					<span class=" s_1 c_2">已售 </span>
					<span class=" s_1 c_1"><?php echo $this->_var['goods']['sales_volume']; ?></span>
					<span class="s_1 c_2"> 件</span>
				</td>
            </tr>
        </table>
    </div>
    <div class="o_b1_title c_3">
    	<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php elseif ($this->_var['script_name'] == "category"): ?>
<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['doo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['doo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['doo']['iteration']++;
?>
<?php if ($this->_foreach['doo']['iteration'] == 1): ?> 
<div class="hot-list-box current" style=" border-top:0px" onmouseover="showCurrentImg(this);">
	<div class="list-titles">
    	<s><?php echo $this->_foreach['doo']['iteration']; ?></s>
        <a class="black" target="_blank" title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
        <span class="red price">
        	¥<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
            <?php echo $this->_var['goods']['promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['goods']['shop_price']; ?> 
            <?php endif; ?>
        </span>
    </div>
    <div class="list-images">
    	<a class="good-img" alt="<?php echo $this->_var['goods']['short_style_name']; ?>" target="_blank" title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>">
			<img width="160" height="106" alt="<?php echo $this->_var['goods']['short_style_name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>" >
		</a>
        <div class="good-info">
			本站价：
			<span class=" red yen">
            	¥<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
            	<?php echo $this->_var['goods']['promote_price']; ?> 
            	<?php else: ?> 
            	<?php echo $this->_var['goods']['shop_price']; ?> 
            	<?php endif; ?>
            </span>
			<span class="gray">销量：</span>
			<span class="orange"><?php echo $this->_var['goods']['sales_volume']; ?></span>
		</div>
    </div>
</div>
<?php else: ?>
<div class="hot-list-box" onmouseover="showCurrentImg(this);">
	<div class="list-titles">
    	<s><?php echo $this->_foreach['doo']['iteration']; ?></s>
        <a class="black" target="_blank" title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
        <span class="red price">
        	¥<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
            <?php echo $this->_var['goods']['promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['goods']['shop_price']; ?> 
            <?php endif; ?>
        </span>
    </div>
    <div class="list-images">
    	<a class="good-img" alt="<?php echo $this->_var['goods']['short_style_name']; ?>" target="_blank" title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>">
			<img width="160" height="106" alt="<?php echo $this->_var['goods']['short_style_name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>" >
		</a>
        <div class="good-info">
			本站价：
			<span class=" red yen">
            	¥<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
            	<?php echo $this->_var['goods']['promote_price']; ?> 
            	<?php else: ?> 
            	<?php echo $this->_var['goods']['shop_price']; ?> 
            	<?php endif; ?>
            </span>
			<span class="gray">销量：</span>
			<span class="orange"><?php echo $this->_var['goods']['sales_volume']; ?></span>
		</div>
    </div>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<script type="text/javascript">
function showCurrentImg(a) {
    var b = $(a);
    b.addClass("current");
    b.siblings("").removeClass("current");
}
</script>
<?php elseif ($this->_var['script_name'] == "group"): ?>
<div class="tg_dtlR">
	<h2 class="f14">热卖商品</h2>
    <ul class="list">
    	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li>
        	<p><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img width="180" height="118" src="<?php echo $this->_var['goods']['thumb']; ?>"></a></p>
            <p class="name"><a class="title" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></p>
            <p class="tprc"> 本站价:<span class="yen">¥<?php if ($this->_var['goods']['promote_price'] != ""): ?> <?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?> <?php echo $this->_var['goods']['shop_price']; ?> <?php endif; ?></span></p>
            <p class="prc clearfix"><span class="Left">市场价:<del class="yen">¥<?php echo $this->_var['goods']['market_price']; ?></del></span> <span class="Right">已抢购<b><?php echo $this->_var['goods']['sales_volume']; ?></b></span></p>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php else: ?>
<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot']['iteration']++;
?>
<div class="goods4_list <?php if ($this->_foreach['hot']['iteration'] == 1): ?>first<?php endif; ?>">
	<div class="img">
    	<span class="yahei">
			<strong><?php echo $this->_var['goods']['zhekou']; ?></strong>
			<br>
			折
		</span>
    	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>"></a>  
    </div>
    <p class="info">
    	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  href="<?php echo $this->_var['goods']['url']; ?>" style=" width:290px;text-overflow:ellipsis; overflow:hidden; white-space:nowrap; display:inline-block"><?php echo $this->_var['goods']['short_style_name']; ?></a>	
        <br />
        价格：
        <span class="yen red">¥</span>
        <strong class="pr red"><?php if ($this->_var['goods']['promote_price'] != ""): ?> 
        <?php echo $this->_var['goods']['promote_price']; ?> 
        <?php else: ?> 
        <?php echo $this->_var['goods']['shop_price']; ?> 
        <?php endif; ?></strong>
    </p>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?> 
<?php endif; ?> 


