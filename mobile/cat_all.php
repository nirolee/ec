<?php

/**
 * ECSHOP 分类聚合页
 * ============================================================================

 * 网站地址: http://ceshi.1cx.cn/；
 * ----------------------------------------------------------------------------
 

 * ============================================================================
 * $Author: liuhui $
 * $Id: index.php 15013 2010-03-25 09:31:42Z liuhui $
 */

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
$pcat_array = get_categories_tree();


foreach ($pcat_array as $key => $pcat_data) {
    $pcat_array[$key]['name'] = $pcat_data['name'];
    if ($pcat_data['cat_id']) {
        foreach ($pcat_data['cat_id'] as $k => $v) {
            $pcat_array[$key]['cat_id'][$k]['name'] = $v['name'];
        }
    }
}

$smarty->assign('pcat_array', $pcat_array);

$smarty->display("category_all.dwt");
?>