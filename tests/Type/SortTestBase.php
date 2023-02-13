<?php

namespace Hashbangcode\Sort\Test\Type;

use PHPUnit\Framework\TestCase;
use Hashbangcode\Sort\Type\BubbleSort;

/**
 * Base class for testing sorting algorithms.
 */
abstract class SortTestBase extends TestCase
{
    /**
     * Data provider for the sorting algorithm tests.
     *
     * @return
     *   An array of testing data and their sorted equivalents.
     */
    public function sortDataProvider(): array
    {
        return [
            [
                [3, 1, 2],
                [1, 2, 3],
            ],
              [
                [7, 1, 4],
                [1, 4, 7],
              ],
              [
                [10, 3, 2, 4, 6, 5, 7, 9, 8, 1],
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
              ],
              [
                [9, 1, 1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1, 1, 9],
              ],
              [
                [1],
                [1],
              ],
            [
            [3, 4, 5, 8, 2, 7, 3, 4, 0, 8, 9, 5, 6, 7, 2, 0, 3, 4, 8, 9, 7, 5, 6, 2, 3, 4],
            [0, 0, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 6, 6, 7, 7, 7, 8, 8, 8, 9, 9,],
            ],
        ];
    }
}
