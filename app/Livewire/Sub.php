<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Save;

class Sub extends Component
{
    public $content;
    public function render()
    {
        return view('livewire.sub');

    }


    public function create()
    {
      $this->validate([
        'content' =>'required',
      ]);

      Save::create([
        'content' => $this->content,
      ]);

      $this->reset('content');

      request()->session()->flash('success','saved');
    }
}
