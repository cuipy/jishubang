/**mgr中的方法**/

//设置左侧菜单的激活状态
function left_menu_actived(){
	var url=location.href;
	$(".box_left .menu").each(function(i,item){
		var id=$(item).attr("id");
		if(url.indexOf(id)>0){
			$(item).attr("actived","");
			return false;
		}
	});
}