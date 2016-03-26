 <?php
class FizzBuzzTest extends PHPUnit_Framework_TestCase {
	public $fizzBuzz;

	function setUp(){
		$this->fizzBuzz = new FizzBuzz();
	} 

	function testOneShouldBeSayOne() {
		$actualResult = $this->fizzBuzz->say(1);
		$this->assertEquals("1", $actualResult);
	}

}

?>
