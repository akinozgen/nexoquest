<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RomGridItem extends Component
{
    public $rom;
    /**
     * Create a new component instance.
     */
    public function __construct($rom)
    {
        $this->rom = $rom;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $rom = $this->rom;

        return view('components.rom-grid-item', compact('rom'));
    }
}
