# Unexpected Type Coercion in PHP Mathematical Operations

This repository demonstrates a common, yet subtle, bug in PHP related to type coercion in mathematical operations.  PHP's loose typing can lead to unexpected results when strings are implicitly converted to numbers during calculations.  The bug highlights the importance of careful type checking and handling to avoid unexpected outputs.

## Bug Description

The `calculateSum` function is designed to calculate the sum of numbers in an array. However, due to PHP's implicit type coercion, it handles strings mixed with numbers in unexpected ways. When strings which are not numeric are encountered, PHP issues a warning and proceeds without using the non-numeric value in the calculation. This can lead to errors that are difficult to debug, especially in larger applications.