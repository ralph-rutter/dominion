<?php

function seeCards($player, $coll) {
	echo $player->getName() . '\'s ' . $coll . ': ';
	$coll = $player->getCards()[$coll];
	foreach ($coll as $card) {
		echo get_class($card) . ' ';
	}
	echo "\n";
}