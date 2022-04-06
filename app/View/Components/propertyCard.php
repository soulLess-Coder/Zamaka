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
    public $street;
    public $sector;
    public function __construct($houseNumber, $street, $sector)
    {
        $this->houseNumber = $houseNumber;
        $this->street = $street;
        $this->sector = $sector;
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

    public function makeAddress($houseNumber, $street, $sector){
        $separator = ', ';
        return $address = $houseNumber .= $separator .= $street .= $separator .= $sector;
    }
}
