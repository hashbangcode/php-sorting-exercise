<?php

namespace Hashbangcode\Sort\Test\Type;

use PHPUnit\Framework\TestCase;
use Hashbangcode\Sort\Type\QuickSort;

/**
 * Class to test the quicksort sorting algorithm.
 */
class QuickSortTest extends SortTestBase
{
    /**
     * Tests the quicksort sorting algorithm.
     *
     * @dataProvider sortDataProvider
     */
    public function testSort($array, $sorted)
    {
        $sort = new QuickSort();
        $result = $sort->sort($array);
        $this->assertEquals($result, $sorted);
    }
}
