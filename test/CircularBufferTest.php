 <?php
class CircularBufferTest extends PHPUnit_Framework_TestCase {
    public $circularBuffer;

    function setUp(){
        $this->circularBuffer = new CircularBuffer();
    } 

    function testNotEmptyAfterAddAndReadAll() {
        $this->circularBuffer->write("A");
        $this->circularBuffer->read();
        $this->circularBuffer->write("B");
        $this->circularBuffer->write("C");
        $this->circularBuffer->read();
        $this->assertFalse($this->circularBuffer->isEmpty());
    }

    function testEmptyAfterAddAndReadAll() {
        $this->circularBuffer->write("A");
        $this->circularBuffer->read();
        $this->circularBuffer->write("B");
        $this->circularBuffer->write("C");
        $this->circularBuffer->read();
        $this->circularBuffer->read();
        $this->assertTrue($this->circularBuffer->isEmpty());
    }

    function testEmptyAfterAddABAndReadAB() {
        $this->circularBuffer->write("A");
        $this->circularBuffer->write("B");
        $this->circularBuffer->read();
        $this->circularBuffer->read();
        $this->assertTrue($this->circularBuffer->isEmpty());
    }

    function testReadABAfterAddABtoBuffer() {
        $this->circularBuffer->write("A");
        $this->circularBuffer->write("B");
        $this->assertEquals("A", $this->circularBuffer->read());
        $this->assertEquals("B", $this->circularBuffer->read());
    }

    function testReadBAfterAddBtoBuffer() {
        $this->circularBuffer->write("B");
        $actualResult = $this->circularBuffer->read();
        $this->assertEquals("B", $actualResult);
    }

    function testReadAAfterAddAtoBuffer() {
        $this->circularBuffer->write("A");
        $actualResult = $this->circularBuffer->read();
        $this->assertEquals("A", $actualResult);
    }

    function testNotEmptyAfterWriteOneDataToBuffer() {
        $this->circularBuffer->write("A");
        $actualResult = $this->circularBuffer->isEmpty();
        $this->assertFalse($actualResult);
    }

    function testEmptyAfterCreatedNewBuffer() {
        $actualResult = $this->circularBuffer->isEmpty();
        $this->assertTrue($actualResult);
    }

}

?>
