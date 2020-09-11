<?php
/*
USAGE [my_fix_date({pubDate[1]})]
*/

function my_fix_date( $date ) {
	return DateTime::createFromFormat( 'd.m.y', $date )->format( 'n/j/Y' );	
}
