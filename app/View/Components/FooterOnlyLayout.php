<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FooterOnlyLayout extends Component
{
    public function render()
    {
        return view('layouts.footer_only');
    }
}