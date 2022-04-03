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
    public function __construct($description, $house_number)
    {
        $this->description = $description;
        $this->house_number = $house_number;
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
