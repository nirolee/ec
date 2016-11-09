<?php if ($this->_var['new_goods']): ?>
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_87926400_1478249051');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_87926400_1478249051']):
?>
<div class="o_list Left">
	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_87926400_1478249051']['name']); ?>" href="<?php echo $this->_var['goods_0_87926400_1478249051']['url']; ?>"><img src="<?php echo $this->_var['goods_0_87926400_1478249051']['thumb']; ?>" width="156" height="130"></a>
    <div class="o_b1_title">
    	<table width="100%">
        	<tr>
            	<td class="c_1 f_1" width="100%" align="center">
                	<span class="s_1">¥</span>
					<span class="s_2">
                    	<?php if ($this->_var['goods_0_87926400_1478249051']['promote_price'] != ""): ?>
        				<?php echo $this->_var['goods_0_87926400_1478249051']['promote_price']; ?>
        				<?php else: ?>
        				<?php echo $this->_var['goods_0_87926400_1478249051']['shop_price']; ?>
        				<?php endif; ?>
                    </span>
                </td>
            </tr>
        </table>
    </div>
    <div class="o_b1_title c_3 o_t_c">
    	<a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_87926400_1478249051']['name']); ?>" href="<?php echo $this->_var['goods_0_87926400_1478249051']['url']; ?>"><?php echo $this->_var['goods_0_87926400_1478249051']['short_style_name']; ?></a>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>


