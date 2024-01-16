<?php
declare(strict_types = 1);

namespace App;

class Factorial
{
    /**
     * @param $firstMember
     * @return int
     * Расчитывает факториал числа
     */
    static public function getFactorial($firstMember):int
    {
      if ($firstMember <= 1){
        return 1;
      }
      else return $firstMember * (Factorial::getFactorial($firstMember - 1));

    }
}