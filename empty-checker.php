<?php

function is_ISO_empty($element) {
	if(empty($element)) {
	} else {
		return 'ISO: <a href="'.$element.'" target="_blank">'.$element.'</a><br>';
	}
}
