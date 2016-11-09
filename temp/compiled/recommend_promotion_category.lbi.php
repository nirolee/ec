<?php if ($this->_var['promotion_goods']): ?>
<div class="fixture_commune fixture_commune_pro none">
	<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_99203000_1478585563');$this->_foreach['pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pro']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_99203000_1478585563']):
        $this->_foreach['pro']['iteration']++;
?>
    <?php if ($this->_foreach['pro']['iteration'] == 1): ?>
	<div class="commune_notes">
    	<div class="commune_pic">
        	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_99203000_1478585563']['name']); ?>" href="<?php echo $this->_var['goods_0_99203000_1478585563']['url']; ?>"><img src="<?php echo $this->_var['goods_0_99203000_1478585563']['thumb']; ?>" width="146" height="97"/></a>  
        </div>
        <div class="commune_txt">
        	<p>
            	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_99203000_1478585563']['name']); ?>"  href="<?php echo $this->_var['goods_0_99203000_1478585563']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_99203000_1478585563']['short_name']); ?></a>
                <br />
                本站价:
				<span class="yen red bold">¥<?php echo $this->_var['goods_0_99203000_1478585563']['promote_price']; ?></span>
                <br />
                <span class="gray">
					月销量:
					<span class="orange"><?php echo $this->_var['goods_0_99203000_1478585563']['sales_volume']; ?></span>
				</span>                
            </p>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <ul class="commune_info">
    	<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_99203000_1478585563');$this->_foreach['pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pro']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_99203000_1478585563']):
        $this->_foreach['pro']['iteration']++;
?>
        <?php if ($this->_foreach['pro']['iteration'] < 4): ?>
        <li>
        	• <a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_99203000_1478585563']['name']); ?>"  href="<?php echo $this->_var['goods_0_99203000_1478585563']['url']; ?>" style=" width:150px; overflow:hidden;"><?php echo htmlspecialchars($this->_var['goods_0_99203000_1478585563']['short_name']); ?></a>
            <span class="gray fixture_span_pirce">
				本站价：
				<span class="yen red">¥<?php echo $this->_var['goods_0_99203000_1478585563']['promote_price']; ?></span>
			</span>	
        </li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>

