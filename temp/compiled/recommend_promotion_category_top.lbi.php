<?php if ($this->_var['promotion_goods']): ?>
<div class="title">
	<span></span>
	<strong>促销特惠</strong>
</div>
<div class="body">
	<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no']['iteration']++;
?>
    <?php if ($this->_foreach['no']['iteration'] < 3): ?> 
	<div class="list else <?php if ($this->_foreach['no']['iteration'] == 1): ?>first<?php endif; ?>">
    	<div class="float_bg">
        	<span class="text1">抢</span>
        </div>
        <div class="img">
        	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>" style=" display:inline-block;"> <img src="<?php echo $this->_var['goods']['thumb']; ?>" width="146" height="97" /></a>
        </div>
        <div class="txt">
        	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a>
            <br>
            <span class=" lh20">
				特惠价：
				<strong class="reds lh20 yen">¥<?php echo $this->_var['goods']['promote_price']; ?></strong>
			</span>
            <br>
			<span class=" lh20">仅剩:</span>
            <span class="endtime last_time" value="<?php echo $this->_var['goods']['end_date']; ?>"></span>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>

