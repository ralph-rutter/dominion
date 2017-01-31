<?php
require 'functions.php';
require 'classes/abstract/Box.php';
require 'classes/BaseGame.php';
require 'classes/Player.php';
require 'classes/abstract/Card.php';
require 'classes/cards/base_cards/Copper.php';
require 'classes/cards/base_cards/Estate.php';
require 'classes/cards/base_game/Village.php';

$baseGame = new BaseGame();


$ralph = new Player('Ralph');
$esther = new Player('Esther');

echo "\n";

seeCards($ralph, 'deck');
seeCards($ralph, 'hand');

echo "\n";

seeCards($esther, 'deck');
seeCards($esther, 'hand');

echo "\n";













