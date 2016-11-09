<div class="banner-panel clearfix">
	<div id="index-slide" class="focus-box" style="width:100%">
    	<ul>
    		<?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_66362000_1444418598');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_66362000_1444418598']):
?>
        	<div class="banner-img" style="background-image: url(<?php echo $this->_var['index_ad_0_66362000_1444418598']['src']; ?>);">
        		<a target="_blank" href="<?php echo $this->_var['index_ad_0_66362000_1444418598']['url']; ?>" ></a>
        	</div>
        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
    <div class="w banner-content">
    	<div class="center-banner">
        	<div class="slide-nav">
            	<?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_66376100_1444418598');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_66376100_1444418598']):
        $this->_foreach['foo']['iteration']++;
?>
      			<a href="javascript:;" class="img-nav <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>cur-nav<?php endif; ?>"><?php echo $this->_foreach['foo']['iteration']; ?></a>
      			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <div class="right-banner right-banner-no">
        	<?php 
$k = array (
  'name' => 'ads',
  'id' => '5',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
</div>

