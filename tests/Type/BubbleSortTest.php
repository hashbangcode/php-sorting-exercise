<?php

namespace Hashbangcode\Sort\Test\Type;

use PHPUnit\Framework\TestCase;
use Hashbangcode\Sort\Type\BubbleSort;

/**
 * Class to test the bubble sort sorting algorithm.
 */
class BubbleSortTest extends SortTestBase
{
    /**
     * Tests the bubble sort sorting algorithm.
     *
     * @dataProvider sortDataProvider
     */
    public function testSort($array, $sorted)
    {
        $sort = new BubbleSort();
        $result = $sort->sort($array);
        $this->assertEquals($result, $sorted);
    }
}
