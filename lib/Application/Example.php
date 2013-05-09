<?php
namespace Application;

class Example {
	
	private $number = NULL;

	function __construct() {
		$this->number = 0;
	}

	public function add($x, $y) {
		if(!is_numeric($x) || !is_numeric($y)){
			throw new \InvalidArgumentException;
		}
		$this->number = $x + $y;
		return $this->number;
	}

}
?>