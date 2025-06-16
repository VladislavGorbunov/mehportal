<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Region;


class ModalRegions extends Component
{
    public $cities;
    
  
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cities = Region::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-regions');
    }
}
