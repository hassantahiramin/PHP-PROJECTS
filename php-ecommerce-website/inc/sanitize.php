<?php

function escape($string){
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

function clean($string) {
	return trim(strip_tags(htmlspecialchars($string, ENT_QUOTES, 'UTF-8')));
}
