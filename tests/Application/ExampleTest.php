<?php
class ExampleTest extends PHPUnit_Framework_TestCase {

	protected $obj = NULL;
	
	protected function setUp() {
		$this->obj = new Application\Example;
	}
	
	public function data() {
		$data = array();
		$data[] = array(3,1,2);
		$data[] = array(-5,-1,-4);
		$data[] = array(10.5,10,0.5);
		return $data;
	}
	
	/**
	 * @dataProvider data
	 */
	public function testAddNumbers($expected, $actual_1, $actual_2) {
		$this->assertEquals($expected, $this->obj->add($actual_1,$actual_2));
	}
	
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testThrowsExceptionForNonNumeric(){
		$this->assertEquals(3, $this->obj->add(1, array()));
	}
	
	protected function tearDown() {
		unset($this->obj);
	}
}
?>