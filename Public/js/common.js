/**常用功能**/

//页面跳转方法
function href(url){
	if(url!=undefined&&url!=""){
		location.href=url;
	}
	
}

/***********扩展jquery，实现textarea高度自适应************/
$.fn.extend({
    textareaAutoHeight: function (options) {
        this._options = {
            minHeight: 0,
            maxHeight: 1000
        }
        this.init = function () {
            for (var p in options) {
                this._options[p] = options[p];
            }
            if (this._options.minHeight == 0) {
                this._options.minHeight=parseFloat($(this).height());
            }
            for (var p in this._options) {
                if ($(this).attr(p) == null) {
                    $(this).attr(p, this._options[p]);
                }
            }
            $(this).keyup(this.resetHeight).change(this.resetHeight)
            .focus(this.resetHeight);
        }
        this.resetHeight = function () {
            var _minHeight = parseFloat($(this).attr("minHeight"));
            var _maxHeight = parseFloat($(this).attr("maxHeight"));

            var line=$(this).val().split("\n").length;
			h=line*18;
            h = h < _minHeight ? _minHeight :
                        h > _maxHeight ? _maxHeight : h;
            $(this).height(h);
            if (h >= _maxHeight) {
                $(this).css("overflow-y", "scroll");
            }
            else {
                $(this).css("overflow-y", "hidden");
            }
        }
        this.init();
    }
});