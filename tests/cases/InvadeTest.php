<?php

use JohnPBloch\Invade\Dummy;
use PHPUnit\Framework\TestCase;

class InvadeTest extends TestCase
{
    /**
     * @covers invade
     */
    public function testPropertyAccess()
    {
        $dummy = new Dummy();
        $this->assertEquals('Foobar', invade($dummy)->test);
        $this->assertEquals(0, invade($dummy)->count);
    }

    /**
     * @covers invade
     */
    public function testPropertySetting()
    {
        $dummy = new Dummy();
        invade($dummy)->test = 'Qwerty';
        $this->assertEquals('Qwerty', invade($dummy)->test);
        $val = rand(1, 99);
        invade($dummy)->count = $val;
        $this->assertEquals($val, invade($dummy)->count);
    }

    /**
     * @covers invade
     */
    public function testMethodAccess()
    {
        $dummy = new Dummy();
        invade($dummy)->transformTest();
        $this->assertEquals('rabooF', invade($dummy)->test);
        $this->assertEquals(1, invade($dummy)->incrementCount());
        $this->assertEquals(1, invade($dummy)->count);
    }
}
