<?php

function seeCards($cards, $coll) {
	echo 'Your ' . $coll . ': ';
	$coll = $cards[$coll];
	foreach ($coll as $card) {
		echo get_class($card) . ' ';
	}
	echo "\n";
}