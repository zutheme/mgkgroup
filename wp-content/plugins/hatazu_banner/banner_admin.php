<div class="wrap">
	<h2>Setting option links</h2>
	<form class="form-banner" method="post" action="options.php">
	    <?php settings_fields( 'banner-settings-group' ); ?>
	    <?php do_settings_sections( 'banner-settings-group' ); ?>
	    <table class="form-table-banner" style="width: 100%">
	        <tr>
	        <td>
	        	<p>
	        		<label for="images_banner" class="prfx-row-title"><?php _e( 'option', 'prfx-textdomain' )?></label>
	        		<input type="text" name="option" value="<?php echo esc_attr( get_option('option') ); ?>" /></td>
	        	</p>
	        </tr>
	     	<tr><td>
	    		<p>	<label>1920 × 460</label></p>
	    		<p>
			        <label for="images_banner" class="prfx-row-title"><?php _e( 'File Upload', 'prfx-textdomain' )?></label>
			        <input class="images_banner form-control int-pop1" type="text" name="images_banner1" value="<?php echo esc_attr( get_option('images_banner1') ); ?>" />
			        <input type="button" name="images_banner-button" class="button images_banner-button b1" value="<?php _e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />
			    </p>
			    <p><label for="images_banner" class="prfx-row-title"><?php _e( 'link', 'prfx-textdomain' )?></label>
			        <input class="link_images_banner1 form-control" type="text" name="link_images_banner1" value="<?php echo esc_attr( get_option('link_images_banner1') ); ?>" /></p>
	    		
	    		<p><img class="img_set img1" style="max-height: 100px; min-width: auto" src="<?php echo esc_attr( get_option('images_banner1') ); ?>"></p>
	    		</td>
	    	</tr>
	    	<tr><td>
	    		<p> <label>1920 × 460</label></p>
	    		<p>
			        <label for="images_banner" class="prfx-row-title"><?php _e( 'File Upload', 'prfx-textdomain' )?></label>
			        <input class="images_banner form-control int-pop2" type="text" name="images_banner2" value="<?php echo esc_attr( get_option('images_banner2') ); ?>" />
			        <input type="button" name="images_banner-button" class="button images_banner-button b2" value="<?php _e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />
			    </p>
			    <p><label for="images_banner" class="prfx-row-title"><?php _e( 'link', 'prfx-textdomain' )?></label>
			        <input class="link_images_banner2 form-control" type="text" name="link_images_banner2" value="<?php echo esc_attr( get_option('link_images_banner2') ); ?>" /></p>
	    		
	    		<p><img class="img_set img2" style="max-height: 100px; min-width: auto" src="<?php echo esc_attr( get_option('images_banner2') ); ?>"></p>
	    		</td>
	    	</tr>
	    </table>
	    <?php submit_button(); ?>
	</form>
	</div>