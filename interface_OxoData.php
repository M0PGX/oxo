<?php
/*

	Immediate requirements are:
		1. read the data from it's source.
		2. Retrieve the data for use else where.
*/
interface OxoData
{
	public function read_file();
	public function get_lines();
}