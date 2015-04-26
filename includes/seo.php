<?php

/* title - about 60 characters of relavent search query keywords */
/* description - 155 characters of message matching text with a call to action */

$meta = array(
	'default' => array(
		title => '',
		description => '',
		keywords => '',
	),
	'kontakt' => array(
		title => '',
		description => '',
		keywords => '',
	),
);

function seo($filename, $element){
	global $meta;
	if ( isset($meta[$filename][$element]) ){
		echo $meta[$filename][$element];
	}
	else{
		echo $meta['default'][$element];
	}
}
?>
