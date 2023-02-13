<?php

namespace Hashbangcode\Sort\Type;

/**
 * Class that implements the bubble sort algorithm.
 */
class BubbleSort implements SortInterface
{
    /**
     * {@inheritDoc}
     */
    public function sort(array $array): array
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = 0; $j < count($array) - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $x = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $x;
                }
            }
        }

        return $array;
    }
}
