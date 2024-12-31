# PHP Null Value Handling Bug

This repository demonstrates a common bug in PHP code related to null value handling. The `foo` function attempts to add two numbers but doesn't properly check for null values. This leads to unexpected errors when either `a` or `b` is null.

## Bug Description
The `foo` function uses a loose comparison (`==`) to check for null values. This can lead to unexpected behavior because other values, like 0 or false, may also evaluate to false in this comparison. The correct approach is to use strict comparison (`===`) to ensure that only null values are handled as such.

## Solution
The solution demonstrates how to correctly handle null values in PHP functions. By using strict comparison (`===`), the function ensures that only null values are treated appropriately.  Additional error handling using a ternary operator prevents errors.