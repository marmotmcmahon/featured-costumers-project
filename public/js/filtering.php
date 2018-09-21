<script type="text/javascript">

<?php // Pass PHP $categories_array to Javascript

$categories_array = array('data', 'user-analytics', 'marketing');

?>

var categories_array = <?php echo json_encode($categories_array) ?>;

// Iterate through categories to assign toggle tags

$(document).ready(function(){
	jQuery.each(categories_array, function(index, value){
		$("#" + value + "-btn").click(function() {
			$("." + value).fadeToggle();
			$("#" + value + "-btn").toggleClass('deactivated');
		});
	});
});
</script>