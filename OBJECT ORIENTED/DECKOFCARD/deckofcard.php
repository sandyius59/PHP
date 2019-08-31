<?php
/**********************************************************************
 * @Execution : default node : cmd> dackofcard.php
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

class card
{
    public $suit;
    public $rank;

    public function __construct($suit, $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;
    }
}
/**
 * function to get card
 * @param
 */
function getdeck()
{
    //$count = 0;
    $suit = ["Clubs", "Diamonds", "Hearts", "Spades"];
    $rank = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
    $deck = [];
    try {
        for ($i = 0; $i < count($suit); $i++) {
            for ($j = 0; $j < count($rank); $j++) {
                $deck[$i][$j] = new card($suit[$i], $rank[$j]);
            }
        }
        return $deck;
    } catch (Exception $e) {
        echo $e;
    }
}
/**
 * function to card shuffle card
 * @param  $dack
 */
function cardshuffle($deck)
{
    try {
        for ($i = 0; $i < count($suit); $i++) {
            for ($j = 0; $j < count($suit); $j++) {
                $r1 = rand(0, 3);
                $c1 = rand(0, 12);
                $r = rand(0, count($deck));
                $r2 = rand(0, 3);
                $r = rand(0, count($deck));
                $c2 = rand(0, 4);
                $r = rand(0, count($deck));
                $temp = $deck[$r1][$c1];
                $r = rand(0, count($deck));
                $deck[$r1][$c1] = $deck[$r2][$c2];
                $deck[$r2][$c2] = $temp;

            }
        }
        return $deck;
    } catch (Exception $e) {
        echo $e;
    }
}

/**
 * function to distribute card in 4 players
 * @param  $deck
 */
function distribute($deck)
{
    try {
        $player = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $r = rand(0, 3);
                $c = rand(0, count($deck[$r]) - 1);
                $player[$i][$j] = $deck[$r][$c];
                array_splice($deck[$r], $c, 1);
                //The array_splice() function removes selected elements from an array and replaces it with new elements.
            }
        }
        return $player;
    } catch (Exception $e) {
        echo $e;
    }
}
/**
 * function to sort a players
 * @param $player
 */
function sortplayer($player)
{
    try {
        for ($k = 0; $k < 4; $k++) {
            for ($i = 0; $i < count($player[$k]); $i++) {
                $j = ($i - 1);
                $temp = $player[$k][$i];
                while ($j >= 0 && $player[$k][$j]->rank >= $temp->rank) {
                    $player[$k][$j + 1] = $player[$k][$j];
                    $j--;
                }
                $player[$k][$j + 1] = $temp;
            }
        }
        return $player;
    } catch (Exception $e) {
        echo $e;
    }
}
/**
 * function to show card
 * @param $player
 */
function showcard($player)
{
    try {
        $special = ["jeck", "Queen", "king", "Ace"];
        for ($i = 0; $i < count($player); $i++) {
            $print = "{";
            echo "\n\nplayer " . ($i + 1) . ":";
            for ($j = 0; $j < count($player[$i]); $j++) {
                if ($player[$i][$j]->rank > 10) {
                    $print .= $special[$player[$i][$j]->rank % 11] . " of" . $player[$i][$j]->suit . ",";

                } else {
                    $print .= $player[$i][$j]->rank . " of" . $player[$i][$j]->suit . ",";
                }
            }
            $print = substr($print, 0, -1);
            echo $print . "}";
        }
        echo "\n";
    } catch (Exception $e) {
        echo $e;
    }
}
/**
 * function to run a mein menthod
 * @param
 */
function run()
{
    echo "deck of card \n";
    fscanf(STDIN, "%s\n");
    $deck = getdeck();
    echo "enter the shuffle\n";
    fscanf(STDIN, "%s\n");
    $deck = cardshuffle($deck);
    echo "enter the distribute";
    fscanf(STDIN, "%s\n");
    $player = distribute($deck);
    $player = sortplayer($player);
    showcard($player);
}
run();
