<?php

namespace App\Http\Controllers;

use Calculate;
use App\Http\Requests\AreaRequest;
use Illuminate\Http\Request;

class AreaController extends Controller
{
     /**
 * Загрузка формы
     *
 * @return View представление
     */
      public function index()
    {
        return view('index');
    }

     /**
     * Вычисление Площади Параллелограмма
     *
     * * @param AreaRequest $request валидация данных из формы
     *
     * @return View представление
     */
    public function area2(AreaRequest $request)
    {
        //получение данных
        $height = $request->height;
        $footing = $request->footing;

        // вычисления
        $area = Calculate::area2($height, $footing);

        // передача данных представлению
        return view('index', [
            'height' => $height,
            'footing' => $footing,
            'area' => $area
        ]);
    }
}
