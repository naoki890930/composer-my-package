<?php
use PHPUnit\Framework\TestCase;
use MyPackage\Sample;

class SampleTest extends TestCase
{
    protected $object;

    protected function setUp() {
        $this->object = new Sample();
    }

    public function testGetSetName()
    {
        $name = 'test';
        $this->object->setName($name);
        $this->assertEquals($name, $this->object->getName());
    }

    public function testSayHelloWithoutName()
    {
        $expect = 'Hello!' . PHP_EOL;
        $this->object->sayHello();
        $this->expectOutputString($expect);
    }

    public function testSayHelloWithName()
    {
        $name = 'test';
        $expect = "Hello {$name}!" . PHP_EOL;
        $this->object->setName($name);
        $this->object->sayHello();
        $this->expectOutputString($expect);
    }
}