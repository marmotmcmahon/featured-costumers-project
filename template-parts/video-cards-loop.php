<?php

function video_cards_title($input) {
	echo "<h1 class='title-center'>$input</h1>";
}

function video_cards_loop($array) {
	$i = 0;
	?> <ul class='cards'> <?
	while ($i <= count($array) - 1) {

	//Obtain video ID by stripping prefix from video URL
		$youtube_id = str_replace("https://www.youtube.com/watch?v=", "", $array[$i]['url']);
		$thumbnail = "https://img.youtube.com/vi/" . $youtube_id . "/0.jpg"; ?>
		
		<!-- assign class based on 'category' -->
		<li class="cards-item <? echo $array[$i]['category'];?>">
			<div class="card">
				<div class="card-image">
					<a data-fancybox href="<? echo $array[$i]['url']; ?>">
						<img src=<? echo $thumbnail ?>>
					</a>
				</div>
				<div class="card-content">
					<div class="card-title">
						<? echo $array[$i]['client']; ?>
					</div>
					<p class="card-text"><? echo $array[$i]['text']?></p>
				</div>
			</div>
		</li>
	<? $i += 1;
	} ?>
	</ul>
<? }