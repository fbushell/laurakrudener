<?php

	// Query for work nodes
	$work_query = new EntityFieldQuery();
	$work_query->EntityCondition('entity_type', 'node')
						 ->EntityCondition('bundle', 'work', '=')
						 ->propertyOrderBy('created', 'DESC');
						 
	$work_results = $work_query->execute();

	// Load work nodes into works array
	$works = array();
	foreach($work_results['node'] as $nid => $node) {
		$works[$node->nid] = node_load($nid);
	}

?>


<div id="iso-container">
	<div class="row-fluid">
	
	<?php 
	
	// Init
	$type_field = '';
	$type = '';

	// Loop works
	foreach ($works as $work)	{
		
		node_build_content($work);
		

		$work_nid = $work->nid;
		$work_title = $work->title;
		$type_field = $work->field_work_type['und'][0]['value'];

		// Switch on the type field		
		switch ($type_field) {
	    case 'painting':
	        $type = 'painting';
	        break;
	    case 'drawing':
	        $type = 'drawing';
	        break;
	    case 'interior':
	        $type = 'interior';
	        break;
	  }
	  
	  $img_styled = '';
	  
				// image info
				$img_width = $work->field_main_image['und'][0]['width'];
				$img_height = $work->field_main_image['und'][0]['height'];
				$img_uri = $work->field_main_image['und'][0]['uri'];
			  
			  // Load image vars
			  $img_vars = array(
			  	'style_name' => 'isotope',
			  	'path' => $img_uri,
			  	'alt' => '',
			  	'title' => '',
			  	'width' => $img_width,
			  	'height' => $img_height,
			  );
			  
			  // Theme/style image
			  $img_styled =  theme_image_style($img_vars);

		// Build item with <a> wrapper
		$options = array(
			'html' => TRUE,
			'attributes' => array(
				'class' => array($type, 'span4 iso-item'),
			),
		);
		
		//build html for work item
		$work_item = "
			<div class=\"$type work-item\">$img_styled</div>
		";
		

		$item = l($work_item, 'node/'. $work_nid, $options);


		print $item; 
		
		//dsm($item);
		
	} // end foreach
		
?>

</div></div><!-- end #iso-container -->


