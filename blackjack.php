<?php

class Blackjack {
    public $deck = array();
    public $card = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
    public $player = array();
    public $dealer = array();
    public $suit = array("H", "S", "C", "D");

    public function createDeck(){
        // 13 cards per suit
        for ($i = 1; $i < 13; $i++) {
            // 4 suits per deck
            for ($x = 1; $x < 4 ;$x++) {
                array_push($this->DECK,$this->cards[$i].$this->suits[$x]);
            }
        }
    }

    public function playerCards () {
    return array_pop($this->deck) . "," . array_pop($this->deck);
    }

    public function dealerCards() {
        return array_pop($this->deck) . "," . array_pop($this->deck);
    }
    public function nextCard() {
    return array_pop($this->deck);
    }
    public function cardType($card) {
        
		$face = substr($card,0,-1);
        $suit = substr($card,-1,1);
        switch($suit) {
            case 'H':
                return $face." of Hearts";
            case 'S':
                return $face." of Spades";
            case 'C':
                return $face." of Clubs";
            case 'D':
                return $face." of Diamonds";
        }
    }
    public function startingValue($card) {
		$value = 0;
		foreach ($cards as &$values)
		{
			$value += $this->cardValue($values);
		}
		return $value;
    }
    public function cardValue($card) {
        $face = substr($card,0,-1);
        $suit = substr($card,-1,1);
        $numericcards = '/[0-9]/';
        $nonnumericcards = '/[KQJ]/';
        if (preg_match($numericcards, $face)) {
            return $face;
        } else 
        if (preg_match($nonnumericcards, $face)) {
            return 10;
        } else {
            return 1;
        }
        echo "Face: ".$face."<br />Suit: ".$suit."<br />";

    }
    public function whoWon($uValue, $dValue, $stand) {
        if ($uValue > 21) {
            echo "You lose";
            return 1;
        } else 
        if ($dValue > 21) {
            echo "You win";
            return 1;
        } else
        if ($stand == 1) {
            if ($uValue > $dValue) {
                echo "You win";
                return 1;
            } else {
            echo "You lose";
            return 1;
            }
        }
        return 0;
    }
}