<?php
/**
 * ECSHOP 晒单页
 * ============================================================================
 * 
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author:  $
 * $Id: single_sun.php 17067 2013-11-1 03:59:37Z  $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . ADMIN_PATH . '/includes/lib_goods.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');
include_once(ROOT_PATH . '/includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/* 初始化分页信息 */
$page = isset($_REQUEST['page'])   && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
$size = isset($_CFG['page_size'])  && intval($_CFG['page_size']) > 0 ? intval($_CFG['page_size']) : 10;
$act = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'single_list';
$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

// $cache_id = $action . '-' . $page;

assign_template();
$position = assign_ur_here();
$smarty->assign('page_title', $position['title']); // 页面标题
$smarty->assign('ur_here',    $position['ur_here']);

$smarty->assign('categories',      get_categories_tree()); // 分类树

$sql = "SELECT value FROM " . $ecs->table('shop_config') . " WHERE id = 419";
$row = $db->getRow($sql);
$car_off = $row['value'];
$smarty->assign('car_off',       $car_off);
/* 是否显示积分兑换 */
if (!empty($_CFG['points_rule']) && unserialize($_CFG['points_rule']))
{
	$smarty->assign('show_transform_points',     1);
}
$smarty->assign('helps',      get_shop_help());        // 网店帮助
$smarty->assign('data_dir',   DATA_DIR);   // 数据目录
$smarty->assign('action',     $action);
$smarty->assign('lang',       $_LANG);



/*------------------------------------------------------ */
//-- 晒单列表
/*------------------------------------------------------ */

if($act == 'single_list')
{

	$cat_id = empty($_REQUEST['cid']) ? 0 : $_REQUEST['cid'];
	if(empty($cat_id))
	{
		$cat_sql = "";
	}
	else
	{
		$cat_sql = " AND cat_id=" . $cat_id;
	}
	$sql = "SELECT * FROM " . $ecs->table('cat_recommend');
	$cat = $db->getAll($sql);
	foreach($cat as $val)
	{
		$cat_str .= $val['cat_id'] . ',';
	}
	$cat_str = substr($cat_str, 0, -1);
	
	if(!empty($cat_str)){
		$sql = "SELECT * FROM " . $ecs->table('category') . " WHERE cat_id IN($cat_str)";
		$cat_list = $db->getAll($sql);
	}
	
	$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
	$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('single') . "WHERE is_audit = 1 $cat_sql");
	$pager  = get_pager('single_sun.php', array('act' => $act), $record_count, $page, 12);
	
	$sql = "SELECT distinct single_id, user_name, single_ip, single_name, single_description, single_like FROM " . $ecs->table('single') . "WHERE is_audit=1 $cat_sql ORDER BY addtime DESC";
	$res = $db->selectLImit($sql, $pager['size'], $pager['start']);
	$rows = array();
	$k = 0;
	while($row = $db->fetchRow($res))
	{
		$sql = "SELECT distinct single_id, thumb_url FROM " . $ecs->table('goods_gallery') . "WHERE single_id=" . $row['single_id'];
		$rows[$k] = $db->getRow($sql);
		
		$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment') . "WHERE single_id = " . $row['single_id']);
		$rows[$k]['comment_num'] = $record_count;
		$rows[$k]['single_like'] = $row['single_like'];
		$rows[$k]['single_description'] = $row['single_description'];
		$rows[$k]['user_name'] = str_replace(substr($row['user_name'], 2, -1), '*****', $row['user_name']);
		$rows[$k]['single_ip'] = $row['single_ip'];
		$k++;
	}
	$children = get_children($cat_id);
	$smarty->assign( 'bestGoods',      get_category_recommend_goods('best', $children));
	$smarty->assign( 'newGoods',      get_category_recommend_goods('new', $children));
	//$smarty->assign( 'hotGoods',      get_category_recommend_goods('hot', $children, $brand = 0, $min =0,  $max = 0, $ext='' ,$num = 'hot_single'));
	$smarty->assign('cat_list', $cat_list);
	$smarty->assign('single_list', $rows);
    $smarty->assign('pager',  $pager);
    $smarty->assign('ip', real_ip());

    $smarty->display('single_list.dwt');
}

/*------------------------------------------------------ */
//-- 晒单详情页
/*------------------------------------------------------ */
elseif(!empty($_REQUEST['act']) && $_REQUEST['act'] == 'single_show')
{
	$sid = empty($_REQUEST['sid']) ? 0 :$_REQUEST['sid'];
	if(empty($sid))
	{
		ecs_header("Location: ./\n");
		
		exit;
	}
	
	$sql = "SELECT single_id, single_name, single_description, single_ip, single_like, user_name, addtime, goods_name, goods_id, order_time, comment_id FROM " . $ecs->table('single') .
	  " WHERE single_id='$sid'";
	$single = $db->getRow($sql);
	if(empty($single))
	{
		ecs_header("location: ./\n");
		
		exit;
	}
	
	$single['addtime'] = local_date($GLOBALS['_CFG']['time_format'], $single['addtime']);
	$single['user_name'] = str_replace(substr($single['user_name'], 2, -1), '*****', $single['user_name']);

	$sql = "SELECT img_url, thumb_url FROM " . $ecs->table('goods_gallery') . " WHERE single_id=" . $single['single_id'];
	$img_list = $db->getAll($sql);
	
	//上一条
	$prev = $db->getRow("SELECT single_id, single_name FROM " . $ecs->table('single') . " WHERE single_id < " . $single['single_id'] . " ORDER BY single_id DESC");
	//下一条
	$next = $db->getRow("SELECT single_id, single_name FROM " . $ecs->table('single') . " WHERE single_id > " . $single['single_id'] . " ORDER BY single_id DESC");
	
	$related = $db->getAll("SELECT link_goods_id FROM " . $ecs->table('link_goods') . " WHERE goods_id=" . $single['goods_id']);
	
	foreach($related as $val)
	{
		$goods_str .= $val['link_goods_id'] . ',';
	}
	$goods_str = substr($goods_str, 0, -1);
	if(!empty($goods_str))
	{
		$r_sql = "SELECT * FROM " . $ecs->table('goods') . " WHERE goods_id IN($goods_str)";
		$goods_relateds = $db->selectLimit($r_sql, 5);
		$goods = array();
		$g = 0;
		while($row = $db->fetchRow($goods_relateds))
		{
			$goods[$g]['goods_name'] = $row['goods_name'];
			$goods[$g]['goods_thumb'] = $row['goods_thumb'];
			$goods[$g]['goods_id'] = $row['goods_id'];
			$goods[$g]['shop_price'] = $row['shop_price'];
			$g++;
		}
	}
	
	$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
	
	$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment') . "WHERE single_id = " . $single['single_id']);
	
	$pager  = get_pager('single_sun.php', array('act' => $act, 'sid' => $single['single_id']), $record_count, $page, 28);

	$sql = "SELECT * FROM " . $ecs->table('comment') . " WHERE single_id=" . $single['single_id'] . " ORDER BY add_time DESC";
	$comment = $db->selectLImit($sql, $pager['size'], $pager['start']);
	$comment_list = array();
	$key = 0;
	while($comm = $db->fetchRow($comment))
	{
		$comment_list[$key]['comment_id'] = $comm['comment_id'];
		$comment_list[$key]['content'] = $comm['content'];
		if(!empty($comm['add_time']))
		{
			$comment_list[$key]['add_time'] = local_date($GLOBALS['_CFG']['time_format'], $comm['add_time']);
		}
		if(!empty($comm['user_name']))
		{
			$comment_list[$key]['user_name'] =str_replace(mb_substr($comm['user_name'], 0, -1,"utf-8"), '*****', $comm['user_name']);
		}
		$key++;
	}
	if($goods[0]['goods_id'] == null)
	{
		$goods = null;
	}
	$position = assign_ur_here(0, $single['single_name']);
	$smarty->assign('ip', real_ip());
	$smarty->assign('goods', $goods);
	$smarty->assign('page_title', $position['title']); // 页面标题
	$smarty->assign('ur_here',    $position['ur_here']);
	$smarty->assign('comment_num', $record_count);
	$smarty->assign('pager', $pager);
	$smarty->assign('comment_list', $comment_list);
	$smarty->assign('prev', $prev);
	$smarty->assign('next', $next);
	$smarty->assign('num', count($img_list));
	$smarty->assign('img_list', $img_list);
	$smarty->assign('photo', $img_list[0]['thumb_url']);
	$smarty->assign('single', $single);
	$smarty->display('single_show.dwt');
}




/*------------------------------------------------------ */
//-- 晒单喜欢+1
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'check_like')
{
	require_once (dirname(__FILE__) . '/includes/cls_json.php');
	$json = new JSON();
	$id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);
    $ip     = real_ip();
	if(!empty($id))
	{
		
		$sql = 'SELECT COUNT(*) FROM '.$ecs->table('single')." WHERE single_ip='$ip' AND single_id='$id' ";
		$count = $db->getOne($sql);
		if($count < 1)
		{
			$sql = "UPDATE " . $ecs->table('single') . " SET single_like=single_like+1, single_ip='$ip' WHERE single_id=" . $id;
			if($db->query($sql))
			{
				$res = array('option' => '已喜欢', 'id' => $id);
				die($json->encode($res));
			}
			else
			{
				$res = array('error' => '错误');
				die($json->encode($res));
			}
		}
	}
	
}


/**
 * 评论
 */
elseif($_REQUEST['act'] == 'check_comm')
{
	require_once (dirname(__FILE__) . '/includes/cls_json.php');
	$json = new JSON();

	$sid = empty($_REQUEST['sid']) ? 0 : $_REQUEST['sid'];
	$did = empty($_REQUEST['did']) ? 0 : $_REQUEST['did'];
	$comment_type = empty($_REQUEST['comment_type']) ? 0 : $_REQUEST['comment_type'];
	$content = empty($_REQUEST['comment_content']) ? '' : htmlspecialchars($_REQUEST['comment_content']);
	$user_name = $_SESSION['user_name'];
	$cid = empty($_REQUEST['comment_id']) ? 1 : $_REQUEST['comment_id'];
	$addtime = gmtime();
	$ip     = real_ip();


	if(empty($_SESSION['user_id']))
	{
		$res['is_user'] = '';
		die($json->encode($res));
	}

	if($comment_type == 1)//评论晒单
	{
		if(!isset($_REQUEST['comment_type']))
		{
			if(empty($did))
			{
				$err_msg = '记录不存在可能已经删除';
				$res = array('error' => $err_msg, 'option' => false);
				die($json->encode($res));
			}
		}
		else
		{
			if(empty($sid))
			{
				$err_msg = '记录不存在可能已经删除';
				$res = array('error' => $err_msg, 'option' => false);
				die($json->encode($res));
			}
		}

		if($content == "")
		{
			$err_msg = '评论不能为空';
			$res = array('error' => $err_msg, 'option' => false);
			die($json->encode($res));
		}
// 		$single_user = $db->getRow("SELECT user_name FROM " . $ecs->table('single') . " WHERE single_id=" . $sid);
// 		if($single_user['user_name'] == $user_name)
// 		{
// 			$err_msg = '不能对自己评论';
// 			$res = array('error' => $err_msg, 'option' => false);
// 			die($json->encode($res));
// 		}

		$sql = "INSERT INTO " . $ecs->table('comment') . "(comment_type, id_value, email, user_name, content, comment_rank, add_time, ip_address, status, parent_id, user_id, single_id, dis_id)
		VALUES('0', '0', '$_SESSION[email]', '$user_name', '$content', 5, '$addtime', '$ip', 1, 0, '$_SESSION[user_id]', '$sid', '$did')";
		$db->query($sql);
		$single_id = $db->insert_id();

		if($single_id)
		{
			$success_msg = '评论成功';
			$res = array('error' => '', 'option' => true);
			die($json->encode($res));
		}
		else
		{
			$err_msg = '评论失败，请检查网络';
			$res = array('error' => $err_msg, 'option' => false);
			die($json->encode($res));
		}
	}
	else//回复评论
	{

		if(empty($cid))
		{
			$err_msg = '此条评论可能已经被删除';
			$res = array('error' => $err_msg, 'option' => false);
			die($json->encode($res));
		}

		$com_user = $db->getRow("SELECT user_name FROM " . $ecs->table('comment') . " WHERE comment_id=" . $cid);
		if($com_user['user_name'] == $user_name)
		{
			$err_msg = '不能对自己评论';
			$res = array('error' => $err_msg, 'option' => false);
			die($json->encode($res));
		}

		$sql = "INSERT INTO " . $ecs->table('comment') . "(comment_type, id_value, email, user_name, content, comment_rank, add_time, ip_address, status, parent_id, user_id, single_id, dis_id)
		VALUES('0', '0', '$_SESSION[email]', '$user_name', '$content', 5, '$addtime', '$ip', 1, '$cid', '$_SESSION[user_id]', '$sid', '$did')";
		$db->query($sql);
		$single_id = $db->insert_id();
		if($single_id)
		{
			$res = array('error' => 0, 'option' => true);
			die($json->encode($res));
		}
		else
		{
			$err_msg = '评论失败，请检查网络';
			$res = array('error' => $err_msg, 'option' => false);
			die($json->encode($res));
		}
	}
}


/*------------------------------------------------------ */
//-- 讨论圈详情页
/*------------------------------------------------------ */
elseif(!empty($_REQUEST['act']) && $_REQUEST['act'] == 'discuss_show')
{
	$did = empty($_REQUEST['did']) ? 0 :$_REQUEST['did'];
	$cache_id = $did . '-' . $_SESSION['user_rank'].'-'.$_CFG['lang'];;
	$cache_id = sprintf('%X', crc32($cache_id));
	if (!$smarty->is_cached('goods_discuss_show.dwt', $cache_id))
	{
		if(empty($did))
		{
			ecs_header("Location: ./\n");
				
			exit;
		}

		$sql = "SELECT * FROM " . $ecs->table('discuss_circle') . " WHERE dis_id='$did'";
		$discuss = $db->getRow($sql);
		if(empty($discuss))
		{
			ecs_header("location: ./\n");
				
			exit;
		}

		$discuss['add_time'] = local_date($GLOBALS['_CFG']['time_format'], $single['add_time']);
// 		$discuss['user_name'] = str_replace(substr($single['user_name'], 2, -1), '*****', $single['user_name']);

		$sql = "SELECT img_url, thumb_url, img_desc FROM " . $ecs->table('goods_gallery') . " WHERE dis_id=" . $discuss['dis_id'];
		$img_list = $db->getAll($sql);
		
		
		foreach($img_list as $img_key => $img_val)
		{
			$img_list[$img_key]['img_url'] = empty($img_list[$img_key]['img_url']) ? $img_list[$img_key]['img_original'] : $img_list[$img_key]['img_url'];
		}

		//上一条
		$prev = $db->getRow("SELECT dis_id, dis_title FROM " . $ecs->table('discuss_circle') . " WHERE dis_id < " . $discuss['dis_id'] . " ORDER BY dis_id DESC");
		//下一条
		$next = $db->getRow("SELECT dis_id, dis_title FROM " . $ecs->table('discuss_circle') . " WHERE dis_id > " . $discuss['dis_id'] . " ORDER BY dis_id DESC");

// 		$related = $db->getAll("SELECT link_goods_id FROM " . $ecs->table('link_goods') . " WHERE goods_id=" . $single['goods_id']);

// 		foreach($related as $val)
// 		{
// 			$goods_str .= $val['link_goods_id'] . ',';
// 		}
// 		$goods_str = substr($goods_str, 0, -1);
// 		if(!empty($goods_str))
// 		{
// 			$r_sql = "SELECT * FROM " . $ecs->table('goods') . " WHERE goods_id IN($goods_str)";
// 			$goods_relateds = $db->selectLimit($r_sql, 5);
// 			$goods = array();
// 			$g = 0;
// 			while($row = $db->fetchRow($goods_relateds))
// 			{
// 				$goods[$g]['goods_name'] = $row['goods_name'];
// 				$goods[$g]['goods_thumb'] = $row['goods_thumb'];
// 				$goods[$g]['goods_id'] = $row['goods_id'];
// 				$goods[$g]['shop_price'] = $row['shop_price'];
// 				$g++;
// 			}
// 		}

		$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;

		$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment') . "WHERE dis_id = " . $discuss['dis_id']);

		$pager  = get_pager('single_sun.php', array('act' => $act, 'did' => $discuss['dis_id']), $record_count, $page, 28);

		$sql = "SELECT * FROM " . $ecs->table('comment') . " WHERE dis_id=" . $discuss['dis_id'] . " AND status=1 ORDER BY add_time DESC";
		$comment = $db->selectLImit($sql, $pager['size'], $pager['start']);
		$comment_list = array();
		$key = 0;
		$replay_comment = array();
		while($comm = $db->fetchRow($comment))
		{

			//判断引用的那个评论
			$sql = "SELECT * FROM " . $ecs->table('comment') . " WHERE comment_id='$comm[parent_id]'";
			$child_comment = $db->getRow($sql);
			if($child_comment)
			{
				$comment_list[$key]['quote_username'] = $child_comment['user_name'];
				$comment_list[$key]['quote_content'] = $child_comment['content'];
			}
			$comment_list[$key]['comment_id'] = $comm['comment_id'];
			$comment_list[$key]['content'] = $comm['content'];
			if(!empty($comm['add_time']))
			{
				$comment_list[$key]['add_time'] = local_date($GLOBALS['_CFG']['time_format'], $comm['add_time']);
			}
			if(!empty($comm['user_name']))
			{
				// 			$comment_list[$key]['user_name'] = str_replace(substr($comm['user_name'], 1, -1), '*****', $comm['user_name']);
				$comment_list[$key]['user_name'] = $comm['user_name'];
			}

			$key++;
		}

		if($goods[0]['goods_id'] == null)
		{
			$goods = null;
		}

		$position = assign_ur_here(0, $discuss['dis_title']);
		$smarty->assign('ip', real_ip());
		$smarty->assign('goods', $goods);
		$smarty->assign('page_title', $position['title']); // 页面标题
		$smarty->assign('ur_here',    $position['ur_here']);
		$smarty->assign('comment_num', $record_count);
		$smarty->assign('pager', $pager);
		$smarty->assign('comment_list', $comment_list);
		$smarty->assign('prev', $prev);
		$smarty->assign('next', $next);
		$smarty->assign('num', count($img_list));
		$smarty->assign('img_list', $img_list);
		$smarty->assign('photo', $img_list[0]['thumb_url']);
		$smarty->assign('discuss', $discuss);
		/* 更新点击次数 */
		$db->query('UPDATE ' . $ecs->table('discuss_circle') . " SET dis_browse_num = dis_browse_num + 1 WHERE dis_id = '$did'");

		$smarty->assign('now_time',  gmtime());           // 当前系统时间
	}

	$smarty->display('goods_discuss_show.dwt');
}

/* 插入晒单提交信息 */
elseif ($_REQUEST['act'] == 'add_discuss')
{
	include_once(ROOT_PATH . 'includes/lib_transaction.php');
	// 相册图片

	$goods_id = !empty($_POST['goods_id']) ? $_POST['goods_id'] : 0;
	if(empty($goods_id))
	{
		ecs_header("Location: index.php\n");
		exit;
	}
	
	if(empty($_SESSION['user_id']))
	{
		ecs_header("Location: user.php\n");
		exit;
	}
	
	if(empty($_POST['referenceType']))
	{
		show_message('请选择讨论类型', $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
	}
	if(empty($_POST['commentTitle']))
	{
		show_message('标题长度只能在4-50个字符之间', $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
	}
	if(empty($_POST['content']))
	{
		show_message('内容不能为空', $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
	}

	foreach ($_FILES['img_url']['error'] AS $key => $value)
	{
		if ($value == 0)
		{
			if (!$image->check_img_type($_FILES['img_url']['type'][$key]))
			{
				show_message($_LANG['invalid_img_url'], $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
			}
		}
		elseif ($value == 1)
		{
			show_message($_LANG['img_url_too_big'], $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
		}
		elseif ($_FILES['img_url']['error'] == 2)
		{
			show_message($_LANG['img_url_too_big'], $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
		}
	}

	// 相册图片
	foreach ($_FILES['img_url']['tmp_name'] AS $key => $value)
	{
		if ($value != 'none')
		{
			if (!$image->check_img_type($_FILES['img_url']['type'][$key]))
			{
				show_message($_LANG['invalid_img_url'], $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
			}
		}
	}
	

	$commentTitle = !empty($_POST['commentTitle']) ? $_POST['commentTitle'] : '';
	$content = !empty($_POST['content']) ? $_POST['content'] : '';
	$referenceType = !empty($_POST['referenceType']) ? $_POST['referenceType'] : 1;
	$user_name = $_SESSION['user_name'];
	$time = gmtime();

	$sql = "INSERT INTO " . $ecs->table('discuss_circle') . "(goods_id, user_id, dis_type, dis_title, dis_text, add_time, user_name)VALUES(
	'$goods_id', '$_SESSION[user_id]', '$referenceType', '$commentTitle', '$content', '$time', '$user_name')";
	$db->query($sql);
	/* 商品编号 */
	$dis_id = $db->insert_id();

	/* 处理相册图片 */
	if(!empty($dis_id))
	{
		handle_gallery_image(0, $_FILES['img_url'], $_POST['img_desc'], $_POST['img_file'], 0, $dis_id);
		ecs_header("Location: single_sun.php?act=discuss_show&did=$dis_id\n");
		exit;
	}
	else
	{
		show_message('提交失败，请检查网络', $_LANG['back_page_up'], "category_discuss.php?act=single_sun?id=$goods_id", 'error');
	}
}
?>


