<?php if (empty ( $this->_var['order_query'] )): ?>
<script>var invalid_order_sn = "<?php echo $this->_var['lang']['invalid_order_sn']; ?>"</script>
<div class="input">
	<form name="ecsOrderQuery">
    	<input type="text" name="order_sn"  />
        <div class="input login">
        	<input type="button" value="查询" class="f14 query_bg login_btn yahei" onclick="orderQuery()" style=" border:none; padding:0; cursor:pointer"/>
        </div>
    </form>
    <div id="ECS_ORDER_QUERY" style="margin-top:8px;">
      <?php else: ?>
      <?php if ($this->_var['order_query']['user_id']): ?>
	  <b><?php echo $this->_var['lang']['order_number']; ?>：</b><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['order_query']['order_id']; ?>" class="f6"><?php echo $this->_var['order_query']['order_sn']; ?></a><br>
      <div class="clearfix height5"></div>
      <?php else: ?>
      <b><?php echo $this->_var['lang']['order_number']; ?>：</b><?php echo $this->_var['order_query']['order_sn']; ?><br />
      <div class="clearfix height5"></div>
      <?php endif; ?>
      <b><?php echo $this->_var['lang']['order_status']; ?>：</b><font class="f1"><?php echo $this->_var['order_query']['order_status']; ?></font><br />
      <div class="clearfix height5"></div>
      <?php if ($this->_var['order_query']['invoice_no']): ?>
      <b><?php echo $this->_var['lang']['consignment']; ?>：</b><?php echo $this->_var['order_query']['invoice_no']; ?>
      <div class="clearfix height5"></div>
      <?php endif; ?>
      <?php if ($this->_var['order_query']['shipping_date']): ?>：<?php echo $this->_var['lang']['shipping_date']; ?> <?php echo $this->_var['order_query']['shipping_date']; ?>
      <?php endif; ?>
      <?php endif; ?>
    </div>
</div>
<div class="clearfix height5"></div>


