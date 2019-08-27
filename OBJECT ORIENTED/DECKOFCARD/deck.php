<?php
/**********************************************************************
 * @Execution : default node : cmd> deck.php
 *
 *
 * @Purpose : Shuffle the cards using Random method and then distribute 9 Cards to 4 Players
 *
 * @description : Shuffle the cards using Random method and then
 * distribute 9 Cards to 4 Players and Print the Cards the received by the 4 Players
 * using 2D Array...
 *
 * @overview : dack of cards
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 23-Aug-2019
 *
 ***********************************************************************/

// function pc_array_shuffle()
// {
//     $suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
//     $cards = array('A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');
//     $deck = pc_array_shuffle(range(0, 51));
//     while (($draw = array_pop($deck)) != null) {
//         echo $cards[$draw / 4] . " of " . $suits[$draw % 4] . "\n";
//     }
// }

class Deck
{
    /**
     * Builds a deck of cards.
     *
     * @return array
     */
    public static function cards()
    {
        $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace');
        $suits = array("Clubs", "Diamonds", "Hearts", "Spades");

        $cards = array();
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                array_push($cards, $value . " of " . $suit);
            }
        }
        return $cards;
    }

    /**
     * Shuffles an array of cards.
     *
     * @param array $cards The array of cards to shuffle.
     *
     * @return array
     */
    public static function shuffle(array $cards)
    {
        $total_cards = count($cards);

        foreach ($cards as $index => $card) {
            // Pick a random second card.
            $card2_index = mt_rand(1, $total_cards) - 1;
            $card2 = $cards[$card2_index];

            // Swap the positions of the two cards.
            $cards[$index] = $card2;
            $cards[$card2_index] = $card;
        }

        return $cards;
    }
    public function distribute($player, $cardG, $cards)
    {
        $player = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $r = rand(0, 3);
                $c = rand(0, count($deck[$r]) - 1);
                $player[$i][$j] = $deck[$r][$c];
                array_splice($deck[$r], $c, 1);
            }
        }
        return $player;
    }
}
$cards = Deck::cards();
//echo "Cards: \n" . implode(', ', $cards);
echo "Shuffled Cards:\n" . implode(', ', Deck::shuffle($cards));
distribute();
