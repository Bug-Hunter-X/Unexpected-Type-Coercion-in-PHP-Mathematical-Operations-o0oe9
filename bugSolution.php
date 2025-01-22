```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      // For example, you could log an error, throw an exception, or skip the value.
      trigger_error('Non-numeric value encountered: ' . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15

$numbers = [1, 2, '3', 4, '5'];
echo calculateSum($numbers); // Output: 15

$numbers = [1, 2, 'abc', 4, '5'];
echo calculateSum($numbers); // Output: 12 (Warning issued!)
```