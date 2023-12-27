<?php

namespace App\Livewire;

use Livewire\Component;
use Symfony\Component\Process\Process;

class JumlahPython extends Component
{
    public $number1;
    public $number2;
    public $result;

    public function add()
    {
        $process = new Process([
            'C:/Users/ACER/AppData/Local/Programs/Python/Python311/python.exe',
            base_path('app/Python/jumlah.py'),
            $this->number1,
            $this->number2
        ]);
        $process->run();
        $this->result = json_decode($process->getOutput(), true);
        return response()->json($this->result);
        $this->reset('number1', 'number2');
    }
}
