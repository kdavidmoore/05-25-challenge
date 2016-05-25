<?php
/**
 * Plugin Name: Students Lister
 * Plugin URI: http://kdavidmoore.com
 * Description: This plugin lists all the students in cohort 2.
 * Version: 1.0.0
 * Author: Keith Moore
 * Author URI: http://kdavidmoore.com
 * License: GPL2
 */

function getStudents(){
	
	require_once('initStudents.php');
	$result = $wpdb->get_results("SELECT firstName FROM students");
	$class = array();
	
	foreach($result as $row){
		$class[] = get_object_vars($row);
	}

	usort($class, function($a, $b){
		return strcasecmp($a['firstName'], $b['firstName']);
	});

	return $class;
}
