<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($value1, $operator, $value2)
    {
        $value1 = (float)$value1;
        $value2 = (float)$value2;

        $result = null;

        if ($operator === 'addition') {
            $result = $value1 + $value2;
        } elseif ($operator === 'subtraction') {
            $result = $value1 - $value2;
        } elseif ($operator === 'multiplication') {
            $result = $value1 * $value2;
        } elseif ($operator === 'division') {
            if ($value2 != 0) {
                $result = $value1 / $value2;
            } else {
                $result = 'Division by zero is not allowed';
            }
        } else {
            $result = 'Invalid operator';
        }

        return view('calculator', ['result' => $result]);
    }
}
