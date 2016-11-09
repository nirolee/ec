

  <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <?php if ($this->_var['pager']['styleid'] == 0): ?> 
    <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span> 
    <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
    <?php if ($this->_var['key'] == 'keywords'): ?>
    <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
    <?php else: ?>
    <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <select name="page" id="page" onchange="selectPage(this)">
      
      
    <?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
    
    
    </select>
    
    <?php else: ?> 
    
    
    <div class="p-list">
    	<?php if ($this->_var['pager']['page_prev']): ?><a class="p-item p-prev " href="<?php echo $this->_var['pager']['page_prev']; ?>"><span class="p-arrow"><<</span>上一页</a><?php else: ?><a class="p-item p-prev p-disabled" href="javascript:void(0);"><span class="p-arrow"><<</span>上一页</a><?php endif; ?> 
        <?php if ($this->_var['pager']['page_count'] != 1): ?> 
        <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
        <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?> 
        <span class="p-item p-cur"><?php echo $this->_var['key']; ?></span> 
        <?php else: ?> 
        <a href="<?php echo $this->_var['item']; ?>" class="p-item p-num"><?php echo $this->_var['key']; ?></a> 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
        <?php if ($this->_var['pager']['page_next']): ?><a class="p-item p-next " href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?><span class="p-arrow">>></span></a><?php else: ?><a class="p-item p-next p-disabled" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?><span class="p-arrow">>></span></a><?php endif; ?> 
    </div>
     
    
    <?php endif; ?>
  </form>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 

