<?php

// Prints intro section with banner image and text overlay

function intro_section($h2, $h1, $url) { ?>
		<div class="banner-container">
		  <img src="<? echo $url; ?>" alt="<? echo $h1; ?>" style="width:100%;">
		  <div class="banner-centered">
		  	<h2><? echo $h2; ?></h2>
		  	<h1><? echo $h1; ?></h1>
		  </div>
		</div>
<? }