<?php

//prints random client quote on each pageload

function quotes_section($array) { ?>
	<div class="quotes-container">
		<? $i = rand(0, count($array) - 1); ?>
		<h2 class="slides">
			"<? echo $array[$i]['quote']; ?>"
		</h2>
		<p class="attribution">
			—<? echo $array[$i]['person'] . ", " . $array[$i]['affiliation']; ?>
		</p>
	</div>
<? }