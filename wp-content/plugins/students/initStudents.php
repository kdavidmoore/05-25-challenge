<?php

global $wpdb;

$students = ['Tristan', 'Josh', 'Bogdan', 'Will', 'Keith', 'Patrick', 'Jonathan', 'Jeremy'];

foreach($students as $student){
	$wpdb->query(
		$wpdb->prepare("INSERT INTO students SET firstName = %s", $student)
	);
}
