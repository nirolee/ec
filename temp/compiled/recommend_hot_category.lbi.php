<?php if ($this->_var['hot_goods']): ?>
<div class="fixture_commune fixture_commune_hot">
	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98902900_1478585563');$this->_foreach['hot'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_98902900_1478585563']):
        $this->_foreach['hot']['iteration']++;
?>
    <?php if ($this->_foreach['hot']['iteration'] == 1): ?>
	<div class="commune_notes">
    	<div class="commune_pic">
        	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_98902900_1478585563']['name']); ?>" href="<?php echo $this->_var['goods_0_98902900_1478585563']['url']; ?>"><img src="<?php echo $this->_var['goods_0_98902900_1478585563']['thumb']; ?>" width="146" height="97"/></a>  
        </div>
        <div class="commune_txt">
        	<p>
            	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_98902900_1478585563']['name']); ?>"  href="<?php echo $this->_var['goods_0_98902900_1478585563']['url']; ?>"><?php echo $this->_var['goods_0_98902900_1478585563']['short_style_name']; ?></a>
                <br />
                本站价:
				<span class="yen red bold">¥<?php if ($this->_var['goods_0_98902900_1478585563']['promote_price'] != ""): ?> <?php echo $this->_var['goods_0_98902900_1478585563']['promote_price']; ?> <?php else: ?> <?php echo $this->_var['goods_0_98902900_1478585563']['shop_price']; ?> <?php endif; ?></span>
                <br />
                <span class="gray">
					月销量:
					<span class="orange"><?php echo $this->_var['goods_0_98902900_1478585563']['sales_volume']; ?></span>
				</span>                
            </p>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <ul class="commune_info">
    	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98902900_1478585563');$this->_foreach['hot'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_98902900_1478585563']):
        $this->_foreach['hot']['iteration']++;
?>
        <?php if ($this->_foreach['hot']['iteration'] < 4): ?>
        <li>
        	• <a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_98902900_1478585563']['name']); ?>"  href="<?php echo $this->_var['goods_0_98902900_1478585563']['url']; ?>"><?php echo $this->_var['goods_0_98902900_1478585563']['short_style_name']; ?></a>
            <span class="gray fixture_span_pirce">
				本站价：
				<span class="yen red">¥<?php if ($this->_var['goods_0_98902900_1478585563']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_98902900_1478585563']['promote_price']; ?> <?php else: ?> <?php echo $this->_var['goods_0_98902900_1478585563']['shop_price']; ?> <?php endif; ?></span>
			</span>	
        </li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?> 


