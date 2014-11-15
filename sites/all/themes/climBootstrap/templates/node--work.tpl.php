<div class="info-toggle">
  <span class="more">More</span>
  <span class="less">Less</span>
</div>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

  	<div class="work-info">
      <?php 

	    // Get full url 
      global $base_url;      
      $alias = drupal_lookup_path('alias', 'node/' . $nid); 
	    $url = $base_url . '/' . $alias;

      // Init
      $html = '';
      $title = $node->title;
      $body = $node->body['und'][0]['value'];
      $img_field = $node->field_main_image['und'][0]['filename'];
      $img_path = $base_url . '/sites/default/files/files/paintings/' . $img_field;
      $uri = $node->field_main_image['und'][0]['uri'];
      
      // Print and theme images
      if ( isset( $node->field_height['und'][0]['value'] ) ) {
	      
	      $height = $node->field_height['und'][0]['value'];
	      $width = $node->field_width['und'][0]['value'];
	      $dimensions = "<p><div id=\"dimensions\">$width X $height</div><p>";
	      
      } else {
	      
	      $height = '';
	      $width = '';
	      $dimensions = '';
	      
      }
      
      $year = $node->field_work_year['und'][0]['value'];
      $add_images_final= '';
      
      // Create markup
      $work_info = "
      	<div class=\"main-info\">
      		<div class=\"work-title\"><h4>$title</h4></div> 
          <div class=\"year\">$year</div>
      		<div class=\"details\">$dimensions</div> 
      		<div>$body</div>
      	</div>
      	<div class=\"work-social hidden-phone\">
      		<div class=\"social-btn\">
						<a href=\"https://twitter.com/share\" 
							class=\"twitter-share-button\" 
							data-via=\"twitterapi\" 
							data-lang=\"en\">Tweet
						</a>
					</div>
		
					<div class=\"fb-like social-btn\"
						data-href=\"$url\" 
						data-send=\"false\" 
						data-layout=\"button_count\" 
						data-width=\"260\" 
						data-show-faces=\"false\" 
						data-font=\"arial\">
					</div>
						
					<div class=\"social-btn\">
						<a href=\"http://pinterest.com/pin/create/button/?url=$url&media=$img_path&description=$title\" 
						class=\"pin-it-button\" 
						count-layout=\"horizontal\">
							<img border=\"0\" src=\"//assets.pinterest.com/images/PinExt.png\" title=\"Pin It\" />
						</a>
					</div>
						
					</div>
      	</div>
      ";

       // Load image vars with image style
        $img_vars = array(
          'style_name' => 'work_med',
          'path' => $uri,
          'alt' => 'small',
          'title' => '',
          'width' => '',
          'height' => '',
        );
        
        // Theme image
        $img_styled =  theme_image_style($img_vars);

        // Load image vars with image style
        $img_vars_lrg = array(
          'style_name' => 'work_lrg',
          'path' => $uri,
          'alt' => 'large',
          'title' => '',
          'width' => '',
          'height' => '',
        );
        
        // Theme image
        $img_styled_lrg =  theme_image_style($img_vars_lrg);


      $img_final = "
        <input type=\"range\" />
        <div class=\"zoom\">
          $img_styled_lrg
        </div>
      ";



      // Loop through aditional images if they exist
      // if ( isset( $node->field_add_images['und'] ) ) {
	      
	     //  $alt_img_field = $node->field_add_images['und'];
	      
	     //  foreach ($alt_img_field as $key) {
        
      //   $alt_img_path = $base_url . '/sites/default/files/files/paintings/' . $key['filename'];

      //   $add_images_final .= "
      //     <div class=\"img-wrap\">
      //       <a href=\"$alt_img_path\" class=\"zoom\" ><img src=\"$alt_img_path\" /></a>
      //     </div>
      //   ";

      // }
	      
      // } else {
	      
	     //  $alt_img_field = '';
	      
	     //  $add_images_final = '';
	      
      // }

      
      // Final html output
      $html = $work_info . $img_final;

      print $html;

      ?>
      
  	</div>
        
	</div>
</div>
