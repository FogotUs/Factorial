<?php
declare(strict_types = 1);

use App\Factorial;
require_once ("../vendor/autoload.php");

print(Factorial::getFactorial($_SERVER['argv'][1]) / Factorial::getFactorial($_SERVER['argv'][2])."\n");
