<?php
/***************************************************************************/
/***************************************************************************/
/*
/* 	----------------------------------------------------------------------
/* 						DO NOT EDIT THIS FILE
/*	----------------------------------------------------------------------
/* 
/*  			Built by Chris Rodriguez. http://premiumwd.com
/*  				Copyright (C) 2012 Premiumwd
/*
/***************************************************************************/
/***************************************************************************/
?>

<div class="social_icons">

<?php if (get_option('premiumwd_share_google', 'true') == 'true') : ?> 
<div class="google">
<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="medium"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>
<?php endif; ?>
 
<?php if (get_option('premiumwd_share_fb', 'true') == 'true') : ?> 
<div class="facebook">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-send="false" data-layout="button_count" data-show-faces="false"></div>
</div>
<?php endif; ?>

<?php if (get_option('premiumwd_share_twitter', 'true') == 'true') : ?> 
<div class="twitter">
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<?php endif; ?>

<?php if (get_option('premiumwd_share_pinit', 'true') == 'true') : ?>
<div class="pininterest">
<script type="text/javascript">
(function() {
    window.PinIt = window.PinIt || { loaded:false };
    if (window.PinIt.loaded) return;
    window.PinIt.loaded = true;
    function async_load(){
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "http://assets.pinterest.com/js/pinit.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    }
    if (window.attachEvent)
        window.attachEvent("onload", async_load);
    else
        window.addEventListener("load", async_load, false);
})();
</script>
<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal">Pin It</a>
</div>
<?php endif; ?>

<?php if (get_option('premiumwd_share_digg', 'true') == 'true') : ?> 
<div class="digg">
<script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script>
<a class="DiggThisButton DiggCompact"></a>
</div>
<?php endif; ?>

<?php if (get_option('premiumwd_share_linkedin', 'true') == 'true') : ?> 
<div class="linkedin">
<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-counter="right"></script>
</div>
<?php endif; ?>

</div>