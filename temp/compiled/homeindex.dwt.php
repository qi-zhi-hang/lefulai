<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body>
	<?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="homeindex" ectype="homeWrap">
    	<?php echo $this->_var['page']; ?>
        
        <div class="attached-search-container" ectype="suspColumn">
            <div class="w w1200">
                <div class="categorys site-mast">
                    <div class="categorys-type"><a href="<?php echo $this->_var['url_categoryall']; ?>" target="_blank"><?php echo $this->_var['lang']['all_goods_cat']; ?></a></div>
                    <div class="categorys-tab-content">
                        <?php 
$k = array (
  'name' => 'category_tree_nav',
  'cat_model' => $this->_var['nav_cat_model'],
  'cat_num' => $this->_var['nav_cat_num'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </div>
                </div>
                <div class="mall-search">
                   <div class="dsc-search">
                        <div class="form">
                            <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="search-form">
                                <input autocomplete="off" name="keywords" type="text" id="keyword2" value="<?php if ($this->_var['search_keywords']): ?><?php echo $this->_var['search_keywords']; ?><?php else: ?><?php 
$k = array (
  'name' => 'rand_keyword',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><?php endif; ?>" class="search-text"/>
                                <input type="hidden" name="store_search_cmt" value="<?php echo empty($this->_var['search_type']) ? '0' : $this->_var['search_type']; ?>">
                                <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)" >搜商品</button>
                                <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)" >搜店铺</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="suspend-login">
                    <?php 
$k = array (
  'name' => 'index_suspend_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                </div>
                <div class="shopCart" id="ECS_CARTINFO">
                    <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                </div>
            </div>
    	</div>
        <div class="lift lift-hide" ectype="lift" style="z-index:100001">
            <div class="lift-list" ectype="liftList">
                <div class="lift-item lift-h-seckill lift-item-first" ectype="liftItem" data-target="#h-seckill"><span>秒杀</span></div>
            </div>
        </div>
        
        <input name="warehouse_id" type="hidden" value="<?php echo $this->_var['warehouse_id']; ?>">
    	<input name="area_id" type="hidden" value="<?php echo $this->_var['area_id']; ?>">
    </div>
    
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    	
	
     <?php if ($this->_var['bonusadv']['img_file'] && $this->_var['cfg_bonus_adv'] == 1): ?>
    <div class="ejectAdv" ectype="ejectAdv">
    	<div class="ejectAdvbg"></div>
    	<div class="ejectAdvimg">
        	<a href="<?php echo $this->_var['bonusadv']['fileurl']; ?>" target="_blank"><img src="<?php echo $this->_var['bonusadv']['img_file']; ?>"></a>
            <a href="javascript:void(0);" class="ejectClose" ectype="ejectClose"></a>
        </div>
    </div>
     <?php endif; ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/asyLoadfloor.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
		/*首页轮播*/
		var slideType = $("*[data-mode='lunbo']").find("*[data-type='range']").data("slide");
		var length = $(".banner .bd").find("li").length;
		
		if(slideType == "roll"){
			slideType = "left";
		}
		
		if(length>1){
			$(".banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:slideType,interTime:5000,delayTime:500,autoPlay:true,autoPage:true,trigger:"click",endFun:function(i,c,s){
				$(window).resize(function(){
					var width = $(window).width();
					s.find(".bd li").css("width",width);
				});
			}});
		}else{
			$(".banner .hd").hide();
		}
		
		//首页信息栏 新闻文章切换 
		$(".vip-item").slide({titCell:".tit a",mainCell:".con"});
		
		//楼层二级分类商品切换
		$("*[ectype='floorItem']").slide({titCell:".hd-tags li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		$("*[ectype='floorItem']").slide({titCell:".floor-nav li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		//第五套楼层模板
		$(".floor-fd-slide").slide({mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,vis:4,scroll:1,prevCell:".ff-prev",nextCell:".ff-next"});
		
		//第六套楼层模板
		$(".floor-brand").slide({mainCell:".fb-bd ul",effect:"left",pnLoop:true,autoPlay:false,autoPage:true,vis:3,scroll:1,prevCell:".fs_prev",nextCell:".fs_next"});
		
		//楼层轮播图广告
		$("*[data-purebox='homeFloor']").each(function(index, element) {
			var f_slide_length = $(this).find(".floor-left-slide .bd li").length;
			if(f_slide_length > 1){
				$(element).find(".floor-left-slide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
			}else{
				$(element).find(".floor-left-slide .hd").hide();
			}
        });

		//异步加载出秒杀活动、品牌信息
        $(function(){
            var site_domain = "<?php echo $this->_var['site_domain']; ?>";
            var brand_id = $('*[ectype="homeBrand"]').find(".brand-list").data("value");
			var where = '';
			if(!brand_id){
				brand_id = '';
			}
            if(site_domain){
                $.ajax({
                    type: "GET",
                    /*jquery Ajax跨域*/
                    url: "<?php echo $this->_var['site_domain']; ?>ajax_dialog.php",
                    data: "act=getUserInfo&is_jsonp=1&brand_id="+brand_id,
                    dataType:"jsonp",
                    jsonp:"jsoncallback",
                    success: homeAjax
                 });
            }else{
                Ajax.call('ajax_dialog.php?act=getUserInfo', 'brand_id=' + brand_id, homeAjax , 'POST', 'JSON');
            }
			
			function homeAjax(data){
				$("*[ectype='user_info']").html(data.content);
				$("*[ectype='homeBrand']").html(data.brand_list);
				
				if($("*[data-mode='lunbo']").length > 0){
					$("*[data-mode='lunbo']").after("<div class='visual-item w1200' ectype='channel'>"+data.seckill_goods+"</div>");
				}else{
					$(".content").find("*[ectype='visualItme']").eq(0).before("<div class='visual-item w1200' ectype='channel'>"+data.seckill_goods+"</div>");
				}
				$("*[ectype='time']").each(function(){
					$(this).yomi();
				});
				
				//秒杀活动
				var seckill_goods = $("input[name='seckill_goods']").val();
				if(seckill_goods == 0){
					$(".lift-h-seckill").hide();
				}else{
					$(".lift-h-seckill").show();
				}
				
				//首页秒杀商品滚动
				$(".seckill-channel").slide({mainCell:".box-bd ul",effect:"leftLoop",autoPlay:true,autoPage:true,interTime:5000,delayTime:500,vis:5,scroll:1,trigger:"click"});
				
				$.catetopLift();
				
				$(window).scroll(function(){
					var scrollTop = $(document).scrollTop();
					var navTop = $("*[ectype='channel']").offset().top;  //by yanxin
						
					if(scrollTop>navTop){
						$("*[ectype='suspColumn']").addClass("show");
					}else{
						$("*[ectype='suspColumn']").removeClass("show");
					}
				});
			}
                        
			//重新加载商品模块
			$("[data-mode='guessYouLike']").each(function(){
				var _this = $(this);
				var goods_ids = _this.data("goodsid");
				var warehouse_id = $("input[name='warehouse_id']").val();
				var area_id = $("input[name='area_id']").val();
				if(goods_ids){
					 Ajax.call('ajax_dialog.php?act=getguessYouLike', 'goods_ids=' + goods_ids + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id, function(data){
						 if(data.content){
							_this.find(".view .lift-channel ul").html(data.content);
						}
					 } , 'POST', 'JSON');
				}
			});
                       
			$("li[ectype='floor_cat_content'].current").each(function(){
				 get_homefloor_cat_content(this);
			});
			
			$("[ectype='identi_floorgoods'].current").each(function(){
				 get_homefloor_cat_content(this);
			});
        });
		
		function readyLoad(){
			var homeWrap = $("*[ectype='homeWrap']");
			var homeitem = homeWrap.find("*[ectype='visualItme']");
			var mode = "";
			var range = "";
			var lift = "";
			var id = "";
			var floorItem = "";
			var returnTop = '<div class="lift-item lift-item-top" ectype="liftItem"><i class="iconfont icon-returntop"></i></div>';
			homeitem.each(function(k,v){
				mode = $(this).data("mode");
				if(mode != "lunbo" && mode != "h-streamer" && mode != "custom"){
					range = $(this).find("*[data-type='range']");
					lift = range.data("lift");
					id = range.attr("id");
					
					var _div = '<div class="lift-item" ectype="liftItem" data-target="#'+ id +'"><span>'+lift+'</span></div>';
					
					$("*[ectype='liftList']").append(_div);
				}
				
			});
			
			$("*[ectype='liftList']").append(returnTop);
		}
		readyLoad();
		
		//会员名称*号 by yanxin
		var name = $(".suspend-login a.nick_name").text();
		var star = new Array();
		var nameLen = name.length > 2 ? name.length-2:"1";
		for(var i=1;i<=nameLen;i++){
			star.push("*");
		}
		star = star.join("");
		if(name.length > 2){
			var new_name = name[0] + star + name[name.length-1];
		}else{
			var new_name = name[0] + star;
		}
		$(".suspend-login a.nick_name").text(new_name);
		
		//去掉悬浮框 我的购物车
		$(".attached-search-container .shopCart-con a span").text("");
		
		$("*[ectype='time']").each(function(){
			$(this).yomi();
		});
    </script>
</body>
</html>
