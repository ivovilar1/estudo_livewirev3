<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;

    public string $firstName = '';
    public string $secondName = '';

    public function mount()
    {
        $this->counter = 200;
        $this->fill([
            'firstName' => 'Ivo',
            'secondName' => 'Vilar'
        ]);
    }
    public function render()
    {
        return view('livewire.counter');
    }

    public function count(): void
    {
        $this->counter ++;
    }
}
