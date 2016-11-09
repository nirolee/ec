<?php if ($this->_var['script_name'] == 'index'): ?>
 <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
<li><a target="_blank" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>" href="<?php echo $this->_var['article_item']['url']; ?>"> <?php echo $this->_var['article_item']['short_title']; ?> </a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php elseif ($this->_var['script_name'] == 'category'): ?>
<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
<li>
	• <a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a>  
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>
<div class="title">
	<strong class="Left">创意家居</strong>
	<a class="Right" title="更多" target="_blank" href="<?php echo $this->_var['articles_cat']['url']; ?>">更多>></a>
</div>
<div class="body">
	<div class="notes">
		<div class="img">
			<?php 
$k = array (
  'name' => 'ads',
  'id' => '36',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
		</div>
    	<h4>
			<a title="金属线条框架家具 颠覆传统想象" target="_blank" href="#">金属线条框架家具 颠</a>
		</h4>
		<p>家具也跟随时代的脚步不断发展创新，到如今门类繁多，用料各异，</p>
    </div>
    <ul>
    	<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
    	<li>        	
        	• [
				<a title="创意家居" target="_blank" href="article_cat.php?id=23">创意家居</a>
			]            
  			<a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a>  			
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>


