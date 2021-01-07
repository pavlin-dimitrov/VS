<?php
$word = 'abb';
function check_for_palindrome($word){
	$revers_str = strrev($word);
	if ($word == $revers_str) {
		return "This is palindrome";
	} else {
		return "This is not palindrome";
	}

}

echo check_for_palindrome($word);

