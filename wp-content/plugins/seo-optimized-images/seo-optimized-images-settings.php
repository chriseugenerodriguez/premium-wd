<?php 
$default_options_data = array (
    
    
    'soi_alt_value' => '%name %title',
	'soi_title_value' => '',
	'soi_override_alt_value' => '1',
	'soi_override_title_value' => '1',
  
	); 
        
      // If there is no option setting in DB then assign default data to soi option array..
      
        
   $soi_options_array = wp_parse_args(get_option('soi_options_values'), $default_options_data);
  // print_r($soi_options_array);
   
   
   
if(isset($_POST['submit_general_settings_tab'])){

  
	
	$soi_options_array['soi_alt_value'] = esc_attr($_POST['soi_alt_value']);
	$soi_options_array['soi_title_value'] = esc_attr($_POST['soi_title_value']);
	$soi_options_array['soi_override_alt_value'] = esc_attr($_POST['soi_override_alt_value']);
	$soi_options_array['soi_override_title_value'] = esc_attr($_POST['soi_override_title_value']);
	update_option ('soi_options_values', $soi_options_array );
	
}

	


?>

<div class="wrap settings-wrap" id="page-settings">
    <h2>Settings</h2>
    <div id="option-tree-header-wrap">
        <ul id="option-tree-header">
            <li id=""><a href="" target="_blank"></a>
            </li>
            <li id="option-tree-version"><span>SEO Optimized Images</span>
            </li>
        </ul>
    </div>
    <div id="option-tree-settings-api">
    <div id="option-tree-sub-header"></div>
        <div class = "ui-tabs ui-widget ui-widget-content ui-corner-all">
           
          <!-- Tabs Begin-->
            <ul >
                <li id="tab_create_setting"><a href="#section_general">General Settings</a>
                </li>
                <li id="tab_faq" ><a href="#section_faq">FAQ</a>
                </li>
                <li id="tab_support" ><a href="#section_support">Support</a>
                </li>
				<li id="tab_other" ><a href="#section_other">Upgrade to Pro</a>
                </li>
            </ul>
            <!-- Tabs End-->
            
            
    <div id="poststuff" class="metabox-holder">
        <div id="post-body">
			<div id="post-body-content">
                <div id="section_general" class = "postbox">
                    <div class="inside">
                        <div id="setting_theme_options_ui_text" class="format-settings">
                            <div class="format-setting-wrap">
                    
    <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">            
    <form method="post" action="#section_general">
	<div class="format-setting-label">
		<h3 class="label">General Settings</h3>
	</div>
					
    <table class="form-table table_custom">
        
       
        
        <tr valign="top">
        <th scope="row"><?php _e('Alt Attribute Value','seoimages');?></th>
        <td><input type="text" name="soi_alt_value" value="<?php echo esc_attr( $soi_options_array['soi_alt_value'] ); ?>" />
        <p class=""><?php _e('The Alt attributes will be dynamically replaced by the above value.', 'seoimages') ?></p>
     <p class="">    
             %name - It will insert Image Name.<br> %title- It will insert Post Title.<br>
             %category - It will insert Post Categories.
         </p>
        </td>
        </tr>
        
         <tr valign="top">
        <th scope="row"><?php _e('Override Existing Alt Tag','seoimages');?></th>
        <td><select id="soi_override_alt_value" name="soi_override_alt_value">
		<?php $override_setting = array(
		'1'=>'YES',
		'0'=>'NO'); ?>
		<?php foreach($override_setting as $key => $value) { ?>
		<option value="<?php echo $key; ?>" <?php if ($soi_options_array['soi_override_alt_value']==$key) { echo 'selected="selected"'; } ?>  >
		<?php _e($value,'seoimages') ?> </option>
		<?php } ?>
		</select>
		<p class=""><?php _e('Do you want to Over Ride existing alt tags?','seoimages') ?></p>
        </td>
        </tr>
        
       
        
         <tr valign="top">
        <th scope="row"><?php _e('Title Attribute Value','seoimages');?></th>
        <td><input type="text" name="soi_title_value" value="<?php echo esc_attr( $soi_options_array['soi_title_value'] ); ?>" />
        <p class=""><?php _e('The Title attribute will be dynamically replaced by the above value.', 'seoimages') ?></p>
        
        </td>
        </tr> 
    
       <tr valign="top">
        <th scope="row"><?php _e('Override Existing Title Tag','seoimages');?></th>
        <td><select id="soi_override_title_value" name="soi_override_title_value">
		<?php $override_setting = array(
		'1'=>'YES',
		'0'=>'NO'); ?>
		<?php foreach($override_setting as $key => $value) { ?>
		<option value="<?php echo $key; ?>" <?php if ($soi_options_array['soi_override_title_value']==$key) { echo 'selected="selected"'; } ?>  >
		<?php _e($value,'seoimages') ?> </option>
		<?php } ?>
		</select>
		<p class=""><?php _e('Do you want to Over Ride existing title tags?','seoimages') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Override alt and title attributes of feature / thumbnail images.','seoimages');?></th>
        <td><select disabled>
		<?php $override_setting = array(
		'1'=>'YES',
		'0'=>'NO'); ?>
		<?php foreach($override_setting as $key => $value) { ?>
		<option value="<?php echo $key; ?>" <?php if (isset($soi_options_array['soi_override_thumbnail_images'])==$key) { echo 'selected="selected"'; } ?>  >
		<?php _e($value,'seoimages') ?> </option>
		<?php } ?>
		</select>
		<p class=""><?php _e('Do you want to optimize post / page thumbnail images or want to make seo friendly images?','seoimages') ?> &nbsp;&nbsp;<a class="prolinkbtn">Available In Pro</a></p>
        </td>
        </tr>
        
        
        
        <tr valign="top">
			<th scope="row"><?php _e('Override alt and title tags of woocommerce products images.','seoimages');?></th>
			<td><select disabled>
			<?php $override_setting = array(
			'1'=>'YES',
			'0'=>'NO'); ?>
			<?php foreach($override_setting as $key => $value) { ?>
			<option value="<?php echo $key; ?>" <?php if (isset($soi_options_array['soi_override_woo_thumbnail_images'])==$key) { echo 'selected="selected"'; } ?>  >
			<?php _e($value,'seoimages') ?> </option>
			<?php } ?>
			</select>
			<p class=""><?php _e('Do you want to optimize woocommerce images or want to make search engine friendly?','seoimages') ?> &nbsp;&nbsp;<a class="prolinkbtn" >Available In Pro</a></p>
			</td>
        </tr>
		
		<tr valign="top">
			<th scope="row"><?php _e('Enable yoast pirmary category','seoimages');?></th>
			<td>
				<input type="checkbox" id="soi_override_yost_primary_cat" name="soi_override_yost_primary_cat" value="1" <?php if( isset($soi_options_array['soi_override_yost_primary_cat']) == true ) echo "checked"; ?> disabled>
				<p class=""><?php _e('Only Show Primary Category created by Yoast SEO Plugin.', 'seoimages') ?>&nbsp;&nbsp;<a class="prolinkbtn" >Available In Pro</a></p>
			</td>
		</tr>
		
		
		</table>
		
		<table class="form-table ">  
		<tr valign="top">
        <td><input type="submit" name="submit_general_settings_tab" value="save changes" class="button button-primary"></td>
        </tr>
		</table>
		
			
			</form>
                                        
					</div>
				</div>
			</div>
         </div>
        </div>
    </div>
    
            
    <div id="section_faq" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label">How Does it Work? </h3>
                    </div>
                </div>
            </div>
                                
        <p><span class="description">1. The plugin dynamically replaces the alt tags with the pattern specified by you. It makes no changes to the database.   </span></p>
        <p><span class="description">2. Since there are no changes to the database, one can have different alt tags for same images on different pages / posts.</span></p>
        <p><span class="description">3. %name - It will insert Image Name.</span></p>
        <p><span class="description">4. %title- It will insert Post Title.</span></p>
        <p><span class="description">5. %category - It will insert Post Categories.  </span></p>                
				</div>
				
				  <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label"> Why Optimize Alt Tags </h3>
                    </div>
                </div>
            </div>
                                
        <p><span class="description">1. According to <a target = "_blank" href = "http://googlewebmastercentral.blogspot.in/2007/12/using-alt-attributes-smartly.html">this post </a> on the Google Webmaster Blog, Google tends to focus on the information in the ALT text. Creating a optimized alt tags can bring more traffic from Search Engines </span></p>
        <p><span class="description">2. Take note that the plugin does not makes changes to the database. It dynamically replaces the tags at the times of page load.</span></p>
                      
				</div>
				
				
	</div>
	
	
	<div id="section_support" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label">Support </h3>
                    </div>
                </div>
            </div>
                                
			<p><span class="description">1. For any queries contact us via the <a href = "https://wordpress.org/support/plugin/seo-optimized-images" target = "_blank">support forums.</a></span></p>
			<p><span class="description">2. If you like our plugin and support than kindly share your <a href = "https://wordpress.org/support/view/plugin-reviews/seo-optimized-images" target = "_blank">feedback.</a> Your feedback is valuable.</span></p>
        
                      
		</div>
	</div>
	
	<div id="section_other" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label">Upgrade to Pro </h3>
                    </div>
                </div>
            </div>
        
             <form method="post" id="commingsoon_lite_theme_options_7">
		
<div class="row" style="margin-left:10px;background: #f7f7f7;padding-top: 10px;padding-bottom: 70px;">
	
	<div class="span6" style="width:85%;margin-top: auto;">
		<h3>Pricing</h3>
		<p> We have 2 packages</p> 
		
	<ul><li class="ui-corner-left"><h3>SEO - Business Package</h3>  <p>The package have a support for <b>Featured Images, Custom Post Type Image and Custom Rules</b>.The price of this Package is <b>$59</b>.</p></li> 
		<li class="ui-corner-left"><h3>SEO - Business With WooCommerce Package</h3> <p>The package have a support for <b>WooCommerce Images, Featured Images, Custom Post Type Image and Custom Rules</b> . The price of this package is <b>$79</b>.</p>
		</li></ul>
		<p>Support and Updates will be given for 1 year. <br>If you need updates and support after one year, then simply renew your subscription. If not, then you may still keep using the plugin.</p>
		

<h3>How to Purchase.</h3>
<p>If you are interested then you can buy the plugin <a href="http://webriti.com/seo-optimized-images/" target="_blank">here.</a> Once the purchase process gets complete, <a href="http://webriti.com/amember/login/index" target="_blank">login</a> to your account and download the package. </p>

<h3>Looking Forward to work with you</h3>
<p>Thousands of users have enjoyed using our plugin.</p>

	</div>
	
 </div>


  <div class="row" style="margin-left:10px;background:#fff;text-align:center">

	</div>
	<br>

	<br>
	 
	<br>
	<div style="text-align: center;">
	<a class="btn btn-danger  btn-large" href="http://webriti.com/seo-optimized-images/" target="_new">Upgrade To Pro Version</a>&nbsp;
	</div> 
	<br>	

		<!--<div id="button_section">
			<input type="hidden" value="1" id="commingsoon_lite_settings_save_7" name="commingsoon_lite_settings_save_7" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="commingsoon_option_data_reset('7');">
			<input class="button button-primary" type="button" value="Save Options" onclick="commingsoon_option_data_save('7')" >
		</div>-->
	</form>         
		</div>
	</div>

	
        </div>
    </div>
    </div>
        <div class="clear"></div>
        </div>
    </div>
</div>
