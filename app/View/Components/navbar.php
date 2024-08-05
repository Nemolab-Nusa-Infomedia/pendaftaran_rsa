<?php

namespace App\View\Components;

use Closure;
use App\Models\Patient;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $pendingPatientCount = Patient::where('is_accepted', 0)->count();
        return view('components.navbar', compact('pendingPatientCount'));
    }
}
