# PHP Loose Comparison Pitfall

This repository demonstrates a common, yet easily overlooked, error in PHP involving loose comparisons (`==`) and the unexpected behavior with numeric strings.  Loose comparison can lead to logical errors that are difficult to track down. The `bug.php` file showcases the problematic code, while `bugSolution.php` provides a corrected version using strict comparison (`===`).