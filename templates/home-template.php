<?php
/**
 * Template Name: Home Page
 *
 * @package Unbox
 */

get_header();
	// echo 'dfajsdlfjlajsdlfjla';
	$lz_fitness_home_sections = lz_fitness_home_section();
	// print_r($lz_fitness_home_sections);
	foreach ($lz_fitness_home_sections as $lz_fitness_home_section) {
		// echo 'lz_fitness_home_section-> '. $lz_fitness_home_section;
		get_template_part( 'template-parts/section', $lz_fitness_home_section );
	}

get_footer(); 