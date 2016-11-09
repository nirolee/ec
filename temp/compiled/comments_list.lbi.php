
<div class="slideComment">
	<div class="filter inhd">
		<ul>
			<li><a class="cm_fliter" href="javascript:;"><span class="t">全部评价</span>(<?php echo $this->_var['comment_nums']; ?>)</a></li>
    		<li><a class="cm_fliter " href="javascript:;"><span class="t">满意</span>(<?php echo $this->_var['good_nums']; ?>)</a></li>
    		<li><a class="cm_fliter " href="javascript:;"><span class="t">一般</span>(<?php echo $this->_var['medium_nums']; ?>)</a></li>
    		<li><a class="cm_fliter " href="javascript:;"><span class="t">不满意</span>(<?php echo $this->_var['difference_nums']; ?>)</a></li>
    		<li><a class="cm_fliter xspace " href="javascript:;"><span class="t">秀家</span>(<?php echo $this->_var['single_nums']; ?>)</a></li>
    	</ul>
	</div>
	<div class="inbd">
		
		<ul id="all_comment">
			<div class="comment-table">
				<table>
    				<?php $_from = $this->_var['comments_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item_comment');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item_comment']):
?>
					<?php if ($this->_var['k'] != 'comment_page'): ?>
        			<tr>
        				<td class="user-label">
            				<div class="avatar">
                				<img width="56" height="56" src="themes/meilele/images/level5.gif">
                			</div>
                			<p class="name">
								<span class=""><?php if ($this->_var['item_comment']['user_name']): ?><?php echo $this->_var['item_comment']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?></span>
							</p>
            			</td>
            			<td class="c-content">
            				<div class="c-tip clearfix">
                				<div class="score Left">
									<span><img src="themes/meilele/images/stars<?php echo $this->_var['item_comment']['comment_rank']; ?>.gif" /></span>
									<span><?php echo $this->_var['item_comment']['comment_rank']; ?>分</span>
                    			</div>
                    			<div class="time Right"><?php echo $this->_var['item_comment']['add_time']; ?></div>
                			</div>
                			<p><?php echo $this->_var['item_comment']['content']; ?></p>
                			<?php if ($this->_var['item_comment']['single']): ?>
                			<ul class="show-img clearfix">
                			<?php $_from = $this->_var['item_comment']['single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'com_single');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['com_single']):
?>
                			<li class="JS_gallery_item">
                    			<img width="130" height="83" src="<?php echo $this->_var['com_single']['thumb_url']; ?>">
                    		</li>
                    		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                			</ul>
                			<?php endif; ?>
                			<a class="nice JS_comment_like" title="0" href="#none" name="agree" onClick="get_like(<?php echo $this->_var['item_comment']['comment_id']; ?>, 'comm');">
								<span id="like-comm-<?php echo $this->_var['item_comment']['comment_id']; ?>" class="text"> <?php echo $this->_var['item_comment']['useful']; ?> </span><span class="space"></span>
							</a>
            			</td>
        			</tr>
        			<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    			</table>
			</div>
            <div class="page-unit clearfix">
            	<table>
                	<tr>
                    	<?php $_from = $this->_var['item_comment']['comment_pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pager_0_26659500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['pager_0_26659500_1478593109']):
?>
                        <td>
                        	<?php if ($this->_var['pager_0_26659500_1478593109']['page_prev']): ?>
	     					<a href="<?php echo $this->_var['pager_0_26659500_1478593109']['page_prev']; ?>" class="Prev cm_fliter"> <span class="arrow"><span class="char">◆</span></span>上一页 </a>  
		   					<?php else: ?>     
							<?php endif; ?>
                        </td>
                        <?php $_from = $this->_var['pager_0_26659500_1478593109']['page_number_comm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_26659500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_26659500_1478593109']):
?>
                        <td>
	      					<?php if ($this->_var['pager_0_26659500_1478593109']['page'] == $this->_var['key']): ?>
	      					<span class="current"><?php echo $this->_var['key']; ?></span>
	      					<?php else: ?>
	      					<a href="<?php echo $this->_var['item_0_26659500_1478593109']; ?>" class="cm_fliter"> <?php echo $this->_var['key']; ?></a>  
	      					<?php endif; ?>
                        </td>
	     				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <td>
                        	<?php if ($this->_var['pager_0_26659500_1478593109']['page_next']): ?>
	       					<a href="<?php echo $this->_var['pager_0_26659500_1478593109']['page_next']; ?>" class="Next cm_fliter"> 下一页<span class="arrow"><span class="char">◆</span></span></a>
		   					<?php else: ?>
		  					<?php endif; ?>
                        </td>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tr>
                </table>
            </div>
		</ul>
		
		
		<ul id="good_comment">
			<div class="comment-table">
				<table>
    				<?php $_from = $this->_var['good_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('good_k', 'good_comment');if (count($_from)):
    foreach ($_from AS $this->_var['good_k'] => $this->_var['good_comment']):
?>
					<?php if ($this->_var['good_k'] == 'comment_page'): ?>
    				<?php else: ?>
        			<tr>
        				<td class="user-label">
            				<div class="avatar">
                				<img width="56" height="56" src="themes/meilele/images/level5.gif">
                			</div>
                			<p class="name">
								<span><?php if ($this->_var['good_comment']['user_name']): ?><?php echo $this->_var['good_comment']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?></span>
							</p>
            			</td>
            			<td class="c-content">
            				<div class="c-tip clearfix">
                				<div class="score Left">
									<span><img src="themes/meilele/images/stars<?php echo $this->_var['good_comment']['comment_rank']; ?>.gif" /></span>
									<span><?php echo $this->_var['good_comment']['comment_rank']; ?>分</span>
                    			</div>
                    			<div class="time Right"><?php echo $this->_var['good_comment']['add_time']; ?></div>
                			</div>
                			<p><?php echo $this->_var['good_comment']['content']; ?></p>
                			<?php if ($this->_var['good_comment']['single']): ?>
                			<ul class="show-img clearfix">
                				<?php $_from = $this->_var['good_comment']['single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'com_single');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['com_single']):
?>
                				<li class="JS_gallery_item">
                    				<img width="130" height="83" src="<?php echo $this->_var['com_single']['thumb_url']; ?>">
                    			</li>
                    			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                			</ul>
                			<?php endif; ?>
                			<a class="nice JS_comment_like" title="0" href="#none" name="agree" onClick="get_like(<?php echo $this->_var['good_comment']['comment_id']; ?>, 'comm');">
								<span id="like-comm-<?php echo $this->_var['good_comment']['comment_id']; ?>" class="text"><?php echo $this->_var['good_comment']['useful']; ?></span><span class="space"></span>
							</a>
            			</td>
        			</tr>
        			<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    			</table>
			</div>
			<div class="page-unit clearfix">
            	<table>
                	<tr>
                    	<?php $_from = $this->_var['good_comment']['comment_pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pager_0_26659500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['pager_0_26659500_1478593109']):
?>
                        <td>
                        	<?php if ($this->_var['pager_0_26659500_1478593109']['page_prev']): ?>
	     					<a href="<?php echo $this->_var['pager_0_26659500_1478593109']['page_prev']; ?>" class="Prev cm_fliter"> <span class="arrow"><span class="char">◆</span></span>上一页 </a>  
		   					<?php else: ?>     
							<?php endif; ?>
                        </td>
                        <?php $_from = $this->_var['pager_0_26659500_1478593109']['page_number_comm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_26659500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_26659500_1478593109']):
?>
                        <td>
	      					<?php if ($this->_var['pager_0_26659500_1478593109']['page'] == $this->_var['key']): ?>
	      					<span class="current"><?php echo $this->_var['key']; ?></span>
	      					<?php else: ?>
	      					<a href="<?php echo $this->_var['item_0_26659500_1478593109']; ?>" class="cm_fliter"> <?php echo $this->_var['key']; ?></a>  
	      					<?php endif; ?>
                        </td>
	     				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <td>
                        	<?php if ($this->_var['pager_0_26659500_1478593109']['page_next']): ?>
	       					<a href="<?php echo $this->_var['pager_0_26659500_1478593109']['page_next']; ?>" class="Next cm_fliter"> 下一页<span class="arrow"><span class="char">◆</span></span></a>
		   					<?php else: ?>
		  					<?php endif; ?>
                        </td>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tr>
                </table>
            </div>
		</ul>
		
		
		<ul id="med_comment">
			<div class="comment-table">
	<table>
    	<?php $_from = $this->_var['medium_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('med_k', 'medium_comment');if (count($_from)):
    foreach ($_from AS $this->_var['med_k'] => $this->_var['medium_comment']):
?>
       	<?php if ($this->_var['med_k'] == 'comment_page'): ?>
    	<?php else: ?>
        <tr>
        	<td class="user-label">
            	<div class="avatar">
                	<img width="56" height="56" src="themes/meilele/images/level5.gif">
                </div>
                <p class="name">
					<span><?php if ($this->_var['medium_comment']['user_name']): ?><?php echo $this->_var['medium_comment']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?></span>
				</p>
            </td>
            <td class="c-content">
            	<div class="c-tip clearfix">
                	<div class="score Left">
						<span><img src="themes/meilele/images/stars<?php echo $this->_var['medium_comment']['comment_rank']; ?>.gif" /></span>
						<span><?php echo $this->_var['medium_comment']['comment_rank']; ?>分</span>
                    </div>
                    <div class="time Right"><?php echo $this->_var['medium_comment']['add_time']; ?></div>
                </div>
                <p><?php echo $this->_var['medium_comment']['content']; ?></p>
                <?php if ($this->_var['medium_comment']['single']): ?>
                <ul class="show-img clearfix">
                	<?php $_from = $this->_var['medium_comment']['single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'com_single');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['com_single']):
?>
                	<li class="JS_gallery_item">
                    	<img width="130" height="83" src="<?php echo $this->_var['com_single']['thumb_url']; ?>">
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?>
                <a class="nice JS_comment_like" title="0" href="#none" name="agree" onClick="get_like(<?php echo $this->_var['medium_comment']['comment_id']; ?>, 'comm');">
					<span id="like-comm-<?php echo $this->_var['medium_comment']['comment_id']; ?>" class="text"><?php echo $this->_var['medium_comment']['useful']; ?></span><span class="space"></span>
				</a>
            </td>
        </tr>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
</div>
			<div class="page-unit clearfix">
            	<table>
                	<tr>
                    	<?php $_from = $this->_var['medium_comment']['comment_pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pager_0_26759500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['pager_0_26759500_1478593109']):
?>
                        <td>
                        	<?php if ($this->_var['pager_0_26759500_1478593109']['page_prev']): ?>
	     					<a href="<?php echo $this->_var['pager_0_26759500_1478593109']['page_prev']; ?>" class="Prev cm_fliter"> <span class="arrow"><span class="char">◆</span></span>上一页 </a>  
		   					<?php else: ?>     
							<?php endif; ?>
                        </td>
                        <?php $_from = $this->_var['pager_0_26759500_1478593109']['page_number_comm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_26759500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_26759500_1478593109']):
?>
                        <td>
	      					<?php if ($this->_var['pager_0_26759500_1478593109']['page'] == $this->_var['key']): ?>
	      					<span class="current"><?php echo $this->_var['key']; ?></span>
	      					<?php else: ?>
	      					<a href="<?php echo $this->_var['item_0_26759500_1478593109']; ?>" class="cm_fliter"> <?php echo $this->_var['key']; ?></a>  
	      					<?php endif; ?>
                        </td>
	     				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <td>
                        	<?php if ($this->_var['pager_0_26759500_1478593109']['page_next']): ?>
	       					<a href="<?php echo $this->_var['pager_0_26759500_1478593109']['page_next']; ?>" class="Next cm_fliter"> 下一页<span class="arrow"><span class="char">◆</span></span></a>
		   					<?php else: ?>
		  					<?php endif; ?>
                        </td>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tr>
                </table>
            </div>
		</ul>
		
		
		<ul id="diff_comment">
			<div class="comment-table">
	<table>
    	<?php $_from = $this->_var['difference_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('diff_k', 'difference_comment');if (count($_from)):
    foreach ($_from AS $this->_var['diff_k'] => $this->_var['difference_comment']):
?>
		<?php if ($this->_var['diff_k'] == 'comment_page'): ?>
    	<?php else: ?>
        <tr>
        	<td class="user-label">
            	<div class="avatar">
                	<img width="56" height="56" src="themes/meilele/images/level5.gif">
                </div>
                <p class="name">
					<span><?php if ($this->_var['difference_comment']['user_name']): ?><?php echo $this->_var['difference_comment']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?></span>
				</p>
            </td>
            <td class="c-content">
            	<div class="c-tip clearfix">
                	<div class="score Left">
						<span><img src="themes/meilele/images/stars<?php echo $this->_var['difference_comment']['comment_rank']; ?>.gif" /></span>
						<span><?php echo $this->_var['difference_comment']['comment_rank']; ?>分</span>
                    </div>
                    <div class="time Right"><?php echo $this->_var['difference_comment']['add_time']; ?></div>
                </div>
                <p><?php echo $this->_var['difference_comment']['content']; ?></p>
                <?php if ($this->_var['difference_comment']['single']): ?>
                <ul class="show-img clearfix">
                	<?php $_from = $this->_var['difference_comment']['single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'com_single');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['com_single']):
?>
                	<li class="JS_gallery_item">
                    	<img width="130" height="83" src="<?php echo $this->_var['com_single']['thumb_url']; ?>">
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?>
                <a class="nice JS_comment_like" title="0" href="#none" name="agree" onClick="get_like(<?php echo $this->_var['difference_comment']['comment_id']; ?>, 'comm');">
					<span id="like-comm-<?php echo $this->_var['difference_comment']['comment_id']; ?>" class="text"><?php echo $this->_var['difference_comment']['useful']; ?></span><span class="space"></span>
				</a>
            </td>
        </tr>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
</div>
			<div class="page-unit clearfix">
            	<table>
                	<tr>
                    	<?php $_from = $this->_var['difference_comment']['comment_pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pager_0_26759500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['pager_0_26759500_1478593109']):
?>
                        <td>
                        	<?php if ($this->_var['pager_0_26759500_1478593109']['page_prev']): ?>
	     					<a href="<?php echo $this->_var['pager_0_26759500_1478593109']['page_prev']; ?>" class="Prev cm_fliter"> <span class="arrow"><span class="char">◆</span></span>上一页 </a>  
		   					<?php else: ?>     
							<?php endif; ?>
                        </td>
                        <?php $_from = $this->_var['pager_0_26759500_1478593109']['page_number_comm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_26759500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_26759500_1478593109']):
?>
                        <td>
	      					<?php if ($this->_var['pager_0_26759500_1478593109']['page'] == $this->_var['key']): ?>
	      					<span class="current"><?php echo $this->_var['key']; ?></span>
	      					<?php else: ?>
	      					<a href="<?php echo $this->_var['item_0_26759500_1478593109']; ?>" class="cm_fliter"> <?php echo $this->_var['key']; ?></a>  
	      					<?php endif; ?>
                        </td>
	     				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <td>
                        	<?php if ($this->_var['pager_0_26759500_1478593109']['page_next']): ?>
	       					<a href="<?php echo $this->_var['pager_0_26759500_1478593109']['page_next']; ?>" class="Next cm_fliter"> 下一页<span class="arrow"><span class="char">◆</span></span></a>
		   					<?php else: ?>
		  					<?php endif; ?>
                        </td>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tr>
                </table>
            </div>
		</ul>
		
		
		<ul id="single_comment">
			<div class="comment-table">
	<table>
    	<?php $_from = $this->_var['goods_single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('single_k', 'item_single');if (count($_from)):
    foreach ($_from AS $this->_var['single_k'] => $this->_var['item_single']):
?>
	 	<?php if ($this->_var['item_single']['single']): ?>
        <tr>
        	<td class="user-label">
            	<div class="avatar">
                	<img width="56" height="56" src="themes/meilele/images/level5.gif">
                </div>
                <p class="name">
					<span><?php if ($this->_var['item_single']['user_name']): ?><?php echo $this->_var['item_single']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?></span>
				</p>
            </td>
            <td class="c-content">
            	<div class="c-tip clearfix">
                	<div class="score Left">
						<span><img src="themes/meilele/images/stars<?php echo $this->_var['item_single']['comment_rank']; ?>.gif" /></span>
						<span><?php echo $this->_var['item_single']['comment_rank']; ?>分</span>
                    </div>
                    <div class="time Right"><?php echo $this->_var['item_single']['add_time']; ?></div>
                </div>
                <p><?php echo $this->_var['item_single']['content']; ?></p>
                <?php if ($this->_var['item_single']['single']): ?>
                <ul class="show-img clearfix">
                	<?php $_from = $this->_var['item_single']['single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'com_single');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['com_single']):
?>
                	<li class="JS_gallery_item">
                    	<img width="130" height="83" src="<?php echo $this->_var['com_single']['thumb_url']; ?>">
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?>
                <a class="nice JS_comment_like" title="0" href="#none" name="agree" onClick="get_like(<?php echo $this->_var['item_single']['comment_id']; ?>, 'comm');">
					<span id="like-comm-<?php echo $this->_var['item_single']['comment_id']; ?>" class="text"><?php echo $this->_var['item_single']['useful']; ?></span><span class="space"></span>
				</a>
            </td>
        </tr>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
</div>
			<div class="page-unit clearfix">
            	<table>
                	<tr>
                    	<?php $_from = $this->_var['item_single']['comment_pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pager_0_26859500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['pager_0_26859500_1478593109']):
?>
                        <td>
                        	<?php if ($this->_var['pager_0_26859500_1478593109']['page_prev']): ?>
	     					<a href="<?php echo $this->_var['pager_0_26859500_1478593109']['page_prev']; ?>" class="Prev cm_fliter"> <span class="arrow"><span class="char">◆</span></span>上一页 </a>  
		   					<?php else: ?>     
							<?php endif; ?>
                        </td>
                        <?php $_from = $this->_var['pager_0_26859500_1478593109']['page_number_comm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_26859500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_26859500_1478593109']):
?>
                        <td>
	      					<?php if ($this->_var['pager_0_26859500_1478593109']['page'] == $this->_var['key']): ?>
	      					<span class="current"><?php echo $this->_var['key']; ?></span>
	      					<?php else: ?>
	      					<a href="<?php echo $this->_var['item_0_26859500_1478593109']; ?>" class="cm_fliter"> <?php echo $this->_var['key']; ?></a>  
	      					<?php endif; ?>
                        </td>
	     				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <td>
                        	<?php if ($this->_var['pager_0_26859500_1478593109']['page_next']): ?>
	       					<a href="<?php echo $this->_var['pager_0_26859500_1478593109']['page_next']; ?>" class="Next cm_fliter"> 下一页<span class="arrow"><span class="char">◆</span></span></a>
		   					<?php else: ?>
		  					<?php endif; ?>
                        </td>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tr>
                </table>
            </div>
		</ul>
		
	</div>
</div>
<div class="clearfix"></div>
<div id="comment_show" style="width: 766px; height: 283px; display:none;" class=" jqmID1">
  <div class="popbox" style="background:none; width:764px;">
    <div class="popc" style="width:764px;">
      <h2 id="easyDialogTitle"><a class="popwinClose" href="#">关闭</a>发表评论</h2>
      <div class="commentsList stat_box" style=" border:none">
        <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
          <table width="706" border="0" cellspacing="5" cellpadding="0" >
            <tr width="706">
              <td width="66" align="right"><?php echo $this->_var['lang']['username']; ?>：</td>
              <td<?php if (! $this->_var['enabled_captcha']): ?><?php endif; ?>><?php if ($_SESSION['user_name']): ?><?php echo $_SESSION['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></td>
            </tr>
            <tr>
              <td align="right">E-mail：</td>
              <td><input type="text" name="email" id="email"  maxlength="100" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="inputBorder"/></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['comment_rank']; ?>：</td>
              <td><input name="comment_rank" type="radio" value="1" id="comment_rank1" />
              <span class="star s1"></span>
 
                <input name="comment_rank" type="radio" value="2" id="comment_rank2" />
                  <span class="star s2"></span>
                <input name="comment_rank" type="radio" value="3" id="comment_rank3" />
                  <span class="star s3"></span>
                <input name="comment_rank" type="radio" value="4" id="comment_rank4" />
          <span class="star s4"></span>
                <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" />
                  <span class="star s5"></span></td>
            </tr>
            <tr>
              <td align="right" valign="top"><?php echo $this->_var['lang']['comment_content']; ?>：</td>
              <td><textarea name="content" class="inputBorder" style="height:100px; width:480px;"></textarea>
                <input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
                <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" /></td>
            </tr>
            <tr>
              <td colspan="2"><?php if ($this->_var['enabled_captcha']): ?>
                
                <div style="padding-left:15px; text-align:left; float:left;"> <?php echo $this->_var['lang']['comment_captcha']; ?>：
                  <input type="text" name="captcha"  class="inputBorder" style="width:50px; margin-left:5px; margin-top:3px;"/>
                  <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha"> </div>
                
                <?php endif; ?>
                
                <input type="submit" class="red_btn_2" value="提交评论"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
 
<script type="text/javascript" >
		
		/**
		 *回复评论
		 */
		function onsubmit_comm(id, type)
		{
		    var content = document.getElementById(type + '_reply_content_' + id).value;
		    if(content == "")
		    {
			alert('回复内容不能为空');
			return false;
		    }

		    Ajax.call('goods.php?act=reply_comment', 'comment_id=' + id + '&is_ajax=1' + '&comment_content=' + content, get_reply_comm, 'GET', 'JSON');
		}

		function get_reply_comm(res)
		{
		    if(res.is_user == "")
		    {
			window.location.href="user.php";
			return false;
		    }

		    if(res.option == true)
		    {
			location.reload();
		    }
		    else
		    {
			alert(res.error);
		    }
		}

		function dis_comment(int, type)
		{
			if($("#reply-lz_" + type + "_" + int).is(":hidden"))
			{
				$("#reply-lz_" + type + "_" + int).show();
			}
			else
			{
				$("#reply-lz_" + type + "_" + int).hide();
			}
		}

		function dis_reply(int, type)
		{
			if($("#item-reply_" + type + "_" + int).is(":hidden"))
			{
				$("#item-reply_" + type + "_" + int).show();
			}
			else
			{
				$("#item-reply_" + type + "_" + int).hide();
			}
		}

		/**
		 *喜欢
		 */
		
		function get_like(id, type)
		{
			Ajax.call('goods.php?act=add_useful', 'id=' + id + '&type=' + type, get_like_single, 'GET', 'JSON');
		}


		function get_like_single(res)
		{
			if(res.option)
			{		
				var like_count = $("#like-" + res.type + '-' + res.id);
				var count = like_count.html();
				$num = parseInt(count) + 1;
				like_count.html($num);
			}
			else
			{
				alert('一个评论只能点击一次哦');
			}
		}


	</script>
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_26859500_1478593109');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_26859500_1478593109']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_26859500_1478593109']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
	easyDialog.close();
  	window.location.reload();
  }
  
	function commentsFrom(){
		easyDialog.open({
			  container : 'commentsFrom'
		});	
	}

//]]>
</script>


