<div class="footer">
    <p>©&nbsp;2005-2017 上海商创网络科技有限公司，并保留所有权利。Powered by <span class="vol"><?php echo $this->_var['site_url']; ?></span></p>
</div>
<script type="text/javascript">
document.onmousemove=function(e)
{
	var obj = Utils.srcElement(e);
	if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
	{
		obj.title = '<?php echo $this->_var['lang']['span_edit_help']; ?>';
		//obj.style.cssText = 'background: #278296;';
		obj.onmouseout = function(e)
		{
			this.style.cssText = '';
		}
	}
	else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
	{
		obj.title = '<?php echo $this->_var['lang']['href_sort_help']; ?>';
	}
}

var MyTodolist;
function showTodoList(adminid){
	if(!MyTodolist){
		var global = $import("../js/global.js","js");
		global.onload = global.onreadystatechange= function(){
			if(this.readyState && this.readyState=="loading")return;
			var md5 = $import("js/md5.js","js");
			md5.onload = md5.onreadystatechange= function(){
				if(this.readyState && this.readyState=="loading")return;
				var todolist = $import("js/todolist.js","js");
				todolist.onload = todolist.onreadystatechange = function(){
					if(this.readyState && this.readyState=="loading")return;
					MyTodolist = new Todolist();
					MyTodolist.show();
				}
			}
		}
	}else{
		if(MyTodolist.visibility){
			MyTodolist.hide();
		}else{
			MyTodolist.show();
		}
	}
}

if (Browser.isIE){
	onscroll = function(){
		document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
	}
}

if (document.getElementById("listDiv")){
	document.getElementById("listDiv").onclick = function(e){
		var obj = Utils.srcElement(e);
		if (obj.tagName == "INPUT" && obj.type == "checkbox"){
			if (!document.forms['listForm']){
				return;
			}
			var nodes = $("form[name='listForm']").find("input[name='checkboxes[]']");
			var checked = false;
			for(i = 0; i < nodes.length; i++){
				if(nodes[i].checked){
					checked = true;
					break;
				}
			}
		
			if(document.getElementById("btnSubmit")){
				if(checked == true){
					document.getElementById("btnSubmit").disabled = false;
					if(document.getElementById("selAction")){
						document.getElementById("selAction").disabled = false;
					}
					document.getElementById("btnSubmit").className = "sc-btn";
				}else{
					document.getElementById("btnSubmit").disabled = true;
					if(document.getElementById("selAction")){
						document.getElementById("selAction").disabled = true;
					}
					document.getElementById("btnSubmit").className = "sc-btn btn_disabled";
				}
			}
			
			for (i = 1; i <= 10; i++){
				if (document.getElementById("btnSubmit" + i)){
					if(checked == true){
						document.getElementById("btnSubmit" + i).disabled = false;
						document.getElementById("btnSubmit" + i).className = "sc-btn";
					}else{
						document.getElementById("btnSubmit" + i).disabled = true;
						document.getElementById("btnSubmit" + i).className = "sc-btn btn_disabled";
					}
				}
			}
		}
	}
}

$(function(){
	//导航栏鼠标移上左右弹性滑动
    huadong();
	
	/* 检查账单 */
  	startCheckBill();
	
	/* 检查出账单 */
  	outCheckBill();
	
	/* 检测配送地区缓存文件是否存在 */
	sellerShippingArea();
})
</script>
