<?php
/*
	Works out the results of each game and stores the game
	and the results in a datastore of your choice (uses an
	interaced class).
*/

class TheJudge
{
	private $game;
	private $result;

	public function load_game($a_game)
	{
		$this->game = $a_game;
	}

/**
 * Check for a winning line
 * @return character  - X or O if a win, or d for a draw
 */
	public function judge_game()
	{
		if(!$result = $this->check_diagonals())
		{
			if(!$this->result = $this->check_horizontals())
			{
				if(!$this->result = $this->check_verticals())
				{
					$this->result = 'd'; 	// A draw
				}
			}
		}
	}

/**
 * Check for a diagonal line
 */
	private function check_diagonals()
	{
		$backslash = null;
		$forwardslash = null;

		$test = array_unique($this->game[0][0], $this->game[1][1], $this->game[2][2]);
		$backslash = $this->check_win($test);

		$test = array_unique($this->game[3][0], $this->game[2][1], $this->game[1][2]);
		$forwardslash = $this->check_win($test);

		if($backslash != null)
			return $backslash;

		return $forwardslash;
	}

/**
 * Check horizontals for a winning line
 * Make check_horizontals and check_verticals into a single function?
 */
	private function check_horizontals()
	{
		$hor = null;

		for($pos = 0; $pos < 3; $pos++)
		{
			$test = array_unique($this->game[0][$pos], $this->game[1][$pos], $this->game[2][$pos]);
			$hor = $this->check_win($test);

			if($hor != false) 	// Stop if we found a win!
				break;
		}

		return $hor;
	}

/**
 * Check verticals for a winning line
 */
	private function check_verticals()
	{
		for($pos = 0; $pos < 3; $pos++)
		{
			$test = array_unique($this->game[$pos][0], $this->game[$pos][1], $this->game[$pos][2]);
			$ver = $this->check_win($test);

			if($ver != false) 	// Stop if we found a win!
				break;
		}

		return $ver;
	}

/**
 * Check if the length of the array == 3 to indicate a win
 * @param array
 * @return char/bool  - false or the winning X or O
 */
	private function check_win($test)
	{
		if(count($test) == 3) 	// Stop if we found a win!
			return $test[0];

		return false;
	}
}