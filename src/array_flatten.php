<?php

/**
 * Flatten a multi-dimensional array down to one level
 *
 * @param array $sourceArray The source array to flatten
 *
 * @return array The flattened array
 */
function array_flatten(array $sourceArray)
{
    $iterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator($sourceArray),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    $flattenedArray = [];

    foreach ($iterator as $item) {
        $flattenedArray[] = $item;
    }

    return $flattenedArray;
}
