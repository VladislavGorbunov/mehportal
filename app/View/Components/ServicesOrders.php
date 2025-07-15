<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\CategoryService;


class ServicesOrders extends Component
{
    public $categories;
   
  
    /**
     * Create a new component instance.
     */
    public function __construct(public $regionSlug)
    {
        $this->categories = CategoryService::where('active', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-orders');
    }
}