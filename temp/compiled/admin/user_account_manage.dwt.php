<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title">会员 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                    <li>搜索某个时间的商城用户充值总额。</li>
                    <li>搜索出来的信息只能查看不能修改。</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                    	<form name="TimeInterval" action="user_account_manage.php" method="post" id="user_account_manage">
                        <div class="switch_info">
                            <div class="items">
                                <div class="item bor_bt_das pb20">
                                    <div class="label"><?php echo $this->_var['lang']['start_end_date']; ?>：</div>
                                    <div class="label_value">
                                        <div class="text_time" id="text_time_start">
                                            <input type="text" name="start_date" value="<?php echo $this->_var['start_date']; ?>" id="start_time_id" class="text mr0" readonly />
                                        </div>
                                        <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="text_time" id="text_time_end">
                                            <input type="text" name="end_date" value="<?php echo $this->_var['end_date']; ?>" id="end_time_id" class="text" readonly />
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn30 blue_btn_2" ectype="search" id="submitBtn"><i class="icon icon-search"></i>搜索</a>
                                    </div>
                                </div>
                                
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['user_add_money']; ?>：</div>
                                    <div class="label_value">
                                    	<div class="text_div mr70"><?php echo $this->_var['account']['voucher_amount']; ?></div>
                                        <div class="dl_div">
                                        	<div class="dt_div"><?php echo $this->_var['lang']['order_surplus']; ?>：</div>
                                            <div class="dd_div"><?php echo $this->_var['account']['surplus']; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['user_repay_money']; ?>：</div>
                                    <div class="label_value">
                                    	<div class="text_div mr70"><?php echo $this->_var['account']['to_cash_amount']; ?></div>
                                    	<div class="dl_div">
                                        	<div class="dt_div"><?php echo $this->_var['lang']['integral_money']; ?>：</div>
                                            <div class="dd_div"><?php echo $this->_var['account']['integral_money']; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['user_money']; ?>：</div>
                                    <div class="label_value"><div class="text_div"><?php echo $this->_var['account']['user_money']; ?></div></div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['frozen_money']; ?>：</div>
                                    <div class="label_value"><div class="text_div"><?php echo $this->_var['account']['frozen_money']; ?></div></div>
                                </div> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		//时间选择
		var opts1 = {
			'targetId':'start_time_id',//时间写入对象的id
			'triggerId':['start_time_id'],//触发事件的对象id
			'alignId':'text_time_start',//日历对齐对象
			'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
			'hms':'off',
			'max':''
		},opts2 = {
			'targetId':'end_time_id',
			'triggerId':['end_time_id'],
			'alignId':'text_time_end',
			'format':'-',
			'hms':'off',
			'max':''
		}
		xvDate(opts1);
		xvDate(opts2);
		
		$(function(){
			$("#submitBtn").click(function(){
            	$("#user_account_manage").submit();
			});
		});
    </script>
</body>
</html>
