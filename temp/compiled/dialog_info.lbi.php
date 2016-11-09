<div class="in">
    	<div class="htmls">
        	<div class="clearfix title">
            	<div class="Left">
                	<span id="JS_addtocart_lb_title">商品成功放入购物车</span>
                </div>
                <a class="Right" onclick="easyDialog.close();" href="javascript:;">×</a>
            </div>
            <div class="content">
            	<table style="margin: 0 auto;">
                	<tr>
                    	<td class="icons_td">
							<span id="JS_addtocart_lb_icon" class="icons icons_ok"></span>
						</td>
                        <td id="JS_addtocart_lb_content" class="content_td">
                        	购物车共有<span class="red"><?php echo $this->_var['number']; ?></span>件商品，商品总金额合计：<span class="yen bold red">¥<?php echo $this->_var['amount']; ?></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="btns">
        	<a class="lightbox_btnsi_1" href="javascript:easyDialog.close();">继续购物</a>
			<a class="lightbox_btnsi_2" href="./flow.php">查看购物车</a>
        </div>
        <?php if ($this->_var['bought_goods']): ?>
        <div class="good">
        	<p class="name">购买了此商品的用户还购买了</p>
            <div class="clearfix">
            <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
            	<div class="goods_list">
                	<a target="_blank" href="<?php echo $this->_var['bought_goods_data']['url']; ?>">
						<img width="135px" height="92px;" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>">
					</a>
                    <p class="good_name" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>">
						<a target="_blank" href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
					</p>
                    <p class="price_type">
						促销价：
						<span class="price yen"><?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?> 
            <?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['bought_goods_data']['shop_price']; ?> 
            <?php endif; ?></span>
					</p>
                    <p calss="btn">
						<a id="JS_main_goods_buy_32168" class="btn_a" title="<?php echo $this->_var['bought_goods_data']['short_name']; ?>" href="<?php echo $this->_var['bought_goods_data']['url']; ?>"></a>
					</p>
                </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

