<?php get_header(); ?>

<?php
	$classList = getStudents();
	$encoded_class = json_encode($classList);
?>

<div id="students"></div>

<script>
	var theClass = <?php print $encoded_class; ?>;
	var newHTML = '';
	for (i=0; i<theClass.length; i++){
		newHTML += theClass[i].firstName;
		newHTML += "<br/>";
	}
	document.getElementById('students').innerHTML = newHTML;
</script>

<?php get_footer(); ?>
