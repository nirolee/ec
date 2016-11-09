<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/meilele/goods.css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}


</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'easydialog.min.js,magiczoomplus.js,jquery.mousewheel.js,hScrollPane.js,meilele_goods.js')); ?>
<div class="w mt10 bg-line clearfix">
	<div class="goods-display Left">
    	<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
    </div>
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    	<div id="JS_goods_info_panel" class="goods-panel">
    		<div class="title">
        		<h4 class="main-title">
            		<a title="<?php echo $this->_var['goods']['goods_brand']; ?>" href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" target="_blank">[<?php echo $this->_var['goods']['goods_brand']; ?>]</a>
                    <?php echo $this->_var['goods']['goods_style_name']; ?>
                    <span class="sn">编号：<?php echo $this->_var['goods']['goods_sn']; ?></span>
            	</h4>
                <h4 id="JS_goods_sub_title" class="sub-title">
                	<?php echo $this->_var['goods']['goods_brief']; ?>
                </h4>
        	</div>
            <ul class="price">
            	<li class="price-att">
                	<table>
                    	<tr>
                        	<td>
                            	<span id="JS_effect_price_type" class="key">本站价</span>
                            </td>
                            <td>
								<strong class="yen">¥</strong>
								<strong id="current_price" class="num"><?php if ($this->_var['goods']['is_promote']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></strong>
							</td>
                        </tr>
                    </table>
                </li>
                <li class="price-ext">
                	<table>
                    	<tr>
                        	<td>
								<span class="key">商店价</span>
							</td>
                        	<td>
                            	<del class="mt">¥<?php echo $this->_var['goods']['shop_price']; ?></del>
                            	<a class="mt JS_jump" href="javascript:void(0);">
                                	已售
									<span id="JS_goods_saled_number" class="panel_red"><?php echo $this->_var['goods']['sales_volume']; ?></span>
                                </a> <a class="mt JS_jump" href="javascript:void(0);">
									用户评分
									<span id="JS_goods_comment_num" class="panel_red"><?php echo $this->_var['goods']['comment_rank']; ?></span>
								</a>                         
                            </td>
                            <td>
                                <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['qq'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['qq']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['qq']['iteration']++;
?>
                                <?php if ($this->_foreach['qq']['iteration'] < 2): ?> 
      							<?php if ($this->_var['im']): ?>
      							<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank" class="chat"></a>
      							<?php endif; ?>
                                <?php endif; ?>
      							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</td>
                        </tr>
                    </table>
                </li>
            </ul>
             <?php if ($this->_var['promotion']): ?>
            <div id="JS_goods_activity_box">
            	<legend>优惠活动</legend>
                <ul id="JS_goods_activity_ul">
                	<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                    <li>
                    	<table>
                        	<tr>
                            	<td>
                                	<?php if ($this->_var['item']['type'] == "snatch"): ?>
                                	<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="red"><?php echo $this->_var['lang']['snatch']; ?> <?php echo $this->_var['item']['act_name']; ?></a>
                                    <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
                                    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="red"><?php echo $this->_var['lang']['group_buy']; ?> <?php echo $this->_var['item']['act_name']; ?></a>
                                    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                                    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="red"><?php echo $this->_var['lang']['auction']; ?> <?php echo $this->_var['item']['act_name']; ?></a>
                                    <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                                    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="red"><?php echo $this->_var['lang']['favourable']; ?> <?php echo $this->_var['item']['act_name']; ?></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="table">
            	 
            	<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
            	<?php if ($this->_var['spec']['attr_type'] == 1): ?>            
            	<dl class="diff clearfix" id="s1">
              		<dt><?php echo $this->_var['spec']['name']; ?></dt>
              		<dd>
                    	<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <a href="javascript:void(0);" class="<?php if ($this->_var['key'] == 0): ?>current<?php endif; ?> opt">
                        	<?php echo $this->_var['value']['label']; ?>
                        	<input id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                            <i></i>
                        </a>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              		</dd>
            	</dl>
            	<?php else: ?> 
            	<dl class="diff clearfix">
              		<dt><?php echo $this->_var['spec']['name']; ?></dt>	
              		<dd>
                    	<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <a href="javascript:void(0);" class="<?php if ($this->_var['key'] == 0): ?>current<?php endif; ?> opt">
                        	<?php echo $this->_var['value']['label']; ?>
                        	<input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" style="display:none;" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                            <i></i>
                        </a>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              		</dd>
            	</dl>            
            	<?php endif; ?>
            	<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            	
                <dl class="number clearfix">
                	<dt>数量</dt>
                    <dd>
                    	<div class="row">
                        	<div class="input">
                            	<input type="text" value="1" class="goodsNumber" name="number" id="product_amount">
                                <div class="click">
                                	<a class="JS_add" href="javascript:"></a>
                    				<a class="JS_minus" href="javascript:" id="reduce"></a>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl class="btns clearfix">
                	<a id="JS_goods_panel_add" class="add normal JS_addToCart shop_normal" title="加入购物车" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"></a>
                </dl>
            </div>
    	</div>         
    </form>
    <div id="JS_goods_recommend" class="goods-recommend Right">
    	
<?php echo $this->fetch('library/goods_related.lbi'); ?>

    </div>
</div>
<div class="w mt20">
	<div class="layout-module suit-match-tab">
    	
<?php echo $this->fetch('library/goods_fittings.lbi'); ?>

    </div>
</div>
<div class="w mt20 clearfix">
	<div class="main-frame">
    	<div style="height:0px;position:absolute;" id="JS_float_navs_position"></div>
		<script>
		(function(){
			if( /MSIE\s6/.test( navigator.userAgent ) ){
				var d = document.getElementById('JS_float_navs_position');
				d.parentNode.removeChild( d );
			}
		})();
		</script>
    	<div id="JS_float_navs" class="module-toggle-bar">
        	<div class="list Left hd">
            	<ul>
            		<li><a id="JS_gd_tab_head_xiangqing" class="first current" href="javascript:;">商品详情</a></li>
                	<li><a id="JS_gd_tab_head_guige" href="javascript:;">规格参数</a></li>
                	<li>
                    	<a id="JS_gd_tab_head_pingjia" style="display: inline-block;" href="javascript:;">
							评价
							<span class="red">(<?php echo $this->_var['goods']['comments_number']; ?>)</span>
						</a>
                    </li>
                </ul>
            </div>
            <div class="side-btn Right">
            	<table>
                	<tr>
						<td>
							<div class="chat-box">
                            	<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['qq'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['qq']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['qq']['iteration']++;
?>
                                <?php if ($this->_foreach['qq']['iteration'] < 2): ?> 
      							<?php if ($this->_var['im']): ?>
      							<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank" class="chat"></a>
      							<?php endif; ?>
                                <?php endif; ?>
      							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</div>
						</td>
						<td>
							<div id="JS_float_chat_box" class="add-box">
								<a id="JS_float_nav_buy" class="add" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"></a>
							</div>
						</td>
					</tr>
                </table>
            </div>
        </div>
        <div class="bd">
        	<ul>
            	<div id="div1" class="goods-detail current" style="display: block;">
        			<?php echo $this->_var['goods']['goods_desc']; ?>
        		</div>
        	</ul>
        	<ul>
            	<div id="div2" class="goods-standard">
        			<table>
            			<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                		<tr>
                			<th colspan="2"><?php echo htmlspecialchars($this->_var['key']); ?></th>
                		</tr>
                		<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        				<tr>
          					<td class="key"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：</td>
          					<td><?php echo $this->_var['property']['value']; ?></td>
        				</tr>
        				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           		 	</table>
        		</div>
        	</ul>
        	<ul>
            	<div id="div3" class="goods-comment commentBox">
        			<div class="layout-module">
            			<div class="head">
                			<ul class="head-tab">
								<li class="current">评价(<?php echo $this->_var['goods']['comments_number']; ?>)</li>
							</ul>
                		</div>
                		<div class="body">
                			<div class="level-mark Left">
                    			<div class="score">
                        			<strong class="red"><?php echo $this->_var['comment_percent']['haoping_percent']; ?></strong>分
                        		</div>
                        		<div class="star">
									<span class="bar" style="width: <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%;"></span>
								</div>
                    		</div>
                    		<div class="level-view Left">
                    			<table>
                        			<tr>
                            			<td align="right">满意</td>
                                		<td>
                                			<div class="level">
                                    			<span class="bar" style="width:<?php echo $this->_var['comment_percent']['haoping_percent']; ?>%"></span>
                                    		</div>
                                		</td>
                                		<td><?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</td>
                            		</tr>
                            		<tr>
                            			<td align="right">一般</td>
                                		<td>
                                			<div class="level">
                                    			<span class="bar" style="width:<?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%"></span>
                                    		</div>
                                		</td>
                                		<td><?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%</td>
                            		</tr>
                            		<tr>
                            			<td align="right">不满意</td>
                                		<td>
                                			<div class="level">
                                    			<span class="bar" style="width:<?php echo $this->_var['comment_percent']['chaping_percent']; ?>%"></span>
                                    		</div>
                                		</td>
                                		<td><?php echo $this->_var['comment_percent']['chaping_percent']; ?>%</td>
                            		</tr>
                        		</table>
                    		</div>
                    		<div class="tip-txt Left">
                    			<div class="gold">
                            		<?php if ($this->_var['factor'] == 0): ?>所有用户都可以对该商品<br />
                  					<a href="javascript:void(0);" class="btn open_comment"></a><?php elseif ($this->_var['factor'] == 1): ?>只有登陆的用户才可以对该商品<br />
                  					<a href="javascript:void(0);" class="btn open_comment"></a><?php elseif ($this->_var['factor'] == 2): ?>在本站购买过一次其他商品的用户才可以对该商品<br />
                  					<a href="javascript:void(0);" class="btn open_comment"></a><?php elseif ($this->_var['factor'] == 3): ?>购买过此<?php echo $this->_var['goods_name']; ?>的顾客，在收到商品才可以对该商品<br />
                  					<a href="javascript:void(0);" class="btn open_comment"></a>
                            		<?php endif; ?>
                        		</div>
                    		</div>
                		</div>
            		</div>
            		<div id="JS_comment_box" class="mt10">
            	<?php echo $this->fetch('library/comments.lbi'); ?> 
            		</div>
        		</div>
        	</ul>
        </div>
    </div>
    <div class="side-frame">
    	
<?php echo $this->fetch('library/bought_goods.lbi'); ?>

    </div>
</div>
<div class="footer-box">
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
<?php echo $this->fetch('library/back-top.lbi'); ?>
<div id="JS_lightBox" class="lightBox MALERT MCONFIRM addToCart_LB" style="z-index: 300; display:none">
	
</div>

<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	  if (document.getElementById('current_price'))
	  document.getElementById('current_price').innerHTML = res.result;
  }
}

</script> 
<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89343201.js?cdnversion='+~(-new Date()/36e5)];
</script>
<div id="cart_show">
	<div id="JS_lightBox_i7vhtsn6" class="lightBox MALERT MCONFIRM addToCart_LB" style=" display:none;z-index: 300;">
    	<div class="in">
        	<div class="htmls">
            	<div class="clearfix title">
					<div class="Left">
						<span id="JS_addtocart_lb_title">商品成功放入购物车</span>
					</div>
					<a class="Right" onclick="easyDialog.close();" href="javascript:;">×</a>
				</div>
                <div class="content">
					<?php echo $this->fetch('library/show_div_info.lbi'); ?>
                </div>
            </div>
            <div class="btns">
				<a class="lightbox_btnsi_1" href="javascript:;" onclick="easyDialog.close();">继续购物</a>
				<a class="lightbox_btnsi_2" href="./flow.php">查看购物车</a>
			</div>
            <?php if ($this->_var['bought_goods']): ?>
            <div class="good">
            	<p class="name">购买了此商品的用户还购买了</p>
                <div class="clearfix">
                	<?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bou'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bou']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bou']['iteration']++;
?>
                    <?php if ($this->_foreach['bou']['iteration'] < 5): ?> 
                    <div class="goods_list">
                    	<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" width="135" height="92" /></a>
                        <p class="good_name">
                        	<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
                        </p>
                        <p class="price_type">
							本站价：
							<span class="price yen">
                            	¥<?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?> 
         						<?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?> 
          						<?php else: ?> 
          						<?php echo $this->_var['bought_goods_data']['shop_price']; ?> 
          						<?php endif; ?>
            				</span>
						</p>
                        <p calss="btn">
							<a class="btn_a" onclick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" href="javascript:;"></a>
						</p>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
	</div>
</div>



</body>
</html>

