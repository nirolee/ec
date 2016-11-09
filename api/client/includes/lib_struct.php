<?php

/**
 * 通用消息结构声明
 */
$common_message = array(
    'Result' => false,
    'MessageCode' => 1,
    'MessageString' => 'Nothing',
    'InsertID' => 0
);


/**
 * 返回信息语言包
 */
$_ALANG = array(
    /* 系统类 */
    100 => '登录成功',
    101 => '没有权限',
    102 => '无效调用',
    103 => '登录失败，用户名或者密码错误。',
    104 => '商店不存在',
    105 => '商店已经被关闭',
    106 => '域名未通过绑定审核或备案信息不合法',
    107 => '缺少必要的网店信息',
    108 => '独立网店的服务期限已经终止',
    109 => '独立网店的顶级域名服务期限已经终止',
    110 => '未登录或者登录超时。',
    /* 登录类 */
    /* 分类操作 */
    400 => '存在下级子分类或商品，该分类不能被删除',
    401 => '选定的父类是当前分类或当前分类的下级分类',
    402 => '价格区间数超过范围',
    403 => '同级别下不能有重复的分类名称',
    /* 品牌操作 */
    300 => '删除品牌时出错',
    301 => '品牌名重复',
    302 => '编辑品牌时出错',
    /* 商品操作 */
    200 => '商品货号重复',
    201 => '商品图片类型不正确',
    202 => '商品图片太大',
    203 => '商品图片缩略图类型不正确',
    204 => '商品图片缩略图太大',
    205 => '商品相册图片类型不正确',
    206 => '商品相册图片太大',
    210 => '写入商品图片出错',
    211 => '复制相册图片时出错',
    212 => '生成缩略图时出错',
    213 => '添加图片水印时出错',
    214 => '复制水印图片时出错',
    215 => '生成相册缩略图时出错',
    216 => '复制原图时出错',
    217 => '上传缩略图时出错',
    218 => '自动生成缩略图时出错',
    219 => '同级别下不能有重复的分类名称',
    220 => '同级别下不能有重复的品牌名称',
    221 => '商品数量已经超过限制',
    230 => '把商品放入回收站时发生错误',
    240 => '该商品已经不存在，编辑失败',
    'undefined' => '未定义信息'
);

?>
