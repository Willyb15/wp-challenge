<?php
/**
* Plugin Name: class list controller
* Description: This is the custom controller for the Wp-Challenge.
* Version: 1.0.
* Author: William Bryant
*/
function say_hello_world(){
	print "Hello, world!!!";
}

// $theClass = array(
// 	'Tristan',
// 	'Joshua',
// 	'Bogdan',
// 	'Laz',
// 	'Rock Man',
// 	'Will',
// 	'Curtis',
// 	'Joe',
// 	'Koshan',
// 	'Patrick',
// 	'The Handsome One',
// 	'Jeremy'
// 	);

function getClass(){
global $wpdb;

$result = $wpdb->get_results('SELECT * FROM class_list');
// $encoded_class = json_encode($result);
// print_r($result);
// $class = array();

foreach($result as $row){
	$class [] = get_object_vars($row);
}

usort($class, function($a, $b){
	return strcasecmp($a['name'], $b['name']);
});

print '<pre>';
// ksort($class[0]);
print_r($result);
exit;


// print_r($class);
// exit;
// print_r (get_object_vars($result[0]));
// $encoded_class =json_encode($result);
// return $result;
// $theClass = array(
// 	'Tristan',
// 	'Joshua',
// 	'Bogdan',
// 	'Laz',
// 	'Rock Man',
// 	'Will',
// 	'Curtis',
// 	'Joe',
// 	'Koshan',
// 	'Patrick',
// 	'The Handsome One',
// 	'Jeremy'
// 	);

// return;

// array_pop($class);


// $theClass = array(
// 	'student_one' => 'Tristan',
// 	'student_two' => 'Joshua',
// 	'student_three' => 'Bogdan',
// 	'student_four' => 'Laz',
// 	'student_five' => 'Rock Man',
// 	'student_six' => 'Will',
// 	'student_seven' => 'Curtis',
// 	'student_eight' => 'Joe',
// 	'student_nine' => 'Koshan',
// 	'student_ten' => 'Patrick',
// 	'student_eleven' => 'The Handsome One',
// 	'student_twelve' => 'Jeremy'
// 	);

// $class = array();
// $class[] = 'Tristan';
// $class[] = 'Josh';
// array_push($class, 'Tristan');
// array_push($class, 'Josh');

// $class - new stdClass;
// $class->student_one = 'Tristan';
// $class->student_two = 'Josh';

}

// function select_from_DB(){
// 	$result = $wpdb->query('SELECT * FROM class_list');
// 	print $result;
// 	exit;
// };