<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testCount()
    {
        $collect = new Collect\Collect([1, 2, 3, 4]);
        $this->assertSame(4, $collect->count());
    }

    public function testValues()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame([1, 2, 3, 4], $collect->values()->toArray());
    }


    public function testKeys()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame(['one', 'two', 'three', 'four'], $collect->keys()->toArray());
    }


    public function testGet()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4], $collect->get());
    }


    public function testExcept()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame(['two' => 2, 'three' => 3, 'four' => 4], $collect->except('one')->toArray());

    }

    public function testOnly()
    {

        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame(['one' => 1], $collect->only('one')->toArray());
    }


    public function testFirst()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame(1, $collect->first());
    }


    public function testToArray()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]);
        $this->assertSame(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4], $collect->toArray());
    }


    public function testPush()
    {
        $collect = new Collect\Collect(['one' => 1, 'two' => 2, 'three' => 3]);
        $this->assertSame(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4], $collect->push(4, 'four')->toArray());
    }

    public function testUnshift()
    {
        $collect = new Collect\Collect([2, 3, 4]);
        $this->assertSame([1, 2, 3, 4], $collect->unshift(1)->toArray());
    }

    public function testShift()
    {
        $collect = new Collect\Collect([1, 2, 3, 4]);
        $this->assertSame([2, 3, 4], $collect->shift()->toArray());
    }


    public function testPop()
    {
        $collect = new Collect\Collect([1, 2, 3, 4]);
        $this->assertSame([1, 2, 3], $collect->pop()->toArray());
    }




    public function testSplice()
    {
        $array = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
        $collect = new Collect\Collect($array);
        $this->assertSame(['two' => 2, 'three' => 3, 'four' => 4], $collect->splice($array, 1, 1)->toArray());
    }



}