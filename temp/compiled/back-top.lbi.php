<style>
.back_to_top .in_box.back_to_top_bonus{background:url(themes/meilele/images/1418433378115509116.gif) -44px 0;}
.back_to_top_hover .in_box.back_to_top_bonus{background-position:0 0;}
</style>
<div id="JS_back_to_top" class="back_to_top">
	<div class="JS_back_to_top_hover back_to_top_hover_zoom">
		<div class="back_to_top_tip">抽优惠券</div>
		<div class="in_box back_to_top_lottery"></div>
	</div>
    <div class="JS_back_to_top_hover back_to_top_hover_zoom">
		<div class="back_to_top_tip">20抵200</div>
		<div class="in_box back_to_top_bonus"></div>
	</div>
    <div class="JS_back_to_top_hover back_to_top_hover_zoom back_top">
		<div class="back_to_top_tip">返回顶部</div>
		<div class="in_box back_to_top_top"></div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$(window).scroll(function(){  
                if ($(window).scrollTop()>200){  
                    $("#JS_back_to_top").css('display','block');  
                }  
                else  
                {  
                    $("#JS_back_to_top").css('display','none');  
                }  
            });  
  
            //当点击跳转链接后，回到页面顶部位置  
  
            $(".back_top").click(function(){  
                $('body,html').animate({scrollTop:0});  
                return false;  
            });
			
			
		$('.JS_back_to_top_hover').mouseover(function(){
			$(this).addClass('back_to_top_hover')
		});
		$('.JS_back_to_top_hover').mouseout(function(){
			$(this).removeClass('back_to_top_hover')
		})
	})
</script>

