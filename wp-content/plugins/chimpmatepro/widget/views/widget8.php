<?php
$theme = $wpmchimpa['theme']['w8'];
$theme['widget_msg'] = htmlspecialchars_decode($theme['widget_msg']);
$plugin->social=true;
 ?>
 <style type="text/css">

#<?php echo $wpmcw_id; ?> {
padding: 0;
background: #262E43;
text-align: center;
width: 100%;
<?php  if(isset($theme["widget_bg_c"])){
    echo 'background-color:'.$theme["widget_bg_c"].';';
}?>
}

#<?php echo $wpmcw_id;?> h3{
line-height: 20px;
padding-top:20px;
color: #fff;
font-size: 20px;
margin: 0;
<?php 
if(isset($theme["widget_heading_f"])){
echo 'font-family:'.$theme["widget_heading_f"].';';
}
if(isset($theme["widget_heading_fs"])){
echo 'font-size:'.$theme["widget_heading_fs"].'px;';
}
if(isset($theme["widget_heading_fw"])){
echo 'font-weight:'.$theme["widget_heading_fw"].';';
}
if(isset($theme["widget_heading_fst"])){
echo 'font-style:'.$theme["widget_heading_fst"].';';
}
if(isset($theme["widget_heading_fc"])){
echo 'color:'.$theme["widget_heading_fc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa_para{
    margin: 10px 10px 0;
  line-height: 14px;
}
#<?php echo $wpmcw_id;?> .wpmchimpa_para,#<?php echo $wpmcw_id;?> .wpmchimpa_para * {
font-size: 12px;
color: #ADBBE0;
<?php if(isset($theme["widget_msg_f"])){
  echo 'font-family:'.$theme["widget_msg_f"].';';
}if(isset($theme["widget_msg_fs"])){
    echo 'font-size:'.$theme["widget_msg_fs"].'px;';
}?>
}

#<?php echo $wpmcw_id;?> form{
margin-top: 20px;
overflow: hidden;
}
#<?php echo $wpmcw_id;?> .formbox{
margin: 0 auto;
width: calc(100% - 20px);
}

#<?php echo $wpmcw_id;?>  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
text-align: left;
}
#<?php echo $wpmcw_id;?> .inputicon{
display: none;
}
#<?php echo $wpmcw_id;?> .wpmc-ficon .inputicon {
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["widget_tbox_h"])){
  echo 'width:'.$theme["widget_tbox_h"].'px;';
  echo 'height:'.$theme["widget_tbox_h"].'px;';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-field.wpmc-ficon input[type="text"],
#<?php echo $wpmcw_id;?> .wpmchimpa-field.wpmc-ficon .inputlabel{
  padding-left: 35px;
  <?php 
if(isset($theme["widget_tbox_h"])){
  echo 'padding-left:'.$theme["widget_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["widget_inico_c"]))? $theme["widget_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '#'.$wpmcw_id.' .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$plugin->getIcon($f['icon'],25,$col).' no-repeat center}';
}
?>
#<?php echo $wpmcw_id;?> .wpmchimpa-field select,
#<?php echo $wpmcw_id;?> input[type="text"]{
text-align: left;
width: 100%;
height: 35px;
background: #fff;
 padding: 0 10px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #353535;
font-size:17px;
outline:0;
display: block;
border: 1px solid #efefef;
<?php 
    if(isset($theme["widget_tbox_f"])){
      echo 'font-family:'.$theme["widget_tbox_f"].';';
    }
    if(isset($theme["widget_tbox_fs"])){
        echo 'font-size:'.$theme["widget_tbox_fs"].'px;';
    }
    if(isset($theme["widget_tbox_fw"])){
        echo 'font-weight:'.$theme["widget_tbox_fw"].';';
    }
    if(isset($theme["widget_tbox_fst"])){
        echo 'font-style:'.$theme["widget_tbox_fst"].';';
    }
    if(isset($theme["widget_tbox_fc"])){
        echo 'color:'.$theme["widget_tbox_fc"].';';
    }
    if(isset($theme["widget_tbox_bgc"])){
        echo 'background:'.$theme["widget_tbox_bgc"].';';
    }
    if(isset($theme["widget_tbox_w"])){
        echo 'width:'.$theme["widget_tbox_w"].'px;';
    }
    if(isset($theme["widget_tbox_h"])){
        echo 'height:'.$theme["widget_tbox_h"].'px;';
    }
    if(isset($theme["widget_tbox_bor"]) && isset($theme["widget_tbox_borc"])){
        echo ' border:'.$theme["widget_tbox_bor"].'px solid '.$theme["widget_tbox_borc"].';';
    }
?>
}

#<?php echo $wpmcw_id;?> .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 35px;
height: 35px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$plugin->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["widget_tbox_h"])){
  echo 'width:'.$theme["widget_tbox_h"].'px;';
  echo 'height:'.$theme["widget_tbox_h"].'px;';
}
?>
}
#<?php echo $wpmcw_id;?> input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 35px;
color: rgba(0,0,0,0.6);
font-size: 17px;
font-weight:500;
padding: 0 10px;
white-space: nowrap;
<?php 
if(isset($theme["widget_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["widget_tbox_f"]).';';
}
if(isset($theme["widget_tbox_fs"])){
    echo 'font-size:'.$theme["widget_tbox_fs"].'px;';
}
if(isset($theme["widget_tbox_fw"])){
    echo 'font-weight:'.$theme["widget_tbox_fw"].';';
}
if(isset($theme["widget_tbox_fst"])){
    echo 'font-style:'.$theme["widget_tbox_fst"].';';
}
if(isset($theme["widget_tbox_fc"])){
    echo 'color:'.$theme["widget_tbox_fc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> input[type="text"]:valid + .inputlabel{
display: none;
}
#<?php echo $wpmcw_id;?> select.wpmcerror,
#<?php echo $wpmcw_id;?> input[type="text"].wpmcerror{
  border-color: red;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-field.wpmchimpa-check,
#<?php echo $wpmcw_id;?> .wpmchimpa-field.wpmchimpa-radio{
  text-align: left;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-check *,
#<?php echo $wpmcw_id;?> .wpmchimpa-radio *{
  color: #fff;
<?php
if(isset($theme["widget_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["widget_check_f"]).';';
}
if(isset($theme["widget_check_fs"])){
    echo 'font-size:'.$theme["widget_check_fs"].'px;';
}
if(isset($theme["widget_check_fw"])){
    echo 'font-weight:'.$theme["widget_check_fw"].';';
}
if(isset($theme["widget_check_fst"])){
    echo 'font-style:'.$theme["widget_check_fst"].';';
}
if(isset($theme["widget_check_fc"])){
    echo 'color:'.$theme["widget_check_fc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item{
  <?php 
    if(isset($theme["widget_check_pline"])){
      if($theme["widget_check_pline"] == 'f'){
        ?> margin-right: 5px; <?php
      }
      else $pline = $theme["widget_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input {
  display: none;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  line-height: 20px;
  padding-left: 35px;
  margin-right: 10px;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-item span:before,
#<?php echo $wpmcw_id;?> .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  top: 4px;
  position: absolute;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item span:before {
border:1px solid #353535;
background: #fff;
border-radius: 1px;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
<?php
  if(isset($theme["widget_check_borc"])){
      echo 'border: 1px solid'.$theme["widget_check_borc"].';';
  }
 if(isset($theme["widget_check_c"]))echo 'background: '.$theme["widget_check_c"].';';?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + span:hover:after, #<?php echo $wpmcw_id;?> input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch2';
        if(isset($theme["widget_check_mark"])){$tfi=$theme["widget_check_mark"];}
        $tfc='#000';
        if(isset($theme["widget_check_ic"])){$tfc=$theme["widget_check_ic"];}
        echo $plugin->getIcon($tfi,8,$tfc);?>;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
#<?php echo $wpmcw_id;?> input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}
#<?php echo $wpmcw_id;?> .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
  color: red;
pointer-events: none;
  <?php
    if(isset($theme["widget_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["widget_status_f"]).';';
    }
    if(isset($theme["widget_status_fw"])){
        echo 'font-weight:'.$theme["widget_status_fw"].';';
    }
    if(isset($theme["widget_status_fst"])){
        echo 'font-style:'.$theme["widget_status_fst"].';';
    }
  ?>
}


#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button{
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #50B059;
background-color: #73C557;
height: 36px;
line-height: 36px;
text-align: center;
cursor: pointer;
transition: all 0.5s ease;
<?php
if(isset($theme["widget_button_f"])){
echo 'font-family:'.$theme["widget_button_f"].';';
}
if(isset($theme["widget_button_fs"])){
echo 'font-size:'.$theme["widget_button_fs"].'px;';
}
if(isset($theme["widget_button_fw"])){
echo 'font-weight:'.$theme["widget_button_fw"].';';
}
if(isset($theme["widget_button_fst"])){
echo 'font-style:'.$theme["widget_button_fst"].';';
}
if(isset($theme["widget_button_fc"])){
echo 'color:'.$theme["widget_button_fc"].';';
}
if(isset($theme["widget_button_w"])){
echo 'width:'.$theme["widget_button_w"].'px;';
}
if(isset($theme["widget_button_h"])){
echo 'height:'.$theme["widget_button_h"].'px;';
echo 'line-height:'.$theme["widget_button_h"].'px;';
}
if(isset($theme["widget_button_bc"])){
echo 'background-color:'.$theme["widget_button_bc"].';';
}
if(isset($theme["widget_button_br"])){
echo '-webkit-border-radius:'.$theme["widget_button_br"].'px;';
echo '-moz-border-radius:'.$theme["widget_button_br"].'px;';
echo 'border-radius:'.$theme["widget_button_br"].'px;';
}
if(isset($theme["widget_button_bor"]) && isset($theme["widget_button_borc"])){
echo ' border:'.$theme["widget_button_bor"].'px solid '.$theme["widget_button_borc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['widget_button'])) echo $theme['widget_button'];else echo 'Subscribe';?>';
}
#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button:hover{
background-color: #50B059;
<?php if(isset($theme["widget_button_fch"])){
echo 'color:'.$theme["widget_button_fch"].';';
}    
if(isset($theme["widget_button_bch"])){
echo 'background-color:'.$theme["widget_button_bch"].';';
}?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-subsc{position: relative;}
#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button.subsicon:before{
padding-left: 36px;
  <?php 
  if(isset($theme["widget_button_w"])){
      echo 'padding-left:'.$theme["widget_button_h"].'px;';
  }
  ?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 36px;
width: 36px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["widget_button_h"])){
      echo 'width:'.$theme["widget_button_h"].'px;';
      echo 'height:'.$theme["widget_button_h"].'px;';
  }
  if($theme["widget_button_i"] != 'inone' && $theme["widget_button_i"] != 'idef'){
    $col = ((isset($theme["widget_button_fc"]))? $theme["widget_button_fc"] : '#fff');
     echo 'background: '.$plugin->getIcon($theme["widget_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social{
display: inline-block;
margin: 12px auto 0;
height: 90px;
width: 100%;
background: rgba(75, 75, 75, 0.3);
box-shadow: 0px 1px 1px 1px rgba(116, 116, 116, 0.94);
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social::before{
content: '<?php if(isset($theme['widget_soc_head'])) echo $theme['widget_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
color: #ADACB2;
width: 100%;
display: block;
margin: 15px auto 5px;
<?php
if(isset($theme["widget_soc_f"])){
  echo 'font-family:'.$theme["widget_soc_f"].';';
}
if(isset($theme["widget_soc_fs"])){
    echo 'font-size:'.$theme["widget_soc_fs"].'px;';
}
if(isset($theme["widget_soc_fw"])){
    echo 'font-weight:'.$theme["widget_soc_fw"].';';
}
if(isset($theme["widget_soc_fst"])){
    echo 'font-style:'.$theme["widget_soc_fst"].';';
}
if(isset($theme["widget_soc_fc"])){
    echo 'color:'.$theme["widget_soc_fc"].';';
}
?>
}

#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc{
display: inline-block;
width:40px;
height: 40px;
border-radius: 2px;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border:1px solid #262E43;
<?php  if(isset($theme["widget_bg_c"])){
    echo 'border-color: '.$theme["widget_bg_c"].';';
}?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:40px;
height: 40px;
background: no-repeat center;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $plugin->getIcon('fb1',15,'#fff');?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo $plugin->getIcon('fb1',15,'#2d609b');?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:before {
background-image: <?php echo $plugin->getIcon('gp1',15,'#fff');?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo $plugin->getIcon('gp1',15,'#eb4026');?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $plugin->getIcon('ms1',15,'#fff');?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo $plugin->getIcon('ms1',15,'#00BCF2');?>
}


#<?php echo $wpmcw_id;?> .wpmchimpa-signal {
display: none;
position: absolute;
top: 4px;
right: 3px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
#<?php echo $wpmcw_id;?>.signalshow .wpmchimpa-signal {
  display: inline-block;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
top: -91px;
margin-top: -12px;
<?php
if(isset($theme["widget_status_f"])){
  echo 'font-family:'.$theme["widget_status_f"].';';
}
if(isset($theme["widget_status_fs"])){
    echo 'font-size:'.$theme["widget_status_fs"].'px;';
}
if(isset($theme["widget_status_fw"])){
    echo 'font-weight:'.$theme["widget_status_fw"].';';
}
if(isset($theme["widget_status_fst"])){
    echo 'font-style:'.$theme["widget_status_fst"].';';
}
if(isset($theme["widget_status_fc"])){
    echo 'color:'.$theme["widget_status_fc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px; top: 0;  margin: 0; height: auto;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$plugin->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-tag{
margin: 5px auto;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-tag,
#<?php echo $wpmcw_id;?> .wpmchimpa-tag *{
color:#68728D;
font-size: 10px;
<?php
  if(isset($theme["widget_tag_f"])){
    echo 'font-family:'.$theme["widget_tag_f"].';';
  }
  if(isset($theme["widget_tag_fs"])){
      echo 'font-size:'.$theme["widget_tag_fs"].'px;';
  }
  if(isset($theme["widget_tag_fw"])){
      echo 'font-weight:'.$theme["widget_tag_fw"].';';
  }
  if(isset($theme["widget_tag_fst"])){
      echo 'font-style:'.$theme["widget_tag_fst"].';';
  }
  if(isset($theme["widget_tag_fc"])){
      echo 'color:'.$theme["widget_tag_fc"].';';
  }
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["widget_tag_fs"])){$tfs=$theme["widget_tag_fs"];}
  $tfc='#68728D';
  if(isset($theme["widget_tag_fc"])){$tfc=$theme["widget_tag_fc"];}
  echo $plugin->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}
#<?php echo $wpmcw_id;?>.wosoc .wpmchimpa-social{
display: none;
}
</style>
<div class="widget-text wp_widget_plugin_box">
<div class="wpmchimpa-reset wpmchimpselector wpmchimpa chimpmatecss <?php if(isset($theme['widget_dissoc']))echo ' wosoc';?>" id="<?php echo $wpmcw_id;?>">
<?php if(isset($theme['widget_heading'])) echo '<h3>'.$theme['widget_heading'].'</h3>';?>
<?php if(isset($theme['widget_msg'])) echo '<div class="wpmchimpa_para">'.$theme['widget_msg'].'</div>';?>
    <form action="" method="post" >
              <div class="formbox">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => false,
  'type' => 1
  );
$plugin->stfield($form['fields'],$set);
$plugin->gethidden($form['preset']);
$plugin->wpmchimpa_abtheme();
?>
              <div class="wpmchimpa-subsc">
                <div class="wpmchimpa-subs-button<?php echo (isset($theme['widget_button_i']) && $theme['widget_button_i'] != 'inone' && $theme['widget_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
                <div class="wpmchimpa-signal"><?php 
                  echo $plugin->getSpin(isset($theme["widget_spinner_t"])?$theme["widget_spinner_t"]:'3',$wpmcw_id,isset($theme["widget_spinner_c"])?$theme["widget_spinner_c"]:'#000');?></div>              
              </div>
             

              <?php if(isset($theme['widget_tag_en'])){
              if(isset($theme['widget_tag'])) $tagtxt= $theme['widget_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>


            </div>

            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
    </form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
	</div>	
</div>