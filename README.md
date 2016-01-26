# array_flatten

Adds array_flatten(array) global function.

## Usage

``` php
<?php

$myArray = [[1, 2, 3], 4, [5], [6, 7], [[8, 9]]];

print_r(array_flatten($myArray)); // [1, 2, 3, 4, 5, 6, 7, 8, 9]
```
