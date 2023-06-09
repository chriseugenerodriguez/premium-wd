<?php 
$theme = $wpmchimpa['theme']['l0'];
$theme['lite_msg'] = htmlspecialchars_decode($theme['lite_msg']);
?><style>
.wpmchimpa-overlay-bg.wpmchimpselector {
		display: none;
		top: 0;
		left: 0;
		height:100%;
		width: 100%;
		cursor: pointer;
		z-index: 999999;
		background: #000;
		background: rgba(0,0,0,0.90);
		<?php  if(isset($theme["lite_bg_op"])){
					echo 'background:rgba(0,0,0,'.($theme["lite_bg_op"]/100).');';
				}?>
		cursor: default;
		position: fixed!important;
}

.wpmchimpa-overlay-bg .wpmchimpa-maina{
-webkit-transform: translate(0,0);
		height:100%;}
.wpmchimpa-overlay-bg #wpmchimpa-main {
		position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
width: 100%;
<?php if($scroll){?>
/*long form*/
max-height: 100%;
overflow-y: auto;
<?php } ?>
}

.wpmchimpa-overlay-bg .wpmchimpa-wrapper {
	width:80%;
	max-width:780px;
	min-width:320px;
	margin:0 auto;
}

.wpmchimpa-overlay-bg #wpmchimpa-newsletterform {
	width:100%;
	display: block;
	text-align: center;
	letter-spacing: 1px;
}

.wpmchimpa-overlay-bg #wpmchimpa-newsletterform #wpmchimpa {
		padding: 50px 40px;
}

#wpmchimpa h3 {
		display: block;
		font-size:26px;
		font-weight:400;
		line-height:1.2;
		color:#fff;
		text-align: center;
		padding-bottom:20px;
		margin: 0 auto 30px auto;
		border-bottom:1px solid #fff;
		width:60%;
		<?php 
				if(isset($theme["lite_heading_f"])){
					echo 'font-family:'.$theme["lite_heading_f"].';';
				}
				if(isset($theme["lite_heading_fs"])){
						echo 'font-size:'.$theme["lite_heading_fs"].'px;';
						echo 'line-height:'.$theme["lite_heading_fs"].'px;';
				}
				if(isset($theme["lite_heading_fw"])){
						echo 'font-weight:'.$theme["lite_heading_fw"].';';
				}
				if(isset($theme["lite_heading_fst"])){
						echo 'font-style:'.$theme["lite_heading_fst"].';';
				}
				if(isset($theme["lite_heading_fc"])){
						echo 'color:'.$theme["lite_heading_fc"].';';
				}
		?>
}
#wpmchimpa .wpmchimpa_para{
margin-bottom:25px;
}
#wpmchimpa .wpmchimpa_para,#wpmchimpa .wpmchimpa_para * {
		font-size:14px;
		line-height:26px;
		color:#fff;
		<?php 
				if(isset($theme["lite_msg_f"])){
					echo 'font-family:'.$theme["lite_msg_f"].';';
				}
				if(isset($theme["lite_msg_fs"])){
						echo 'font-size:'.$theme["lite_msg_fs"].'px;';
				}
		?>
}

#wpmchimpa form {
		position: relative;
}

#wpmchimpa  .wpmchimpa-field{
position: relative;
width:55%;
margin: 0 auto 12px auto;
<?php 
	if(isset($theme["lite_tbox_w"])){
			echo 'width:'.$theme["lite_tbox_w"].'px;';
	}
?>
}
#wpmchimpa .inputicon{
display: none;
}
#wpmchimpa .wpmc-ficon .inputicon {
display: block;
width: 50px;
height: 50px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["lite_tbox_h"])){
	echo 'width:'.$theme["lite_tbox_h"].'px;';
	echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}
#wpmchimpa .wpmc-ficon input[type="text"],
#wpmchimpa .wpmc-ficon .inputlabel{
	padding-left: 50px;
	<?php 
if(isset($theme["lite_tbox_h"])){
	echo 'padding-left:'.$theme["lite_tbox_h"].'px;';
	}?>
}
<?php
$col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
	if($f['icon'] != 'idef' && $f['icon'] != 'inone')
		echo '#wpmchimpa .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],25,$col).' no-repeat center}';
}
?>
#wpmchimpa .wpmchimpa-field select,
#wpmchimpa input[type="text"]{
		font-size: 16px;
		font-weight:500;
		display: block;
		width:100%;
		height: 50px;
		background:#fff;
		padding: 0;
		color:#888;
		text-align: center;
		border:2px solid #fff;
		outline:0;
		border-radius: 1px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		transition: all 0.5s ease;
		<?php 
				if(isset($theme["lite_tbox_f"])){
					echo 'font-family:'.$theme["lite_tbox_f"].';';
				}
				if(isset($theme["lite_tbox_fs"])){
						echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
				}
				if(isset($theme["lite_tbox_fw"])){
						echo 'font-weight:'.$theme["lite_tbox_fw"].';';
				}
				if(isset($theme["lite_tbox_fst"])){
						echo 'font-style:'.$theme["lite_tbox_fst"].';';
				}
				if(isset($theme["lite_tbox_fc"])){
						echo 'color:'.$theme["lite_tbox_fc"].';';
				}
				if(isset($theme["lite_tbox_bgc"])){
						echo 'background:'.$theme["lite_tbox_bgc"].';';
				}
				if(isset($theme["lite_tbox_h"])){
						echo 'height:'.$theme["lite_tbox_h"].'px;';
				}
				if(isset($theme["lite_tbox_bor"]) && isset($theme["lite_tbox_borc"])){
						echo ' border:'.$theme["lite_tbox_bor"].'px solid '.$theme["lite_tbox_borc"].';';
				}
		?>
}

#wpmchimpa .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 50px;
height: 50px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["lite_tbox_h"])){
	echo 'width:'.$theme["lite_tbox_h"].'px;';
	echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}
#wpmchimpa input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 50px;
color: rgba(0,0,0,0.6);
font-size: 16px;
font-weight:500;
white-space: nowrap;
<?php 
if(isset($theme["lite_tbox_f"])){
	echo 'font-family:'.str_replace("|ng","",$theme["lite_tbox_f"]).';';
}
if(isset($theme["lite_tbox_fs"])){
		echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
}
if(isset($theme["lite_tbox_fw"])){
		echo 'font-weight:'.$theme["lite_tbox_fw"].';';
}
if(isset($theme["lite_tbox_fst"])){
		echo 'font-style:'.$theme["lite_tbox_fst"].';';
}
if(isset($theme["lite_tbox_fc"])){
		echo 'color:'.$theme["lite_tbox_fc"].';';
}
?>
}
#wpmchimpa input[type="text"]:valid + .inputlabel{
display: none;
}
#wpmchimpa select.wpmcerror,
#wpmchimpa input[type="text"].wpmcerror{
	border-color: red;
}
#wpmchimpa .wpmchimpa-check *,
#wpmchimpa .wpmchimpa-radio *{
font-size: 16px;
color: #fff;
text-align: left;
<?php
if(isset($theme["lite_check_f"])){
	echo 'font-family:'.str_replace("|ng","",$theme["lite_check_f"]).';';
}
if(isset($theme["lite_check_fs"])){
		echo 'font-size:'.$theme["lite_check_fs"].'px;';
}
if(isset($theme["lite_check_fw"])){
		echo 'font-weight:'.$theme["lite_check_fw"].';';
}
if(isset($theme["lite_check_fst"])){
		echo 'font-style:'.$theme["lite_check_fst"].';';
}
if(isset($theme["lite_check_fc"])){
		echo 'color:'.$theme["lite_check_fc"].';';
}
?>
}
#wpmchimpa .wpmchimpa-item{
  <?php 
    if(isset($theme["lite_check_pline"])){
      if($theme["lite_check_pline"] == 'f'){
        ?> margin-right: 10px; <?php
      }
      else $pline = $theme["lite_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
#wpmchimpa .wpmchimpa-item input {
	display: none;
}
#wpmchimpa .wpmchimpa-item span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	padding-left: 35px;
	margin-right: 10px;
  line-height: 20px;
}

#wpmchimpa .wpmchimpa-item span:before,
#wpmchimpa .wpmchimpa-item span:after {
	content: '';
	display: inline-block;
	width: 18px;
	height: 18px;
	left: 0;
	top: 4px;
	position: absolute;
}

#wpmchimpa .wpmchimpa-item span:before {
background-color: #fafafa;
transition: all 0.3s ease-in-out;
border-radius: 3px;
<?php
	if(isset($theme["lite_check_borc"])){
			echo 'border: 1px solid'.$theme["lite_check_borc"].';';
	}
?>
}
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + span:before {
border-radius: 3px;
}
#wpmchimpa .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 6px;
left: 4px;
}
#wpmchimpa .wpmchimpa-item input:checked + span:before{
	<?php if(isset($theme["lite_check_c"])) $color = $theme["lite_check_c"]; else $color = '#158EC6';
	print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + span:hover:after, #wpmchimpa input[type='checkbox']:checked + span:after {
	content:'';
	background: no-repeat center;
background-image: <?php
				$tfi='ch1';
				if(isset($theme["lite_check_mark"])){$tfi=$theme["lite_check_mark"];}
				$tfc='#fff';
				if(isset($theme["lite_check_ic"])){$tfc=$theme["lite_check_ic"];}
				echo $this->getIcon($tfi,12,$tfc);?>;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
background-image:<?php echo $this->getIcon($tfi,12,'#444');?>;
opacity: 0.5;
}

#wpmchimpa .wpmcinfierr{
	display: block;
	height: 12px;
	line-height: 12px;
	margin-bottom: -12px;
	font-size: 11px;
	color: red;
text-align: left;
pointer-events: none;
	<?php
		if(isset($theme["lite_status_f"])){
			echo 'font-family:'.str_replace("|ng","",$theme["lite_status_f"]).';';
		}
		if(isset($theme["lite_status_fw"])){
				echo 'font-weight:'.$theme["lite_status_fw"].';';
		}
		if(isset($theme["lite_status_fst"])){
				echo 'font-style:'.$theme["lite_status_fst"].';';
		}
	?>
}

#wpmchimpa .wpmchimpa-subs-button{
	width:40%;
	height:45px;
		cursor: pointer;
		border:none;
		position: relative;
		margin: 10px auto;
		display: block;
		transition: all 0.5s ease;
		box-shadow:none;
		background: #62bc33;
	color:#fff;
		clear:both;
		text-shadow:none;
		border: 0;
		border-radius: 1px;
		 <?php
				if(isset($theme["lite_button_f"])){
					echo 'font-family:'.$theme["lite_button_f"].';';
				}
				if(isset($theme["lite_button_fs"])){
						echo 'font-size:'.$theme["lite_button_fs"].'px;';
				}
				if(isset($theme["lite_button_fw"])){
						echo 'font-weight:'.$theme["lite_button_fw"].';';
				}
				if(isset($theme["lite_button_fst"])){
						echo 'font-style:'.$theme["lite_button_fst"].';';
				}
				if(isset($theme["lite_button_fc"])){
						echo 'color:'.$theme["lite_button_fc"].';';
				}
				if(isset($theme["lite_button_w"])){
						echo 'width:'.$theme["lite_button_w"].'px;';
				}
				if(isset($theme["lite_button_h"])){
						echo 'height:'.$theme["lite_button_h"].'px;';
				}
				if(isset($theme["lite_button_bc"])){
						echo 'background-color:'.$theme["lite_button_bc"].';';
				}
				else{ ?>
	background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
	background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
	background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
	background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
	background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
	<?php }
				if(isset($theme["lite_button_br"])){
						echo 'border-radius:'.$theme["lite_button_br"].'px;';
				}
				if(isset($theme["lite_button_bor"]) && isset($theme["lite_button_borc"])){
						echo ' border:'.$theme["lite_button_bor"].'px solid '.$theme["lite_button_borc"].';';
				}
			?>
}
#wpmchimpa .wpmchimpa-subs-button::before{
	content: '<?php if(isset($theme['lite_button'])) echo $theme['lite_button'];else echo 'Subscribe';?>';
	display: block;
	position: relative;
	line-height: 45px;
	<?php if(isset($theme["lite_button_h"])){
			echo 'line-height:'.$theme["lite_button_h"].'px;';
	} ?>
}
#wpmchimpa .wpmchimpa-subs-button:hover {
		border:none;
		box-shadow:none;
		background:#8BD331;
	color:#fff;
		<?php 
				if(isset($theme["lite_button_bch"])){
						echo 'background-color:'.$theme["lite_button_bch"].';';
				}
				else { ?>
		background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
	background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
	background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
	background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
	background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
			 <?php }
				if(isset($theme["lite_button_fch"])){
						echo 'color:'.$theme["lite_button_fch"].';';
				}
				if(isset($theme["lite_button_bor"]) && isset($theme["lite_button_borc"])){
						echo ' border:'.$theme["lite_button_bor"].'px solid '.$theme["lite_button_borc"].';';
				}
			?>
}
#wpmchimpa .wpmchimpa-subs-button.subsicon:before{
padding-left: 45px;
	<?php 
	if(isset($theme["lite_button_w"])){
			echo 'padding-left:'.$theme["lite_button_h"].'px;';
	}
	?>
}
#wpmchimpa .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
	<?php 
	if(isset($theme["lite_button_h"])){
			echo 'width:'.$theme["lite_button_h"].'px;';
			echo 'height:'.$theme["lite_button_h"].'px;';
	}
	if($theme["lite_button_i"] != 'inone' && $theme["lite_button_i"] != 'idef'){
		$col = ((isset($theme["lite_button_fc"]))? $theme["lite_button_fc"] : '#fff');
		 echo 'background: '.$this->getIcon($theme["lite_button_i"],25,$col).' no-repeat center;';
	}
	?>
}
#wpmchimpa .wpmchimpa-feedback {
margin: -40px 0 22px;
		color: #fff;
height: 18px;
		 <?php
				if(isset($theme["lite_status_f"])){
					echo 'font-family:'.$theme["lite_status_f"].';';
				}
				if(isset($theme["lite_status_fs"])){
						echo 'font-size:'.$theme["lite_status_fs"].'px;';
				}
				if(isset($theme["lite_status_fw"])){
						echo 'font-weight:'.$theme["lite_status_fw"].';';
				}
				if(isset($theme["lite_status_fst"])){
						echo 'font-style:'.$theme["lite_status_fst"].';';
				}
				if(isset($theme["lite_status_fc"])){
						echo 'color:'.$theme["lite_status_fc"].';';
				}
			?>
}

#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done{
margin: 40px;height: auto;
}

.wpmchimpa-overlay-bg .wpmchimpa-close-button {
display: inline-block;
	width: 2em;
	height: 2em;
	border: 0.1em solid #7e7e7e;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-msborder-radius: 50%;
	-o-border-radius: 50%;
	border-radius: 50%;
	background-color: #7e7e7e;
	top: 2em;
	right:2em;
	 -moz-transform: rotate(45deg); 
	 -o-transform: rotate(45deg);
	 -ms-transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
		transition: all 0.5s ease;
		position: absolute;
		z-index:9999;
}


.wpmchimpa-overlay-bg .wpmchimpa-close-button::before {
		content: "";
		display: block;
		position: absolute;
		background-color: #000;
		width: 80%;
		height: 6%;;
		left: 10%;
		top: 47%;
	}

	.wpmchimpa-overlay-bg .wpmchimpa-close-button::after {
		content: "";
		display: block;
		position: absolute;
		background-color: #000;
		width: 6%;
		height: 80%;
		left: 47%;
		top: 10%;
	}
	.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover {
		background-color: #fff; 
		-ms-transform: rotate(225deg);
		-webkit-transform: rotate(225deg);
		-moz-transform: rotate(225deg); 
		-o-transform: rotate(225deg); 
		transform: rotate(225deg); 
	} 

.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover::after {
			background-color: #7e7e7e;
		}
.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover::before {
			background-color: #7e7e7e;
		}
#wpmchimpa-main .wpmchimpa-signalc {
height: 40px;
	margin: 10px;
	text-align: center;
}
#wpmchimpa-main .wpmchimpa-signal {
display: none;
}
.wpmchimpa-overlay-bg.signalshow #wpmchimpa-main .wpmchimpa-signal {
	display: inline-block;
}
.wpmchimpa-overlay-bg .wpmchimpa-footer{
	color: #3c3c3c;
	position: absolute;
	bottom: 15px;
	width: 100%;
	text-align: center;
	text-decoration: none;
}
.wpmchimpa-overlay-bg .wpmchimpa-footer a{
	text-decoration: none;
	 color: #3c3c3c;
	 font-family: 'Sacramento', cursive;
	 font-size: 24px;
}
.wpmchimpa-overlay-bg .wpmchimpa-tag,
.wpmchimpa-overlay-bg .wpmchimpa-tag *{
color:#fff;
font-size: 10px;
<?php
				if(isset($theme["lite_tag_f"])){
					echo 'font-family:'.$theme["lite_tag_f"].';';
				}
				if(isset($theme["lite_tag_fs"])){
						echo 'font-size:'.$theme["lite_tag_fs"].'px;';
				}
				if(isset($theme["lite_tag_fw"])){
						echo 'font-weight:'.$theme["lite_tag_fw"].';';
				}
				if(isset($theme["lite_tag_fst"])){
						echo 'font-style:'.$theme["lite_tag_fst"].';';
				}
				if(isset($theme["lite_tag_fc"])){
						echo 'color:'.$theme["lite_tag_fc"].';';
				}
			?>
}
.wpmchimpa-overlay-bg .wpmchimpa-tag:before{

	 content:<?php
				$tfs=10;
				if(isset($theme["lite_tag_fs"])){$tfs=$theme["lite_tag_fs"];}
				$tfc='#fff';
				if(isset($theme["lite_tag_fc"])){$tfc=$theme["lite_tag_fc"];}
				echo $this->getIcon('lock1',$tfs,$tfc);?>;
	 margin: 5px;
	 top: 1px;
	 position:relative;
}

@media only screen and (max-width:1024px) {

    .wpmchimpa-overlay-bg .wpmchimpa-wrapper {
        width:92%;
    }
}

@media only screen and (max-width:769px) {

    .wpmchimpa-overlay-bg #wpmchimpa-newsletterform #wpmchimpa {
        padding: 40px 25px;
    }

    #wpmchimpa .wpmchimpa-field {
        width:100%;
        margin-bottom:7px;
    }

    .wpmchimpa-overlay-bg #wpmchimpa .wpmchimpa-subs-button {
        width:100%;
    }
	.wpmchimpa-overlay-bg #wpmchimpa h3 {
        width: 100%;
    }
}

@media only screen and (max-width:600px) {

    .wpmchimpa-overlay-bg #wpmchimpa h3 {
		margin: 0;
		font-size: 16px;
		padding-bottom: 5px;
    }
    .wpmchimpa-overlay-bg #wpmchimpa .wpmchimpa_para{
      line-height: 15px;
	margin: 0;
	font-size: 11px;
	padding-bottom: 5px;
    }
    #wpmchimpa input{
      height:20px;
    }
    #wpmchimpa input[type='text'], #wpmchimpa input[type='text']+.inputlabel{
		font-size: 12px;
  height: 35px;
  line-height: 35px;
   	}
    #wpmchimpa .wpmchimpa-subs-button{
      height:34px;
      font-size: 15px
    }
    #wpmchimpa .wpmchimpa-subs-button:before{
      line-height: 34px;
    }
    #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label {
    	font-size:12px;
    }
    #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:before, #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:after{
    	width:15px;
    	height:15px;
    }
    #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:hover:after, #wpmchimpa input[type='checkbox']:checked + label:after{
    	font-size: 12px;
    }
    .wpmchimpa-overlay-bg .wpmchimpa-close-button {
      top:1em;
      right:1em;
    }
}
@media only screen and (max-width:420px) {
    .wpmchimpa-overlay-bg .wpmchimpa-close-button {
      position: relative;
		display: block;
		left: 45%;
    }
}
@media only screen 
and (max-width : 650px)
and (orientation : landscape) {
.wpmchimpa-overlay-bg #wpmchimpa-main{
  -webkit-transform:scale(0.75) translate(-50%, -50%);
  -moz-transform:scale(0.75) translate(-50%, -50%);
  -ms-transform:scale(0.75) translate(-50%, -50%);
  -o-transform:scale(0.75) translate(-50%, -50%);
  transform:scale(0.75) translate(-50%, -50%); 
   -webkit-transform-origin:top left;
  -moz-transform-origin:top left;
  -ms-transform-origin:top left;
  -o-transform-origin:top left;
  transform-origin:top left;
}
}
<?php $this->liteanimate();?>

</style>
<div class="wpmchimpa-reset wpmchimpa-overlay-bg chimpmatecss wpmchimpselector">
	<div class="wpmchimpa-maina <?php echo (isset($wpmchimpa['lite_behave_anim'])?$wpmchimpa['lite_behave_anim'].' animated':'');?>" <?php echo (isset($wpmchimpa['lite_behave_animo'])?'wpmcexitanim':'');?>>
		<div id="wpmchimpa-main">
			<div class="wpmchimpa-wrapper <?php echo (isset($wpmchimpa['lite_behave_anim'])?$wpmchimpa['lite_behave_anim'].' animated':'');?>" <?php echo (isset($wpmchimpa['lite_behave_animo'])?'wpmcexitanim':'');?>>
				<div id="wpmchimpa-newsletterform">
					<div class="wpmchimpa" id="wpmchimpa">
						<?php if(isset($theme['lite_heading'])) echo '<h3>'.$theme['lite_heading'].'</h3>';?>
						<?php if(isset($theme['lite_msg'])) echo '<div class="wpmchimpa_para">'.$theme['lite_msg'].'</div>';?>
						<form action="" method="post" class="wpmchimpa-mainc">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
	'icon' => false,
	'type' => 1
	);
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
								<div class="wpmchimpa-subs-button<?php echo (isset($theme['lite_button_i']) && $theme['lite_button_i'] != 'inone' && $theme['lite_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
								<?php if(isset($theme['lite_tag_en'])){
									if(isset($theme['lite_tag'])) $tagtxt= $theme['lite_tag'];
									else $tagtxt='Secure and Spam free...';
									echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
									}?>
						<div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
		echo $this->getSpin(isset($theme["lite_spinner_t"])?$theme["lite_spinner_t"]:'1','wpmchimpa-main',isset($theme["lite_spinner_c"])?$theme["lite_spinner_c"]:'#fff');?></div></div>
							</form>
						<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
				</div>
		</div>
	</div>
</div>
<div class="wpmchimpa-close-button"></div>

</div>
</div>