<?php 
namespace Core;
/**
 * 
 */
class Model
{
	protected $db;
	function __construct()
	{
		global $db;
		$this->db = $db;
	}
}