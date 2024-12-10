The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison checks for both value and type equality. This prevents the implicit type coercion that caused the problem.

```php
<?php
$a = 0;
$b = "0a";

if ($a === $b) {
  echo "The values are strictly equal.";
} else {
  echo "The values are not strictly equal.";
}
?>
```

This revised code will correctly output "The values are not strictly equal." because the types (integer and string) differ, and strict comparison doesn't perform type juggling.