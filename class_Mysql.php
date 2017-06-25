<?php

require_once('interface_DataStore.php');

class Mysql implements DataStore
{
	public function read_game($id) {}
	public function write_game($game) {}
	public function read_result($id) {}
	public function write_result($id) {}
	public function read_all() {}
}