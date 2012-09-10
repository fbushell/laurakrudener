<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

  	<div class="content">
      <?php 

      global $base_url;

      //$node = node_load($node->nid); 
      //$node_build = node_build_content($node);

      // Init
      $html = '';
      $title = $node->title;
      $body = $node->body['und'][0]['value'];
      
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
      
      $work_info = "
      	<div class=\"work-info\">
      		<div class=\"work-title\"><h3>$title, $year</h3></div> 
      		<div class=\"details\"$dimensions</div> 
      		<div>$body</div>
      	</div>
      ";

      $img_field = $node->field_main_image['und'][0]['filename'];
      $img_path = $base_url . '/sites/default/files/files/paintings/' . $img_field;
      $img_final = "
        <div class=\"img-wrap\">
          <a href=\"$img_path\" class=\"zoom\"><img src=\"$img_path\" /></a>
        </div>
      ";


      // Loop through aditional images if they exist
      if ( isset( $node->field_add_images['und'] ) ) {
	      
	      $alt_img_field = $node->field_add_images['und'];
	      
	      foreach ($alt_img_field as $key) {
        
        $alt_img_path = $base_url . '/sites/default/files/files/paintings/' . $key['filename'];

        $add_images_final .= "
          <div class=\"img-wrap\">
            <a href=\"$alt_img_path\" class=\"zoom\" ><img src=\"$alt_img_path\" /></a>
          </div>
        ";

      }
	      
      } else {
	      
	      $alt_img_field = '';
	      
	      $add_images_final = '';
	      
      }

      
      // Final html output
      $html = $work_info . $img_final . $add_images_final;

      print $html;

      ?>
      
  	</div>
        
	</div>
</article>
