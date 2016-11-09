$(function(){
	/*团购页促销倒计时 start*/
	setInterval(function(){
		$(".endtime").each(function(){
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
	
        if(a> 0){
			var str = myD+'天'+myH_show+'时'+myM+'分'+myS+'秒';
        }else{
			var str = "已结束！";	
		}

		obj.html(str);
      });
    }, 100);
	/*团购页促销倒计时 end*/	
	/*团商品鼠标移动效果 Start*/
		$('#tuan_list').on('mouseenter','.tg_goods',function(){
			$(this).addClass('active');
		}).on('mouseleave','.tg_goods',function(){
			$(this).removeClass('active');
		});
	/*团商品鼠标移动效果 End*/
	
	
	
	
})
