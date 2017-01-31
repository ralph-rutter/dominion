<?php
class Supply {
	private $kingdom;
	private $treasureSup;
	private $victorySup;
	private $curseSup;
}

class Pile {
	private $card;
	private $quantity;
}

abstract class Card {
	private $box;
	private $type;
	private $cost;
	private $vp;
	private $value;
}

class Copper extends Card {
	public function __construct() {
		$this->box = 'Base Cards';
		$this->type = ['Treasure'];
		$this->cost = 0;
		$this->vp = 0;
		$this->value = 1;
	}
}

class Estate extends Card {
	public function __construct() {
		$this->box = 'Base Cards';
		$this->type = ['Victory'];
		$this->cost = 2;
		$this->vp = 1;
		$this->value = 0;
	}
}

class Box {
	private $name;
}

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
}
