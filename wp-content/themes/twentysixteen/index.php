<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php say_hello_world(); ?>


		<?php getClass();?>

		<br>
<!-- 		<?php foreach($theClass as $student){
			//print $student.' '.'<br>';
		}
		?> -->

<!--  <?php
	$class = getClass();
	$encoded_class = json_encode($class);
	?> -->

<!-- <script type="text/javascript">
	var theClassArray = <?php print $encoded_class; ?>;
	console.log(theClassArray);
	for(i=0;i<theClassArray.length;i++){
		document.write(theClassArray[i]);
	}
</script> -->


