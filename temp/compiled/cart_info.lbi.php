<a class="cart" href="flow.php">
	<b class="common-bg cart-icon"></b>购物车<b class="common-bg cart-arrow"></b>
</a>
<span id="hd_cartnum" class="cart-num"><?php echo $this->_var['number']; ?></span>
<span class="blank none"> </span>
<div id="JS_cart_box" class="cart-box">
	<?php if ($this->_var['cart_list']): ?>
    <ul class="cart-list cart-full cart-full3">
    	<?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class=" cart-item">
        	<a class="Left" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">
				<img class="cart-img" alt="<?php echo $this->_var['goods']['short_name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>">
			</a>
            <a class="cart-link" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['short_name']; ?>" target="_blank"><?php echo $this->_var['goods']['short_name']; ?></a>
            <p class="cart-cal">
				<a class="cart-del Right Cart_del" href="javascript:deleteCartGoods(<?php echo $this->_var['goods']['rec_id']; ?>);">删除</a>
				<strong class="cart-price red">¥<?php echo $this->_var['goods']['shop_price']; ?></strong>×<strong class="black"><?php echo $this->_var['goods']['goods_number']; ?></strong>
			</p>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="cart-count">
    	<p class="count-area">
			共<span id="totalNumber"><?php echo $this->_var['number']; ?></span>件商品，共计<strong id="totalDesc" class="count-total red">¥<?php echo $this->_var['amount']; ?></strong>
		</p>
        <a class="count-btn" href="./flow.php" target="_blank">去购物车结算</a>
    </div>
    <?php else: ?>
    <ul class="cart-list">
		<li class="nothing">
			<b class="common-bg nothing-icon"></b>
 			购物车中还没有商品，赶紧选购吧！
		</li>
	</ul>
    <?php endif; ?>
</div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
  }
}
</script> 

