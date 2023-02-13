<?php

namespace Hashbangcode\Sort\Type;

/**
 * Class that implements the quick sort algorithm.
 */
class QuickSort implements SortInterface
{
    /**
     * {@inheritDoc}
     */
    public function sort(array $array): array
    {
        if (count($array) === 0) {
            return $array;
        }

        $k = $array[0];
        $x = $y = [];

        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] <= $k) {
                $x[] = $array[$i];
            } else {
                $y[] = $array[$i];
            }
        }

        return array_merge($this->sort($x), array($k), $this->sort($y));
    }
}
