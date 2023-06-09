<style type="text/css">

#wpmchimpaw {
width: 300px;
display: block;
left: 624px;
text-align: center;
top: 95px;
background: {{data.theme.w8.widget_bg_c||'#262E43'}};
position: relative;
}
#wpmchimpaw h3{
padding-top:20px;
color: {{data.theme.w8.widget_heading_fc||'#fff'}};
font-size: {{data.theme.w8.widget_heading_fs||'20'}}px;
line-height: {{data.theme.w8.widget_heading_fs||'20'}}px;
font-weight: {{data.theme.w8.widget_heading_fw}};
font-family: {{data.theme.w8.widget_heading_f | livepf}};
font-style: {{data.theme.w8.widget_heading_fst}};
}
#wpmchimpaw .widget_msg, #wpmchimpaw .widget_msg *{
color: #ADBBE0;
font-size: {{data.theme.w8.widget_msg_fs||'12'}}px;
font-family: {{data.theme.w8.widget_msg_f | livepf}};
}
#wpmchimpaw .widget_msg{
    margin: 10px 10px 0;
  line-height: 14px;
}
#wpmchimpaw .wpmchimpa_form{
margin-top: 20px;
}
#wpmchimpaw .wpmchimpa_formbox{
margin: 0 auto;
width: calc(100% - 20px);
}
#wpmchimpaw .widget_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
 padding: 0 10px;
border-radius: 3px;
outline:0;
display: block;
color: {{data.theme.w8.widget_tbox_fc||'#353535'}};
font-size: {{data.theme.w8.widget_tbox_fs||'17'}}px;
font-weight: {{data.theme.w8.widget_tbox_fw}};
font-family: {{data.theme.w8.widget_tbox_f | livepf}};
font-style: {{data.theme.w8.widget_tbox_fst}};
background-color: {{data.theme.w8.widget_tbox_bgc||'#fff'}};
width: {{data.theme.w8.widget_tbox_w}}px;
height: {{data.theme.w8.widget_tbox_h||'35'}}px;
line-height: {{data.theme.w8.widget_tbox_h||'35'}}px;
border: {{data.theme.w8.widget_tbox_bor||'1'}}px solid {{data.theme.w8.widget_tbox_borc||'#efefef'}};
}
#wpmchimpaw .wpmchimpa-groups{
display: block;
  margin: 15px auto 5px;
}
#wpmchimpaw .wpmchimpa-item{
display:inline-block;
margin: 2px;
}
#wpmchimpaw .widget_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
min-width: 85px;
}
#wpmchimpaw .widget_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
top:3px;
text-align: center;
position: absolute;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
border:1px solid {{data.theme.w8.widget_check_borc}};
background-color: {{data.theme.w8.widget_check_c||'#fff'}};
}
#wpmchimpaw .widget_check .ctext{
color: {{data.theme.w8.widget_check_fc||'#fff'}};
font-size: {{data.theme.w8.widget_check_fs||'12'}}px;
font-weight: {{data.theme.w8.widget_check_fw}};
font-family: {{data.theme.w8.widget_check_f | livepf}};
font-style: {{data.theme.w8.widget_check_fst}};
}
#wpmchimpaw .widget_check .cbox.checked:after,#wpmchimpaw .widget_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.w8.widget_check_mark||'ch2',8,data.theme.w8.widget_check_ic||'#000')}};
}
#wpmchimpaw .widget_check:hover .cbox:after{
opacity: 0.5;
}
#wpmchimpaw .wpmchimpa_formbox > div{
  position: relative;
}
#wpmchimpaw .widget_button{
border-radius: 3px;
width: 100%;
text-align: center;
cursor: pointer;
color: {{data.theme.w8.widget_button_fc||'#fff'}};
font-size: {{data.theme.w8.widget_button_fs || "17"}}px;
font-weight: {{data.theme.w8.widget_button_fw}};
font-family: {{data.theme.w8.widget_button_f | livepf}};
font-style: {{data.theme.w8.widget_button_fst}};
background-color:{{data.theme.w8.widget_button_bc||'#73C557'}};
width: {{data.theme.w8.widget_button_w}}px;
height: {{data.theme.w8.widget_button_h||'36'}}px;
line-height: {{data.theme.w8.widget_button_h||'36'}}px;
-webkit-border-radius: {{data.theme.w8.widget_button_br||'3'}}px;
-moz-border-radius: {{data.theme.w8.widget_button_br||'3'}}px;
border-radius: {{data.theme.w8.widget_button_br||'3'}}px;
border: {{data.theme.w8.widget_button_bor||'1'}}px solid {{data.theme.w8.widget_button_borc||'#50B059'}};
}
#wpmchimpaw .widget_button:hover{
color: {{data.theme.w8.widget_button_fch}};
background-color: {{data.theme.w8.widget_button_bch||'#50B059'}};
}

#wpmchimpaw .widget_button+div{
position: absolute;
top: 0;
right: 0;
}
.widget_spinner {
top: 0;
right: 0;
margin: 4px 5px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
#wpmchimpaw .wpmchimpa-socialc{
overflow: hidden;
}
#wpmchimpaw .wpmchimpa-social{
display: inline-block;
margin: 12px auto 0;
height: 90px;
width: 100%;
background: rgba(75, 75, 75, 0.3);
box-shadow: 0px 1px 1px 1px rgba(116, 116, 116, 0.94);
}
#wpmchimpaw .wpmchimpa-social::before{
content:"{{data.theme.w8.widget_soc_head||'Subscribe with'}}";
width: 100%;
display: block;
margin: 15px auto 5px;
color: {{data.theme.w8.widget_soc_fc||'#ADACB2'}};
font-size: {{data.theme.w8.widget_soc_fs||'13'}}px;
line-height: {{data.theme.w8.widget_soc_fs||'13'}}px;
font-weight: {{data.theme.w8.widget_soc_fw}};
font-family: {{(data.theme.w8.widget_soc_f | livepf)}};
font-style: {{data.theme.w8.widget_soc_fst}};
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc{
display: inline-block;
width:40px;
height: 40px;
border-radius: 2px;
cursor: pointer;
border:1px solid {{data.theme.w8.widget_bg_c || '#262E43'}};
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:40px;
height: 40px;
background: no-repeat center;
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',20,'#fff')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image: {{getIcon('fb1',20,'#2d609b')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',20,'#fff')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: {{getIcon('gp1',20,'#eb4026')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',20,'#fff')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: {{getIcon('ms1',20,'#00BCF2')}}
}

#wpmchimpaw .wpmchimpa-tag{
margin: 5px auto;
display: {{data.theme.w8.widget_tag_en? 'block':'none'}};
}
#wpmchimpaw .wpmchimpa-tag,
#wpmchimpaw .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.w8.widget_tag_fc||'#68728D'}};
font-size: {{data.theme.w8.widget_tag_fs||'10'}}px;
font-weight: {{data.theme.w8.widget_tag_fw}};
font-family:Arial;
font-family: {{data.theme.w8.widget_tag_f | livepf}};
font-style: {{data.theme.w8.widget_tag_fst}};
}
#wpmchimpaw .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.w8.widget_tag_fs||10,data.theme.w8.widget_tag_fc||'#68728D')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpaw.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpaw" ng-class="{'wosoc':data.theme.w8.widget_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-25px">7</div>
        
        <div class="wpmchimpaw">
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <h3>{{data.theme.w8.widget_heading}}</h3>
            <div class="widget_msg"><p ng-bind-html="data.theme.w8.widget_msg | safe"></p></div>
            </div>
            <div class="wpmchimpa_form">
            <div class="wpmchimpa_formbox">
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
              <div class="widget_tbox">Name</div>
              <div class="widget_tbox">Email address</div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
              <div class="widget_button">{{data.theme.w8.widget_button}}</div>
              <div>
                <div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;top:25px">5</div>
                <div class="widget_spinner" ng-bind-html="getSpin(data.theme.w8.widget_spinner_t||'3','wpmchimpaw',data.theme.w8.widget_spinner_c||'#000')"></div>
              </div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Checkbox Settings">3</div>
              <div class="wpmchimpa-groups">
                <div class="widget_check_c"></div>
                <div class="wpmchimpa-item">
                    <div class="widget_check">
                      <div class="cbox"></div>
                      <div class="ctext">group1</div>
                    </div>
                </div>
                <div class="wpmchimpa-item">
                    <div class="widget_check">
                      <div class="cbox checked"></div>
                      <div class="ctext">group2</div>
                    </div>
                </div>
              </div>
            </div>
      <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.w8.widget_tag||'Secure and Spam free...' | safe"></div></div>
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
</div>
