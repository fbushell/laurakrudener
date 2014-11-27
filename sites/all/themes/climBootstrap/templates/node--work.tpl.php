<div class="back-to-work">
  <span class="triangle"></span>
  <span>Work</span>
</div>

<div class="range-zoom">
<!--   <span class="circle"></span>
  <span>Zoom</span><br> -->
  <input type="range" />
</div>

<div class="info-toggle">
  <span class="toggle-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" data-ember-extension="1"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16z"/><head/></svg>
  </span>
  <span class="more">Information</span>
  <span class="less">Hide</span>
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
      		<div class=\"work-title\"><h3>$title</h3></div> 
          <div class=\"year\">$year</div>
      		<div class=\"details\">$dimensions</div> 
      		<div>$body</div>
      	</div>
      	<div class=\"work-social hidden-phone\">
          <a target=\"_blank\" href=\"https://twitter.com/home?status=$url\">Twitter</a>
          <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=$url\">Facebook</a>
          <a target=\"_blank\" href=\"https://pinterest.com/pin/create/button/?url=$url&media=$img_path&description=$title\">Pinterest</a>
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
