<?php

namespace App\Http\Controllers;

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

    public function area2(Request $request)
    {
        //получение данных
        $height = $request->height;
        $footing = $request->footing;

        // вычисления
        $area = $height * $footing;

        return view('index', [
            'height' => $height,
            'footing' => $footing,
            'area' => $area
        ]);
    }
}
