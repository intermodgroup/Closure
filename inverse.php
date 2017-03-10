<?php
$inverse = function($text) {
	$result = "";
	for ($i=(strlen($text)-1); $i>=0; $i--) {
		$result .= $text{$i};
	}
	return $result;
};

echo $inverse('Arife');
?>