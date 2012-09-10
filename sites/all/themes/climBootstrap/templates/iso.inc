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

	// Loop works
	foreach ($works as $work)	{
		
		node_build_content($work);

		$work_nid = $work->nid;
		$work_title = $work->title;
		$type_field = $work->field_work_type['und'][0]['value'];
		$type = $type_field ? 'painting' : 'drawing';
		$img = drupal_render($work->content['field_main_image']);

		// Build item with <a> wrapper
		$options = array(
			'html' => TRUE,
			'attributes' => array(
				'class' => array($type, 'span4 iso-item'),
			),
		);
		
		//build html for work item
		$work_item = "
			<div class=\"$type work-item\">$img</div>
		";
		

		$item = l($work_item, 'node/'. $work_nid, $options);


		print $item; 
		
	} // end foreach
		
?>

</div></div><!-- end #iso-container -->


