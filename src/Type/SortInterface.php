<?php

namespace Hashbangcode\Sort\Type;

/**
 * Interface for the sorting algorithms.
 */
interface SortInterface
{
    /**
     * Perform a sort on a given array.
     *
     * @param array $array
     *   The array to sort.
     *
     * @return
     *   The sorted array.
     */
    public function sort(array $array): array;
}
