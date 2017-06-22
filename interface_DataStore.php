<?php
/*

	Immediate requirements are:
		1. Read a game from the data store
		2. Write a game to the data store
		3. Read a result from the data store
		4. Write a result to the data store
		5. Read all games and results from the data store
*/
interface DataStore
{
	public function read_game($id);
	public function write_game($game);
	public function read_result($id);
	public function write_result($id);
	public function read_all();
}