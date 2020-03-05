<?php

namespace App\Services;


/**
 * Сервис для вычислений
 */
class Calculate
{
    /**
     * Вычисление факториала
     *
     * @param integer $result число
     *
     * @param integer $height число
     *
     * @param integer $footing число
     *
     * @return integer Площадь параллелограмма
     */
    public function area2(int $height, int $footing) : int
    {
        $area2 = $height * $footing;

        return $area2;
    }
}

