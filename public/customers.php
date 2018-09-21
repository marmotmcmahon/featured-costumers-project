<!DOCTYPE html>
<html>
<head>
	<title>Adjust's Customers</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/filtering.js"></script>
	<script type="text/javascript" src="js/quotes-slideshow.js"></script>
</head>
<body>
	<?php include "../resources/includes.php";

	top_nav();

	?> <div class="container"> <?

		intro_section("More than 20,000 apps<br>from around the world use Adjust.", "Hear what they have to say.", "../public/img/stock-tablet.jpg");

		quotes_section($quotes_array);

		video_cards_title("Video Testimonials");

		show_filter_buttons($video_card_array);

		video_cards_loop($video_card_array);

	?> </div> <?

	footer(); ?>

</body>
</html>