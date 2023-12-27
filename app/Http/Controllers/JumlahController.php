<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class JumlahController extends Controller
{
    public function __invoke(Request $request)
    {
        $process = new Process([
            'C:/Users/ACER/AppData/Local/Programs/Python/Python311/python.exe',
            base_path('app/Python/jumlah.py'),
            $request['number1'],
            $request['number2']
        ]);
        $process->run();
        $result = json_decode($process->getOutput(), true);
        return response()->json($result);
    }
}
