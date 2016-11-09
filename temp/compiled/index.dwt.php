<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta property="qc:admins" content="2452717777621152116375" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/meilele/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>

<?php echo $this->fetch('library/page_header_index.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'meilele_index.js')); ?>

 
<?php echo $this->fetch('library/index_ad.lbi'); ?> 

 
<?php echo $this->fetch('library/meilehui.lbi'); ?>
 


<?php $this->assign('cat_goods',$this->_var['cat_goods_4']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_4']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_248']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_248']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_311']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_311']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_277']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_277']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>



<div class="w mt29 clearfix commodity">
	<div id="JS_roll_item" class="Left roll_item">
    	<a id="JS_prev" class="prev work" href="javascript:;"><span class="bg"></span><span class="lt"></span></a>
		<a id="JS_next" class="next work" href="javascript:;"><span class="bg"></span><span class="gt"></span></a>
        <div id="JS_table_div">
        	<table id="JS_table">
            	<tr id="JS_tr_top" class="tr_top" bgcolor="#fff">
                	
<?php $this->assign('ads_id','18'); ?><?php $this->assign('ads_num','5'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </tr>
                <tr id="JS_tr_bottom" class="tr_bottom" bgcolor="#fff">
                    	
<?php $this->assign('ads_id','28'); ?><?php $this->assign('ads_num','5'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </tr>
            </table>
        </div>
    </div>
    <div class="tab Right" id="tabs">
    	<div id="JS_side_tab_nav" class="head hd">
        	<ul>
            	<li class="first"><a href="javascript:void(0);">家居网快讯</a></li>
            	<li><a class="last" href="javascript:void(0);">订单查询通道 <span class="query_bg query_icon_blur" onmouseover="document.getElementById('JS_float_tip').style.display='block'" onmouseout="document.getElementById('JS_float_tip').style.display='none'"></span></a></li>
            </ul>
            <div id="JS_float_tip" class="float_tip none" style="display: none;">在此快速查询订单详情。</div>
         </div>
        <div id="JS_side_tab_body" class="body long">
            <div class="show_news tBody models">
                <ul class="gg long">
                	
<?php $this->assign('articles',$this->_var['articles_13']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_13']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

					</ul>
            </div>
            <div class="tBody query models">
                <div id="JS_page1">
                        	
<?php echo $this->fetch('library/order_query.lbi'); ?>

                    </div>
            </div>
        </div>
    </div>
</div>


<div class="default_stairs_w">
<?php echo $this->fetch('library/louceng.lbi'); ?>	
</div>


<div class="footer-box">
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>


<?php echo $this->fetch('library/back-top.lbi'); ?>

</body>
</html>


