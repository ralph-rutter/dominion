<?php

class Player {
	private $name;
	private $deck = [];
	private $hand = [];
	private $inPlay = [];
	private $discardPile = [];

	public function __construct($name) {
		$this->name = $name;
		$this->deck = [];
		for ($i = 0 ; $i < 7; $i++) {
			$this->deck[] = new Copper;
		}
		for ($i = 0 ; $i < 3; $i++) {
			$this->deck[] = new Estate;
		}
		shuffle($this->deck);
		for ($i = 0; $i < 5; $i++) {
			$this->hand[] = array_shift($this->deck);
		}
	}

	public function getCards() {
		return [
			'deck' => $this->deck,
			'hand' => $this->hand,
			'inPlay' => $this->inPlay,
			'discardPile' => $this->discardPile,
		];
	}	

	public function getName() {
		return $this->name;
	}
}