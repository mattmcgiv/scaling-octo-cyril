<?php

	add_action('wp_head','add_fa');
	
	function add_fa() {
		$output = '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">';
		echo $output;
	}