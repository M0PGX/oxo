<?php

class Store implements DataStore
{
	private $connection;

	public function __construct()
	{
		$host = '127.0.0.1';
		$db   = 'oxo';
		$user = 'root';
		$pass = 'masterkey';
		$charset = 'utf8';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$opt = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		$this->connection = new PDO($dsn, $user, $pass, $opt);
	}

/**
 *	Read a single game to the database
 * 	@param id of the game to read
*/
	public function read_game($id)
	{
		//
	}

/**
 *	Write a single game to the database
*/
	public function write_game($game)
	{
		try
		{
			$this->connection->prepare("INSERT INTO results (the_game) VALUES (:the_game)");
			$this->connection->bindParam('the_game', $game);
			$this->connection->execute();
		}
		catch (PDOException $e)
		{
			return $e->getCode();
		}
	}

/**
 * 
 *	Read the result of a game from the database
 *	@param the id of the game to read the result from
 * 
*/
	public function read_result($id)
	{
		//
	}

/**
 * 
 *	Write the result of a game to the database
 *	@param the id of the game to write the result to
 *
*/
	public function write_result($id)
	{
		//
	}
}