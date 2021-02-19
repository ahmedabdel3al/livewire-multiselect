<?php

namespace Bolyfci\LivewireMultiselect\View;

use Illuminate\View\Component;

class Multiselect extends Component
{

    public $options = [];

    public $selected = [];

    public $trackBy;

    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($options, $selected = [], $trackBy = 'id', $title = 'name')
    {
        $this->options = $options;
        $this->selected = $selected;
        $this->trackBy = $trackBy;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('multiselect::components.multiselect');
    }
}
