<?php

  $home_query_string = "
    SELECT entity_id, body_value
    FROM field_data_body
    WHERE entity_id = 9
  ";

  $home_query = db_query( $home_query_string );
  $home_node = $home_query->fetchAll();
  $node_about = node_load(9);
  $title = $node_about->title;
  $body = $node_about->body['und'][0]['value'];
  $body_txt = "<div class=\"about-body\">$body</div>";
  $cv = $node_about->field_cv['und'][0]['value'];
  $cv_txt = "<div class=\"cv-text\">$cv</div>";

  $img_styled = '';
	$img_uri = $node_about->field_basic_image['und'][0]['uri'];
	  
  // Load image vars
  $img_vars = array(
  	'style_name' => 'original_scaled',
  	'path' => $img_uri,
  	'alt' => '',
  	'title' => '',
  	'width' => '',
  	'height' => '',
  );
  
  // Theme/style image
  $img_styled =  theme_image_style($img_vars);

	$info = "
		<header class=\"about-header\">$title</header>
		<section class=\"pic left half\">
			$img_styled
			$body_txt
		</section>

		<section class=\"pic right half\">
			$cv_txt
		</section>
	";

	//dprint_r($node_about);

	print $info;