<?php

function show_filter_buttons($array) {

	// First, iterate through $video_card_array to obtain array of unique categories

	$categories_array = [];

	foreach ($array as $key => $value) {
		
		//push categories to array
		array_push($categories_array, $value['category']);

		//remove duplicates
		$categories_array = array_unique($categories_array);

	} ?>

	<div class="filter-buttons"> <?

	//iterate through $categories_array to print toggle buttons

	foreach ($categories_array as $key => $value) { ?>
		<div id="<? echo $value ?>-btn" class="bubble-button"><? echo str_replace("-", " ", $value); ?></div>
	<? }

	?>
	</div>
	<br>
<?}