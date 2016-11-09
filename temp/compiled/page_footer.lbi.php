<div class="footer-table">
	<div class="w clearfix">
    	<div class="someInfo Left">
        	<div class="phone">
            	<h4>24小时客服热线</h4>
				<p>400 888 8888</p>
            </div>
        </div>
        <?php if ($this->_var['helps']): ?>
        <table class="dtab Left clearfix" cellspacing="0" cellpadding="0">
        	<tr>
            	<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?>
                <?php if ($this->_foreach['foo']['iteration'] < 6): ?> 
                <td>
                	<div class="line"></div>
                </td>
                <td>
                	<dl class="dl">
                    	<dt class="dt"><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
                        <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                        <dd class="dd">
                        	<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a>
                        </dd>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </dl>
                </td>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <td>
                	<div class="line"></div>
                </td>
            </tr>
        </table>
        <?php endif; ?>
        <div class="weixin Right" style="width:140px;">
        	<h2 class="title">家具网微信公众号</h2>
            <div class="img">
				<a rel="nofollow" href="javascript:;">
					<img width="100" height="100" src="themes/meilele/images/erweima.png">
				</a>
			</div>
			<p>扫一扫，关注有礼</p>
        </div>
    </div>
</div>
<div class="w footer-icon" style="text-align:center;">
	<div class="iconMap">
    	<a class="iconMap1" rel="nofollow" title="O2O双平台" target="_blank" href="#">
			<p class="iconBg"></p>
			<p class="icon-title">O2O双平台</p>
			<p class="icon-desc">中国家具电商领导品牌</p>
		</a>
        <a class="iconMap2" rel="nofollow" title="全球化采购" target="_blank" href="#">
			<p class="iconBg iconBg1"></p>
			<p class="icon-title">全球化采购</p>
			<p class="icon-desc">高质平价经营</p>
		</a>
        <a rel="nofollow" title="100%" target="_blank" href="#">
			<p class="iconBg iconBg2"></p>
			<p class="icon-title">100%</p>
			<p class="icon-desc">正品保证</p>
		</a>
        <a rel="nofollow" title="双重质检" target="_blank" href="#">
			<p class="iconBg iconBg3"></p>
			<p class="icon-title">双重质检</p>
			<p class="icon-desc">品质保证</p>
		</a>
        <a rel="nofollow" title="限时达" target="_blank" href="#">
			<p class="iconBg iconBg4"></p>
			<p class="icon-title">限时达</p>
			<p class="icon-desc">最快7天到家</p>
		</a>
        <a rel="nofollow" title="45天" target="_blank" href="#">
			<p class="iconBg iconBg5"></p>
			<p class="icon-title">45天</p>
			<p class="icon-desc">无理由退换货</p>
		</a>
        <a class="iconMap7" rel="nofollow" title="贵就赔" target="_blank" href="#">
			<p class="iconBg iconBg6"></p>
			<p class="icon-title">贵就赔</p>
			<p class="icon-desc">价格保护</p>
		</a>
        <a class="iconMap8" rel="nofollow" title="万千口碑" target="_blank" href="#">
			<p class="iconBg iconBg7"></p>
			<p class="icon-title">万千口碑</p>
			<p class="icon-desc">万千家庭共同选择</p>
		</a>
    </div>
</div>
<div class="w footer-link clearfix">
	<div class="link-wrap clearfix">
    	<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
        <strong class="link-title ">友情链接:</strong>
        <div class="link-container">
        	<?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    		<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="link-item "><?php echo $this->_var['link']['name']; ?></a>
    		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    		<?php if ($this->_var['txt_links']): ?>
    		<?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    		<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="link-item "><?php echo $this->_var['link']['name']; ?></a>
    		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    		<?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="w footer-copy">
	<?php if ($this->_var['navigator_list']): ?>
    <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_77680100_1444418598');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_77680100_1444418598']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
    <a href="<?php echo $this->_var['nav_0_77680100_1444418598']['url']; ?>" <?php if ($this->_var['nav_0_77680100_1444418598']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav_0_77680100_1444418598']['name']; ?></a>
    <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
    |
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
    <br />
    <p><?php echo $this->_var['copyright']; ?></p>
    <?php if ($this->_var['icp_number']): ?>
   
<?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
<p>
    <?php endif; ?>
    <a href="#" class="credit icon1"></a>
	<a href="#" class="credit icon2"></a>
    <a href="#" class="credit icon3"></a>
	</p>
</div>





