<?php
require_once('class_StdIn.php');

class NoughtsCrosses
{
	private $lines;
	private $dataSource;
	private $judgement;

	public function __construct(OxoData $reader, DataStore $db)
	{
		$this->datasource = $reader;
		$this->judgement = $writer;
		$this->lines = array();
	}

	public function get_aggregate_results()
	{
		//
	}

	public function calculate_winners()
	{
		$this->datasource->read_file();
		$this->lines = $this->datasource->get_lines();
	}

	public function get_results()
	{
		return $this->datasource->get_lines();
	}
}