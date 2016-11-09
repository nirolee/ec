<?php
/**
 * ECSHOP 快钱联合注册接口
 * ============================================================================

 * 网站地址: http://ceshi.1cx.cn/；
 * ----------------------------------------------------------------------------
 

 * ============================================================================
 * $Author: liuhui $
 * $Id: send.php 15013 2008-10-23 09:31:42Z liuhui $
*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/includes/init.php');
$backUrl=$ecs->url() . ADMIN_PATH . '/receive.php';
header("location:http://cloud.ecshop.com/payment_apply.php?mod=kuaiqian&par=$backUrl");
exit;
?>
