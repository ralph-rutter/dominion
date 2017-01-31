<?php

class Estate extends Card {
	public function __construct() {
		$this->box = 'Base Cards';
		$this->type = ['Victory'];
		$this->cost = 2;
		$this->vp = 1;
		$this->value = 0;
	}
}