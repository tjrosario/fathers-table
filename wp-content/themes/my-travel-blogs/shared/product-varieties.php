<?php
	$varieties = get_field('variety');

	if ($varieties) {
		for ($i=0; $i < sizeof($varieties); $i++) {
			 $varieties[$i]['id'] = uniqid();
			 $item = $varieties[$i]['image'];
			 $item['variety_id'] = $varieties[$i]['id'];
		}
	}
?>