<?php

require_once('interface_OxoData.php');

class StdIn implements OxoData
{
	private $std_data;

	public function __construct()
	{
		$std_data = array();
	}

/*
	Reads all of the data from STDIN
*/
	public function read_file()
	{
		try 
		{
			while ($line = fgets(STDIN)) 
			{
				if($line != PHP_EOL)
					$this->std_data[] = $line;
			}
		} 
		catch(Exception $e)
		{
			exit ('ERROR: Was expecting STDIO: ' . $e->getMessage());
		}
	}

/*
	Accessor for the data
*/
	public function get_lines()
	{
		return $this->std_data;
	}
}