<?php
require 'classes.php';
require 'functions.php';

$ralph = new Player('Ralph');

seeCards($ralph->getCards(), 'deck');
seeCards($ralph->getCards(), 'hand');

echo "\n";













