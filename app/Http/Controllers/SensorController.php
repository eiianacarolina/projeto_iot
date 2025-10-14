<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function findByCod(Request $request){
        $sensor = Sensor::where($request->codigo)->first();

        if($sensor == null){
            return response()->json([
                'status'=> false,
                'message'=> 'sensor não encontrado' . $sensor. ' - '. $request->codigo
            ],404);
        }
         return $sensor->status;
    }

    public function update(Request $request){
        $sensor = Sensor::where('codigo', $request->codigo)->first();

        if($sensor==null){
             return response()->json([
                'status'=> false,
                'message'=> 'sensor não encontrado'
            ]);
        }

        if($sensor->status==true){
            $sensor->status = false;
        } else{
            $sensor->status = true;
        }

        $sensor->save();

        return response()->json([
            'data' => $sensor
        ]);
    }
}
