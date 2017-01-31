<?php

class Player {
	private $name;
	private $deck = [];
	private $hand = [];
	private $inPlay = [];
	private $discardPile = [];
	private $actions;
	private $buys;
	private $treasure;

	public function __construct($name) {
		$this->name = $name;
		$this->actions = 1;
		$this->buys = 1;
		$this->treasure = 0;
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

	public function play($card) {
		$cardIndex = array_search($card, $this->hand);
		if ($cardIndex !== FALSE) {
			$this->actions--;
			$this->inPlay[] = $this->hand[$cardIndex];
			unset($this->hand[$cardIndex]);
			$card->play();
		}
	}
}