<?php

class BaseGame extends Box {

	private $cards = [];

	public function __construct() {
		$this->cards[] = new Village();
	}
}