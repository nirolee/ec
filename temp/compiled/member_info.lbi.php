<?php if ($this->_var['user_info']): ?>
<a href="user.php" class="red login_name"><?php echo $this->_var['user_info']['username']; ?></a>
<span>欢迎光临家居网！</span>
<a href="user.php?act=logout" class="red logout">[退出]</a></li>
<?php else: ?>
	欢迎光临家居网，请<a href="user.php" rel="nofollow" class="snc-link snc-login">登录</a>   <a href="user.php?act=register" rel="nofollow" class="snc-link snc-reg">免费注册</a>
<?php endif; ?>        
            


