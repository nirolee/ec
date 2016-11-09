<?php if ($this->_var['promotion_info']): ?>
<div class="ctitle">促销活动</div>
<ul class="clearfix">
	<?php $_from = $this->_var['promotion_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['promotion_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_info']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['promotion_info']['iteration']++;
?>
    <?php if ($this->_foreach['promotion_info']['iteration'] < 4): ?> 
    <li><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="background:none; padding-left:0px;"> • <?php echo $this->_var['item']['act_name']; ?></a></li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<?php endif; ?>

