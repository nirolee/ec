$(function(){
	


//商品详情页数量
	$("#product_amount").keyup(function(){
		var a = $("#product_amount").val();
		if(a < 1)
		{
			alert("最小购买数量为1件")	
		}
		else if(a == 1)
		{
			if($(".no_reduce").length < 1)
			{
				$(".JS_minus").removeClass("JS_minus").addClass("no_reduce");
			}
		}
		else
		{
			$(".no_reduce").removeClass("no_reduce").addClass("JS_minus");
		}
		changePrice();
	})
	
	if($("#product_amount").val() > 1)
	{
		$(".no_reduce").removeClass("no_reduce").addClass("JS_minus");
		changePrice();
	}
	

	$(".JS_add").click(function(){
		var a = $("#product_amount").val();
		a++;
		$("#product_amount").val(a);
		if(a > 1)
		{
			$(".no_reduce").removeClass("no_reduce").addClass("JS_minus");
		}
		changePrice();
	})
	
	$("#reduce").click(function(){
		
		var a = $("#product_amount").val();
		a--;
		if(a < 2)
		{
			$("#product_amount").val(1);
			$(this).removeClass("JS_minus").addClass("no_reduce");
		}
		else
		{
			$("#product_amount").val(a);
		}
		changePrice();
	})
	
	/******商品详情页单选属性点击效果********/
	$("dl.diff a").click(function(){
		
		var a = $(this).find(":radio");
		a.prop("checked",true);
		$(this).parents("dl.diff").find(".current").removeClass("current");
		$(this).addClass("current");
		changePrice();
	})	
	/******商品详情页单选属性点击效果********/
	
	/******优惠套装切换效果********/
	$("#fitAndCombineDiv .head-tab li").click(function(){
		var a = $("#fitAndCombineDiv .head-tab li").index($(this));	
		a++;
		$("#fitAndCombineDiv .head-tab li").removeClass("current");
		$("#fitAndCombineDiv #JS_suit_match_tab_body .module").hide();
		$("#optionCollectProdsContent"+a).show();
		$("#optionCollectProdsTitle"+a).addClass("current");
	})
	jQuery(".scroll").slide({mainCell:".stage ul",autoPage:true,effect:"left",autoPlay:false,vis:4,scroll:4,trigger:"click"});	
	/******优惠套装切换效果********/
	/******商品详情悬浮********/
        var b = this;
        this.floatNavs = $("#JS_float_navs");
        var a = $("#JS_float_navs_position");
        if (!a || !a.length) {
            return;
        }
        $(window).scroll(function() {
            var d = b.floatNavs;
            var e = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            var c = b.navsOffsetTop = a.offset().top;
            if (e > c) {
                d.addClass("fixed-top");
            } else {
                d.removeClass("fixed-top");
            }
        });
		/******商品详情悬浮********/
		/******评论弹出********/
		$(".open_comment").click(function(){
		easyDialog.open({
			container : 'comment_show',
			fixed : true,
			drag : true
		});
	})
	
	$(".popwinClose").click(function(){
		easyDialog.close();
	})
	
	jQuery(".slideComment").slide({trigger:"click",titCell:".inhd li",mainCell:".inbd"});
		/******评论弹出********/
		
		
	/******商品详情切换********/
	jQuery(".main-frame").slide({trigger:"click"});	
	/******商品详情切换********/
	
})
