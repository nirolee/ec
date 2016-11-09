<div class="w mt29 default_floor_show">
	<div class="floor_top clearfix">
    	<div class="floor_nav Left JS_floor_nav">
        	<a class="title-bg title JS_title title-<?php echo $this->_var['goods_cat']['sort_order']; ?>F" title="<?php echo $this->_var['goods_cat']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_cat']['url']; ?>">
				<span class="item Left"><?php echo $this->_var['goods_cat']['sort_order']; ?>F <?php echo $this->_var['goods_cat']['name']; ?></span>
				<span class="sign Right"></span>
			</a>
            <b class="title-shadow"></b>
            <ul>
            	<?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_70054900_1444418598');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_70054900_1444418598']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_foreach['foo']['iteration'] < 9): ?><li><a target="_blank" href="<?php echo $this->_var['cat_0_70054900_1444418598']['url']; ?>"><?php echo $this->_var['cat_0_70054900_1444418598']['name']; ?></a></li><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <a class="img" target="_blank" href="#"></a>
        </div>
        <div class="floor_banner Left JS_floor_banner">
        	<div class="nav">
            	<div class="bg"></div>
				<span class="lt"></span>
				<span class="rt"></span>
                <div class="list JS_list_banner hd">
                	<ul>
						<li href="javascript:;"></li><li href="javascript:;"></li><li class="last" href="javascript:;"></li>
                    </ul>
				</div>
            </div>
        	<div class="bd">
        		<ul class="JS_ul_banner">
            		<li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                	<li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                	<li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
            	</ul>
            </div>
        </div>
        <div class="goodImg Left JS_goodImg">
        	<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播右广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播右广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
    <div class="floor_bottom JS_floor_bottom">
    	<div class="other_item"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播底下广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
        <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播底下广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播底下广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播底下广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <div class="hide-item"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下轮播底下广告5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
</div>


