<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                        <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="piliang" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-copy"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                    <div class="mian-info">
                        <form method="post" action="account_log.php" name="theForm"  id="account_info" >
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['label_user_name']; ?></div>
                                    <div class="label_value font14"><?php echo $this->_var['user']['user_name']; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['label_change_desc']; ?></div>
                                    <div class="label_value">
                                        <textarea name="change_desc" cols="60" rows="4" class="textarea" id="change_desc"></textarea>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['status']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                        	 <div class="checkbox_item">
                                                <input type="radio" name="money_status" value="0" class="ui-radio" id="money_status0" checked>
                                                <label class="ui-radio-label" for="money_status0"><?php echo $this->_var['lang']['label_user_money']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" name="money_status" value="1" class="ui-radio" id="money_status1">
                                                <label class="ui-radio-label" for="money_status1"><?php echo $this->_var['lang']['label_frozen_money']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" id="label_user_money">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value">
                                        <div class="date-item">
                                            <div id="user_month" class="imitate_select select_w75">
                                              <div class="cite"><?php echo $this->_var['lang']['add']; ?></div>
                                              <ul>
                                                 <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['add']; ?></a></li>
                                                 <li><a href="javascript:;" data-value="-1" class="ftx-01"><?php echo $this->_var['lang']['subtract']; ?></a></li>
                                              </ul>
											  <input name="add_sub_user_money" type="hidden" value="1" id="month_val">
                                            </div>
                                            <input type="text" name="user_money"  class="text w100 ml10" autocomplete="off" id="user_money"/>
                                            <div class="notic"><?php echo $this->_var['lang']['current_value']; ?><?php echo $this->_var['user']['formated_user_money']; ?></div>
                                            
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item hide" id="label_frozen_money">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value">
                                        <div class="date-item">
                                            <div id="user_year" class="imitate_select select_w75">
                                              <div class="cite"><?php echo $this->_var['lang']['add']; ?></div>
                                              <ul>
                                                 <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['add']; ?></a></li>
                                                 <li><a href="javascript:;" data-value="-1" class="ftx-01"><?php echo $this->_var['lang']['subtract']; ?></a></li>
                                              </ul>
											  <input name="add_sub_frozen_money" type="hidden" value="1" id="year_val">
                                            </div>
                                            <input type="text" name="frozen_money"  class="text w100 ml10" autocomplete="off" id="frozen_money"/>
                                            <div class="notic"><?php echo $this->_var['lang']['current_value']; ?><?php echo $this->_var['user']['formated_frozen_money']; ?></div>
                                            
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['label_rank_points']; ?></div>
                                    <div class="label_value">
                                        <div class="date-item">
                                            <div id="user_day" class="imitate_select select_w75">
                                              <div class="cite"><?php echo $this->_var['lang']['add']; ?></div>
                                              <ul>
                                                 <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['add']; ?></a></li>
                                                 <li><a href="javascript:;" data-value="-1" class="ftx-01"><?php echo $this->_var['lang']['subtract']; ?></a></li>
                                              </ul>
											  <input name="add_sub_rank_points" type="hidden" value="1" id="day_val">
                                            </div>
                                            <input type="text" name="rank_points"  class="text w100 ml10" autocomplete="off" id="rank_points"/>
                                            <div class="notic"><?php echo $this->_var['lang']['current_value']; ?><?php echo $this->_var['user']['rank_points']; ?></div>
                                            
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['label_pay_points']; ?></div>
                                    <div class="label_value">
                                        <div class="date-item">
                                            <div id="user_grade" class="imitate_select select_w75">
                                              <div class="cite"><?php echo $this->_var['lang']['add']; ?></div>
                                              <ul>
                                                 <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['add']; ?></a></li>
                                                 <li><a href="javascript:;" data-value="-1" class="ftx-01"><?php echo $this->_var['lang']['subtract']; ?></a></li>
                                              </ul>
											  <input name="add_sub_pay_points" type="hidden" value="1" id="user_grade_val">
                                            </div>
                                            <input type="text" name="pay_points"  class="text w100 ml10" autocomplete="off" id="pay_points"/>
                                            <div class="notic"><?php echo $this->_var['lang']['current_value']; ?><?php echo $this->_var['user']['pay_points']; ?></div>
                                            
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <a href="javascript:;" class="button" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                        <input type="hidden" name="token" value="<?php echo $this->_var['token']; ?>">
                                        <input type="hidden" name="sc_guid" value="<?php echo $this->_var['sc_guid']; ?>">
                                        <input type="hidden" name="sc_rand" value="<?php echo $this->_var['sc_rand']; ?>">
                                        <input type="hidden" name="act" value="insert" />
                                        <input type="hidden" name="user_id" value="<?php echo $this->_var['user']['user_id']; ?>" />
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
		//列表导航栏设置下路选项
    	$(".ps-container").perfectScrollbar();
		
        //会员基本信息 div仿select 
        $.divselect("#user_grade","#user_grade_val");
        $.divselect("#user_year","#year_val");
        $.divselect("#user_month","#month_val");
        $.divselect("#user_day","#day_val");
        
		$(function(){
			
			$(":input[name='add_sub_user_money']").val(1);
			$(":input[name='add_sub_frozen_money']").val(1);
			
			checked_prop('money_status');

			$(":input[name='money_status']").click(function(){
				var index = $(this).val();
				
				if(index == 1){
					$("#label_user_money").hide();
					$("#label_frozen_money").show();
					$(":input[name='user_money']").val('');
				}else{
					$("#label_user_money").show();
					$("#label_frozen_money").hide();
					$(":input[name='frozen_money']").val('');
				}
			});
			
			$("#submitBtn").click(function(){
				if($("#account_info").valid()){
					$("#account_info").submit();
				}
			});
		
			$('#account_info').validate({
					errorPlacement:function(error, element){
						var error_div = element.parents('div.label_value').find('div.form_prompt');
						element.parents('div.label_value').find(".notic").hide();
						error_div.append(error);
					},
					rules : {
							change_desc : {
									required : true
							},
							user_money : {
									number : true
							},
							frozen_money : {
									number : true
							},
							rank_points : {
									digits : true
							},
							pay_points : {
									digits : true
							}
							
					},
					messages : {
							change_desc : {
									required : '<i class="icon icon-exclamation-sign"></i>'+no_change_desc
							}
							,
							user_money : {
									number : '<i class="icon icon-exclamation-sign"></i>'+user_money_not_number
							},
							frozen_money : {
									number :'<i class="icon icon-exclamation-sign"></i>'+frozen_money_not_number
							},
							rank_points : {
									digits : '<i class="icon icon-exclamation-sign"></i>'+rank_points_not_int
							},
							pay_points : {
									digits : '<i class="icon icon-exclamation-sign"></i>'+pay_points_not_int
							}
					}
			});
		});
    </script>     
</body>
</html>
