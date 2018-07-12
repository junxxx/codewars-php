<?php
class Pong {
    const PLAYER_ONE = 1;
    const PLAYER_TWO = 2;

    const BALL_PIXEL = 1;
    const PADDLES_PIXEL = 7;

    private $player = null;

    private $maxScore;

    private $playerScore;

    public function __construct($maxScore)
    {
        $this->maxScore = $maxScore;
    }

    public function play($ballPos, $playerPos)
    {
        $this->setPlayer();
        $hit = $this->checkHit($ballPos, $playerPos);
        //missed opponet score plus one
        !$hit && $this->setScore($this->getOpponet());
        echo $this->getText($hit);
    }

    private function getText($hit)
    {
        if($this->gameOver())
        {
            return 'Game Over!';
        }
        if($this->getScore($this->getPlayer()) >= $this->maxScore)
        {
            return sprintf('Player %d has won the game!', $this->getPlayer());
        }
        elseif($this->getScore($this->getOpponet()) >= $this->maxScore)
        {
            return sprintf('Player %d has won the game!', $this->getOpponet());
        }
        else
        {
            return sprintf('Player %d has %s the ball!', $this->getPlayer(), $hit ? 'hit' : 'missed');
        }
    }

    private function gameOver()
    {
        return $this->getScore($this->player) >= $this->maxScore;
    }

    private function checkHit($x , $y)
    {
        $halfLen = self::PADDLES_PIXEL / 2;
        $minHeight = $y - $halfLen;
        $maxHeight = $y + $halfLen;

        return $x >= $minHeight && $x <= $maxHeight;
    }

    private function getOpponet()
    {
        return $this->player == self::PLAYER_ONE ? self::PLAYER_TWO : self::PLAYER_ONE;
    }

    private function setPlayer()
    {
        if(is_null($this->player))
        {
            $this->player = self::PLAYER_ONE;
        }
        else 
        {
            $this->player = $this->player == self::PLAYER_ONE ? self::PLAYER_TWO : self::PLAYER_ONE;
        }
    }

    private function getPlayer()
    {
        return $this->player;
    }

    private function setScore($player)
    {
        isset($this->playerScore[$player]) ? $this->playerScore[$player]++ : $this->playerScore[$player] = 1;
    }

    private function getScore($player)
    {
        return isset($this->playerScore[$player]) ? $this->playerScore[$player] : null;
    }

}


$game = new Pong(2); // Here we say that the score to win is 2
$game->play(50, 53) ;     // Player 1 hits the ball
$game->play(100, 97);      // Player 2 hits it back
$game->play(0, 4);   // Player 1 misses so Player 2 gains a point
$game->play(25, 25);      // Player 2 hits the ball
$game->play(75, 25);      // Player 1 misses again. Having 2 points Player 2 wins, so we return the corresponding string
$game->play(50, 50);                      // Another turn is made even though the game is already over
