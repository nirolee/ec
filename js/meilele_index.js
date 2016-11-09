$(function(){
	/*首页楼层定义 start*/
	$(".default_floor_show").each(function(i,e){
		i++;

		$(this).addClass("default_floor_"+i+"F");
		$(this).attr("id","floor-"+i)
	})
	/*首页楼层定义 end*/
	/*首页幻灯片效果 start*/
	$(".banner-panel").slide({titCell:".slide-nav a",mainCell:".focus-box ul",autoPlay:true,titOnClassName:"cur-nav"});
	/*首页幻灯片效果 end*/
	/*楼层轮播 start*/
	$(".JS_floor_banner").slide({mainCell:".bd ul",autoPlay:true});
	/*楼层轮播 end*/
	/*品牌区域广告轮播 start*/
	
	var j = $("#JS_tr_top").html(),
        a = $("#JS_tr_bottom").html();
        $("#JS_tr_top").append(j);
        $("#JS_tr_bottom").append(a);
        var i = $("#JS_table");
        var h = i.find("tr").find("td").length / 2;
        if (i.length <= 0 || h <= 2) {
            return;
        }
        var e = $("#JS_prev");
        var b = $("#JS_next");
        var k = $("#JS_roll_item");
        var f = 0;
        var c = window.LOAD=309;
        var l = false;
        var g = function(d) {
            i.stop(true).animate({
                "margin-left": (0 - d * c) + "px"
            },
            300,
            function() {
                if (d >= h / 2) {
                    d = 0;
                    i.css({
                        "margin-left": "0px"
                    });
                } else {
                    if (d <= 0) {
                        d = h / 2;
                        i.css({
                            "margin-left": 0 - (d * c) + "px"
                        });
                    }
                }
                f = d;
            });
        };
        k.hover(function() {
            l = true;
        },
        function() {
            l = false;
        });
        e.click(function() {
            g(f - 1);
        });
        e.hover(function() {
            $(this).addClass("current");
        },
        function() {
            $(this).removeClass("current");
        });
        b.click(function() {
            g(f + 1);
        });
        b.hover(function() {
            $(this).addClass("current");
        },
        function() {
            $(this).removeClass("current");
        });
        setInterval(function() {
            if (l) {
                return;
            }
            g(f + 1);
        },
        5000);
	
	
	$("#JS_roll_item").on({
            mouseover: function() {
                $(this).addClass("hover");
            },
            mouseout: function() {
                $(this).removeClass("hover");
            }
     });
	 
	 
	/*品牌区域广告轮播 end*/
	
	/*首页咨询选项 start*/
	function Options(id,cName,model){
			this.id=$("#"+id);
			this.li=this.id.find("."+cName).find("li");
			this.model=this.id.find("."+model);
			this.init();
		}
		Options.prototype.init=function(){
			var that=this;
			this.model.eq(0).css("display","block");
			this.li.eq(0).addClass("current");
			this.li.mouseover(function(){
				var index=that.li.index(this);
				that.li.removeClass("current");
				that.li.eq(index).addClass("current");
				that.model.css("display","none");
				that.model.eq(index).css("display","block");
			});	
		}
		new Options("tabs","head","models");
	/*首页咨询选项卡 end*/
	/*首页楼层定位 start*/
	$(".stairs_nav").on({
            mouseover: function() {
                $(this).addClass("hover");
            },
            mouseout: function() {
                $(this).removeClass("hover");
            }
     });
	function stairs_show() {
        var a = document.body.clientWidth,
        d = window.LOAD ? 1190 : 980,
        b = a - d;
        if (b < 110) {
            $("#JS_default_stairs").addClass("none");
        } else {
            $("#JS_default_stairs").removeClass("none");
        }
    }
    function stairs_move() {
        var a = $("#JS_default_stairs"),
        b = a.find("a"),
        c = true;
        $(window).on("scroll",
        function() {
            var e = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            a.removeClass("out");
            if (e >= 600) {
                if (!- [1, ]) {
                    a.show();
                } else {
                    a.css({
                        transform: "scale(1)",
                        opacity: 1
                    });
                }
                a.find(".stairs-cover").addClass("none");
                stairs_show();
            } else {
                if (!- [1, ]) {
                    a.hide();
                } else {
                    a.css({
                        transform: "scale(1.2)",
                        opacity: 0
                    });
                }
                a.find(".stairs-cover").removeClass("none");
            }
            var d = (e - 780) / 615;
            b.each(function() {
                $(this).removeClass("current");
            });
            if (d > 0 && d < 7) {
                if (d < 1) {
                    b.eq(0).addClass("current");
                } else {
                    var f = parseInt((e - 780) / 615);
                    b.eq(f).addClass("current");
                }
            }
        });
        
    }
    function initFloors() {
        window.onresize = function() {
            stairs_show();
        };
        stairs_show();
        stairs_move();        
    }
    $(function() {
       initFloors();
    });   
	/*首页楼层定位 end*/

	
	
	/*首页倒计时广告 start*/
	setInterval(function(){
      $(".timer").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
				var str = '剩余'+myD+'天'+myH_show+'时'+myM+'分'+myS+'秒';
			}
			else
			{
				var str = '剩余'+myH+'时'+myM+'分'+myS+'秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);
	/*首页倒计时广告 end*/
})
