<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <title><?php echo $page_title; ?></title>
    <?php echo global_assets('css');?>
    <script type="text/javascript">var ROOT_URL = '/mobile/';</script>
    <?php echo global_assets('js');?>
    <?php if($is_wechat) { ?>
    <script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script type="text/javascript">
        // 分享内容
        var shareContent = {
            title: '<?php echo ($share_data['title']); ?>',
            desc: '<?php echo ($share_data['desc']); ?>',
            link: '<?php echo ($share_data['link']); ?>',
            imgUrl: '<?php echo ($share_data['img']); ?>',
            success: function (res) {
                // 用户确认分享后执行的回调函数
                // res {"checkResult":{"onMenuShareTimeline":true},"errMsg":"onMenuShareTimeline:ok"}
                console.log(JSON.stringify(res));
                var msg = res.errMsg;
                var jsApiname = msg.replace(':ok','');
                shareCount(jsApiname,'<?php echo ($share_data['link']); ?>');
            }
        };

        // 分享统计
        function shareCount(jsApiname = '', link = ''){
            $.post('<?php echo url("wechat/jssdk/count");?>', {jsApiname: jsApiname, link:link}, function (res) {
                if(res.status == 200){
                    //
                }
            }, 'json');
        }

        $(function(){
            var url = window.location.href;
            var jsConfig = {
                debug: false,
                jsApiList: [
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareQZone'
                ]
            };
            $.post('<?php echo url("wechat/jssdk/index");?>', {url: url}, function (res) {
                if(res.status == 200){
                    jsConfig.appId = res.data.appId;
                    jsConfig.timestamp = res.data.timestamp;
                    jsConfig.nonceStr = res.data.nonceStr;
                    jsConfig.signature = res.data.signature;
                    // 配置注入
                    wx.config(jsConfig);
                    // 事件注入
                    wx.ready(function () {
                        wx.onMenuShareTimeline(shareContent);
                        wx.onMenuShareAppMessage(shareContent);
                        wx.onMenuShareQQ(shareContent);
                        wx.onMenuShareWeibo(shareContent);
                        wx.onMenuShareQZone(shareContent);
                    });
                }
            }, 'json');
        })
    </script>
    <?php } ?>
</head>
<body>
<p style="text-align:right; display:none;"><?php echo config('shop.stats_code');?></p>
<div id="loading"><img src="<?php echo elixir('img/loading.gif');?>" /></div>

<div class="con user_profile_safe">
    <header class="f-03 col-7">
        建议您启动全部安全设置，以保障账户及资金安全。
    </header>
    <section>
        <?php if($is_connect_user == 0) { ?>
        <div class="padding-all user_profile_safe_list ">
            <a href="<?php echo url('user/index/edit_password');?>">
                <i class="iconfont icon-zhaohuimima safe-icon col-9"></i>
                <h4 class="f-05 col-3">修改登录密码</h4>
                <p class="f-02 col-7 m-top04">互联网账号存在被盗风险，建议您定期更改密码。</p>
                <i class="iconfont icon-jiantou tf-180"></i>
             </a>
         </div>
         <?php } ?>
         <!-- <div class="padding-all  user_profile_safe_list m-top1px">
            <a href="<?php echo url('user/profile/user_edit_mobile');?>">
                <h4 class="f-05 col-3">
                <?php if($info['mobile_phone'] =='') { ?>
                <i class="iconfont icon-shoujiyanzheng1 safe-icon col-9"></i>
                立即手机验证
                <?php } else { ?>
                 <i class="iconfont icon-yanzheng safe-icon color-red"></i>
                <label class="color-red">已验证手机 <?php echo ($info['mobile_phone']); ?></label>
                <?php } ?>
                </h4>
                <p class="f-02 col-7 m-top04">验证后，可用于快速找回登录密码，接收消息提醒。</p>
                <i class="iconfont icon-jiantou tf-180"></i>
             </a>
         </div> -->
         <!-- <div class="padding-all  user_profile_safe_list m-top1px">
            <a href="<?php echo url('user/profile/user_edit_email');?>">
                <h4 class="f-05 col-3">
                <?php if($info['email'] == '' || $is_validated == 0) { ?>
                <i class="iconfont icon-youxiangrenzheng safe-icon col-9"></i>
                立即邮箱验证
                <?php } else { ?>
                <i class="iconfont icon-yanzheng safe-icon color-red"></i>
                <label class="color-red">已验证邮箱 <?php echo ($info['email']); ?></label>
                <?php } ?>
                </h4>
                <p class="f-02 col-7 m-top04">验证后，可用于快速找回登录密码等。</p>
                <i class="iconfont icon-jiantou tf-180"></i>
             </a>
         </div> -->
        <div class="padding-all  user_profile_safe_list m-top1px">
            <a href="<?php echo url('user/profile/user_edit_paypwd');?>">
                <h4 class="f-05 col-3">
                <?php if($users_paypwd == 0) { ?>
                <i class="iconfont icon-zhaohuimima safe-icon col-9"></i>
                启用支付密码
                <?php } else { ?>
                <i class="iconfont icon-yanzheng safe-icon color-red"></i>
                <label class="color-red">已启用支付密码</label>
                <?php } ?>
                </h4>
                <p class="f-02 col-7 m-top06">启用后，购物需验证支付密码，增加安全性。</p>
                <i class="iconfont icon-jiantou tf-180"></i>
             </a>
         </div>
    </section>
    <!-- <section class="m-top10">
        <div class="padding-all user_profile_safe_list m-top1px">
             <a href="<?php echo url('user/profile/accountbind');?>">
                <i class="iconfont icon-disanfang01 safe-icon col-9"></i>
                <h4 class="f-05 col-3">授权管理</h4>
                <p class="f-02 col-7 m-top04">第三方登录授权信息。</p>
                <i class="iconfont icon-jiantou tf-180"></i>
             </a>
        </div>
    </section> -->
</div>
<!--快捷导航-->
    <script>
    $(function(){
       // 获取节点
          var block = document.getElementById("ectouch-top");
          var oW,oH;
          // 绑定touchstart事件
          block.addEventListener("touchstart", function(e) {
           var touches = e.touches[0];
           //oW = touches.clientX - block.offsetLeft;
           oH = touches.clientY - block.offsetTop;
           //阻止页面的滑动默认事件
           document.addEventListener("touchmove",defaultEvent,false);
          },false)
         
          block.addEventListener("touchmove", function(e) {
           var touches = e.touches[0];
           //var oLeft = touches.clientX - oW;
           var oTop = touches.clientY - oH;
          //  if(oLeft < 0) {
          //   oLeft = 0;
          //  }else if(oLeft > document.documentElement.clientWidth - block.offsetWidth) {
          //   oLeft = (document.documentElement.clientWidth - block.offsetWidth);
          //  }
          // block.style.left = oLeft + "px";
           block.style.top = oTop + "px";
          var max_top = block.style.top =oTop;
          if(max_top < 30){
             block.style.top = 30 + "px";
          }
          if(max_top > 440){
            block.style.top = 440 + "px";
          }
          },false);
           
          block.addEventListener("touchend",function() {
           document.removeEventListener("touchmove",defaultEvent,false);
          },false);
          function defaultEvent(e) {
           e.preventDefault();
          }
    })
</script>
    <nav class="commom-nav dis-box ts-5" id="ectouch-top">
        <div class="left-icon">
            <div class="nav-icon"><i class="iconfont icon-jiantou1"></i>快速导航</div>
            <div class="filter-top filter-top-index" id="scrollUp">
                <i class="iconfont icon-jiantou"></i>
                <span>顶部</span>
            </div>
        </div>
        <div class="right-cont box-flex">
            <ul class="nav-cont">
                <li>
                      <a href="<?php echo url('/');?>">
                        <i class="iconfont icon-home"></i>
                        <p>首页</p>
                      </a>  
                </li>
                <li>
                     <a href="<?php echo url('category/index/index');?>">
                         <i class="iconfont icon-caidan"></i>
                         <p>分类</p>
                     </a> 
                </li>
                <li>
                     <a href="<?php echo url('cart/index/index');?>">
                         <i class="iconfont icon-gouwuche"></i>
                         <p>购物车</p>
                      </a> 
                </li>
                <li>
                    <a href="<?php echo url('user/index/index');?>">
                         <i class="iconfont icon-geren"></i>
                         <p>个人中心</p>
                    </a> 
                </li>
         



            <li>
                <a href="<?php echo url('user/profile/index');?>">
                     <i class="iconfont icon-qudiandianpumingpianicon"></i>
                     <p>个人资料</p>
                </a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="common-show"></div>
<script>
$(function($) {
	$(".onclik-safetips").click(function() {
		$(".my-safetips-box").addClass("current");
	});
	$(".my-safetips-close").click(function() {
		$(".my-safetips-box").removeClass("current");
	});
});

</script>
</body>
</html>