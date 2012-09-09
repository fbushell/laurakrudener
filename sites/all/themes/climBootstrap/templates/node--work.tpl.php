<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

  	<div class="content">
      <?php 

      global $base_url;

      // Init
      $html = '';
      $add_images_final = '';


      $node = node_load($node->nid); 
      $node_build = node_build_content($node);

      $title = $node->title;
      $title_final = "<h3>$title</h3>";
      $body = $node->body['und'][0]['value'];
      $height = $node->field_height['und'][0]['value'];
      $width = $node->field_width['und'][0]['value'];
      $dimensions = "<p><div id=\"dimensions\">$width X $height</div><p>";

      //$img = drupal_render($node->content['field_main_image']);
      $img_field = $node->field_main_image['und'][0]['filename'];
      $img_path = $base_url . '/sites/default/files/files/paintings/' . $img_field;
      $img_final = "
        <div class=\"img-wrap\">
          <a href=\"$img_path\" class=\"zoom\"><img src=\"$img_path\" /></a>
        </div>
      ";

      //$add_images = drupal_render($node->content['field_add_images']);
      $alt_img_field = $node->field_add_images['und'];

      foreach ($alt_img_field as $key) {
        
        $alt_img_path = $base_url . '/sites/default/files/files/paintings/' . $key['filename'];

        $add_images_final .= "
          <div class=\"img-wrap\">
            <a href=\"$alt_img_path\" class=\"zoom\" ><img src=\"$alt_img_path\" /></a>
          </div>
        ";

      }
      
      //dpr($alt_img_path);

      $html = $title_final . $body . $dimensions . $img_final . $add_images_final;

      print $html;

      ?>
  	  <?php //print render($content); ?>
  	</div>
        
	</div> <!-- /node-inner -->
</article> <!-- /node-->
