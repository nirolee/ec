<div class="slide">
	<div class="stage">
    	<a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="MagicZoomPlus jqzoom" id="Zoomer3" rel="hint-text: ; selectors-change: mouseover;;selectors-effect: false; selectors-class: on; zoom-distance: 22;zoom-width: 400; zoom-height: 400;"><img id="J_prodImg" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="520" height="344" /></a>
    </div>
    <div class="thumb">
    	<div id="JS_goods_album_btn" class="arrow hd">
			<a class="prev" href="javascript:;"></a>
			<a class="next" href="javascript:;"></a>
		</div>
    	<div class="table">
        	<ul id="JS_goods_album_stage" class="clearfix">
            	<?php if ($this->_var['pictures']): ?>
                <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?> 
            	<li class="album_item">
                	<a href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoomer3" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" ></a>
                    <img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="108" height="72" />
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<ul class="extra clearfix">
	<li class="share">
    	<div class="bdShare">
           <div class="sku_share" style=" clear:both">
              	<div class="bdsharebuttonbox">
					<a href="#" class="bds_more icon" data-cmd="more" style=" color:#999; margin:0px; text-decoration:none">
                        分享
                    </a>
                </div>
            </div>
        </div>
    </li>
    <li id="JS_collect_this_goods" class="collect">
    	<a class="icon" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)">收藏商品</a>
    </li>
</ul>
<script type="text/javascript">
	jQuery(".thumb").slide({mainCell:".table ul",autoPage:true,effect:"left",autoPlay:false,vis:4});
</script>






