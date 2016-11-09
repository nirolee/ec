<?php if ($this->_var['bought_goods']): ?>
<div class="recommend-data">
	<h3 class="title">购买了该商品的用户还购买了</h3>
    <ul>
    	<?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
        <li>
        	<div class="face">
            	<a target="_blank" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img height="129" width="195" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>"></a>
            </div>
            <div class="name">
            	<a target="_blank" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
            </div>
            <p class="clearfix">
            	<a class="red Left" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" target="_blank" href="<?php echo $this->_var['bought_goods_data']['url']; ?>">
                	¥<?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?> 
            		<?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?> 
            		<?php else: ?> 
            		<?php echo $this->_var['bought_goods_data']['shop_price']; ?> 
            		<?php endif; ?>
            	</a>
                <a class="goods_side_gray Right" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" target="_blank" href="<?php echo $this->_var['bought_goods_data']['url']; ?>">
					已售 <span class="red"><?php echo $this->_var['goods']['sales_volume']; ?></span>
				</a>                
            </p>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>


