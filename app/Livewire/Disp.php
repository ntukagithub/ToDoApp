<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Save;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;


class Disp extends Component
{
    use WithPagination;
    public function render()
    {
        $data = Save::paginate(2);
        return view('livewire.disp',compact('data'));
    }
}
