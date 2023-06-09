<style type="text/css">

#wpmchimpas {
width: 500px;
height: 718px;
display: block;
background-color: {{data.theme.s8.slider_canvas_c||'#333'}};
position: relative;
}
#wpmchimpas .wpmchimpas-inner{
top: 50%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%);
position: absolute;
text-align: center;
margin:0 50px;
background:  {{data.theme.s8.slider_bg_c||'#262E43'}} no-repeat;
background-size: contain;
-webkit-border-radius:1px;
-moz-border-radius:1px;
border-radius:1px;
}
#wpmchimpas h3{
padding-top:20px;
color: #fff;
color: {{data.theme.s8.slider_heading_fc||'#fff'}};
font-size: {{data.theme.s8.slider_heading_fs||'20'}}px;
line-height: {{data.theme.s8.slider_heading_fs||'20'}}px;
font-weight: {{data.theme.s8.slider_heading_fw}};
font-family: {{data.theme.s8.slider_heading_f | livepf}};
font-style: {{data.theme.s8.slider_heading_fst}};
}
#wpmchimpas .slider_msg, #wpmchimpas .slider_msg *{
color: #ADBBE0;
font-size: {{data.theme.s8.slider_msg_fs||'12'}}px;
font-family: {{data.theme.s8.slider_msg_f | livepf}};
}
#wpmchimpas .slider_msg{
  margin: 15px 30px 0;
}
#wpmchimpas .wpmchimpas{
margin-top: 20px;
}
.wpmchimpas .wpmchimpa_formbox{
margin: 0 auto;
width: calc(100% - 50px);
}
.wpmchimpas .wpmchimpa_formbox > div{
position: relative;
}
#wpmchimpas .slider_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
 padding: 0 10px;
border-radius: 3px;
outline:0;
display: block;
color: {{data.theme.s8.slider_tbox_fc||'#353535'}};
font-size: {{data.theme.s8.slider_tbox_fs||'17'}}px;
font-weight: {{data.theme.s8.slider_tbox_fw}};
font-family: {{data.theme.s8.slider_tbox_f | livepf}};
font-style: {{data.theme.s8.slider_tbox_fst}};
background-color: {{data.theme.s8.slider_tbox_bgc||'#fff'}};
width: {{data.theme.s8.slider_tbox_w}}px;
height: {{data.theme.s8.slider_tbox_h||'40'}}px;
line-height: {{data.theme.s8.slider_tbox_h||'40'}}px;
border: {{data.theme.s8.slider_tbox_bor||'1'}}px solid {{data.theme.s8.slider_tbox_borc||'#efefef'}};
}
#wpmchimpas .wpmchimpa-groups{
display: block;
  margin:15px auto;
}
#wpmchimpas .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpas .slider_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
}
#wpmchimpas .slider_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;

-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
border:1px solid {{data.theme.s8.slider_check_borc}};
background-color: {{data.theme.s8.slider_check_c||'#fff'}};
}
#wpmchimpas .slider_check .ctext{
color: {{data.theme.s8.slider_check_fc||'#fff'}};
font-size: {{data.theme.s8.slider_check_fs||'12'}}px;
font-weight: {{data.theme.s8.slider_check_fw}};
font-family: {{data.theme.s8.slider_check_f | livepf}};
font-style: {{data.theme.s8.slider_check_fst}};
}
#wpmchimpas .slider_check .cbox.checked:after,#wpmchimpas .slider_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.s8.slider_check_mark||'ch2',8,data.theme.s8.slider_check_ic||'#000')}};
}
#wpmchimpas .slider_check:hover .cbox:after{
opacity: 0.5;
}
#wpmchimpas .slider_button{
border-radius: 3px;
width: 100%;
text-align: center;
cursor: pointer;
color: {{data.theme.s8.slider_button_fc||'#fff'}};
font-size: {{data.theme.s8.slider_button_fs || "17"}}px;
font-weight: {{data.theme.s8.slider_button_fw}};
font-family: {{data.theme.s8.slider_button_f | livepf}};
font-style: {{data.theme.s8.slider_button_fst}};
background-color:{{data.theme.s8.slider_button_bc||'#73C557'}};
width: {{data.theme.s8.slider_button_w}}px;
height: {{data.theme.s8.slider_button_h||'42'}}px;
line-height: {{data.theme.s8.slider_button_h||'42'}}px;
-webkit-border-radius: {{data.theme.s8.slider_button_br||'3'}}px;
-moz-border-radius: {{data.theme.s8.slider_button_br||'3'}}px;
border-radius: {{data.theme.s8.slider_button_br||'3'}}px;
border: {{data.theme.s8.slider_button_bor||'1'}}px solid {{data.theme.s8.slider_button_borc||'#50B059'}};
}
#wpmchimpas .slider_button:hover{
color: {{data.theme.s8.slider_button_fch}};
background-color: {{data.theme.s8.slider_button_bch||'#50B059'}};
}
#wpmchimpas .slider_button+div{
position: absolute;
top: 0;
right: 0;
}
.slider_spinner {
top: 0;
right: 0;
margin: 6px 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
#wpmchimpas .wpmchimpa-socialc{
overflow: hidden;
}
#wpmchimpas .wpmchimpa-social{
display: inline-block;
margin: 12px auto 0;
height: 90px;
width: 100%;
background: rgba(75, 75, 75, 0.3);
box-shadow: 0px 1px 1px 1px rgba(116, 116, 116, 0.94);
}
#wpmchimpas .wpmchimpa-social::before{
content:"{{data.theme.s8.slider_soc_head||'Subscribe with'}}";
width: 100%;
display: block;
margin: 15px auto 5px;
color: {{data.theme.s8.slider_soc_fc||'#ADACB2'}};
font-size: {{data.theme.s8.slider_soc_fs||'13'}}px;
line-height: {{data.theme.s8.slider_soc_fs||'13'}}px;
font-weight: {{data.theme.s8.slider_soc_fw}};
font-family: {{(data.theme.s8.slider_soc_f | livepf)}};
font-style: {{data.theme.s8.slider_soc_fst}};
}

#wpmchimpas .wpmchimpa-social .wpmchimpa-soc{
display: inline-block;
width:40px;
height: 40px;
border-radius: 2px;
cursor: pointer;
border:1px solid {{data.theme.s8.slider_bg_c || '#262E43'}};
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:40px;
height: 40px;
background: no-repeat center;
}

#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',20,'#fff')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image: {{getIcon('fb1',20,'#2d609b')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',20,'#fff')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: {{getIcon('gp1',20,'#eb4026')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',20,'#fff')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: {{getIcon('ms1',20,'#00BCF2')}}
}

#slider_tag{
text-align: center;
margin: 5px auto;
display: {{data.theme.s8.slider_tag_en? 'block':'none'}};
}
#slider_tag,
#slider_tag *{
pointer-events: none;
color: {{data.theme.s8.slider_tag_fc||'#68728D'}};
font-size: {{data.theme.s8.slider_tag_fs||'10'}}px;
font-weight: {{data.theme.s8.slider_tag_fw}};
font-family:Arial;
font-family: {{data.theme.s8.slider_tag_f | livepf}};
font-style: {{data.theme.s8.slider_tag_fst}};
}
#slider_tag:before{
content:{{getIcon('lock1',data.theme.s8.slider_tag_fs||10,data.theme.s8.slider_tag_fc||'#68728D')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpas-over{
background: rgba(0, 0, 0, 0.4);
height: 100%;
width: 100%;
position: absolute;
display: block;
}
#wpmchimpas-trig{
width: 50px;
height: 50px;
position: absolute;
display: block;
left: 500px;
margin: 0 3px;
top:{{data.theme.s8.slider_trigger_top ||'50'}}%;
background: {{data.theme.s8.slider_trigger_bg || '#262E43'}};
}
#wpmchimpas-trig:before{ 
content:{{getIcon('b05',32,data.theme.s8.slider_trigger_c||'#fff')}};
height: 32px;
width: 32px;
display: block;
margin: 8px;
}
#wpmchimpas .wpmchimpas-inner.wosoc .wpmchimpa-social {
display: none;
}
#wpmchimpas .wpmchimpas-inner.woleft{
padding-top: 40px;
background-image: none;
}
</style>
<div id="wpmchimpas-over"></div>
<div id="wpmchimpas-trig">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="6" data-lhint="Go to Trigger Options" style="top:0;right:0;margin:-10px">7</div>
</div>
<div id="wpmchimpas" class="{{data.theme.s8.slider_bg_p}}">
<div class="wpmchimpas-inner" ng-class="{'wosoc':data.theme.s8.slider_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="9" data-lhint="Go to Additional Theme Options" style="margin:-15px">8</div>
        <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <h3>{{data.theme.s8.slider_heading}}</h3>
            <div class="slider_msg"><p ng-bind-html="data.theme.s8.slider_msg | safe"></p></div>
        </div>
        <div class="wpmchimpas">
                      <div class="wpmchimpa_formbox">

            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;  top: 38px;">2</div>
              <div class="slider_tbox">Name</div>
              <div class="slider_tbox">Email address</div>
            </div>
            <div><div class="wpmc-live-sc righthov righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
              <div class="slider_button">{{data.theme.s8.slider_button}}</div>
               <div>
	              <div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;top:25px;">5</div>
	              <div class="slider_spinner" ng-bind-html="getSpin(data.theme.s8.slider_spinner_t||'3','wpmchimpas',data.theme.s8.slider_spinner_c||'#000')"></div>
	            </div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Checkbox Settings" style="left:20px;">3</div>
              <div class="wpmchimpa-groups">
                <div class="slider_check_c"></div>
                <div class="wpmchimpa-item">
                    <div class="slider_check">
                      <div class="cbox"></div>
                      <div class="ctext">group1</div>
                    </div>
                </div>
                <div class="wpmchimpa-item">
                    <div class="slider_check">
                      <div class="cbox checked"></div>
                      <div class="ctext">group2</div>
                    </div>
                </div>
              </div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Tag Settings" style="left:20px;">6</div>
          <div id="slider_tag" ng-bind-html="data.theme.s8.slider_tag||'Secure and Spam free...' | safe"></div></div>
          </div>
            <div class="wpmchimpa-socialc">
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
            </div>
           
  </div>
</div>
</div>