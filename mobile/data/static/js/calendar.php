<?php

/**
 * ECSHOP 调用日历 JS
 * ============================================================================

 * 网站地址: http://ceshi.1cx.cn/；
 * ----------------------------------------------------------------------------
 

 * ============================================================================
 * $Author: liubo $
 * $Id: calendar.php 17217 2011-01-19 06:29:08Z liubo $
*/
define('IN_ECTOUCH', true);

$lang = (!empty($_GET['lang'])) ? trim($_GET['lang']) : 'zh_cn';

if (!file_exists('../../../lang/' . $lang . '/calendar.php') || strrchr($lang,'.'))
{
    $lang = 'zh_cn';
}

require(dirname(dirname(__FILE__)) . '/../config.php');
header('Content-type: application/x-javascript; charset=' . EC_CHARSET);

include_once('../../../lang/' . $lang . '/calendar.php');

foreach ($_LANG['calendar_lang'] AS $cal_key => $cal_data)
{
    echo 'var ' . $cal_key . " = \"" . $cal_data . "\";\r\n";
}

include_once('./calendar/calendar.js');

?>