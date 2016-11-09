<?php if ($this->_var['promotion_info']): ?>
<div class="title">
	<strong class="Left">最新促销活动</strong>
</div>
<div class="body">
	<div class="ad">
    	<?php 
$k = array (
  'name' => 'ads',
  'id' => '35',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
    <ul>
    	<?php $_from = $this->_var['promotion_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_88026500_1478249051');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_88026500_1478249051']):
        $this->_foreach['no']['iteration']++;
?>
        <?php if ($this->_foreach['no']['iteration'] < 6): ?> 
        <li>
        	• <a href="<?php echo $this->_var['item_0_88026500_1478249051']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item_0_88026500_1478249051']['type']]; ?> <?php echo $this->_var['item_0_88026500_1478249051']['act_name']; ?><?php echo $this->_var['item_0_88026500_1478249051']['time']; ?>"><?php echo $this->_var['item_0_88026500_1478249051']['act_name']; ?></a>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>

