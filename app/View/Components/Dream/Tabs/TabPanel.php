<?php

namespace App\View\Components\Dream\Tabs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class TabPanel extends Component {
    public $style;


    public function __construct($style = 'primary') {
        $this->style = $style;
    }


    public function render(): View|Closure|string
    {
        return view('components.dream.tabs.tab-panel', ['style' => $this->style]);
    }
}
