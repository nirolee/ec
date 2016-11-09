<?php if ($this->_var['related_goods']): ?>
<div class="title">
	<div class="text">
		<span>相关商品</span>
	</div>
	<div class="line"></div>
</div>
<div class="stage">
	<ul id="JS_recommend_scroll_stage">
    	<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
        <li>
        	<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" width="140" height="92"></a>
            <p class="p1">
            	<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a>
            </p>
            <p class="red">
            	¥<?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
        		<?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?>
        		<?php else: ?>
        		<?php echo $this->_var['releated_goods_data']['shop_price']; ?>
        		<?php endif; ?>
        	</p>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<div id="JS_recommend_scroll_btn" class="arrow">
	<a class="prev" href="javascript:;"></a>
	<a class="next" href="javascript:;"></a>
</div>
<script type="text/javascript">
jQuery(".goods-recommend").slide({titCell:".hd ul",mainCell:".stage ul",autoPage:true,effect:"topLoop",autoPlay:false,vis:4,scroll:4,trigger:"click"});
</script>
<?php endif; ?>


