<?php

namespace App\View\Components;

use Illuminate\View\Component;

class propertyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $houseNumber;
    public function __construct($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.property-card');
    }
}
