<?php

class ArrayFlattenTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getArrayFlattenFixtures
     */
    public function testArrayFlatten($expected, $original)
    {
        $this->assertEquals($expected, array_flatten($original));
    }

    public function getArrayFlattenFixtures()
    {
        return [
            [[1, 2, 3], [1, 2, 3]],
            [[1, 2, 3], [[1], [2], [3]]],
            [[1, 2, 3], [[1, 2, 3]]],
            [[1, 2, 3], [[1, 2], 3]]
        ];
    }
}
