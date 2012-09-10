<?php

	// Load blog nids
	$blog_query = new EntityFieldQuery();
	
	$blog_query
		->entityCondition('entity_type', 'node', '=')
		->propertyCondition('type', 'blog', '=')
		->propertyOrderBy('created', 'DESC');

	//$blog_query->range(0, 2);
		
	$blog_result = $blog_query->execute();
	
	// Load blog nodes
	$blogs = array();
	foreach($blog_result['node'] as $nid => $node) {
		$blogs[$node->nid] = node_load($nid);
	}


?>
	
<div id="iso-container">
	<div class="row">

	<?php 

		// Loop works
		foreach ($blogs as $item)	{
			
			node_build_content($item);

			$title = $item->title;
			$created = date("M j Y", $item->created);
			$body = $item->body['und'][0]['safe_value'];
			$img = drupal_render($item->content['field_blog_images']);
						

			$item = "
				<div class=\"span8 offset2 blog-iso-item\">
					<h3>$title</h3>
					<div class=\"created\">Posted $created</div>
					<div class=\"blog_images\">$img</div>
					<div class=\"item-body\">$body</div>
				
					<div>
						<a href=\"https://twitter.com/share\" 
							class=\"twitter-share-button\" 
							data-via=\"twitterapi\" 
							data-lang=\"en\">Tweet
						</a>
		
						<div class=\"fb-like\"
							data-href=\"http://dev.loc/node/{$item->nid}\" 
							data-send=\"false\" 
							data-layout=\"button_count\" 
							data-width=\"450\" 
							data-show-faces=\"false\" 
							data-font=\"arial\">
						</div>

					</div>
				</div>
			";

			print $item; 
			
		} // end foreach
		

	?>

	</div>
</div>



