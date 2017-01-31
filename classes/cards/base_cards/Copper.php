<?php

class Copper extends Card {
	public function __construct() {
		$this->box = 'Base Cards';
		$this->type = ['Treasure'];
		$this->cost = 0;
		$this->vp = 0;
		$this->value = 1;
	}
}