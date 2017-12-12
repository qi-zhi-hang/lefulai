<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<div class="tabmenu">
					<ul class="tab" ectype="set_tab">
						<li data-type="base" class="active"><a href="javascript:;">基本信息</a></li>
						<li data-type="picture"><a href="javascript:;">图片设置</a></li>
						<li data-type="other"><a href="javascript:;">客服第三方设置</a></li>
					</ul>
				</div>
                <div class="ecsc-form-goods" ectype="set_info">
                    <form method="post" action="index.php?act=merchants_second" id="my_store_form" enctype="multipart/form-data">					
                    <div class="wrapper-list" data-type="base">
                        <input type="hidden" name="form_submit" value="ok">
                        <dl>
                            <dt><?php if ($this->_var['priv_ru']): ?><?php echo $this->_var['lang']['steps_shop_name']; ?><?php else: ?><?php echo $this->_var['lang']['company_name']; ?><?php endif; ?>：</dt>
                            <dd><input type="text" name="shop_name" value="<?php echo $this->_var['shop_info']['shop_name']; ?>" size="40" class="text" /></dd>
                        </dl>
                        <?php if (! $this->_var['priv_ru']): ?>
                        <dl>
                            <dt><?php echo $this->_var['lang']['settled_shop_name']; ?>：</dt>
                            <dd><input type="text" name="brand_shop_name" value="<?php echo $this->_var['shop_information']['shop_name']; ?>" disabled="disabled" size="40" class="text text_disabled" /></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['expect_shop_name']; ?>：</dt>
                            <dd><input type="text" name="ec_rz_shopName" value="<?php echo $this->_var['shop_information']['rz_shopName']; ?>" disabled="disabled" size="40" class="text text_disabled" /></dd>
                        </dl>
                        <dl class="setup store-logo">
                            <dt><?php echo $this->_var['lang']['display_shop_name']; ?>：</dt>
                            <dd>
                            	<div class="checkbox_items">
                                    <div class="checkbox_item">
                                        <input type="radio" name="check_sellername" value="0" class="ui-radio" id="check_sellername_0" <?php if ($this->_var['shop_info']['check_sellername'] == 0): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="check_sellername_0"><?php echo $this->_var['lang']['settled_brand_shop_name']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="check_sellername" value="1" class="ui-radio" id="check_sellername_1" <?php if ($this->_var['shop_info']['check_sellername'] == 1): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="check_sellername_1"><?php echo $this->_var['lang']['expect_shop_name']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="check_sellername" value="2" class="ui-radio" id="check_sellername_2" <?php if ($this->_var['shop_info']['check_sellername'] == 2): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="check_sellername_2"><?php echo $this->_var['lang']['company_name']; ?></label>
                                    </div>
                                    <?php if ($this->_var['shop_info']['shopname_audit'] == 1): ?><span class="txtline red"><?php echo $this->_var['lang']['already_examine']; ?></span><?php else: ?><span class="txtline org"><?php echo $this->_var['lang']['stay_examine']; ?></span><?php endif; ?>
                                </div>
                            </dd>
                        </dl>
                        <?php endif; ?>
                        <dl class="hide">
                            <dt><?php echo $this->_var['lang']['02_template_select']; ?>：</dt>
                            <dd>
                                <div class="checkbox_items">
                                	<div class="checkbox_item">
                                        <input name="templates_mode" type="radio" value="0" class="ui-radio" id="templates_mode_0" <?php if ($this->_var['shop_info']['templates_mode'] == 0): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="templates_mode_0">默认模板</label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input name="templates_mode" type="radio" value="1" class="ui-radio" id="templates_mode_1" <?php if ($this->_var['shop_info']['templates_mode'] == 1): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="templates_mode_1">可视化编辑模板</label>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_title']; ?>：</dt>
                            <dd><input type="text" name="shop_title" value="<?php echo $this->_var['shop_info']['shop_title']; ?>" class="text" /></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_keyword']; ?>：</dt>
                            <dd><input type="text" name="shop_keyword" value="<?php echo $this->_var['shop_info']['shop_keyword']; ?>" class="text" /></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['lab_seller_site']; ?>：</dt>
                            <dd><input type="text" size="40" value="<?php echo $this->_var['shop_info']['domain_name']; ?>" name="domain_name" class="text" /></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_country']; ?>：</dt>
                            <dd>
                                <div id="dlcountry" class="ui-dropdown smartdropdown alien">
                                    <input type="hidden" value="<?php echo $this->_var['shop_info']['country']; ?>" name="shop_country" id="selcountry">
                                        <div class="txt">国家</div>
                                        <i class="down u-dropdown-icon"></i>
                                        <div class="options clearfix" style="max-height:300px;">
                                            <?php $_from = $this->_var['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                            <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="1"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_province']; ?>：</dt>
                            <dd>
                                
                                <div id="dlProvinces" class="ui-dropdown smartdropdown alien">
                                    <input type="hidden" value="<?php echo $this->_var['shop_info']['province']; ?>" name="shop_province" id="selProvinces">
                                        <div class="txt">省/直辖市</div>
                                        <i class="down u-dropdown-icon"></i>
                                        <div class="options clearfix" style="max-height:300px;">
                                            <?php $_from = $this->_var['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                            <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_city']; ?>：</dt>
                            <dd>
                                <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                    <input type="hidden" value="<?php echo $this->_var['shop_info']['city']; ?>" name="shop_city" id="selCities">
                                        <div class="txt">市</div>
                                        <i class="down u-dropdown-icon"></i>
                                        <div class="options clearfix" style="max-height:300px;">
                                            <?php $_from = $this->_var['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                            <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="3"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['local_area']; ?>：</dt>
                            <dd>
                                <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                                    <input type="hidden" value="<?php echo $this->_var['shop_info']['district']; ?>" name="shop_district" id="selDistricts">
                                        <div class="txt">区/县</div>
                                        <i class="down u-dropdown-icon"></i>
                                        <div class="options clearfix" style="max-height:300px;">
                                            <?php $_from = $this->_var['districts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                            <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="4"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_address']; ?>：</dt>
                            <dd>
                            	<input type="text" name="shop_address" value="<?php echo $this->_var['shop_info']['shop_address']; ?>" class="text"/>
                                <div class="notic">注意：无需填写区域，格式如（中山北路3553号伸大厦）</div>
                            </dd>
                        </dl>
                        <dl class="hide"> 
                            <dt><?php echo $this->_var['lang']['tengxun_key']; ?>：</dt>
                            <dd>
                            	<input type="text" name="tengxun_key" value="<?php echo $this->_var['shop_info']['tengxun_key']; ?>" class="text" />
                                <a href="http://lbs.qq.com/mykey.html" target="_blank">获取密钥</a>
                            </dd>
                        </dl>
                        <dl> 
                            <dt><?php echo $this->_var['lang']['longitude']; ?>：</dt>
                            <dd>
                            	<input type="text" name="longitude" value="<?php echo $this->_var['shop_info']['longitude']; ?>" class="text" />
                                <a href="javascript:;" onclick="get_coordinate();" class="txtline ml10">点击获取坐标</a>
                                <div class="notic"><?php echo $this->_var['lang']['longitude_desc']; ?></div>
                            </dd>
                        </dl>	
                        <dl>
                            <dt><?php echo $this->_var['lang']['latitude']; ?>：</dt>
                            <dd>
                            	<input type="text" name="latitude" value="<?php echo $this->_var['shop_info']['latitude']; ?>" class="text" />
                                <div class="notic"><?php echo $this->_var['lang']['latitude_desc']; ?></div>
                            </dd>
                        </dl>						
                        <dl>
                            <dt><?php echo $this->_var['lang']['03_shipping_list']; ?>：</dt>
                            <dd>
                                <div  class="imitate_select select_w190">
                                  <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                  <ul id="brand_id">
                                      <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                      <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                      <?php if ($this->_var['priv_ru'] == 0 || ( $this->_var['priv_ru'] != 1 && $this->_var['list']['shipping_code'] != 'cac' )): ?>
                                      <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['shipping_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['shipping_name']; ?></a></li>
                                      <?php endif; ?>
                                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                  </ul>
                                  <input name='shipping_id' type="hidden" value="<?php echo $this->_var['shop_info']['shipping_id']; ?>" id="shipping_id"/>
                                </div>
                            </dd>
                        </dl>	
                        <dl>
                            <dt><?php echo $this->_var['lang']['customer_service_mobile']; ?>：</dt>
                            <dd><input type="text" size="40" value="<?php echo $this->_var['shop_info']['mobile']; ?>" name="mobile" class="text text_2"></dd>
                        </dl>	
                        <dl>
                            <dt><?php echo $this->_var['lang']['customer_service_address']; ?>：</dt>
                            <dd><input type="text" size="40" value="<?php echo $this->_var['shop_info']['seller_email']; ?>" name="seller_email" class="text text_2"></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_notice']; ?>：</dt>
                            <dd><textarea name="notice" rows="10" cols="60" class="textarea"><?php echo $this->_var['shop_info']['notice']; ?></textarea></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_street_desc']; ?>：</dt>
                            <dd><textarea name="street_desc" class="textarea"><?php echo $this->_var['shop_info']['street_desc']; ?></textarea></dd>
                        </dl>
                    </div>
					<div class="wrapper-list hide" data-type="picture">
                        <?php if ($this->_var['priv_ru'] != 1): ?>
                        <dl>
                            <dt><?php echo $this->_var['lang']['seller_logo']; ?>：</dt>
                            <dd>
                                 <div class="type-file-box">
                                 	<div class="input">
                                        <input type="text" name="textfile" class="type-file-text" <?php if ($this->_var['shop_info']['shop_logo']): ?>value="<?php echo $this->_var['shop_info']['shop_logo']; ?>"<?php endif; ?> id="textfield" readonly>
                                        <input type="button" name="button" id="button" class="type-file-button" value="上传...">
                                        <input type="file" class="type-file-file" name="shop_logo" size="30" hidefocus="true" value="">
                                    </div>
                                    <?php if ($this->_var['shop_info']['shop_logo']): ?>
                                    <span class="show">
                                    <a href="<?php echo $this->_var['shop_info']['shop_logo']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" onmouseover="toolTip('<img src=<?php echo $this->_var['shop_info']['shop_logo']; ?>>')" onmouseout="toolTip()"></i></a>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form_prompt"></div>
                                <div class="notic" id="warn_brandlogo">(无限制*128像素)</div>
                            </dd>
                        </dl>
                        
                        <dl>
                            <dt><?php echo $this->_var['lang']['logo_sbt']; ?>：</dt>
                            <dd>
                                 <div class="type-file-box">
                                 	<div class="input">
                                        <input type="text" name="textfile" class="type-file-text" <?php if ($this->_var['shop_info']['logo_thumb']): ?>value="<?php echo $this->_var['shop_info']['logo_thumb']; ?>"<?php endif; ?> id="textfield" readonly>
                                        <input type="button" name="button" id="button" class="type-file-button" value="上传...">
                                        <input type="file" class="type-file-file" name="logo_thumb" size="30" hidefocus="true" value="">
                                    </div>
                                    <?php if ($this->_var['shop_info']['logo_thumb']): ?>
                                    <span class="show">
                                    <a href="<?php echo $this->_var['shop_info']['logo_thumb']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" onmouseover="toolTip('<img src=<?php echo $this->_var['shop_info']['logo_thumb']; ?>>')" onmouseout="toolTip()"></i></a>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form_prompt"></div>
                                <div class="notic" id="warn_brandlogo">(80*80像素)</div>
                            </dd>
                        </dl>
                        
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_street_sbt']; ?>：</dt>
                            <dd>
                                <div class="type-file-box">
                                	<div class="input">
                                        <input type="text" name="textfile" class="type-file-text" <?php if ($this->_var['shop_info']['street_thumb']): ?>value="<?php echo $this->_var['shop_info']['street_thumb']; ?>"<?php endif; ?> id="textfield" readonly>
                                        <input type="button" name="button" id="button" class="type-file-button" value="上传...">
                                        <input type="file" class="type-file-file" name="street_thumb" size="30" hidefocus="true" value="">
                                    </div>
                                    <?php if ($this->_var['shop_info']['street_thumb']): ?>
                                    <span class="show">
                                    <a href="../<?php echo $this->_var['shop_info']['street_thumb']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" onmouseover="toolTip('<img src=../<?php echo $this->_var['shop_info']['street_thumb']; ?>>')" onmouseout="toolTip()"></i></a>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form_prompt"></div>
                                <div class="notic" id="warn_brandlogo">(278*无限制)像素</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['shop_street_brand_sbt']; ?>：</dt>
                            <dd>
                                <div class="type-file-box">
                                	<div class="input">
                                        <input type="text" name="textfile" class="type-file-text" <?php if ($this->_var['shop_info']['brand_thumb']): ?>value="<?php echo $this->_var['shop_info']['brand_thumb']; ?>"<?php endif; ?> id="textfield" readonly>
                                        <input type="button" name="button" id="button" class="type-file-button" value="上传...">
                                        <input type="file" class="type-file-file" name="brand_thumb" size="30" hidefocus="true" value="">
                                    </div>
                                    <?php if ($this->_var['shop_info']['brand_thumb']): ?>
                                    <span class="show">
                                    <a href="../<?php echo $this->_var['shop_info']['brand_thumb']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" onmouseover="toolTip('<img src=../<?php echo $this->_var['shop_info']['brand_thumb']; ?>>')" onmouseout="toolTip()"></i></a>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form_prompt"></div>
                                <div class="notic" id="warn_brandlogo">(180*60像素)</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>二维码中间Logo: </dt>
                            <dd>
                                <div class="type-file-box">
                                	<div class="input">
                                        <input type="text" name="textfile" class="type-file-text" <?php if ($this->_var['shop_info']['qrcode_thumb']): ?>value="<?php echo $this->_var['shop_info']['qrcode_thumb']; ?>"<?php endif; ?> id="textfield" readonly>
                                        <input type="button" name="button" id="button" class="type-file-button" value="上传...">
                                        <input type="file" class="type-file-file" name="qrcode_thumb" size="30" hidefocus="true" value="">
                                    </div>
                                    <?php if ($this->_var['shop_info']['qrcode_thumb']): ?>
                                    <span class="show">
                                    <a href="<?php echo $this->_var['shop_info']['qrcode_thumb']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" onmouseover="toolTip('<img src=<?php echo $this->_var['shop_info']['qrcode_thumb']; ?>>')" onmouseout="toolTip()"></i></a>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form_prompt"></div>
                                <div class="notic" id="warn_brandlogo">(80*80像素)</div>
                            </dd>
                        </dl>  
                        <?php endif; ?>					
					</div>					
					<div class="wrapper-list hide" data-type="other">
                        <dl>
                            <dt><?php echo $this->_var['lang']['customer_service_qq']; ?>：</dt>
                            <dd>
                              <textarea name='kf_qq' value="<?php echo $this->_var['shop_info']['kf_qq']; ?>" rows="6" cols="48" class="textarea"><?php echo $this->_var['shop_info']['kf_qq']; ?></textarea>
                              <div class="notic"><?php echo $this->_var['lang']['kf_qq_prompt']; ?></div>
                            </dd>
                        </dl>	
                        <dl>
                            <dt><?php echo $this->_var['lang']['customer_service_taobao']; ?>：</dt>
                            <dd>
                            	<textarea name='kf_ww' value="<?php echo $this->_var['shop_info']['kf_ww']; ?>" rows="6" cols="48" class="textarea"><?php echo $this->_var['shop_info']['kf_ww']; ?></textarea>
                            	<div class="notic"><?php echo $this->_var['lang']['kf_ww_prompt']; ?></div>
                            </dd>
                        </dl>
                        <?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
                        <dl>
                            <dt>在线客服账号：</dt>
                            <dd>
                            	<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_touid']; ?>" name="kf_touid" class="text">
                            	<div class="notic">在 <a href="http://my.open.taobao.com/app/app_list.htm" target="_blank" class="red"> 淘宝开放平台</a>已开通云旺客服的账号。</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>在线客服appkey：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_appkey']; ?>" name="kf_appkey" class="text">
                                <div class="notic">在淘宝开放平台创建一个应用(百川无线)即可获得appkey。</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>在线客服secretkey：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_secretkey']; ?>" name="kf_secretkey" class="text">
                                <div class="notic">在淘宝开放平台创建一个应用(百川无线)即可获得secretkey。</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>在线客服头像LOGO：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_logo']; ?>" name="kf_logo" class="text">
                                <div class="notic">直接黏贴图片网址(推荐40 x 40),不填即使用默认头像。</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>在线客服欢迎信息：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_welcomeMsg']; ?>" name="kf_welcomeMsg" class="text">
                                <div class="notic">向用户发送的一条欢迎信息。</div>
                            </dd>
                        </dl>
                        <?php endif; ?>
                        <dl>
                            <dt>美恰客服：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['meiqia']; ?>" name="meiqia" class="text text_2">
                                <div class="notic">&nbsp;&nbsp;此功能仅手机端（wap）使用</div>
                            </dd>
                        </dl>	
                        <dl>
                            <dt><?php echo $this->_var['lang']['customer_service_tel']; ?>：</dt>
                            <dd><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_tel']; ?>" name="kf_tel" class="text text_2"></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['customer_service_css']; ?>：</dt>
                            <dd>
                                <div class="checkbox_items">
                                	<div class="checkbox_item">
                                        <input name="kf_type" type="radio" value="0" class="ui-radio" id="kf_type_0" <?php if ($this->_var['shop_info']['kf_type'] == 0): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="kf_type_0"><?php echo $this->_var['lang']['QQ_kf']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input name="kf_type" type="radio" value="1" class="ui-radio" id="kf_type_1" <?php if ($this->_var['shop_info']['kf_type'] == 1): ?>checked="checked"<?php endif; ?> />
                                        <label class="ui-radio-label" for="kf_type_1"><?php echo $this->_var['lang']['wangwang_kf']; ?></label>
                                    </div>
                                </div>
                            </dd>
                        </dl>						
                        <dl>
                            <dt>扫码appkey（极速数据）：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['js_appkey']; ?>" name="js_appkey" class="text text_1" autocomplete="off" id="code_appkey" />
                                <div class="notic">在<a target="_blank" href="http://www.jisuapi.com/api/barcode2/"> 极速数据 </a>申请账号。</div>
                            </dd>
                        </dl>	
                        <dl>
                            <dt>扫码appsecret（极速数据）：</dt>
                            <dd>
                                <input type="text" size="40" value="<?php echo $this->_var['shop_info']['js_appsecret']; ?>" name="js_appsecret" class="text text_1" autocomplete="off" />
                            </dd>
                        </dl>							
					</div>
					<div class="wrapper-list" data-type="button">
                        <dl class="button_info">
                        	<dt>&nbsp;</dt>
                            <dd>
								<input type="submit" class="sc-btn sc-blueBg-btn btn35" value="提交">
								<?php if ($this->_var['shop_info']['review_status'] == 2): ?>
								<span class="red">审核不通过：<?php echo $this->_var['shop_info']['review_content']; ?></span>
								<?php elseif ($this->_var['shop_info']['review_status'] == 1): ?>
								<span class="red">未审核</span>
								<?php endif; ?>
                                <input type="hidden" name="data_op" value="<?php echo $this->_var['data_op']; ?>"/>
                                <input name="lngX" type="hidden" value="0" />
                                <input name="latY" type="hidden" value="0" />
                            </dd>
                        </dl>					
					</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript" src="js/region.js"></script>
<script type="text/javascript" src="js/jquery.picTip.js"></script>
<script type="text/javascript" src="js/jquery.purebox.js"></script>
<script type="text/javascript"src="<?php echo $this->_var['http']; ?>webapi.amap.com/maps?v=1.3&key=2761558037cb710a1cebefe5ec5faacd&plugin=AMap.Autocomplete"></script>
<script type="text/javascript">
<!--

region.isAdmin = true;
/*地区三级联动*/
$(function(){
	$.levelLink();
	
	//加载获取地区坐标值
	get_lngxlaty();
})
onload = function()
{
	if(document.getElementById('paynon')){
		document.getElementById('paynon').style.display = 'none';
	}
}

function validator()
{
  var validator = new Validator('theForm');
  validator.required('shop_name', shop_name_not_null);
  
  var shipping_id = document.getElementById('shipping_id').value;
  
  if(shipping_id == 0){
	  alert("请选择配送方式");
	  return false;
  }
  
  return validator.passed();
}

function show_shipping_area()
{
  Ajax.call('shipping.php?act=shipping_priv', '', shippingResponse, 'GET', 'JSON');
}

function shippingResponse(result)
{
  var shipping_name = document.getElementById('shipping_type');
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    shipping_name.options[0].selected = true;
    return;
  }
  
  var area = document.getElementById('shipping_area');
  if(shipping_name.value == '')
  {
    area.style.display = 'none';
  }
  else
  {
    area.style.display = "block";
  }
}

/* 点击弹出地图 获取坐标 by kong start*/
function get_coordinate(){
	
	var lngX;
	var latY;
	
	get_lngxlaty(); 
	
	$.jqueryAjax('dialog.php', 'is_ajax=1&act=getmap_html', function(data){
	var content = data.content;
			 pb({
			id: "getlnglat",
			title: "获取经纬度",
			width: 1050,
			height:460,
			content: content,
			ok_title: "确定",
			drag: true,
			foot: true,
			cl_cBtn: false,
			onOk: function () {
				coordinateResponse()
			}
		});

		lngX = $(":input[name='lngX']").val();
		latY = $(":input[name='latY']").val();
		
		$("#lnglat").val(lngX+','+latY);
		
		//根据地址获取地图默认位置 start
		 var map = new AMap.Map("mapcontainer", {
			resizeEnable: true,
			icon: "images/mark_b.png",
			zoom: 17,
			center: [lngX,latY],
		});
		
		 var marker = new AMap.Marker({ //添加自定义点标记
			map: map,
			position: [lngX,latY], //基点位置
			offset: new AMap.Pixel(-10, -42), //相对于基点的偏移位置
			draggable: false,  //是否可拖动
			content : '<img src="images/mark_b.png">'
		});
		//根据地址获取地图默认位置 end
		
		marker.on('click', function() {
			$("#lnglat").val(lngX+','+latY);
		});
		
		//为地图注册click事件获取鼠标点击出的经纬度坐标
		var clickEventListener = map.on('click', function(e) {
			document.getElementById("lnglat").value = e.lnglat.getLng() + ',' + e.lnglat.getLat()
		});
		var auto = new AMap.Autocomplete({
			input: "tipinput"
		});
		AMap.event.addListener(auto, "select", select);//注册监听，当选中某条记录时会触发
		function select(e) {
			if (e.poi && e.poi.location) {
				map.setZoom(15);
				map.setCenter(e.poi.location);
				addMarker(e.poi.location.lat,e.poi.location.lng);
			}
		}
		 // 实例化点标记
		function addMarker(lat,lng) {
			var marker = new AMap.Marker({
				icon: "images/mark_b.png",
				position: [lng, lat]
			});
			marker.setMap(map);
			marker.on('click', function() {
				$("#lnglat").val(lngX+','+latY);
			});
		}
		
		$("#mapsubmit").click(function(){
		   var keywords = document.getElementById("tipinput").value;  
		   var auto = new AMap.Autocomplete({
				input: "tipinput"
			});
			//查询成功时返回查询结果  
			AMap.event.addListener(auto, "select", select);//注册监听，当选中某条记录时会触发
			auto.search(keywords);
		})
	});
}

/* 加载获取地区获取坐标 */
function get_lngxlaty(){
	var province = $("#dlProvinces").find(".txt").html();
	var city = $("#dlCity").find(".txt").html();
	var district = $("#dlRegion").find(".txt").html();
	var address = province + city + district + $(":input[name='shop_address']").val();
	
	var mapObj = new AMap.Map('iCenter'); 
	mapObj.plugin(["AMap.Geocoder"], function() {     //加载地理编码插件
		MGeocoder = new AMap.Geocoder({
			city:"全国", //城市，默认：“全国”
			radius:500 //范围，默认：500
		});
		//返回地理编码结果
		AMap.event.addListener(MGeocoder, "complete", function(data){
			var geocode = data.geocodes; 
			var lngX = geocode[0].location.getLng();
			var latY = geocode[0].location.getLat();
			mapObj.setCenter(new AMap.LngLat(lngX, latY));
			
			$(":input[name='lngX']").val(lngX);
			$(":input[name='latY']").val(latY);
		});        
		MGeocoder.getLocation(address);  //地理编码
	});
}

function coordinateResponse(){
    var lnglat = $("#lnglat").val();
    if(lnglat){
        var arr = lnglat.split(",");
        var lng = arr[0];
        var lat = arr[1];
        $(":input[name='latitude']").val(lat);
        $(":input[name='longitude']").val(lng);
    }
}
/* 点击弹出地图 获取坐标 by kong end*/

function loadConfig()
{
  var payment = document.forms['theForm'].elements['payment'];
  var paymentConfig = document.getElementById('paymentConfig');
  if(payment.value == '')
  {
    paymentConfig.style.display = 'none';
    return;
  }
  else
  {
    paymentConfig.style.display = 'block';
  }
  if(document.getElementById('paynon')){
	  if(payment.value == 'alipay')
 	 {
		document.getElementById('paynon').style.display = 'block';
	}
	else
	{
	  document.getElementById('paynon').style.display = 'none';
	}
  }
	
  var params = 'code=' + payment.value;

  Ajax.call('payment.php?is_ajax=1&act=get_config', params, showConfig, 'GET', 'JSON');
}

<?php if ($this->_var['is_false'] && $this->_var['priv_ru']): ?>
//Ajax.call('users.php?is_ajax=1&act=main_user','', start_user, 'GET', 'TEXT','FLASE');
function start_user(){
}
<?php endif; ?>
function showConfig(result)
{
  var payment = document.forms['theForm'].elements['payment'];
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    payment.options[0].selected = true;
    return;
  }
  var paymentConfig = document.getElementById('paymentConfig');
  var config = result.content;

  paymentConfig.innerHTML = config;
}
<?php if ($this->_var['goods_false'] && $this->_var['priv_ru']): ?>
//Ajax.call('goods.php?is_ajax=1&act=main_dsc','', start_dsc, 'GET', 'TEXT','FLASE');
function start_dsc(){
	//
}
<?php endif; ?>

//-->

//选项卡切换
$(document).on('click', "[ectype='set_tab'] li", function(){
	var type = $(this).data('type');
	$("[ectype='set_info'] [data-type='"+type+"']").show().siblings("[data-type!='button']").hide();
})
</script>
</body>
</html>
