<?php

namespace App\Http\Livewire;

use Livewire\Component;



// use Illuminate\Routing\Controller as BaseController;

// namespace App\Http\Layout;
// use Illuminate\Resources\Facades\Layouts;

// use Illuminate\View\Concerns\ManagesLayouts;


class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
