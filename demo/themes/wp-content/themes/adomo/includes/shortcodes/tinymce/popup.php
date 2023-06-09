<?php

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new premium_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="premium-popup">

	<div id="premium-shortcode-wrap">
		
		<div id="premium-sc-form-wrap">
		
			<div id="premium-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#premium-sc-form-head -->
			
			<form method="post" id="premium-sc-form">
 						
				<table id="premium-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
								
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><a href="#" class="button-primary premium-insert">Insert Shortcode</a></td>							
						</tr>
						
					</tbody>
				
				</table>
				<!-- /#premium-sc-form-table -->
				
			</form>
			<!-- /#premium-sc-form -->
		
		</div>
		<!-- /#premium-sc-form-wrap -->
		
		<div class="clear"></div>
		
	</div>
	<!-- /#premium-shortcode-wrap -->

</div>
<!-- /#premium-popup -->

</body>
</html>